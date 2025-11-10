# Best Practices Appliquées au Projet GENESIS

Ce document récapitule toutes les bonnes pratiques de développement Laravel mises en œuvre dans le projet GENESIS pour garantir un code professionnel, maintenable et performant.

---

## 📋 Table des Matières

1. [Architecture](#architecture)
2. [Performance](#performance)
3. [Sécurité](#sécurité)
4. [Tests](#tests)
5. [Mise en Production](#mise-en-production)

---

## 🏗️ Architecture

### ✅ Fat Models, Skinny Controllers

**Principe :** La logique métier doit résider dans les Models, pas dans les Controllers.

**Implémentation :**
- **Models avec Helper Methods** :
  ```php
  // app/Models/Project.php
  public function isPublished(): bool {
      return $this->status === ProjectStatus::PUBLISHED;
  }
  
  public function isFeatured(): bool {
      return $this->featured === true;
  }
  ```
  
- **Controllers minimalistes** : Les controllers délèguent la logique aux Services et Repositories.

### ✅ SOLID Principles

**Single Responsibility :** Chaque classe a une responsabilité unique.
- `ServiceRepository` : Accès aux données des services
- `ContactService` : Gestion de l'envoi d'emails de contact
- `NewsletterService` : Gestion des abonnements newsletter

**Open/Closed :** Extensions via l'héritage et les interfaces sans modifier le code existant.

**Liskov Substitution :** Respect des contrats d'interfaces (pas encore d'interfaces définies, mais architecture prête).

**Interface Segregation :** Méthodes spécifiques dans chaque Repository/Service.

**Dependency Inversion :** Injection de dépendances via le Service Container Laravel.

### ✅ Repository Pattern

**Objectif :** Séparer la logique d'accès aux données de la logique métier.

**Structure :**
```
app/Repositories/
├── ServiceRepository.php      # Gestion des services
├── ProjectRepository.php      # Gestion des projets
├── ArticleRepository.php      # Gestion des articles
└── NewsletterRepository.php   # Gestion des abonnés
```

**Exemple :**
```php
class ProjectRepository {
    public function getAllPublished(): Collection {
        return Cache::remember(
            CacheKeys::PROJECTS_PUBLISHED,
            CacheKeys::TTL_ONE_HOUR,
            fn () => Project::published()->latest()->get()
        );
    }
}
```

### ✅ Service Layer

**Objectif :** Orchestrer la logique métier complexe entre plusieurs repositories ou services externes.

**Exemples :**
- `ContactService` : Validation + envoi d'emails via Queue
- `NewsletterService` : Vérification des doublons + logging
- `BrochureService` : Génération de PDF avec injection de ServiceRepository

### ✅ Form Request Pattern

**Objectif :** Centraliser la validation des données entrantes.

**Implémentation :**
```php
// app/Http/Requests/ContactFormRequest.php
class ContactFormRequest extends FormRequest {
    public function rules(): array {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ];
    }
}
```

**Utilisation dans le Controller :**
```php
public function storeContact(ContactFormRequest $request) {
    $this->contactService->sendContactEmail($request->getContactData());
    return redirect()->back()->with('success', 'Message envoyé !');
}
```

### ✅ Dependency Injection

**Méthode :** Injection via le Service Container Laravel dans les constructeurs.

**Enregistrement dans `AppServiceProvider` :**
```php
public function register(): void {
    $this->app->bind(ServiceRepository::class);
    $this->app->bind(ContactService::class);
    $this->app->bind(BrochureService::class);
}
```

### ✅ Constants pour les Valeurs Codées en Dur

**Objectif :** Éviter les "magic strings" et améliorer la maintenabilité.

**Implémentation :**
```php
// app/Constants/ProjectStatus.php
class ProjectStatus {
    public const DRAFT = 'draft';
    public const PUBLISHED = 'published';
    public const ARCHIVED = 'archived';
    
    public static function isValid(string $status): bool {
        return in_array($status, self::ALL);
    }
}
```

**Utilisation :**
```php
// Dans le Model
public function scopePublished($query) {
    return $query->where('status', ProjectStatus::PUBLISHED); // Au lieu de 'published'
}
```

**Classes Constants créées :**
- `ProjectStatus` : Statuts des projets (draft, published, archived)
- `ProjectCategory` : Catégories de projets avec icônes SVG
- `CacheKeys` : Noms de clés de cache et TTL standardisés

---

## ⚡ Performance

### ✅ Caching (Redis/Memcached)

**Implémentation :** Cache appliqué dans les Repositories pour les requêtes fréquentes.

**Exemple :**
```php
public function getAllPublished(): Collection {
    return Cache::remember(
        CacheKeys::SERVICES_PUBLISHED,
        CacheKeys::TTL_ONE_HOUR, // 3600 secondes
        fn () => Service::published()->orderBy('order')->get()
    );
}
```

**Invalidation automatique avec Model Observers :**
```php
// app/Observers/ServiceObserver.php
class ServiceObserver {
    public function updated(Service $service): void {
        $this->serviceRepository->clearCache();
    }
}
```

**Enregistrement dans `AppServiceProvider::boot()` :**
```php
Service::observe(ServiceObserver::class);
Project::observe(ProjectObserver::class);
Article::observe(ArticleObserver::class);
```

**Configuration recommandée pour production (`.env`) :**
```env
CACHE_STORE=redis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379
```

### ✅ Queue Jobs

**Objectif :** Exécuter les tâches longues (emails, PDF) en arrière-plan pour ne pas bloquer l'utilisateur.

**Implémentation :**
```php
// app/Jobs/SendContactEmail.php
class SendContactEmail implements ShouldQueue {
    use Queueable;
    
    public int $tries = 3; // 3 tentatives
    public int $backoff = 60; // 60 secondes entre les tentatives
    
    public function handle(): void {
        Mail::to(config('mail.from.address'))
            ->send(new ContactMail($this->contactData));
    }
}
```

**Utilisation dans le Service :**
```php
SendContactEmail::dispatch($data); // Ajoute le job à la queue
```

**Configuration pour production (`.env`) :**
```env
QUEUE_CONNECTION=redis
```

**Commande pour exécuter la queue :**
```bash
php artisan queue:work --tries=3 --backoff=60
```

**Supervision recommandée :**
- Installer **Supervisor** (Linux) ou **Task Scheduler** (Windows) pour relancer automatiquement `queue:work`.

### ✅ Optimisation des Requêtes

**Eager Loading pour éviter N+1 :**
```php
// MAUVAIS : N+1 query problem
$articles = Article::all();
foreach ($articles as $article) {
    echo $article->author->name; // 1 query par article
}

// BON : Eager loading
$articles = Article::with('author')->get(); // 2 queries totales
```

**Sélection de colonnes spécifiques :**
```php
Article::select('id', 'title', 'slug', 'created_at')->get();
```

**Indexation de base de données :**
- Ajouter des index sur les colonnes fréquemment recherchées (slug, status, published_at, category).

### ✅ Chunking pour les Grandes Quantités

**Utilisation :** Traiter de grandes quantités de données sans surcharger la mémoire.

```php
Article::published()->chunk(100, function ($articles) {
    foreach ($articles as $article) {
        // Traitement par batch de 100
    }
});
```

---

## 🔒 Sécurité

### ✅ Rate Limiting

**Objectif :** Empêcher les abus (spam, brute force).

**Implémentation dans `routes/web.php` :**
```php
// Contact : 5 soumissions par minute maximum
Route::post('/contact', [PageController::class, 'storeContact'])
    ->middleware('throttle:5,1')
    ->name('contact.store');

// Newsletter : 3 inscriptions par minute maximum
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])
    ->middleware('throttle:3,1')
    ->name('newsletter.subscribe');

// Téléchargement brochure : 10 par minute
Route::get('/brochure/download', [PageController::class, 'downloadBrochure'])
    ->middleware('throttle:10,1')
    ->name('brochure.download');
```

**Personnalisation du message d'erreur :**
- Laravel retourne automatiquement une erreur 429 (Too Many Requests).

### ✅ Validation des Entrées

**Méthode :** Toujours valider via des Form Requests.

**Exemple :**
```php
class ContactFormRequest extends FormRequest {
    public function rules(): array {
        return [
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ];
    }
}
```

### ✅ Protection CSRF

**Implémentation :** Laravel active automatiquement la protection CSRF pour toutes les routes POST/PUT/PATCH/DELETE.

**Blade templates :**
```blade
<form method="POST" action="{{ route('contact.store') }}">
    @csrf <!-- Token CSRF automatique -->
    <!-- ... -->
</form>
```

### ✅ Sécurisation du .env

**Best practices :**
- ✅ `.env` est dans `.gitignore` (jamais commité)
- ✅ Utiliser `.env.example` comme template
- ✅ Générer une nouvelle `APP_KEY` : `php artisan key:generate`
- ✅ Activer `APP_DEBUG=false` en production

### ✅ HTTPS et Encryption

**Configuration recommandée :**
```env
APP_ENV=production
APP_DEBUG=false
SESSION_SECURE_COOKIE=true  # Cookies seulement via HTTPS
```

---

## 🧪 Tests

### ✅ Tests Unitaires

**Couverture actuelle :** 24 tests unitaires (37 assertions)

**Fichiers :**
- `tests/Unit/Repositories/` : ServiceRepository, NewsletterRepository
- `tests/Unit/Services/` : NewsletterService, ContactService, BrochureService

**Framework :** Pest PHP v4

**Commande :**
```bash
php artisan test --testsuite=Unit
```

### ✅ Tests Fonctionnels

**Couverture actuelle :** 41 tests feature (97 assertions)

**Fichiers :**
- `tests/Feature/ContactFormTest.php`
- `tests/Feature/NewsletterTest.php`
- `tests/Feature/BrochureDownloadTest.php`
- `tests/Feature/Auth/*` (17 tests)

**Commande :**
```bash
php artisan test --testsuite=Feature
```

### ✅ CI/CD avec GitHub Actions

**Pipeline actuel (.github/workflows/laravel-ci.yml) :**

**3 jobs parallèles :**
1. **tests** : Exécute les tests avec Xdebug et génère un rapport de couverture (minimum 70%)
2. **code-quality** : Laravel Pint (PSR-12 linting)
3. **security** : `composer audit` pour détecter les vulnérabilités

**Services :**
- MySQL 8.0 avec health checks

**Caching :**
- Composer dependencies
- npm dependencies

**Commande locale pour vérifier :**
```bash
# Tests
php artisan test

# Code quality
./vendor/bin/pint --test

# Security audit
composer audit
```

---

## 🚀 Mise en Production

### ✅ Optimisations Laravel

**Commandes à exécuter avant déploiement :**
```bash
# Cacher les configurations
php artisan config:cache

# Cacher les routes
php artisan route:cache

# Cacher les vues Blade
php artisan view:cache

# Optimiser l'autoloader
composer install --optimize-autoloader --no-dev

# Minifier les assets
npm run build
```

### ✅ Configuration PHP (OPcache)

**Fichier `php.ini` recommandé pour production :**
```ini
opcache.enable=1
opcache.memory_consumption=256
opcache.interned_strings_buffer=16
opcache.max_accelerated_files=10000
opcache.revalidate_freq=2
opcache.validate_timestamps=0  # Désactiver en production
```

### ✅ Laravel Octane (Optionnel)

**Pour des performances extrêmes :**
```bash
composer require laravel/octane
php artisan octane:install --server=swoole
php artisan octane:start --workers=4
```

### ✅ Monitoring et Logging

**Logs Laravel :**
- Configuré dans `config/logging.php`
- Les logs sont dans `storage/logs/laravel.log`

**Surveillance recommandée :**
- **Laravel Telescope** (déjà installé) : Interface web pour debug (dev only)
- **Laravel Horizon** : Monitoring des queues (si utilisation intensive)
- **Sentry** : Capture des erreurs en production

### ✅ Sauvegardes Automatisées

**Recommandation :**
1. **Base de données** : Backup quotidien automatique (cron)
   ```bash
   mysqldump -u user -p database > backup_$(date +%Y%m%d).sql
   ```

2. **Fichiers** : Sauvegarder `storage/app/` et `.env`

3. **Cloud Storage** : Utiliser S3, DigitalOcean Spaces, ou équivalent

---

## 📦 Récapitulatif des Fichiers Ajoutés

### Constants
- `app/Constants/ProjectStatus.php`
- `app/Constants/ProjectCategory.php`
- `app/Constants/CacheKeys.php`

### Observers
- `app/Observers/ServiceObserver.php`
- `app/Observers/ProjectObserver.php`
- `app/Observers/ArticleObserver.php`

### Jobs
- `app/Jobs/SendContactEmail.php`

### Documentation
- `docs/ARCHITECTURE.md`
- `docs/TESTING.md`
- `docs/BEST_PRACTICES.md` (ce fichier)

---

## ✅ Checklist de Qualité

- [x] **Architecture** : Repository Pattern + Service Layer + Form Requests
- [x] **SOLID Principles** : Respect des 5 principes
- [x] **Constants** : Élimination des magic strings
- [x] **Caching** : Implémenté dans les Repositories
- [x] **Cache Invalidation** : Model Observers
- [x] **Queue Jobs** : Emails envoyés en arrière-plan
- [x] **Rate Limiting** : Protection contact/newsletter/brochure
- [x] **Tests** : 65 tests passants (134 assertions)
- [x] **CI/CD** : GitHub Actions avec 3 jobs (tests, quality, security)
- [x] **Documentation** : 3 guides complets (Architecture, Testing, Best Practices)
- [x] **Code Quality** : PSR-12 compliance via Laravel Pint

---

## 📚 Ressources Complémentaires

- [Laravel Official Documentation](https://laravel.com/docs)
- [Laravel Best Practices (GitHub)](https://github.com/alexeymezenin/laravel-best-practices)
- [Pest PHP Documentation](https://pestphp.com)
- [SOLID Principles Explained](https://en.wikipedia.org/wiki/SOLID)

---

**Version :** 1.0  
**Date :** 2025  
**Projet :** GENESIS Website

# Architecture du Projet Genesis

## Vue d'ensemble

Le site web Genesis suit une architecture en couches basée sur les principes SOLID et les design patterns modernes. Cette architecture garantit la maintenabilité, la testabilité et la scalabilité du code.

## Structure en Couches

```
┌─────────────────────────────────────────────┐
│            Presentation Layer               │
│         (Controllers & Views)               │
└─────────────────┬───────────────────────────┘
                  │
┌─────────────────▼───────────────────────────┐
│         Application Layer                   │
│      (Services & Business Logic)            │
└─────────────────┬───────────────────────────┘
                  │
┌─────────────────▼───────────────────────────┐
│          Data Access Layer                  │
│         (Repositories & Models)             │
└─────────────────┬───────────────────────────┘
                  │
┌─────────────────▼───────────────────────────┐
│            Database Layer                   │
│          (MySQL/PostgreSQL)                 │
└─────────────────────────────────────────────┘
```

## Design Patterns Implémentés

### 1. Repository Pattern

**Objectif** : Abstraire l'accès aux données et découpler la logique métier de la couche de persistance.

**Emplacement** : `app/Repositories/`

**Repositories disponibles** :
- `ServiceRepository` - Gestion des services de l'entreprise
- `ProjectRepository` - Gestion des projets/réalisations
- `ArticleRepository` - Gestion des articles de blog
- `NewsletterRepository` - Gestion des abonnés newsletter

**Exemple d'utilisation** :
```php
class ProjectController extends Controller
{
    public function __construct(
        private ProjectRepository $projectRepository
    ) {}

    public function index(): View
    {
        $projects = $this->projectRepository->getAllPublished();
        return view('pages.projects', compact('projects'));
    }
}
```

**Avantages** :
- ✅ Séparation des responsabilités (SRP)
- ✅ Facilite les tests unitaires (mockable)
- ✅ Réutilisabilité du code
- ✅ Changement de base de données facilité

### 2. Service Layer Pattern

**Objectif** : Centraliser la logique métier complexe et orchestrer les opérations entre plusieurs repositories.

**Emplacement** : `app/Services/`

**Services disponibles** :
- `NewsletterService` - Gestion des abonnements newsletter
- `ContactService` - Envoi des messages de contact
- `BrochureService` - Génération des brochures PDF

**Exemple d'utilisation** :
```php
class NewsletterService
{
    public function __construct(
        private NewsletterRepository $repository
    ) {}

    public function subscribe(string $email): NewsletterSubscriber
    {
        // Vérification métier
        if ($this->repository->isSubscribed($email)) {
            throw new \Exception('Adresse déjà abonnée');
        }

        // Création de l'abonné
        $subscriber = $this->repository->subscribe($email);

        // Logging
        Log::info('New newsletter subscription', ['email' => $email]);

        // TODO: Envoyer email de bienvenue
        // event(new NewsletterSubscribed($subscriber));

        return $subscriber;
    }
}
```

**Avantages** :
- ✅ Logique métier centralisée
- ✅ Transaction management
- ✅ Logging et monitoring
- ✅ Gestion d'erreurs cohérente

### 3. Form Request Pattern

**Objectif** : Séparer la validation des données des contrôleurs.

**Emplacement** : `app/Http/Requests/`

**Form Requests disponibles** :
- `ContactFormRequest` - Validation du formulaire de contact
- `NewsletterSubscribeRequest` - Validation de l'abonnement newsletter

**Exemple** :
```php
class ContactFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:20'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ];
    }

    public function getContactData(): array
    {
        return $this->validated();
    }
}
```

**Avantages** :
- ✅ Validation centralisée et réutilisable
- ✅ Messages d'erreur personnalisés
- ✅ Contrôleurs plus légers
- ✅ Méthodes helper pour accéder aux données validées

### 4. Dependency Injection

**Objectif** : Inverser le contrôle des dépendances pour améliorer la testabilité.

**Configuration** : `app/Providers/AppServiceProvider.php`

```php
public function register(): void
{
    // Register Repositories
    $this->app->bind(ServiceRepository::class);
    $this->app->bind(ProjectRepository::class);
    $this->app->bind(ArticleRepository::class);
    $this->app->bind(NewsletterRepository::class);

    // Register Services
    $this->app->bind(NewsletterService::class);
    $this->app->bind(ContactService::class);
    $this->app->bind(BrochureService::class);
}
```

**Avantages** :
- ✅ Couplage faible entre composants
- ✅ Tests unitaires facilités (mocking)
- ✅ Gestion automatique par le container Laravel
- ✅ Facilite le refactoring

## Flux de Données

### Exemple : Abonnement Newsletter

```
1. User submit form
   │
   ↓
2. Route (web.php) → NewsletterController::subscribe()
   │
   ↓
3. NewsletterSubscribeRequest validation
   │
   ↓
4. NewsletterService::subscribe()
   │
   ├─→ NewsletterRepository::isSubscribed() [Check duplicate]
   ├─→ NewsletterRepository::subscribe() [Create record]
   └─→ Log::info() [Logging]
   │
   ↓
5. Return response with success message
```

### Exemple : Téléchargement Brochure

```
1. User clicks download button
   │
   ↓
2. Route → PageController::downloadBrochure()
   │
   ↓
3. BrochureService::generateBrochurePdf()
   │
   ├─→ ServiceRepository::getAllPublished() [Get data]
   ├─→ Pdf::loadView() [Generate PDF]
   └─→ Return download response
   │
   ↓
4. Browser downloads PDF file
```

## Gestion des Erreurs

### Stratégie de Logging

```php
// Success logging
Log::info('Contact form submitted', [
    'email' => $data['email'],
    'subject' => $data['subject']
]);

// Error logging
Log::error('Contact email error', [
    'email' => $data['email'],
    'error' => $e->getMessage()
]);
```

### Exception Handling

```php
try {
    $this->contactService->sendContactEmail($data);
    return redirect()->back()->with('success', 'Message envoyé');
} catch (\Exception $e) {
    return redirect()->back()
        ->with('error', $e->getMessage())
        ->withInput();
}
```

## Tests

### Coverage

- **Tests Unitaires** : 24 tests (37 assertions)
  - Repositories : 15 tests
  - Services : 9 tests

- **Tests Feature** : 41 tests (97 assertions)
  - Authentication : 17 tests
  - Contact Form : 8 tests
  - Newsletter : 5 tests
  - Brochure : 4 tests
  - Profile : 5 tests

- **Total** : 65 tests (134 assertions) ✅

### Structure des Tests

```
tests/
├── Unit/
│   ├── Repositories/
│   │   ├── ServiceRepositoryTest.php
│   │   └── NewsletterRepositoryTest.php
│   └── Services/
│       ├── NewsletterServiceTest.php
│       ├── ContactServiceTest.php
│       └── BrochureServiceTest.php
└── Feature/
    ├── ContactFormTest.php
    ├── NewsletterTest.php
    └── BrochureDownloadTest.php
```

## Conventions de Code

### Naming Conventions

- **Controllers** : `PascalCase` suffixé par `Controller`
- **Services** : `PascalCase` suffixé par `Service`
- **Repositories** : `PascalCase` suffixé par `Repository`
- **Methods** : `camelCase`
- **Routes** : `kebab-case`

### PHPDoc

Tous les méthodes publiques doivent être documentées :

```php
/**
 * Subscribe a new email to the newsletter.
 *
 * @param string $email The email address to subscribe
 * @return NewsletterSubscriber The created subscriber
 * @throws \Exception If email is already subscribed
 */
public function subscribe(string $email): NewsletterSubscriber
{
    // ...
}
```

### Return Types

Toujours déclarer les types de retour :

```php
// ✅ Bon
public function getAllPublished(): Collection
{
    return Service::published()->get();
}

// ❌ Mauvais
public function getAllPublished()
{
    return Service::published()->get();
}
```

## Sécurité

### Validation

- Toutes les entrées utilisateur sont validées via Form Requests
- Messages d'erreur en français pour l'UX
- Protection CSRF automatique (Laravel)

### SQL Injection

- Utilisation exclusive d'Eloquent ORM
- Query Builder pour requêtes complexes
- Pas de SQL brut

### XSS Protection

- Blade templating avec échappement automatique
- `{{ $variable }}` auto-escape
- `{!! $html !!}` pour HTML trusted only

## Performance

### Query Optimization

```php
// ✅ Eager loading
$articles = Article::with('author')->paginate(12);

// ✅ Specific columns
$categories = Article::select('category')->distinct()->pluck('category');

// ✅ Pagination
$projects = $this->projectRepository->getPaginatedPublished(9);
```

### Caching Strategy

Les repositories peuvent facilement être étendus avec du caching :

```php
public function getAllPublished(): Collection
{
    return Cache::remember('services.published', 3600, function () {
        return Service::published()->orderBy('order')->get();
    });
}
```

## Maintenance

### Ajout d'un nouveau Repository

1. Créer `app/Repositories/MonRepository.php`
2. Implémenter les méthodes nécessaires
3. Enregistrer dans `AppServiceProvider::register()`
4. Créer les tests unitaires

### Ajout d'un nouveau Service

1. Créer `app/Services/MonService.php`
2. Injecter les repositories nécessaires
3. Implémenter la logique métier
4. Ajouter logging et error handling
5. Enregistrer dans `AppServiceProvider`
6. Créer les tests unitaires

### Ajout d'un nouveau Form Request

1. Créer `app/Http/Requests/MonRequest.php`
2. Définir les règles de validation
3. Personnaliser les messages d'erreur
4. Ajouter méthodes helper si nécessaire
5. Utiliser dans le contrôleur

## Ressources

- [Laravel Documentation](https://laravel.com/docs)
- [Repository Pattern](https://designpatternsphp.readthedocs.io/en/latest/More/Repository/README.html)
- [Service Layer Pattern](https://martinfowler.com/eaaCatalog/serviceLayer.html)
- [SOLID Principles](https://en.wikipedia.org/wiki/SOLID)

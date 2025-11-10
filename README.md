<div align="center">
  <img src="public/assets/genesis-logo.png" alt="Genesis Logo" width="200"/>
  
  # Genesis - Site Web d'Entreprise

  [![Laravel CI](https://github.com/Juan-Lucas/genesiswebsite/actions/workflows/laravel-ci.yml/badge.svg)](https://github.com/Juan-Lucas/genesiswebsite/actions/workflows/laravel-ci.yml)
  ![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?logo=laravel&logoColor=white)
  ![PHP](https://img.shields.io/badge/PHP-8.3-777BB4?logo=php&logoColor=white)
</div>

## 📖 À propos

**Genesis Entreprise** est une agence digitale spécialisée dans :
- 🎨 Design graphique et UI/UX
- 💻 Développement web et applications
- 📱 Solutions mobiles
- 🚀 Stratégies digitales innovantes

Site vitrine présentant nos services, notre portfolio de projets et nos actualités.

---

## ✨ Fonctionnalités

- 🌍 **Multilingue** : Support Français et Anglais
- 💼 **Portfolio** : Présentation détaillée des projets
- 📝 **Blog** : Publication d'articles et actualités
- 📧 **Contact** : Formulaire avec notifications email
- 📬 **Newsletter** : Système d'abonnement
- 📱 **Responsive** : Design adaptatif mobile/desktop

---

## 🛠️ Technologies

| Composant | Technologie |
|-----------|-------------|
| Backend | Laravel 12 + PHP 8.3 |
| Frontend | Blade + Tailwind CSS + Livewire |
| Build | Vite |
| Database | MySQL / SQLite |
| Tests | Pest PHP v4 |
| CI/CD | GitHub Actions |
| PDF | DomPDF |

---

## 🏗️ Architecture

Le projet suit une **architecture en couches** basée sur les principes SOLID :

```
📦 app/
├── 📁 Http/
│   ├── 📁 Controllers/     # Couche Présentation
│   └── 📁 Requests/        # Validation (Form Requests)
├── 📁 Services/            # Couche Business Logic
├── 📁 Repositories/        # Couche Data Access
└── 📁 Models/              # Eloquent Models
```

### Design Patterns Implémentés

- **Repository Pattern** : Abstraction de l'accès aux données
- **Service Layer Pattern** : Logique métier centralisée
- **Dependency Injection** : Inversion de contrôle
- **Form Request Pattern** : Validation séparée

📚 **Documentation détaillée** : Voir [`docs/ARCHITECTURE.md`](docs/ARCHITECTURE.md)

---

## 🧪 Tests

**Coverage** : 65 tests, 134 assertions ✅

```bash
# Tests unitaires (24 tests)
- Repositories : 15 tests
- Services : 9 tests

# Tests features (41 tests)
- Authentication : 17 tests
- Contact Form : 8 tests
- Newsletter : 5 tests
- Brochure : 4 tests
- Profile : 5 tests
```

📚 **Guide des tests** : Voir [`docs/TESTING.md`](docs/TESTING.md)

---

## 🚀 Installation & Démarrage Rapide

### Prérequis

- PHP 8.3+
- Composer
- Node.js & npm
- MySQL ou SQLite

### Installation

```bash
# 1. Cloner le repository
git clone https://github.com/Juan-Lucas/genesiswebsite.git
cd genesiswebsite

# 2. Installer les dépendances
composer install
npm install

# 3. Configurer l'environnement
cp .env.example .env
php artisan key:generate

# 4. Configurer la base de données
# Éditer .env avec vos credentials MySQL ou utiliser SQLite

# 5. Exécuter les migrations
php artisan migrate --seed

# 6. Builder les assets
npm run build

# 7. Lancer le serveur
php artisan serve
```

🌐 **Accéder au site** : http://localhost:8000

### Démarrer le Worker de Queue

Pour traiter les emails en arrière-plan :

```bash
php artisan queue:work
```

📚 **Guide complet** : Voir [`docs/QUEUE_SETUP.md`](docs/QUEUE_SETUP.md)

---

## 📚 Documentation

| Document | Description |
|----------|-------------|
| [**ARCHITECTURE.md**](docs/ARCHITECTURE.md) | Architecture complète du projet (Repository, Service Layer, SOLID) |
| [**TESTING.md**](docs/TESTING.md) | Guide des tests avec Pest PHP (unitaires, feature, CI/CD) |
| [**BEST_PRACTICES.md**](docs/BEST_PRACTICES.md) | Bonnes pratiques Laravel appliquées (caching, queues, sécurité) |
| [**QUEUE_SETUP.md**](docs/QUEUE_SETUP.md) | Configuration des queues (Database, Redis, Supervisor) |

---

## ⚡ Performance & Optimisation

### Caching Intelligent

- **Cache Repositories** : Requêtes fréquentes mises en cache (1 heure)
- **Model Observers** : Invalidation automatique du cache
- **Constants** : Élimination des "magic strings"

### Queue Jobs

- **Emails asynchrones** : ContactMail envoyé en arrière-plan
- **Retry automatique** : 3 tentatives avec backoff de 60s
- **Logging complet** : Traçabilité des jobs

### Sécurité

- **Rate Limiting** : Protection anti-spam (contact, newsletter, brochure)
- **Form Requests** : Validation centralisée
- **CSRF Protection** : Actif sur toutes les routes POST

---

## 🧪 Tests & CI/CD

### Lancer les Tests

```bash
# Tous les tests
php artisan test

# Tests unitaires uniquement
php artisan test --testsuite=Unit

# Tests feature uniquement
php artisan test --testsuite=Feature

# Avec couverture de code
php artisan test --coverage --min=70
```

### Pipeline GitHub Actions

Le projet utilise une CI/CD automatisée avec **3 jobs** :

1. **tests** : Exécute tous les tests avec couverture minimale de 70%
2. **code-quality** : Laravel Pint (PSR-12 linting)
3. **security** : `composer audit` pour détecter les vulnérabilités

---

## 📝 Scripts Disponibles

```bash
# Développement
npm run dev              # Vite dev server avec hot reload
php artisan serve        # Serveur Laravel

# Production
npm run build            # Build optimisé des assets
php artisan optimize     # Cache config/routes/views

# Tests
php artisan test         # Exécuter tous les tests
./vendor/bin/pint        # Formatter le code (PSR-12)

# Queue
php artisan queue:work   # Worker de queue
php artisan queue:monitor # Surveiller la queue
php artisan queue:failed # Voir les jobs échoués

# Cache
php artisan cache:clear  # Vider le cache
php artisan config:cache # Cacher les configs
```

---

## 🔧 Configuration Recommandée (Production)

### .env Production

```env
APP_ENV=production
APP_DEBUG=false

# Cache avec Redis (recommandé)
CACHE_STORE=redis
QUEUE_CONNECTION=redis

# Sécurité
SESSION_SECURE_COOKIE=true
SESSION_SAME_SITE=strict

# Mail
MAIL_MAILER=smtp
```

### Optimisations Serveur

- **OPcache** : Activer pour PHP 8.3+
- **Redis** : Pour cache et queues hautes performances
- **Supervisor** : Gérer les workers de queue
- **HTTPS** : Certificat SSL/TLS obligatoire

---

## 🧑‍💻 Contributeurs

Développé par **Genesis Dev Team**

# Genesis - Site Web d'Entreprise

[![Laravel CI](https://github.com/Juan-Lucas/genesiswebsite/actions/workflows/laravel-ci.yml/badge.svg)](https://github.com/Juan-Lucas/genesiswebsite/actions/workflows/laravel-ci.yml)
[![Laravel](https://img.shields.io/badge/Laravel-11-red.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.3-blue.svg)](https://php.net)

Site web institutionnel pour Genesis Entreprise, développé avec Laravel 11 et une stack moderne.

## 🌟 Fonctionnalités

- **Site multilingue** (Français/Anglais)
- **Portfolio de projets** avec catégories et galerie d'images
- **Services** avec descriptions détaillées
- **Blog** avec système de gestion d'articles
- **Page À propos** avec présentation de l'entreprise
- **Formulaire de contact** avec envoi d'emails
- **Newsletter** avec système d'abonnement
- **Téléchargement de brochure**
- **Design responsive** avec Tailwind CSS
- **Animations** personnalisées avec JavaScript

## 🛠️ Stack Technique

- **Backend**: Laravel 11
- **Frontend**: Blade Templates + Tailwind CSS
- **Build Tool**: Vite 7.1.12
- **Base de données**: MySQL (production) / SQLite (développement)
- **Testing**: Pest PHP v4
- **CI/CD**: GitHub Actions
- **Code Style**: Laravel Pint (PSR-12)

## 📋 Prérequis

- PHP 8.3 ou supérieur
- Composer
- Node.js 18+ et npm
- MySQL 8.0+ (production) ou SQLite (développement)

## 🚀 Installation

### 1. Cloner le dépôt

```bash
git clone https://github.com/Juan-Lucas/genesiswebsite.git
cd genesiswebsite
```

### 2. Installer les dépendances

```bash
composer install
npm install
```

### 3. Configuration de l'environnement

```bash
cp .env.example .env
php artisan key:generate
```

Configurez votre fichier `.env` avec vos paramètres de base de données et SMTP.

### 4. Base de données

```bash
php artisan migrate --seed
php artisan storage:link
```

### 5. Compiler les assets

```bash
npm run build
```

### 6. Lancer le serveur de développement

```bash
php artisan serve
npm run dev  # Dans un autre terminal pour le hot reload
```

Le site sera accessible sur `http://localhost:8000`

## 🗂️ Structure du Projet

```
├── app/
│   ├── Http/Controllers/
│   │   ├── Auth/              # Contrôleurs d'authentification
│   │   ├── BlogController.php
│   │   ├── LocaleController.php
│   │   ├── NewsletterController.php
│   │   ├── PageController.php
│   │   ├── ProfileController.php
│   │   ├── ProjectController.php
│   │   └── ServiceController.php
│   ├── Mail/
│   │   └── ContactMail.php    # Email de contact
│   ├── Models/
│   │   ├── Article.php
│   │   ├── NewsletterSubscriber.php
│   │   ├── Project.php
│   │   ├── Service.php
│   │   └── User.php
│   └── Middleware/
│       └── SetLocale.php      # Gestion multilingue
├── database/
│   ├── migrations/            # Schéma de la base de données
│   └── seeders/               # Données de test
├── resources/
│   ├── css/
│   │   └── app.css           # Styles Tailwind
│   ├── js/
│   │   ├── app.js
│   │   └── animations.js     # Animations personnalisées
│   └── views/
│       ├── auth/             # Vues d'authentification
│       ├── components/       # Composants Blade
│       ├── layouts/          # Layouts
│       └── pages/            # Pages principales
├── routes/
│   ├── web.php              # Routes principales
│   └── auth.php             # Routes d'authentification
└── tests/
    ├── Feature/             # Tests fonctionnels
    └── Unit/                # Tests unitaires
```

## 🧪 Tests

### Exécuter tous les tests

```bash
php artisan test
# ou
./vendor/bin/pest
```

### Tests avec couverture

```bash
./vendor/bin/pest --coverage
```

### Linter (Code Style)

```bash
./vendor/bin/pint
```

## 🌍 Configuration Multilingue

Le site supporte le français et l'anglais. Les traductions se trouvent dans :

```
lang/
├── en/
│   └── messages.php
└── fr/
    └── messages.php
```

Pour changer de langue, utilisez le sélecteur en haut de page ou accédez à `/lang/{locale}`.

## 📧 Configuration Email

Configurez les paramètres SMTP dans votre fichier `.env` :

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=votre-email@gmail.com
MAIL_PASSWORD=votre-mot-de-passe
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=votre-email@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
```

## 🎨 Personnalisation

### Couleurs Genesis

Le gradient principal du site utilise :
- Couleur de départ : `#667eea`
- Couleur de fin : `#764ba2`

Défini dans `tailwind.config.js` :

```javascript
backgroundImage: {
  'gradient-genesis': 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)',
}
```

## 📦 Déploiement

### Production

1. Configurez votre serveur avec PHP 8.3+, MySQL et Composer
2. Clonez le dépôt sur votre serveur
3. Installez les dépendances : `composer install --optimize-autoloader --no-dev`
4. Compilez les assets : `npm run build`
5. Configurez votre `.env` pour la production
6. Exécutez les migrations : `php artisan migrate --force`
7. Optimisez l'application :

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### CI/CD

Le projet utilise GitHub Actions pour l'intégration continue. À chaque push, le workflow :
- Installe les dépendances
- Compile les assets
- Exécute les migrations
- Lance les tests
- Vérifie le style de code avec Pint

## 📄 Licence

Ce projet est propriétaire et appartient à Genesis Entreprise.

## 👨‍💻 Auteur

Genesis Entreprise - [genesisentreprise.com](https://genesisentreprise.com)

## 📞 Support

Pour toute question ou support, contactez-nous via le formulaire de contact sur le site web.

---

**Version**: 1.0.0  
**Dernière mise à jour**: Novembre 2025

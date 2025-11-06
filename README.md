# 🌟 Genesis - Site Web d'Entreprise

[![Laravel CI](https://github.com/Juan-Lucas/genesiswebsite/actions/workflows/laravel-ci.yml/badge.svg)](https://github.com/Juan-Lucas/genesiswebsite/actions/workflows/laravel-ci.yml)
![Laravel](https://img.shields.io/badge/Laravel-11-FF2D20?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.3-777BB4?logo=php&logoColor=white)

Site web institutionnel moderne pour **Genesis Entreprise**, développé avec Laravel 11.

---

## ✨ Fonctionnalités

- 🌍 **Multilingue** : Français et Anglais
- 💼 **Portfolio** : Projets et services détaillés
- 📝 **Blog** : Système de gestion d'articles
- 📧 **Contact** : Formulaire avec notifications email
- 📬 **Newsletter** : Système d'abonnement
- 📱 **Responsive** : Design adaptatif mobile/desktop

---

## 🛠️ Technologies

| Composant | Technologie |
|-----------|-------------|
| **Backend** | Laravel 11 + PHP 8.3 |
| **Frontend** | Blade + Tailwind CSS |
| **Build** | Vite 7.1 |
| **Base de données** | MySQL / SQLite |
| **Tests** | Pest PHP v4 |
| **CI/CD** | GitHub Actions |

---

## 🚀 Installation rapide

```bash
# Cloner le projet
git clone https://github.com/Juan-Lucas/genesiswebsite.git
cd genesiswebsite

# Installer les dépendances
composer install && npm install

# Configuration
cp .env.example .env
php artisan key:generate

# Base de données
php artisan migrate --seed
php artisan storage:link

# Compiler les assets
npm run build

# Lancer le serveur
php artisan serve
```

Le site sera accessible sur **http://localhost:8000**

---

## 🧪 Développement

```bash
# Tests
php artisan test

# Code style
./vendor/bin/pint

# Dev avec hot-reload
npm run dev
```

---

## 📦 Structure du projet

```
genesiswebsite/
├── app/
│   ├── Http/Controllers/     # Contrôleurs (Pages, Blog, Projects, Services)
│   ├── Models/                # Modèles Eloquent
│   └── Mail/                  # Classes d'email
├── resources/
│   ├── views/                 # Templates Blade
│   ├── css/                   # Styles Tailwind
│   └── js/                    # JavaScript
├── routes/
│   └── web.php                # Routes publiques
├── database/
│   ├── migrations/            # Migrations de base de données
│   └── seeders/               # Données de test
└── tests/                     # Tests automatisés (Pest)
```

---

## 🌐 Routes principales

| Route | Description |
|-------|-------------|
| `/` | Page d'accueil |
| `/services` | Liste des services |
| `/projets` | Portfolio de projets |
| `/blog` | Articles de blog |
| `/contact` | Formulaire de contact |
| `/about` | À propos de l'entreprise |

---

## 📝 Configuration

### Variables d'environnement essentielles

```env
APP_NAME="Genesis Entreprise"
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_DATABASE=genesis

MAIL_MAILER=smtp
MAIL_FROM_ADDRESS=noreply@genesisentreprise.com
MAIL_FROM_NAME="Genesis Entreprise"
```

---

## 🧑‍💻 Contributeurs

Développé par **Genesis Dev Team**

---

<div align="center">

**Version 1.0.0** • [Documentation](https://github.com/Juan-Lucas/genesiswebsite) • [Changelog](CHANGELOG.md)

Made with ❤️ using Laravel

</div>

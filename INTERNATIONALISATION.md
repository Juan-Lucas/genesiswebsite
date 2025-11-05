# Internationalisation (i18n)

## Configuration

Le site supporte désormais le français (FR) et l'anglais (EN).

### Langues disponibles

- **Français (FR)** 🇫🇷 - Langue par défaut
- **English (EN)** 🇬🇧

## Structure des fichiers

```
lang/
├── fr/
│   └── messages.php
└── en/
    └── messages.php
```

## Utilisation dans les vues Blade

### Syntaxe de base

```blade
{{ __('messages.nav.home') }}
{{ __('messages.home.hero.title') }}
```

### Exemples

#### Navigation
```blade
<a href="{{ route('home') }}">
    {{ __('messages.nav.home') }}
</a>
```

#### Titres de section
```blade
<h1>{{ __('messages.home.hero.title') }}</h1>
<p>{{ __('messages.home.hero.description') }}</p>
```

#### Boutons
```blade
<button>{{ __('messages.services.learn_more') }}</button>
```

## Changement de langue

### Via l'interface utilisateur

Un sélecteur de langue est disponible dans la navbar :
- **Desktop** : Menu déroulant avec drapeaux et noms des langues
- **Mobile** : Bouton avec drapeau ouvrant un menu

### Via URL

```
/lang/fr  → Change la langue en français
/lang/en  → Change la langue en anglais
```

### Programmation

```php
// Dans un contrôleur
App::setLocale('fr');

// Vérifier la langue actuelle
$currentLocale = app()->getLocale(); // 'fr' ou 'en'

// Dans une route
Route::get('/lang/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
})->name('locale.switch');
```

## Middleware

Le middleware `SetLocale` gère automatiquement :
1. Récupération de la langue depuis la session
2. Détection de la langue du navigateur
3. Validation de la langue demandée
4. Application de la langue

## Ajouter de nouvelles traductions

### 1. Ajouter dans `lang/fr/messages.php`

```php
'new_section' => [
    'title' => 'Nouveau titre',
    'description' => 'Nouvelle description',
],
```

### 2. Ajouter dans `lang/en/messages.php`

```php
'new_section' => [
    'title' => 'New title',
    'description' => 'New description',
],
```

### 3. Utiliser dans les vues

```blade
{{ __('messages.new_section.title') }}
{{ __('messages.new_section.description') }}
```

## Ajouter une nouvelle langue

### 1. Configuration

Dans `config/app.php` :

```php
'available_locales' => [
    'fr' => ['name' => 'Français', 'flag' => '🇫🇷'],
    'en' => ['name' => 'English', 'flag' => '🇬🇧'],
    'es' => ['name' => 'Español', 'flag' => '🇪🇸'], // Nouvelle langue
],
```

### 2. Créer le dossier

```bash
mkdir lang/es
```

### 3. Créer le fichier de traduction

Copier `lang/fr/messages.php` vers `lang/es/messages.php` et traduire.

## Traductions disponibles

### Navigation
- `nav.home` - Accueil / Home
- `nav.services` - Services / Services
- `nav.about` - À propos / About
- `nav.projects` - Projets / Projects
- `nav.blog` - Blog / Blog
- `nav.contact` - Contact / Contact
- `nav.dashboard` - Dashboard / Dashboard
- `nav.login` - Connexion / Login
- `nav.register` - Inscription / Register

### Page d'accueil
- `home.hero.*` - Section hero
- `home.services.*` - Section services
- `home.stats.*` - Section statistiques
- `home.process.*` - Section processus
- `home.testimonials.*` - Section témoignages
- `home.cta.*` - Section appel à l'action

### Pages
- `services.*` - Page services
- `about.*` - Page à propos
- `projects.*` - Page projets
- `blog.*` - Page blog
- `contact.*` - Page contact
- `footer.*` - Footer

## Bonnes pratiques

1. **Toujours utiliser les clés de traduction** plutôt que du texte en dur
2. **Organiser les traductions** par section/page
3. **Garder la cohérence** entre les fichiers de langues
4. **Tester dans toutes les langues** avant de déployer
5. **Utiliser des noms de clés descriptifs**

## Persistance de la langue

La langue choisie est stockée dans la **session PHP** et persiste pendant toute la navigation de l'utilisateur.

Pour rendre la préférence permanente (même après fermeture du navigateur), vous pouvez :
- Stocker dans un cookie
- Sauvegarder dans le profil utilisateur (si authentifié)
- Utiliser localStorage avec AJAX

## Dépannage

### La langue ne change pas

1. Vider le cache : `php artisan cache:clear`
2. Vérifier que le middleware est bien enregistré dans `bootstrap/app.php`
3. Vérifier que la session fonctionne

### Traductions manquantes

Si une traduction n'existe pas, Laravel affichera la clé : `messages.nav.home`

Pour déboguer :
```blade
@dd(__('messages.nav.home'))
```

### Langue par défaut incorrecte

Vérifier dans `config/app.php` :
```php
'locale' => env('APP_LOCALE', 'fr'),
```

Et dans `.env` :
```
APP_LOCALE=fr
```

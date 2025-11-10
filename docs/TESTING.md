# Guide des Tests - Genesis Website

## Vue d'ensemble

Le projet utilise **Pest PHP v4** comme framework de tests. Nous suivons une stratégie de tests complète avec des tests unitaires pour les composants isolés et des tests features pour les workflows complets.

## Configuration

### Pest Configuration

Fichier : `tests/Pest.php`

```php
uses(Tests\TestCase::class)->in('Feature');

uses(Tests\TestCase::class, RefreshDatabase::class)->in('Unit');

expect()->extend('toBeOne', function () {
    return $this->toBe(1);
});
```

### PHPUnit Configuration

Fichier : `phpunit.xml`

```xml
<testsuites>
    <testsuite name="Unit">
        <directory>tests/Unit</directory>
    </testsuite>
    <testsuite name="Feature">
        <directory>tests/Feature</directory>
    </testsuite>
</testsuites>
```

## Types de Tests

### Tests Unitaires

**Objectif** : Tester un composant isolé (repository, service) sans dépendances externes.

**Emplacement** : `tests/Unit/`

**Caractéristiques** :
- Utilise `RefreshDatabase` pour isolation
- Teste un seul comportement par test
- Pas d'appels HTTP
- Pas de dépendances externes

**Exemple : Repository Test**

```php
<?php

namespace Tests\Unit\Repositories;

use App\Models\Service;
use App\Repositories\ServiceRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ServiceRepositoryTest extends TestCase
{
    use RefreshDatabase;

    private ServiceRepository $repository;

    protected function setUp(): void
    {
        parent::setUp();
        $this->repository = new ServiceRepository();
    }

    public function test_get_all_published_returns_only_published_services(): void
    {
        // Arrange
        Service::factory()->published()->create();
        Service::factory()->published()->create();
        Service::factory()->unpublished()->create();

        // Act
        $services = $this->repository->getAllPublished();

        // Assert
        expect($services)->toHaveCount(2);
        expect($services->every(fn ($service) => $service->published_at !== null))->toBeTrue();
    }
}
```

**Exemple : Service Test**

```php
<?php

namespace Tests\Unit\Services;

use App\Models\NewsletterSubscriber;
use App\Repositories\NewsletterRepository;
use App\Services\NewsletterService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NewsletterServiceTest extends TestCase
{
    use RefreshDatabase;

    private NewsletterService $service;

    protected function setUp(): void
    {
        parent::setUp();
        $repository = new NewsletterRepository();
        $this->service = new NewsletterService($repository);
    }

    public function test_subscribe_creates_new_subscriber_when_email_not_exists(): void
    {
        // Arrange
        $email = 'new@example.com';

        // Act
        $result = $this->service->subscribe($email);

        // Assert
        expect($result)->toBeInstanceOf(NewsletterSubscriber::class);
        expect($result->email)->toBe($email);
        $this->assertDatabaseHas('newsletter_subscribers', ['email' => $email]);
    }

    public function test_subscribe_throws_exception_when_email_already_exists(): void
    {
        // Arrange
        $email = 'existing@example.com';
        NewsletterSubscriber::factory()->create(['email' => $email]);

        // Act & Assert
        expect(fn () => $this->service->subscribe($email))
            ->toThrow(\Exception::class, 'Cette adresse email est déjà abonnée');
    }
}
```

### Tests Feature

**Objectif** : Tester un workflow complet (HTTP request → response).

**Emplacement** : `tests/Feature/`

**Caractéristiques** :
- Teste l'intégration complète
- Simule les requêtes HTTP
- Vérifie les réponses et redirections
- Teste la validation

**Exemple : Contact Form Test**

```php
<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_form_can_be_submitted_with_valid_data(): void
    {
        // Arrange
        Mail::fake();

        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+243 123 456 789',
            'subject' => 'Test Subject',
            'message' => 'This is a test message.',
        ];

        // Act
        $response = $this->post(route('contact.store'), $data);

        // Assert
        $response->assertRedirect();
        $response->assertSessionHas('success');
    }

    public function test_contact_form_requires_name(): void
    {
        // Arrange
        $data = [
            'email' => 'john@example.com',
            'subject' => 'Test',
            'message' => 'Test',
        ];

        // Act
        $response = $this->post(route('contact.store'), $data);

        // Assert
        $response->assertSessionHasErrors('name');
    }
}
```

## Pattern AAA (Arrange-Act-Assert)

Tous nos tests suivent le pattern AAA pour la clarté :

```php
public function test_example(): void
{
    // Arrange - Préparer les données et l'environnement
    $user = User::factory()->create();
    $data = ['name' => 'Test'];

    // Act - Exécuter l'action à tester
    $result = $this->service->doSomething($data);

    // Assert - Vérifier les résultats
    expect($result)->toBeTrue();
    $this->assertDatabaseHas('users', ['name' => 'Test']);
}
```

## Naming Conventions

### Nom des Tests

Format : `test_<action>_<condition>_<expected_result>`

**Exemples** :
```php
test_subscribe_creates_new_subscriber_when_email_not_exists()
test_subscribe_throws_exception_when_email_already_exists()
test_get_all_published_returns_only_published_services()
test_contact_form_requires_valid_email()
```

### Nom des Classes

Format : `<ClassName>Test`

**Exemples** :
```php
ServiceRepositoryTest
NewsletterServiceTest
ContactFormTest
```

## Assertions Pest

### Assertions de Base

```php
expect($value)->toBe(10);
expect($value)->toEqual(['a' => 1]);
expect($value)->toBeTrue();
expect($value)->toBeFalse();
expect($value)->toBeNull();
expect($value)->not->toBeNull();
```

### Assertions de Type

```php
expect($value)->toBeInt();
expect($value)->toBeString();
expect($value)->toBeArray();
expect($value)->toBeInstanceOf(User::class);
```

### Assertions de Collection

```php
expect($collection)->toHaveCount(5);
expect($collection)->toContain('value');
expect($collection)->each->toBeInstanceOf(User::class);
expect($collection)->every(fn ($item) => $item->active === true)->toBeTrue();
```

### Assertions Laravel

```php
$this->assertDatabaseHas('users', ['email' => 'test@example.com']);
$this->assertDatabaseMissing('users', ['email' => 'deleted@example.com']);
$response->assertStatus(200);
$response->assertRedirect();
$response->assertSessionHas('success');
$response->assertSessionHasErrors('email');
```

### Assertions d'Exception

```php
expect(fn () => $this->service->method())
    ->toThrow(\Exception::class);

expect(fn () => $this->service->method())
    ->toThrow(\Exception::class, 'Error message');
```

## Factories

### Définition

```php
<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition(): array
    {
        $title = fake()->sentence(3);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => fake()->paragraph(3),
            'content' => fake()->paragraphs(5, true),
            'published_at' => now(),
        ];
    }

    public function unpublished(): static
    {
        return $this->state(fn (array $attributes) => [
            'published_at' => null,
        ]);
    }

    public function published(): static
    {
        return $this->state(fn (array $attributes) => [
            'published_at' => now(),
        ]);
    }
}
```

### Utilisation

```php
// Créer un service publié
$service = Service::factory()->published()->create();

// Créer plusieurs services
$services = Service::factory()->count(5)->published()->create();

// Créer avec attributs spécifiques
$service = Service::factory()->create([
    'slug' => 'custom-slug',
    'title' => 'Custom Title',
]);

// Make (sans persister)
$service = Service::factory()->make();
```

## Faking

### Mail

```php
use Illuminate\Support\Facades\Mail;

Mail::fake();

// Votre code qui envoie des emails

// Assertions
Mail::assertSent(ContactMail::class);
Mail::assertSent(ContactMail::class, 2); // Envoyé 2 fois
Mail::assertSent(ContactMail::class, function ($mail) {
    return $mail->hasTo('test@example.com');
});
Mail::assertNotSent(WelcomeMail::class);
```

### Events

```php
use Illuminate\Support\Facades\Event;

Event::fake();

// Votre code qui dispatch des events

Event::assertDispatched(OrderShipped::class);
Event::assertNotDispatched(OrderCancelled::class);
```

### Queue

```php
use Illuminate\Support\Facades\Queue;

Queue::fake();

// Votre code qui utilise les queues

Queue::assertPushed(ProcessPodcast::class);
```

## Commandes

### Lancer tous les tests

```bash
php artisan test
```

### Lancer tests unitaires uniquement

```bash
php artisan test --testsuite=Unit
```

### Lancer tests feature uniquement

```bash
php artisan test --testsuite=Feature
```

### Lancer un fichier de test spécifique

```bash
php artisan test tests/Unit/Repositories/ServiceRepositoryTest.php
```

### Lancer un test spécifique

```bash
php artisan test --filter=test_subscribe_creates_new_subscriber
```

### Avec coverage (nécessite Xdebug)

```bash
php artisan test --coverage
```

### Mode parallèle

```bash
php artisan test --parallel
```

## Bonnes Pratiques

### ✅ DO

1. **Un concept par test**
   ```php
   // ✅ Bon
   test_subscribe_creates_new_subscriber()
   test_subscribe_throws_exception_when_duplicate()
   
   // ❌ Mauvais
   test_subscribe() // Teste trop de choses
   ```

2. **Noms descriptifs**
   ```php
   // ✅ Bon
   test_contact_form_requires_valid_email()
   
   // ❌ Mauvais
   test_validation()
   ```

3. **Arrange-Act-Assert**
   ```php
   // ✅ Bon
   public function test_example(): void
   {
       // Arrange
       $data = ['name' => 'Test'];
       
       // Act
       $result = $service->process($data);
       
       // Assert
       expect($result)->toBeTrue();
   }
   ```

4. **Utiliser les factories**
   ```php
   // ✅ Bon
   $user = User::factory()->create();
   
   // ❌ Mauvais
   $user = new User([
       'name' => 'Test',
       'email' => 'test@example.com',
       'password' => bcrypt('password'),
   ]);
   $user->save();
   ```

### ❌ DON'T

1. **Tests dépendants**
   ```php
   // ❌ Mauvais - Test dépend d'un ordre d'exécution
   test_first_creates_user()
   test_second_updates_user() // Dépend du test précédent
   ```

2. **Tests avec logique complexe**
   ```php
   // ❌ Mauvais
   public function test_complex(): void
   {
       if ($condition) {
           expect($value)->toBe(1);
       } else {
           expect($value)->toBe(2);
       }
   }
   ```

3. **Assertions multiples non liées**
   ```php
   // ❌ Mauvais
   public function test_everything(): void
   {
       expect($user->name)->toBe('Test');
       expect($order->total)->toBe(100);
       expect($product->price)->toBe(50);
   }
   ```

## Debugging

### dd() dans les tests

```php
public function test_example(): void
{
    $data = ['test' => 'value'];
    
    dd($data); // Dump and die
    
    // ou
    dump($data); // Dump sans arrêter
}
```

### Verbose Output

```bash
php artisan test -v
php artisan test -vv
php artisan test -vvv
```

### Test Isolation

Si un test échoue de manière intermittente :

```bash
# Lancer 10 fois le même test
for i in {1..10}; do php artisan test --filter=test_name; done
```

## Coverage Report

### Générer un rapport de coverage

```bash
# Nécessite Xdebug
php artisan test --coverage --min=80
```

### Voir le coverage par dossier

```bash
php artisan test --coverage --coverage-html=coverage
```

Ouvrir `coverage/index.html` dans le navigateur.

## CI/CD Integration

Voir `.github/workflows/tests.yml` pour l'intégration avec GitHub Actions.

```yaml
- name: Execute tests
  run: php artisan test
```

## Ressources

- [Pest Documentation](https://pestphp.com/)
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit Documentation](https://phpunit.de/)
- [Test Driven Development](https://en.wikipedia.org/wiki/Test-driven_development)

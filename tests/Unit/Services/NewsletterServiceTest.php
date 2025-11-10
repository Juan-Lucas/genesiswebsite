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

    private NewsletterRepository $repository;

    private NewsletterService $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->repository = new NewsletterRepository;
        $this->service = new NewsletterService($this->repository);
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
            ->toThrow(\Exception::class, 'Cette adresse email est déjà abonnée à notre newsletter.');
    }

    public function test_unsubscribe_removes_subscriber(): void
    {
        // Arrange
        $email = 'unsubscribe@example.com';
        NewsletterSubscriber::factory()->create(['email' => $email]);

        // Act
        $result = $this->service->unsubscribe($email);

        // Assert
        expect($result)->toBeTrue();
        $this->assertDatabaseMissing('newsletter_subscribers', ['email' => $email]);
    }
}

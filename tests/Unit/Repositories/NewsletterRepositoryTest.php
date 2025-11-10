<?php

namespace Tests\Unit\Repositories;

use App\Models\NewsletterSubscriber;
use App\Repositories\NewsletterRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NewsletterRepositoryTest extends TestCase
{
    use RefreshDatabase;

    private NewsletterRepository $repository;

    protected function setUp(): void
    {
        parent::setUp();
        $this->repository = new NewsletterRepository();
    }

    public function test_is_subscribed_returns_true_when_email_exists(): void
    {
        // Arrange
        NewsletterSubscriber::factory()->create(['email' => 'test@example.com']);

        // Act
        $result = $this->repository->isSubscribed('test@example.com');

        // Assert
        expect($result)->toBeTrue();
    }

    public function test_is_subscribed_returns_false_when_email_does_not_exist(): void
    {
        // Act
        $result = $this->repository->isSubscribed('nonexistent@example.com');

        // Assert
        expect($result)->toBeFalse();
    }

    public function test_subscribe_creates_new_subscriber(): void
    {
        // Act
        $subscriber = $this->repository->subscribe('new@example.com');

        // Assert
        expect($subscriber)->toBeInstanceOf(NewsletterSubscriber::class);
        expect($subscriber->email)->toBe('new@example.com');
        $this->assertDatabaseHas('newsletter_subscribers', [
            'email' => 'new@example.com',
        ]);
    }

    public function test_get_all_returns_all_subscribers(): void
    {
        // Arrange
        NewsletterSubscriber::factory()->count(5)->create();

        // Act
        $subscribers = $this->repository->getAll();

        // Assert
        expect($subscribers)->toHaveCount(5);
    }

    public function test_unsubscribe_removes_subscriber_and_returns_true(): void
    {
        // Arrange
        NewsletterSubscriber::factory()->create(['email' => 'remove@example.com']);

        // Act
        $result = $this->repository->unsubscribe('remove@example.com');

        // Assert
        expect($result)->toBeTrue();
        $this->assertDatabaseMissing('newsletter_subscribers', [
            'email' => 'remove@example.com',
        ]);
    }

    public function test_unsubscribe_returns_false_when_email_not_found(): void
    {
        // Act
        $result = $this->repository->unsubscribe('nonexistent@example.com');

        // Assert
        expect($result)->toBeFalse();
    }
}

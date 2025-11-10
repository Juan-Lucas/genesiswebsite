<?php

namespace Tests\Feature;

use App\Models\NewsletterSubscriber;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NewsletterTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_subscribe_to_newsletter_with_valid_email(): void
    {
        // Arrange
        $email = 'subscriber@example.com';

        // Act
        $response = $this->post(route('newsletter.subscribe'), [
            'email' => $email,
        ]);

        // Assert
        $response->assertRedirect();
        $response->assertSessionHas('newsletter_success');
        $this->assertDatabaseHas('newsletter_subscribers', [
            'email' => $email,
        ]);
    }

    public function test_newsletter_subscription_requires_email(): void
    {
        // Act
        $response = $this->post(route('newsletter.subscribe'), []);

        // Assert
        $response->assertSessionHasErrors('email');
    }

    public function test_newsletter_subscription_requires_valid_email_format(): void
    {
        // Act
        $response = $this->post(route('newsletter.subscribe'), [
            'email' => 'invalid-email-format',
        ]);

        // Assert
        $response->assertSessionHasErrors('email');
    }

    public function test_newsletter_subscription_prevents_duplicate_emails(): void
    {
        // Arrange
        $email = 'duplicate@example.com';
        NewsletterSubscriber::factory()->create(['email' => $email]);

        // Act
        $response = $this->post(route('newsletter.subscribe'), [
            'email' => $email,
        ]);

        // Assert
        $response->assertSessionHasErrors('email');
    }

    public function test_newsletter_subscription_from_footer(): void
    {
        // Arrange
        $email = 'footer@example.com';

        // Act
        $response = $this->from('/')->post(route('newsletter.subscribe'), [
            'email' => $email,
        ]);

        // Assert
        $response->assertRedirect('/');
        $response->assertSessionHas('newsletter_success');
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_page_can_be_rendered(): void
    {
        // Act
        $response = $this->get(route('contact'));

        // Assert
        $response->assertStatus(200);
        $response->assertViewIs('pages.contact');
    }

    public function test_contact_form_can_be_submitted_with_valid_data(): void
    {
        // Arrange
        Mail::fake();

        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+243 123 456 789',
            'subject' => 'Test Subject',
            'message' => 'This is a test message for the contact form.',
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
            'subject' => 'Test Subject',
            'message' => 'Test message',
        ];

        // Act
        $response = $this->post(route('contact.store'), $data);

        // Assert
        $response->assertSessionHasErrors('name');
    }

    public function test_contact_form_requires_valid_email(): void
    {
        // Arrange
        $data = [
            'name' => 'John Doe',
            'email' => 'invalid-email',
            'subject' => 'Test Subject',
            'message' => 'Test message',
        ];

        // Act
        $response = $this->post(route('contact.store'), $data);

        // Assert
        $response->assertSessionHasErrors('email');
    }

    public function test_contact_form_requires_subject(): void
    {
        // Arrange
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'message' => 'Test message',
        ];

        // Act
        $response = $this->post(route('contact.store'), $data);

        // Assert
        $response->assertSessionHasErrors('subject');
    }

    public function test_contact_form_requires_message(): void
    {
        // Arrange
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Test Subject',
        ];

        // Act
        $response = $this->post(route('contact.store'), $data);

        // Assert
        $response->assertSessionHasErrors('message');
    }

    public function test_contact_form_phone_is_optional(): void
    {
        // Arrange
        Mail::fake();

        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Test Subject',
            'message' => 'Test message',
            // phone is omitted
        ];

        // Act
        $response = $this->post(route('contact.store'), $data);

        // Assert
        $response->assertRedirect();
        $response->assertSessionHas('success');
    }

    public function test_contact_form_validates_message_max_length(): void
    {
        // Arrange
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Test Subject',
            'message' => str_repeat('a', 5001), // Exceeds max 5000
        ];

        // Act
        $response = $this->post(route('contact.store'), $data);

        // Assert
        $response->assertSessionHasErrors('message');
    }
}

<?php

namespace Tests\Unit\Services;

use App\Mail\ContactMail;
use App\Services\ContactService;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactServiceTest extends TestCase
{
    private ContactService $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = new ContactService;
    }

    public function test_send_contact_email_sends_mail_successfully(): void
    {
        // Arrange
        Mail::fake();

        $data = [
            'name' => 'John Doe',
            'email' => 'test@example.com',
            'phone' => '+243 123 456 789',
            'subject' => 'Test Subject',
            'message' => 'Test message content',
        ];

        // Act
        $this->service->sendContactEmail($data);

        // Assert
        Mail::assertSent(ContactMail::class, function ($mail) {
            return $mail->hasTo(config('mail.from.address'));
        });
    }

    public function test_send_contact_email_throws_exception_when_required_field_missing(): void
    {
        // Arrange
        $data = [
            'name' => 'John Doe',
            'email' => 'test@example.com',
            // Missing 'subject' and 'message'
        ];

        // Act & Assert
        expect(fn () => $this->service->sendContactEmail($data))
            ->toThrow(\Exception::class);
    }
}

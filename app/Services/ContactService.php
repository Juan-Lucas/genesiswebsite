<?php

namespace App\Services;

use App\Jobs\SendContactEmail;
use Illuminate\Support\Facades\Log;

class ContactService
{
    /**
     * Send a contact email using a queued job.
     *
     * @param array<string, mixed> $data
     * @throws \Exception
     */
    public function sendContactEmail(array $data): void
    {
        $this->validateContactData($data);

        try {
            // Dispatch email sending to queue
            SendContactEmail::dispatch($data);

            Log::info('Contact form submitted and queued', [
                'email' => $data['email'],
                'subject' => $data['subject'],
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to queue contact email', [
                'email' => $data['email'] ?? 'unknown',
                'error' => $e->getMessage(),
            ]);

            throw new \Exception('Une erreur est survenue lors de l\'envoi de votre message. Veuillez réessayer plus tard.');
        }
    }

    /**
     * Validate contact data structure.
     *
     * @param array<string, mixed> $data
     * @throws \InvalidArgumentException
     */
    private function validateContactData(array $data): void
    {
        $required = ['name', 'email', 'subject', 'message'];

        foreach ($required as $field) {
            if (!isset($data[$field]) || empty($data[$field])) {
                throw new \InvalidArgumentException("Le champ {$field} est requis.");
            }
        }
    }
}

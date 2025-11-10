<?php

namespace App\Services;

use App\Repositories\NewsletterRepository;
use App\Models\NewsletterSubscriber;
use Illuminate\Support\Facades\Log;

class NewsletterService
{
    public function __construct(
        private NewsletterRepository $repository
    ) {}

    /**
     * Subscribe a user to the newsletter.
     *
     * @throws \Exception
     */
    public function subscribe(string $email): NewsletterSubscriber
    {
        if ($this->repository->isSubscribed($email)) {
            throw new \Exception('Cette adresse email est déjà abonnée à notre newsletter.');
        }

        try {
            $subscriber = $this->repository->subscribe($email);

            Log::info('New newsletter subscription', ['email' => $email]);

            // TODO: Send welcome email
            // event(new NewsletterSubscribed($subscriber));

            return $subscriber;
        } catch (\Exception $e) {
            Log::error('Newsletter subscription failed', [
                'email' => $email,
                'error' => $e->getMessage(),
            ]);

            throw new \Exception('Une erreur est survenue lors de l\'inscription. Veuillez réessayer.');
        }
    }

    /**
     * Unsubscribe a user from the newsletter.
     */
    public function unsubscribe(string $email): bool
    {
        try {
            return $this->repository->unsubscribe($email);
        } catch (\Exception $e) {
            Log::error('Newsletter unsubscription failed', [
                'email' => $email,
                'error' => $e->getMessage(),
            ]);

            return false;
        }
    }
}

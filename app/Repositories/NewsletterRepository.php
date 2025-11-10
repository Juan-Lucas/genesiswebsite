<?php

namespace App\Repositories;

use App\Models\NewsletterSubscriber;

class NewsletterRepository
{
    /**
     * Check if email is already subscribed.
     */
    public function isSubscribed(string $email): bool
    {
        return NewsletterSubscriber::where('email', $email)->exists();
    }

    /**
     * Subscribe a new email to newsletter.
     */
    public function subscribe(string $email): NewsletterSubscriber
    {
        return NewsletterSubscriber::create([
            'email' => $email,
        ]);
    }

    /**
     * Get all subscribers.
     */
    public function getAll()
    {
        return NewsletterSubscriber::orderBy('created_at', 'desc')->get();
    }

    /**
     * Unsubscribe an email.
     */
    public function unsubscribe(string $email): bool
    {
        return NewsletterSubscriber::where('email', $email)->delete();
    }
}

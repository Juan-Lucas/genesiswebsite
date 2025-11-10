<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterSubscribeRequest;
use App\Services\NewsletterService;
use Illuminate\Http\RedirectResponse;

class NewsletterController extends Controller
{
    public function __construct(
        private NewsletterService $newsletterService
    ) {}

    public function subscribe(NewsletterSubscribeRequest $request): RedirectResponse
    {
        try {
            $this->newsletterService->subscribe($request->getEmail());

            return back()->with('newsletter_success', 'Merci pour votre abonnement ! Vous recevrez bientôt nos actualités.');
        } catch (\Exception $e) {
            return back()
                ->with('newsletter_error', $e->getMessage())
                ->withInput();
        }
    }
}

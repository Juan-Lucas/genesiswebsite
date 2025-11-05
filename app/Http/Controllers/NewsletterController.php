<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:newsletter_subscribers,email',
        ], [
            'email.required' => 'L\'adresse email est requise.',
            'email.email' => 'L\'adresse email doit être valide.',
            'email.unique' => 'Cette adresse email est déjà abonnée à notre newsletter.',
        ]);

        if ($validator->fails()) {
            return back()->with('newsletter_error', $validator->errors()->first());
        }

        NewsletterSubscriber::create([
            'email' => $request->email,
        ]);

        return back()->with('newsletter_success', 'Merci pour votre abonnement ! Vous recevrez bientôt nos actualités.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Service;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class PageController extends Controller
{
    /**
     * Display the home page.
     */
    public function home(): View
    {
        $services = [
            [
                'title' => 'Vidéographie',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />',
                'description' => 'Production vidéo professionnelle, spots publicitaires, motion design et prises de vues par drone pour valoriser votre marque.',
                'color' => 'rose',
            ],
            [
                'title' => 'Graphic Design',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42" />',
                'description' => 'Identité visuelle, branding et supports graphiques pour une communication percutante et mémorable.',
                'color' => 'amber',
            ],
            [
                'title' => 'Photography',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" /><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />',
                'description' => 'Photographies professionnelles corporate, événementiel, produits et architecture pour sublimer votre image.',
                'color' => 'emerald',
            ],
            [
                'title' => 'Architecture',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />',
                'description' => 'Conception architecturale, plans, modélisation BIM et rénovation pour donner vie à vos projets.',
                'color' => 'sky',
            ],
            [
                'title' => 'Conception de Logiciels',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />',
                'description' => 'Développement de logiciels sur mesure, ERP, CRM et solutions SaaS adaptées à vos besoins métiers.',
                'color' => 'indigo',
            ],
            [
                'title' => 'Intégration de Progiciels',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" />',
                'description' => 'Déploiement et intégration de progiciels métiers comme SAP, Odoo et Salesforce pour optimiser vos processus.',
                'color' => 'purple',
            ],
        ];

        return view('pages.home', compact('services'));
    }

    /**
     * Display the services page.
     */
    public function services(): View
    {
        $services = Service::published()->orderBy('order', 'asc')->get();

        return view('pages.services', compact('services'));
    }

    /**
     * Display the about page.
     */
    public function about(): View
    {
        return view('pages.about');
    }

    /**
     * Display the contact page.
     */
    public function contact(): View
    {
        return view('pages.contact');
    }

    /**
     * Store a contact form submission.
     */
    public function storeContact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ], [
            'name.required' => 'Le nom est requis.',
            'name.max' => 'Le nom ne doit pas dépasser 255 caractères.',
            'email.required' => 'L\'adresse email est requise.',
            'email.email' => 'L\'adresse email doit être valide.',
            'email.max' => 'L\'adresse email ne doit pas dépasser 255 caractères.',
            'phone.max' => 'Le numéro de téléphone ne doit pas dépasser 20 caractères.',
            'subject.required' => 'Le sujet est requis.',
            'subject.max' => 'Le sujet ne doit pas dépasser 255 caractères.',
            'message.required' => 'Le message est requis.',
            'message.max' => 'Le message ne doit pas dépasser 5000 caractères.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $contactData = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'message' => $request->message,
            ];

            // Send email
            Mail::to(config('mail.from.address'))->send(new ContactMail($contactData));

            return redirect()->back()->with('success', 'Votre message a été envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Une erreur est survenue lors de l\'envoi de votre message. Veuillez réessayer plus tard.')
                ->withInput();
        }
    }

    /**
     * Download the company brochure as PDF.
     */
    public function downloadBrochure(): Response
    {
        $services = Service::published()->get();

        $pdf = Pdf::loadView('pdf.brochure', compact('services'));
        $pdf->setPaper('a4', 'portrait');

        return $pdf->download('Genesis-Brochure-'.date('Y').'.pdf');
    }
}

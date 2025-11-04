@extends('layouts.public')

@section('title', 'Nos Services')

@section('content')
<!-- Page Header -->
<div class="bg-white dark:bg-gray-900 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white sm:text-5xl">
                Nos Services
            </h1>
            <p class="mt-4 text-xl text-gray-500 dark:text-gray-400">
                Des solutions complètes pour tous vos besoins digitaux
            </p>
        </div>
    </div>
</div>

<!-- Services Grid -->
<div class="bg-gray-50 dark:bg-gray-800 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            <!-- Service 1: Web Development -->
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-8">
                    <div class="flex items-center justify-center h-16 w-16 rounded-md bg-indigo-500 text-white mb-4">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">Développement Web</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Création de sites web modernes et responsive avec les dernières technologies (Laravel, React, Vue.js).
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                        <li>✓ Sites vitrine</li>
                        <li>✓ E-commerce</li>
                        <li>✓ Applications web</li>
                        <li>✓ API REST</li>
                    </ul>
                </div>
            </div>

            <!-- Service 2: Mobile Apps -->
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-8">
                    <div class="flex items-center justify-center h-16 w-16 rounded-md bg-indigo-500 text-white mb-4">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">Applications Mobile</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Développement d'applications natives et cross-platform pour iOS et Android.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                        <li>✓ Applications natives</li>
                        <li>✓ React Native / Flutter</li>
                        <li>✓ UI/UX Design</li>
                        <li>✓ Maintenance</li>
                    </ul>
                </div>
            </div>

            <!-- Service 3: Cloud Solutions -->
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-8">
                    <div class="flex items-center justify-center h-16 w-16 rounded-md bg-indigo-500 text-white mb-4">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">Solutions Cloud</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Migration et hébergement cloud avec AWS, Azure, et Google Cloud Platform.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                        <li>✓ Migration cloud</li>
                        <li>✓ DevOps CI/CD</li>
                        <li>✓ Infrastructure as Code</li>
                        <li>✓ Monitoring</li>
                    </ul>
                </div>
            </div>

            <!-- Service 4: Consulting -->
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-8">
                    <div class="flex items-center justify-center h-16 w-16 rounded-md bg-indigo-500 text-white mb-4">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">Consulting IT</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Accompagnement stratégique pour votre transformation digitale.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                        <li>✓ Audit technique</li>
                        <li>✓ Architecture logicielle</li>
                        <li>✓ Stratégie digitale</li>
                        <li>✓ Formation équipes</li>
                    </ul>
                </div>
            </div>

            <!-- Service 5: UI/UX Design -->
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-8">
                    <div class="flex items-center justify-center h-16 w-16 rounded-md bg-indigo-500 text-white mb-4">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">UI/UX Design</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Création d'interfaces utilisateur intuitives et attractives.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                        <li>✓ Design système</li>
                        <li>✓ Prototypage</li>
                        <li>✓ Tests utilisateurs</li>
                        <li>✓ Wireframing</li>
                    </ul>
                </div>
            </div>

            <!-- Service 6: Maintenance -->
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-8">
                    <div class="flex items-center justify-center h-16 w-16 rounded-md bg-indigo-500 text-white mb-4">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">Maintenance & Support</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Support technique et maintenance continue de vos applications.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                        <li>✓ Support 24/7</li>
                        <li>✓ Mises à jour</li>
                        <li>✓ Corrections bugs</li>
                        <li>✓ Optimisation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="bg-white dark:bg-gray-900 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">
            Intéressé par nos services ?
        </h2>
        <p class="mt-4 text-lg text-gray-500 dark:text-gray-400">
            Contactez-nous pour discuter de votre projet
        </p>
        <div class="mt-8">
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                Demander un devis
            </a>
        </div>
    </div>
</div>
@endsection

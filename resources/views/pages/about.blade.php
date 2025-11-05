@extends('layouts.public')

@section('title', 'À propos')

@section('content')
<!-- Page Header -->
<div class="bg-white dark:bg-gray-900 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white sm:text-5xl">
                À propos de Genesis
            </h1>
            <p class="mt-4 text-xl text-gray-500 dark:text-gray-400">
                Votre partenaire de confiance pour l'innovation digitale
            </p>
        </div>
    </div>
</div>

<!-- Company Story -->
<div class="bg-gray-50 dark:bg-gray-800 py-16 relative">
    <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-gray-300 dark:via-gray-600 to-transparent"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-8 items-center">
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">
                    Notre Histoire
                </h2>
                <p class="mt-4 text-lg text-gray-500 dark:text-gray-400">
                    Fondée en 2020, Genesis est née de la passion de créer des solutions digitales innovantes.
                    Notre mission est d'accompagner les entreprises dans leur transformation numérique en offrant
                    des services de haute qualité et un support exceptionnel.
                </p>
                <p class="mt-4 text-lg text-gray-500 dark:text-gray-400">
                    Nous croyons en l'innovation, la collaboration et l'excellence. Chaque projet est une opportunité
                    de repousser les limites et de créer quelque chose d'extraordinaire.
                </p>
            </div>
            <div class="mt-10 lg:mt-0">
                <div class="bg-gradient-to-r from-indigo-500 to-purple-600 rounded-lg p-8 text-white">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center">
                            <div class="text-4xl font-bold">50+</div>
                            <div class="mt-2">Projets réalisés</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold">40+</div>
                            <div class="mt-2">Clients satisfaits</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold">15+</div>
                            <div class="mt-2">Experts</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold">4</div>
                            <div class="mt-2">Années d'expérience</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Our Values -->
<div class="bg-white dark:bg-gray-900 py-16 relative">
    <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-gray-300 dark:via-gray-700 to-transparent"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">
                Nos Valeurs
            </h2>
            <p class="mt-4 text-lg text-gray-500 dark:text-gray-400">
                Les principes qui guident notre travail au quotidien
            </p>
        </div>

        <div class="mt-12 grid grid-cols-1 gap-8 md:grid-cols-3">
            <div class="text-center">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-indigo-100 dark:bg-indigo-900 text-indigo-600 dark:text-indigo-400 mx-auto">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h3 class="mt-6 text-xl font-bold text-gray-900 dark:text-white">Innovation</h3>
                <p class="mt-2 text-gray-500 dark:text-gray-400">
                    Nous adoptons les dernières technologies pour créer des solutions d'avant-garde.
                </p>
            </div>

            <div class="text-center">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-indigo-100 dark:bg-indigo-900 text-indigo-600 dark:text-indigo-400 mx-auto">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="mt-6 text-xl font-bold text-gray-900 dark:text-white">Collaboration</h3>
                <p class="mt-2 text-gray-500 dark:text-gray-400">
                    Nous travaillons main dans la main avec nos clients pour garantir leur succès.
                </p>
            </div>

            <div class="text-center">
                <div class="flex items-center justify-center h-16 w-16 rounded-full bg-indigo-100 dark:bg-indigo-900 text-indigo-600 dark:text-indigo-400 mx-auto">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                    </svg>
                </div>
                <h3 class="mt-6 text-xl font-bold text-gray-900 dark:text-white">Excellence</h3>
                <p class="mt-2 text-gray-500 dark:text-gray-400">
                    Nous visons l'excellence dans chaque aspect de notre travail.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Team Section -->
<div class="bg-gray-50 dark:bg-gray-800 py-16 relative">
    <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-gray-300 dark:via-gray-600 to-transparent"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">
                Notre Équipe
            </h2>
            <p class="mt-4 text-lg text-gray-500 dark:text-gray-400">
                Des experts passionnés à votre service
            </p>
        </div>

        <div class="mt-12 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Team Member 1 -->
            <div class="text-center">
                <div class="mx-auto h-32 w-32 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600"></div>
                <h3 class="mt-6 text-lg font-bold text-gray-900 dark:text-white">Jean Dupont</h3>
                <p class="text-indigo-600 dark:text-indigo-400">CEO & Fondateur</p>
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Expert en transformation digitale</p>
            </div>

            <!-- Team Member 2 -->
            <div class="text-center">
                <div class="mx-auto h-32 w-32 rounded-full bg-gradient-to-br from-blue-500 to-cyan-600"></div>
                <h3 class="mt-6 text-lg font-bold text-gray-900 dark:text-white">Marie Martin</h3>
                <p class="text-indigo-600 dark:text-indigo-400">CTO</p>
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Architecte logiciel senior</p>
            </div>

            <!-- Team Member 3 -->
            <div class="text-center">
                <div class="mx-auto h-32 w-32 rounded-full bg-gradient-to-br from-green-500 to-teal-600"></div>
                <h3 class="mt-6 text-lg font-bold text-gray-900 dark:text-white">Pierre Durand</h3>
                <p class="text-indigo-600 dark:text-indigo-400">Lead Developer</p>
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Full-stack expert</p>
            </div>

            <!-- Team Member 4 -->
            <div class="text-center">
                <div class="mx-auto h-32 w-32 rounded-full bg-gradient-to-br from-pink-500 to-rose-600"></div>
                <h3 class="mt-6 text-lg font-bold text-gray-900 dark:text-white">Sophie Bernard</h3>
                <p class="text-indigo-600 dark:text-indigo-400">UX/UI Designer</p>
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Spécialiste design thinking</p>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="bg-indigo-700 dark:bg-indigo-900 relative">
    <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-indigo-400/0 via-indigo-400/60 to-indigo-400/0"></div>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
        <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
            <span class="block">Rejoignez l'aventure Genesis</span>
            <span class="block text-indigo-200">Commencez votre projet aujourd'hui</span>
        </h2>
        <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
            <div class="inline-flex rounded-md shadow">
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50">
                    Contactez-nous
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

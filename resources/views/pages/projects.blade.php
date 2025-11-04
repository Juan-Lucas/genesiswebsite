@extends('layouts.public')

@section('title', 'Nos Projets')

@section('content')
<!-- Page Header -->
<div class="bg-white dark:bg-gray-900 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white sm:text-5xl">
                Nos Projets
            </h1>
            <p class="mt-4 text-xl text-gray-500 dark:text-gray-400">
                Découvrez nos réalisations et succès clients
            </p>
        </div>
    </div>
</div>

<!-- Projects Grid -->
<div class="bg-gray-50 dark:bg-gray-800 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            <!-- Project 1 -->
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="h-48 bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center">
                    <svg class="h-20 w-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs font-semibold text-indigo-600 dark:text-indigo-400 uppercase">E-commerce</span>
                        <span class="text-xs text-gray-500 dark:text-gray-400">2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">ShopHub</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Plateforme e-commerce complète avec gestion de stock, paiements sécurisés et tableau de bord analytique.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-2 py-1 text-xs bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded">Laravel</span>
                        <span class="px-2 py-1 text-xs bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded">Vue.js</span>
                        <span class="px-2 py-1 text-xs bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded">Stripe</span>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="h-48 bg-gradient-to-br from-blue-500 to-cyan-600 flex items-center justify-center">
                    <svg class="h-20 w-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs font-semibold text-blue-600 dark:text-blue-400 uppercase">Mobile App</span>
                        <span class="text-xs text-gray-500 dark:text-gray-400">2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">FitTracker</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Application mobile de suivi fitness avec intégration IA pour recommandations personnalisées.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-2 py-1 text-xs bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded">React Native</span>
                        <span class="px-2 py-1 text-xs bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded">Node.js</span>
                        <span class="px-2 py-1 text-xs bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded">TensorFlow</span>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="h-48 bg-gradient-to-br from-green-500 to-teal-600 flex items-center justify-center">
                    <svg class="h-20 w-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs font-semibold text-green-600 dark:text-green-400 uppercase">Cloud</span>
                        <span class="text-xs text-gray-500 dark:text-gray-400">2023</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">CloudSync Pro</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Solution de synchronisation cloud sécurisée pour entreprises avec chiffrement de bout en bout.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-2 py-1 text-xs bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded">AWS</span>
                        <span class="px-2 py-1 text-xs bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded">Python</span>
                        <span class="px-2 py-1 text-xs bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded">Docker</span>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="h-48 bg-gradient-to-br from-yellow-500 to-orange-600 flex items-center justify-center">
                    <svg class="h-20 w-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs font-semibold text-orange-600 dark:text-orange-400 uppercase">Education</span>
                        <span class="text-xs text-gray-500 dark:text-gray-400">2023</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">EduLearn</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Plateforme d'apprentissage en ligne avec cours interactifs, quiz et suivi de progression.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-2 py-1 text-xs bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded">Next.js</span>
                        <span class="px-2 py-1 text-xs bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded">PostgreSQL</span>
                        <span class="px-2 py-1 text-xs bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded">Tailwind</span>
                    </div>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="h-48 bg-gradient-to-br from-pink-500 to-rose-600 flex items-center justify-center">
                    <svg class="h-20 w-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs font-semibold text-pink-600 dark:text-pink-400 uppercase">SaaS</span>
                        <span class="text-xs text-gray-500 dark:text-gray-400">2023</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">TaskMaster</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Outil de gestion de projets avec collaboration en temps réel et intégrations multiples.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-2 py-1 text-xs bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded">Laravel</span>
                        <span class="px-2 py-1 text-xs bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded">Livewire</span>
                        <span class="px-2 py-1 text-xs bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded">Redis</span>
                    </div>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="h-48 bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center">
                    <svg class="h-20 w-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs font-semibold text-purple-600 dark:text-purple-400 uppercase">Analytics</span>
                        <span class="text-xs text-gray-500 dark:text-gray-400">2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">DataViz Pro</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Dashboard analytique avancé avec visualisations interactives et rapports personnalisables.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-2 py-1 text-xs bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded">React</span>
                        <span class="px-2 py-1 text-xs bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded">D3.js</span>
                        <span class="px-2 py-1 text-xs bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded">MongoDB</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Stats Section -->
<div class="bg-white dark:bg-gray-900 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">
                Notre Impact
            </h2>
        </div>
        <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
            <div class="text-center">
                <div class="text-4xl font-bold text-indigo-600 dark:text-indigo-400">50+</div>
                <div class="mt-2 text-gray-600 dark:text-gray-400">Projets livrés</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-indigo-600 dark:text-indigo-400">98%</div>
                <div class="mt-2 text-gray-600 dark:text-gray-400">Satisfaction client</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-indigo-600 dark:text-indigo-400">1M+</div>
                <div class="mt-2 text-gray-600 dark:text-gray-400">Utilisateurs actifs</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-indigo-600 dark:text-indigo-400">24/7</div>
                <div class="mt-2 text-gray-600 dark:text-gray-400">Support technique</div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="bg-gray-50 dark:bg-gray-800 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">
            Votre projet est le prochain ?
        </h2>
        <p class="mt-4 text-lg text-gray-500 dark:text-gray-400">
            Discutons de votre vision et créons quelque chose d'extraordinaire ensemble
        </p>
        <div class="mt-8">
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                Démarrer un projet
            </a>
        </div>
    </div>
</div>
@endsection

@extends('layouts.public')

@section('title', 'Nos Projets')

@section('content')
<!-- Hero Section -->
<div class="relative bg-gradient-to-b from-gray-900 via-gray-900 to-white dark:to-gray-900 overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-sky-500/20 dark:bg-sky-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-cyan-500/20 dark:bg-cyan-500/10 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 sm:py-32">
        <div class="text-center">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 dark:bg-white/5 backdrop-blur-sm border border-white/20 rounded-full mb-6">
                <svg class="h-5 w-5 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span class="text-sm font-medium text-white">Portfolio</span>
            </div>

            <h1 class="text-4xl font-extrabold text-white sm:text-5xl md:text-6xl">
                <span class="block">Nos Projets</span>
                <span class="block bg-gradient-to-r from-sky-400 via-cyan-400 to-blue-500 bg-clip-text text-transparent">
                    Réalisations & Succès
                </span>
            </h1>
            <p class="mt-6 max-w-2xl mx-auto text-xl text-gray-300">
                Découvrez comment nous transformons les idées en solutions digitales innovantes et performantes
            </p>
        </div>
    </div>

    <!-- Wave separator -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-12 sm:h-16 text-gray-50 dark:text-gray-800" preserveAspectRatio="none" viewBox="0 0 1200 120" fill="currentColor">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
        </svg>
    </div>
</div>

<!-- Projects Grid -->
<div class="bg-gray-50 dark:bg-gray-800 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            <!-- Project 1 -->
            <div class="group bg-white dark:bg-gray-700 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative h-56 bg-gradient-to-br from-sky-500 via-cyan-500 to-blue-600 flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-sky-500/20 to-blue-600/20 group-hover:scale-110 transition-transform duration-300"></div>
                    <div class="relative">
                        <div class="absolute inset-0 bg-sky-400/50 blur-xl group-hover:blur-2xl transition-all duration-300"></div>
                        <svg class="relative h-24 w-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                        </svg>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 text-xs font-semibold bg-gradient-to-r from-sky-500 to-cyan-500 text-white rounded-full">
                            <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                            </svg>
                            E-commerce
                        </span>
                        <span class="text-xs font-medium text-gray-500 dark:text-gray-400">2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-sky-600 dark:group-hover:text-sky-400 transition-colors">ShopHub</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">
                        Plateforme e-commerce complète avec gestion de stock avancée, paiements sécurisés multi-devises et tableau de bord analytique en temps réel.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 text-xs font-medium bg-sky-100 dark:bg-sky-900/30 text-sky-700 dark:text-sky-300 rounded-full">Laravel</span>
                        <span class="px-3 py-1 text-xs font-medium bg-sky-100 dark:bg-sky-900/30 text-sky-700 dark:text-sky-300 rounded-full">Vue.js</span>
                        <span class="px-3 py-1 text-xs font-medium bg-sky-100 dark:bg-sky-900/30 text-sky-700 dark:text-sky-300 rounded-full">Stripe</span>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="group bg-white dark:bg-gray-700 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative h-56 bg-gradient-to-br from-cyan-500 via-blue-500 to-indigo-600 flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/20 to-indigo-600/20 group-hover:scale-110 transition-transform duration-300"></div>
                    <div class="relative">
                        <div class="absolute inset-0 bg-cyan-400/50 blur-xl group-hover:blur-2xl transition-all duration-300"></div>
                        <svg class="relative h-24 w-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 text-xs font-semibold bg-gradient-to-r from-cyan-500 to-blue-500 text-white rounded-full">
                            <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                            Mobile App
                        </span>
                        <span class="text-xs font-medium text-gray-500 dark:text-gray-400">2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-cyan-600 dark:group-hover:text-cyan-400 transition-colors">FitTracker</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">
                        Application mobile de suivi fitness avec intégration IA pour recommandations personnalisées et coaching adaptatif.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 text-xs font-medium bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-full">React Native</span>
                        <span class="px-3 py-1 text-xs font-medium bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-full">Node.js</span>
                        <span class="px-3 py-1 text-xs font-medium bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-full">TensorFlow</span>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="group bg-white dark:bg-gray-700 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative h-56 bg-gradient-to-br from-emerald-500 via-teal-500 to-cyan-600 flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/20 to-cyan-600/20 group-hover:scale-110 transition-transform duration-300"></div>
                    <div class="relative">
                        <div class="absolute inset-0 bg-emerald-400/50 blur-xl group-hover:blur-2xl transition-all duration-300"></div>
                        <svg class="relative h-24 w-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                        </svg>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 text-xs font-semibold bg-gradient-to-r from-emerald-500 to-teal-500 text-white rounded-full">
                            <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                            </svg>
                            Cloud
                        </span>
                        <span class="text-xs font-medium text-gray-500 dark:text-gray-400">2023</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors">CloudSync Pro</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">
                        Solution de synchronisation cloud sécurisée pour entreprises avec chiffrement de bout en bout et haute disponibilité.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 text-xs font-medium bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 rounded-full">AWS</span>
                        <span class="px-3 py-1 text-xs font-medium bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 rounded-full">Python</span>
                        <span class="px-3 py-1 text-xs font-medium bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 rounded-full">Docker</span>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="group bg-white dark:bg-gray-700 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative h-56 bg-gradient-to-br from-amber-500 via-orange-500 to-red-600 flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-amber-500/20 to-red-600/20 group-hover:scale-110 transition-transform duration-300"></div>
                    <div class="relative">
                        <div class="absolute inset-0 bg-amber-400/50 blur-xl group-hover:blur-2xl transition-all duration-300"></div>
                        <svg class="relative h-24 w-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 text-xs font-semibold bg-gradient-to-r from-amber-500 to-orange-500 text-white rounded-full">
                            <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                            Education
                        </span>
                        <span class="text-xs font-medium text-gray-500 dark:text-gray-400">2023</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-orange-600 dark:group-hover:text-orange-400 transition-colors">EduLearn</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">
                        Plateforme d'apprentissage en ligne avec cours interactifs, quiz gamifiés et suivi de progression détaillé.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 text-xs font-medium bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-full">Next.js</span>
                        <span class="px-3 py-1 text-xs font-medium bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-full">PostgreSQL</span>
                        <span class="px-3 py-1 text-xs font-medium bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-full">Tailwind</span>
                    </div>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="group bg-white dark:bg-gray-700 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative h-56 bg-gradient-to-br from-pink-500 via-rose-500 to-red-600 flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-pink-500/20 to-red-600/20 group-hover:scale-110 transition-transform duration-300"></div>
                    <div class="relative">
                        <div class="absolute inset-0 bg-pink-400/50 blur-xl group-hover:blur-2xl transition-all duration-300"></div>
                        <svg class="relative h-24 w-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 text-xs font-semibold bg-gradient-to-r from-pink-500 to-rose-500 text-white rounded-full">
                            <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            SaaS
                        </span>
                        <span class="text-xs font-medium text-gray-500 dark:text-gray-400">2023</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-pink-600 dark:group-hover:text-pink-400 transition-colors">TaskMaster</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">
                        Outil de gestion de projets avec collaboration en temps réel, intégrations multiples et automatisations avancées.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 text-xs font-medium bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-full">Laravel</span>
                        <span class="px-3 py-1 text-xs font-medium bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-full">Livewire</span>
                        <span class="px-3 py-1 text-xs font-medium bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-full">Redis</span>
                    </div>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="group bg-white dark:bg-gray-700 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative h-56 bg-gradient-to-br from-purple-500 via-indigo-500 to-blue-600 flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/20 to-blue-600/20 group-hover:scale-110 transition-transform duration-300"></div>
                    <div class="relative">
                        <div class="absolute inset-0 bg-purple-400/50 blur-xl group-hover:blur-2xl transition-all duration-300"></div>
                        <svg class="relative h-24 w-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 text-xs font-semibold bg-gradient-to-r from-purple-500 to-indigo-500 text-white rounded-full">
                            <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                            Analytics
                        </span>
                        <span class="text-xs font-medium text-gray-500 dark:text-gray-400">2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">DataViz Pro</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">
                        Dashboard analytique avancé avec visualisations interactives, rapports personnalisables et prédictions intelligentes.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 text-xs font-medium bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-full">React</span>
                        <span class="px-3 py-1 text-xs font-medium bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-full">D3.js</span>
                        <span class="px-3 py-1 text-xs font-medium bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-full">MongoDB</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Stats Section -->
<div class="bg-white dark:bg-gray-900 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                Notre Impact en
                <span class="bg-gradient-to-r from-sky-500 via-cyan-500 to-blue-600 bg-clip-text text-transparent">Chiffres</span>
            </h2>
            <p class="mt-4 text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Des résultats mesurables qui témoignent de notre engagement et de notre expertise
            </p>
        </div>
        <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
            <div class="text-center group">
                <div class="text-5xl font-bold bg-gradient-to-r from-sky-500 to-cyan-500 bg-clip-text text-transparent mb-2">150+</div>
                <div class="text-base font-medium text-gray-600 dark:text-gray-400">Projets livrés</div>
            </div>
            <div class="text-center group">
                <div class="text-5xl font-bold bg-gradient-to-r from-cyan-500 to-blue-500 bg-clip-text text-transparent mb-2">98%</div>
                <div class="text-base font-medium text-gray-600 dark:text-gray-400">Satisfaction client</div>
            </div>
            <div class="text-center group">
                <div class="text-5xl font-bold bg-gradient-to-r from-blue-500 to-indigo-500 bg-clip-text text-transparent mb-2">2M+</div>
                <div class="text-base font-medium text-gray-600 dark:text-gray-400">Utilisateurs actifs</div>
            </div>
            <div class="text-center group">
                <div class="text-5xl font-bold bg-gradient-to-r from-indigo-500 to-purple-500 bg-clip-text text-transparent mb-2">24/7</div>
                <div class="text-base font-medium text-gray-600 dark:text-gray-400">Support technique</div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="relative bg-gradient-to-br from-sky-500 via-cyan-500 to-blue-600 dark:from-sky-900 dark:via-cyan-900 dark:to-blue-900 overflow-hidden">
    <!-- Decorative elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
        <h2 class="text-3xl font-extrabold text-white sm:text-4xl md:text-5xl">
            Votre Projet est le Prochain ?
        </h2>
        <p class="mt-6 text-lg text-white/90 max-w-2xl mx-auto">
            Discutons de votre vision et créons ensemble quelque chose d'extraordinaire qui marquera les esprits
        </p>
        <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="group inline-flex items-center justify-center px-8 py-4 bg-white text-sky-600 font-semibold rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-300">
                <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Démarrer un projet
                <svg class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
            <a href="{{ route('services') }}" class="group inline-flex items-center justify-center px-8 py-4 bg-white/10 backdrop-blur-sm text-white font-semibold rounded-xl border-2 border-white/30 hover:bg-white/20 hover:border-white/50 transition-all duration-300">
                <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Nos services
            </a>
        </div>
    </div>
</div>
@endsection

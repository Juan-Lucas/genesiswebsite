@extends('layouts.public')

@section('title', 'À propos')

@section('content')
<!-- Hero Section -->
<div class="relative bg-gradient-to-b from-gray-900 via-gray-900 to-white dark:to-gray-900 overflow-hidden">
    <!-- Decorative background -->
    <div class="absolute inset-0">
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-genesis-blue-500/20 rounded-full blur-3xl parallax-slow float-animation" data-speed="0.3"></div>
        <div class="absolute bottom-0 left-1/4 w-96 h-96 bg-genesis-purple-600/20 rounded-full blur-3xl parallax-fast float-animation" data-speed="0.5"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Contenu texte -->
            <div class="text-center lg:text-left">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 dark:bg-gray-800/50 backdrop-blur-sm border border-white/20 dark:border-gray-700 mb-8 pulse-glow shimmer animate-on-scroll">
                    <svg class="h-4 w-4 text-genesis-blue-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-medium text-white dark:text-gray-200">Votre partenaire de confiance</span>
                </div>

                <!-- Title -->
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold text-white mb-6 leading-tight animate-on-scroll">
                    À propos de <span class="bg-gradient-genesis bg-clip-text text-transparent">Genesis</span>
                </h1>
                <p class="mt-6 text-xl md:text-2xl text-gray-300 dark:text-gray-400 max-w-3xl lg:max-w-none leading-relaxed animate-on-scroll">
                    Votre partenaire de confiance pour l'innovation digitale depuis 2020
                </p>
            </div>

            <!-- Illustration -->
            <div class="hidden lg:block animate-on-scroll opacity-0 translate-x-10">
                <x-illustrations.team-collaboration class="w-full max-w-md h-auto drop-shadow-2xl opacity-90" />
            </div>
        </div>
    </div>

    <!-- Wave separator -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-24 fill-gray-50 dark:fill-gray-800" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
        </svg>
    </div>
</div>

<!-- Story Section -->
<div class="bg-gray-50 dark:bg-gray-800 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
            <!-- Text content -->
            <div class="space-y-6">
                <div>
                    <h2 class="text-base font-semibold text-sky-600 dark:text-sky-400 tracking-wide uppercase">Notre Histoire</h2>
                    <p class="mt-2 text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white leading-tight">
                        Une passion pour l'innovation
                    </p>
                </div>

                <div class="prose prose-lg dark:prose-invert max-w-none">
                    <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                        Fondée en <span class="font-semibold text-sky-600 dark:text-sky-400">2020</span>, Genesis est née de la passion de créer des solutions digitales innovantes.
                        Notre mission est d'accompagner les entreprises dans leur transformation numérique en offrant
                        des services de haute qualité et un support exceptionnel.
                    </p>
                    <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                        Nous croyons en <span class="font-semibold text-sky-600 dark:text-sky-400">l'innovation</span>,
                        <span class="font-semibold text-cyan-600 dark:text-cyan-400">la collaboration</span> et
                        <span class="font-semibold text-blue-600 dark:text-blue-400">l'excellence</span>.
                        Chaque projet est une opportunité de repousser les limites et de créer quelque chose d'extraordinaire.
                    </p>
                </div>

                <!-- Download Brochure Button -->
                <div class="pt-4">
                    <a href="{{ route('brochure.download') }}" class="inline-flex items-center gap-3 px-6 py-3 bg-gradient-genesis text-white rounded-lg font-semibold hover:shadow-xl hover:scale-105 transition-all duration-300 group">
                        <svg class="w-5 h-5 group-hover:animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span>Télécharger notre brochure (PDF)</span>
                    </a>
                </div>

                <!-- Feature list -->
                <div class="grid grid-cols-2 gap-4 pt-6">
                    <div class="flex items-start gap-3 animate-on-scroll" style="animation-delay: 0.1s;">
                        <div class="flex-shrink-0 h-10 w-10 rounded-lg bg-genesis-blue-100 dark:bg-genesis-blue-900/30 flex items-center justify-center">
                            <svg class="h-6 w-6 text-sky-600 dark:text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900 dark:text-white">Qualité garantie</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Standards élevés</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 animate-on-scroll" style="animation-delay: 0.2s;">
                        <div class="flex-shrink-0 h-10 w-10 rounded-lg bg-genesis-purple-100 dark:bg-genesis-purple-900/30 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <svg class="h-6 w-6 text-cyan-600 dark:text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900 dark:text-white">Rapidité</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Livraison agile</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats card -->
            <div class="mt-12 lg:mt-0 animate-on-scroll">
                <x-illustrations.success class="w-full h-auto max-w-lg mx-auto lg:max-w-none drop-shadow-2xl mb-8" />

                <div class="relative group card-3d">
                    <!-- Glow effect -->
                    <div class="absolute inset-0 bg-gradient-genesis rounded-2xl blur-xl opacity-30 group-hover:opacity-50 transition-opacity"></div>

                    <!-- Card content -->
                    <div class="relative bg-gradient-genesis rounded-2xl p-8 text-white shadow-2xl">
                        <div class="absolute top-0 right-0 -mt-4 -mr-4 h-24 w-24 rounded-full bg-white/10 blur-2xl"></div>
                        <div class="absolute bottom-0 left-0 -mb-4 -ml-4 h-32 w-32 rounded-full bg-white/10 blur-2xl"></div>

                        <div class="relative grid grid-cols-2 gap-8">
                            <div class="text-center p-4 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 hover:bg-white/20 transition-all duration-300 hover:scale-105 stat-card">
                                <div class="text-5xl font-bold mb-2"><span data-count="150">0</span>+</div>
                                <div class="text-sm uppercase tracking-wider text-white/90">Projets réalisés</div>
                            </div>
                            <div class="text-center p-4 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 hover:bg-white/20 transition-all duration-300 hover:scale-105 stat-card">
                                <div class="text-5xl font-bold mb-2"><span data-count="98">0</span>%</div>
                                <div class="text-sm uppercase tracking-wider text-white/90">Clients satisfaits</div>
                            </div>
                            <div class="text-center p-4 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 hover:bg-white/20 transition-all duration-300 hover:scale-105 stat-card">
                                <div class="text-5xl font-bold mb-2"><span data-count="25">0</span>+</div>
                                <div class="text-sm uppercase tracking-wider text-white/90">Experts passionnés</div>
                            </div>
                            <div class="text-center p-4 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 hover:bg-white/20 transition-all duration-300 hover:scale-105 stat-card">
                                <div class="text-5xl font-bold mb-2"><span data-count="10">0</span>+</div>
                                <div class="text-sm uppercase tracking-wider text-white/90">Années d'expérience</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Our Values -->
<div class="bg-white dark:bg-gray-900 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <x-illustrations.innovation class="w-64 h-auto mx-auto mb-8 opacity-90" />
            <h2 class="text-base font-semibold text-sky-600 dark:text-sky-400 tracking-wide uppercase">Nos Valeurs</h2>
            <p class="mt-2 text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white">
                Les principes qui nous guident
            </p>
            <p class="mt-4 text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Notre culture et nos valeurs définissent qui nous sommes et comment nous travaillons
            </p>
        </div>

        <div class="grid grid-cols-1 gap-8 md:grid-cols-3 stagger-parent">
            <!-- Value 1 -->
            <div class="group relative bg-gradient-to-br from-gray-50 to-white dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-200 dark:border-gray-700 stagger-child card-3d animate-on-scroll opacity-0 translate-y-10">
                <div class="absolute inset-0 bg-gradient-genesis opacity-10 rounded-2xl group-hover:opacity-20 transition-opacity"></div>

                <div class="relative">
                    <!-- Icon -->
                    <div class="relative inline-flex items-center justify-center h-16 w-16 mb-6">
                        <div class="absolute inset-0 bg-gradient-genesis rounded-xl blur-lg opacity-50 group-hover:opacity-75 transition-opacity"></div>
                        <div class="relative flex items-center justify-center h-16 w-16 rounded-xl bg-gradient-genesis text-white group-hover:scale-110 transition-transform">
                            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                            </svg>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 group-hover:text-genesis-blue-600 dark:group-hover:text-genesis-blue-400 transition-colors">
                        Innovation
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Nous adoptons les dernières technologies et méthodologies pour créer des solutions d'avant-garde qui font la différence.
                    </p>
                </div>
            </div>

            <!-- Value 2 -->
            <div class="group relative bg-gradient-to-br from-gray-50 to-white dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-200 dark:border-gray-700 stagger-child card-3d animate-on-scroll opacity-0 translate-y-10">
                <div class="absolute inset-0 bg-gradient-genesis opacity-10 rounded-2xl group-hover:opacity-20 transition-opacity"></div>

                <div class="relative">
                    <!-- Icon -->
                    <div class="relative inline-flex items-center justify-center h-16 w-16 mb-6">
                        <div class="absolute inset-0 bg-gradient-genesis rounded-xl blur-lg opacity-50 group-hover:opacity-75 transition-opacity"></div>
                        <div class="relative flex items-center justify-center h-16 w-16 rounded-xl bg-gradient-genesis text-white group-hover:scale-110 transition-transform">
                            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 group-hover:text-genesis-blue-600 dark:group-hover:text-genesis-blue-400 transition-colors">
                        Collaboration
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Nous travaillons main dans la main avec nos clients pour comprendre leurs besoins et garantir leur succès.
                    </p>
                </div>
            </div>

            <!-- Value 3 -->
            <div class="group relative bg-gradient-to-br from-gray-50 to-white dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-200 dark:border-gray-700 stagger-child card-3d animate-on-scroll opacity-0 translate-y-10">
                <div class="absolute inset-0 bg-gradient-genesis opacity-10 rounded-2xl group-hover:opacity-20 transition-opacity"></div>

                <div class="relative">
                    <!-- Icon -->
                    <div class="relative inline-flex items-center justify-center h-16 w-16 mb-6">
                        <div class="absolute inset-0 bg-gradient-genesis rounded-xl blur-lg opacity-50 group-hover:opacity-75 transition-opacity"></div>
                        <div class="relative flex items-center justify-center h-16 w-16 rounded-xl bg-gradient-genesis text-white group-hover:scale-110 transition-transform">
                            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                            </svg>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 group-hover:text-genesis-purple-600 dark:group-hover:text-genesis-purple-400 transition-colors">
                        Excellence
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Nous visons l'excellence dans chaque aspect de notre travail, de la conception à la livraison finale.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team Section -->
<div class="bg-gray-50 dark:bg-gray-800 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-base font-semibold text-sky-600 dark:text-sky-400 tracking-wide uppercase">Notre Équipe</h2>
            <p class="mt-2 text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white">
                Des experts passionnés
            </p>
            <p class="mt-4 text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Rencontrez les talents qui donnent vie à vos projets
            </p>
        </div>

        <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-3 stagger-parent">
            <!-- Team Member 1 -->
            <div class="group text-center stagger-child animate-on-scroll opacity-0 translate-y-10">
                <div class="relative inline-block mb-6">
                    <!-- Glow effect -->
                    <div class="absolute inset-0 bg-gradient-genesis rounded-full blur-xl opacity-30 group-hover:opacity-60 transition-opacity"></div>
                    <!-- Avatar -->
                    <div class="relative mx-auto h-40 w-40 rounded-full bg-gradient-genesis flex items-center justify-center text-white text-5xl font-bold ring-4 ring-white dark:ring-gray-800 group-hover:scale-110 transition-transform duration-300 contrast-90 brightness-105">
                        DF
                    </div>
                    <!-- Status indicator -->
                    <div class="absolute bottom-2 right-2 h-6 w-6 bg-green-400 rounded-full ring-4 ring-white dark:ring-gray-800 flex items-center justify-center">
                        <svg class="h-4 w-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-1">Dan Fwamba</h3>
                <p class="text-sky-600 dark:text-sky-400 font-semibold mb-2">Graphic Designer</p>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Créateur visuel passionné par l'identité de marque</p>
                <!-- Social links -->
                <div class="flex justify-center gap-3">
                    <a href="#" class="h-8 w-8 flex items-center justify-center rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-400 hover:bg-sky-500 hover:text-white transition-colors">
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"/>
                        </svg>
                    </a>
                    <a href="#" class="h-8 w-8 flex items-center justify-center rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-400 hover:bg-sky-500 hover:text-white transition-colors">
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="group text-center stagger-child animate-on-scroll opacity-0 translate-y-10">
                <div class="relative inline-block mb-6">
                    <div class="absolute inset-0 bg-gradient-genesis rounded-full blur-xl opacity-30 group-hover:opacity-60 transition-opacity"></div>
                    <div class="relative mx-auto h-40 w-40 rounded-full bg-gradient-genesis flex items-center justify-center text-white text-5xl font-bold ring-4 ring-white dark:ring-gray-800 group-hover:scale-110 transition-transform duration-300 contrast-90 brightness-105">
                        FS
                    </div>
                    <div class="absolute bottom-2 right-2 h-6 w-6 bg-green-400 rounded-full ring-4 ring-white dark:ring-gray-800 flex items-center justify-center">
                        <svg class="h-4 w-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-1">Franck Sangwa</h3>
                <p class="text-cyan-600 dark:text-cyan-400 font-semibold mb-2">Architecte</p>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Spécialiste en conception d'espaces et structures</p>
                <div class="flex justify-center gap-3">
                    <a href="#" class="h-8 w-8 flex items-center justify-center rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-400 hover:bg-cyan-500 hover:text-white transition-colors">
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"/>
                        </svg>
                    </a>
                    <a href="#" class="h-8 w-8 flex items-center justify-center rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-400 hover:bg-cyan-500 hover:text-white transition-colors">
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="group text-center stagger-child animate-on-scroll opacity-0 translate-y-10">
                <div class="relative inline-block mb-6">
                    <div class="absolute inset-0 bg-gradient-genesis rounded-full blur-xl opacity-30 group-hover:opacity-60 transition-opacity"></div>
                    <div class="relative mx-auto h-40 w-40 rounded-full bg-gradient-genesis flex items-center justify-center text-white text-5xl font-bold ring-4 ring-white dark:ring-gray-800 group-hover:scale-110 transition-transform duration-300 contrast-90 brightness-105">
                        JM
                    </div>
                    <div class="absolute bottom-2 right-2 h-6 w-6 bg-green-400 rounded-full ring-4 ring-white dark:ring-gray-800 flex items-center justify-center">
                        <svg class="h-4 w-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-1">Jean-Luc Mupasa</h3>
                <p class="text-blue-600 dark:text-blue-400 font-semibold mb-2">Lead Developer</p>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Expert full-stack passionné par l'innovation technologique</p>
                <div class="flex justify-center gap-3">
                    <a href="#" class="h-8 w-8 flex items-center justify-center rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-400 hover:bg-blue-500 hover:text-white transition-colors">
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"/>
                        </svg>
                    </a>
                    <a href="#" class="h-8 w-8 flex items-center justify-center rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-400 hover:bg-blue-500 hover:text-white transition-colors">
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="relative bg-gradient-genesis overflow-hidden">
    <!-- Decorative elements -->
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full blur-3xl float-animation" style="animation-delay: 0.5s;"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-white/10 rounded-full blur-3xl float-animation" style="animation-delay: 1s;"></div>
    </div>

    <div class="relative max-w-7xl mx-auto py-20 px-4 sm:px-6 lg:px-8">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="max-w-xl">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-white mb-4 leading-tight animate-on-scroll">
                    Rejoignez l'aventure Genesis
                </h2>
                <p class="text-xl text-white/90 leading-relaxed animate-on-scroll">
                    Commencez votre projet aujourd'hui et transformez vos idées en réalité digitale
                </p>
            </div>

            <div class="mt-10 lg:mt-0 lg:flex-shrink-0">
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-sky-600 rounded-lg font-semibold hover:bg-gray-50 hover:shadow-xl transition-all duration-300 group">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span>Contactez-nous</span>
                        <svg class="h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="{{ route('services') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white/10 backdrop-blur-sm text-white rounded-lg font-semibold border-2 border-white/20 hover:bg-white/20 hover:border-white/40 transition-all duration-300">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span>Nos services</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

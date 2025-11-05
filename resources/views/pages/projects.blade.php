@extends('layouts.public')

@section('title', 'Nos Projets')

@section('content')
<!-- Hero Section -->
<div class="relative bg-gradient-to-b from-gray-900 via-gray-900 to-white dark:to-gray-900 overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-genesis-blue-500/20 dark:bg-genesis-blue-500/10 rounded-full blur-3xl parallax-slow float-animation" data-speed="0.3"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-genesis-purple-600/20 dark:bg-genesis-purple-600/10 rounded-full blur-3xl parallax-fast float-animation" data-speed="0.5"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 sm:py-32">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="text-center lg:text-left">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 dark:bg-white/5 backdrop-blur-sm border border-white/20 rounded-full mb-6 pulse-glow shimmer animate-on-scroll">
                <svg class="h-5 w-5 text-genesis-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span class="text-sm font-medium text-white">Portfolio</span>
            </div>

            <h1 class="text-4xl font-extrabold text-white sm:text-5xl md:text-6xl animate-on-scroll">
                <span class="block">Nos Projets</span>
                <span class="block bg-gradient-genesis bg-clip-text text-transparent">
                    Réalisations & Succès
                </span>
            </h1>
            <p class="mt-6 max-w-2xl mx-auto lg:mx-0 text-xl text-gray-300 animate-on-scroll">
                Découvrez comment nous transformons les idées en solutions digitales innovantes et performantes
            </p>
        </div>

        <!-- Illustration -->
        <div class="hidden lg:block animate-on-scroll opacity-0 translate-x-10">
            <x-illustrations.web-design class="w-full h-auto drop-shadow-2xl" />
        </div>
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
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 stagger-parent">
            @forelse($projects as $project)
            <!-- Project Card -->
            <a href="{{ route('projects.show', $project) }}" class="group bg-white dark:bg-gray-700 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 stagger-child card-3d animate-on-scroll opacity-0 translate-y-10">
                <div class="relative h-56 bg-gradient-to-br from-{{ $project->color }}-500 via-{{ $project->color }}-500 to-{{ $project->color }}-600 flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-{{ $project->color }}-500/20 to-{{ $project->color }}-600/20 group-hover:scale-110 transition-transform duration-300"></div>
                    <div class="relative">
                        <div class="absolute inset-0 bg-{{ $project->color }}-400/50 blur-xl group-hover:blur-2xl transition-all duration-300"></div>
                        <div class="relative">
                            {!! $project->icon !!}
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 text-xs font-semibold bg-gradient-to-r from-{{ $project->color }}-500 to-{{ $project->color }}-600 text-white rounded-full capitalize">
                            {{ $project->category }}
                        </span>
                        <span class="text-xs font-medium text-gray-500 dark:text-gray-400">{{ $project->year }}</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-{{ $project->color }}-600 dark:group-hover:text-{{ $project->color }}-400 transition-colors">{{ $project->title }}</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">
                        {{ Str::limit($project->description, 150) }}
                    </p>
                    <div class="flex flex-wrap gap-2">
                        @foreach(array_slice($project->technologies, 0, 3) as $tech)
                        <span class="px-3 py-1 text-xs font-medium bg-{{ $project->color }}-100 dark:bg-{{ $project->color }}-900/30 text-genesis-blue-600 dark:text-genesis-blue-400 rounded-full">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
            </a>
            @empty
            <!-- Fallback projects (static) if database is empty -->
            <div class="col-span-full text-center py-12">
                <p class="text-gray-500 dark:text-gray-400">Aucun projet disponible pour le moment.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>

<!-- Stats Section -->
<div class="bg-white dark:bg-gray-900 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl animate-on-scroll">
                Notre Impact en
                <span class="bg-gradient-genesis bg-clip-text text-transparent">Chiffres</span>
            </h2>
            <p class="mt-4 text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Des résultats mesurables qui témoignent de notre engagement et de notre expertise
            </p>
        </div>
        <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
            <div class="text-center group stat-card animate-on-scroll hover:scale-105 transition-transform duration-300">
                <div class="text-5xl font-bold bg-gradient-genesis bg-clip-text text-transparent mb-2">
                    <span data-count="150">0</span>+
                </div>
                <div class="text-base font-medium text-gray-600 dark:text-gray-400 group-hover:text-genesis-blue-600 dark:group-hover:text-genesis-blue-400 transition-colors">Projets livrés</div>
            </div>
            <div class="text-center group stat-card animate-on-scroll hover:scale-105 transition-transform duration-300">
                <div class="text-5xl font-bold bg-gradient-genesis bg-clip-text text-transparent mb-2">
                    <span data-count="98">0</span>%
                </div>
                <div class="text-base font-medium text-gray-600 dark:text-gray-400 group-hover:text-genesis-blue-600 dark:group-hover:text-genesis-blue-400 transition-colors">Satisfaction client</div>
            </div>
            <div class="text-center group stat-card animate-on-scroll hover:scale-105 transition-transform duration-300">
                <div class="text-5xl font-bold bg-gradient-genesis bg-clip-text text-transparent mb-2">2M+</div>
                <div class="text-base font-medium text-gray-600 dark:text-gray-400 group-hover:text-genesis-purple-600 dark:group-hover:text-genesis-purple-400 transition-colors">Utilisateurs actifs</div>
            </div>
            <div class="text-center group stat-card animate-on-scroll hover:scale-105 transition-transform duration-300">
                <div class="text-5xl font-bold bg-gradient-genesis bg-clip-text text-transparent mb-2">24/7</div>
                <div class="text-base font-medium text-gray-600 dark:text-gray-400 group-hover:text-genesis-purple-600 dark:group-hover:text-genesis-purple-400 transition-colors">Support technique</div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="relative bg-gradient-genesis overflow-hidden">
    <!-- Decorative elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-white/10 rounded-full blur-3xl float-animation" style="animation-delay: 0.5s;"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-white/10 rounded-full blur-3xl float-animation" style="animation-delay: 1s;"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
        <h2 class="text-3xl font-extrabold text-white sm:text-4xl md:text-5xl animate-on-scroll">
            Votre Projet est le Prochain ?
        </h2>
        <p class="mt-6 text-lg text-white/90 max-w-2xl mx-auto animate-on-scroll">
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

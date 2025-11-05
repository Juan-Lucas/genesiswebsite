@extends('layouts.public')

@section('title', 'Nos Services')

@section('content')
<!-- Hero Section with gradient background -->
<div class="relative bg-gradient-to-b from-gray-900 via-gray-900 to-white dark:to-gray-900 overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute inset-0">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-genesis-blue-500/20 rounded-full blur-3xl parallax-slow float-animation" data-speed="0.3"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-genesis-purple-600/20 rounded-full blur-3xl parallax-fast float-animation" data-speed="0.5"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
        <div class="text-center">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 dark:bg-gray-800/50 backdrop-blur-sm border border-white/20 dark:border-gray-700 mb-8 pulse-glow shimmer animate-on-scroll">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-genesis-blue-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-genesis-blue-500"></span>
                </span>
                <span class="text-sm font-medium text-white dark:text-gray-200">Solutions digitales complètes</span>
            </div>

            <!-- Title -->
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold text-white mb-6 leading-tight animate-on-scroll">
                Nos <span class="bg-gradient-genesis bg-clip-text text-transparent">Services</span>
            </h1>
            <p class="mt-6 text-xl md:text-2xl text-gray-300 dark:text-gray-400 max-w-3xl mx-auto leading-relaxed">
                Des solutions complètes pour transformer votre présence digitale
            </p>
        </div>
    </div>

    <!-- Wave separator -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-24 fill-gray-50 dark:fill-gray-800" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
        </svg>
    </div>
</div>

<!-- Services Grid -->
<div class="bg-gray-50 dark:bg-gray-800 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 stagger-parent">
            @forelse($services as $service)
            <a href="{{ route('services.show', $service) }}" class="group relative bg-white dark:bg-gray-900 rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 stagger-child card-3d animate-on-scroll opacity-0 translate-y-10">
                <!-- Gradient border effect -->
                <div class="absolute inset-0 bg-gradient-to-br from-sky-500/20 via-transparent to-cyan-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                <div class="relative p-8">
                    <!-- Icon with gradient background -->
                    <div class="relative inline-flex items-center justify-center h-16 w-16 mb-6">
                        <div class="absolute inset-0 bg-gradient-to-br from-{{ $service->color }}-500 to-{{ $service->color }}-600 rounded-xl blur-lg opacity-50 group-hover:opacity-75 transition-opacity"></div>
                        <div class="relative flex items-center justify-center h-16 w-16 rounded-xl bg-gradient-to-br from-{{ $service->color }}-500 to-{{ $service->color }}-600 text-white group-hover:scale-110 transition-transform duration-300">
                            <svg class="h-10 w-10" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                {!! $service->icon !!}
                            </svg>
                        </div>
                    </div>

                    <!-- Title -->
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 group-hover:text-{{ $service->color }}-500 transition-colors">
                        {{ $service->title }}
                    </h3>

                    <!-- Description -->
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                        {{ $service->description }}
                    </p>

                    <!-- Features list -->
                    @if($service->features)
                    <ul class="space-y-3 mb-6">
                        @foreach(array_slice($service->features, 0, 4) as $feature)
                        <li class="flex items-start gap-3 text-sm text-gray-600 dark:text-gray-400">
                            <svg class="h-5 w-5 text-{{ $service->color }}-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>{{ $feature }}</span>
                        </li>
                        @endforeach
                    </ul>
                    @endif

                    <!-- CTA Link with icon -->
                    <div class="flex items-center gap-2 text-genesis-blue-600 dark:text-genesis-blue-400 font-semibold group-hover:gap-4 transition-all duration-300">
                        <span>En savoir plus</span>
                        <svg class="h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </div>
                </div>

                <!-- Bottom gradient line -->
                <div class="h-1 bg-gradient-to-r from-{{ $service->color }}-500 to-{{ $service->color }}-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
            </a>
            @empty
            <!-- Aucun service disponible -->
            <div class="col-span-full text-center py-12">
                <p class="text-gray-600 dark:text-gray-400 text-lg">Aucun service disponible pour le moment.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>

<!-- Stats Section -->
<div class="bg-white dark:bg-gray-900 py-20 relative">
    <div class="absolute inset-x-0 top-0 h-1 bg-gradient-genesis opacity-50"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
            <div class="text-center group stat-card animate-on-scroll hover:scale-105 transition-transform duration-300">
                <div class="text-4xl md:text-5xl font-bold bg-gradient-genesis bg-clip-text text-transparent mb-2">
                    <span data-count="150">0</span>+
                </div>
                <div class="text-sm md:text-base text-gray-600 dark:text-gray-400 group-hover:text-genesis-blue-600 dark:group-hover:text-genesis-blue-400 transition-colors">Projets réalisés</div>
            </div>
            <div class="text-center group stat-card animate-on-scroll hover:scale-105 transition-transform duration-300">
                <div class="text-4xl md:text-5xl font-bold bg-gradient-genesis bg-clip-text text-transparent mb-2">
                    <span data-count="98">0</span>%
                </div>
                <div class="text-sm md:text-base text-gray-600 dark:text-gray-400 group-hover:text-genesis-blue-600 dark:group-hover:text-genesis-blue-400 transition-colors">Clients satisfaits</div>
            </div>
            <div class="text-center group stat-card animate-on-scroll hover:scale-105 transition-transform duration-300">
                <div class="text-4xl md:text-5xl font-bold bg-gradient-genesis bg-clip-text text-transparent mb-2">
                    <span data-count="10">0</span>+
                </div>
                <div class="text-sm md:text-base text-gray-600 dark:text-gray-400 group-hover:text-genesis-blue-600 dark:group-hover:text-genesis-blue-400 transition-colors">Ans d'expérience</div>
            </div>
            <div class="text-center group stat-card animate-on-scroll hover:scale-105 transition-transform duration-300">
                <div class="text-4xl md:text-5xl font-bold bg-gradient-genesis bg-clip-text text-transparent mb-2">24/7</div>
                <div class="text-sm md:text-base text-gray-600 dark:text-gray-400 group-hover:text-genesis-blue-600 dark:group-hover:text-genesis-blue-400 transition-colors">Support disponible</div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section with gradient -->
<div class="relative bg-gradient-genesis overflow-hidden">
    <!-- Decorative elements -->
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full blur-3xl float-animation" style="animation-delay: 0.5s;"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-white/10 rounded-full blur-3xl float-animation" style="animation-delay: 1s;"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-white mb-6 animate-on-scroll">
            Prêt à démarrer votre projet ?
        </h2>
        <p class="text-xl text-white/90 mb-10 max-w-2xl mx-auto animate-on-scroll">
            Contactez-nous dès aujourd'hui pour discuter de vos besoins et découvrir comment nous pouvons vous aider
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-white text-sky-600 rounded-lg font-semibold hover:bg-gray-50 hover:shadow-xl transition-all duration-300 group">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <span>Demander un devis</span>
                <svg class="h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
            <a href="{{ route('about') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-white/10 backdrop-blur-sm text-white rounded-lg font-semibold border-2 border-white/20 hover:bg-white/20 hover:border-white/40 transition-all duration-300">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span>En savoir plus</span>
            </a>
        </div>
    </div>
</div>
@endsection

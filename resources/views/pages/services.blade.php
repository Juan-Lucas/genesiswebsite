@extends('layouts.public')

@section('title', 'Nos Services')

@section('content')
<!-- Hero Section with gradient background -->
<div class="relative bg-gradient-to-b from-gray-900 via-gray-900 to-white dark:to-gray-900 overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute inset-0">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-sky-500/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-cyan-500/20 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
        <div class="text-center">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 dark:bg-gray-800/50 backdrop-blur-sm border border-white/20 dark:border-gray-700 mb-8">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-sky-500"></span>
                </span>
                <span class="text-sm font-medium text-white dark:text-gray-200">Solutions digitales complètes</span>
            </div>

            <!-- Title -->
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold text-white mb-6 leading-tight">
                Nos <span class="bg-gradient-to-r from-sky-400 to-cyan-400 bg-clip-text text-transparent">Services</span>
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
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            @php
                $services = \App\Models\Service::published()->get();
            @endphp

            @forelse($services as $service)
            <a href="{{ route('services.show', $service) }}" class="group relative bg-white dark:bg-gray-900 rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                <!-- Gradient border effect -->
                <div class="absolute inset-0 bg-gradient-to-br from-sky-500/20 via-transparent to-cyan-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                <div class="relative p-8">
                    <!-- Icon with gradient background -->
                    <div class="relative inline-flex items-center justify-center h-16 w-16 mb-6">
                        <div class="absolute inset-0 bg-gradient-to-br from-{{ $service->color }}-500 to-{{ $service->color }}-600 rounded-xl blur-lg opacity-50 group-hover:opacity-75 transition-opacity"></div>
                        <div class="relative flex items-center justify-center h-16 w-16 rounded-xl bg-gradient-to-br from-{{ $service->color }}-500 to-{{ $service->color }}-600 text-white group-hover:scale-110 transition-transform duration-300">
                            {!! $service->icon !!}
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
                    <div class="flex items-center gap-2 text-{{ $service->color }}-500 font-semibold group-hover:gap-4 transition-all duration-300">
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
            <!-- Fallback services avec design modernisé -->
            @foreach([
                [
                    'title' => 'Développement Web',
                    'description' => 'Création de sites web modernes et responsive avec les dernières technologies (Laravel, React, Vue.js).',
                    'color' => 'sky',
                    'icon' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>',
                    'features' => ['Sites vitrine', 'E-commerce', 'Applications web', 'API REST']
                ],
                [
                    'title' => 'Applications Mobile',
                    'description' => 'Développement d\'applications natives et cross-platform pour iOS et Android.',
                    'color' => 'cyan',
                    'icon' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>',
                    'features' => ['Applications natives', 'React Native / Flutter', 'UI/UX Design', 'Maintenance']
                ],
                [
                    'title' => 'Solutions Cloud',
                    'description' => 'Migration et hébergement cloud avec AWS, Azure, et Google Cloud Platform.',
                    'color' => 'blue',
                    'icon' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/></svg>',
                    'features' => ['Migration cloud', 'DevOps CI/CD', 'Infrastructure as Code', 'Monitoring']
                ],
                [
                    'title' => 'Consulting IT',
                    'description' => 'Accompagnement stratégique pour votre transformation digitale.',
                    'color' => 'indigo',
                    'icon' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>',
                    'features' => ['Audit technique', 'Architecture logicielle', 'Stratégie digitale', 'Formation équipes']
                ],
                [
                    'title' => 'UI/UX Design',
                    'description' => 'Création d\'interfaces utilisateur intuitives et attractives.',
                    'color' => 'purple',
                    'icon' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>',
                    'features' => ['Design système', 'Prototypage', 'Tests utilisateurs', 'Wireframing']
                ],
                [
                    'title' => 'Maintenance & Support',
                    'description' => 'Support technique et maintenance continue de vos applications.',
                    'color' => 'emerald',
                    'icon' => '<svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>',
                    'features' => ['Support 24/7', 'Mises à jour', 'Corrections bugs', 'Optimisation']
                ]
            ] as $fallbackService)
            <div class="group relative bg-white dark:bg-gray-900 rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                <!-- Gradient border effect -->
                <div class="absolute inset-0 bg-gradient-to-br from-{{ $fallbackService['color'] }}-500/20 via-transparent to-{{ $fallbackService['color'] }}-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                <div class="relative p-8">
                    <!-- Icon with gradient background -->
                    <div class="relative inline-flex items-center justify-center h-16 w-16 mb-6">
                        <div class="absolute inset-0 bg-gradient-to-br from-{{ $fallbackService['color'] }}-500 to-{{ $fallbackService['color'] }}-600 rounded-xl blur-lg opacity-50 group-hover:opacity-75 transition-opacity"></div>
                        <div class="relative flex items-center justify-center h-16 w-16 rounded-xl bg-gradient-to-br from-{{ $fallbackService['color'] }}-500 to-{{ $fallbackService['color'] }}-600 text-white group-hover:scale-110 transition-transform duration-300">
                            {!! $fallbackService['icon'] !!}
                        </div>
                    </div>

                    <!-- Title -->
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">
                        {{ $fallbackService['title'] }}
                    </h3>

                    <!-- Description -->
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                        {{ $fallbackService['description'] }}
                    </p>

                    <!-- Features list -->
                    <ul class="space-y-3 mb-6">
                        @foreach($fallbackService['features'] as $feature)
                        <li class="flex items-start gap-3 text-sm text-gray-600 dark:text-gray-400">
                            <svg class="h-5 w-5 text-{{ $fallbackService['color'] }}-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>{{ $feature }}</span>
                        </li>
                        @endforeach
                    </ul>

                    <!-- CTA text -->
                    <div class="flex items-center gap-2 text-{{ $fallbackService['color'] }}-500 font-semibold">
                        <span>En savoir plus</span>
                        <svg class="h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </div>
                </div>

                <!-- Bottom gradient line -->
                <div class="h-1 bg-gradient-to-r from-{{ $fallbackService['color'] }}-500 to-{{ $fallbackService['color'] }}-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
            </div>
            @endforeach
            @endforelse
        </div>
    </div>
</div>

<!-- Stats Section -->
<div class="bg-white dark:bg-gray-900 py-20 relative">
    <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-sky-500/50 to-transparent"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-sky-500 to-cyan-500 bg-clip-text text-transparent mb-2">150+</div>
                <div class="text-sm md:text-base text-gray-600 dark:text-gray-400">Projets réalisés</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-sky-500 to-cyan-500 bg-clip-text text-transparent mb-2">98%</div>
                <div class="text-sm md:text-base text-gray-600 dark:text-gray-400">Clients satisfaits</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-sky-500 to-cyan-500 bg-clip-text text-transparent mb-2">10+</div>
                <div class="text-sm md:text-base text-gray-600 dark:text-gray-400">Ans d'expérience</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-sky-500 to-cyan-500 bg-clip-text text-transparent mb-2">24/7</div>
                <div class="text-sm md:text-base text-gray-600 dark:text-gray-400">Support disponible</div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section with gradient -->
<div class="relative bg-gradient-to-br from-sky-500 via-cyan-500 to-blue-600 overflow-hidden">
    <!-- Decorative elements -->
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-white mb-6">
            Prêt à démarrer votre projet ?
        </h2>
        <p class="text-xl text-white/90 mb-10 max-w-2xl mx-auto">
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

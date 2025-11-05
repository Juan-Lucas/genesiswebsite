@extends('layouts.public')

@section('title', $service->title)

@section('content')
<!-- Service Header -->
<div class="bg-gradient-to-b from-gray-900 via-gray-900 to-white dark:to-gray-900 relative isolate overflow-hidden">
    <!-- Decorative Background -->
    <div aria-hidden="true" class="absolute inset-0 -z-10">
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-genesis-blue-500/20 dark:bg-genesis-blue-500/10 rounded-full blur-3xl parallax-slow float-animation" data-speed="0.3"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-genesis-purple-600/20 dark:bg-genesis-purple-600/10 rounded-full blur-3xl parallax-fast float-animation" data-speed="0.5"></div>
    </div>

    <div class="relative px-6 pt-8 lg:px-8">
        <div class="mx-auto max-w-4xl py-16 sm:py-20 lg:py-24">
            <!-- Breadcrumb -->
            <nav class="flex items-center justify-center gap-x-2 text-sm mb-8 animate-on-scroll">
                <a href="{{ route('services') }}" class="text-gray-400 hover:text-genesis-blue-400 transition-colors duration-300 flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Retour aux services
                </a>
            </nav>

            <div class="text-center">
                <!-- Icon -->
                <div class="flex justify-center mb-8 animate-on-scroll">
                    <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-gradient-genesis shadow-2xl ring-4 ring-white/20 pulse-glow shimmer">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            @if($service->icon)
                                {!! $service->icon !!}
                            @else
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            @endif
                        </svg>
                    </div>
                </div>

                <!-- Title -->
                <h1 class="text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl mb-8 leading-tight animate-on-scroll">
                    <span class="bg-gradient-genesis bg-clip-text text-transparent">{{ $service->title }}</span>
                </h1>

                <!-- Description -->
                <p class="mt-6 text-xl leading-8 text-gray-300 max-w-3xl mx-auto animate-on-scroll">
                    {{ $service->description }}
                </p>

                <!-- CTA Buttons -->
                <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center animate-on-scroll">
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 rounded-lg bg-gradient-genesis px-8 py-3.5 text-base font-semibold text-white shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                        </svg>
                        Demander un devis
                    </a>
                    <a href="{{ route('projects') }}" class="inline-flex items-center gap-2 text-base font-semibold text-white hover:text-gray-300 transition-colors duration-300 px-6 py-3">
                        Voir nos projets
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Service Image -->
@if($service->image)
<div class="bg-white dark:bg-gray-900 -mt-16">
    <div class="mx-auto max-w-5xl px-6 lg:px-8">
        <div class="aspect-[21/9] w-full overflow-hidden rounded-3xl shadow-2xl ring-1 ring-gray-900/10 dark:ring-white/10 card-3d animate-on-scroll">
            <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" class="h-full w-full object-cover">
        </div>
    </div>
</div>
@endif

<!-- Service Content -->
<div class="bg-white dark:bg-gray-900 py-16 sm:py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <!-- Description détaillée -->
                <div class="prose prose-lg prose-gray dark:prose-invert max-w-none text-gray-900 dark:text-gray-100 animate-on-scroll">
                    <div class="text-gray-900 dark:text-gray-100 leading-8 text-lg">
                        {!! nl2br(e($service->content)) !!}
                    </div>
                </div>

                <!-- Features List -->
                @if($service->features && count($service->features) > 0)
                <div class="mt-12 animate-on-scroll">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 flex items-center gap-3">
                        <div class="w-1 h-8 bg-gradient-genesis rounded-full"></div>
                        Caractéristiques principales
                    </h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 stagger-parent">
                        @foreach($service->features as $feature)
                        <div class="flex items-start gap-3 p-4 rounded-xl bg-gray-50 dark:bg-gray-800/50 ring-1 ring-gray-200 dark:ring-gray-700 hover:ring-genesis-blue-500/50 transition-all duration-300 stagger-child card-3d">
                            <div class="flex-shrink-0 mt-0.5">
                                <svg class="w-6 h-6 text-genesis-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span class="text-gray-700 dark:text-gray-300 font-medium">{{ $feature }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Process Section -->
                <div class="mt-16 animate-on-scroll">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 flex items-center gap-3">
                        <div class="w-1 h-8 bg-gradient-genesis rounded-full"></div>
                        Notre processus
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 stagger-parent">
                        <div class="relative p-6 rounded-2xl bg-gradient-to-br from-genesis-blue-50 to-genesis-purple-50 dark:from-gray-800 dark:to-gray-800/50 ring-1 ring-gray-200 dark:ring-gray-700 stagger-child card-3d hover:scale-105 transition-transform duration-300">
                            <div class="absolute -top-4 -left-4 w-12 h-12 rounded-xl bg-gradient-genesis flex items-center justify-center text-white font-bold text-xl shadow-lg">1</div>
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 ml-8">Analyse</h3>
                            <p class="text-gray-700 dark:text-gray-300 ml-8">Compréhension approfondie de vos besoins et objectifs business.</p>
                        </div>
                        <div class="relative p-6 rounded-2xl bg-gradient-to-br from-genesis-blue-50 to-genesis-purple-50 dark:from-gray-800 dark:to-gray-800/50 ring-1 ring-gray-200 dark:ring-gray-700 stagger-child card-3d hover:scale-105 transition-transform duration-300">
                            <div class="absolute -top-4 -left-4 w-12 h-12 rounded-xl bg-gradient-genesis flex items-center justify-center text-white font-bold text-xl shadow-lg">2</div>
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 ml-8">Conception</h3>
                            <p class="text-gray-700 dark:text-gray-300 ml-8">Design UX/UI et architecture technique adaptés à votre projet.</p>
                        </div>
                        <div class="relative p-6 rounded-2xl bg-gradient-to-br from-genesis-blue-50 to-genesis-purple-50 dark:from-gray-800 dark:to-gray-800/50 ring-1 ring-gray-200 dark:ring-gray-700 stagger-child card-3d hover:scale-105 transition-transform duration-300">
                            <div class="absolute -top-4 -left-4 w-12 h-12 rounded-xl bg-gradient-genesis flex items-center justify-center text-white font-bold text-xl shadow-lg">3</div>
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 ml-8">Développement</h3>
                            <p class="text-gray-700 dark:text-gray-300 ml-8">Développement agile avec livraisons régulières et tests continus.</p>
                        </div>
                        <div class="relative p-6 rounded-2xl bg-gradient-to-br from-genesis-blue-50 to-genesis-purple-50 dark:from-gray-800 dark:to-gray-800/50 ring-1 ring-gray-200 dark:ring-gray-700 stagger-child card-3d hover:scale-105 transition-transform duration-300">
                            <div class="absolute -top-4 -left-4 w-12 h-12 rounded-xl bg-gradient-genesis flex items-center justify-center text-white font-bold text-xl shadow-lg">4</div>
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 ml-8">Déploiement</h3>
                            <p class="text-gray-700 dark:text-gray-300 ml-8">Mise en production et support pour garantir votre réussite.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <aside class="lg:col-span-1">
                <div class="sticky top-24 space-y-6">
                    <!-- Contact Card -->
                    <div class="rounded-2xl bg-gradient-genesis p-6 text-white shadow-xl animate-on-scroll card-3d">
                        <h3 class="font-bold text-xl mb-2">Intéressé par ce service ?</h3>
                        <p class="text-white/90 text-sm mb-6">
                            Contactez-nous pour discuter de votre projet et obtenir un devis personnalisé.
                        </p>
                        <a href="{{ route('contact') }}" class="block w-full text-center bg-white text-genesis-blue-600 font-semibold py-3 px-4 rounded-lg hover:bg-gray-50 transition-colors duration-300 shadow-lg mb-3">
                            Demander un devis
                        </a>
                        <div class="flex items-center gap-3 text-sm text-white/90">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span>Réponse sous 24h</span>
                        </div>
                    </div>

                    <!-- Technologies -->
                    <div class="rounded-2xl bg-white dark:bg-gray-800 p-6 ring-1 ring-gray-200 dark:ring-gray-700 shadow-sm animate-on-scroll">
                        <h3 class="font-bold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg>
                            Technologies
                        </h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1.5 text-xs font-medium rounded-full bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300">Laravel</span>
                            <span class="px-3 py-1.5 text-xs font-medium rounded-full bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300">React</span>
                            <span class="px-3 py-1.5 text-xs font-medium rounded-full bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300">Vue.js</span>
                            <span class="px-3 py-1.5 text-xs font-medium rounded-full bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300">Node.js</span>
                            <span class="px-3 py-1.5 text-xs font-medium rounded-full bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300">Tailwind</span>
                        </div>
                    </div>

                    <!-- Support -->
                    <div class="rounded-2xl bg-white dark:bg-gray-800 p-6 ring-1 ring-gray-200 dark:ring-gray-700 shadow-sm animate-on-scroll">
                        <h3 class="font-bold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                            Support inclus
                        </h3>
                        <ul class="space-y-2 text-sm text-gray-700 dark:text-gray-300">
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Maintenance incluse
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Mises à jour régulières
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Support technique
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Formation utilisateurs
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>

<!-- Related Services -->
@if($relatedServices->count() > 0)
<div class="bg-gray-50 dark:bg-gray-800 py-16 sm:py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mb-12 animate-on-scroll">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white mb-3">
                Nos autres services
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-400">
                Découvrez l'ensemble de nos solutions
            </p>
        </div>

        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 stagger-parent">
            @foreach($relatedServices as $related)
                <a href="{{ route('services.show', $related) }}" class="group flex flex-col p-8 rounded-2xl bg-white dark:bg-gray-900 shadow-lg hover:shadow-2xl transition-all duration-300 ring-1 ring-gray-200 dark:ring-gray-700 hover:ring-genesis-blue-500/50 hover:-translate-y-1 stagger-child card-3d animate-on-scroll">
                    <div class="flex items-center justify-center w-16 h-16 rounded-xl bg-gradient-genesis mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            @if($related->icon)
                                {!! $related->icon !!}
                            @else
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            @endif
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-genesis-blue-600 dark:group-hover:text-genesis-blue-400 transition-colors">
                        {{ $related->title }}
                    </h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed flex-1">
                        {{ Str::limit($related->description, 120) }}
                    </p>
                    <div class="mt-6 flex items-center text-genesis-blue-600 dark:text-genesis-blue-400 font-semibold text-sm group-hover:gap-2 transition-all duration-300">
                        En savoir plus
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
@endif

<!-- Final CTA -->
<div class="bg-gradient-genesis relative overflow-hidden">
    <!-- Decorative elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-white/10 rounded-full blur-3xl float-animation" style="animation-delay: 0.5s;"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-white/10 rounded-full blur-3xl float-animation" style="animation-delay: 1s;"></div>
    </div>
    <div class="relative px-6 py-20 sm:px-6 sm:py-24 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="text-4xl font-bold tracking-tight text-white sm:text-5xl mb-6 animate-on-scroll">
                Prêt à démarrer votre projet ?
            </h2>
            <p class="text-xl leading-8 text-white/90 mb-10 animate-on-scroll">
                Notre équipe d'experts est là pour transformer vos idées en solutions digitales performantes.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 animate-on-scroll">
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 rounded-lg bg-white text-genesis-blue-600 px-8 py-3.5 text-base font-semibold shadow-lg hover:bg-gray-50 hover:shadow-xl hover:scale-105 transition-all duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    Obtenir un devis gratuit
                </a>
                <a href="{{ route('services') }}" class="inline-flex items-center gap-2 text-base font-semibold text-white hover:text-gray-200 transition-colors duration-300 px-6 py-3">
                    Tous nos services
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

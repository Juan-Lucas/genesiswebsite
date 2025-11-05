@extends('layouts.public')

@section('title', $project->title)

@section('content')
<!-- Project Header -->
<div class="bg-gradient-to-b from-gray-900 via-gray-900 to-white dark:to-gray-900 relative isolate overflow-hidden">
    <!-- Decorative Background -->
    <div aria-hidden="true" class="absolute inset-0 -z-10">
        <div class="absolute inset-x-0 top-0 h-full bg-gradient-to-b from-{{ $project->color }}-500/10 via-transparent to-transparent"></div>
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-genesis-blue-500/20 dark:bg-genesis-blue-500/10 rounded-full blur-3xl parallax-slow float-animation" data-speed="0.3"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-genesis-purple-600/20 dark:bg-genesis-purple-600/10 rounded-full blur-3xl parallax-fast float-animation" data-speed="0.5"></div>
    </div>

    <div class="relative px-6 pt-8 lg:px-8">
        <div class="mx-auto max-w-4xl py-16 sm:py-20 lg:py-24">
            <!-- Breadcrumb -->
            <nav class="flex items-center justify-center gap-x-2 text-sm mb-8 animate-on-scroll">
                <a href="{{ route('projects') }}" class="text-gray-400 hover:text-genesis-blue-400 transition-colors duration-300 flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Retour aux projets
                </a>
            </nav>

            <div class="text-center">
                <!-- Icon -->
                <div class="flex justify-center mb-8 animate-on-scroll">
                    <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-gradient-genesis shadow-2xl ring-4 ring-white/20 pulse-glow">
                        {!! $project->icon !!}
                    </div>
                </div>

                <!-- Category Badge -->
                <div class="flex justify-center mb-6 animate-on-scroll">
                    <span class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 dark:bg-white/5 backdrop-blur-sm border border-white/20 rounded-full shimmer">
                        <svg class="h-5 w-5 text-genesis-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                        </svg>
                        <span class="text-sm font-medium text-white capitalize">{{ $project->category }}</span>
                    </span>
                </div>

                <!-- Title -->
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl mb-8 leading-tight animate-on-scroll">
                    <span class="bg-gradient-genesis bg-clip-text text-transparent">{{ $project->title }}</span>
                </h1>

                <!-- Description -->
                <p class="mt-6 text-xl leading-8 text-gray-300 max-w-3xl mx-auto animate-on-scroll">
                    {{ $project->description }}
                </p>

                <!-- Project Meta -->
                <div class="mt-10 flex flex-wrap items-center justify-center gap-6 text-sm text-gray-300 animate-on-scroll">
                    @if($project->client)
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-genesis-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span>{{ $project->client }}</span>
                    </div>
                    @endif
                    @if($project->duration)
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-genesis-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>{{ $project->duration }}</span>
                    </div>
                    @endif
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-genesis-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span>{{ $project->year }}</span>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center animate-on-scroll">
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 rounded-lg bg-gradient-genesis px-8 py-3.5 text-base font-semibold text-white shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                        </svg>
                        Un projet similaire ?
                    </a>
                    <a href="{{ route('projects') }}" class="inline-flex items-center gap-2 text-base font-semibold text-white hover:text-gray-300 transition-colors duration-300 px-6 py-3">
                        Tous nos projets
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Project Image -->
@if($project->image_url)
<div class="bg-white dark:bg-gray-900 -mt-16">
    <div class="mx-auto max-w-5xl px-6 lg:px-8">
        <div class="aspect-[21/9] w-full overflow-hidden rounded-3xl shadow-2xl ring-1 ring-gray-900/10 dark:ring-white/10 card-3d animate-on-scroll">
            <img src="{{ asset($project->image_url) }}" alt="{{ $project->title }}" class="h-full w-full object-cover">
        </div>
    </div>
</div>
@endif

<!-- Project Content -->
<div class="bg-white dark:bg-gray-900 py-16 sm:py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-12">
                <!-- Description détaillée -->
                <div class="prose prose-lg prose-gray dark:prose-invert max-w-none animate-on-scroll">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 flex items-center gap-3">
                        <div class="w-1 h-8 bg-gradient-genesis rounded-full"></div>
                        À propos du projet
                    </h2>
                    <div class="text-gray-700 dark:text-gray-300 leading-8 text-lg space-y-4">
                        @foreach(explode("\n\n", $project->long_description) as $paragraph)
                            <p>{{ $paragraph }}</p>
                        @endforeach
                    </div>
                </div>

                <!-- Technologies -->
                @if($project->technologies && count($project->technologies) > 0)
                <div class="animate-on-scroll">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 flex items-center gap-3">
                        <div class="w-1 h-8 bg-gradient-genesis rounded-full"></div>
                        Technologies utilisées
                    </h2>
                    <div class="flex flex-wrap gap-3">
                        @foreach($project->technologies as $tech)
                        <div class="group px-4 py-2.5 rounded-xl bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-800 dark:to-gray-800/50 ring-1 ring-gray-200 dark:ring-gray-700 hover:ring-genesis-blue-500/50 transition-all duration-300 hover:scale-105">
                            <span class="text-sm font-semibold text-gray-700 dark:text-gray-300 group-hover:text-genesis-blue-600 dark:group-hover:text-genesis-blue-400 transition-colors">{{ $tech }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Results -->
                @if($project->results && count($project->results) > 0)
                <div class="animate-on-scroll">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 flex items-center gap-3">
                        <div class="w-1 h-8 bg-gradient-genesis rounded-full"></div>
                        Résultats & Impact
                    </h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach($project->results as $result)
                        <div class="flex items-start gap-3 p-5 rounded-xl bg-gradient-to-br from-genesis-blue-50 to-genesis-purple-50 dark:from-gray-800 dark:to-gray-800/50 ring-1 ring-genesis-blue-200 dark:ring-gray-700 hover:shadow-lg transition-all duration-300 card-3d">
                            <div class="flex-shrink-0 mt-0.5">
                                <svg class="w-6 h-6 text-genesis-blue-600 dark:text-genesis-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <span class="text-gray-700 dark:text-gray-300 font-medium leading-relaxed">{{ $result }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Process Timeline -->
                <div class="animate-on-scroll">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 flex items-center gap-3">
                        <div class="w-1 h-8 bg-gradient-genesis rounded-full"></div>
                        Méthodologie de réalisation
                    </h2>
                    <div class="relative">
                        <!-- Timeline line -->
                        <div class="absolute left-6 top-8 bottom-8 w-0.5 bg-gradient-genesis"></div>

                        <div class="space-y-8">
                            <div class="relative flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-genesis flex items-center justify-center text-white font-bold text-lg shadow-lg z-10">1</div>
                                <div class="flex-1 pt-2">
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Analyse & Cadrage</h3>
                                    <p class="text-gray-700 dark:text-gray-300">Compréhension approfondie des besoins, définition du périmètre et des objectifs clés du projet.</p>
                                </div>
                            </div>
                            <div class="relative flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-genesis flex items-center justify-center text-white font-bold text-lg shadow-lg z-10">2</div>
                                <div class="flex-1 pt-2">
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Design & Architecture</h3>
                                    <p class="text-gray-700 dark:text-gray-300">Conception UX/UI et architecture technique optimale pour répondre aux exigences.</p>
                                </div>
                            </div>
                            <div class="relative flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-genesis flex items-center justify-center text-white font-bold text-lg shadow-lg z-10">3</div>
                                <div class="flex-1 pt-2">
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Développement Agile</h3>
                                    <p class="text-gray-700 dark:text-gray-300">Développement itératif avec livraisons régulières et tests continus pour garantir la qualité.</p>
                                </div>
                            </div>
                            <div class="relative flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-genesis flex items-center justify-center text-white font-bold text-lg shadow-lg z-10">4</div>
                                <div class="flex-1 pt-2">
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Déploiement & Support</h3>
                                    <p class="text-gray-700 dark:text-gray-300">Mise en production sécurisée et accompagnement continu pour assurer le succès à long terme.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <aside class="lg:col-span-1">
                <div class="sticky top-24 space-y-6">
                    <!-- CTA Card -->
                    <div class="rounded-2xl bg-gradient-genesis p-6 text-white shadow-xl animate-on-scroll card-3d">
                        <h3 class="font-bold text-xl mb-2">Un projet similaire ?</h3>
                        <p class="text-white/90 text-sm mb-6">
                            Parlez-nous de votre projet et découvrez comment nous pouvons vous aider à le réaliser.
                        </p>
                        <a href="{{ route('contact') }}" class="block w-full text-center bg-white text-genesis-blue-600 font-semibold py-3 px-4 rounded-lg hover:bg-gray-50 transition-colors duration-300 shadow-lg mb-3">
                            Nous contacter
                        </a>
                        <div class="flex items-center gap-3 text-sm text-white/90">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                            <span>Réponse rapide garantie</span>
                        </div>
                    </div>

                    <!-- Project Info -->
                    <div class="rounded-2xl bg-white dark:bg-gray-800 p-6 ring-1 ring-gray-200 dark:ring-gray-700 shadow-sm animate-on-scroll">
                        <h3 class="font-bold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 text-genesis-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Informations projet
                        </h3>
                        <dl class="space-y-3 text-sm">
                            @if($project->client)
                            <div>
                                <dt class="text-gray-500 dark:text-gray-400 mb-1">Client</dt>
                                <dd class="text-gray-900 dark:text-white font-medium">{{ $project->client }}</dd>
                            </div>
                            @endif
                            @if($project->duration)
                            <div>
                                <dt class="text-gray-500 dark:text-gray-400 mb-1">Durée</dt>
                                <dd class="text-gray-900 dark:text-white font-medium">{{ $project->duration }}</dd>
                            </div>
                            @endif
                            <div>
                                <dt class="text-gray-500 dark:text-gray-400 mb-1">Année</dt>
                                <dd class="text-gray-900 dark:text-white font-medium">{{ $project->year }}</dd>
                            </div>
                            <div>
                                <dt class="text-gray-500 dark:text-gray-400 mb-1">Catégorie</dt>
                                <dd class="text-gray-900 dark:text-white font-medium capitalize">{{ $project->category }}</dd>
                            </div>
                        </dl>
                    </div>

                    <!-- Share -->
                    <div class="rounded-2xl bg-white dark:bg-gray-800 p-6 ring-1 ring-gray-200 dark:ring-gray-700 shadow-sm animate-on-scroll">
                        <h3 class="font-bold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 text-genesis-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                            </svg>
                            Partager ce projet
                        </h3>
                        <div class="flex gap-2">
                            <button class="flex-1 flex items-center justify-center gap-2 px-3 py-2 rounded-lg bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </button>
                            <button class="flex-1 flex items-center justify-center gap-2 px-3 py-2 rounded-lg bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </button>
                            <button class="flex-1 flex items-center justify-center gap-2 px-3 py-2 rounded-lg bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>

<!-- Related Projects -->
@if($relatedProjects->count() > 0)
<div class="bg-gray-50 dark:bg-gray-800 py-16 sm:py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mb-12 animate-on-scroll">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white mb-3">
                Projets similaires
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-400">
                Découvrez d'autres réalisations
            </p>
        </div>

        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 stagger-parent">
            @foreach($relatedProjects as $related)
                <a href="{{ route('projects.show', $related) }}" class="group flex flex-col rounded-2xl bg-white dark:bg-gray-900 shadow-lg hover:shadow-2xl transition-all duration-300 ring-1 ring-gray-200 dark:ring-gray-700 hover:ring-genesis-blue-500/50 hover:-translate-y-1 overflow-hidden stagger-child card-3d animate-on-scroll">
                    <div class="relative h-56 bg-gradient-to-br from-{{ $related->color }}-500 via-{{ $related->color }}-500 to-{{ $related->color }}-600 flex items-center justify-center overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-{{ $related->color }}-500/20 to-{{ $related->color }}-600/20 group-hover:scale-110 transition-transform duration-300"></div>
                        <div class="relative">
                            <div class="absolute inset-0 bg-{{ $related->color }}-400/50 blur-xl group-hover:blur-2xl transition-all duration-300"></div>
                            <div class="relative">
                                {!! $related->icon !!}
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 text-xs font-semibold bg-gradient-genesis text-white rounded-full capitalize">
                                {{ $related->category }}
                            </span>
                            <span class="text-xs font-medium text-gray-500 dark:text-gray-400">{{ $related->year }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-genesis-blue-600 dark:group-hover:text-genesis-blue-400 transition-colors">
                            {{ $related->title }}
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                            {{ Str::limit($related->description, 120) }}
                        </p>
                        <div class="mt-6 flex items-center text-genesis-blue-600 dark:text-genesis-blue-400 font-semibold text-sm group-hover:gap-2 transition-all duration-300">
                            Voir le projet
                            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
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
                Prêt à lancer votre projet ?
            </h2>
            <p class="text-xl leading-8 text-white/90 mb-10 animate-on-scroll">
                Transformons ensemble vos idées en solutions digitales performantes et innovantes.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 animate-on-scroll">
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 rounded-lg bg-white text-genesis-blue-600 px-8 py-3.5 text-base font-semibold shadow-lg hover:bg-gray-50 hover:shadow-xl hover:scale-105 transition-all duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    Démarrer un projet
                </a>
                <a href="{{ route('services') }}" class="inline-flex items-center gap-2 text-base font-semibold text-white hover:text-gray-200 transition-colors duration-300 px-6 py-3">
                    Nos services
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

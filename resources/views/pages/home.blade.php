@extends('layouts.public')

@section('title', 'Accueil')

@section('content')
<!-- Hero Section with Background Effects and Slider -->
<div class="bg-gradient-to-b from-gray-900 via-gray-900 to-white dark:to-gray-900 relative isolate overflow-hidden">
    <!-- Decorative Background Elements -->
    <div aria-hidden="true" class="absolute inset-0 -z-10">
        <div class="absolute inset-x-0 top-0 h-full bg-gradient-to-b from-genesis-blue-500/10 via-transparent to-transparent parallax-slow" data-speed="0.3"></div>
        <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
             class="absolute left-[calc(50%-15rem)] top-0 aspect-[1155/678] w-[50rem] -translate-x-1/2 rotate-[30deg] bg-gradient-genesis opacity-20 blur-3xl sm:left-[calc(50%-30rem)] sm:w-[72rem] parallax-fast float-animation" data-speed="0.5"></div>
        <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
             class="absolute right-[calc(50%-15rem)] top-20 aspect-[1155/678] w-[40rem] translate-x-1/2 rotate-[-30deg] bg-gradient-genesis opacity-15 blur-3xl sm:right-[calc(50%-20rem)] sm:w-[60rem] parallax-fast float-animation" data-speed="0.6"></div>
    </div>

    <div class="relative px-6 pt-8 lg:px-8" x-data="{
        currentSlide: 0,
        slides: [
            {
                badge: 'Découvrez nos dernières innovations',
                title: 'Transformez votre vision en réalité digitale',
                description: 'Nous créons des solutions web et mobile innovantes qui propulsent votre entreprise vers le succès. De l\'idée au déploiement, Genesis est votre partenaire technologique.'
            },
            {
                badge: 'Excellence & Innovation',
                title: 'Des solutions sur mesure pour votre entreprise',
                description: 'Expertise en développement web, applications mobile et cloud. Nous concevons des produits digitaux performants qui répondent à vos besoins spécifiques.'
            },
            {
                badge: 'Accompagnement complet',
                title: 'Votre succès est notre priorité',
                description: 'De la stratégie au déploiement, notre équipe vous accompagne à chaque étape pour garantir la réussite de votre projet digital.'
            }
        ],
        autoplay: null,
        init() {
            this.autoplay = setInterval(() => {
                this.next();
            }, 5000);
        },
        next() {
            this.currentSlide = (this.currentSlide + 1) % this.slides.length;
        },
        prev() {
            this.currentSlide = this.currentSlide === 0 ? this.slides.length - 1 : this.currentSlide - 1;
        },
        goTo(index) {
            this.currentSlide = index;
            clearInterval(this.autoplay);
            this.autoplay = setInterval(() => { this.next(); }, 5000);
        }
    }">
        <div class="mx-auto max-w-7xl py-12 sm:py-16 lg:py-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left: Content -->
                <div>
                    <!-- Badge animé -->
                    <div class="mb-8 flex justify-center lg:justify-start animate-on-scroll">
                        <div class="relative rounded-full px-4 py-1.5 text-sm leading-6 text-gray-300 ring-1 ring-white/10 hover:ring-white/20 backdrop-blur-sm transition-all duration-300 bg-white/5 pulse-glow shimmer">
                            <span x-text="slides[currentSlide].badge"></span>
                            <a href="{{ route('projects') }}" class="font-semibold text-genesis-blue-500 ml-1 hover:text-genesis-blue-400 transition-colors">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                En savoir plus <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>

                    <div class="text-center lg:text-left">
                        <!-- Slider Content -->
                        <div class="relative min-h-[350px] sm:min-h-[300px]">
                            <template x-for="(slide, index) in slides" :key="index">
                                <div x-show="currentSlide === index"
                                     x-transition:enter="transition ease-out duration-500"
                                     x-transition:enter-start="opacity-0 transform translate-x-8"
                                     x-transition:enter-end="opacity-100 transform translate-x-0"
                                     x-transition:leave="transition ease-in duration-500"
                                     x-transition:leave-start="opacity-100 transform translate-x-0"
                                     x-transition:leave-end="opacity-0 transform -translate-x-8"
                                     class="absolute inset-0">
                                    <h1 class="text-4xl font-bold tracking-tight text-balance text-white sm:text-6xl lg:text-7xl leading-tight"
                                        x-text="slide.title">
                                    </h1>
                                    <p class="mt-8 text-lg font-medium text-pretty text-gray-300 sm:text-xl/8 max-w-2xl mx-auto lg:mx-0"
                                       x-text="slide.description">
                                    </p>
                                </div>
                            </template>
                        </div>

                        <!-- Slider Controls -->
                        <div class="mt-16 flex items-center justify-center lg:justify-start gap-x-6">
                            <a href="{{ route('services') }}" class="rounded-lg bg-gradient-genesis px-6 py-3.5 text-base font-semibold text-white shadow-lg hover:shadow-xl focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-genesis-blue-500 transition-all duration-300">
                                Découvrir nos services
                            </a>
                            <a href="{{ route('contact') }}" class="text-base font-semibold text-white hover:text-gray-300 transition-colors duration-300 flex items-center gap-2">
                                Nous contacter
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>

                        <!-- Slider Dots -->
                        <div class="mt-12 flex justify-center lg:justify-start gap-2">
                            <template x-for="(slide, index) in slides" :key="index">
                                <button @click="goTo(index)"
                                        :class="currentSlide === index ? 'bg-genesis-blue-500 w-8' : 'bg-white/30 w-2 hover:bg-white/50'"
                                        class="h-2 rounded-full transition-all duration-300">
                                </button>
                            </template>
                        </div>

                        <!-- Navigation Arrows -->
                        <div class="mt-8 flex justify-center lg:justify-start items-center gap-4">
                            <button @click="prev()"
                                    class="p-3 rounded-full bg-white/10 hover:bg-white/20 text-white transition-all duration-300 backdrop-blur-sm hover:scale-110 active:scale-95">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                </svg>
                            </button>
                            <button @click="next()"
                                    class="p-3 rounded-full bg-white/10 hover:bg-white/20 text-white transition-all duration-300 backdrop-blur-sm hover:scale-110 active:scale-95">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Right: Illustration -->
                <div class="hidden lg:block animate-on-scroll opacity-0 translate-x-10">
                    <x-illustrations.team-collaboration class="w-full h-auto drop-shadow-2xl" />
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Services Overview Section -->
<div class="py-16 sm:py-20 bg-white dark:bg-gray-900 relative -mt-20">
    <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-gray-300 dark:via-gray-700 to-transparent"></div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base font-semibold leading-7 text-genesis-blue-500 flex items-center justify-center gap-2">
                <div class="w-8 h-px bg-gradient-to-r from-transparent to-genesis-blue-500"></div>
                Nos Services
                <div class="w-8 h-px bg-gradient-to-l from-transparent to-genesis-blue-500"></div>
            </h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                Des solutions complètes pour votre entreprise
            </p>
            <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-400">
                De la conception au déploiement, nous vous accompagnons à chaque étape de votre transformation digitale avec expertise et innovation.
            </p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none stagger-parent">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                @foreach($services as $service)
                <div class="flex flex-col group stagger-child card-3d animate-on-scroll opacity-0 translate-x-10 transition-all duration-700">
                    <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900 dark:text-white">
                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-gradient-to-br from-{{ $service['color'] }}-500 to-{{ $service['color'] }}-600 group-hover:scale-110 transition-transform duration-300">
                            <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                {!! $service['icon'] !!}
                            </svg>
                        </div>
                        {{ $service['title'] }}
                    </dt>
                    <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600 dark:text-gray-400">
                        <p class="flex-auto">{{ $service['description'] }}</p>
                    </dd>
                </div>
                @endforeach
            </dl>
        </div>
    </div>
</div>

<!-- Stats Section -->
<div class="bg-gray-900 py-16 sm:py-20 relative">
    <div class="absolute inset-x-0 top-0 h-1 bg-gradient-genesis opacity-50"></div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:max-w-none">
            <div class="text-center">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Des résultats qui parlent d'eux-mêmes
                </h2>
                <p class="mt-4 text-lg leading-8 text-gray-300">
                    Notre expertise au service de votre réussite
                </p>
            </div>
            <dl class="mt-16 grid grid-cols-1 gap-6 overflow-hidden text-center sm:grid-cols-2 lg:grid-cols-4">
                <div class="flex flex-col bg-white/5 backdrop-blur-sm p-8 rounded-2xl ring-1 ring-white/10 hover:bg-white/10 hover:ring-genesis-blue-500/50 transition-all duration-300 group stat-card animate-on-scroll hover:scale-105">
                    <dt class="text-sm font-semibold leading-6 text-gray-300 group-hover:text-gray-200">Projets réalisés</dt>
                    <dd class="order-first text-4xl font-bold tracking-tight text-white mb-2">
                        <span class="bg-gradient-genesis bg-clip-text text-transparent" data-count="50">0</span>+
                    </dd>
                </div>
                <div class="flex flex-col bg-white/5 backdrop-blur-sm p-8 rounded-2xl ring-1 ring-white/10 hover:bg-white/10 hover:ring-genesis-blue-500/50 transition-all duration-300 group stat-card animate-on-scroll hover:scale-105">
                    <dt class="text-sm font-semibold leading-6 text-gray-300 group-hover:text-gray-200">Clients satisfaits</dt>
                    <dd class="order-first text-4xl font-bold tracking-tight text-white mb-2">
                        <span class="bg-gradient-genesis bg-clip-text text-transparent" data-count="100">0</span>%
                    </dd>
                </div>
                <div class="flex flex-col bg-white/5 backdrop-blur-sm p-8 rounded-2xl ring-1 ring-white/10 hover:bg-white/10 hover:ring-genesis-blue-500/50 transition-all duration-300 group stat-card animate-on-scroll hover:scale-105">
                    <dt class="text-sm font-semibold leading-6 text-gray-300 group-hover:text-gray-200">Années d'expérience</dt>
                    <dd class="order-first text-4xl font-bold tracking-tight text-white mb-2">
                        <span class="bg-gradient-genesis bg-clip-text text-transparent" data-count="5">0</span>+
                    </dd>
                </div>
                <div class="flex flex-col bg-white/5 backdrop-blur-sm p-8 rounded-2xl ring-1 ring-white/10 hover:bg-white/10 hover:ring-genesis-blue-500/50 transition-all duration-300 group stat-card animate-on-scroll hover:scale-105">
                    <dt class="text-sm font-semibold leading-6 text-gray-300 group-hover:text-gray-200">Technologies maîtrisées</dt>
                    <dd class="order-first text-4xl font-bold tracking-tight text-white mb-2">
                        <span class="bg-gradient-genesis bg-clip-text text-transparent" data-count="20">0</span>+
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</div>

<!-- Process Section -->
<div class="bg-white dark:bg-gray-900 py-16 sm:py-20 relative">
    <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-gray-300 dark:via-gray-700 to-transparent"></div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base font-semibold leading-7 text-genesis-blue-500 flex items-center justify-center gap-2">
                <div class="w-8 h-px bg-gradient-to-r from-transparent to-genesis-blue-500"></div>
                Notre Processus
                <div class="w-8 h-px bg-gradient-to-l from-transparent to-genesis-blue-500"></div>
            </h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                Comment nous travaillons
            </p>
            <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-400">
                Une méthodologie éprouvée pour garantir le succès de votre projet
            </p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none stagger-parent">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-4">
                <div class="flex flex-col items-start group stagger-child animate-on-scroll opacity-0 translate-x-10 transition-all duration-700">
                    <div class="relative">
                        <div class="rounded-xl bg-gradient-to-br from-sky-500 to-cyan-500 p-4 ring-1 ring-white/10 shadow-lg group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
                            <span class="text-2xl font-bold text-white">1</span>
                        </div>
                        <div class="absolute -right-4 top-1/2 -translate-y-1/2 hidden lg:block">
                            <svg class="w-8 h-8 text-sky-500/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </div>
                    </div>
                    <dt class="mt-6 font-semibold text-gray-900 dark:text-white text-lg">Analyse</dt>
                    <dd class="mt-2 leading-7 text-gray-600 dark:text-gray-400">Compréhension approfondie de vos besoins et objectifs business.</dd>
                </div>
                <div class="flex flex-col items-start group stagger-child animate-on-scroll opacity-0 translate-x-10 transition-all duration-700">
                    <div class="relative">
                        <div class="rounded-xl bg-gradient-to-br from-sky-500 to-cyan-500 p-4 ring-1 ring-white/10 shadow-lg group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
                            <span class="text-2xl font-bold text-white">2</span>
                        </div>
                        <div class="absolute -right-4 top-1/2 -translate-y-1/2 hidden lg:block">
                            <svg class="w-8 h-8 text-sky-500/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </div>
                    </div>
                    <dt class="mt-6 font-semibold text-gray-900 dark:text-white text-lg">Conception</dt>
                    <dd class="mt-2 leading-7 text-gray-600 dark:text-gray-400">Design UX/UI et architecture technique adaptés à votre projet.</dd>
                </div>
                <div class="flex flex-col items-start group stagger-child animate-on-scroll opacity-0 translate-x-10 transition-all duration-700">
                    <div class="relative">
                        <div class="rounded-xl bg-gradient-to-br from-sky-500 to-cyan-500 p-4 ring-1 ring-white/10 shadow-lg group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
                            <span class="text-2xl font-bold text-white">3</span>
                        </div>
                        <div class="absolute -right-4 top-1/2 -translate-y-1/2 hidden lg:block">
                            <svg class="w-8 h-8 text-sky-500/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </div>
                    </div>
                    <dt class="mt-6 font-semibold text-gray-900 dark:text-white text-lg">Développement</dt>
                    <dd class="mt-2 leading-7 text-gray-600 dark:text-gray-400">Développement agile avec des livraisons régulières et tests continus.</dd>
                </div>
                <div class="flex flex-col items-start group">
                    <div class="rounded-xl bg-gradient-to-br from-sky-500 to-cyan-500 p-4 ring-1 ring-white/10 shadow-lg group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
                        <span class="text-2xl font-bold text-white">4</span>
                    </div>
                    <dt class="mt-6 font-semibold text-gray-900 dark:text-white text-lg">Déploiement</dt>
                    <dd class="mt-2 leading-7 text-gray-600 dark:text-gray-400">Mise en production et support pour assurer la réussite de votre solution.</dd>
                </div>
            </dl>
        </div>
    </div>
</div>

<!-- Testimonial Section -->
<div class="bg-gray-900 py-16 sm:py-20 relative">
    <div class="absolute inset-x-0 top-0 h-1 bg-gradient-genesis opacity-50"></div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-xl text-center">
            <h2 class="text-lg font-semibold leading-8 tracking-tight text-genesis-blue-400">Témoignages</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">
                Ce que disent nos clients
            </p>
        </div>
        <div class="mx-auto mt-16 flow-root max-w-2xl sm:mt-20 lg:mx-0 lg:max-w-none stagger-parent">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-2xl bg-white/5 backdrop-blur-sm p-8 ring-1 ring-white/10 hover:bg-white/10 hover:ring-genesis-blue-500/50 transition-all duration-300 group stagger-child card-3d animate-on-scroll opacity-0 translate-y-10 hover:scale-105">
                    <figure class="flex flex-col justify-between h-full">
                        <div>
                            <div class="flex gap-1 mb-4">
                                <svg class="w-5 h-5 text-sky-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-sky-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-sky-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-sky-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-sky-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <blockquote class="text-lg leading-7 text-white">
                                <p>"Genesis a transformé notre vision en une application web exceptionnelle. Leur expertise technique est remarquable."</p>
                            </blockquote>
                        </div>
                        <figcaption class="mt-6 flex items-center gap-x-4">
                            <div class="h-12 w-12 rounded-full bg-gradient-genesis flex items-center justify-center text-white font-bold text-lg ring-2 ring-white/20 group-hover:scale-110 transition-transform">M</div>
                            <div>
                                <div class="font-semibold text-white">Marie Dubois</div>
                                <div class="text-sm text-gray-400">CEO, TechCorp</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="rounded-2xl bg-white/5 backdrop-blur-sm p-8 ring-1 ring-white/10 hover:bg-white/10 hover:ring-sky-500/50 transition-all duration-300 group">
                    <figure class="flex flex-col justify-between h-full">
                        <div>
                            <div class="flex gap-1 mb-4">
                                <svg class="w-5 h-5 text-sky-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-sky-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-sky-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-sky-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-sky-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <blockquote class="text-lg leading-7 text-white">
                                <p>"Une équipe professionnelle et réactive. Notre projet a été livré dans les délais avec une qualité irréprochable."</p>
                            </blockquote>
                        </div>
                        <figcaption class="mt-6 flex items-center gap-x-4">
                            <div class="h-12 w-12 rounded-full bg-gradient-genesis flex items-center justify-center text-white font-bold text-lg ring-2 ring-white/20 group-hover:scale-110 transition-transform">J</div>
                            <div>
                                <div class="font-semibold text-white">Jean Martin</div>
                                <div class="text-sm text-gray-400">Directeur, InnovateCo</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="rounded-2xl bg-white/5 backdrop-blur-sm p-8 ring-1 ring-white/10 hover:bg-white/10 hover:ring-sky-500/50 transition-all duration-300 group">
                    <figure class="flex flex-col justify-between h-full">
                        <div>
                            <div class="flex gap-1 mb-4">
                                <svg class="w-5 h-5 text-sky-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-sky-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-sky-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-sky-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-sky-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <blockquote class="text-lg leading-7 text-white">
                                <p>"Leur accompagnement tout au long du projet a été précieux. Je recommande vivement leurs services."</p>
                            </blockquote>
                        </div>
                        <figcaption class="mt-6 flex items-center gap-x-4">
                            <div class="h-12 w-12 rounded-full bg-gradient-genesis flex items-center justify-center text-white font-bold text-lg ring-2 ring-white/20 group-hover:scale-110 transition-transform">S</div>
                            <div>
                                <div class="font-semibold text-white">Sophie Laurent</div>
                                <div class="text-sm text-gray-400">Fondatrice, StartupHub</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="bg-white dark:bg-gray-900 relative">
    <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-gray-300 dark:via-gray-700 to-transparent"></div>
    <div class="px-6 py-16 sm:px-6 sm:py-20 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                Prêt à démarrer votre projet ?
            </h2>
            <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-600 dark:text-gray-400">
                Contactez-nous dès aujourd'hui pour discuter de vos besoins et obtenir un devis personnalisé.
            </p>
            <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 rounded-lg bg-gradient-genesis px-8 py-3.5 text-base font-semibold text-white shadow-lg hover:shadow-xl transition-all duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                    </svg>
                    Nous contacter
                </a>
                <a href="{{ route('projects') }}" class="inline-flex items-center gap-2 text-base font-semibold leading-6 text-gray-900 dark:text-white hover:text-genesis-blue-600 dark:hover:text-genesis-blue-400 transition-colors duration-300 px-6 py-3">
                    Voir nos projets
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

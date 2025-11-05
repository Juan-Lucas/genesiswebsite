@extends('layouts.public')

@section('title', 'Accueil')

@section('content')
<!-- Hero Section with Background Effects and Slider -->
<div class="bg-gray-900 relative isolate overflow-hidden">
    <div aria-hidden="true" class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
        <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
             class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#0ea5e9] to-[#06b6d4] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"></div>
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
        <div class="mx-auto max-w-2xl py-12 sm:py-16 lg:py-24">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-400 ring-1 ring-white/10 hover:ring-white/20 transition-all duration-300">
                    <span x-text="slides[currentSlide].badge"></span>
                    <a href="{{ route('projects') }}" class="font-semibold text-sky-400 ml-1">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        En savoir plus <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>

            <div class="text-center">
                <!-- Slider Content -->
                <div class="relative min-h-[400px] sm:min-h-[300px]">
                    <template x-for="(slide, index) in slides" :key="index">
                        <div x-show="currentSlide === index"
                             x-transition:enter="transition ease-out duration-500"
                             x-transition:enter-start="opacity-0 transform translate-x-8"
                             x-transition:enter-end="opacity-100 transform translate-x-0"
                             x-transition:leave="transition ease-in duration-500"
                             x-transition:leave-start="opacity-100 transform translate-x-0"
                             x-transition:leave-end="opacity-0 transform -translate-x-8"
                             class="absolute inset-0">
                            <h1 class="text-5xl font-semibold tracking-tight text-balance text-white sm:text-7xl"
                                x-text="slide.title">
                            </h1>
                            <p class="mt-8 text-lg font-medium text-pretty text-gray-400 sm:text-xl/8"
                               x-text="slide.description">
                            </p>
                        </div>
                    </template>
                </div>

                <!-- Slider Controls -->
                <div class="mt-16 flex items-center justify-center gap-x-6">
                    <a href="{{ route('services') }}" class="rounded-md bg-gradient-to-r from-sky-500 to-cyan-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:from-sky-600 hover:to-cyan-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-500 transition-all duration-300">
                        Découvrir nos services
                    </a>
                    <a href="{{ route('contact') }}" class="text-sm/6 font-semibold text-white hover:text-gray-300 transition-colors duration-300">
                        Nous contacter <span aria-hidden="true">→</span>
                    </a>
                </div>

                <!-- Slider Dots -->
                <div class="mt-12 flex justify-center gap-2">
                    <template x-for="(slide, index) in slides" :key="index">
                        <button @click="goTo(index)"
                                :class="currentSlide === index ? 'bg-sky-500 w-8' : 'bg-white/30 w-2'"
                                class="h-2 rounded-full transition-all duration-300 hover:bg-sky-400">
                        </button>
                    </template>
                </div>

                <!-- Navigation Arrows -->
                <div class="absolute inset-y-0 left-0 right-0 flex items-center justify-between px-4 pointer-events-none">
                    <button @click="prev()"
                            class="pointer-events-auto p-2 rounded-full bg-white/10 hover:bg-white/20 text-white transition-all duration-300 backdrop-blur-sm">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button @click="next()"
                            class="pointer-events-auto p-2 rounded-full bg-white/10 hover:bg-white/20 text-white transition-all duration-300 backdrop-blur-sm">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div aria-hidden="true" class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
        <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
             class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#0ea5e9] to-[#06b6d4] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"></div>
    </div>
</div>

<!-- Services Overview Section -->
<div class="py-16 sm:py-20 bg-white dark:bg-gray-900">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base font-semibold leading-7 text-sky-500">Nos Services</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                Des solutions complètes pour votre entreprise
            </p>
            <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-400">
                De la conception au déploiement, nous vous accompagnons à chaque étape de votre transformation digitale avec expertise et innovation.
            </p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                <div class="flex flex-col">
                    <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900 dark:text-white">
                        <svg class="h-5 w-5 flex-none text-sky-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.25 2A2.25 2.25 0 002 4.25v11.5A2.25 2.25 0 004.25 18h11.5A2.25 2.25 0 0018 15.75V4.25A2.25 2.25 0 0015.75 2H4.25zm4.03 6.28a.75.75 0 00-1.06-1.06L4.97 9.47a.75.75 0 000 1.06l2.25 2.25a.75.75 0 001.06-1.06L6.56 10l1.72-1.72zm4.5-1.06a.75.75 0 10-1.06 1.06L13.44 10l-1.72 1.72a.75.75 0 101.06 1.06l2.25-2.25a.75.75 0 000-1.06l-2.25-2.25z" clip-rule="evenodd" />
                        </svg>
                        Développement Web
                    </dt>
                    <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600 dark:text-gray-400">
                        <p class="flex-auto">Applications web modernes et performantes avec les dernières technologies. Sites vitrines, e-commerce, plateformes sur mesure.</p>
                    </dd>
                </div>
                <div class="flex flex-col">
                    <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900 dark:text-white">
                        <svg class="h-5 w-5 flex-none text-sky-500" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M7 3.5A1.5 1.5 0 018.5 2h3.879a1.5 1.5 0 011.06.44l3.122 3.12A1.5 1.5 0 0117 6.622V12.5a1.5 1.5 0 01-1.5 1.5h-1v-3.379a3 3 0 00-.879-2.121L10.5 5.379A3 3 0 008.379 4.5H7v-1z" />
                            <path d="M4.5 6A1.5 1.5 0 003 7.5v9A1.5 1.5 0 004.5 18h7a1.5 1.5 0 001.5-1.5v-5.879a1.5 1.5 0 00-.44-1.06L9.44 6.439A1.5 1.5 0 008.378 6H4.5z" />
                        </svg>
                        Applications Mobile
                    </dt>
                    <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600 dark:text-gray-400">
                        <p class="flex-auto">Applications iOS et Android natives ou cross-platform pour atteindre votre audience sur tous les appareils.</p>
                    </dd>
                </div>
                <div class="flex flex-col">
                    <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900 dark:text-white">
                        <svg class="h-5 w-5 flex-none text-sky-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.5 2A1.5 1.5 0 003 3.5v13A1.5 1.5 0 004.5 18h11a1.5 1.5 0 001.5-1.5V7.621a1.5 1.5 0 00-.44-1.06l-4.12-4.122A1.5 1.5 0 0011.378 2H4.5zm4.75 6.75a.75.75 0 011.5 0v2.546l.943-1.048a.75.75 0 011.114 1.004l-2.25 2.5a.75.75 0 01-1.114 0l-2.25-2.5a.75.75 0 111.114-1.004l.943 1.048V8.75z" clip-rule="evenodd" />
                        </svg>
                        Cloud Solutions
                    </dt>
                    <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600 dark:text-gray-400">
                        <p class="flex-auto">Infrastructure cloud, hébergement, migration et optimisation pour une scalabilité et sécurité maximales.</p>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</div>

<!-- Stats Section -->
<div class="bg-gray-900 py-16 sm:py-20">
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
            <dl class="mt-16 grid grid-cols-1 gap-0.5 overflow-hidden rounded-2xl text-center sm:grid-cols-2 lg:grid-cols-4">
                <div class="flex flex-col bg-white/5 p-8">
                    <dt class="text-sm font-semibold leading-6 text-gray-300">Projets réalisés</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-white">50+</dd>
                </div>
                <div class="flex flex-col bg-white/5 p-8">
                    <dt class="text-sm font-semibold leading-6 text-gray-300">Clients satisfaits</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-white">100%</dd>
                </div>
                <div class="flex flex-col bg-white/5 p-8">
                    <dt class="text-sm font-semibold leading-6 text-gray-300">Années d'expérience</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-white">5+</dd>
                </div>
                <div class="flex flex-col bg-white/5 p-8">
                    <dt class="text-sm font-semibold leading-6 text-gray-300">Technologies maîtrisées</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-white">20+</dd>
                </div>
            </dl>
        </div>
    </div>
</div>

<!-- Process Section -->
<div class="bg-white dark:bg-gray-900 py-16 sm:py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base font-semibold leading-7 text-sky-500">Notre Processus</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                Comment nous travaillons
            </p>
            <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-400">
                Une méthodologie éprouvée pour garantir le succès de votre projet
            </p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-4">
                <div class="flex flex-col items-start">
                    <div class="rounded-lg bg-gradient-to-br from-sky-500 to-cyan-500 p-3 ring-1 ring-white/10">
                        <span class="text-2xl font-bold text-white">1</span>
                    </div>
                    <dt class="mt-4 font-semibold text-gray-900 dark:text-white">Analyse</dt>
                    <dd class="mt-2 leading-7 text-gray-600 dark:text-gray-400">Compréhension approfondie de vos besoins et objectifs business.</dd>
                </div>
                <div class="flex flex-col items-start">
                    <div class="rounded-lg bg-gradient-to-br from-sky-500 to-cyan-500 p-3 ring-1 ring-white/10">
                        <span class="text-2xl font-bold text-white">2</span>
                    </div>
                    <dt class="mt-4 font-semibold text-gray-900 dark:text-white">Conception</dt>
                    <dd class="mt-2 leading-7 text-gray-600 dark:text-gray-400">Design UX/UI et architecture technique adaptés à votre projet.</dd>
                </div>
                <div class="flex flex-col items-start">
                    <div class="rounded-lg bg-gradient-to-br from-sky-500 to-cyan-500 p-3 ring-1 ring-white/10">
                        <span class="text-2xl font-bold text-white">3</span>
                    </div>
                    <dt class="mt-4 font-semibold text-gray-900 dark:text-white">Développement</dt>
                    <dd class="mt-2 leading-7 text-gray-600 dark:text-gray-400">Développement agile avec des livraisons régulières et tests continus.</dd>
                </div>
                <div class="flex flex-col items-start">
                    <div class="rounded-lg bg-gradient-to-br from-sky-500 to-cyan-500 p-3 ring-1 ring-white/10">
                        <span class="text-2xl font-bold text-white">4</span>
                    </div>
                    <dt class="mt-4 font-semibold text-gray-900 dark:text-white">Déploiement</dt>
                    <dd class="mt-2 leading-7 text-gray-600 dark:text-gray-400">Mise en production et support pour assurer la réussite de votre solution.</dd>
                </div>
            </dl>
        </div>
    </div>
</div>

<!-- Testimonial Section -->
<div class="bg-gray-900 py-16 sm:py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-xl text-center">
            <h2 class="text-lg font-semibold leading-8 tracking-tight text-sky-400">Témoignages</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">
                Ce que disent nos clients
            </p>
        </div>
        <div class="mx-auto mt-16 flow-root max-w-2xl sm:mt-20 lg:mx-0 lg:max-w-none">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-2xl bg-white/5 p-8 ring-1 ring-white/10">
                    <figure class="flex flex-col justify-between h-full">
                        <blockquote class="text-lg leading-7 text-white">
                            <p>"Genesis a transformé notre vision en une application web exceptionnelle. Leur expertise technique est remarquable."</p>
                        </blockquote>
                        <figcaption class="mt-6 flex items-center gap-x-4">
                            <div class="h-10 w-10 rounded-full bg-gradient-to-br from-sky-400 to-cyan-400"></div>
                            <div>
                                <div class="font-semibold text-white">Marie Dubois</div>
                                <div class="text-sm text-gray-400">CEO, TechCorp</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="rounded-2xl bg-white/5 p-8 ring-1 ring-white/10">
                    <figure class="flex flex-col justify-between h-full">
                        <blockquote class="text-lg leading-7 text-white">
                            <p>"Une équipe professionnelle et réactive. Notre projet a été livré dans les délais avec une qualité irréprochable."</p>
                        </blockquote>
                        <figcaption class="mt-6 flex items-center gap-x-4">
                            <div class="h-10 w-10 rounded-full bg-gradient-to-br from-sky-400 to-cyan-400"></div>
                            <div>
                                <div class="font-semibold text-white">Jean Martin</div>
                                <div class="text-sm text-gray-400">Directeur, InnovateCo</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="rounded-2xl bg-white/5 p-8 ring-1 ring-white/10">
                    <figure class="flex flex-col justify-between h-full">
                        <blockquote class="text-lg leading-7 text-white">
                            <p>"Leur accompagnement tout au long du projet a été précieux. Je recommande vivement leurs services."</p>
                        </blockquote>
                        <figcaption class="mt-6 flex items-center gap-x-4">
                            <div class="h-10 w-10 rounded-full bg-gradient-to-br from-sky-400 to-cyan-400"></div>
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
<div class="bg-white dark:bg-gray-900">
    <div class="px-6 py-16 sm:px-6 sm:py-20 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                Prêt à démarrer votre projet ?
            </h2>
            <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-600 dark:text-gray-400">
                Contactez-nous dès aujourd'hui pour discuter de vos besoins et obtenir un devis personnalisé.
            </p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="{{ route('contact') }}" class="rounded-md bg-gradient-to-r from-sky-500 to-cyan-500 px-6 py-3 text-base font-semibold text-white shadow-sm hover:from-sky-600 hover:to-cyan-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-500">
                    Nous contacter
                </a>
                <a href="{{ route('projects') }}" class="text-base font-semibold leading-6 text-gray-900 dark:text-white">
                    Voir nos projets <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.public')

@section('title', 'Contact')

@section('content')
<!-- Hero Section -->
<div class="relative bg-gradient-to-b from-gray-900 via-gray-900 to-white dark:to-gray-900 overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-sky-500/20 dark:bg-sky-500/10 rounded-full blur-3xl"></div>
        <div class="absolute top-10 -left-40 w-80 h-80 bg-cyan-500/20 dark:bg-cyan-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-20 right-1/3 w-72 h-72 bg-blue-500/20 dark:bg-blue-500/10 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 sm:py-32">
        <div class="text-center">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 dark:bg-white/5 backdrop-blur-sm border border-white/20 rounded-full mb-6">
                <svg class="h-5 w-5 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <span class="text-sm font-medium text-white">Nous sommes à votre écoute</span>
            </div>

            <h1 class="text-4xl font-extrabold text-white sm:text-5xl md:text-6xl">
                <span class="block">Contactez-nous</span>
                <span class="block mt-2 bg-gradient-to-r from-sky-400 via-cyan-400 to-blue-500 bg-clip-text text-transparent">
                    Discutons de votre projet
                </span>
            </h1>
            <p class="mt-6 max-w-2xl mx-auto text-xl text-gray-300 leading-relaxed">
                Notre équipe d'experts est prête à vous accompagner dans la réalisation de vos ambitions digitales
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

<!-- Contact Section -->
<div class="bg-gray-50 dark:bg-gray-800 py-16 sm:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="bg-white dark:bg-gray-700 rounded-2xl shadow-xl p-8 ring-1 ring-gray-200 dark:ring-gray-600">
                <div class="mb-8">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-xl bg-gradient-to-br from-sky-500 to-cyan-500 mb-4 shadow-lg">
                        <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">
                        Envoyez-nous un message
                    </h2>
                    <p class="text-gray-600 dark:text-gray-400">
                        Remplissez le formulaire et nous vous répondrons dans les plus brefs délais
                    </p>
                </div>
                <form method="POST" action="{{ route('contact') }}" class="space-y-6">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Nom complet <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="name" id="name" required
                            class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white placeholder-gray-400 focus:ring-2 focus:ring-sky-500 focus:border-sky-500 transition-all duration-300"
                            placeholder="Jean Dupont">
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input type="email" name="email" id="email" required
                            class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white placeholder-gray-400 focus:ring-2 focus:ring-sky-500 focus:border-sky-500 transition-all duration-300"
                            placeholder="jean.dupont@example.com">
                    </div>

                    <!-- Phone -->
                    <div>
                        <label for="phone" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Téléphone <span class="text-gray-400 text-xs">(optionnel)</span>
                        </label>
                        <input type="tel" name="phone" id="phone"
                            class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white placeholder-gray-400 focus:ring-2 focus:ring-sky-500 focus:border-sky-500 transition-all duration-300"
                            placeholder="+33 1 23 45 67 89">
                    </div>

                    <!-- Subject -->
                    <div>
                        <label for="subject" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Sujet <span class="text-red-500">*</span>
                        </label>
                        <select name="subject" id="subject" required
                            class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-sky-500 focus:border-sky-500 transition-all duration-300">
                            <option value="" class="text-gray-400">Sélectionnez un sujet</option>
                            <option value="Nouveau projet">Nouveau projet</option>
                            <option value="Devis">Demande de devis</option>
                            <option value="Support">Support technique</option>
                            <option value="Partenariat">Opportunité de partenariat</option>
                            <option value="Autre">Autre</option>
                        </select>
                    </div>

                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Message <span class="text-red-500">*</span>
                        </label>
                        <textarea name="message" id="message" rows="6" required
                            class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white placeholder-gray-400 focus:ring-2 focus:ring-sky-500 focus:border-sky-500 transition-all duration-300 resize-none"
                            placeholder="Décrivez votre projet ou votre question en détail..."></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="group w-full flex items-center justify-center gap-2 py-4 px-6 border border-transparent rounded-xl shadow-lg text-base font-semibold text-white bg-gradient-to-r from-sky-500 to-cyan-500 hover:from-sky-600 hover:to-cyan-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500 transition-all duration-300 hover:shadow-xl hover:scale-[1.02]">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                            Envoyer le message
                            <svg class="h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="space-y-8">
                <!-- Contact Cards -->
                <div class="bg-white dark:bg-gray-700 rounded-2xl shadow-xl p-8 ring-1 ring-gray-200 dark:ring-gray-600">
                    <div class="mb-8">
                        <div class="inline-flex items-center justify-center w-12 h-12 rounded-xl bg-gradient-to-br from-cyan-500 to-blue-500 mb-4 shadow-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">
                            Informations de contact
                        </h2>
                        <p class="text-gray-600 dark:text-gray-400">
                            N'hésitez pas à nous contacter par le moyen qui vous convient
                        </p>
                    </div>

                    <div class="space-y-6">
                        <!-- Email -->
                        <div class="group flex items-start p-4 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-600/50 transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div class="relative flex items-center justify-center h-14 w-14 rounded-xl bg-gradient-to-br from-sky-500 to-cyan-500 text-white shadow-lg">
                                    <div class="absolute inset-0 bg-sky-400 rounded-xl blur-xl opacity-0 group-hover:opacity-50 transition-opacity duration-300"></div>
                                    <svg class="relative h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-1">Email</h3>
                                <a href="mailto:info@genesis.com" class="block text-sky-600 dark:text-sky-400 hover:underline font-medium">info@genesis.com</a>
                                <a href="mailto:support@genesis.com" class="block text-sky-600 dark:text-sky-400 hover:underline font-medium">support@genesis.com</a>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="group flex items-start p-4 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-600/50 transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div class="relative flex items-center justify-center h-14 w-14 rounded-xl bg-gradient-to-br from-cyan-500 to-blue-500 text-white shadow-lg">
                                    <div class="absolute inset-0 bg-cyan-400 rounded-xl blur-xl opacity-0 group-hover:opacity-50 transition-opacity duration-300"></div>
                                    <svg class="relative h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-1">Téléphone</h3>
                                <a href="tel:+33123456789" class="block text-sky-600 dark:text-sky-400 hover:underline font-medium">+33 1 23 45 67 89</a>
                                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1 flex items-center gap-1">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    Lun-Ven, 9h-18h
                                </p>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="group flex items-start p-4 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-600/50 transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div class="relative flex items-center justify-center h-14 w-14 rounded-xl bg-gradient-to-br from-blue-500 to-indigo-500 text-white shadow-lg">
                                    <div class="absolute inset-0 bg-blue-400 rounded-xl blur-xl opacity-0 group-hover:opacity-50 transition-opacity duration-300"></div>
                                    <svg class="relative h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-1">Adresse</h3>
                                <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                                    123 Avenue des Champs-Élysées<br>
                                    75008 Paris, France
                                </p>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="group flex items-start p-4 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-600/50 transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div class="relative flex items-center justify-center h-14 w-14 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-500 text-white shadow-lg">
                                    <div class="absolute inset-0 bg-indigo-400 rounded-xl blur-xl opacity-0 group-hover:opacity-50 transition-opacity duration-300"></div>
                                    <svg class="relative h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Réseaux sociaux</h3>
                                <div class="flex gap-3">
                                    <a href="#" class="inline-flex items-center justify-center w-10 h-10 rounded-lg bg-gray-100 dark:bg-gray-600 text-gray-600 dark:text-gray-300 hover:bg-sky-100 dark:hover:bg-sky-900/30 hover:text-sky-600 dark:hover:text-sky-400 transition-all duration-300 hover:scale-110">
                                        <span class="sr-only">LinkedIn</span>
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="inline-flex items-center justify-center w-10 h-10 rounded-lg bg-gray-100 dark:bg-gray-600 text-gray-600 dark:text-gray-300 hover:bg-sky-100 dark:hover:bg-sky-900/30 hover:text-sky-600 dark:hover:text-sky-400 transition-all duration-300 hover:scale-110">
                                        <span class="sr-only">Twitter</span>
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="inline-flex items-center justify-center w-10 h-10 rounded-lg bg-gray-100 dark:bg-gray-600 text-gray-600 dark:text-gray-300 hover:bg-sky-100 dark:hover:bg-sky-900/30 hover:text-sky-600 dark:hover:text-sky-400 transition-all duration-300 hover:scale-110">
                                        <span class="sr-only">GitHub</span>
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Business Hours -->
                <div class="bg-gradient-to-br from-sky-50 to-cyan-50 dark:from-gray-700 dark:to-gray-700/50 rounded-2xl p-6 ring-1 ring-gray-200 dark:ring-gray-600 shadow-lg">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="inline-flex items-center justify-center w-10 h-10 rounded-lg bg-gradient-to-br from-sky-500 to-cyan-500 shadow-lg">
                            <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white">Horaires d'ouverture</h3>
                    </div>
                    <div class="space-y-3 text-gray-700 dark:text-gray-300">
                        <div class="flex justify-between items-center p-2 rounded-lg hover:bg-white/50 dark:hover:bg-gray-600/30 transition-colors">
                            <span class="font-medium">Lundi - Vendredi</span>
                            <span class="font-bold text-sky-600 dark:text-sky-400">9h00 - 18h00</span>
                        </div>
                        <div class="flex justify-between items-center p-2 rounded-lg hover:bg-white/50 dark:hover:bg-gray-600/30 transition-colors">
                            <span class="font-medium">Samedi</span>
                            <span class="font-bold text-sky-600 dark:text-sky-400">10h00 - 16h00</span>
                        </div>
                        <div class="flex justify-between items-center p-2 rounded-lg hover:bg-white/50 dark:hover:bg-gray-600/30 transition-colors">
                            <span class="font-medium">Dimanche</span>
                            <span class="font-semibold text-gray-500 dark:text-gray-400">Fermé</span>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

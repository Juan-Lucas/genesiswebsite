<footer class="bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div class="col-span-1 md:col-span-1">
                <div class="flex items-center mb-4">
                    <x-application-logo class="block h-20 w-auto" />
                </div>
                <p class="text-gray-600 dark:text-gray-400 text-base">
                    Solutions innovantes pour votre transformation digitale.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-base font-semibold text-gray-900 dark:text-white tracking-wider uppercase mb-4">
                    Navigation
                </h3>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('home') }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white text-base">
                            Accueil
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white text-base">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white text-base">
                            À propos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('projects') }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white text-base">
                            Projets
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('blog.index') }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white text-base">
                            Blog
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h3 class="text-base font-semibold text-gray-900 dark:text-white tracking-wider uppercase mb-4">
                    Services
                </h3>
                <ul class="space-y-2">
                    <li class="text-gray-600 dark:text-gray-400 text-base">Développement Web</li>
                    <li class="text-gray-600 dark:text-gray-400 text-base">Applications Mobile</li>
                    <li class="text-gray-600 dark:text-gray-400 text-base">Cloud Solutions</li>
                    <li class="text-gray-600 dark:text-gray-400 text-base">Consulting IT</li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="text-base font-semibold text-gray-900 dark:text-white tracking-wider uppercase mb-4">
                    Contact
                </h3>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('contact') }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white text-base">
                            Nous contacter
                        </a>
                    </li>
                    <li class="text-gray-600 dark:text-gray-400 text-base">
                        info@genesis.com
                    </li>
                    <li class="text-gray-600 dark:text-gray-400 text-base">
                        +33 1 23 45 67 89
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="mt-8 pt-8 border-t border-gray-200 dark:border-gray-700">
            <p class="text-center text-gray-500 dark:text-gray-400 text-sm">
                &copy; {{ date('Y') }} Genesis. Tous droits réservés.
            </p>
        </div>
    </div>
</footer>

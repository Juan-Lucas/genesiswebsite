<nav x-data="{ open: false }" class="bg-white/95 dark:bg-gray-900/95 backdrop-blur-md border-b border-gray-200 dark:border-gray-800 fixed top-0 left-0 right-0 z-50 shadow-sm">
    <!-- Decorative gradient border -->
    <div class="absolute inset-x-0 bottom-0 h-px bg-gradient-genesis opacity-50"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-28">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center pt-2">
                        <x-application-logo class="block h-32 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <a href="{{ route('home') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('home') ? 'border-genesis-blue-500 dark:border-genesis-blue-400' : 'border-transparent' }} text-lg font-medium leading-5 {{ request()->routeIs('home') ? 'text-gray-900 dark:text-white' : 'text-gray-600 dark:text-gray-400' }} hover:text-genesis-blue-600 dark:hover:text-genesis-blue-400 hover:border-genesis-blue-300 dark:hover:border-genesis-blue-500 focus:outline-none focus:text-genesis-blue-600 dark:focus:text-genesis-blue-400 transition-all duration-300 ease-in-out group">
                        {{ __('messages.nav.home') }}
                    </a>
                    <a href="{{ route('services') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('services') ? 'border-genesis-blue-500 dark:border-genesis-blue-400' : 'border-transparent' }} text-lg font-medium leading-5 {{ request()->routeIs('services') ? 'text-gray-900 dark:text-white' : 'text-gray-600 dark:text-gray-400' }} hover:text-genesis-blue-600 dark:hover:text-genesis-blue-400 hover:border-genesis-blue-300 dark:hover:border-genesis-blue-500 focus:outline-none focus:text-genesis-blue-600 dark:focus:text-genesis-blue-400 transition-all duration-300 ease-in-out group">
                        {{ __('messages.nav.services') }}
                    </a>
                    <a href="{{ route('about') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('about') ? 'border-genesis-blue-500 dark:border-genesis-blue-400' : 'border-transparent' }} text-lg font-medium leading-5 {{ request()->routeIs('about') ? 'text-gray-900 dark:text-white' : 'text-gray-600 dark:text-gray-400' }} hover:text-genesis-blue-600 dark:hover:text-genesis-blue-400 hover:border-genesis-blue-300 dark:hover:border-genesis-blue-500 focus:outline-none focus:text-genesis-blue-600 dark:focus:text-genesis-blue-400 transition-all duration-300 ease-in-out group">
                        {{ __('messages.nav.about') }}
                    </a>
                    <a href="{{ route('projects') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('projects') ? 'border-genesis-blue-500 dark:border-genesis-blue-400' : 'border-transparent' }} text-lg font-medium leading-5 {{ request()->routeIs('projects') ? 'text-gray-900 dark:text-white' : 'text-gray-600 dark:text-gray-400' }} hover:text-genesis-blue-600 dark:hover:text-genesis-blue-400 hover:border-genesis-blue-300 dark:hover:border-genesis-blue-500 focus:outline-none focus:text-genesis-blue-600 dark:focus:text-genesis-blue-400 transition-all duration-300 ease-in-out group">
                        {{ __('messages.nav.projects') }}
                    </a>
                    <a href="{{ route('blog.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('blog.*') ? 'border-genesis-blue-500 dark:border-genesis-blue-400' : 'border-transparent' }} text-lg font-medium leading-5 {{ request()->routeIs('blog.*') ? 'text-gray-900 dark:text-white' : 'text-gray-600 dark:text-gray-400' }} hover:text-genesis-blue-600 dark:hover:text-genesis-blue-400 hover:border-genesis-blue-300 dark:hover:border-genesis-blue-500 focus:outline-none focus:text-genesis-blue-600 dark:focus:text-genesis-blue-400 transition-all duration-300 ease-in-out group">
                        {{ __('messages.nav.blog') }}
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('contact') ? 'border-genesis-blue-500 dark:border-genesis-blue-400' : 'border-transparent' }} text-lg font-medium leading-5 {{ request()->routeIs('contact') ? 'text-gray-900 dark:text-white' : 'text-gray-600 dark:text-gray-400' }} hover:text-genesis-blue-600 dark:hover:text-genesis-blue-400 hover:border-genesis-blue-300 dark:hover:border-genesis-blue-500 focus:outline-none focus:text-genesis-blue-600 dark:focus:text-genesis-blue-400 transition-all duration-300 ease-in-out group">
                        {{ __('messages.nav.contact') }}
                    </a>
                </div>
            </div>

            <!-- Right Side (Language + Dark Mode + Login) -->
            <div class="hidden sm:flex sm:items-center sm:ms-6 gap-4">
                <!-- Language Switcher (désactivé temporairement) -->
                {{--
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" type="button" class="inline-flex items-center gap-2 px-4 py-3 text-base font-medium text-gray-700 dark:text-gray-200 hover:text-genesis-blue-600 dark:hover:text-genesis-blue-400 focus:outline-none transition-all duration-300">
                        ...
                    </button>
                    <div x-show="open" @click.away="open = false" ...>
                        ...
                    </div>
                </div>
                --}}

                <!-- Demander un devis Button -->
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-7 py-3 text-base font-semibold text-white bg-gradient-genesis rounded-lg hover:shadow-lg hover:scale-105 focus:outline-none focus:ring-2 focus:ring-genesis-blue-500/50 focus:ring-offset-2 shadow-sm transition-all duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    Demander un devis
                </a>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <!-- Language Switcher Mobile (désactivé temporairement) -->
                {{--
                <div x-data="{ open: false }" class="relative me-2">
                    <button @click="open = !open" type="button" class="text-gray-500 dark:text-gray-400 ...">
                        ...
                    </button>
                    <div x-show="open" @click.away="open = false" ...>
                        ...
                    </div>
                </div>
                --}}

                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-genesis-blue-600 dark:hover:text-genesis-blue-400 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 focus:text-genesis-blue-600 dark:focus:text-genesis-blue-400 transition-all duration-300">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden border-t border-gray-200 dark:border-gray-800">
        <div class="pt-2 pb-3 space-y-1 bg-gray-50/50 dark:bg-gray-900/50 backdrop-blur-sm">
            <a href="{{ route('home') }}" class="block ps-3 pe-4 py-2 border-l-4 {{ request()->routeIs('home') ? 'border-genesis-blue-500 dark:border-genesis-blue-400 text-genesis-blue-700 dark:text-genesis-blue-300 bg-genesis-blue-50 dark:bg-genesis-blue-900/30' : 'border-transparent text-gray-600 dark:text-gray-400' }} text-base font-medium hover:text-genesis-blue-700 dark:hover:text-genesis-blue-300 hover:bg-genesis-blue-50 dark:hover:bg-genesis-blue-900/30 hover:border-genesis-blue-300 dark:hover:border-genesis-blue-500 transition-all duration-300">
                {{ __('messages.nav.home') }}
            </a>
            <a href="{{ route('services') }}" class="block ps-3 pe-4 py-2 border-l-4 {{ request()->routeIs('services') ? 'border-genesis-blue-500 dark:border-genesis-blue-400 text-genesis-blue-700 dark:text-genesis-blue-300 bg-genesis-blue-50 dark:bg-genesis-blue-900/30' : 'border-transparent text-gray-600 dark:text-gray-400' }} text-base font-medium hover:text-genesis-blue-700 dark:hover:text-genesis-blue-300 hover:bg-genesis-blue-50 dark:hover:bg-genesis-blue-900/30 hover:border-genesis-blue-300 dark:hover:border-genesis-blue-500 transition-all duration-300">
                {{ __('messages.nav.services') }}
            </a>
            <a href="{{ route('about') }}" class="block ps-3 pe-4 py-2 border-l-4 {{ request()->routeIs('about') ? 'border-genesis-blue-500 dark:border-genesis-blue-400 text-genesis-blue-700 dark:text-genesis-blue-300 bg-genesis-blue-50 dark:bg-genesis-blue-900/30' : 'border-transparent text-gray-600 dark:text-gray-400' }} text-base font-medium hover:text-genesis-blue-700 dark:hover:text-genesis-blue-300 hover:bg-genesis-blue-50 dark:hover:bg-genesis-blue-900/30 hover:border-genesis-blue-300 dark:hover:border-genesis-blue-500 transition-all duration-300">
                {{ __('messages.nav.about') }}
            </a>
            <a href="{{ route('projects') }}" class="block ps-3 pe-4 py-2 border-l-4 {{ request()->routeIs('projects') ? 'border-genesis-blue-500 dark:border-genesis-blue-400 text-genesis-blue-700 dark:text-genesis-blue-300 bg-genesis-blue-50 dark:bg-genesis-blue-900/30' : 'border-transparent text-gray-600 dark:text-gray-400' }} text-base font-medium hover:text-genesis-blue-700 dark:hover:text-genesis-blue-300 hover:bg-genesis-blue-50 dark:hover:bg-genesis-blue-900/30 hover:border-genesis-blue-300 dark:hover:border-genesis-blue-500 transition-all duration-300">
                {{ __('messages.nav.projects') }}
            </a>
            <a href="{{ route('blog.index') }}" class="block ps-3 pe-4 py-2 border-l-4 {{ request()->routeIs('blog.*') ? 'border-genesis-blue-500 dark:border-genesis-blue-400 text-genesis-blue-700 dark:text-genesis-blue-300 bg-genesis-blue-50 dark:bg-genesis-blue-900/30' : 'border-transparent text-gray-600 dark:text-gray-400' }} text-base font-medium hover:text-genesis-blue-700 dark:hover:text-genesis-blue-300 hover:bg-genesis-blue-50 dark:hover:bg-genesis-blue-900/30 hover:border-genesis-blue-300 dark:hover:border-genesis-blue-500 transition-all duration-300">
                {{ __('messages.nav.blog') }}
            </a>
            <a href="{{ route('contact') }}" class="block ps-3 pe-4 py-2 border-l-4 {{ request()->routeIs('contact') ? 'border-genesis-blue-500 dark:border-genesis-blue-400 text-genesis-blue-700 dark:text-genesis-blue-300 bg-genesis-blue-50 dark:bg-genesis-blue-900/30' : 'border-transparent text-gray-600 dark:text-gray-400' }} text-base font-medium hover:text-genesis-blue-700 dark:hover:text-genesis-blue-300 hover:bg-genesis-blue-50 dark:hover:bg-genesis-blue-900/30 hover:border-genesis-blue-300 dark:hover:border-genesis-blue-500 transition-all duration-300">
                {{ __('messages.nav.contact') }}
            </a>
        </div>

        <!-- Demander un devis Mobile Button -->
        <div class="pt-4 pb-4 px-4 border-t border-gray-200 dark:border-gray-600">
            <a href="{{ route('contact') }}" class="flex items-center justify-center gap-2 w-full px-4 py-3 text-sm font-semibold text-white bg-gradient-genesis rounded-lg shadow-lg transition-all duration-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                Demander un devis
            </a>
        </div>
    </div>
</nav>

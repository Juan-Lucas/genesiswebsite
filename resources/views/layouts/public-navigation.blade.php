<nav x-data="{ open: false }" class="bg-white/95 dark:bg-gray-900/95 backdrop-blur-md border-b border-gray-200 dark:border-gray-800 fixed top-0 left-0 right-0 z-50 shadow-sm">
    <!-- Decorative gradient border -->
    <div class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-sky-500/50 to-transparent"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-24">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <x-application-logo class="block h-20 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <a href="{{ route('home') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('home') ? 'border-sky-500 dark:border-sky-400' : 'border-transparent' }} text-base font-medium leading-5 {{ request()->routeIs('home') ? 'text-gray-900 dark:text-white' : 'text-gray-600 dark:text-gray-400' }} hover:text-sky-600 dark:hover:text-sky-400 hover:border-sky-300 dark:hover:border-sky-500 focus:outline-none focus:text-sky-600 dark:focus:text-sky-400 transition-all duration-300 ease-in-out group">
                        {{ __('messages.nav.home') }}
                    </a>
                    <a href="{{ route('services') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('services') ? 'border-sky-500 dark:border-sky-400' : 'border-transparent' }} text-base font-medium leading-5 {{ request()->routeIs('services') ? 'text-gray-900 dark:text-white' : 'text-gray-600 dark:text-gray-400' }} hover:text-sky-600 dark:hover:text-sky-400 hover:border-sky-300 dark:hover:border-sky-500 focus:outline-none focus:text-sky-600 dark:focus:text-sky-400 transition-all duration-300 ease-in-out group">
                        {{ __('messages.nav.services') }}
                    </a>
                    <a href="{{ route('about') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('about') ? 'border-sky-500 dark:border-sky-400' : 'border-transparent' }} text-base font-medium leading-5 {{ request()->routeIs('about') ? 'text-gray-900 dark:text-white' : 'text-gray-600 dark:text-gray-400' }} hover:text-sky-600 dark:hover:text-sky-400 hover:border-sky-300 dark:hover:border-sky-500 focus:outline-none focus:text-sky-600 dark:focus:text-sky-400 transition-all duration-300 ease-in-out group">
                        {{ __('messages.nav.about') }}
                    </a>
                    <a href="{{ route('projects') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('projects') ? 'border-sky-500 dark:border-sky-400' : 'border-transparent' }} text-base font-medium leading-5 {{ request()->routeIs('projects') ? 'text-gray-900 dark:text-white' : 'text-gray-600 dark:text-gray-400' }} hover:text-sky-600 dark:hover:text-sky-400 hover:border-sky-300 dark:hover:border-sky-500 focus:outline-none focus:text-sky-600 dark:focus:text-sky-400 transition-all duration-300 ease-in-out group">
                        {{ __('messages.nav.projects') }}
                    </a>
                    <a href="{{ route('blog.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('blog.*') ? 'border-sky-500 dark:border-sky-400' : 'border-transparent' }} text-base font-medium leading-5 {{ request()->routeIs('blog.*') ? 'text-gray-900 dark:text-white' : 'text-gray-600 dark:text-gray-400' }} hover:text-sky-600 dark:hover:text-sky-400 hover:border-sky-300 dark:hover:border-sky-500 focus:outline-none focus:text-sky-600 dark:focus:text-sky-400 transition-all duration-300 ease-in-out group">
                        {{ __('messages.nav.blog') }}
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('contact') ? 'border-sky-500 dark:border-sky-400' : 'border-transparent' }} text-base font-medium leading-5 {{ request()->routeIs('contact') ? 'text-gray-900 dark:text-white' : 'text-gray-600 dark:text-gray-400' }} hover:text-sky-600 dark:hover:text-sky-400 hover:border-sky-300 dark:hover:border-sky-500 focus:outline-none focus:text-sky-600 dark:focus:text-sky-400 transition-all duration-300 ease-in-out group">
                        {{ __('messages.nav.contact') }}
                    </a>
                </div>
            </div>

            <!-- Right Side (Language + Dark Mode + Login) -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <!-- Language Switcher -->
                <div x-data="{ open: false }" class="relative me-3">
                    <button @click="open = !open" type="button" class="inline-flex items-center gap-2 px-3 py-2 text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-sky-600 dark:hover:text-sky-400 focus:outline-none transition-all duration-300">
                        <span class="text-xl">{{ config('app.available_locales')[app()->getLocale()]['flag'] }}</span>
                        <span class="hidden md:inline">{{ config('app.available_locales')[app()->getLocale()]['name'] }}</span>
                        <svg class="w-4 h-4 transition-transform duration-200" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-lg shadow-lg ring-1 ring-black/5 dark:ring-white/10 py-1 z-50">
                        @foreach(config('app.available_locales') as $locale => $localeData)
                            <a href="{{ route('locale.switch', $locale) }}" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 dark:text-gray-200 hover:bg-sky-50 dark:hover:bg-sky-900/30 hover:text-sky-600 dark:hover:text-sky-400 transition-colors {{ app()->getLocale() === $locale ? 'bg-sky-50 dark:bg-sky-900/30 text-sky-600 dark:text-sky-400' : '' }}">
                                <span class="text-xl">{{ $localeData['flag'] }}</span>
                                <span>{{ $localeData['name'] }}</span>
                                @if(app()->getLocale() === $locale)
                                    <svg class="w-4 h-4 ml-auto text-sky-600 dark:text-sky-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                @endif
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Dark Mode Toggle -->
                <button @click="darkMode = !darkMode" type="button" class="me-3 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-sky-600 dark:hover:text-sky-400 focus:outline-none focus:ring-2 focus:ring-sky-500/50 rounded-lg text-sm p-2.5 transition-all duration-300">
                    <svg x-show="!darkMode" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg x-show="darkMode" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>

                @auth
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-semibold text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-sky-400 dark:hover:border-sky-500 focus:outline-none focus:ring-2 focus:ring-sky-500/50 focus:ring-offset-2 transition-all duration-300 shadow-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                        </svg>
                        {{ __('messages.nav.dashboard') }}
                    </a>
                @else
                    <a href="{{ route('login') }}" class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-medium text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-sky-400 dark:hover:border-sky-500 focus:outline-none focus:ring-2 focus:ring-sky-500/50 focus:ring-offset-2 transition-all duration-300 shadow-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                        </svg>
                        {{ __('messages.nav.login') }}
                    </a>
                    <a href="{{ route('register') }}" class="ms-3 inline-flex items-center gap-2 px-5 py-2.5 text-sm font-semibold text-white bg-gradient-to-r from-sky-500 to-cyan-500 rounded-lg hover:from-sky-600 hover:to-cyan-600 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-sky-500/50 focus:ring-offset-2 shadow-sm transition-all duration-300">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                        </svg>
                        {{ __('messages.nav.register') }}
                    </a>
                @endauth
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <!-- Language Switcher Mobile -->
                <div x-data="{ open: false }" class="relative me-2">
                    <button @click="open = !open" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-sky-600 dark:hover:text-sky-400 focus:outline-none focus:ring-2 focus:ring-sky-500/50 rounded-lg text-sm p-2.5 transition-all duration-300">
                        <span class="text-xl">{{ config('app.available_locales')[app()->getLocale()]['flag'] }}</span>
                    </button>
                    <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute right-0 mt-2 w-40 bg-white dark:bg-gray-800 rounded-lg shadow-lg ring-1 ring-black/5 dark:ring-white/10 py-1 z-50">
                        @foreach(config('app.available_locales') as $locale => $localeData)
                            <a href="{{ route('locale.switch', $locale) }}" class="flex items-center gap-3 px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-sky-50 dark:hover:bg-sky-900/30 hover:text-sky-600 dark:hover:text-sky-400 transition-colors {{ app()->getLocale() === $locale ? 'bg-sky-50 dark:bg-sky-900/30 text-sky-600 dark:text-sky-400' : '' }}">
                                <span class="text-lg">{{ $localeData['flag'] }}</span>
                                <span>{{ $localeData['name'] }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Dark Mode Toggle Mobile -->
                <button @click="darkMode = !darkMode" type="button" class="me-2 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-sky-600 dark:hover:text-sky-400 focus:outline-none focus:ring-2 focus:ring-sky-500/50 rounded-lg text-sm p-2.5 transition-all duration-300">
                    <svg x-show="!darkMode" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg x-show="darkMode" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>

                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-sky-600 dark:hover:text-sky-400 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 focus:text-sky-600 dark:focus:text-sky-400 transition-all duration-300">
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
            <a href="{{ route('home') }}" class="block ps-3 pe-4 py-2 border-l-4 {{ request()->routeIs('home') ? 'border-sky-500 dark:border-sky-400 text-sky-700 dark:text-sky-300 bg-sky-50 dark:bg-sky-900/30' : 'border-transparent text-gray-600 dark:text-gray-400' }} text-base font-medium hover:text-sky-700 dark:hover:text-sky-300 hover:bg-sky-50 dark:hover:bg-sky-900/30 hover:border-sky-300 dark:hover:border-sky-500 transition-all duration-300">
                {{ __('messages.nav.home') }}
            </a>
            <a href="{{ route('services') }}" class="block ps-3 pe-4 py-2 border-l-4 {{ request()->routeIs('services') ? 'border-sky-500 dark:border-sky-400 text-sky-700 dark:text-sky-300 bg-sky-50 dark:bg-sky-900/30' : 'border-transparent text-gray-600 dark:text-gray-400' }} text-base font-medium hover:text-sky-700 dark:hover:text-sky-300 hover:bg-sky-50 dark:hover:bg-sky-900/30 hover:border-sky-300 dark:hover:border-sky-500 transition-all duration-300">
                {{ __('messages.nav.services') }}
            </a>
            <a href="{{ route('about') }}" class="block ps-3 pe-4 py-2 border-l-4 {{ request()->routeIs('about') ? 'border-sky-500 dark:border-sky-400 text-sky-700 dark:text-sky-300 bg-sky-50 dark:bg-sky-900/30' : 'border-transparent text-gray-600 dark:text-gray-400' }} text-base font-medium hover:text-sky-700 dark:hover:text-sky-300 hover:bg-sky-50 dark:hover:bg-sky-900/30 hover:border-sky-300 dark:hover:border-sky-500 transition-all duration-300">
                {{ __('messages.nav.about') }}
            </a>
            <a href="{{ route('projects') }}" class="block ps-3 pe-4 py-2 border-l-4 {{ request()->routeIs('projects') ? 'border-sky-500 dark:border-sky-400 text-sky-700 dark:text-sky-300 bg-sky-50 dark:bg-sky-900/30' : 'border-transparent text-gray-600 dark:text-gray-400' }} text-base font-medium hover:text-sky-700 dark:hover:text-sky-300 hover:bg-sky-50 dark:hover:bg-sky-900/30 hover:border-sky-300 dark:hover:border-sky-500 transition-all duration-300">
                {{ __('messages.nav.projects') }}
            </a>
            <a href="{{ route('blog.index') }}" class="block ps-3 pe-4 py-2 border-l-4 {{ request()->routeIs('blog.*') ? 'border-sky-500 dark:border-sky-400 text-sky-700 dark:text-sky-300 bg-sky-50 dark:bg-sky-900/30' : 'border-transparent text-gray-600 dark:text-gray-400' }} text-base font-medium hover:text-sky-700 dark:hover:text-sky-300 hover:bg-sky-50 dark:hover:bg-sky-900/30 hover:border-sky-300 dark:hover:border-sky-500 transition-all duration-300">
                {{ __('messages.nav.blog') }}
            </a>
            <a href="{{ route('contact') }}" class="block ps-3 pe-4 py-2 border-l-4 {{ request()->routeIs('contact') ? 'border-sky-500 dark:border-sky-400 text-sky-700 dark:text-sky-300 bg-sky-50 dark:bg-sky-900/30' : 'border-transparent text-gray-600 dark:text-gray-400' }} text-base font-medium hover:text-sky-700 dark:hover:text-sky-300 hover:bg-sky-50 dark:hover:bg-sky-900/30 hover:border-sky-300 dark:hover:border-sky-500 transition-all duration-300">
                {{ __('messages.nav.contact') }}
            </a>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            @auth
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <a href="{{ route('dashboard') }}" class="block ps-3 pe-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out">
                        {{ __('messages.nav.dashboard') }}
                    </a>
                </div>
            @else
                <div class="mt-3 space-y-1">
                    <a href="{{ route('login') }}" class="block ps-3 pe-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out">
                        {{ __('messages.nav.login') }}
                    </a>
                    <a href="{{ route('register') }}" class="block ps-3 pe-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out">
                        {{ __('messages.nav.register') }}
                    </a>
                </div>
            @endauth
        </div>
    </div>
</nav>

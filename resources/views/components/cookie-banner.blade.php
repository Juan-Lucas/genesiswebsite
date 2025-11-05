<!-- Cookie Consent Banner -->
<div x-data="{ showCookieBanner: !localStorage.getItem('cookieConsent') }"
     x-show="showCookieBanner"
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="translate-y-full opacity-0"
     x-transition:enter-end="translate-y-0 opacity-100"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="translate-y-0 opacity-100"
     x-transition:leave-end="translate-y-full opacity-0"
     class="fixed bottom-0 left-0 right-0 z-50 p-4 md:p-6"
     style="display: none;">

    <div class="max-w-7xl mx-auto">
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-2xl border border-gray-200 dark:border-gray-700 p-4 md:p-6">
            <!-- Decorative gradient border -->
            <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-sky-500/20 via-cyan-500/20 to-blue-500/20 blur-xl -z-10"></div>

            <div class="flex flex-col md:flex-row items-start md:items-center gap-4">
                <!-- Cookie Icon -->
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 rounded-xl bg-gradient-genesis flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                </div>

                <!-- Content -->
                <div class="flex-1">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-1">
                        🍪 {{ __('messages.cookies.title') }}
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                        {{ __('messages.cookies.description') }}
                        <a href="#" class="text-genesis-blue-500 hover:text-genesis-blue-600 dark:text-genesis-blue-400 dark:hover:text-genesis-blue-300 font-medium underline ml-1">
                            {{ __('messages.cookies.learn_more') }}
                        </a>
                    </p>
                </div>

                <!-- Actions -->
                <div class="flex flex-col sm:flex-row gap-2 w-full md:w-auto">
                    <button @click="localStorage.setItem('cookieConsent', 'declined'); showCookieBanner = false"
                            class="px-5 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 rounded-lg transition-all duration-300 hover:scale-105">
                        {{ __('messages.cookies.decline') }}
                    </button>
                    <button @click="localStorage.setItem('cookieConsent', 'accepted'); showCookieBanner = false"
                            class="px-6 py-2 text-sm font-medium text-white bg-gradient-genesis rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                        {{ __('messages.cookies.accept') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

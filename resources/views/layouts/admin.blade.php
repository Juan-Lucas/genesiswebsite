<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-900">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Dashboard') - Genesis Admin</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full font-sans antialiased" x-data="{ mobileMenuOpen: false }">
    <div class="min-h-full">
        <!-- Top Navigation -->
        <nav class="bg-gray-800/50 backdrop-blur-sm border-b border-white/10">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <!-- Logo -->
                        <div class="shrink-0">
                            <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-2">
                                <div class="w-8 h-8 bg-gradient-to-br from-[#667eea] to-[#764ba2] rounded-lg flex items-center justify-center">
                                    <span class="text-white text-lg font-bold">G</span>
                                </div>
                                <span class="hidden sm:block text-white font-semibold">Genesis</span>
                            </a>
                        </div>
                        <!-- Desktop Navigation -->
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="{{ route('admin.dashboard') }}" class="rounded-md px-3 py-2 text-sm font-medium {{ request()->routeIs('admin.dashboard') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Dashboard</a>
                                <a href="{{ route('admin.projects.index') }}" class="rounded-md px-3 py-2 text-sm font-medium {{ request()->routeIs('admin.projects.*') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Projets</a>
                                <a href="{{ route('admin.services.index') }}" class="rounded-md px-3 py-2 text-sm font-medium {{ request()->routeIs('admin.services.*') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Services</a>
                                <a href="{{ route('admin.articles.index') }}" class="rounded-md px-3 py-2 text-sm font-medium {{ request()->routeIs('admin.articles.*') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Articles</a>
                            </div>
                        </div>
                    </div>
                    <!-- Desktop User Menu -->
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <a href="{{ route('home') }}" target="_blank" class="relative rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500" title="Voir le site">
                                <span class="sr-only">Voir le site</span>
                                <svg class="size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>

                            <!-- Profile Dropdown -->
                            <div class="relative ml-3" x-data="{ open: false }">
                                <button @click="open = !open" type="button" class="relative flex max-w-xs items-center rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                                    <span class="sr-only">Open user menu</span>
                                    <div class="size-8 rounded-full bg-gradient-to-br from-[#667eea] to-[#764ba2] flex items-center justify-center outline -outline-offset-1 outline-white/10">
                                        <span class="text-white text-sm font-semibold">{{ substr(Auth::user()->name, 0, 1) }}</span>
                                    </div>
                                </button>

                                <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-gray-800 py-1 shadow-lg ring-1 ring-white/10 focus:outline-none" style="display: none;">
                                    <div class="px-4 py-2 border-b border-white/10">
                                        <p class="text-sm font-medium text-white">{{ Auth::user()->name }}</p>
                                        <p class="text-xs text-gray-400">{{ Auth::user()->email }}</p>
                                    </div>
                                    <a href="{{ route('admin.profile.edit') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-white/5">Profil</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-300 hover:bg-white/5">Déconnexion</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu Button -->
                    <div class="-mr-2 flex md:hidden">
                        <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                            <span class="sr-only">Open main menu</span>
                            <svg x-show="!mobileMenuOpen" class="size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <svg x-show="mobileMenuOpen" class="size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5" style="display: none;">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div x-show="mobileMenuOpen" class="md:hidden" style="display: none;">
                <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                    <a href="{{ route('admin.dashboard') }}" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->routeIs('admin.dashboard') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Dashboard</a>
                    <a href="{{ route('admin.projects.index') }}" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->routeIs('admin.projects.*') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Projets</a>
                    <a href="{{ route('admin.services.index') }}" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->routeIs('admin.services.*') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Services</a>
                    <a href="{{ route('admin.articles.index') }}" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->routeIs('admin.articles.*') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Articles</a>
                </div>
                <div class="border-t border-white/10 pt-4 pb-3">
                    <div class="flex items-center px-5">
                        <div class="shrink-0">
                            <div class="size-10 rounded-full bg-gradient-to-br from-[#667eea] to-[#764ba2] flex items-center justify-center outline -outline-offset-1 outline-white/10">
                                <span class="text-white font-semibold">{{ substr(Auth::user()->name, 0, 1) }}</span>
                            </div>
                        </div>
                        <div class="ml-3">
                            <div class="text-base/5 font-medium text-white">{{ Auth::user()->name }}</div>
                            <div class="text-sm font-medium text-gray-400">{{ Auth::user()->email }}</div>
                        </div>
                        <a href="{{ route('home') }}" target="_blank" class="relative ml-auto shrink-0 rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                            <span class="sr-only">Voir le site</span>
                            <svg class="size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="mt-3 space-y-1 px-2">
                        <a href="{{ route('admin.profile.edit') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Profil</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Déconnexion</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Header -->
        <header class="relative bg-gray-800 after:pointer-events-none after:absolute after:inset-x-0 after:inset-y-0 after:border-y after:border-white/10">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-white">@yield('page-title', 'Dashboard')</h1>
                @hasSection('page-subtitle')
                    <p class="mt-1 text-sm text-gray-400">@yield('page-subtitle')</p>
                @endif
            </div>
        </header>

        <!-- Main Content -->
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <!-- Flash Messages -->
                @if (session('success'))
                    <div class="mb-6 rounded-lg bg-green-500/10 border border-green-500/20 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-green-200">{{ session('success') }}</p>
                            </div>
                        </div>
                    </div>
                @endif

                @if (session('error'))
                    <div class="mb-6 rounded-lg bg-red-500/10 border border-red-500/20 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-red-200">{{ session('error') }}</p>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-6 rounded-lg bg-red-500/10 border border-red-500/20 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-red-200">Erreurs de validation</h3>
                                <ul class="mt-2 text-sm text-red-300 list-disc list-inside">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif

                @yield('content')
            </div>
        </main>
    </div>

    @stack('scripts')
</body>
</html>

@extends('layouts.public')

@section('title', 'Blog')

@section('content')
<!-- Hero Section -->
<div class="relative bg-gradient-to-b from-gray-900 via-gray-900 to-white dark:to-gray-900 overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-genesis-blue-500/20 dark:bg-genesis-blue-500/10 rounded-full blur-3xl parallax-slow float-animation" data-speed="0.3"></div>
        <div class="absolute top-20 -left-40 w-96 h-96 bg-genesis-purple-600/20 dark:bg-genesis-purple-600/10 rounded-full blur-3xl parallax-fast float-animation" data-speed="0.5"></div>
        <div class="absolute -bottom-20 right-20 w-80 h-80 bg-genesis-blue-500/20 dark:bg-genesis-blue-500/10 rounded-full blur-3xl float-animation" style="animation-delay: 0.5s;"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 sm:py-32">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="text-center lg:text-left">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 dark:bg-white/5 backdrop-blur-sm border border-white/20 rounded-full mb-6 pulse-glow shimmer animate-on-scroll">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-genesis-blue-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-genesis-blue-500"></span>
                    </span>
                    <span class="text-sm font-medium text-white">Actualités & Conseils</span>
                </div>

                <h1 class="text-4xl font-extrabold text-white sm:text-5xl md:text-6xl animate-on-scroll">
                    <span class="block">Blog & Actualités</span>
                    <span class="block mt-2 bg-gradient-genesis bg-clip-text text-transparent">
                        Tendances & Innovations
                    </span>
                </h1>
                <p class="mt-6 max-w-3xl mx-auto lg:mx-0 text-xl text-gray-300 leading-relaxed animate-on-scroll">
                    Découvrez nos articles sur les technologies, le développement web, et les dernières tendances du digital
                </p>
            </div>

            <!-- Illustration -->
            <div class="hidden lg:block animate-on-scroll opacity-0 translate-x-10">
                <x-illustrations.blog-article class="w-full max-w-md h-auto drop-shadow-2xl" />
            </div>
        </div>
    </div>

    <!-- Wave separator -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-12 sm:h-16 text-gray-50 dark:text-gray-900" preserveAspectRatio="none" viewBox="0 0 1200 120" fill="currentColor">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
        </svg>
    </div>
</div>

<!-- Filter Section -->
<div class="bg-gray-50 dark:bg-gray-900 border-b border-gray-200 dark:border-gray-800">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 py-10">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-6">
            <div class="flex items-center gap-3">
                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
                </svg>
                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Filtrer par catégorie :</span>
            </div>
            <div class="flex flex-wrap gap-3 justify-center">
                <a href="{{ route('blog.index') }}"
                   class="group px-5 py-2.5 rounded-xl text-sm font-semibold transition-all duration-300 {{ !request('category') || request('category') == 'all' ? 'bg-gradient-to-r from-sky-500 to-cyan-500 text-white shadow-lg shadow-sky-500/30' : 'bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 border border-gray-200 dark:border-gray-700' }}">
                    <span class="flex items-center gap-2">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                        Tous les articles
                    </span>
                </a>
                @foreach($categories as $cat)
                    <a href="{{ route('blog.index', ['category' => $cat]) }}"
                       class="px-5 py-2.5 rounded-xl text-sm font-semibold transition-all duration-300 {{ request('category') == $cat ? 'bg-gradient-to-r from-sky-500 to-cyan-500 text-white shadow-lg shadow-sky-500/30' : 'bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 border border-gray-200 dark:border-gray-700' }}">
                        {{ ucfirst($cat) }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- Articles Grid -->
<div class="bg-gray-50 dark:bg-gray-900 py-16 sm:py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        @if($articles->count() > 0)
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 stagger-parent">
                @foreach($articles as $article)
                    <article class="group flex flex-col overflow-hidden rounded-2xl bg-white dark:bg-gray-800 shadow-lg hover:shadow-2xl transition-all duration-300 ring-1 ring-gray-200 dark:ring-gray-700 hover:ring-genesis-blue-500/50 hover:-translate-y-2 stagger-child card-3d animate-on-scroll">
                        @if($article->image)
                            <div class="aspect-[16/9] w-full overflow-hidden bg-gray-100 dark:bg-gray-700">
                                <img src="{{ asset($article->image) }}" alt="{{ $article->title }}" class="h-full w-full object-cover group-hover:scale-110 transition-transform duration-500">
                            </div>
                        @else
                            <div class="relative aspect-[16/9] w-full bg-gradient-to-br from-sky-500 via-cyan-500 to-blue-600 overflow-hidden flex items-center justify-center p-8">
                                <div class="absolute inset-0 bg-gradient-to-br from-sky-500/20 to-blue-600/20 group-hover:scale-110 transition-transform duration-500"></div>
                                <div class="relative w-full max-w-[320px] mx-auto">
                                    @php
                                        $illustrationMap = [
                                            'actualités' => 'article-news',
                                            'actualites' => 'article-news',
                                            'news' => 'article-news',
                                            'technologie' => 'article-tech',
                                            'technology' => 'article-tech',
                                            'tech' => 'article-tech',
                                            'développement' => 'article-blog',
                                            'développement web' => 'article-blog',
                                            'developpement' => 'article-blog',
                                            'web' => 'article-blog',
                                            'mobile' => 'article-blog',
                                            'design' => 'article-blog',
                                            'marketing' => 'article-marketing',
                                            'business' => 'article-business',
                                        ];
                                        $category = strtolower($article->category);
                                        $illustration = $illustrationMap[$category] ?? 'article-blog';
                                    @endphp
                                    <x-dynamic-component :component="'illustrations.' . $illustration" class="w-full h-auto drop-shadow-2xl opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500" />
                                </div>
                            </div>
                        @endif

                        <div class="flex flex-1 flex-col justify-between p-6">
                            <div class="flex-1">
                                <div class="flex items-center gap-x-3 text-xs mb-4">
                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-gradient-to-r from-genesis-blue-500/10 to-genesis-purple-600/10 px-3 py-1 text-genesis-blue-600 dark:text-genesis-blue-400 font-semibold ring-1 ring-inset ring-genesis-blue-500/30">
                                        <svg class="w-2 h-2 fill-genesis-blue-500" viewBox="0 0 6 6"><circle cx="3" cy="3" r="3"/></svg>
                                        {{ ucfirst($article->category) }}
                                    </span>
                                    <span class="text-gray-400">•</span>
                                    <time datetime="{{ $article->published_at->format('Y-m-d') }}" class="text-gray-500 dark:text-gray-400 font-medium">
                                        {{ $article->published_at->format('d M Y') }}
                                    </time>
                                </div>

                                <a href="{{ route('blog.show', $article) }}" class="block group-article">
                                    <h3 class="text-xl font-bold leading-7 text-gray-900 dark:text-white group-hover:text-genesis-blue-600 dark:group-hover:text-genesis-blue-400 transition-colors duration-300 mb-3">
                                        {{ $article->title }}
                                    </h3>
                                    <p class="text-sm leading-6 text-gray-600 dark:text-gray-400 line-clamp-3">
                                        {{ $article->excerpt }}
                                    </p>
                                </a>
                            </div>

                            <div class="mt-6 pt-6 border-t border-gray-200 dark:border-gray-700 flex items-center justify-between">
                                <div class="flex items-center gap-x-3">
                                    <div class="h-10 w-10 rounded-full bg-gradient-genesis flex items-center justify-center text-white font-semibold shadow-lg">
                                        {{ substr($article->author->name, 0, 1) }}
                                    </div>
                                    <div class="text-sm leading-5">
                                        <p class="font-semibold text-gray-900 dark:text-white">{{ $article->author->name }}</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Auteur</p>
                                    </div>
                                </div>
                                <a href="{{ route('blog.show', $article) }}" class="inline-flex items-center gap-1 text-sm font-semibold text-genesis-blue-600 dark:text-genesis-blue-400 group-hover:gap-2 transition-all duration-300">
                                    Lire
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $articles->links() }}
            </div>
        @else
            <div class="text-center py-16">
                <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-gray-100 dark:bg-gray-800 mb-6">
                    <svg class="h-10 w-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Aucun article trouvé</h3>
                <p class="text-base text-gray-600 dark:text-gray-400 mb-6">Aucun article n'a été publié dans cette catégorie pour le moment.</p>
                <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-genesis text-white font-semibold rounded-xl hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Voir tous les articles
                </a>
            </div>
        @endif
    </div>
</div>
@endsection

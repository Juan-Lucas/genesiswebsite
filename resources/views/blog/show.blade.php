@extends('layouts.public')

@section('title', $article->title)

@section('content')
<!-- Article Header -->
<div class="bg-gradient-to-b from-gray-900 via-gray-900 to-white dark:to-gray-900 relative isolate overflow-hidden">
    <!-- Decorative Background Elements -->
    <div aria-hidden="true" class="absolute inset-0 -z-10">
        <div class="absolute inset-x-0 top-0 h-full bg-gradient-to-b from-sky-500/10 via-transparent to-transparent"></div>
        <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
             class="absolute left-[calc(50%-15rem)] top-0 aspect-[1155/678] w-[50rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-sky-400 to-cyan-400 opacity-20 blur-3xl sm:left-[calc(50%-30rem)] sm:w-[72rem]"></div>
        <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
             class="absolute right-[calc(50%-15rem)] top-20 aspect-[1155/678] w-[40rem] translate-x-1/2 rotate-[-30deg] bg-gradient-to-tr from-cyan-400 to-sky-400 opacity-15 blur-3xl sm:right-[calc(50%-20rem)] sm:w-[60rem]"></div>
    </div>

    <div class="relative px-6 pt-8 lg:px-8">
        <div class="mx-auto max-w-4xl py-16 sm:py-20 lg:py-24">
            <!-- Breadcrumb -->
            <nav class="flex items-center justify-center gap-x-2 text-sm mb-8">
                <a href="{{ route('blog.index') }}" class="text-gray-400 hover:text-sky-400 transition-colors duration-300 flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Retour au blog
                </a>
            </nav>

            <div class="text-center">
                <!-- Category Badge -->
                <div class="flex items-center justify-center mb-6">
                    <span class="inline-flex items-center gap-x-1.5 rounded-full bg-gradient-to-r from-sky-500/10 to-cyan-500/10 px-4 py-1.5 text-sm font-semibold text-sky-400 ring-1 ring-inset ring-sky-500/30 backdrop-blur-sm">
                        <svg class="w-2 h-2 fill-sky-400" viewBox="0 0 6 6"><circle cx="3" cy="3" r="3"/></svg>
                        {{ ucfirst($article->category) }}
                    </span>
                </div>

                <!-- Title with Gradient -->
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl mb-8 leading-tight">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-white via-white to-gray-300">
                        {{ $article->title }}
                    </span>
                </h1>

                <!-- Excerpt -->
                <p class="mt-6 text-xl leading-8 text-gray-300 max-w-3xl mx-auto">
                    {{ $article->excerpt }}
                </p>

                <!-- Meta Information Card -->
                <div class="mt-10 inline-flex items-center gap-6 bg-white/5 backdrop-blur-sm rounded-2xl px-6 py-4 ring-1 ring-white/10">
                    <div class="flex items-center gap-3">
                        <div class="h-12 w-12 rounded-full bg-gradient-to-br from-sky-400 to-cyan-400 flex items-center justify-center text-white font-bold text-lg ring-2 ring-white/20">
                            {{ substr($article->author->name, 0, 1) }}
                        </div>
                        <div class="text-left">
                            <p class="font-semibold text-white text-sm">{{ $article->author->name }}</p>
                            <p class="text-xs text-gray-400">Auteur</p>
                        </div>
                    </div>
                    <div class="h-8 w-px bg-white/10"></div>
                    <div class="flex items-center gap-2 text-gray-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <time datetime="{{ $article->published_at->format('Y-m-d') }}" class="text-sm">
                            {{ $article->published_at->translatedFormat('d F Y') }}
                        </time>
                    </div>
                    <div class="h-8 w-px bg-white/10"></div>
                    <div class="flex items-center gap-2 text-gray-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                        <span class="text-sm">{{ ceil(str_word_count($article->content) / 200) }} min de lecture</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Article Image -->
@if($article->image)
<div class="bg-white dark:bg-gray-900 -mt-16">
    <div class="mx-auto max-w-5xl px-6 lg:px-8">
        <div class="aspect-[21/9] w-full overflow-hidden rounded-3xl shadow-2xl ring-1 ring-gray-900/10 dark:ring-white/10">
            <img src="{{ asset($article->image) }}" alt="{{ $article->title }}" class="h-full w-full object-cover">
        </div>
    </div>
</div>
@endif

<!-- Article Content with Sidebar -->
<div class="bg-white dark:bg-gray-900">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 py-16 sm:py-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-8">
                <article class="prose prose-lg prose-gray dark:prose-invert max-w-none text-gray-900 dark:text-gray-100
                    prose-headings:scroll-mt-28 prose-headings:font-bold prose-headings:tracking-tight
                    prose-h2:text-3xl prose-h2:mt-12 prose-h2:mb-6 prose-h2:text-gray-900 dark:prose-h2:text-white prose-h2:border-b prose-h2:border-gray-200 dark:prose-h2:border-gray-800 prose-h2:pb-3
                    prose-h3:text-2xl prose-h3:mt-10 prose-h3:mb-4 prose-h3:text-gray-900 dark:prose-h3:text-white
                    prose-p:text-gray-700 dark:prose-p:text-gray-300 prose-p:leading-8 prose-p:mb-6 prose-p:text-lg
                    prose-a:text-sky-600 dark:prose-a:text-sky-400 prose-a:no-underline prose-a:font-medium hover:prose-a:underline prose-a:transition-colors
                    prose-strong:text-gray-900 dark:prose-strong:text-white prose-strong:font-semibold
                    prose-ul:my-6 prose-ul:list-disc prose-li:text-gray-700 dark:prose-li:text-gray-300 prose-li:my-2 prose-li:leading-7
                    prose-ol:my-6 prose-ol:list-decimal
                    prose-code:text-sky-600 dark:prose-code:text-sky-400 prose-code:bg-sky-50 dark:prose-code:bg-sky-900/20 prose-code:px-2 prose-code:py-1 prose-code:rounded prose-code:font-mono prose-code:text-sm prose-code:font-medium prose-code:before:content-none prose-code:after:content-none
                    prose-pre:bg-gray-900 dark:prose-pre:bg-gray-950 prose-pre:ring-1 prose-pre:ring-gray-300 dark:prose-pre:ring-gray-800 prose-pre:rounded-xl prose-pre:shadow-lg
                    prose-blockquote:border-l-4 prose-blockquote:border-sky-500 prose-blockquote:bg-sky-50 dark:prose-blockquote:bg-sky-900/10 prose-blockquote:py-4 prose-blockquote:px-6 prose-blockquote:rounded-r-xl prose-blockquote:not-italic prose-blockquote:shadow-sm prose-blockquote:text-gray-700 dark:prose-blockquote:text-gray-300
                    prose-img:rounded-xl prose-img:shadow-lg prose-img:ring-1 prose-img:ring-gray-200 dark:prose-img:ring-gray-800
                    first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 dark:first-letter:text-white first-letter:mr-3 first-letter:float-left first-letter:leading-[4.5rem]">
                    <div class="text-gray-900 dark:text-gray-100 leading-8">
                        {!! nl2br(e($article->content)) !!}
                    </div>
                </article>

                <!-- Article Footer -->
                <div class="mt-12 pt-8 border-t border-gray-200 dark:border-gray-800">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Partager :</span>
                            <div class="flex gap-2">
                                <a href="https://twitter.com/intent/tweet?text={{ urlencode($article->title) }}&url={{ urlencode(route('blog.show', $article)) }}"
                                   target="_blank"
                                   class="inline-flex items-center justify-center w-10 h-10 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 hover:bg-sky-100 dark:hover:bg-sky-900/20 hover:text-sky-600 dark:hover:text-sky-400 transition-all duration-300 ring-1 ring-gray-200 dark:ring-gray-700 hover:ring-sky-500/50">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(route('blog.show', $article)) }}"
                                   target="_blank"
                                   class="inline-flex items-center justify-center w-10 h-10 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 hover:bg-sky-100 dark:hover:bg-sky-900/20 hover:text-sky-600 dark:hover:text-sky-400 transition-all duration-300 ring-1 ring-gray-200 dark:ring-gray-700 hover:ring-sky-500/50">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('blog.show', $article)) }}"
                                   target="_blank"
                                   class="inline-flex items-center justify-center w-10 h-10 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 hover:bg-sky-100 dark:hover:bg-sky-900/20 hover:text-sky-600 dark:hover:text-sky-400 transition-all duration-300 ring-1 ring-gray-200 dark:ring-gray-700 hover:ring-sky-500/50">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <aside class="lg:col-span-4">
                <div class="sticky top-24 space-y-8">
                    <!-- Author Card -->
                    <div class="rounded-2xl bg-gradient-to-br from-sky-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800/50 p-6 ring-1 ring-gray-200 dark:ring-gray-700">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="h-16 w-16 rounded-full bg-gradient-to-br from-sky-400 to-cyan-400 flex items-center justify-center text-white font-bold text-2xl ring-4 ring-white dark:ring-gray-900 shadow-lg">
                                {{ substr($article->author->name, 0, 1) }}
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 dark:text-white text-lg">{{ $article->author->name }}</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Auteur de l'article</p>
                            </div>
                        </div>
                        <p class="text-sm text-gray-700 dark:text-gray-300 leading-relaxed">
                            Expert en développement web et technologies modernes, passionné par l'innovation et le partage de connaissances.
                        </p>
                    </div>

                    <!-- Quick Stats -->
                    <div class="rounded-2xl bg-white dark:bg-gray-800 p-6 ring-1 ring-gray-200 dark:ring-gray-700 shadow-sm">
                        <h3 class="font-bold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Informations
                        </h3>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-gray-600 dark:text-gray-400">Publié le</span>
                                <span class="font-medium text-gray-900 dark:text-white">{{ $article->published_at->format('d/m/Y') }}</span>
                            </div>
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-gray-600 dark:text-gray-400">Temps de lecture</span>
                                <span class="font-medium text-gray-900 dark:text-white">{{ ceil(str_word_count($article->content) / 200) }} min</span>
                            </div>
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-gray-600 dark:text-gray-400">Catégorie</span>
                                <span class="inline-flex items-center rounded-full bg-sky-100 dark:bg-sky-900/30 px-2.5 py-1 text-xs font-medium text-sky-700 dark:text-sky-400">
                                    {{ ucfirst($article->category) }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Card -->
                    <div class="rounded-2xl bg-gradient-to-br from-sky-500 to-cyan-500 p-6 text-white shadow-xl">
                        <h3 class="font-bold text-xl mb-2">Un projet en tête ?</h3>
                        <p class="text-sky-100 text-sm mb-4">
                            Discutons de vos besoins et découvrez comment nous pouvons vous aider.
                        </p>
                        <a href="{{ route('contact') }}" class="block w-full text-center bg-white text-sky-600 font-semibold py-2.5 px-4 rounded-lg hover:bg-sky-50 transition-colors duration-300 shadow-lg">
                            Nous contacter
                        </a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>

<!-- Share Section -->
<div class="bg-gray-50 dark:bg-gray-800 py-12">
    <div class="mx-auto max-w-3xl px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Partager cet article</h3>
            <div class="flex gap-4">
                <a href="https://twitter.com/intent/tweet?text={{ urlencode($article->title) }}&url={{ urlencode(route('blog.show', $article)) }}"
                   target="_blank"
                   class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 hover:text-sky-500 dark:hover:text-sky-400 shadow-sm hover:shadow transition-all duration-300">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(route('blog.show', $article)) }}"
                   target="_blank"
                   class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 hover:text-sky-500 dark:hover:text-sky-400 shadow-sm hover:shadow transition-all duration-300">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('blog.show', $article)) }}"
                   target="_blank"
                   class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 hover:text-sky-500 dark:hover:text-sky-400 shadow-sm hover:shadow transition-all duration-300">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Related Articles -->
@if($relatedArticles->count() > 0)
<div class="bg-gray-50 dark:bg-gray-800 py-16 sm:py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mb-12">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white mb-3">
                Continuer la lecture
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-400">
                D'autres articles qui pourraient vous intéresser
            </p>
        </div>

        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($relatedArticles as $related)
                <article class="group flex flex-col overflow-hidden rounded-2xl bg-white dark:bg-gray-900 shadow-lg hover:shadow-2xl transition-all duration-300 ring-1 ring-gray-200 dark:ring-gray-700 hover:ring-sky-500/50 hover:-translate-y-1">
                    @if($related->image)
                        <div class="aspect-[16/9] w-full overflow-hidden bg-gray-100 dark:bg-gray-800">
                            <img src="{{ asset($related->image) }}" alt="{{ $related->title }}" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                    @else
                        <div class="aspect-[16/9] w-full bg-gradient-to-br from-sky-500 to-cyan-500 relative overflow-hidden">
                            <div class="absolute inset-0 bg-white/10 backdrop-blur-sm"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg class="w-16 h-16 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            </div>
                        </div>
                    @endif

                    <div class="flex flex-1 flex-col justify-between p-6">
                        <div class="flex-1">
                            <div class="flex items-center gap-x-2 mb-4">
                                <span class="inline-flex items-center rounded-full bg-sky-100 dark:bg-sky-900/30 px-3 py-1 text-xs font-semibold text-sky-700 dark:text-sky-400">
                                    {{ ucfirst($related->category) }}
                                </span>
                                <span class="text-xs text-gray-500 dark:text-gray-400">•</span>
                                <time datetime="{{ $related->published_at->format('Y-m-d') }}" class="text-xs text-gray-500 dark:text-gray-400">
                                    {{ $related->published_at->format('d M Y') }}
                                </time>
                            </div>

                            <a href="{{ route('blog.show', $related) }}">
                                <h3 class="text-xl font-bold leading-7 text-gray-900 dark:text-white group-hover:text-sky-600 dark:group-hover:text-sky-400 transition-colors duration-300 mb-3">
                                    {{ $related->title }}
                                </h3>
                                <p class="text-sm leading-6 text-gray-600 dark:text-gray-400 line-clamp-2">
                                    {{ $related->excerpt }}
                                </p>
                            </a>
                        </div>

                        <div class="mt-6 flex items-center gap-3">
                            <div class="h-8 w-8 rounded-full bg-gradient-to-br from-sky-400 to-cyan-400 flex items-center justify-center text-white font-semibold text-xs">
                                {{ substr($related->author->name, 0, 1) }}
                            </div>
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">{{ $related->author->name }}</span>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</div>
@endif

<!-- Newsletter CTA -->
<div class="bg-gradient-to-br from-gray-900 via-sky-900 to-gray-900 relative overflow-hidden">
    <div class="absolute inset-0 bg-grid-white/[0.05] bg-[size:20px_20px]"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent"></div>

    <div class="relative px-6 py-20 sm:px-6 sm:py-24 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gradient-to-br from-sky-400 to-cyan-400 mb-6 ring-4 ring-white/10">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>
            <h2 class="text-4xl font-bold tracking-tight text-white sm:text-5xl mb-4">
                Restez informé des dernières actualités
            </h2>
            <p class="text-xl leading-8 text-gray-300 mb-8">
                Recevez nos meilleurs articles et conseils directement dans votre boîte mail.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center max-w-md mx-auto">
                <input type="email" placeholder="votre@email.com" class="flex-1 px-6 py-3 rounded-lg bg-white/10 backdrop-blur-sm border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent">
                <button class="px-8 py-3 rounded-lg bg-gradient-to-r from-sky-500 to-cyan-500 text-white font-semibold hover:from-sky-600 hover:to-cyan-600 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2 focus:ring-offset-gray-900 shadow-lg hover:shadow-xl transition-all duration-300">
                    S'abonner
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Final CTA Section -->
<div class="bg-white dark:bg-gray-900">
    <div class="px-6 py-16 sm:px-6 sm:py-20 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                Prêt à concrétiser votre projet ?
            </h2>
            <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-600 dark:text-gray-400">
                Notre équipe d'experts est là pour transformer vos idées en solutions digitales performantes.
            </p>
            <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 rounded-lg bg-gradient-to-r from-sky-500 to-cyan-500 px-8 py-3.5 text-base font-semibold text-white shadow-lg hover:from-sky-600 hover:to-cyan-600 hover:shadow-xl focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-500 transition-all duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    Nous contacter
                </a>
                <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 text-base font-semibold text-gray-900 dark:text-white hover:text-sky-600 dark:hover:text-sky-400 transition-colors duration-300">
                    Retour au blog
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

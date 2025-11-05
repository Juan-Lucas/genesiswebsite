@extends('layouts.public')

@section('title', 'Blog')

@section('content')
<!-- Hero Section -->
<div class="bg-gray-900 relative isolate overflow-hidden">
    <div aria-hidden="true" class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
        <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
             class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#0ea5e9] to-[#06b6d4] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"></div>
    </div>

    <div class="relative px-6 pt-8 lg:px-8">
        <div class="mx-auto max-w-2xl py-12 sm:py-16 lg:py-24">
            <div class="text-center">
                <h1 class="text-5xl font-semibold tracking-tight text-balance text-white sm:text-7xl">
                    Blog & Actualités
                </h1>
                <p class="mt-8 text-lg font-medium text-pretty text-gray-400 sm:text-xl/8">
                    Découvrez nos articles sur les technologies, le développement web, et les tendances digitales.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Filter Section -->
<div class="bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-800">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 py-8">
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="{{ route('blog.index') }}"
               class="px-4 py-2 rounded-full text-sm font-semibold transition-all duration-300 {{ !request('category') || request('category') == 'all' ? 'bg-gradient-to-r from-sky-500 to-cyan-500 text-white' : 'bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700' }}">
                Tous
            </a>
            @foreach($categories as $cat)
                <a href="{{ route('blog.index', ['category' => $cat]) }}"
                   class="px-4 py-2 rounded-full text-sm font-semibold transition-all duration-300 {{ request('category') == $cat ? 'bg-gradient-to-r from-sky-500 to-cyan-500 text-white' : 'bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700' }}">
                    {{ ucfirst($cat) }}
                </a>
            @endforeach
        </div>
    </div>
</div>

<!-- Articles Grid -->
<div class="bg-white dark:bg-gray-900 py-16 sm:py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        @if($articles->count() > 0)
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($articles as $article)
                    <article class="flex flex-col overflow-hidden rounded-2xl bg-white dark:bg-gray-800 shadow-lg hover:shadow-xl transition-all duration-300 ring-1 ring-gray-200 dark:ring-gray-700">
                        @if($article->image)
                            <div class="aspect-[16/9] w-full overflow-hidden bg-gray-100 dark:bg-gray-700">
                                <img src="{{ asset($article->image) }}" alt="{{ $article->title }}" class="h-full w-full object-cover">
                            </div>
                        @else
                            <div class="aspect-[16/9] w-full bg-gradient-to-br from-sky-500 to-cyan-500"></div>
                        @endif

                        <div class="flex flex-1 flex-col justify-between p-6">
                            <div class="flex-1">
                                <div class="flex items-center gap-x-2 text-xs mb-3">
                                    <span class="inline-flex items-center rounded-full bg-sky-100 dark:bg-sky-900/30 px-2.5 py-0.5 text-sky-600 dark:text-sky-400 font-medium">
                                        {{ ucfirst($article->category) }}
                                    </span>
                                    <time datetime="{{ $article->published_at->format('Y-m-d') }}" class="text-gray-500 dark:text-gray-400">
                                        {{ $article->published_at->format('d M Y') }}
                                    </time>
                                </div>

                                <a href="{{ route('blog.show', $article) }}" class="group">
                                    <h3 class="text-xl font-semibold leading-6 text-gray-900 dark:text-white group-hover:text-sky-500 dark:group-hover:text-sky-400 transition-colors duration-300">
                                        {{ $article->title }}
                                    </h3>
                                    <p class="mt-3 text-sm leading-6 text-gray-600 dark:text-gray-400 line-clamp-3">
                                        {{ $article->excerpt }}
                                    </p>
                                </a>
                            </div>

                            <div class="mt-6 flex items-center gap-x-3">
                                <div class="h-10 w-10 rounded-full bg-gradient-to-br from-sky-400 to-cyan-400 flex items-center justify-center text-white font-semibold">
                                    {{ substr($article->author->name, 0, 1) }}
                                </div>
                                <div class="text-sm leading-5">
                                    <p class="font-semibold text-gray-900 dark:text-white">{{ $article->author->name }}</p>
                                </div>
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
            <div class="text-center py-12">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <h3 class="mt-2 text-sm font-semibold text-gray-900 dark:text-white">Aucun article</h3>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Aucun article n'a été publié pour le moment.</p>
            </div>
        @endif
    </div>
</div>
@endsection

@extends('layouts.admin')

@section('page-title', 'Dashboard')
@section('page-subtitle', 'Vue d\'ensemble de votre site Genesis')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Projects stat -->
    <div class="bg-white/5 backdrop-blur-sm rounded-lg border border-white/10 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-gray-400">Projets</p>
                <p class="text-3xl font-bold text-white mt-2">{{ $stats['projects'] }}</p>
                <p class="text-xs text-gray-500 mt-1">{{ $stats['published_projects'] }} publiés</p>
            </div>
            <div class="bg-blue-500/10 rounded-lg p-3">
                <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                </svg>
            </div>
        </div>
        <a href="{{ route('admin.projects.index') }}" class="text-blue-400 text-sm font-medium hover:text-blue-300 mt-4 inline-block">
            Gérer les projets →
        </a>
    </div>

    <!-- Services stat -->
    <div class="bg-white/5 backdrop-blur-sm rounded-lg border border-white/10 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-gray-400">Services</p>
                <p class="text-3xl font-bold text-white mt-2">{{ $stats['services'] }}</p>
                <p class="text-xs text-gray-500 mt-1">{{ $stats['published_services'] }} publiés</p>
            </div>
            <div class="bg-purple-500/10 rounded-lg p-3">
                <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>
        </div>
        <a href="{{ route('admin.services.index') }}" class="text-purple-400 text-sm font-medium hover:text-purple-300 mt-4 inline-block">
            Gérer les services →
        </a>
    </div>

    <!-- Articles stat -->
    <div class="bg-white/5 backdrop-blur-sm rounded-lg border border-white/10 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-gray-400">Articles</p>
                <p class="text-3xl font-bold text-white mt-2">{{ $stats['articles'] }}</p>
                <p class="text-xs text-gray-500 mt-1">{{ $stats['published_articles'] }} publiés</p>
            </div>
            <div class="bg-green-500/10 rounded-lg p-3">
                <svg class="w-8 h-8 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                </svg>
            </div>
        </div>
        <a href="{{ route('admin.articles.index') }}" class="text-green-400 text-sm font-medium hover:text-green-300 mt-4 inline-block">
            Gérer les articles →
        </a>
    </div>

    <!-- Subscribers stat -->
    <div class="bg-white/5 backdrop-blur-sm rounded-lg border border-white/10 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-gray-400">Abonnés</p>
                <p class="text-3xl font-bold text-white mt-2">{{ $stats['subscribers'] }}</p>
                <p class="text-xs text-gray-500 mt-1">Newsletter</p>
            </div>
            <div class="bg-yellow-500/10 rounded-lg p-3">
                <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Recent projects -->
    <div class="bg-white/5 backdrop-blur-sm rounded-lg border border-white/10">
        <div class="p-6 border-b border-white/10">
            <h3 class="text-lg font-semibold text-white">Projets récents</h3>
        </div>
        <div class="p-6">
            @forelse ($recent_projects as $project)
                <div class="flex items-center justify-between py-3 {{ !$loop->last ? 'border-b border-white/5' : '' }}">
                    <div class="flex-1">
                        <h4 class="font-medium text-white">{{ $project->title }}</h4>
                        <p class="text-sm text-gray-400">{{ $project->category }}</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        @if ($project->published_at)
                            <span class="px-2 py-1 text-xs font-medium bg-green-500/10 text-green-400 border border-green-500/20 rounded">Publié</span>
                        @else
                            <span class="px-2 py-1 text-xs font-medium bg-gray-500/10 text-gray-400 border border-gray-500/20 rounded">Brouillon</span>
                        @endif
                        <a href="{{ route('admin.projects.edit', $project) }}" class="text-indigo-400 hover:text-indigo-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            @empty
                <p class="text-gray-400 text-center py-8">Aucun projet pour le moment</p>
            @endforelse
            <a href="{{ route('admin.projects.index') }}" class="block text-center text-indigo-400 hover:text-indigo-300 font-medium mt-4">
                Voir tous les projets
            </a>
        </div>
    </div>

    <!-- Recent articles -->
    <div class="bg-white/5 backdrop-blur-sm rounded-lg border border-white/10">
        <div class="p-6 border-b border-white/10">
            <h3 class="text-lg font-semibold text-white">Articles récents</h3>
        </div>
        <div class="p-6">
            @forelse ($recent_articles as $article)
                <div class="flex items-center justify-between py-3 {{ !$loop->last ? 'border-b border-white/5' : '' }}">
                    <div class="flex-1">
                        <h4 class="font-medium text-white">{{ $article->title }}</h4>
                        <p class="text-sm text-gray-400">{{ $article->author }} • {{ $article->created_at->format('d/m/Y') }}</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        @if ($article->published_at)
                            <span class="px-2 py-1 text-xs font-medium bg-green-500/10 text-green-400 border border-green-500/20 rounded">Publié</span>
                        @else
                            <span class="px-2 py-1 text-xs font-medium bg-gray-500/10 text-gray-400 border border-gray-500/20 rounded">Brouillon</span>
                        @endif
                        <a href="{{ route('admin.articles.edit', $article) }}" class="text-indigo-400 hover:text-indigo-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            @empty
                <p class="text-gray-400 text-center py-8">Aucun article pour le moment</p>
            @endforelse
            <a href="{{ route('admin.articles.index') }}" class="block text-center text-indigo-400 hover:text-indigo-300 font-medium mt-4">
                Voir tous les articles
            </a>
        </div>
    </div>
</div>

<!-- Newsletter subscribers -->
<div class="mt-6 bg-white/5 backdrop-blur-sm rounded-lg border border-white/10">
    <div class="p-6 border-b border-white/10">
        <h3 class="text-lg font-semibold text-white">Abonnés newsletter récents</h3>
    </div>
    <div class="p-6">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-white/10">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Date d'inscription</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5">
                    @forelse ($recent_subscribers as $subscriber)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $subscriber->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">{{ $subscriber->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="px-6 py-4 text-center text-gray-400">Aucun abonné pour le moment</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

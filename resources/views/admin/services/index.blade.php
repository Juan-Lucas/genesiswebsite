@extends('layouts.admin')

@section('page-title', 'Services')
@section('page-subtitle', 'Gérez tous vos services')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.services.create') }}" class="inline-flex items-center px-4 py-2 bg-gradient-genesis text-white font-semibold rounded-lg hover:opacity-90 transition">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
        </svg>
        Nouveau service
    </a>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Service</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Icône</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Ordre</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Statut</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse ($services as $service)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">
                        <div class="font-medium text-gray-900">{{ $service->title }}</div>
                        <div class="text-sm text-gray-500">{{ Str::limit($service->description, 60) }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="text-2xl">{{ $service->icon }}</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        #{{ $service->order }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if ($service->published_at)
                            <span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-800 rounded">Publié</span>
                        @else
                            <span class="px-2 py-1 text-xs font-medium bg-gray-100 text-gray-800 rounded">Brouillon</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <div class="flex items-center justify-end space-x-2">
                            @if ($service->published_at)
                                <a href="{{ route('services.show', $service) }}" target="_blank" class="text-gray-600 hover:text-gray-900">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                </a>
                            @endif
                            <a href="{{ route('admin.services.edit', $service) }}" class="text-blue-600 hover:text-blue-900">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                            </a>
                            <form action="{{ route('admin.services.toggle-publish', $service) }}" method="POST" class="inline">
                                @csrf
                                <button type="submit" class="{{ $service->published_at ? 'text-orange-600 hover:text-orange-900' : 'text-green-600 hover:text-green-900' }}">
                                    @if ($service->published_at)
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>
                                        </svg>
                                    @else
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    @endif
                                </button>
                            </form>
                            <form action="{{ route('admin.services.destroy', $service) }}" method="POST" class="inline" onsubmit="return confirm('Supprimer ce service ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-6 py-12 text-center text-gray-500">
                        <p>Aucun service pour le moment</p>
                        <a href="{{ route('admin.services.create') }}" class="mt-4 inline-flex items-center px-4 py-2 bg-gradient-genesis text-white font-semibold rounded-lg hover:opacity-90 transition">
                            Créer votre premier service
                        </a>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@if ($services->hasPages())
    <div class="mt-6">{{ $services->links() }}</div>
@endif
@endsection

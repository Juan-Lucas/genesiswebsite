@extends('layouts.admin')

@section('page-title', 'Créer un service')

@section('content')
<div class="max-w-4xl">
    <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-lg shadow p-8">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Titre *</label>
                <input type="text" name="title" value="{{ old('title') }}" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500">
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Description courte *</label>
                <textarea name="description" rows="3" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500">{{ old('description') }}</textarea>
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Contenu *</label>
                <textarea name="content" rows="10" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500">{{ old('content') }}</textarea>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Icône (emoji) *</label>
                <input type="text" name="icon" value="{{ old('icon', '⚡') }}" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Ordre</label>
                <input type="number" name="order" value="{{ old('order', 1) }}" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Couleur *</label>
                <select name="color" required class="w-full px-4 py-2 border rounded-lg">
                    <option value="blue">Bleu</option>
                    <option value="purple">Violet</option>
                    <option value="green">Vert</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Image</label>
                <input type="file" name="image" accept="image/*" class="w-full px-4 py-2 border rounded-lg">
            </div>
            <div class="md:col-span-2">
                <label class="flex items-center">
                    <input type="checkbox" name="publish_now" value="1" class="w-4 h-4 text-purple-600 rounded">
                    <span class="ml-2 text-sm">Publier immédiatement</span>
                </label>
            </div>
        </div>
        <div class="mt-8 flex justify-end space-x-4">
            <a href="{{ route('admin.services.index') }}" class="px-6 py-2 border rounded-lg hover:bg-gray-50">Annuler</a>
            <button type="submit" class="px-6 py-2 bg-gradient-genesis text-white rounded-lg hover:opacity-90">Créer</button>
        </div>
    </form>
</div>
@push('scripts')
<script>
const form = document.querySelector('form');
form.addEventListener('submit', function(e) {
    if (document.querySelector('input[name="publish_now"]').checked) {
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'published_at';
        input.value = new Date().toISOString().slice(0, 19).replace('T', ' ');
        form.appendChild(input);
    }
});
</script>
@endpush
@endsection

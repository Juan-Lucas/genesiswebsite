@extends('layouts.admin')

@section('page-title', 'Modifier le service')

@section('content')
<div class="max-w-4xl">
    <form action="{{ route('admin.services.update', $service) }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-lg shadow p-8">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Titre *</label>
                <input type="text" name="title" value="{{ old('title', $service->title) }}" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500">
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Description courte *</label>
                <textarea name="description" rows="3" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500">{{ old('description', $service->description) }}</textarea>
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Contenu *</label>
                <textarea name="content" rows="10" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500">{{ old('content', $service->content) }}</textarea>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Icône (emoji) *</label>
                <input type="text" name="icon" value="{{ old('icon', $service->icon) }}" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Ordre</label>
                <input type="number" name="order" value="{{ old('order', $service->order) }}" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Couleur *</label>
                <select name="color" required class="w-full px-4 py-2 border rounded-lg">
                    <option value="blue" {{ $service->color == 'blue' ? 'selected' : '' }}>Bleu</option>
                    <option value="purple" {{ $service->color == 'purple' ? 'selected' : '' }}>Violet</option>
                    <option value="green" {{ $service->color == 'green' ? 'selected' : '' }}>Vert</option>
                </select>
            </div>
            @if ($service->image)
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Image actuelle</label>
                    <img src="{{ Storage::url($service->image) }}" class="w-48 h-32 object-cover rounded-lg">
                </div>
            @endif
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">{{ $service->image ? 'Remplacer l\'image' : 'Image' }}</label>
                <input type="file" name="image" accept="image/*" class="w-full px-4 py-2 border rounded-lg">
            </div>
            <div class="md:col-span-2">
                <label class="flex items-center">
                    <input type="checkbox" name="publish_now" value="1" {{ $service->published_at ? 'checked' : '' }} class="w-4 h-4 text-purple-600 rounded">
                    <span class="ml-2 text-sm">Publié</span>
                </label>
            </div>
        </div>
        <div class="mt-8 flex justify-end space-x-4">
            <a href="{{ route('admin.services.index') }}" class="px-6 py-2 border rounded-lg hover:bg-gray-50">Annuler</a>
            <button type="submit" class="px-6 py-2 bg-gradient-genesis text-white rounded-lg hover:opacity-90">Mettre à jour</button>
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
        input.value = '{{ $service->published_at ?? now()->toDateTimeString() }}';
        if (!input.value) input.value = new Date().toISOString().slice(0, 19).replace('T', ' ');
        form.appendChild(input);
    }
});
</script>
@endpush
@endsection

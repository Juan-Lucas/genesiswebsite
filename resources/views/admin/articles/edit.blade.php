@extends('layouts.admin')

@section('page-title', 'Modifier l\'article')

@section('content')
<div class="max-w-4xl">
    <form action="{{ route('admin.articles.update', $article) }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-lg shadow p-8">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Titre *</label>
                <input type="text" name="title" value="{{ old('title', $article->title) }}" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500">
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Extrait *</label>
                <textarea name="excerpt" rows="3" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500">{{ old('excerpt', $article->excerpt) }}</textarea>
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Contenu *</label>
                <textarea name="content" rows="15" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500">{{ old('content', $article->content) }}</textarea>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Catégorie</label>
                <input type="text" name="category" value="{{ old('category', $article->category) }}" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Tags</label>
                <input type="text" name="tags" value="{{ old('tags', $article->tags) }}" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500">
            </div>
            @if ($article->image)
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Image actuelle</label>
                    <img src="{{ Storage::url($article->image) }}" class="w-48 h-32 object-cover rounded-lg">
                </div>
            @endif
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">{{ $article->image ? 'Remplacer l\'image' : 'Image' }}</label>
                <input type="file" name="image" accept="image/*" class="w-full px-4 py-2 border rounded-lg">
            </div>
            <div class="md:col-span-2">
                <label class="flex items-center">
                    <input type="checkbox" name="publish_now" value="1" {{ $article->published_at ? 'checked' : '' }} class="w-4 h-4 text-purple-600 rounded">
                    <span class="ml-2 text-sm">Publié</span>
                </label>
            </div>
        </div>
        <div class="mt-8 flex justify-end space-x-4">
            <a href="{{ route('admin.articles.index') }}" class="px-6 py-2 border rounded-lg hover:bg-gray-50">Annuler</a>
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
        input.value = '{{ $article->published_at ?? now()->toDateTimeString() }}';
        if (!input.value) input.value = new Date().toISOString().slice(0, 19).replace('T', ' ');
        form.appendChild(input);
    }
});
</script>
@endpush
@endsection

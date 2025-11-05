@extends('layouts.admin')

@section('page-title', 'Modifier le projet')
@section('page-subtitle', $project->title)

@section('content')
<div class="max-w-4xl">
    <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-lg shadow p-8">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Title -->
            <div class="md:col-span-2">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Titre du projet *</label>
                <input type="text" name="title" id="title" value="{{ old('title', $project->title) }}" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
            </div>

            <!-- Slug -->
            <div class="md:col-span-2">
                <label for="slug" class="block text-sm font-medium text-gray-700 mb-2">Slug (URL)</label>
                <input type="text" name="slug" id="slug" value="{{ old('slug', $project->slug) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
            </div>

            <!-- Category -->
            <div>
                <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Catégorie *</label>
                <select name="category" id="category" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                    <option value="">Sélectionner...</option>
                    <option value="Web Design" {{ old('category', $project->category) == 'Web Design' ? 'selected' : '' }}>Web Design</option>
                    <option value="Branding" {{ old('category', $project->category) == 'Branding' ? 'selected' : '' }}>Branding</option>
                    <option value="Architecture" {{ old('category', $project->category) == 'Architecture' ? 'selected' : '' }}>Architecture</option>
                    <option value="Photography" {{ old('category', $project->category) == 'Photography' ? 'selected' : '' }}>Photography</option>
                    <option value="Vidéographie" {{ old('category', $project->category) == 'Vidéographie' ? 'selected' : '' }}>Vidéographie</option>
                </select>
            </div>

            <!-- Color -->
            <div>
                <label for="color" class="block text-sm font-medium text-gray-700 mb-2">Couleur *</label>
                <select name="color" id="color" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                    <option value="blue" {{ old('color', $project->color) == 'blue' ? 'selected' : '' }}>Bleu</option>
                    <option value="purple" {{ old('color', $project->color) == 'purple' ? 'selected' : '' }}>Violet</option>
                    <option value="green" {{ old('color', $project->color) == 'green' ? 'selected' : '' }}>Vert</option>
                    <option value="orange" {{ old('color', $project->color) == 'orange' ? 'selected' : '' }}>Orange</option>
                    <option value="pink" {{ old('color', $project->color) == 'pink' ? 'selected' : '' }}>Rose</option>
                </select>
            </div>

            <!-- Client -->
            <div>
                <label for="client" class="block text-sm font-medium text-gray-700 mb-2">Client</label>
                <input type="text" name="client" id="client" value="{{ old('client', $project->client) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
            </div>

            <!-- Year -->
            <div>
                <label for="year" class="block text-sm font-medium text-gray-700 mb-2">Année</label>
                <input type="number" name="year" id="year" value="{{ old('year', $project->year) }}" min="2000" max="2100"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
            </div>

            <!-- Description -->
            <div class="md:col-span-2">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description courte *</label>
                <textarea name="description" id="description" rows="3" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">{{ old('description', $project->description) }}</textarea>
            </div>

            <!-- Content -->
            <div class="md:col-span-2">
                <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Contenu complet *</label>
                <textarea name="content" id="content" rows="10" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">{{ old('content', $project->content) }}</textarea>
            </div>

            <!-- Technologies -->
            <div class="md:col-span-2">
                <label for="technologies" class="block text-sm font-medium text-gray-700 mb-2">Technologies utilisées</label>
                <input type="text" name="technologies" id="technologies" value="{{ old('technologies', $project->technologies) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
            </div>

            <!-- Current image -->
            @if ($project->image)
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Image actuelle</label>
                    <img src="{{ Storage::url($project->image) }}" alt="{{ $project->title }}" class="w-48 h-32 object-cover rounded-lg">
                </div>
            @endif

            <!-- Image upload -->
            <div class="md:col-span-2">
                <label for="image" class="block text-sm font-medium text-gray-700 mb-2">{{ $project->image ? 'Remplacer l\'image' : 'Ajouter une image' }}</label>
                <input type="file" name="image" id="image" accept="image/*"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
            </div>

            <!-- Published at -->
            <div class="md:col-span-2">
                <label class="flex items-center">
                    <input type="checkbox" name="publish_now" value="1" {{ old('publish_now', $project->published_at ? '1' : '') ? 'checked' : '' }}
                        class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                    <span class="ml-2 text-sm text-gray-700">Publié</span>
                </label>
            </div>
        </div>

        <div class="mt-8 flex items-center justify-end space-x-4">
            <a href="{{ route('admin.projects.index') }}" class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition">
                Annuler
            </a>
            <button type="submit" class="px-6 py-2 bg-gradient-genesis text-white font-semibold rounded-lg hover:opacity-90 transition">
                Mettre à jour
            </button>
        </div>
    </form>
</div>

@push('scripts')
<script>
    const form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
        const publishNow = document.querySelector('input[name="publish_now"]');
        if (publishNow && publishNow.checked) {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'published_at';
            input.value = '{{ $project->published_at ?? now()->toDateTimeString() }}';
            if (!input.value || input.value === '') {
                input.value = new Date().toISOString().slice(0, 19).replace('T', ' ');
            }
            form.appendChild(input);
        }
    });
</script>
@endpush
@endsection

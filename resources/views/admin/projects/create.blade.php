@extends('layouts.admin')

@section('page-title', 'Créer un projet')
@section('page-subtitle', 'Ajoutez un nouveau projet à votre portfolio')

@section('content')
<div class="max-w-4xl">
    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-lg shadow p-8">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Title -->
            <div class="md:col-span-2">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Titre du projet *</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
            </div>

            <!-- Slug -->
            <div class="md:col-span-2">
                <label for="slug" class="block text-sm font-medium text-gray-700 mb-2">Slug (URL)</label>
                <input type="text" name="slug" id="slug" value="{{ old('slug') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                    placeholder="Laissez vide pour générer automatiquement">
                <p class="text-xs text-gray-500 mt-1">Exemple: mon-super-projet</p>
            </div>

            <!-- Category -->
            <div>
                <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Catégorie *</label>
                <select name="category" id="category" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                    <option value="">Sélectionner...</option>
                    <option value="Web Design" {{ old('category') == 'Web Design' ? 'selected' : '' }}>Web Design</option>
                    <option value="Branding" {{ old('category') == 'Branding' ? 'selected' : '' }}>Branding</option>
                    <option value="Architecture" {{ old('category') == 'Architecture' ? 'selected' : '' }}>Architecture</option>
                    <option value="Photography" {{ old('category') == 'Photography' ? 'selected' : '' }}>Photography</option>
                    <option value="Vidéographie" {{ old('category') == 'Vidéographie' ? 'selected' : '' }}>Vidéographie</option>
                </select>
            </div>

            <!-- Color -->
            <div>
                <label for="color" class="block text-sm font-medium text-gray-700 mb-2">Couleur *</label>
                <select name="color" id="color" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                    <option value="blue" {{ old('color') == 'blue' ? 'selected' : '' }}>Bleu</option>
                    <option value="purple" {{ old('color') == 'purple' ? 'selected' : '' }}>Violet</option>
                    <option value="green" {{ old('color') == 'green' ? 'selected' : '' }}>Vert</option>
                    <option value="orange" {{ old('color') == 'orange' ? 'selected' : '' }}>Orange</option>
                    <option value="pink" {{ old('color') == 'pink' ? 'selected' : '' }}>Rose</option>
                </select>
            </div>

            <!-- Client -->
            <div>
                <label for="client" class="block text-sm font-medium text-gray-700 mb-2">Client</label>
                <input type="text" name="client" id="client" value="{{ old('client') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
            </div>

            <!-- Year -->
            <div>
                <label for="year" class="block text-sm font-medium text-gray-700 mb-2">Année</label>
                <input type="number" name="year" id="year" value="{{ old('year', date('Y')) }}" min="2000" max="2100"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
            </div>

            <!-- Description -->
            <div class="md:col-span-2">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description courte *</label>
                <textarea name="description" id="description" rows="3" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">{{ old('description') }}</textarea>
                <p class="text-xs text-gray-500 mt-1">Résumé affiché dans les listings</p>
            </div>

            <!-- Content -->
            <div class="md:col-span-2">
                <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Contenu complet *</label>
                <textarea name="content" id="content" rows="10" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">{{ old('content') }}</textarea>
            </div>

            <!-- Technologies -->
            <div class="md:col-span-2">
                <label for="technologies" class="block text-sm font-medium text-gray-700 mb-2">Technologies utilisées</label>
                <input type="text" name="technologies" id="technologies" value="{{ old('technologies') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                    placeholder="Laravel, Vue.js, Tailwind CSS">
                <p class="text-xs text-gray-500 mt-1">Séparées par des virgules</p>
            </div>

            <!-- Image -->
            <div class="md:col-span-2">
                <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Image du projet</label>
                <input type="file" name="image" id="image" accept="image/*"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                <p class="text-xs text-gray-500 mt-1">Format recommandé: 1200x800px, max 2MB</p>
            </div>

            <!-- Published at -->
            <div class="md:col-span-2">
                <label class="flex items-center">
                    <input type="checkbox" name="publish_now" value="1" {{ old('publish_now') ? 'checked' : '' }}
                        class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                    <span class="ml-2 text-sm text-gray-700">Publier immédiatement</span>
                </label>
            </div>
        </div>

        <div class="mt-8 flex items-center justify-end space-x-4">
            <a href="{{ route('admin.projects.index') }}" class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition">
                Annuler
            </a>
            <button type="submit" class="px-6 py-2 bg-gradient-genesis text-white font-semibold rounded-lg hover:opacity-90 transition">
                Créer le projet
            </button>
        </div>
    </form>
</div>

@push('scripts')
<script>
    // Auto-generate slug from title
    document.getElementById('title').addEventListener('input', function() {
        const slug = this.value
            .toLowerCase()
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '')
            .replace(/[^a-z0-9]+/g, '-')
            .replace(/^-+|-+$/g, '');
        document.getElementById('slug').value = slug;
    });

    // Set published_at when checkbox is checked
    const form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
        const publishNow = document.querySelector('input[name="publish_now"]');
        if (publishNow && publishNow.checked) {
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

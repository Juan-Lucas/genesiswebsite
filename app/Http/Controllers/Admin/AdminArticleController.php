<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(20);

        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:articles,slug',
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'category' => 'nullable|string|max:255',
            'tags' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'published_at' => 'nullable|date',
        ]);

        $validated['slug'] = $validated['slug'] ?? Str::slug($validated['title']);
        $validated['author'] = auth()->user()->name;

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('articles', 'public');
        }

        Article::create($validated);

        return redirect()->route('admin.articles.index')->with('success', 'Article créé avec succès !');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:articles,slug,'.$article->id,
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'category' => 'nullable|string|max:255',
            'tags' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'published_at' => 'nullable|date',
        ]);

        $validated['slug'] = $validated['slug'] ?? Str::slug($validated['title']);

        if ($request->hasFile('image')) {
            if ($article->image) {
                Storage::disk('public')->delete($article->image);
            }
            $validated['image'] = $request->file('image')->store('articles', 'public');
        }

        $article->update($validated);

        return redirect()->route('admin.articles.index')->with('success', 'Article mis à jour avec succès !');
    }

    public function destroy(Article $article)
    {
        if ($article->image) {
            Storage::disk('public')->delete($article->image);
        }

        $article->delete();

        return redirect()->route('admin.articles.index')->with('success', 'Article supprimé avec succès !');
    }

    public function togglePublish(Article $article)
    {
        $article->update([
            'published_at' => $article->published_at ? null : now(),
        ]);

        $status = $article->published_at ? 'publié' : 'dépublié';

        return back()->with('success', "Article {$status} avec succès !");
    }
}

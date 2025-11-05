<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    /**
     * Display a listing of blog articles.
     */
    public function index(Request $request): View
    {
        $query = Article::published()->with('author');

        // Filter by category if provided
        if ($request->has('category') && $request->category !== 'all') {
            $query->category($request->category);
        }

        $articles = $query->paginate(9);

        // Get all categories for filter
        $categories = Article::published()
            ->select('category')
            ->distinct()
            ->pluck('category');

        return view('blog.index', compact('articles', 'categories'));
    }

    /**
     * Display the specified article.
     */
    public function show(Article $article): View
    {
        // Get related articles from the same category
        $relatedArticles = Article::published()
            ->where('id', '!=', $article->id)
            ->where('category', $article->category)
            ->limit(3)
            ->get();

        return view('blog.show', compact('article', 'relatedArticles'));
    }
}

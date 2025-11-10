<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function __construct(
        private ArticleRepository $articleRepository
    ) {}

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
        $relatedArticles = $this->articleRepository->getRelated($article, 3);

        return view('blog.show', compact('article', 'relatedArticles'));
    }
}

<?php

namespace App\Repositories;

use App\Constants\CacheKeys;
use App\Models\Article;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;

class ArticleRepository
{
    /**
     * Get paginated published articles.
     */
    public function getPaginatedPublished(int $perPage = 12): LengthAwarePaginator
    {
        return Article::published()
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);
    }

    /**
     * Get an article by its slug.
     */
    public function findBySlug(string $slug): ?Article
    {
        return Article::where('slug', $slug)
            ->published()
            ->first();
    }

    /**
     * Get latest articles for homepage or sidebar.
     */
    public function getLatest(int $limit = 3): Collection
    {
        return Cache::remember(
            CacheKeys::ARTICLES_LATEST,
            CacheKeys::TTL_ONE_HOUR,
            fn () => Article::published()
                ->orderBy('created_at', 'desc')
                ->limit($limit)
                ->get()
        );
    }

    /**
     * Get related articles based on tags or category.
     */
    public function getRelated(Article $article, int $limit = 3): Collection
    {
        return Article::published()
            ->where('id', '!=', $article->id)
            ->orderBy('created_at', 'desc')
            ->limit($limit)
            ->get();
    }

    /**
     * Get all article categories.
     */
    public function getAllCategories(): Collection
    {
        return Cache::remember(
            CacheKeys::ARTICLES_CATEGORIES,
            CacheKeys::TTL_ONE_DAY,
            fn () => Article::published()
                ->select('category')
                ->distinct()
                ->pluck('category')
        );
    }

    /**
     * Clear all article caches.
     */
    public function clearCache(): void
    {
        Cache::forget(CacheKeys::ARTICLES_LATEST);
        Cache::forget(CacheKeys::ARTICLES_CATEGORIES);
    }
}

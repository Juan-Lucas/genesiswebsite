<?php

namespace App\Observers;

use App\Models\Article;
use App\Repositories\ArticleRepository;

class ArticleObserver
{
    public function __construct(
        private ArticleRepository $articleRepository
    ) {}

    /**
     * Handle the Article "created" event.
     */
    public function created(Article $article): void
    {
        $this->articleRepository->clearCache();
    }

    /**
     * Handle the Article "updated" event.
     */
    public function updated(Article $article): void
    {
        $this->articleRepository->clearCache();
    }

    /**
     * Handle the Article "deleted" event.
     */
    public function deleted(Article $article): void
    {
        $this->articleRepository->clearCache();
    }
}

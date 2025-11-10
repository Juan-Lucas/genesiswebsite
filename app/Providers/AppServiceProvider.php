<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Project;
use App\Models\Service;
use App\Observers\ArticleObserver;
use App\Observers\ProjectObserver;
use App\Observers\ServiceObserver;
use App\Repositories\ArticleRepository;
use App\Repositories\NewsletterRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\ServiceRepository;
use App\Services\BrochureService;
use App\Services\ContactService;
use App\Services\NewsletterService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Register Repositories
        $this->app->bind(ServiceRepository::class);
        $this->app->bind(ProjectRepository::class);
        $this->app->bind(ArticleRepository::class);
        $this->app->bind(NewsletterRepository::class);

        // Register Services
        $this->app->bind(NewsletterService::class);
        $this->app->bind(ContactService::class);
        $this->app->bind(BrochureService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Register Model Observers for cache invalidation
        Service::observe(ServiceObserver::class);
        Project::observe(ProjectObserver::class);
        Article::observe(ArticleObserver::class);
    }
}

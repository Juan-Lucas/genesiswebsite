<?php

namespace App\Repositories;

use App\Constants\CacheKeys;
use App\Models\Project;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;

class ProjectRepository
{
    /**
     * Get all published projects ordered by date.
     */
    public function getAllPublished(): Collection
    {
        return Cache::remember(
            CacheKeys::PROJECTS_PUBLISHED,
            CacheKeys::TTL_ONE_HOUR,
            fn () => Project::published()
                ->orderBy('created_at', 'desc')
                ->get()
        );
    }

    /**
     * Get paginated published projects.
     */
    public function getPaginatedPublished(int $perPage = 9): LengthAwarePaginator
    {
        return Project::published()
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);
    }

    /**
     * Get a project by its slug.
     */
    public function findBySlug(string $slug): ?Project
    {
        return Project::where('slug', $slug)
            ->published()
            ->first();
    }

    /**
     * Get featured projects for homepage.
     */
    public function getFeatured(int $limit = 3): Collection
    {
        return Cache::remember(
            CacheKeys::PROJECTS_FEATURED,
            CacheKeys::TTL_ONE_HOUR,
            fn () => Project::published()
                ->where('featured', true)
                ->orderBy('created_at', 'desc')
                ->limit($limit)
                ->get()
        );
    }

    /**
     * Get related projects based on service.
     */
    public function getRelated(Project $project, int $limit = 3): Collection
    {
        return Project::published()
            ->where('id', '!=', $project->id)
            ->where('service_id', $project->service_id)
            ->orderBy('created_at', 'desc')
            ->limit($limit)
            ->get();
    }

    /**
     * Clear all project caches.
     */
    public function clearCache(): void
    {
        Cache::forget(CacheKeys::PROJECTS_PUBLISHED);
        Cache::forget(CacheKeys::PROJECTS_FEATURED);
    }
}

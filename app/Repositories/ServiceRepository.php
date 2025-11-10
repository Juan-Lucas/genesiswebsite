<?php

namespace App\Repositories;

use App\Constants\CacheKeys;
use App\Models\Service;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;

class ServiceRepository
{
    /**
     * Get all published services ordered by custom order.
     */
    public function getAllPublished(): Collection
    {
        return Cache::remember(
            CacheKeys::SERVICES_PUBLISHED,
            CacheKeys::TTL_ONE_HOUR,
            fn () => Service::published()
                ->orderBy('order', 'asc')
                ->get()
        );
    }

    /**
     * Get a service by its slug.
     */
    public function findBySlug(string $slug): ?Service
    {
        return Service::where('slug', $slug)
            ->published()
            ->first();
    }

    /**
     * Get featured services for homepage.
     */
    public function getFeatured(int $limit = 6): Collection
    {
        return Service::published()
            ->orderBy('order', 'asc')
            ->limit($limit)
            ->get();
    }

    /**
     * Get service by ID.
     */
    public function findById(int $id): ?Service
    {
        return Service::find($id);
    }

    /**
     * Clear all service caches.
     */
    public function clearCache(): void
    {
        Cache::forget(CacheKeys::SERVICES_PUBLISHED);
    }
}

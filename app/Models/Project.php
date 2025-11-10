<?php

namespace App\Models;

use App\Constants\ProjectCategory;
use App\Constants\ProjectStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'description',
        'long_description',
        'client',
        'duration',
        'year',
        'technologies',
        'results',
        'image_url',
        'status',
        'featured',
        'color',
    ];

    protected $casts = [
        'technologies' => 'array',
        'results' => 'array',
        'featured' => 'boolean',
    ];

    /**
     * Boot method to auto-generate slug
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            if (! $project->slug) {
                $project->slug = Str::slug($project->title);
            }
        });
    }

    /**
     * Get the route key name for Laravel.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Scope a query to only include published projects.
     */
    public function scopePublished($query)
    {
        return $query->where('status', ProjectStatus::PUBLISHED);
    }

    /**
     * Scope a query to only include featured projects.
     */
    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    /**
     * Get the SVG icon based on category.
     */
    public function getIconAttribute(): string
    {
        return ProjectCategory::getIcon($this->category);
    }

    /**
     * Check if project is published.
     */
    public function isPublished(): bool
    {
        return $this->status === ProjectStatus::PUBLISHED;
    }

    /**
     * Check if project is featured.
     */
    public function isFeatured(): bool
    {
        return $this->featured === true;
    }
}

<?php

namespace Tests\Unit\Repositories;

use App\Models\Service;
use App\Repositories\ServiceRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ServiceRepositoryTest extends TestCase
{
    use RefreshDatabase;

    private ServiceRepository $repository;

    protected function setUp(): void
    {
        parent::setUp();
        $this->repository = new ServiceRepository;
    }

    public function test_get_all_published_returns_only_published_services(): void
    {
        // Arrange
        Service::factory()->published()->create();
        Service::factory()->published()->create();
        Service::factory()->unpublished()->create();

        // Act
        $services = $this->repository->getAllPublished();

        // Assert
        expect($services)->toHaveCount(2);
        expect($services->every(fn ($service) => $service->published_at !== null))->toBeTrue();
    }

    public function test_get_all_published_orders_services(): void
    {
        // Arrange
        Service::factory()->published()->create(['title' => 'Service C']);
        Service::factory()->published()->create(['title' => 'Service A']);
        Service::factory()->published()->create(['title' => 'Service B']);

        // Act
        $services = $this->repository->getAllPublished();

        // Assert
        expect($services)->toHaveCount(3);
    }

    public function test_find_by_slug_returns_service_when_found(): void
    {
        // Arrange
        $service = Service::factory()->published()->create([
            'slug' => 'test-service',
        ]);

        // Act
        $result = $this->repository->findBySlug('test-service');

        // Assert
        expect($result)->not->toBeNull();
        expect($result->id)->toBe($service->id);
    }

    public function test_find_by_slug_returns_null_when_not_found(): void
    {
        // Act
        $result = $this->repository->findBySlug('non-existent-slug');

        // Assert
        expect($result)->toBeNull();
    }

    public function test_find_by_slug_returns_null_for_unpublished_service(): void
    {
        // Arrange
        Service::factory()->unpublished()->create([
            'slug' => 'unpublished-service',
        ]);

        // Act
        $result = $this->repository->findBySlug('unpublished-service');

        // Assert
        expect($result)->toBeNull();
    }

    public function test_get_featured_returns_limited_number_of_services(): void
    {
        // Arrange
        Service::factory()->count(10)->published()->create();

        // Act
        $services = $this->repository->getFeatured(3);

        // Assert
        expect($services)->toHaveCount(3);
    }

    public function test_get_featured_returns_all_when_fewer_than_limit(): void
    {
        // Arrange
        Service::factory()->count(2)->published()->create();

        // Act
        $services = $this->repository->getFeatured(5);

        // Assert
        expect($services)->toHaveCount(2);
    }

    public function test_find_by_id_returns_service_when_found(): void
    {
        // Arrange
        $service = Service::factory()->published()->create();

        // Act
        $result = $this->repository->findById($service->id);

        // Assert
        expect($result)->not->toBeNull();
        expect($result->id)->toBe($service->id);
    }

    public function test_find_by_id_returns_null_when_not_found(): void
    {
        // Act
        $result = $this->repository->findById(9999);

        // Assert
        expect($result)->toBeNull();
    }
}

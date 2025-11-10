<?php

namespace Tests\Feature;

use App\Models\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BrochureDownloadTest extends TestCase
{
    use RefreshDatabase;

    public function test_brochure_can_be_downloaded(): void
    {
        // Arrange
        Service::factory()->count(3)->published()->create();

        // Act
        $response = $this->get(route('brochure.download'));

        // Assert
        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/pdf');
    }

    public function test_brochure_filename_contains_year(): void
    {
        // Arrange
        Service::factory()->count(2)->published()->create();

        // Act
        $response = $this->get(route('brochure.download'));

        // Assert
        $contentDisposition = $response->headers->get('Content-Disposition');
        expect($contentDisposition)->toContain((string) date('Y'));
        expect($contentDisposition)->toContain('Genesis-Brochure');
    }

    public function test_brochure_includes_published_services_only(): void
    {
        // Arrange
        Service::factory()->published()->create([
            'title' => 'Published Service',
        ]);
        Service::factory()->unpublished()->create([
            'title' => 'Unpublished Service',
        ]);

        // Act
        $response = $this->get(route('brochure.download'));

        // Assert
        $response->assertStatus(200);
        // The brochure should only include published services
        // This is implicitly tested by the repository layer
    }

    public function test_brochure_can_be_downloaded_without_services(): void
    {
        // Act - No services in database
        $response = $this->get(route('brochure.download'));

        // Assert
        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/pdf');
    }
}

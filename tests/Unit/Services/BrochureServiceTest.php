<?php

namespace Tests\Unit\Services;

use App\Models\Service;
use App\Repositories\ServiceRepository;
use App\Services\BrochureService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BrochureServiceTest extends TestCase
{
    use RefreshDatabase;

    private ServiceRepository $repository;

    private BrochureService $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->repository = new ServiceRepository;
        $this->service = new BrochureService($this->repository);
    }

    public function test_generate_brochure_pdf_returns_download_response(): void
    {
        // Arrange
        Service::factory()->count(2)->published()->create();

        // Act
        $response = $this->service->generateBrochurePdf();

        // Assert
        expect($response)->toBeInstanceOf(\Symfony\Component\HttpFoundation\Response::class);
        expect($response->headers->get('Content-Type'))->toContain('pdf');
    }

    public function test_stream_brochure_pdf_returns_inline_response(): void
    {
        // Arrange
        Service::factory()->published()->create();

        // Act
        $response = $this->service->streamBrochurePdf();

        // Assert
        expect($response)->toBeInstanceOf(\Symfony\Component\HttpFoundation\Response::class);
        expect($response->headers->get('Content-Type'))->toContain('pdf');
    }

    public function test_generate_filename_contains_current_year(): void
    {
        // Arrange - No services needed

        // Act
        $response = $this->service->generateBrochurePdf();
        $contentDisposition = $response->headers->get('Content-Disposition');

        // Assert
        expect($contentDisposition)->toContain((string) date('Y'));
        expect($contentDisposition)->toContain('Genesis-Brochure');
    }
}

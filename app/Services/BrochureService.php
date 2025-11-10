<?php

namespace App\Services;

use App\Repositories\ServiceRepository;
use Barryvdh\DomPDF\Facade\Pdf;
use Symfony\Component\HttpFoundation\Response;

class BrochureService
{
    public function __construct(
        private ServiceRepository $serviceRepository
    ) {}

    /**
     * Generate and download company brochure as PDF.
     */
    public function generateBrochurePdf(): Response
    {
        $services = $this->serviceRepository->getAllPublished();

        $pdf = Pdf::loadView('pdf.brochure', compact('services'));
        $pdf->setPaper('a4', 'portrait');

        $filename = $this->generateFilename();

        return $pdf->download($filename);
    }

    /**
     * Generate brochure filename with current year.
     */
    private function generateFilename(): string
    {
        return sprintf('Genesis-Brochure-%s.pdf', date('Y'));
    }

    /**
     * Stream brochure PDF (for preview without download).
     */
    public function streamBrochurePdf(): Response
    {
        $services = $this->serviceRepository->getAllPublished();

        $pdf = Pdf::loadView('pdf.brochure', compact('services'));
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream($this->generateFilename());
    }
}

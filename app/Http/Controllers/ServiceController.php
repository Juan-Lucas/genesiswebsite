<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Repositories\ServiceRepository;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function __construct(
        private ServiceRepository $serviceRepository
    ) {}

    /**
     * Display the specified service.
     */
    public function show(Service $service): View
    {
        // Get related services (other published services)
        $relatedServices = $this->serviceRepository->getFeatured(3);

        return view('services.show', compact('service', 'relatedServices'));
    }
}

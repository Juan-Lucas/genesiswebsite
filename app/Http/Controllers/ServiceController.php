<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\View\View;

class ServiceController extends Controller
{
    /**
     * Display the specified service.
     */
    public function show(Service $service): View
    {
        // Get related services (other published services)
        $relatedServices = Service::published()
            ->where('id', '!=', $service->id)
            ->limit(3)
            ->get();

        return view('services.show', compact('service', 'relatedServices'));
    }
}

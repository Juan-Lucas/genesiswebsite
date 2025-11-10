<?php

namespace App\Observers;

use App\Models\Service;
use App\Repositories\ServiceRepository;

class ServiceObserver
{
    public function __construct(
        private ServiceRepository $serviceRepository
    ) {}

    /**
     * Handle the Service "created" event.
     */
    public function created(Service $service): void
    {
        $this->serviceRepository->clearCache();
    }

    /**
     * Handle the Service "updated" event.
     */
    public function updated(Service $service): void
    {
        $this->serviceRepository->clearCache();
    }

    /**
     * Handle the Service "deleted" event.
     */
    public function deleted(Service $service): void
    {
        $this->serviceRepository->clearCache();
    }
}

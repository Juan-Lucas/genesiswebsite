<?php

namespace App\Observers;

use App\Models\Project;
use App\Repositories\ProjectRepository;

class ProjectObserver
{
    public function __construct(
        private ProjectRepository $projectRepository
    ) {}

    /**
     * Handle the Project "created" event.
     */
    public function created(Project $project): void
    {
        $this->projectRepository->clearCache();
    }

    /**
     * Handle the Project "updated" event.
     */
    public function updated(Project $project): void
    {
        $this->projectRepository->clearCache();
    }

    /**
     * Handle the Project "deleted" event.
     */
    public function deleted(Project $project): void
    {
        $this->projectRepository->clearCache();
    }
}

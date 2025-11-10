<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Repositories\ProjectRepository;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function __construct(
        private ProjectRepository $projectRepository
    ) {}

    /**
     * Display a listing of projects.
     */
    public function index(): View
    {
        $projects = $this->projectRepository->getAllPublished();

        return view('pages.projects', compact('projects'));
    }

    /**
     * Display the specified project.
     */
    public function show(Project $project): View
    {
        // Get related projects (other published projects, excluding current)
        $relatedProjects = $this->projectRepository->getRelated($project, 3);

        return view('projects.show', compact('project', 'relatedProjects'));
    }
}

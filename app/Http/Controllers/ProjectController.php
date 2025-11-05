<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\View\View;

class ProjectController extends Controller
{
    /**
     * Display a listing of projects.
     */
    public function index(): View
    {
        $projects = Project::published()->latest()->get();

        return view('pages.projects', compact('projects'));
    }

    /**
     * Display the specified project.
     */
    public function show(Project $project): View
    {
        // Get related projects (other published projects, excluding current)
        $relatedProjects = Project::published()
            ->where('id', '!=', $project->id)
            ->limit(3)
            ->get();

        return view('projects.show', compact('project', 'relatedProjects'));
    }
}

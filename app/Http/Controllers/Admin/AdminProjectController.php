<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(20);

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:projects,slug',
            'category' => 'required|string|max:255',
            'client' => 'nullable|string|max:255',
            'year' => 'nullable|integer|min:2000|max:2100',
            'description' => 'required|string',
            'content' => 'required|string',
            'technologies' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'color' => 'required|string|max:50',
            'published_at' => 'nullable|date',
        ]);

        $validated['slug'] = $validated['slug'] ?? Str::slug($validated['title']);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('projects', 'public');
        }

        Project::create($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Projet créé avec succès !');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:projects,slug,'.$project->id,
            'category' => 'required|string|max:255',
            'client' => 'nullable|string|max:255',
            'year' => 'nullable|integer|min:2000|max:2100',
            'description' => 'required|string',
            'content' => 'required|string',
            'technologies' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'color' => 'required|string|max:50',
            'published_at' => 'nullable|date',
        ]);

        $validated['slug'] = $validated['slug'] ?? Str::slug($validated['title']);

        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $validated['image'] = $request->file('image')->store('projects', 'public');
        }

        $project->update($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Projet mis à jour avec succès !');
    }

    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Projet supprimé avec succès !');
    }

    public function togglePublish(Project $project)
    {
        $project->update([
            'published_at' => $project->published_at ? null : now(),
        ]);

        $status = $project->published_at ? 'publié' : 'dépublié';

        return back()->with('success', "Projet {$status} avec succès !");
    }
}

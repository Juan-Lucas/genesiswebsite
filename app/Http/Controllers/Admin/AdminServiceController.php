<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('order')->paginate(20);

        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:services,slug',
            'description' => 'required|string',
            'content' => 'required|string',
            'features' => 'nullable|json',
            'icon' => 'required|string|max:255',
            'color' => 'required|string|max:50',
            'image' => 'nullable|image|max:2048',
            'order' => 'nullable|integer',
            'published_at' => 'nullable|date',
        ]);

        $validated['slug'] = $validated['slug'] ?? Str::slug($validated['title']);
        $validated['order'] = $validated['order'] ?? Service::max('order') + 1;

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('services', 'public');
        }

        Service::create($validated);

        return redirect()->route('admin.services.index')->with('success', 'Service créé avec succès !');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:services,slug,' . $service->id,
            'description' => 'required|string',
            'content' => 'required|string',
            'features' => 'nullable|json',
            'icon' => 'required|string|max:255',
            'color' => 'required|string|max:50',
            'image' => 'nullable|image|max:2048',
            'order' => 'nullable|integer',
            'published_at' => 'nullable|date',
        ]);

        $validated['slug'] = $validated['slug'] ?? Str::slug($validated['title']);

        if ($request->hasFile('image')) {
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }
            $validated['image'] = $request->file('image')->store('services', 'public');
        }

        $service->update($validated);

        return redirect()->route('admin.services.index')->with('success', 'Service mis à jour avec succès !');
    }

    public function destroy(Service $service)
    {
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }

        $service->delete();

        return redirect()->route('admin.services.index')->with('success', 'Service supprimé avec succès !');
    }

    public function togglePublish(Service $service)
    {
        $service->update([
            'published_at' => $service->published_at ? null : now(),
        ]);

        $status = $service->published_at ? 'publié' : 'dépublié';

        return back()->with('success', "Service {$status} avec succès !");
    }

    public function reorder(Request $request)
    {
        $request->validate([
            'services' => 'required|array',
            'services.*.id' => 'required|exists:services,id',
            'services.*.order' => 'required|integer',
        ]);

        foreach ($request->services as $serviceData) {
            Service::where('id', $serviceData['id'])->update(['order' => $serviceData['order']]);
        }

        return response()->json(['message' => 'Ordre mis à jour avec succès !']);
    }
}

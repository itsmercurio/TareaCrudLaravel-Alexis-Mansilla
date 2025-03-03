<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = auth()->user()->projects()->latest()->paginate(10);
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'estimated_hours' => 'required|integer|min:1',
            'start_date' => 'required|date'
        ]);

        $project = auth()->user()->projects()->create($validated);

        return redirect()->route('projects.index')
            ->with('success', __('messages.project_created'));
    }

    public function edit(Project $project)
    {
        $this->authorize('update', $project);
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $this->authorize('update', $project);

        $validated = $request->validate([
            'title' => 'required|max:255',
            'estimated_hours' => 'required|integer|min:1',
            'start_date' => 'required|date'
        ]);

        $project->update($validated);

        return redirect()->route('projects.index')
            ->with('success', __('messages.project_updated'));
    }

    public function destroy(Project $project)
    {
        $this->authorize('delete', $project);
        
        $project->delete();

        return redirect()->route('projects.index')
            ->with('success', __('messages.project_deleted'));
    }
}
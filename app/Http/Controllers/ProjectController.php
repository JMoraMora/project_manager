<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Company;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create', [
            'companies' => Company::all(),
            'cities' => City::all(),
            'users' => User::all(),
        ]);
    }

    public function store(Request $request)
    {

    }

    public function show(string $id)
    {
        
    }

    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project,
            'companies' => Company::all(),
            'cities' => City::all(),
            'users' => User::all(),
        ]);
    }

    public function update(Request $request, string $id)
    {
        
    }

    public function destroy(Project $project)
    {
        
    }
}

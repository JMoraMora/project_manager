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
        $name = $request->input('name');
        $budget = $request->input('budget');
        $user = $request->input('user');
        $city = $request->input('city');
        $company = $request->input('company');

        $project = new Project();

        $project->name = $name;
        $project->budget = $budget;
        $project->user_id = $user;
        $project->city_id = $city;
        $project->company_id = $company;

        $project->execution_date = now();
        $project->is_active = true;

        $project->save();

        return  redirect()->route('project.index');
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

    public function update(Request $request, Project $project)
    {
        $name = $request->input('name');
        $budget = $request->input('budget');
        $user = $request->input('user');
        $city = $request->input('city');
        $company = $request->input('company');

        $project->name = $name;
        $project->budget = $budget;
        $project->user_id = $user;
        $project->city_id = $city;
        $project->company_id = $company;

        $project->execution_date = now();
        $project->is_active = true;

        $project->save();

        return  redirect()->route('project.index');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return back();
    }
}

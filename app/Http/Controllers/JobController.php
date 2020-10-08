<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Resources\Job as JobResource;
use App\Http\Resources\JobCollection;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return new JobCollection(Job::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255'
        ]);

        $race = Job::create($request->all());

        return (new JobResource($race))
            ->response()
            ->setStatusCode(201);
    }

    public function show($id)
    {
        return new JobResource(Job::findOrFail($id));
    }

    public function showSpecialisations($id) {
        return Job::find($id)->specialisations;
    }

    public function delete($id)
    {
        $armor = Job::findOrFail($id);
        $armor->delete();

        return response()->json(null, 204);
    }
}

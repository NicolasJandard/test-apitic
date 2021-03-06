<?php

namespace App\Http\Controllers;

use App\Models\Specialisation;
use App\Http\Resources\Specialisation as SpecialisationResource;
use App\Http\Resources\SpecialisationCollection;
use Illuminate\Http\Request;

class SpecialisationController extends Controller
{
    public function index()
    {
        return new SpecialisationCollection(Specialisation::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'job_id' => 'regex:/^[0-9]+$/',
        ]);

        $race = Specialisation::create($request->all());

        return (new SpecialisationResource($race))
            ->response()
            ->setStatusCode(201);
    }

    public function show($id)
    {
        return new SpecialisationResource(Specialisation::findOrFail($id));
    }

    public function showJobs($id) {
        return Specialisation::find($id)->job;
    }
    public function showSkills($id) {
        return Specialisation::find($id)->skills;
    }

    public function delete($id)
    {
        $armor = Specialisation::findOrFail($id);
        $armor->delete();

        return response()->json(null, 204);
    }
}

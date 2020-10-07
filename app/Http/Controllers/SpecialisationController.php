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
            'job_id' => 'required',
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

    public function delete($id)
    {
        $armor = Specialisation::findOrFail($id);
        $armor->delete();

        return response()->json(null, 204);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Race;
use App\Http\Resources\Race as RaceResource;
use App\Http\Resources\RaceCollection;
use Illuminate\Http\Request;

class RaceController extends Controller
{
    public function index()
    {
        return new RaceCollection(Race::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255'
        ]);

        $race = Race::create($request->all());

        return (new RaceResource($race))
            ->response()
            ->setStatusCode(201);
    }

    public function show($id)
    {
        return new RaceResource(Race::findOrFail($id));
    }

    public function delete($id)
    {
        $armor = Race::findOrFail($id);
        $armor->delete();

        return response()->json(null, 204);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Http\Resources\Character as CharacterResource;
use App\Http\Resources\CharacterCollection;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index()
    {
        return new CharacterCollection(Character::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'pseudo' => 'required|max:255',
            'race_id' => 'regex:/^[0-9]+$/',
            'job_id' => 'regex:/^[0-9]+$/',
            'specialisation_id' => 'regex:/^[0-9]+$/',
            'skill_id' => 'regex:/^[0-9]+$/',
            'armor_id' => 'regex:/^[0-9]+$/',
            'health' => 'regex:/^[0-9]+$/',
            'owner' => 'required|max:255',
        ]);

        $character = Character::create($request->all());

        return (new CharacterResource($character))
            ->response()
            ->setStatusCode(201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pseudo' => 'required|max:255',
            'race_id' => 'regex:/^[0-9]+$/',
            'job_id' => 'regex:/^[0-9]+$/',
            'specialisation_id' => 'regex:/^[0-9]+$/',
            'skill_id' => 'regex:/^[0-9]+$/',
            'armor_id' => 'regex:/^[0-9]+$/',
            'health' => 'regex:/^[0-9]+$/',
            'owner' => 'required|max:255',
        ]);

        $character = Character::find($id);
        
        $character->update($request->all());

        return response()
            ->json($character, 201);
    }

    public function show($id)
    {
        return new CharacterResource(Character::findOrFail($id));
    }

    public function delete($id)
    {
        $armor = Character::findOrFail($id);
        $armor->delete();

        return response()->json(null, 204);
    }
}

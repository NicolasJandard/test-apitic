<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Http\Resources\Skill as SkillResource;
use App\Http\Resources\SkillCollection;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        return new SkillCollection(Skill::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'spe_id' => 'regex:/^[0-9]+$/',
            'type_id' => 'regex:/^[0-9]+$/',
        ]);

        $race = Skill::create($request->all());

        return (new SkillResource($race))
            ->response()
            ->setStatusCode(201);
    }

    public function show($id)
    {
        return new SkillResource(Skill::findOrFail($id));
    }

    public function delete($id)
    {
        $armor = Skill::findOrFail($id);
        $armor->delete();

        return response()->json(null, 204);
    }
}

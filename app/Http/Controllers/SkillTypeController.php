<?php

namespace App\Http\Controllers;

use App\Models\SkillType;
use App\Http\Resources\SkillType as SkillTypeResource;
use App\Http\Resources\SkillTypeCollection;
use Illuminate\Http\Request;

class SkillTypeController extends Controller
{
    public function index()
    {
        return new SkillTypeCollection(SkillType::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255'
        ]);

        $race = SkillType::create($request->all());

        return (new SkillTypeResource($race))
            ->response()
            ->setStatusCode(201);
    }

    public function show($id)
    {
        return new SkillTypeResource(SkillType::findOrFail($id));
    }

    public function delete($id)
    {
        $armor = SkillType::findOrFail($id);
        $armor->delete();

        return response()->json(null, 204);
    }
}

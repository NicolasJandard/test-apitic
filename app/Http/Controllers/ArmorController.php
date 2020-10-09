<?php

namespace App\Http\Controllers;

use App\Models\Armor;
use App\Http\Resources\Armor as ArmorResource;
use App\Http\Resources\ArmorCollection;
use Illuminate\Http\Request;

class ArmorController extends Controller
{
    public function index()
    {
        return new ArmorCollection(Armor::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255'
        ]);

        $armor = Armor::create($request->all());

        return (new ArmorResource($armor))
            ->response()
            ->setStatusCode(201);
    }

    public function show($id)
    {
        return new ArmorResource(Armor::findOrFail($id));
    }

    public function showCharacters($id) {
        return Armor::find($id)->characters;
    }

    public function delete($id)
    {
        $armor = Armor::findOrFail($id);
        $armor->delete();

        return response()->json(null, 204);
    }
}

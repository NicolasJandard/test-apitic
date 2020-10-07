<?php

namespace App\Http\Controllers;

use App\Models\Armor;
use App\Http\Resources\Armor as ArmorResource;
use App\Http\Resources\ArmorCollection;
use Illuminate\Http\Request;

class ArmorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new ArmorCollection(Armor::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Armor  $armor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new ArmorResource(Armor::findOrFail($id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Armor  $armor
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $armor = Armor::findOrFail($id);
        $armor->delete();

        return response()->json(null, 204);
    }
}

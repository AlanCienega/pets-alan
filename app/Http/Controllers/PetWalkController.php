<?php

namespace App\Http\Controllers;

use App\Models\PetWalk;
use Illuminate\Http\Request;

class PetWalkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petWalks = PetWalk::with('pet')->orderBy('pet_id')->get();
        return view('pets.walks', compact('petWalks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PetWalk $petWalk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PetWalk $petWalk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PetWalk $petWalk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PetWalk $petWalk)
    {
        //
    }
}

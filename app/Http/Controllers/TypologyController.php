<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Typology;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class TypologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = Auth::id();
        $restaurant = Restaurant::where('user_id', $user)->get();
        dd($restaurant);
        $typology = $restaurant->typologies->toArray();
        return view('admin.typologies.index', compact('typology'));
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
    public function show(Typology $typology)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Typology $typology)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Typology $typology)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Typology $typology)
    {
        //
    }
}

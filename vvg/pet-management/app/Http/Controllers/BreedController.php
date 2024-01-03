<?php

namespace App\Http\Controllers;

use App\Models\Breed;
use Illuminate\Http\Request;

class BreedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $breeds = Breed::all();
        return view('breeds.index', ['breeds' => $breeds]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('breeds.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required|min:3|max:30'
        ]);

        Breed::create($input);
        return redirect()->route('breeds.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Breed $breed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Breed $breed)
    {
        return view('breeds.edit', ['breed' => $breed]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Breed $breed)
    {
        $input = $request->validate([
            'name' => 'required|min:3|max:30'
        ]);

        $breed->update($input);
        return redirect()->route('breeds.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Breed $breed)
    {
        $breed->delete();
        return redirect()->route('breeds.index')->with('success', 'Record deleted successfully.');
    }
}

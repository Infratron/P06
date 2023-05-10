<?php

namespace App\Http\Controllers;

use App\Models\Mercatino;
use Illuminate\Http\Request;

class MercatinoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mercatini = Mercatino::all();
        return view('mercatino.index', compact('mercatini'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mercatino.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mercatino = Mercatino::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'logo' => $request->file('logo')->store('public/logos'),
        ]);
        
        return redirect(route('mercatino.index'))->with('mercatinoCreated', 'Hai inserito con successo un annuncio');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mercatino $mercatino)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mercatino $mercatino)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mercatino $mercatino)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mercatino $mercatino)
    {
        //
    }
}

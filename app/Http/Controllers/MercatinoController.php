<?php

namespace App\Http\Controllers;

use App\Models\Mercatino;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MercatinoRequest;

class MercatinoController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index' , 'show');
    }
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
    public function store(MercatinoRequest $request)
    {
        $mercatino = Mercatino::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'user_id' => Auth::user()->id
        ]);
        if($request->logo){
            $mercatino->update([
                'logo'=>$request->file('logo')->store('public/logos')
            ]);
        }
        
        return redirect(route('mercatino.index'))->with('mercatinoCreated', 'Hai inserito con successo un annuncio');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mercatino $mercatino)
    {
        return view('mercatino.show', compact('mercatino'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mercatino $mercatino)
    {
        return view('mercatino.edit', compact('mercatino'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mercatino $mercatino)
    {
            $mercatino->update([
                'name'=> $request->name,
                'price'=>$request->price,
                'description'=>$request->description,
            ]);

        if($request->logo){
            $mercatino->update([
                'logo'=>$request->file('logo')->store('public/logos')
            ]);
        }

        return redirect(route('mercatino.index'))->with('mercatinoUpdate', "Hai aggiornato correttamente l'annuncio");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mercatino $mercatino)
    {
        $mercatino->delete();

        return redirect(route('mercatino.index'))->with('mercatinoDeleted', "Hai cancellato correttamente l'annuncio");
    }
}

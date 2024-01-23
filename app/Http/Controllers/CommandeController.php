<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Produit;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        Produit::all();

        return view('commande.create', [
            'produits' => Produit::all()
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $idUser = auth()->id();
        $totalPayer = $request->input('totalPayer');


        $validated = $request->validate([
            'totalPayer' => 'required' ,
            'quantite' => 'required' ,
            'user_id'=> 'required',
            'idProduit'=> 'required'
         ]);

        //  dd($validated);
 
        Commande::create($validated);
        return redirect()->route('afficherProduit')->with('success', 'Commande effectuée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Commande $commande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commande $commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Commande $commande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commande $commande)
    {
        //
    }
}

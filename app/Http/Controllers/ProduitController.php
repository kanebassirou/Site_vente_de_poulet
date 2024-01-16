<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Produit = Produit::all();
        return view('produit.index',compact('Produit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $produit = Produit::all();
        return view('produit.create',compact('produit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validated = $request->validate([
            'nomProduit' => 'required',
            'descriptionProduit' => 'required',
            'prixProduit' => 'required',
            'poidsProduit' => 'required',
            'imageProduit' => 'required',
            'statusProduit' => 'required',
        ]);
        // dd($valided);
        Produit::create( $validated);
        return redirect()->route('produit.index')
                 ->with('success','Produit ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        //
        return view('produit.show', compact('produit'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        //
        return view('produit.edit',compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produit $produit)
    {
        //
        $validated =$request->validate([
            'nomProduit' => 'required',
            'descriptionProduit' => 'required',
            'prixProduit' => 'required',
            'poidsProduit' => 'required',
            'imageProduit' => 'required',
            'statusProduit' => 'required',
            
        ]);

        $produit->update($validated);

        return redirect()->route('produit.index')
            ->with('success', "Produit modifié avec succès !");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        //
        $produit->delete();
        
        return redirect()->route('produit.index')
        ->with('success', "ce poulet est supprimé avec succès !");
    }
}

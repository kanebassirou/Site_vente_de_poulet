<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    // public function index(){
    //     $role = Auth::user()->role;
    //     if($role == '1')
    //     {
    //         return view('admin');
    //     }
    //     if($role == '2')
    //     {
    //         return view('dashboard');
    //     }
    //     else {
    //         $Produit = Produit::all();
    //         return view('welcome',compact('Produit'));
    //     }
    // }
    public function afficherProduit(){
        $Produit = Produit::all();
        return view('welcome',compact('Produit'));    }
        
}

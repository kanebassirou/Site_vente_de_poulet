<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    //
    public function index()
    {
        $clients = User::all(); // Remplacez User par le modèle que vous utilisez pour vos clients

        return view('users.index',compact('clients'));
    }
}

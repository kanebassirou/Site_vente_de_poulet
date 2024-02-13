<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    //
    public function index()
    {
        $clients = User::all(); 
        $totalClients = $clients->count();

        return view('users.index',compact('clients','totalClients'));
    }
}

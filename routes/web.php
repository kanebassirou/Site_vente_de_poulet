<?php

use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\userController;
use App\Models\User;
use App\Models\Commande;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('detail/{produit}', [HomeController::class, 'show'])->name('details');

Route::get('/acceuil1', function () {
    return view('acceuil');
})->name('acceuil1');

Route::group(['prefix'=>'admin','middleware'=>['admin:admin']],function(){
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
    Route::get('/register', [AdminController::class, 'registerForm']);
    Route::post('/register', [AdminController::class, 'register'])->name('admin.register');

   });



Route::get('/', [HomeController::class, "afficherProduit"])->name("afficherProduit");

Route::get('/redirects',[HomeController::class,"index"]);


Route::middleware(['auth:admin', 'verified'])->group(function () {
    Route::get('/admin/dashboard', function () {
        $totalClients = User::count();
        
        // Obtenir le total des ventes du mois
        $totalVentesMois = Commande::whereMonth('created_at', Carbon::now()->month)->sum('totalPayer');
        
        // Obtenir le nombre total de commandes
        $totalCommandes = Commande::count();
        
        return view('Admin_dashboard', compact('totalClients', 'totalVentesMois', 'totalCommandes'));
    })->name('dashboard');


        Route::get('/dashboard', [HomeController::class,'acceuil'])->name('acceuil');

    Route::prefix('admin')->group(function () {
        Route::resource('produit', ProduitController::class)->names("produit");
        Route::resource('commande', CommandeController::class)->names("commande");
        Route::get('/commandes/{id}/validate', [CommandeController::class, 'validateCommande'])->name('commandes.validate');
        Route::get('/dashboard/clients', [userController::class, 'index'])->name('clients.index');



    });
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [HomeController::class,'acceuil'])->name('acceuil');
    Route::resource('valider-commande', CommandeController::class)->names("valider-commande")
    ->except('index')->except('show');
    
});  

// Route::resource('valider-commande', CommandeController::class)->names("valider-commande");


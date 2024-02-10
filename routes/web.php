<?php

use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommandeController;

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

Route::get('/acceuil1', function () {
    return view('acceuil');
})->name('acceuil1');

Route::group(['prefix'=>'admin','middleware'=>['admin:admin']],function(){
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
    Route::get('/register', [AdminController::class, 'registerForm']);
    Route::post('/register', [AdminController::class, 'register'])->name('admin.register');
;

   });



Route::get('/', [HomeController::class, "afficherProduit"])->name("afficherProduit");

Route::get('/redirects',[HomeController::class,"index"]);


Route::middleware(['auth:admin', 'verified'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('Admin_dashboard');
    })->name('dashboard');

        Route::get('/dashboard', [HomeController::class,'acceuil'])->name('acceuil');

    Route::prefix('admin')->group(function () {
        Route::resource('produit', ProduitController::class)->names("produit");
    });
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [HomeController::class,'acceuil'])->name('acceuil');
    Route::resource('valider-commande', CommandeController::class)->names("valider-commande");
    
});  

// Route::resource('valider-commande', CommandeController::class)->names("valider-commande");


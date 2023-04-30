<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FemmeController;
use App\Http\Controllers\HommeController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SoldesController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

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



Route::get('/', [AccueilController::class, 'index'])->name('accueil');

Route::get('/{slug}-{id}', [AccueilController::class, 'show']);

// View for femme

Route::get('/femme', [FemmeController::class, 'index'])->name('femme');

// View for homme

Route::get('/homme', [HommeController::class, 'index'])->name('homme');

// View for soldes

Route::get('/soldes', [SoldesController::class, 'index'])->name('soldes');

// View for produit

Route::get('/produits/{id}', [ProduitController::class, 'show'])->name('produits.show');



//Partie Admin

Route::get('/admin', [\App\Http\Controllers\AuthController::class,'forLogin'])->name('auth.login');
Route::get('/logout', [\App\Http\Controllers\AuthController::class,'forLogout'])->name('auth.logout');
Route::post ('/admin', [\App\Http\Controllers\AuthController::class,'doLogin']);
  

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');

    Route::get('/form/{id}', [ProduitController::class, 'edit'])->name('form');
    Route::put('/produits/{product}', [ProduitController::class, 'update'])->name('produits.update');

    Route::delete('/{product}', [ProduitController::class, 'destroy'])->name('dashboard.destroy');

    Route::get('/createproduct', [ProduitController::class, 'create'])->name('createproduct');
    Route::post('/', [ProduitController::class, 'store'])->name('products.store');

    //Categories

    Route::delete('/{categories}', [ProduitController::class, 'destroy'])->name('categories.destroy');

});





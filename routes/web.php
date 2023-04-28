<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\FemmeController;
use App\Http\Controllers\HommeController;
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

//plus pour la partie back = crud
// Route::prefix('/')->name('accueil')->group(function ()
// {
//     Route::get('/', [AccueilController::class, 'index'])->name('accueil');
// });

Route::get('/{slug}-{id}', [AccueilController::class, 'show']);

// View for femme

Route::get('/femme', [FemmeController::class, 'index'])->name('femme');

// View for homme

Route::get('/homme', [HommeController::class, 'index'])->name('homme');

// View for soldes

Route::get('/soldes', [SoldesController::class, 'index'])->name('soldes');


Route::get('/produits', function () {
    return view('produits');
})->name('produits');


//Partie Admin

Route::get('/admin', [\App\Http\Controllers\AuthController::class,'forLogin'])->name('auth.login');
Route::get('/logout', [\App\Http\Controllers\AuthController::class,'forLogout'])->name('auth.logout');
Route::post ('/admin', [\App\Http\Controllers\AuthController::class,'doLogin']);
  

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware(\App\Http\Middleware\Authenticate::class);
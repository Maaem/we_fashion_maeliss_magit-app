<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('accueil');
})->name('accueil');

Route::prefix('/')->name('accueil')->group(function ()
{
    Route::get('/', [AccueilController::class, 'index'])->name('accueil');
});

Route::get('/{slug}-{id}', [AccueilController::class, 'show']);

Route::get('/femme', function () {
    return view('femme');
})->name('femme');

Route::get('/homme', function () {
    return view('homme');
})->name('homme');

Route::get('/soldes', function () {
    return view('soldes');
})->name('soldes');

Route::get('/produits', function () {
    return view('produits');
})->name('produits');


//Partie Admin

Route::get('/admin', [\App\Http\Controllers\AuthController::class,'forLogin'])->name('auth.login');
Route::delete('/logout', [\App\Http\Controllers\AuthController::class,'forLogout'])->name('auth.logout');
Route::post ('/admin', [\App\Http\Controllers\AuthController::class,'doLogin']);
  

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
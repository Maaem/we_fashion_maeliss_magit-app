<?php

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

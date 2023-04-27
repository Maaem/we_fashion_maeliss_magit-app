<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index() : Paginator
    {
        return \App\Models\Product::paginate(6); 
    }

    public function show(string $slug, string $id) : RedirectResponse | Product
    {
        $product = \App\Models\Product::findOrFail($id);
        if ($product->slug !== $slug) {
            return to_route('accueil.show', ['slug' => $product->slug, 'id' => $product->id]);
        }; 
        return $product;
    }
}

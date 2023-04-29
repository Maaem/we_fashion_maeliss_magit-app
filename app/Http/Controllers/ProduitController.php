<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProduitController extends Controller
{
    public function show(string $id)
    {
        $product = Product::find($id);

        if (!$product) {
            abort(404);
        }

        return view('produits', ['product' => $product]);
    }

    public function index()
    {
        $categoryIds = Category::pluck('id');
        $products = Product::whereIn('category_id', $categoryIds)->paginate(15);

        return view('dashboard', ['products' => $products]);
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('form', ['product' => $product]);
    }

    public function update(ProductRequest $request, Product $product)
    {

        $product->update($request->validated());

        return redirect()->route('dashboard')->with('success', 'Votre produit a bien été modifié !');
    }
}

    



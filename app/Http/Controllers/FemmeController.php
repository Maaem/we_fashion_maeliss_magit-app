<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FemmeController extends Controller
{
    public function index()
{
    $category = Category::where('name', 'Femme')->first();
    $products = Product::where('category_id', $category->id)->paginate(6);
    return view('femme', ['products' => $products]);
}


}

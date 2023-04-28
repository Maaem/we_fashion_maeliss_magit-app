<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

class HommeController extends Controller
{
    public function index()
    {
        $category = Category::where('name', 'Homme')->first();
        $products = Product::where('category_id', $category->id)->paginate(6);
        return view('homme', ['products' => $products]);
    }
}

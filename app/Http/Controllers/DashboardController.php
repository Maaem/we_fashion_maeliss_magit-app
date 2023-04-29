<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $products = Product::whereIn('category_id', $category->pluck('id'))->paginate(15);
        return view('dashboard', ['products' => $products]);
    }
}


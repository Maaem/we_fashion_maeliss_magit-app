<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SoldesController extends Controller
{
    public function index()
    {
        $products = Product::where('state', 'sold')->paginate(6);
        return view('soldes', ['products' => $products]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProduitController extends Controller
{

    public function show($id)
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

    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'category_id' => 'required|integer',
        'description' => 'required|string', 
        'visibility' => 'required|string',
        'price' => 'required|stri',
        'state' => 'required|string',
        'reference' => 'required|string|max:255',
    ]);

    $product = Product::findOrFail($id);

    $product->update($validated);

    if ($request->hasFile('img')) {
        $imagePath = $request->file('img')->store('storage/images');
        $imagePath = str_replace('public/', '', $imagePath);
        $product->img = $imagePath;
        $product->save();
    }

    return redirect()->route('dashboard', $product->id);
}

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('dashboard')->with('success', 'Votre produit a bien été supprimé !');
    }


    /**
     * return le formulaire de créationcreation d'un contact
     */
    public function create()
    {

        return view('createproduct');

    }


    /**
     * Enregistre un nouveau contact dans la base de données
     */

     public function store(ProductRequest $request)
     {
         if ($request->hasFile('img')) {
             $imagePath = $request->file('img')->store('storage/images');
             $imagePath = str_replace('public/', '', $imagePath);
     
             $category_id = $request->input('category_id');
             if (!Category::where('id', $category_id)->exists()) {
                 return redirect()->back()->with('error', 'Invalid category ID.');
             }
     
             $product = new Product();
             $product->name = $request->input('name');
             $product->description = $request->input('description');
             $product->price = $request->input('price');
             $product->reference = $request->input('reference');
             $product->visibility = $request->input('visibility');
             $product->state = $request->input('state');
             $product->img = $imagePath;
             $product->category_id = $category_id;
     
             $product->save();
     
             return redirect('dashboard')->with('success', 'Product created successfully!');
         }
     
         return redirect()->back()->with('error', 'No image file was provided.');
     }





}

    



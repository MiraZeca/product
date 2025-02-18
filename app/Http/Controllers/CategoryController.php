<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        // Učitaj sve kategorije
        $categories = Category::all();
        
        // Prosledi ih u Blade prikaz
        return view('products.categories', compact('categories'));
        // return view('products.categories');
       
    }

    public function create()
{
    return view('products.categories'); 
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    Category::create([
        'name' => $request->name,
    ]);

    return redirect()->route('admin');
}

}

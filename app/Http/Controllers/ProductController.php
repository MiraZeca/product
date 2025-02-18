<?php


namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $allProducts = Product::with('category')->get();
        return view('products', compact('allProducts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.products', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'image1' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'image2' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'image3' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Inicijalizacija putanja slika
        $imagePaths = $this->handleImageUpload($request);

        // Kreiranje proizvoda
        $product = Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'image1_path' => $imagePaths['image1'] ?? null,
            'image2_path' => $imagePaths['image2'] ?? null,
            'image3_path' => $imagePaths['image3'] ?? null,
        ]);

        return redirect()->route('admin')->with('create', 'Product added successfully.');
    }


    public function update(Request $request, $id)
    {
        // Validacija
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'image1' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'image2' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'image3' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Pronalazak proizvoda
        $product = Product::findOrFail($id);

        // Obrada novih slika
        $imagePaths = $this->handleImageUpload($request, $product);

        // Ažuriranje proizvoda
        $product->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'image1_path' => $imagePaths['image1'] ?? $product->image1_path,
            'image2_path' => $imagePaths['image2'] ?? $product->image2_path,
            'image3_path' => $imagePaths['image3'] ?? $product->image3_path,
        ]);

        return redirect()->route('admin')->with('update', 'Product updated successfully.');
    }


    // Funkcija za obradu upload-a slika
    private function handleImageUpload(Request $request, Product $product = null)
    {
        $imagePaths = [];
        foreach (['image1', 'image2', 'image3'] as $imageField) {
            if ($request->hasFile($imageField)) {
                // Ako postoji stara slika, brišemo je
                if ($product && $product->{$imageField . '_path'}) {
                    Storage::disk('public')->delete($product->{$imageField . '_path'});
                }

                // Čuvamo novu sliku
                $imagePaths[$imageField] = $request->file($imageField)->store('products', 'public');
            }
        }
        return $imagePaths;
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);  // Nađite proizvod prema ID-u
        $categories = Category::all();  // Preuzimanje svih kategorija za dropdown listu

        return view('products.edit', compact('product', 'categories'));  // Prikazivanje forme sa podacima proizvoda
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Brisanje slika sa servera
        if ($product->image1_path) {
            Storage::disk('public')->delete($product->image1_path);
        }
        if ($product->image2_path) {
            Storage::disk('public')->delete($product->image2_path);
        }
        if ($product->image3_path) {
            Storage::disk('public')->delete($product->image3_path);
        }

        // Brisanje proizvoda
        $product->delete();

        return redirect()->route('admin')->with('delete', 'Product deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductAdminController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::where('delete_flag', 0)->orderBy('CATEGORIES')->get();
        return view('admin.products.create', compact('categories'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::where('delete_flag', 0)->orderBy('CATEGORIES')->get();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'specs' => 'nullable|string',
            'description' => 'required|string|max:455',
            'price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',

            'category_id' => 'required|exists:tblcategory,CATEGID',
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->slug = $request->input('specs');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        $product->sale_price = $request->input('sale_price');

        $product->CATEGID = $request->input('category_id');

        // Salvează obiectul în baza de date
        $product->save();


        return redirect()->route('admin.products.index')->with('success', 'Product created successfully');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'specs' => 'nullable|string',
            'description' => 'required|string|max:455',
            'price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',

            'category_id' => 'required|exists:tblcategory,CATEGID',
        ]);
        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
        $product->slug = $request->input('specs');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        $product->sale_price = $request->input('sale_price');

        $product->CATEGID = $request->input('category_id');

        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully');
    }
    public function deleteImage(Request $request)
    {
        $path = $request->input('path');

        // Implementarea logicii pentru ștergerea imaginii din stocarea ta

        // Exemplu simplificat de ștergere a unei imagini fizice din sistem
        if (Product::disk('public')->exists($path)) {
            Product::disk('public')->delete($path);
            return response()->json(['status' => 'success']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Imaginea nu a putut fi găsită sau ștearsă.']);
        }
    }
}
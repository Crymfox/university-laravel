<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|max:255|string',
                'details' => 'required|string',
                'category' => 'required|string',
                'point_of_sale' => 'required|string',
            ]);
            // return redirect()->route('success');
            $product = Product::create($validatedData);
            // save the product
            $product->save();
            return back()->with('success', 'Product created successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|max:255|string',
                'details' => 'required|string',
                'category' => 'required|string',
                'point_of_sale' => 'required|string',
            ]);
            $product = Product::find($id);
            $product->name = $validatedData['name'];
            $product->details = $validatedData['details'];
            $product->category = $validatedData['category'];
            $product->point_of_sale = $validatedData['point_of_sale'];
            $product->save();
            return back()->with('success', 'Product updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $product = Product::find($id);
            $product->delete();
            return back()->with('success', 'Product deleted successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Products::all();

        return view('products', ['products' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validated = $request->validate([
            'product_name'=> ['required'],
            'batch_number'=> ['required'],
            'date_exp'=> ['required'],
            'price'=> ['required'],
            'quantity'=> ['required'],
            'availability'=> ['required'],
        ]);

        Products::create($validated);
        return redirect('/products');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'product_name'=> ['required'],
            'batch_number'=> ['required'],
            'date_exp'=> ['required'],
            'price'=> ['required'],
            'quantity'=> ['required'],
            'availability'=> ['required'],
        ]);
        
        $product = Products::findOrFail($request->input('id'));
        $product->update($validated);

        return back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Products::findOrFail($id);
        $product->delete();

        $data = Products::all();

        return view('products', ['products' => $data]);
    }
}

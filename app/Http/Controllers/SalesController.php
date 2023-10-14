<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('sales')
        ->join('employees', 'sales.employees_id', '=', 'employees.employees_id')
        ->join('customers', 'sales.customer_id', '=', 'customers.customer_id')
        ->join('services', 'sales.service_id', '=', 'services.service_id')
        ->join('products', 'sales.product_id', '=', 'products.product_id')
        ->paginate(4);

        return view('sales', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sales = Sales::findOrFail($id);
        $sales->delete();

        $data = DB::table('sales')
        ->join('employees', 'sales.employees_id', '=', 'employees.employees_id')
        ->join('customers', 'sales.customer_id', '=', 'customers.customer_id')
        ->join('services', 'sales.service_id', '=', 'services.service_id')
        ->join('products', 'sales.product_id', '=', 'products.product_id')
        ->get();;

        return redirect('/sales')->with('sales', $data);
    }
}

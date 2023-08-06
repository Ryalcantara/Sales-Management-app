<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Employees;
use App\Models\Pending;
use App\Models\Products;
use App\Models\Sales;
use App\Models\Services;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('pendings')
             ->join('employees', 'pendings.employees_id', '=', 'employees.employees_id')
             ->get();

        
        return view('/pending_sales', ['pending_sales' => $data])
        ->with('customers', Customers::all())
        ->with('employees', Employees::all())
        ->with('services', Services::all())
        ->with('products', Products::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validated = $request->validate([
            'date_id'=> ['required'],
            'customer'=> ['required'],
            'employees_id'=> ['required'],
            'services'=> ['required'],
            'products'=> ['required'],
            'quantity'=> ['required'],
            'gcash'=> ['required'],
            'gift_certificate'=> ['required'],
            'gift_voucher'=> ['required'],
            'loyalty'=> ['required'],

        ]);

       
            Pending::create($validated);
        return redirect('/pending_sales');
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
        //
    }

    
    public function submit()
    {

        // $results = DB::table('pending')
        //      ->join('employees', 'pending.employees_id', '=', 'employees.employees_id')
        //      ->select('employees.*')
        //      ->get();

        $sourceData = Pending::all();
        foreach ($sourceData as $data) {
            Sales::create([
                'date_id'=> $data->date_id,
                'customer' => $data->customer, // Map columns accordingly
                'employees_id' => $data->employees_id,
                'services' => $data->services,
                'products' => $data->products,
                'quantity' => $data->quantity,
                'gcash' => $data->gcash,
                'gift_certificate' => $data->gift_certificate,
                'gift_voucher' => $data->gift_voucher,
                'loyalty' => $data->loyalty,
                'created_at' => $data->created_at
            ]);
        }
        
        Pending::truncate(); // This will delete all data from the source table
        return redirect('/sales');
    }
}

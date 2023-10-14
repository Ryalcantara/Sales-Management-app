<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Customers;
use App\Models\Employees;
use App\Models\MonthlyBudget;
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
            ->join('services', 'pendings.service_id', '=', 'services.service_id')
            ->join('products', 'pendings.product_id', '=', 'products.product_id')
            ->join('customers', 'pendings.customer_id', '=', 'customers.customer_id')
            ->get();

        $record = Pending::join('employees', 'pendings.employees_id', '=', 'employees.employees_id')
            ->join('services', 'pendings.service_id', '=', 'services.service_id')
            ->join('products', 'pendings.product_id', '=', 'products.product_id')
            ->join('customers', 'pendings.customer_id', '=', 'customers.customer_id')
            ->first();

        // Calculate total_amount by joining the tables and performing the necessary calculations
        $total_amount = Pending::join('products', 'pendings.product_id', '=', 'products.product_id')
            ->join('services', 'pendings.service_id', '=', 'services.service_id')
            ->selectRaw('SUM(products.price * pendings.quant) + SUM(services.amount) as total_amount')
            ->first();

        // Assuming $total_amount is an instance of stdClass or an array
        $totalAmountData = ['total_amount' => $total_amount->total_amount ?? 0];

        return view('/pending_sales', ['pending_sales' => $data])
            ->with('customers', Customers::all())
            ->with('employees', Employees::all())
            ->with('services', Services::all())
            ->with('products', Products::all())
            ->with($totalAmountData)
            ->with(compact('record'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validated = $request->validate([
            'date_id' => ['required'],
            'customer_id' => ['required'],
            'employees_id' => ['required'],
            'service_id' => ['required'],
            'product_id' => ['required'],
            'quant' => ['required'],
            'gcash' => ['required'],
            'gift_certificate' => ['required'],
            'gift_voucher' => ['required'],
            'loyalty' => ['required'],
        ]);



        // Find an existing record based on the specified attributes
        $pendingRecord = Pending::where('date_id', $validated['date_id'])
            ->where('customer_id', $validated['customer_id'])
            ->first();


        // If the record exists, delete it
        if ($pendingRecord) {
            $pendingRecord->delete();
        }

        Pending::create($validated);

        // Update product quantity
        $product = Products::find($validated['product_id']);

        if ($product) {
            // Subtract the quantity from the product
            $product->quantity -= $validated['quant'];
            $product->save();
        }



        // Find the first among the column, which case it will retrieve the customer's name
        $record = Pending::join('employees', 'pendings.employees_id', '=', 'employees.employees_id')
            ->join('services', 'pendings.service_id', '=', 'services.service_id')
            ->join('products', 'pendings.product_id', '=', 'products.product_id')
            ->join('customers', 'pendings.customer_id', '=', 'customers.customer_id')
            ->first();

        return redirect('/pending_sales')
            ->with(compact('record'));
    }

    public function create2(Request $request)
    {
        $validated = $request->validate([
            'date_id' => ['required'],
            'customer_id' => ['required'],
            'employees_id' => ['required'],
            'service_id' => ['required'],
            'product_id' => ['required'],
            'quant' => ['required'],
            'gcash' => ['required'],
            'gift_certificate' => ['required'],
            'gift_voucher' => ['required'],
            'loyalty' => ['required'],

        ]);

        // Update product quantity
        $product = Products::find($validated['product_id']);

        if ($product) {
            // Subtract the quantity from the product
            $product->quantity -= $validated['quant'];
            $product->save();
        }

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
    public function edit(Request $request, string $id)
    {
        //    
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     $validated = $request->validate([
    //         'id' => ['required'],
    //         'date_id' => ['required'],
    //         'customer' => ['required'],
    //         'employees_id' => ['required'],
    //         'service_id' => ['required'],
    //         'product_id' => ['required'],
    //         'quant' => ['required'],
    //         'gcash' => ['required'],
    //         'gift_certificate' => ['required'],
    //         'gift_voucher' => ['required'],
    //         'loyalty' => ['required'],
    //     ]);

    //     $pending = Pending::findOrFail($request->input('id'));
    //     $pending->update($validated);


    //     $data = DB::table('pendings')
    //         ->join('employees', 'pendings.employees_id', '=', 'employees.employees_id')
    //         ->join('services', 'pendings.service_id', '=', 'services.service_id')
    //         ->join('products', 'pendings.product_id', '=', 'products.product_id')
    //         ->get();

    //     $record = Pending::first();

    //     return view('/pending_sales', ['pending_sales' => $data])
    //         ->with('customers', Customers::all())
    //         ->with('employees', Employees::all())
    //         ->with('services', Services::all())
    //         ->with('products', Products::all())
    //         ->with(compact('record'));
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sales = Pending::findOrFail($id);

        // Update product quantity
        $product = Products::find($sales->quant);

        if ($product) {
            // Subtract the quantity from the product
            $product->quantity += $sales['quant'];
            $product->save();
        }
        $sales->delete();



        $data = DB::table('pendings')
            ->join('employees', 'pendings.employees_id', '=', 'employees.employees_id')
            ->join('services', 'pendings.service_id', '=', 'services.service_id')
            ->join('products', 'pendings.product_id', '=', 'products.product_id')
            ->get();



        $record = Pending::join('employees', 'pendings.employees_id', '=', 'employees.employees_id')
            ->join('services', 'pendings.service_id', '=', 'services.service_id')
            ->join('products', 'pendings.product_id', '=', 'products.product_id')
            ->join('customers', 'pendings.customer_id', '=', 'customers.customer_id')
            ->first();



        return redirect('/pending_sales')
            ->with(['pending_sales' => $data])
            ->with('customer_id', Customers::all())
            ->with('employees', Employees::all())
            ->with('services', Services::all())
            ->with('products', Products::all())
            ->with(compact('record'));
    }


    public function submit()
    {


              // Calculate total_amount by joining the tables and performing the necessary calculations
              $total_amount = Pending::join('products', 'pendings.product_id', '=', 'products.product_id')
              ->join('services', 'pendings.service_id', '=', 'services.service_id')
              ->selectRaw('SUM(products.price * pendings.quant) + SUM(services.amount) as total_amount')
              ->first();
  
          // Assuming $total_amount is an instance of stdClass or an array
          $totalAmountData = ['total_amount' => $total_amount->total_amount];
          $currentMonthName = date('F'); // Returns the full month name (e.g., January, February, etc.)
  
          $existingBudget = MonthlyBudget::where('month', $currentMonthName)->first();
  
  
          if ($existingBudget) {
              // Step 2: Update the existing budget
              $existingBudget->budget += $totalAmountData['total_amount'];
              $existingBudget->save();
          } else {
              // Step 3: Insert a new record
              MonthlyBudget::create([
                  'month' => $currentMonthName,
                  'budget' => $totalAmountData['total_amount'],
              ]);
          }

          
        $sourceData = Pending::all();
        foreach ($sourceData as $data) {
            Sales::create([
                'date_id' => $data->date_id,
                'customer_id' => $data->customer_id, // Map columns accordingly
                'employees_id' => $data->employees_id,
                'service_id' => $data->service_id,
                'product_id' => $data->product_id,
                'quant' => $data->quant,
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
    public function getProductQuantity(Request $request)
    {
        $productId = $request->input('product_id');



        // Check if $productId is valid
        if ($productId === null) {
            return response()->json(['error' => 'Invalid product ID'], 400); // Bad Request
        }

        $product = Products::find($productId);

        if ($product) {
            $quantity = $product->quantity;
            return response()->json(['quantity' => $quantity]);
        }

        return response()->json(['error' => 'Product not found'], 404);
    }
}

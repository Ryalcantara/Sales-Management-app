<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('payroll');
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

    public function dateRange(Request $request)
    {


        // $data = DB::table('employees')
        // ->join('sales', 'employees.employees_id', '=', 'sales.employees_id')
        // ->join('services', 'sales.service_id', '=', 'services.service_id')
        // ->join('products', 'sales.product_id', '=', 'products.product_id')
        // ->whereBetween('sales.date_id', [$request->start, $request->end])
        // ->sum('services.amount');

        // $employees = DB::table('employees')->get();

        // foreach ($employees as $employee) {
        //     $salesData = DB::table('sales')
        //         ->join('services', 'sales.service_id', '=', 'services.service_id')
        //         ->join('products', 'sales.product_id', '=', 'products.product_id')
        //         ->where('sales.employees_id', $employee->employees_id)
        //         ->whereBetween('sales.date_id', [$request->start, $request->end])
        //         ->select(
        //             DB::raw('SUM(services.amount) as services_amount'),
        //             DB::raw('SUM(products.price) as products_amount')
        //         )
        //         ->first();

        //     $employee->servicesAmount = $salesData->services_amount ?? 0;
        //     $employee->productsAmount = $salesData->products_amount ?? 0;
        // }



        $employees = DB::table('employees')->get();

        foreach ($employees as $employee) {
            $salesData = DB::table('sales')
                ->join('services', 'sales.service_id', '=', 'services.service_id')
                ->join('products', 'sales.product_id', '=', 'products.product_id')
                ->where('sales.employees_id', $employee->employees_id)
                ->whereBetween('sales.date_id', [$request->start, $request->end])
                ->select(
                    DB::raw('SUM(services.amount) as services_amount'),
                    DB::raw('SUM(products.price) as products_amount'),
                    'services.category' // Include the category column
                )
                ->groupBy('services.category') // Group by category
                ->get(); // Retrieve multiple rows

            $totalAmount = 0;

            // Calculate standardpay from time_logs
            $timeLogData = DB::table('time_logs')
                ->join('employees', 'time_logs.employee', '=', 'employees.employees_id')
                ->where('time_logs.employee', $employee->employees_id)
                ->whereBetween('date', [$request->start, $request->end])
                ->sum('rate');


            foreach ($salesData as $sale) {
                if ($sale->category === 'Hard') {
                    $totalAmount += $sale->services_amount * 0.10;
                } elseif ($sale->category === 'Light') {
                    $totalAmount += $sale->services_amount * 0.07;
                }
            }

            $employee->totalAmount = $totalAmount;
            $employee->standardPay = $timeLogData;
        }






        // return view('payroll-show', ['payrolls' => $employees]);
        dd($employees);
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
}

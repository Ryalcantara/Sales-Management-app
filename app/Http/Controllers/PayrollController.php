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

        $employees = DB::table('employees')->get();
        $totalAmountServices = 0;

        foreach ($employees as $employee) {
            if (isset($request->start) && isset($request->end)) {
                $currentDate = $request->start;
                while ($currentDate <= $request->end) {
                    $salesData = DB::table('sales')
                        ->join('services', 'sales.service_id', '=', 'services.service_id')
                        ->join('products', 'sales.product_id', '=', 'products.product_id')
                        ->where('sales.employees_id', $employee->employees_id)
                        ->where('sales.date_id', $currentDate) // Filter by current date
                        ->select(
                            DB::raw('SUM(services.amount) as services_amount'),
                            DB::raw('SUM(products.price) as products_amount'),
                            'services.category'
                        )
                        ->groupBy('services.category')
                        ->get();

                    if ($salesData->sum('services_amount') >= 1350) {
                        foreach ($salesData as $sale) {
                            if ($sale->category === 'Hard') {
                                $totalAmountServices += $sale->services_amount * 0.10;
                            } elseif ($sale->category === 'Light') {
                                $totalAmountServices += $sale->services_amount * 0.07;
                            }
                        }
                    }
                    $totalAmountServices += $salesData->sum('services_amount');


                    // Calculate standardpay from time_logs
                    $timeLogData = DB::table('time_logs')
                        ->join('employees', 'time_logs.employees_id', '=', 'employees.employees_id')
                        ->where('time_logs.employees_id', $employee->employees_id)
                        // ->where('time_logs.date_id', $currentDate) // Filter by current date
                        ->whereBetween('date_id', [$request->start, $request->end])

                        ->sum('rate');

                    $standardPay = $timeLogData * 7;

                    // Calculate totalAmount for products only if quota is reached for the day
                    $productAmount = DB::table('sales')
                        ->join('products', 'sales.product_id', '=', 'products.product_id')
                        // ->where('sales.date_id', $request->start ) // Filter by current date
                        ->whereBetween('date_id', [$request->start, $request->end])
                        ->select(
                            DB::raw('SUM(products.price) as products_amount'),
                        )
                        ->get();



                    $lateMinutes = 0;
                    $isAbsent = DB::table('time_logs')
                        ->join('employees', 'time_logs.employees_id', '=', 'employees.employees_id')
                        ->where('time_logs.employees_id', $employee->employees_id)
                        ->where('date_id', $currentDate)
                        ->count() == 0;

                    if (!$isAbsent) {
                        // Calculate total minutes worked for the day
                        $totalWorkedMinutes = DB::table('time_logs')
                            ->join('employees', 'time_logs.employees_id', '=', 'employees.employees_id')
                            ->where('time_logs.employees_id', $employee->employees_id)
                            ->where('date_id', $currentDate)
                            ->sum(DB::raw('total_hours * 60 + total_minutes'));

                        if ($totalWorkedMinutes < 420) {

                            $lateMinutes = max(0, 420 - $totalWorkedMinutes);
                        }
                    }

                    $cashAdvance = DB::table('deductions')
                        ->join('employees', 'deductions.employees_id', '=', 'employees.employees_id')
                        ->where('deductions.employees_id', $employee->employees_id)
                        ->whereBetween('date_id', [$request->start, $request->end])
                        ->sum('amount');

                    $totalAmountProducts = 0;
                    if ($productAmount->sum('products_amount') >= 8000) {
                        $totalAmountProducts += $productAmount->sum('products_amount') * 0.20;
                    }

                    // Assign the calculated values to the employee object
                    $employee->totalDeduction = $cashAdvance + ($lateMinutes + $standardPay);
                    $employee->netPay = ($cashAdvance + ($lateMinutes + $standardPay)) - ($standardPay + $totalAmountServices + $totalAmountProducts); 
                    $employee->cashAdvance = $cashAdvance;
                    $employee->lateMinutes = $lateMinutes;
                    $employee->totalAmountProducts = $totalAmountProducts;
                    $employee->totalAmountServices = $totalAmountServices;
                    $employee->standardPay = $standardPay;
                    $employee->grossPay = $standardPay + $totalAmountServices + $totalAmountProducts;

                    // Move to the next day
                    $currentDate = date('m/d/Y', strtotime('+1 day', strtotime($currentDate)));
                }
            }
        }




        return view('payroll', ['payrolls' => $employees]);


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

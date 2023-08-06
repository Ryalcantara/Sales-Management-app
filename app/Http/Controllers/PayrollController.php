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
        // $data = Sales::whereBetween('created_at', [$request->start, $request->end]);

        // $payrolls = Payroll::whereBetween('created_at', [$startDate, $endDate])
        // ->get();
        $data = DB::table('sales')
        ->join('employees', 'sales.employees_id', '=', 'employees.employees_id')
        ->whereBetween('date_id', [$request->start, $request->end])
        ->get();


        return view('/payroll-show', ['payrolls' => $data]);
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

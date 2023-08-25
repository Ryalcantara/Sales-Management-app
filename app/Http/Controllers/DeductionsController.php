<?php

namespace App\Http\Controllers;

use App\Models\Deductions;
use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeductionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('deductions')
        ->join('employees', 'deductions.employees_id', '=', 'employees.employees_id')
        ->get();

        return view('deductions', ['deductions' => $data])
        ->with('employees', Employees::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validated = $request->validate([
            'date_id'=> ['required'],
            'employees_id'=> ['required'],
            'amount'=> ['required'],
        ]);


        Deductions::create($validated);
        return redirect('/deductions');
      
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
}

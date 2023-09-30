<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Employees::all();

        return view('/employees', ['employees' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validated = $request->validate([
            'name'=> ['required'],
            'email'=> ['required'],
            'address'=> ['required'],
            'contact'=> ['required'],
            'rate'=> ['required'],
            'role'=> ['required'],
        ]);

        Employees::create($validated);
        return redirect('/employees');
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
    public function show($id)
    {
        $data = Employees::findOrFail($id);
        return view('/view_employee', ['employee' => $data]);

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
    public function update(Request $request, Employees $employee)
    {

        $employee = Employees::findOrFail($request->input('id'));
        $validated = $request->validate([
            'name'=> ['required'],
            'email'=> ['required'],
            'address'=> ['required'],
            'contact'=> ['required'],
            'rate'=> ['required'],
            'role'=> ['required'],
        ]);

        $employee->update($validated);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        // dd($request);


        $employee = Employees::findOrFail($id);
        $employee->delete();

        $data = Employees::all();

        return view('/employees', ['employees' => $data]);
    }
}

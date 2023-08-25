<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\TimeLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TimeLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('time_logs')
            ->join('employees', 'time_logs.employees_id', '=', 'employees.employees_id')
            ->get();
        return view('timeLog', ['time' => $data])
            ->with('employees', Employees::all());
    }

    public function index2()
    {
        $data = DB::table('time_logs')
            ->join('employees', 'time_logs.employees_id', '=', 'employees.employees_id')
            ->get();
        return view('timeLog', ['time' => $data])
            ->with('employees', Employees::all());
    }
    public function index3()
    {
        $data = DB::table('time_logs')
            ->join('employees', 'time_logs.employees_id', '=', 'employees.employees_id')
            ->get();
        return view('time', ['time' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validated = $request->validate([
            'date_id' => ['required'],
            'employees_id' => ['required'],
            'time_in' => ['required']
        ]);

        TimeLog::create($validated);



        return redirect('/timeRedirect')
            ->with('time', TimeLog::all())
            ->with('employees', Employees::all());
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
    public function update(Request $request)
    {
        // DB::table('time_logs')
        //     ->where('id', $request->id)
        //     ->update(['time_out' => $request->time_out]);


        $data = DB::table('time_logs')
            ->where('id', $request->id)
            ->first(); // Retrieve the data

        if ($data) {
            $timeIn = strtotime($data->time_in);
            $timeOut = strtotime($request->time_out);

            $hoursWorked = floor(($timeOut - $timeIn) / 3600); // Calculate hours worked
            $minutesWorked = round((($timeOut - $timeIn) % 3600) / 60); // Calculate remaining minutes

            DB::table('time_logs')
                ->where('id', $request->id)
                ->update([
                    'time_out' => $request->time_out,
                    'total_hours' => $hoursWorked,
                    'total_minutes' => $minutesWorked, // Update total_minutes field
                ]);

            // Optionally, you might want to refresh the $data variable with the updated data
            $data = DB::table('time_logs')
                ->join('employees', 'time_logs.employees_id', '=', 'employees.employees_id')
                ->where('id', $request->id)
                ->first();
        }

        return redirect('/timeRedirect')
            ->with('time', TimeLog::all())
            ->with('employees', Employees::all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

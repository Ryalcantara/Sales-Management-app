<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('sales')
        ->join('employees', 'sales.employees_id', '=', 'employees.employees_id')
        ->join('services', 'sales.service_id', '=', 'services.service_id')
        ->join('products', 'sales.product_id', '=', 'products.product_id')
        ->select(
            'sales.*',
            'employees.name',
            'services.service_name',
            'products.product_name',
            DB::raw('(products.price * sales.quant) as product_total'), // Calculate product total
            'services.amount as service_amount' // Assuming 'amount' is the field representing the service amount
        )
        // ->get()
        ->paginate(2);



       

        // return view('sales', compact('data'));
    
    return view('/index', compact('data'));
    
    }
}

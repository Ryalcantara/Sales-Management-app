<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\Pending_SalesController;
use App\Models\Pending_Sales;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get       get data
// Route::post      post data
// Route::put       edit data
// Route::patch     edit data but small portions (rarely used, just use put)
// Route::delete    delete data
// Route::options   control specific url
// Route::match     get matching methods in array`

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employees', [EmployeeController::class, 'index']);

// add employee
Route::post('/add-emp', [EmployeeController::class, 'create']);

// view employee
Route::get('/view_employee/{id}', [EmployeeController::class, 'show']);

// edit employee
Route::put('/view_employee/{id}', [EmployeeController::class, 'update']);



// EXPENSES
Route::get('/expenses', [ExpensesController::class, 'index']);
Route::post('/add-exp', [ExpensesController::class, 'create']);



// CUSTOMERS
Route::get('/customers', [CustomerController::class, 'index']);
// ADD CUSTOMERS
Route::post('/add-customer', [CustomerController::class, 'create']);

// EDIT CUSTOMERS
Route::put('/customers/{id}', [CustomerController::class, 'update']);


// deductions
Route::get('/deductions', function () {
    return view('deductions');
});





// backup
Route::get('/backup', function () {
    return view('backup');
});



// inventory
Route::get('/inventory', function () {
    return view('inventory');
});




Route::get('/time', function () {
    return view('time');
});


Route::get('/sales', function () {
    return view('sales');
});

Route::get('/products', function(){
    return view('products');
});



Route::get('/pending_sales', function(){
    return view('pending_sales');
});

Route::get('/payroll', function(){
    return view('payroll');
});

Route::get('/financial', function(){
    return view('financial');
});


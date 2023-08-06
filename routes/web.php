<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DeductionsController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\PendingController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TimeLogController;
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



Route::get('/index', function (){
    return view('index');
});






// EMPLOYEES
Route::get('/employees', [EmployeeController::class, 'index']);

// add employee
Route::post('/add-emp', [EmployeeController::class, 'create']);

// view employee
Route::get('/view_employee/{id}', [EmployeeController::class, 'show']);

// edit employee
Route::put('/view_employee/{id}', [EmployeeController::class, 'update']);

// delete employee
Route::delete('/employees/{id}', [EmployeeController::class, 'destroy']);



// EXPENSES
Route::get('/expenses', [ExpensesController::class, 'index']);
Route::post('/add-exp', [ExpensesController::class, 'create']);
Route::put('/expenses/{id}', [ExpensesController::class, 'update']);



// CUSTOMERS
Route::get('/customers', [CustomerController::class, 'index']);
// ADD CUSTOMERS
Route::post('/add-customer', [CustomerController::class, 'create']);
// EDIT CUSTOMERS
Route::put('/customers/{id}', [CustomerController::class, 'update']);


// deductions
Route::get('/deductions', [DeductionsController::class, 'index']);

Route::post('/deductions', [DeductionsController::class, 'create']);


// products
Route::get('/products', [ProductsController::class, 'index']);
Route::post('/products', [ProductsController::class, 'create']);
Route::put('/products/{id}', [ProductsController::class, 'update']);





// backup
Route::get('/backup', function () {
    return view('backup');
});

// SERVICES
Route::get('/services', [ServicesController::class, 'index']);
Route::post('add-services', [ServicesController::class, 'create']);


// Pending Sales
Route::get('/pending_sales', [PendingController::class, 'index']);
Route::post('/add-pending', [PendingController::class, 'create']);
Route::get('/submit', [PendingController::class, 'submit']);


Route::get('/time', [TimeLogController::class, 'index3']);

Route::get('/', [TimeLogController::class, 'index']);
Route::get('/timeRedirect', [TimeLogController::class, 'index2']);
Route::post('/timeLog', [TimeLogController::class, 'create']);



Route::get('/sales', [SalesController::class, 'index']);




Route::get('/payroll', function(){
    return view('payroll');
});

Route::get('/financial', function(){
    return view('financial');
});


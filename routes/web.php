<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeductionsController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\PayrollController;
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



Route::get('/index', [DashboardController::class, 'index']);






// EMPLOYEES
Route::get('/employees', [EmployeeController::class, 'index']);

// add employee
Route::post('/employees/add-emp', [EmployeeController::class, 'create']);

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
Route::delete('/expense/{id}', [ExpensesController::class, 'destroy']);



// CUSTOMERS
Route::get('/customers', [CustomerController::class, 'index']);
// ADD CUSTOMERS
Route::post('/add-customer', [CustomerController::class, 'create']);
// EDIT CUSTOMERS
Route::put('/customers/{id}', [CustomerController::class, 'update']);
// EDIT CUSTOMERS
Route::delete('/customers/{id}', [CustomerController::class, 'destroy']);


// deductions
Route::get('/deductions', [DeductionsController::class, 'index']);

Route::post('/deductions', [DeductionsController::class, 'create']);
Route::put('/deductions/{id}', [DeductionsController::class, 'update']);
Route::delete('/deductions/{id}', [DeductionsController::class, 'destroy']);


// products
Route::get('/products', [ProductsController::class, 'index']);
Route::post('/products', [ProductsController::class, 'create']);
Route::put('/products/{id}', [ProductsController::class, 'update']);
Route::delete('/products/{id}', [ProductsController::class, 'destroy']);





// backup
Route::get('/backup', function () {
    return view('backup');
});

// SERVICES
Route::get('/services', [ServicesController::class, 'index']);
Route::post('add-services', [ServicesController::class, 'create']);
Route::put('services/{id}', [ServicesController::class, 'update']);
Route::delete('services/{id}', [ServicesController::class, 'destroy']);


// Pending Sales
Route::get('/pending_sales', [PendingController::class, 'index']);
Route::post('/add-pending', [PendingController::class, 'create']);
Route::post('/add-pending-without-customer', [PendingController::class, 'create2']);
Route::put('/pending_sales/{id}', [PendingController::class, 'update']);
Route::delete('/pendings/{id}', [PendingController::class, 'destroy']);
Route::get('/submit', [PendingController::class, 'submit']);
// Route::post('/getProductQuantity', [PendingController::class, 'getProductQuantity']);
Route::post('/getProductQuantity', [PendingController::class, 'getProductQuantity'])->name('getProductQuantity');







// Time
Route::get('/time', [TimeLogController::class, 'index3']);
Route::get('/', [TimeLogController::class, 'index']);
Route::post('/timeCreate', [TimeLogController::class, 'create']);
Route::put('/timeLog/{id}', [TimeLogController::class, 'update']);


// sales
Route::get('/sales', [SalesController::class, 'index']);
Route::delete('/sales/{id}', [SalesController::class, 'destroy']);



// payroll
Route::get('/payroll', [PayrollController::class, 'index']);
Route::post('/payroll', [PayrollController::class, 'daterange']);

Route::get('/financial', function(){
    return view('financial');
});


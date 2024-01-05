<?php

use App\Http\Controllers\EmployeeController;
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

Route::get('/', function () {
    return view('welcome');
});

// Read Data
Route::get('/employee', [EmployeeController::class, 'index']) -> name('employee');

// Create Data
Route::get('/addemployee', [EmployeeController::class, 'addemployee']) -> name('addemployee');
Route::post('/insertdata', [EmployeeController::class, 'insertdata']) -> name('insertdata');

// Edit Data
Route::get('/getdata/{id}', [EmployeeController::class, 'getdata']) -> name('getdata');
Route::post('/updatedata/{id}', [EmployeeController::class, 'updatedata']) -> name('updatedata');

// Delete Data
Route::get('/deletedata/{id}', [EmployeeController::class, 'deletedata']) -> name('deletedata');

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
Route::resource('employee', EmployeeController::class);
Route::get('export-csv', [EmployeeController::class, 'exportCSV'])->name('export');
Route::post('import-csv', [EmployeeController::class, 'importCSV'])->name('import');
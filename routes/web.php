<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/employee',[EmployeeController::class, 'index'] )->middleware(['auth', 'verified'])->name('employee');
Route::get('/employeeCreate',[EmployeeController::class, 'create'] )->middleware(['auth', 'verified'])->name('employeeCreate');
Route::post('/employeeStore',[EmployeeController::class, 'store'] )->middleware(['auth', 'verified'])->name('employeeStore');
Route::get('/employeeEdit/{id}',[EmployeeController::class, 'edit'] )->middleware(['auth', 'verified'])->name('employeeEdit');
Route::put('/employeeUpdate/{id}',[EmployeeController::class, 'update'] )->middleware(['auth', 'verified'])->name('employeeUpdate');
Route::delete('/employeeDelete/{id}',[EmployeeController::class, 'destroy'] )->middleware(['auth', 'verified'])->name('employeeDelete');

require __DIR__.'/auth.php';

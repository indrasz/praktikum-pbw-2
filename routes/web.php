<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/user',[UserController::class, 'index'] )->middleware(['auth', 'verified'])->name('user');
Route::get('/userRegistration',[UserController::class, 'create'] )->middleware(['auth', 'verified'])->name('userRegistration');
Route::get('/userView/{user}',[UserController::class, 'show'] )->middleware(['auth', 'verified'])->name('userView');
Route::post('/userStore',[UserController::class, 'store'] )->middleware(['auth', 'verified'])->name('userStore');
Route::get('/userDatatable',[UserController::class, 'getAllUser'] )->middleware(['auth', 'verified'])->name('userDatatable');


require __DIR__.'/auth.php';

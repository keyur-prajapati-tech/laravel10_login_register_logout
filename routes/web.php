<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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

Route::get('/employees',[EmployeeController::class,'index'])->name('employees.index');

Route::get('/employees/create',[EmployeeController::class,'create'])->name('employees.create');
Route::post('/employees',[EmployeeController::class,'store'])->name('employees.store');

Route::get('/delete/{id}',[EmployeeController::class,'delete'])->name('employees.delete');

Route::get('/employees/edit/{id}',[EmployeeController::class,'edit'])->name('employees.edit');
Route::put('/employees/{id}',[EmployeeController::class,'update'])->name('employees.update');

Route::get('/searchbyname',[EmployeeController::class,'searchbyname'])->name('employees.searchbyname');

Route::get('/account/login',[LoginController::class,'loginindex'])->name('admins.login');
Route::post('/account/authenticate',[LoginController::class,'authenticate'])->name('admins.authenticate');

Route::get('/account/dashboard',[DashboardController::class,'dashboard'])->name('admins.dashboard');

Route::get('/account/register',[LoginController::class,'register'])->name('admins.register');
Route::post('/account/processregister',[LoginController::class,'processRegister'])->name('admins.processregister');

Route::get('/account/logout',[LoginController::class,'logout'])->name('admins.logout');
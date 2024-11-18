<?php

use App\Http\Controllers\EmpyeesController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ActiveEmployeesController;
use App\Http\Controllers\BranchCodeController;
use App\Http\Controllers\FlaggedEmployeesController;
use App\Http\Controllers\PersonalInformationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users',function(){
	return(View('users'));
});

Route::get('/invoices',[InvoiceController::class,'index']);
Route::get('/invoices-create',[InvoiceController::class,'create']);
Route::get('/PersonalInformation',[PersonalInformationController::class,'index']);
Route::get('/employee',[EmpyeesController::class,'index']);
Route::get('/activeEmployees',[ActiveEmployeesController::class,'index']);
Route::get('/branchCode',[BranchCodeController::class,'index']);
Route::get('/flaggedEmployees',[FlaggedEmployeesController::class,'index']);




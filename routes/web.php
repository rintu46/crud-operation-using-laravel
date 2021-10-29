<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\EmpController;

 
 

///// emp resource
Route::get('/',[EmpController::class,'index']);
Route::get('emp/{id}/delete',[EmpController::class,'destroy']);
//Route::post('emp/create',[EmpController::class,'store']);
Route::resource('emp',EmpController::class);


//Route::resource('emp','App\Http\Controllers\EmpController');

Route::get('pay/{id}/delete',[PayController::class,'destroy']);
Route::resource('pay',PayController::class);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StaffController;
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

Route::get('/',[FrontEndController::class,'index']);
Route::get('login',[FrontEndController::class,'getLogin']);

Route::post('register',[StudentController::class,'addStudent']);

Route::post('register_staff',[StaffController::class,'addStaff']);


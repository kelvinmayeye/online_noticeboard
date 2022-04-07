<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\UsersController;
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

Route::post('register',[UsersController::class,'addStudent']);

Route::post('register_staff',[USersController::class,'addStaff']);

Route::post('dashboard',[USersController::class,'login']);

Route::get('home',[UsersController::class,'home']);

Route::get('all_leaders',[UsersController::class,'getLeaders']);

Route::get('pending_leaders',[UsersController::class,'getPendingLeaders']);

Route::get('denied_leaders',[UsersController::class,'getDeniedLeaders']);

Route::get('current_students',[UsersController::class,'getCurrentStudent']);

Route::get('finished_student',[UsersController::class,'getfinishedstudent']);
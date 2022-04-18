<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\sendMailController;
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
Route::post('register',[UsersController::class,'addStudent']);
Route::post('register_staff',[USersController::class,'addStaff']);
Route::get('loginpage',[FrontEndController::class,'getLogin'])->name('login');
Route::post('dashboard',[UsersController::class,'login']);


Route::middleware("auth")->group(function(){
Route::get('home',[UsersController::class,'home']);
Route::get('all_leaders',[UsersController::class,'getLeaders']);
Route::get('pending_leaders',[UsersController::class,'getPendingLeaders']);
Route::get('denied_leaders',[UsersController::class,'getDeniedLeaders']);
Route::get('current_students',[UsersController::class,'getCurrentStudent']);
Route::get('finished_student',[UsersController::class,'getfinishedstudent']);

Route::get('add_posts',[PostController::class,'getAddPost']);
Route::post('addpost',[PostController::class,'storePost']);
Route::get('allpost/show',[PostController::class,'showPost']);

Route::post('logout',[UsersController::class,'logout'])->name('logout');
Route::post('send',[SendMailController::class,'sendNotification']);
});
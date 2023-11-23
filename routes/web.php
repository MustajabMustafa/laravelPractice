<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    //return "Hello";
   return view('about');
});

Route::get('/aptech', function () {
    return view('about_us');
});

Route::get('/stargate',[UserController::class,'index']);

Route::get('/users', [UserController::class, 'users']);

Route::get('/addNewUser',[UserController::class, 'addUser']);
Route::post('/addNewUser',[UserController::class, 'store']);

Route::get('/deleteUser/{id}',[UserController::class,'deleteUser']);

Route::get('/editUser/{id}',[UserController::class,'editUser']);
Route::post('/updateUser',[UserController::class, 'updateUser']);
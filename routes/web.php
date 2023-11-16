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
   return view('about_us');
});

Route::get('/aptech', function () {
    return view('about_us');
});

Route::get('/users', [UserController::class, 'zain']);

Route::get('/addNewUser',[UserController::class, 'addUser']);

Route::get('/deleteUser/{id}',[UserController::class,'deleteUser']);
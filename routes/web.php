<?php

use App\Http\Controllers\RouxController;
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
    return view('home');
});

Route::get('/artists',[RouxController::class,'artists']);

Route::get('/register',[RouxController::class,'register']);

Route::get('/venue',[RouxController::class,'venue']);

Route::get('/shedule',[RouxController::class,'shedule']);
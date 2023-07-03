<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StringController;

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

Route::get('/string/form',[stringcontroller::class,'form']);

Route::get('/string/result',[stringcontroller::class,'result']);

Route::get('/string/logs',[stringcontroller::class,'logs']);

Route::get('/string/queries',[stringController::class,'queries']);

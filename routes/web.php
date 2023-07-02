<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/string/form', function () {
    return view('string.form');
});

Route::get('/string/result', function () {
    $str = request()->get('str');
    $opr = request()->get('opr');
    $result = null;

     if($opr == "CountLetter")
        $result = strlen($str);
        else if($opr == "CountWord")
        $result = str_word_count($str);
        else if($opr == "StringReverse")
       $result = strrev($str);

    return view('string.result')
    ->with('result',$result)
    ->with('str',$str)
    ->with('opr',$opr);

});

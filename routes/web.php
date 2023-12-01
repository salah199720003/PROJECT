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

Route::get('/', function () {
    return view('index');
});
Route::get('/blog',function(){
    return view('blog');
});
Route::get('/class',function(){
    return view('class');
});
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/detail',function(){
    return view('detail');
});
/* ha 7tithom li bghat t7yd 7ydoha  */

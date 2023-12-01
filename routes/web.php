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
})->name('index');
Route::get('/blog',function(){
    return view('blog');
})->name('blog');
Route::get('/class',function(){
    return view('class');
})->name('class');;
Route::get('/contact',function(){
    return view('contact');
})->name('contact');;
Route::get('/about',function(){
    return view('about');
})->name('about');;
/* ha 7tithom li bghat t7yd 7ydoha  */

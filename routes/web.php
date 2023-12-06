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
Route::get('/contact',function(){
    return view('contact');
})->name('contact');
Route::get('/class',function(){
    return view('class');
})->name('class');;
Route::get('/contact',function(){
    return view('contact');
})->name('contact');;
Route::get('/about',function(){
    return view('about');
})->name('about');;


Route::post('/reservation/submit', function () {
    return 'Form submitted successfully!';
})->name('reservation.submit');


use App\Http\Controllers\AdminController;

Route::get('/admin', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
Route::get('/admin/manage-users', [AdminController::class, 'manageUsers'])->name('admin.manage-users');
Route::get('/admin/view-reservations', [AdminController::class, 'viewReservations'])->name('admin.view-reservations');

Route::get('/admin/manage-users/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit-user');
Route::post('/admin/manage-users/update/{id}', [AdminController::class, 'update'])->name('admin.update-user');
Route::post('/admin/manage-users/delete/{id}', [AdminController::class, 'destroy'])->name('admin.delete-user');

Route::get('/admin/manage-users/add', [AdminController::class, 'addUser'])->name('admin.add-user');
Route::post('/admin/manage-users/store', [AdminController::class, 'storeUser'])->name('admin.store-user');
Route::post('/admin/export-reservations', [AdminController::class, 'exportReservations'])->name('admin.export-reservations');
Route::group(['middleware' => 'admin'], function () {
});
Route::view('/admin-login', 'admin-login')->name('admin-login');

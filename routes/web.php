<?php

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
    return view('frontend.landing.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin', [App\Http\Controllers\Backend\Auth\AuthControllers::class, 'getLogin'])->name('adminlogin');
Route::post('/admin', [App\Http\Controllers\Backend\Auth\AuthControllers::class, 'postLogin']);
Route::get('/admin/logout', [App\Http\Controllers\Backend\Auth\AuthControllers::class, 'postLogout'])->name('adminlogout');

// Route::get('/')

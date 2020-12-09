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

    return view('layouts\dashboard');
});

Route::get('/pizza', function () {
    
    return view('layouts\pizza');
});
Route::get('/burger', function () {
    
    return view('layouts\burger');
});
Route::get('/login', function () {
    
    return view('layouts\login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

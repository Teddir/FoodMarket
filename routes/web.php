<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;
// use App\Http\Controllers\MenuController;

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

Route::get('/', [PagesController::class,'home']);
Route::get('/menu', [PagesController::class,'menu']);
Route::get('/pizza', [PagesController::class, 'pizza']);
Route::get('/burger', [PagesController::class,'burger']);
Route::get('/drink', [PagesController::class,'drink']);
Route::get('/about', [PagesController::class,'about']);
Route::get('/location', [PagesController::class,'location']);
Route::get('/profile', [PagesController::class,'profile']);

// Route::get('/cart', [PagesController::class,'cart']);


Route::get('/register', [AuthController::class,'register']);
Route::post('/register/check', [AuthController::class,'doRegister']);

Route::get('/login', [AuthController::class,'login']);
Route::post('/login/check', [AuthController::class,'doLogin']);
Route::get('/login/success', [AuthController::class,'successlogin']);
Route::get('/logout', [AuthController::class,'logout']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cart', [App\Http\Controllers\CartControllerController::class, 'index']);



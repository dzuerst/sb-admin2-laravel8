<?php

use App\Http\Controllers\LoginController;
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


// change default routes when logged in user go to login page in the
// app/Providers/RouteServiceProviders

// middleware('guest') means the page can be accessed without login
// middleware('auth) means the page only can be accessed if user has login

// must be add name('login') to prevent error "Route [login] not defined."
// in the login route

// home 
Route::get('/', function () {
    return view('admin.dashboard');
})->middleware('auth');

// login page (user will be redirected to home if user is logged in)
Route::get('/login', function () {
    return view('admin.login');
})->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


// Route::get('/admin', function () {
//     return view('admin.dashboard');
// });

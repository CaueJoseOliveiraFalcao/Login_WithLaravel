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
use App\Http\Controllers\Controller;


Route::get('/login', [Controller::class, 'showLoginForm'])->name('login');
Route::post('/login', [Auth\Controller::class, 'login'])->name('login.submit');
Route::get('/register', [Controller::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [Controller::class, 'register'])->name('register.submit');
<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\UserController;
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

// dashboard
Route::get("/", [dashboardController::class, 'index'])->name('dashboard');

// login
Route::get("/login", [loginController::class, 'index'])->name('login');

// register
Route::get('/register', [registerController::class, 'index'])->name('register');

// project
Route::resource('/project', projectController::class);
Route::get('/create', [projectController::class, 'create'])->name('create');

// user
Route::resource("/user", UserController::class);

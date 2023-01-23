<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlumniController;
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

Route::get('/', [AlumniController::class, 'index']);
Route::get('/', [AlumniController::class, 'index'])->name('dashboard.index');
Route::get('/register', [AlumniController::class, 'register'])->name('register-page');
Route::post('/register', [AlumniController::class, 'registerAccount'])->name('register.post');
Route::post('/login/auth', [AlumniController::class, 'auth'])->name('login.auth');
//login
Route::get('/login', [AlumniController::class, 'login'])->name('login');

Route::get('/create', [AlumniController::class, 'create'])->name('create');
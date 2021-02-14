<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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


Route::get('login', [LoginController::class,'login'])->name('login');
Route::post('login', [LoginController::class,'authenticate']);
Route::get('logout', [LoginController::class,'logout'])->name('logout');

Route::get('/', [StudentController::class, 'index'])->name('home')->middleware('auth');
Route::get('/edit/{id}', [StudentController::class, 'edit'])->middleware('auth');
Route::get('/show/{id}', [StudentController::class, 'show'])->middleware('auth');
Route::get('/create', [StudentController::class, 'create'])->middleware('auth');
Route::post('/store', [StudentController::class, 'store'])->middleware('auth');
Route::post('/update/{id}', [StudentController::class, 'update'])->middleware('auth');
Route::get('/delete/{id}', [StudentController::class, 'destroy'])->middleware('auth');
Route::get('/classes/{class}', [StudentController::class, 'indexClass'])->middleware('auth');

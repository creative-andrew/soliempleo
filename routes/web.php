<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/jobs/create', [App\Http\Controllers\JobController::class, 'create'])->name('jobs-create')->middleware('auth');
Route::post('/jobs/store', [App\Http\Controllers\JobController::class, 'store'])->name('jobs-store')->middleware('auth');
Route::get('/jobs/{job}/edit', [App\Http\Controllers\JobController::class, 'edit'])->name('jobs-edit')->middleware('auth');
Route::put('/jobs/{job}', [App\Http\Controllers\JobController::class, 'update'])->name('jobs-update')->middleware('auth');
Route::delete('/jobs/{job}', [App\Http\Controllers\JobController::class, 'delete'])->name('jobs-delete')->middleware('auth');
Route::get('/jobs/{job}', [App\Http\Controllers\JobController::class, 'show'])->name('jobs-show');

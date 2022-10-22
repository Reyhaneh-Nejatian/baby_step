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


Route::get('/', [\App\Http\Controllers\InformationController::class, 'index']);

Route::get('/information', [\App\Http\Controllers\InformationController::class, 'show'])->name('information');
Route::get('/test', [\App\Http\Controllers\InformationController::class, 'test'])->name('test');
Route::post('/information', [\App\Http\Controllers\InformationController::class, 'store'])->name('information.store');
Route::post('/test', [\App\Http\Controllers\InformationController::class, 'testCreate'])->name('test.create');

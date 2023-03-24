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


Route::get('/', [App\Http\Controllers\Controller::class,'index']);
Route::post('/save', [App\Http\Controllers\Controller::class,'savePhone'])->name('save');
Route::post('/saveSe', [App\Http\Controllers\Controller::class,'save_inf'])->name('saveSe');
Route::post('/saveth', [App\Http\Controllers\Controller::class,'save_th'])->name('saveth');
Route::get('/conf', [App\Http\Controllers\Controller::class,'conf'])->name('conf');

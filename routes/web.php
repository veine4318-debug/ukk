<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login1', [LoginController::class,'login']);
Route::get('/', [AdminController::class,'index']);
Route::post('/delete/{id}', [AdminController::class,'delete']);
Route::get('/model', function () {
    return view('templates.model');
});
Route::get('/tambah', [AdminController::class,'tambah']);
Route::post('/tambahh',[AdminController::class,'tambahh']);
Route::get('/temp/{id}', [AdminController::class,'template']);


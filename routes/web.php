<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');

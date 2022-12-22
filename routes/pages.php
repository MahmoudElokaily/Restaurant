<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\pages\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('' , [HomeController::class , 'index'])->name('home');

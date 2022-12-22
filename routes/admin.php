<?php

use App\Http\Controllers\admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('add-brand' , [AdminController::class , 'addBrand'])->name('admin.add-brand');
Route::post('store-brand' , [AdminController::class , 'storeBrand'])->name('admin.store-brand');

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;

Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');
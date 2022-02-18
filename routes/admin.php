<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\HomeSliderController;
use App\Http\Controllers\Admin\SongController;

Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');
Route::resource('homesliders', HomeSliderController::class)->names('admin.homesliders');
Route::resource('songs', SongController::class)->names('admin.songs');
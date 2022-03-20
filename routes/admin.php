<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\HomeSliderController;
use App\Http\Controllers\Admin\PlaylistController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\SongController;
use App\Http\Controllers\Admin\ArtistController;

Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('homesliders', HomeSliderController::class)->names('admin.homesliders');

Route::resource('playlists', PlaylistController::class)->names('admin.playlists');

Route::get('genres/list/{genre}', [GenreController::class, 'list'])->name('admin.genres.list');
Route::get('genres/makeone/{genre}', [GenreController::class, 'makeone'])->name('admin.genres.makeone');
Route::post('genres/store/{genre}', [GenreController::class, 'store'])->name('admin.genres.store');
Route::get('genres/{genre}/edit', [GenreController::class, 'edit'])->name('admin.genres.edit');
Route::put('genres/update/{genre}', [GenreController::class, 'update'])->name('admin.genres.update');
Route::delete('genres/destroy/{genre}', [GenreController::class, 'destroy'])->name('admin.genres.destroy');
// Route::get('genres/makeone/{genre}', [GenreController::class, 'makeone']);
// Route::resource('genres', GenreController::class)->names('admin.genres');

Route::resource('songs', SongController::class)->names('admin.songs');

Route::resource('artists', ArtistController::class)->names('admin.artists');

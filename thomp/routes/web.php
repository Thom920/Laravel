<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\FormController;

Route::get('/songs', [SongController::class, 'show'])->name('songs');

Route::get('/', function () {
    // return view('welcome');
    dd("Thom");
});

Route::get("/home", [
    HomeController::class, 'show'
])->name('home');

Route::get("/library", [
    LibraryController::class, 'show'
])->name('library');

Route::get("/songs", [
    SongController::class, 'show'
])->name('songs');

Route::get("/form", [
    FormController::class, 'show'
])->name('form');

Route::post('/form', 
    [SongController::class, 'store'
])->name('form.submit');

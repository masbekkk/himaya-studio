<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('landing');

Route::get('book-now', function () {
    return view('book-now');
    // return view('welcome');
})->name('book-now');

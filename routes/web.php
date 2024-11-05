<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('landing');

Route::get('book-now', function () {
    return view('book-now');
    // return view('welcome');
})->name('book-now');

Route::get('book-detail/{slug}', function ($slug) {
    return view('book-details.book-detail-self-photo');
    // return view('welcome');
})->name('book-detail');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
    // return view('welcome');
});

Route::get('book-now', function () {
    return view('book-now');
    // return view('welcome');
});

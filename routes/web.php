<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('landing');

Route::get('book-now', function () {
    return view('book-now');
    // return view('welcome');
})->name('book-now');

Route::get('checkout', function () {
    return view('checkout');
    // return view('welcome');
})->name('checkout');

Route::get('book-detail/{slug}', function ($slug) {
    
    switch ($slug) {
        case 'self-photo':
            return view('book-details.book-detail-self-photo');
        
        case 'meeting-room':
            return view('book-details.book-detail-meeting-room');
        
        case 'private-cinema':
            return view('book-details.book-detail-private-cinema');
        
        // Add more cases as needed
        default:
            abort(404); // Return a 404 error if the slug doesn't match any case
    }
    // return view('welcome');
})->name('book-detail');

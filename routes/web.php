<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\VoucherController;
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

Route::match(['get', 'post'], 'book-checkout', [BookingController::class, 'to_checkout'])->name('book.checkout');
Route::post('book-store', [BookingController::class, 'store'])->name('user.book.store');
Route::resource('booking', BookingController::class)->middleware('auth');
Route::resource('voucher', VoucherController::class)->middleware('auth');

Route::post('open-modal', [BookingController::class, 'open_modal'])->name('book.open_modal');
Route::post('check-voucher', [VoucherController::class, 'checkVoucher'])->name('book.check-voucher');

require __DIR__ . '/auth.php';

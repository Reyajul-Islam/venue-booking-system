<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\IndexController;
use App\Http\Controllers\Website\VenueDetailsController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/venue-details/{venuename}', [VenueDetailsController::class, 'venueDetails'])->name('venueDetails');

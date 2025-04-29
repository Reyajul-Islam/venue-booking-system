<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\IndexController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index']);
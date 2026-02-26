<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/', [FrontendController::class, 'home']);
Route::get('/contact', [FrontendController::class, 'contact']);
Route::get('/about', [FrontendController::class, 'about']);

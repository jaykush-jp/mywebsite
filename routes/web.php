<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/datails', function () {
    return view('frontend.project-datails');
});

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/contact', [FrontendController::class, 'contact']);
Route::get('/about', [FrontendController::class, 'about']);
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
Route::get('/thank-you', [FrontendController::class, 'thank'])->name('thankyou');

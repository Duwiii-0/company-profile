<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/aboutus', function () {
    return view('pages.aboutus');
})->name('aboutus');

Route::get('/portfolio', function () {
    return '<h1>Portfolio Page - Coming Soon</h1>';
})->name('portfolio');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

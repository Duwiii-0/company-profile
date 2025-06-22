<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('pages.home');
})->name('home');;

Route::get('/aboutus', function () {
    return view('pages.aboutus');
})->name('aboutus');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'home'])->name('home');

Route::get('/services', [PortfolioController::class, 'services'])->name('services');

Route::get('/about', [PortfolioController::class, 'about'])->name('about');

Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');

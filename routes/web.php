<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/portfolio', [PortfolioController::class, 'index'])
    ->name('portfolio');

Route::get('/blog', [BlogController::class, 'index'])
    ->name('blog');

Route::get('/blog/{slug}', [BlogController::class, 'show'])
    ->name('blog.show');    
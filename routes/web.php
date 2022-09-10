<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PhoneController,
    ScraperController,
};


Route::get('/', [ScraperController::class, 'scraper'])->name('index');

<?php

use App\Http\Controllers\ShopController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingController;
use App\Http\Controllers\DonutController;

Route::get('/', [LandingController::class, 'homePage'])->name('landing.home');

Route::get('/contact', [LandingController::class, 'contactPage'])->name('landing.contact');

Route::post('/contact', [LandingController::class, 'contactForm'])->name('landing.form');

Route::get('/donuts', [DonutController::class, 'all'])->name('landing.donuts');

Route::get('/shops', [ShopController::class, 'all'])->name('shops');

Route::get('/suppliers', [SupplierController::class, 'all'])->name('suppliers');

Route::get('/donut/{id}', [DonutController::class, 'get'])->name('landing.donut');

Route::get('/shop/{id}', [ShopController::class, 'get'])->name('shop');

Route::get('/supplier/{id}', [SupplierController::class, 'get'])->name('supplier');


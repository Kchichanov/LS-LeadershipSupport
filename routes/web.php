<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CreditController;
use App\Http\Controllers\PaymentController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/credit', [CreditController::class, 'index'])->name('credits.index');
Route::post('/credit', [CreditController::class, 'store'])->name('credit.store');

Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
Route::post('/payment', [PaymentController::class, 'store'])->name('payment.store');

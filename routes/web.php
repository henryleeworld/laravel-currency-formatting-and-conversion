<?php

use App\Http\Controllers\CurrencyController;
use Illuminate\Support\Facades\Route;

Route::get('currency', [CurrencyController::class, 'index']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// API rotası
Route::apiResource('products', ProductController::class);
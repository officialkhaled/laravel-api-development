<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;

//Route::get('/categories', [CategoryController::class, 'index']);
//Route::post('/categories/store', [CategoryController::class, 'store']);

Route::apiResource('/categories', CategoryController::class);

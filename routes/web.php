<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('categories', CategoryController::class);

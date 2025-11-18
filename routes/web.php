<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;

Route::get('/', function () {
    return 'Home';
});

Route::get('/info', [InfoController::class, 'info']);


Route::get('/dashboard', [InfoController::class, 'dashboard']);

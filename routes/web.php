<?php

use App\Http\Controllers\ComunaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/comunas', [ComunaController::class, 'index']);

<?php

use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RegistroController::class, 'index']);

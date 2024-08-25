<?php

use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RegistroController::class, 'index']);
Route::post('/criar', [RegistroController::class, 'create'])->name('criar.nome');

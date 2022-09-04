<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

Route::get('/palavra', [AdminController::class, 'dia']);

    Route::get('/hntamericanas', [AdminController::class, 'register']);
    Route::post('/hntamericanas', [AdminController::class, 'registerAction']);
    Route::get('/sigilo', [AdminController::class, 'sigilo']);
    Route::get('/sucesso', [AdminController::class, 'sucesso']);
    Route::get('/sigilo/{id}', [AdminController::class, 'sigiloId']);
    


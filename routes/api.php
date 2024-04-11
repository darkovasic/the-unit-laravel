<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ColorController;
 
Route::get('/colors', [ColorController::class, 'index']);
Route::post('/colors', [ColorController::class, 'store']);
Route::delete('/colors/{id}', [ColorController::class, 'destroy']);

<?php

use Illuminate\Support\Facades\Route;
 
Route::get('colors', [\App\Http\Controllers\Api\ColorController::class, 'index']); 

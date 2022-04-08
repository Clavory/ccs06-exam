<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('start', [StudentController::class, 'start']);
Route::post('enter-attempts', [StudentController::class, 'enterAttempts']);
Route::post('compute-power', [StudentController::class, 'computePower']);

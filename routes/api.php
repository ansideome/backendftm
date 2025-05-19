<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\UplinkDataController;
use Illuminate\Support\Facades\Route;

Route::apiResource('data', DataController::class);
Route::apiResource('uplinkdata', UplinkDataController::class);

Route::delete('data', [DataController::class, 'deleteDatabyQuery']);

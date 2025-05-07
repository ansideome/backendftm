<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

Route::apiResource('data', DataController::class);

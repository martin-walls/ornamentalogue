<?php

use App\Http\Controllers\OrnamentController;
use App\Http\Controllers\TreeController;
use Illuminate\Support\Facades\Route;

Route::get('/tree/{id}', [TreeController::class, 'show']);

Route::get('/ornament/{id}', [OrnamentController::class, 'show']);

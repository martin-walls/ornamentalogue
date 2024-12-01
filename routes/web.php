<?php

use App\Http\Controllers\OrnamentController;
use App\Http\Controllers\OrnamentListController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OrnamentListController::class, 'show']);

Route::get('/ornament/{id}', [OrnamentController::class, 'show']);

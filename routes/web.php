<?php

use App\Http\Controllers\OrnamentListController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OrnamentListController::class, 'show']);

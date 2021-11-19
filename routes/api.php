<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

Route::apiResource('/v1/shops', ShopController::class)->only([
    'index', 'show'
]);
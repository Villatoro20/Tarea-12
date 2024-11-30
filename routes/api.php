<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieOrSeriesController;
use App\Http\Controllers\CharacterController;

Route::apiResource('movies-or-series', MovieOrSeriesController::class);
Route::apiResource('characters', CharacterController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

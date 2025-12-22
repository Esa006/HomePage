<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/user-profile', function (Request $request) {
    return $request->user(); // returns authenticated user
});

Route::middleware('auth:sanctum')->get('/user-profile', function (Request $request) {
    return $request->user();
});
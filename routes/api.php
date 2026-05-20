<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Series;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/series', function () {
    return \App\Models\Series::all();
});
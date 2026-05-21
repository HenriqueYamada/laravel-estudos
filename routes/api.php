<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// Importando o Controller da API com um apelido para evitar conflito
use App\Http\Controllers\Api\SeriesController as ApiSeriesController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// A rota deve terminar com ponto e vírgula ";"
Route::get('/series', [ApiSeriesController::class, 'index']);
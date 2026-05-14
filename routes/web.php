<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Autenticador;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\SeasonsController;
use App\Http\Controllers\EpisodesController;


// 1. Rota Inicial
Route::get('/', function () {
    return view('welcome');
});

// 2. Redirecionamento da Dashboard para Séries
Route::get('/dashboard', function () {
    return redirect()->route('series.index');
})->middleware(['auth'])->name('dashboard');

// 3. Rotas de Perfil (Obrigatórias para o menu do Breeze não dar erro)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 4. IMPORTANTE: Rotas de Autenticação (Login e Registro)
// É esta linha abaixo que cria as páginas de Registro e Login!
require __DIR__ . '/auth.php';

// 5. Suas rotas do curso protegidas pelo seu Middleware
Route::middleware([Autenticador::class])->group(function () {
    Route::resource('/series', SeriesController::class)->except(['show']);
    Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])->name('seasons.index');
    Route::get('/seasons/{season}/episodes', [EpisodesController::class, 'index'])->name('episodes.index');
    Route::post('/seasons/{season}/episodes', [EpisodesController::class, 'update'])->name('episodes.update');
});
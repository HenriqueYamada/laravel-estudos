<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/series');
});

/*Route::controller(SeriesController::class)->group(function () { => Forma de simplificar as routes, para que nã precisemos escrever sempre SeriesController::class em cada rota
    Route::get('/series', 'index')->name('series.index');
    Route::get('/series/criar', 'create')->name('series.create');
    Route::post('/series/salvar', 'store')->name('series.store');
});*/

Route::resource('/series', SeriesController::class)
    ->except(['show']);

Route::post('/series/destroy/{serie}', [SeriesController::class, 'destroy'])
    ->name('series.destroy');

// -> As mesmas rotas podem ser feitas a partir desta linha de codigo
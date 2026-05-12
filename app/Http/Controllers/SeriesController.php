<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Serie;

use Illuminate\Http\Request;

class SeriesController extends Controller
{

    public function index() {
        //return redirect(to: 'https://google.com'); //ao colocar na url /series, a página será redirecionada para o site da google

        $series = Serie::query()->orderBy('nome')->get();

        return view('series.index', compact('series'));  // função do Laravel que nos permite ir à pasta view e retornar como reposta uma string, que está no arquivo listar-series.php, tendo como segundo parâmetro 'series' que tem o valor (=>) o array $series
    }       

    public function create() {
        return view('/series.create');
    }

    public function store(Request $request) {
        Serie::create($request->all()); //aqui será feito um mass assignment, onde ele pega todos os campos automaticamente e enviar para '/series', para que não seja preciso digitar tudo manualmente

        return to_route('series.index');
    }
}
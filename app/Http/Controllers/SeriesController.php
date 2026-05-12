<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
<<<<<<< Updated upstream
    public function index(Request $request)
    {
        $series = Serie::all();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('series.index')->with('series', $series)
            ->with('mensagemSucesso', $mensagemSucesso);
=======
    public function index() {
        //return redirect(to: 'https://google.com'); //ao colocar na url /series, a página será redirecionada para o site da google

        $series = Serie::query()->orderBy('nome')->get();

        return view('series.index', compact('series'));  // função do Laravel que nos permite ir à pasta view e retornar como reposta uma string, que está no arquivo listar-series.php, tendo como segundo parâmetro 'series' que tem o valor (=>) o array $series
    }       

    public function create() {
        return view('/series.create');
>>>>>>> Stashed changes
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        for ($i = 1; $i < $request->seasonQty; $i++) {
            $serie->seasons()->create([
                'number' => $i,
            ]);

            for ($j=  1; $j < $request->episodesPerSeason; $j++) { 
               $serie->seasons()->create([
                    'number' => $j,
                ]);
            }
        }

        $serie = Serie::create($request->all());

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$serie->nome}' adicionada com sucesso");
    }

    public function destroy(Serie $series)
    {
        $series->delete();

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->nome}' removida com sucesso");
    }

    public function edit(Serie $series)
    {
        return view('series.edit')->with('serie', $series);
    }

    public function update(Serie $series, SeriesFormRequest $request)
    {
        $series->fill($request->all());
        $series->save();

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->nome}' atualizada com sucesso");
    }
}

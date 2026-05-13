<x-layout title="Episódios da Temporada {{ $season->number }}">
    <form method="post">
        @csrf

        <ul class="list-group">
            @foreach ($episodes as $episode)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    
                    <!-- CORRIGIDO: Removido o link circular para a mesma página -->
                    <span>
                        Episódio {{ $episode->number }}
                    </span>

                    <input type="checkbox" name="episodes[]" value="{{ $episode->id }}">
                </li>
            @endforeach
        </ul>

        
        <button class="btn btn-primary mt-2 mt-2">Salvar</button>
    </form>
</x-layout>
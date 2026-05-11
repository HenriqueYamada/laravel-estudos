{{-- O Blade facilita os nosos códigos na view, deixando-os simples de entender --}}

<x-layout title="Nova Série">
    <a href="/series/criar" class="btn btn-dark mb-2">Adicionar nova série</a>

    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item">{{ $serie }}</li>
        @endforeach
    </ul>
</x-layout>

<!--o x-layout tag html personalizada para criar componentes-->
<!--O que estiver dentro de x-, quer dizer que um componente está sendo chamado-->
{{-- O Blade facilita os nosos códigos na view, deixando-os simples de entender --}}

<x-layout title="Séries">
    <a href="/series/criar">Adicionar nova série</a>

    <ul>
        @foreach ($series as $serie)
        <li>{{ $serie }}</li>
        @endforeach
    </ul>
</x-layout>

<!--o x-layout tag html personalizada para criar componentes-->
<!--O que estiver dentro de x-, quer dizer que um componente está sendo chamado-->
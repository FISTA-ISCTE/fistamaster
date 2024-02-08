<x-app-layout>

    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:1rem;font-size:1.5rem;">
            {{ __('👋 Olá, ') }}<span style="font-size:1.8rem;">{{ Auth::user()->name }}</span>
        </h1>
    </x-slot>
    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Empresa</th>
                                        <th>Titulo</th>
                                        <th>Descrição</th>
                                        <th>Apresentação</th>
                                        <th>Dia</th>
                                        <th>Hora de inicio</th>
                                        <th>Hora de Fim</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($itspeedtalks as $itspeedtalk)
                                        <tr>
                                            <td>-></td>
                                            <td>{{ $itspeedtalk->empresa->nome_empresa }}</td>
                                            <td>{{ $itspeedtalk->titulo }}</td>
                                            <td>{{ $itspeedtalk->descricao }}</td>
                                            <td>
                                                @if ( $itspeedtalk->ppt)
                                                    <a href='https://fista.iscte-iul.pt/storage/{{ $itspeedtalk->ppt }}'>Ver Apresentação</a>
                                                @else
                                                    Ainda sem apresentação!
                                                @endif
                                            </td>
                                            <td>{{ $itspeedtalk->dia }}</td>
                                            <td>{{ $itspeedtalk->hora_inicio }}</td>
                                            <td>{{ $itspeedtalk->hora_fim }}</td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

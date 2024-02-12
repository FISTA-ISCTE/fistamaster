<x-app-layout>

    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:1rem;font-size:1.5rem;">
            {{ __('Logística') }}
        </h1>
    </x-slot>
    <style>
        .emp-profile {
            padding: 3%;
            border-radius: 0.5rem;
            background: #fff;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container emp-profile">
                    <form id="companyProfile" method="post" action="{{ route('empresa.logistica.guardar') }}">
                        @csrf

                        @if (isset($empresa->dia1))
                            <h1 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:1.5rem;">
                                {{ __('Dia 28') }}
                            </h1>
                            <div class="single-form">
                                <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:1.2rem;">
                                    São disponibilizadas 2 cadeiras, necessita de mais?</h2>
                                <div class="row" style="margin:0">
                                    <div class="form-check form-check-inline">
                                        @if (isset($logistica->s_n_cadeiras_dia1) && $logistica->s_n_cadeiras_dia1 === 1)
                                            <input class="form-check-input" type="radio" name="opcaoCadeirasDia1"
                                                id="opcaoCadeirasDia1Sim" value="1" checked>
                                        @else
                                            <input class="form-check-input" type="radio" name="opcaoCadeirasDia1"
                                                id="opcaoCadeirasDia1Sim" value="1">
                                        @endif
                                        <label class="form-check-label" for="opcaoCadeirasDia1Sim">Sim</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        @if (isset($logistica->s_n_cadeiras_dia1) && $logistica->s_n_cadeiras_dia1 === 0)
                                            <input class="form-check-input" type="radio" name="opcaoCadeirasDia1"
                                                id="opcaoCadeirasDia1Nao" value="0" checked>
                                        @else
                                            <input class="form-check-input" type="radio" name="opcaoCadeirasDia1"
                                                id="opcaoCadeirasDia1Nao" value="0">
                                        @endif
                                        <label class="form-check-label" for="opcaoCadeirasDia1Nao">Não</label>
                                    </div>
                                    <input style="width:40.5%;" type="text" name="cadeiras_dia1"
                                        id="cadeiras_dia1" autocomplete="cadeiras_dia1" autofocus
                                        placeholder="(Se sim) Número de Cadeiras"
                                        value="@if (isset($logistica->cadeiras_dia1)) {{ $logistica->cadeiras_dia1 }} @endif">
                                </div>
                            </div>

                            <div class="single-form" style="margin-top:2%">
                                <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:1.2rem;">
                                    Necessita de mesa no stand? </h2>
                                <div class="row" style="margin:0">
                                    <div class="form-check form-check-inline">
                                        @if (isset($logistica->mesa_stand_dia1) && $logistica->mesa_stand_dia1 === 'mesa')
                                            <input class="form-check-input" type="radio" name="opcaoMesaStandDia1"
                                                id="opcaoMesaStandDia1Mesa" value="mesa" checked>
                                        @else
                                            <input class="form-check-input" type="radio" name="opcaoMesaStandDia1"
                                                id="opcaoMesaStandDia1Mesa" value="mesa">
                                        @endif
                                        <label class="form-check-label" for="opcaoMesaStandDia1Mesa">Sim</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        @if (isset($logistica->mesa_stand_dia1) && $logistica->mesa_stand_dia1 === 'stand')
                                            <input class="form-check-input" type="radio" name="opcaoMesaStandDia1"
                                                id="opcaoMesaStandDia1Stand" value="stand" checked>
                                        @else
                                            <input class="form-check-input" type="radio" name="opcaoMesaStandDia1"
                                                id="opcaoMesaStandDia1Stand" value="stand">
                                        @endif
                                        <label class="form-check-label" for="opcaoMesaStandDia1Stand">Não</label>
                                    </div>
                                    <input style="width:40.5%;" type="number" name="n_pessoas_dia1" id="n_pessoas_dia1"
                                        autocomplete="n_pessoas_dia1" autofocus
                                        placeholder="Numero de pessoas presentes no stand/mesa?"
                                        value="@if (isset($logistica->n_pessoas_dia1)) {{ $logistica->n_pessoas_dia1 }} @endif">


                                </div>
                            </div>
                            <br>
                            <hr>
                            <br>
                            <div class="row" style="margin-top:1.2rem;">
                                <div class="col-md-6">
                                    <label>Montagem</label>
                                    <select class="form-select" name="montagem_dia1">
                                        <option value="" disabled selected>Selecione uma opção </option>
                                        @foreach ($slot_montagem1 as $slot_montagem11)
                                            @if (isset($logistica->montagem_id8))
                                                <option selected value="{{ $slot_montagem11->id }}">
                                                    {{ $slot_montagem11->slot }}</option>
                                            @else
                                                <option value="{{ $slot_montagem11->id }}">
                                                    {{ $slot_montagem11->slot }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Desmontagem</label>
                                    <select class="form-select" name="desmontagem_dia1">
                                        <option value="" disabled selected>Selecione uma opção </option>
                                        @foreach ($slot_desmontagem1 as $slot_desmontagem11)
                                            @if (isset($logistica->desmontagem_id8))
                                                <option selected value="{{ $slot_desmontagem11->id }}">
                                                    {{ $slot_desmontagem11->slot }}</option>
                                            @else
                                                <option value="{{ $slot_desmontagem11->id }}">
                                                    {{ $slot_desmontagem11->slot }}</option>
                                            @endif
                                        @endforeach
                                        <!-- Adicione mais opções aqui -->
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                        style="font-size:0.8rem;">Nome e Matricula</h2>
                                    <input style="width:50%;" type="text" name="info_montagem_1"
                                        id="info_montagem_1" autocomplete="info_montagem_1" autofocus
                                        placeholder="Ex:Nome condutor;Matricula"
                                        value="@if (isset($logistica->info_montagem_1)) {{ $logistica->info_montagem_1 }} @endif">
                                </div>
                                <div class="col-md-6">
                                    <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                        style="font-size:0.8rem;">Nome e Matricula</h2>
                                    <input style="width:50%;" type="text" name="info_desmontagem_1"
                                        id="info_desmontagem_1" autocomplete="info_desmontagem_1" autofocus
                                        placeholder="Ex:Nome condutor;Matricula"
                                        value="@if (isset($logistica->info_desmontagem_1)) {{ $logistica->info_desmontagem_1 }} @endif">
                                </div>
                            </div>
                            <p><b><span style="color:red">*Nota:</span></b> Se for um prestador de serviço nas
                                montagens e desmontagens é necessário inserir o nome e o numero da matrícula da empresa
                                responsável
                            </p>
                            <br>
                            <hr>
                            <br>
                            <div class="row">
                                <div class="col-md-5">
                                    <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                        style="font-size:1.2rem;">Estacionamento</h2>
                                    <p><b><span style="color:red">*Nota:</span></b> Direito apenas a um estacionamento
                                    </p>
                                    <input type="text" name="info_estacionamento_1" id="info_estacionamento_1"
                                        autocomplete="info_estacionamento_1" autofocus
                                        placeholder="Ex:Nome condutor;Matricula"
                                        value="@if (isset($logistica->info_estacionamento_1)) {{ $logistica->info_estacionamento_1 }} @endif">
                                </div>
                            </div>
                            <br>
                            <hr>
                            <br>
                            <div class="row">
                                <div class="col-md-5">
                                    <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                        style="font-size:1.2rem;">Slots Almoços</h2>
                                    <!--<p><b><span style="color:red">*Nota:</span></b> -->
                                    </p>

                                    @if (!isset($logistica->almocos_dia1))
                                        <select class="form-select" name="almocos_dia1">
                                            <option value="" disabled selected>Selecione uma opção</option>

                                            <option value="12h-13h" @if ($contagemAlmocos12h_dia1 > 25) disabled @endif>
                                                12h00 - 13h00
                                            </option>
                                            <option value="13h-14h" @if ($contagemAlmocos13h_dia1 > 25) disabled @endif>
                                                13h00 - 14h00
                                            </option>
                                        </select>
                                    @else
                                        <select class="form-select" style="display: none;" name="almocos_dia1">
                                            <option value="{{ $logistica->almocos_dia1 }}">
                                            </option>
                                            <!-- Adicione mais opções aqui -->
                                        </select>
                                        <p>Almoços das {{ $logistica->almocos_dia1 }}</p>
                                    @endif
                                </div>
                            </div>

                        @endif

                        @if (isset($empresa->dia2))
                            <h1 class="font-semibold text-xl text-gray-800 leading-tight"
                                style="font-size:1.5rem;@if (isset($empresa->dia1) && isset($empresa->dia2)) margin-top:2% @endif">
                                {{ __('Dia 29') }}
                            </h1>
                            <div class="single-form">
                                <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                    style="font-size:1.2rem;">
                                    São disponibilizadas 2 cadeiras, necessita de mais?</h2>
                                <div class="row" style="margin:0">
                                    <div class="form-check form-check-inline">
                                        @if (isset($logistica->s_n_cadeiras_dia2) && $logistica->s_n_cadeiras_dia2 === 1)
                                            <input class="form-check-input" type="radio" name="opcaoCadeirasDia2"
                                                id="opcaoCadeirasDia2Sim" value="1" checked>
                                        @else
                                            <input class="form-check-input" type="radio" name="opcaoCadeirasDia2"
                                                id="opcaoCadeirasDia2Sim" value="1">
                                        @endif
                                        <label class="form-check-label" for="opcaoCadeirasDia2Sim">Sim</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        @if (isset($logistica->s_n_cadeiras_dia2) && $logistica->s_n_cadeiras_dia2 === 0)
                                            <input class="form-check-input" type="radio" name="opcaoCadeirasDia2"
                                                id="opcaoCadeirasDia2Nao" value="0" checked>
                                        @else
                                            <input class="form-check-input" type="radio" name="opcaoCadeirasDia2"
                                                id="opcaoCadeirasDia2Nao" value="0">
                                        @endif
                                        <label class="form-check-label" for="opcaoCadeirasDia2Nao">Não</label>
                                    </div>
                                    <input style="width:40.5%;" type="text" name="cadeiras_dia2"
                                        id="cadeiras_dia2" autocomplete="cadeiras_dia2" autofocus
                                        placeholder="(Se sim) Nº de Cadeiras extra"
                                        value="@if (isset($logistica->cadeiras_dia2)) {{ $logistica->cadeiras_dia2 }} @endif">
                                </div>
                            </div>

                            <div class="single-form" style="margin-top:2%">
                                <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                    style="font-size:1.2rem;">Necessita de mesa no stand? </h2>
                                <div class="row" style="margin:0">
                                    <div class="form-check form-check-inline">
                                        @if (isset($logistica->mesa_stand_dia2) && $logistica->mesa_stand_dia2 === 'mesa')
                                            <input class="form-check-input" type="radio" name="opcaoMesaStandDia2"
                                                id="opcaoMesaStandDia2Mesa" value="mesa" checked>
                                        @else
                                            <input class="form-check-input" type="radio" name="opcaoMesaStandDia2"
                                                id="opcaoMesaStandDia2Mesa" value="mesa">
                                        @endif
                                        <label class="form-check-label" for="opcaoMesaStandDia2Mesa">Mesa</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        @if (isset($logistica->mesa_stand_dia2) && $logistica->mesa_stand_dia2 === 'stand')
                                            <input class="form-check-input" type="radio" name="opcaoMesaStandDia2"
                                                id="opcaoMesaStandDia2Stand" value="stand" checked>
                                        @else
                                            <input class="form-check-input" type="radio" name="opcaoMesaStandDia2"
                                                id="opcaoMesaStandDia2Stand" value="stand">
                                        @endif
                                        <label class="form-check-label" for="opcaoMesaStandDia2Stand">Stand</label>
                                    </div>
                                    <input style="width:40.5%;" type="number" name="n_pessoas_dia2"
                                        id="n_pessoas_dia2" autocomplete="n_pessoas_dia2" autofocus
                                        placeholder="Numero de pessoas presentes no stand/mesa?"
                                        value="@if (isset($logistica->n_pessoas_dia2)) {{ $logistica->n_pessoas_dia2 }} @endif">
                                </div>
                            </div>
                            <br>
                            <hr>
                            <br>

                            <div class="row" style="margin-top:1.2rem;">
                                <div class="col-md-6">
                                    <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                        style="font-size:1.2rem;">Montagem</h2>
                                    <select class="form-select" name="montagem_dia2">
                                        <option value="" disabled selected>Selecione uma opção </option>

                                        @foreach ($slot_montagem2 as $slot_montagem22)
                                            @if (isset($logistica->montagem_id9))
                                                <option selected value="{{ $slot_montagem22->id }}">
                                                    {{ $slot_montagem22->slot }}</option>
                                            @else
                                                <option value="{{ $slot_montagem22->id }}">
                                                    {{ $slot_montagem22->slot }}</option>
                                            @endif
                                        @endforeach
                                    </select>

                                </div>
                                <div class="col-md-6">
                                    <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                        style="font-size:1.2rem;">Desmontagem</h2>
                                    <select class="form-select" name="desmontagem_dia2">
                                        <option value="" disabled selected>Selecione uma opção </option>
                                        @foreach ($slot_desmontagem2 as $slot_desmontagem22)
                                            @if (isset($logistica->desmontagem_id9) && $logistica->desmontagem_id9 == $slot_desmontagem22->id )
                                                <option selected value="{{ $slot_desmontagem22->id }}">
                                                    {{ $slot_desmontagem22->slot }}</option>
                                            @else
                                                <option value="{{ $slot_desmontagem22->id }}">
                                                    {{ $slot_desmontagem22->slot }}</option>
                                            @endif
                                        @endforeach
                                        <!-- Adicione mais opções aqui -->
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                        style="font-size:0.8rem;">Nome e Matricula</h2>
                                    <input style="width:50%;" type="text" name="info_montagem_2"
                                        id="info_montagem_2" autocomplete="info_montagem_2" autofocus
                                        placeholder="Ex:Nome condutor;Matricula"
                                        value="@if (isset($logistica->info_montagem_2)) {{ $logistica->info_montagem_2 }} @endif">
                                </div>
                                <div class="col-md-6">
                                    <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                        style="font-size:0.8rem;">Nome e Matricula</h2>
                                    <input style="width:50%;" type="text" name="info_desmontagem_2"
                                        id="info_desmontagem_2" autocomplete="info_desmontagem_2" autofocus
                                        placeholder="Ex:Nome condutor;Matricula"
                                        value="@if (isset($logistica->info_desmontagem_2)) {{ $logistica->info_desmontagem_2 }} @endif">
                                </div>
                            </div>
                            <p><b><span style="color:red">*Nota:</span></b> Se for um prestador de serviço nas
                                montagens e desmontagens é necessário inserir o nome e o numero da matrícula da empresa
                                responsável
                            </p>
                            <br>
                            <hr>
                            <br>
                            <div class="row">
                                <div class="col-md-5">
                                    <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                        style="font-size:1.2rem;">Estacionamento</h2>
                                    <p><b><span style="color:red">*Nota:</span></b> Direito apenas a um estacionamento
                                    </p>
                                    <input type="text" name="info_estacionamento_2" id="info_estacionamento_2"
                                        autocomplete="info_estacionamento_2" autofocus
                                        placeholder="Ex:Nome condutor;Matricula"
                                        value="@if (isset($logistica->info_estacionamento_2)) {{ $logistica->info_estacionamento_2 }} @endif">
                                </div>
                            </div>
                            <br>
                            <hr>
                            <br>
                            <div class="row">
                                <div class="col-md-5">
                                    <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                        style="font-size:1.2rem;">Almoços</h2>
                                    <!--<p><b><span style="color:red">*Nota:</span></b> -->
                                    </p>

                                    @if (!isset($logistica->almocos_dia2))
                                        <select class="form-select" name="almocos_dia2">
                                            <option value="" disabled selected>Selecione uma opção</option>

                                            <option value="12h-13h"
                                                @if ($contagemAlmocos12h_dia2 >= 25) disabled @endif>
                                                12h00 - 13h00
                                            </option>
                                            <option value="13h-14h"
                                                @if ($contagemAlmocos13h_dia2 >= 25) disabled @endif>
                                                13h00 - 14h00
                                            </option>
                                        </select>
                                    @else
                                        <select class="form-select" style="display: none;" name="almocos_dia1">
                                            <option value="{{ $logistica->almocos_dia2 }}">
                                            </option>
                                            <!-- Adicione mais opções aqui -->
                                        </select>
                                        <p>Almoços das {{ $logistica->almocos_dia2 }}</p>
                                    @endif
                                </div>
                            </div>

                        @endif

                        <button type="submit" id="editBtn" class="btn"
                            style="margin-top:2%;background: linear-gradient(195deg, #00c4cc 0%, #008d84 100%);">Guardar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

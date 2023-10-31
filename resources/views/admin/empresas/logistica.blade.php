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
                                    <input style="width:88.5%; display:none" type="text" name="cadeiras_dia1"
                                        id="cadeiras_dia1" autocomplete="cadeiras_dia1" autofocus
                                        placeholder="Número de Cadeiras"
                                        value="@if (isset($logistica->cadeiras_dia1)) {{ $logistica->cadeiras_dia1 }} @endif">
                                </div>
                            </div>

                            <div class="single-form" style="margin-top:2%">
                                <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:1.2rem;">
                                    Necessita de mesa ou tem stand?</h2>
                                <div class="row" style="margin:0">
                                    <div class="form-check form-check-inline">
                                        @if (isset($logistica->mesa_stand_dia1) && $logistica->mesa_stand_dia1 === 'mesa')
                                            <input class="form-check-input" type="radio" name="opcaoMesaStandDia1"
                                                id="opcaoMesaStandDia1Mesa" value="mesa" checked>
                                        @else
                                            <input class="form-check-input" type="radio" name="opcaoMesaStandDia1"
                                                id="opcaoMesaStandDia1Mesa" value="mesa">
                                        @endif
                                        <label class="form-check-label" for="opcaoMesaStandDia1Mesa">Mesa</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        @if (isset($logistica->mesa_stand_dia1) && $logistica->mesa_stand_dia1 === 'stand')
                                            <input class="form-check-input" type="radio" name="opcaoMesaStandDia1"
                                                id="opcaoMesaStandDia1Stand" value="stand" checked>
                                        @else
                                            <input class="form-check-input" type="radio" name="opcaoMesaStandDia1"
                                                id="opcaoMesaStandDia1Stand" value="stand">
                                        @endif
                                        <label class="form-check-label" for="opcaoMesaStandDia1Stand">Stand</label>
                                    </div>
                                </div>
                            </div>

                            <div class="single-form" style="margin-top:2%">
                                <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:1.2rem;">
                                    Número de almoços (Almoços pagos no dia do evento, diretamente ao prestador de
                                    serviço)</h2>
                                <input type="text" name="num_almocos_dia1" id="num_almocos_dia1"
                                    autocomplete="num_almocos_dia1" autofocus placeholder="Número de almoços"
                                    value="@if (isset($logistica->num_almocos_dia1)) {{ $logistica->num_almocos_dia1 }} @endif">
                            </div>
                        @endif

                        @if (isset($empresa->dia2))
                            <h1 class="font-semibold text-xl text-gray-800 leading-tight"
                                style="font-size:1.5rem;@if (isset($empresa->dia1) && isset($empresa->dia2)) margin-top:2% @endif">
                                {{ __('Dia 29') }}
                            </h1>
                            <div class="single-form">
                                <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:1.2rem;">
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
                                    <input style="width:88.5%; display:none" type="text" name="cadeiras_dia2"
                                        id="cadeiras_dia2" autocomplete="cadeiras_dia2" autofocus
                                        placeholder="Número de Cadeiras"
                                        value="@if (isset($logistica->cadeiras_dia2)) {{ $logistica->cadeiras_dia2 }} @endif">
                                </div>
                            </div>

                            <div class="single-form" style="margin-top:2%">
                                <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                    style="font-size:1.2rem;">Necessita de mesa ou tem stand?</h2>
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
                                </div>
                            </div>

                            <div class="single-form" style="margin-top:2%">
                                <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                    style="font-size:1.2rem;">Número de almoços (Almoços pagos no dia do evento,
                                    diretamente ao prestador de serviço)</h2>
                                <input type="text" name="num_almocos_dia2" id="num_almocos_dia2"
                                    autocomplete="num_almocos_dia2" autofocus placeholder="Número de almoços"
                                    value="@if (isset($logistica->num_almocos_dia2)) {{ $logistica->num_almocos_dia2 }} @endif">
                            </div>
                        @endif

                        <button type="submit" id="editBtn" class="btn"
                            style="margin-top:2%;background: linear-gradient(195deg, #00c4cc 0%, #008d84 100%);">Guardar</button>
                    </form>
                </div>

                <script>
                    const cadeirasDia1Sim = document.querySelector('input[name="opcaoCadeirasDia1"][value="1"]');
                    const cadeirasDia1Nao = document.querySelector('input[name="opcaoCadeirasDia1"][value="0"]');
                    const cadeiras_dia1 = document.getElementById('cadeiras_dia1');

                    if (cadeirasDia1Sim.checked)
                        cadeiras_dia1.style.display = 'block';

                    // Add a change event listener to the radio buttons
                    cadeirasDia1Sim.addEventListener('change', function() {
                        if (this.checked) {
                            cadeiras_dia1.style.display = 'block';
                        }
                    });

                    cadeirasDia1Nao.addEventListener('change', function() {
                        if (this.checked) {
                            cadeiras_dia1.style.display = 'none';
                        }
                    });

                    const cadeirasDia2Sim = document.querySelector('input[name="opcaoCadeirasDia2"][value="1"]');
                    const cadeirasDia2Nao = document.querySelector('input[name="opcaoCadeirasDia2"][value="0"]');
                    const cadeiras_dia2 = document.getElementById('cadeiras_dia2');

                    if (cadeirasDia2Sim.checked)
                        cadeiras_dia2.style.display = 'block';

                    // Add a change event listener to the radio buttons
                    cadeirasDia2Sim.addEventListener('change', function() {
                        if (this.checked) {
                            cadeiras_dia2.style.display = 'block';
                        }
                    });

                    cadeirasDia2Nao.addEventListener('change', function() {
                        if (this.checked) {
                            cadeiras_dia2.style.display = 'none';
                        }
                    });
                </script>

            </div>
        </div>
    </div>
</x-app-layout>

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
                            <style>
                                .emp-profile {
                                    padding: 3%;
                                    margin-top: 3%;
                                    margin-bottom: 3%;
                                    border-radius: 0.5rem;
                                    background: #fff;
                                }

                                .profile-img {
                                    text-align: center;
                                }

                                .profile-img img {
                                    width: 70%;
                                    height: 100%;
                                }

                                .profile-img .file {
                                    position: relative;
                                    overflow: hidden;
                                    margin-top: -20%;
                                    width: 70%;
                                    border: none;
                                    border-radius: 0;
                                    font-size: 15px;
                                    background: #212529b8;
                                }

                                .profile-img .file input {
                                    position: absolute;
                                    opacity: 0;
                                    right: 0;
                                    top: 0;
                                }

                                .profile-head h5 {
                                    color: #333;
                                }

                                .profile-head h6 {
                                    color: #0062cc;
                                }

                                .profile-edit-btn {
                                    border: none;
                                    border-radius: 1.5rem;
                                    width: 70%;
                                    padding: 2%;
                                    font-weight: 600;
                                    color: #6c757d;
                                    cursor: pointer;
                                }

                                .proile-rating {
                                    font-size: 12px;
                                    color: #818182;
                                    margin-top: 5%;
                                }

                                .proile-rating span {
                                    color: #495057;
                                    font-size: 15px;
                                    font-weight: 600;
                                }

                                .profile-head .nav-tabs {
                                    margin-bottom: 5%;
                                }

                                .profile-head .nav-tabs .nav-link {
                                    font-weight: 600;
                                    border: none;
                                }

                                .profile-head .nav-tabs .nav-link.active {
                                    border: none;
                                    border-bottom: 2px solid #0062cc;
                                }

                                .profile-work {
                                    padding: 14%;
                                    margin-top: -15%;
                                }

                                .profile-work p {
                                    font-size: 12px;
                                    color: #818182;
                                    font-weight: 600;
                                    margin-top: 10%;
                                }

                                .profile-work a {
                                    text-decoration: none;
                                    color: #495057;
                                    font-weight: 600;
                                    font-size: 14px;
                                }

                                .profile-work ul {
                                    list-style: none;
                                }

                                .profile-tab label {
                                    font-weight: 600;
                                }

                                .profile-tab p {
                                    font-weight: 600;
                                    color: #0062cc;
                                }

                                .company-description {
                                    color: #818182;
                                    margin-top: 2%;
                                    margin-bottom: 2%;
                                }

                                .image-container {
                                    width: 300px;
                                    height: 150px;
                                    overflow: hidden;
                                    border-radius: 5px;
                                }

                                .image-container img {
                                    width: 100%;
                                    height: 100%;
                                    object-fit: cover;
                                }

                                #changeImageLabel {
                                    bottom: 10px;
                                    right: 10px;
                                }
                            </style>

                            <link rel="stylesheet"
                                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


                            <div class="container mt-5 emp-profile">
                                <div class="row" style="margin-bottom:2rem;">
                                    <!-- Botões à esquerda -->
                                    <div class="col-md-9">
                                        <button onclick="goBack()" style="background-color:black;color:#fff"
                                            class="btn mr-2">
                                            <i class="fas fa-arrow-left"></i> Voltar atrás
                                        </button>
                                        <script>
                                            function goBack() {
                                                window.history.back();
                                            }
                                        </script>
                                        <a href="{{ route('fatura.empresas', ['id' => $empresa->id]) }}"
                                            class="btn  mr-2" style="background-color:black;color:#fff">Faturação</a>

                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Logo da empresa -->
                                    <!-- Detalhes da empresa -->
                                    <div class="col-md-8">
                                        <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                            style="font-size:1.2rem;">
                                            Empresa: {{ $empresa->nome_empresa }}</h2>

                                    </div>
                                    @if (isset($empresa->dia1))
                                        <h1 class="font-semibold text-xl text-gray-800 leading-tight"
                                            style="font-size:1.5rem;">
                                            {{ __('Dia 28') }}
                                        </h1>
                                        <div class="single-form">
                                            <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                                style="font-size:1.2rem;">São disponibilizadas 2 cadeiras, necessita de
                                                mais?</h2>
                                            <div class="row" style="margin:0">
                                                <div class="form-check form-check-inline">
                                                    @if (isset($logistica->s_n_cadeiras_dia1) && $logistica->s_n_cadeiras_dia1 === 1)
                                                        <input class="form-check-input" type="radio"
                                                            name="opcaoCadeirasDia1" id="opcaoCadeirasDia1Sim"
                                                            value="1" checked>
                                                    @else
                                                        <input class="form-check-input" type="radio"
                                                            name="opcaoCadeirasDia1" id="opcaoCadeirasDia1Sim"
                                                            value="1">
                                                    @endif
                                                    <label class="form-check-label"
                                                        for="opcaoCadeirasDia1Sim">Sim</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    @if (isset($logistica->s_n_cadeiras_dia1) && $logistica->s_n_cadeiras_dia1 === 0)
                                                        <input class="form-check-input" type="radio"
                                                            name="opcaoCadeirasDia1" id="opcaoCadeirasDia1Nao"
                                                            value="0" checked>
                                                    @else
                                                        <input class="form-check-input" type="radio"
                                                            name="opcaoCadeirasDia1" id="opcaoCadeirasDia1Nao"
                                                            value="0">
                                                    @endif
                                                    <label class="form-check-label"
                                                        for="opcaoCadeirasDia1Nao">Não</label>
                                                </div>
                                                <input style="width:88.5%; display:none" type="text"
                                                    name="cadeiras_dia1" id="cadeiras_dia1" autocomplete="cadeiras_dia1"
                                                    autofocus placeholder="Número de Cadeiras"
                                                    value="@if (isset($logistica->cadeiras_dia1)) {{ $logistica->cadeiras_dia1 }} @endif">
                                            </div>
                                        </div>

                                        <div class="single-form" style="margin-top:2%">
                                            <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                                style="font-size:1.2rem;">Necessita de mesa ou tem stand?</h2>
                                            <div class="row" style="margin:0">
                                                <div class="form-check form-check-inline">
                                                    @if (isset($logistica->mesa_stand_dia1) && $logistica->mesa_stand_dia1 === 'mesa')
                                                        <input class="form-check-input" type="radio"
                                                            name="opcaoMesaStandDia1" id="opcaoMesaStandDia1Mesa"
                                                            value="mesa" checked>
                                                    @else
                                                        <input class="form-check-input" type="radio"
                                                            name="opcaoMesaStandDia1" id="opcaoMesaStandDia1Mesa"
                                                            value="mesa">
                                                    @endif
                                                    <label class="form-check-label"
                                                        for="opcaoMesaStandDia1Mesa">Mesa</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    @if (isset($logistica->mesa_stand_dia1) && $logistica->mesa_stand_dia1 === 'stand')
                                                        <input class="form-check-input" type="radio"
                                                            name="opcaoMesaStandDia1" id="opcaoMesaStandDia1Stand"
                                                            value="stand" checked>
                                                    @else
                                                        <input class="form-check-input" type="radio"
                                                            name="opcaoMesaStandDia1" id="opcaoMesaStandDia1Stand"
                                                            value="stand">
                                                    @endif
                                                    <label class="form-check-label"
                                                        for="opcaoMesaStandDia1Stand">Stand</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-form" style="margin-top:2%">
                                            <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                                style="font-size:1.2rem;">Número de almoços (Almoços pagos no dia do
                                                evento, diretamente ao prestador de serviço)</h2>
                                            <input type="text" name="num_almocos_dia1" id="num_almocos_dia1"
                                                autocomplete="num_almocos_dia1" autofocus
                                                placeholder="Número de almoços"
                                                value="@if (isset($logistica->num_almocos_dia1)) {{ $logistica->num_almocos_dia1 }} @endif">
                                        </div>
                                    @endif

                                    @if (isset($empresa->dia2))
                                        <h1 class="font-semibold text-xl text-gray-800 leading-tight"
                                            style="font-size:1.5rem;@if (isset($empresa->dia1) && isset($empresa->dia2)) margin-top:2% @endif">
                                            {{ __('Dia 29') }}
                                        </h1>
                                        <div class="single-form">
                                            <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                                style="font-size:1.2rem;">São disponibilizadas 2 cadeiras, necessita de
                                                mais?</h2>
                                            <div class="row" style="margin:0">
                                                <div class="form-check form-check-inline">
                                                    @if (isset($logistica->s_n_cadeiras_dia2) && $logistica->s_n_cadeiras_dia2 === 1)
                                                        <input class="form-check-input" type="radio"
                                                            name="opcaoCadeirasDia2" id="opcaoCadeirasDia2Sim"
                                                            value="1" checked>
                                                    @else
                                                        <input class="form-check-input" type="radio"
                                                            name="opcaoCadeirasDia2" id="opcaoCadeirasDia2Sim"
                                                            value="1">
                                                    @endif
                                                    <label class="form-check-label"
                                                        for="opcaoCadeirasDia2Sim">Sim</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    @if (isset($logistica->s_n_cadeiras_dia2) && $logistica->s_n_cadeiras_dia2 === 0)
                                                        <input class="form-check-input" type="radio"
                                                            name="opcaoCadeirasDia2" id="opcaoCadeirasDia2Nao"
                                                            value="0" checked>
                                                    @else
                                                        <input class="form-check-input" type="radio"
                                                            name="opcaoCadeirasDia2" id="opcaoCadeirasDia2Nao"
                                                            value="0">
                                                    @endif
                                                    <label class="form-check-label"
                                                        for="opcaoCadeirasDia2Nao">Não</label>
                                                </div>
                                                <input style="width:88.5%; display:none" type="text"
                                                    name="cadeiras_dia2" id="cadeiras_dia2"
                                                    autocomplete="cadeiras_dia2" autofocus
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
                                                        <input class="form-check-input" type="radio"
                                                            name="opcaoMesaStandDia2" id="opcaoMesaStandDia2Mesa"
                                                            value="mesa" checked>
                                                    @else
                                                        <input class="form-check-input" type="radio"
                                                            name="opcaoMesaStandDia2" id="opcaoMesaStandDia2Mesa"
                                                            value="mesa">
                                                    @endif
                                                    <label class="form-check-label"
                                                        for="opcaoMesaStandDia2Mesa">Mesa</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    @if (isset($logistica->mesa_stand_dia2) && $logistica->mesa_stand_dia2 === 'stand')
                                                        <input class="form-check-input" type="radio"
                                                            name="opcaoMesaStandDia2" id="opcaoMesaStandDia2Stand"
                                                            value="stand" checked>
                                                    @else
                                                        <input class="form-check-input" type="radio"
                                                            name="opcaoMesaStandDia2" id="opcaoMesaStandDia2Stand"
                                                            value="stand">
                                                    @endif
                                                    <label class="form-check-label"
                                                        for="opcaoMesaStandDia2Stand">Stand</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-form" style="margin-top:2%">
                                            <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                                style="font-size:1.2rem;">Número de almoços (Almoços pagos no dia do
                                                evento, diretamente ao prestador de serviço)</h2>
                                            <input type="text" name="num_almocos_dia2" id="num_almocos_dia2"
                                                autocomplete="num_almocos_dia2" autofocus
                                                placeholder="Número de almoços"
                                                value="@if (isset($logistica->num_almocos_dia2)) {{ $logistica->num_almocos_dia2 }} @endif">
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
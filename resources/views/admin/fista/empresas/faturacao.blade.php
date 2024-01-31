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

                                        <!--  <button class="btn"
                                            style="background-color:black; color:#fff">Logistica</button>-->
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Logo da empresa -->
                                    <!-- Detalhes da empresa -->
                                    <div class="col-md-8">
                                        <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                            style="font-size:1.2rem;">
                                            Empresa: {{ $empresa->nome_empresa }}</h2>
                                        <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                            style="font-size:0.8rem;">
                                            NIF</h2>
                                        <input type="text" disabled name="website" id="webInput"
                                            class="form-control mb-3" value="{{ $fatura->nif }}"
                                            placeholder="Sem resposta">

                                            <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                                style="font-size:0.8rem;">
                                                PO</h2>
                                            <input type="text" disabled name="website" id="webInput"
                                                class="form-control mb-3" value="{{ $fatura->numeroOrdemCompra }}"
                                                placeholder="Sem PO">


                                        <div class="row">
                                            <div class="col-md-8">
                                                <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                                    style="font-size:0.8rem;">Nome de Empresa para Faturação</h2>
                                                <input disabled type="text" name="website" id="webInput"
                                                    class="form-control mb-3" value="{{ $fatura->nome_fiscal }}"
                                                    placeholder="Sem resposta">
                                            </div>
                                            <div class="col-md-8">
                                                <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                                    style="font-size:0.8rem;">Morada</h2>
                                                <input disabled type="text" name="website" id="webInput"
                                                    class="form-control mb-3" value="{{ $fatura->morada }}"
                                                    placeholder="Sem resposta">
                                            </div>
                                            <div class="col-md-8">
                                                <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                                    style="font-size:0.8rem;">Pretende número de ordem de compra na
                                                    fatura?</h2>
                                                <input disabled type="text" name="linkedin" id="liInput"
                                                    class="form-control mb-3"
                                                    value="{{ $fatura->s_n_numeroOrdemCompra }}"
                                                    placeholder="Sem resposta">
                                            </div>

                                            <div class="col-md-8">
                                                <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                                    style="font-size:0.8rem;">Pretende faturação ainda em 2023?</h2>
                                                <input type="text" disabled id="liInput" class="form-control mb-3"
                                                    value="{{ $fatura->faturacao2023 }}"
                                                    placeholder="Sem resposta (1- sim, 0 é não)">
                                            </div>
                                            <div class="col-md-8">
                                                <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                                    style="font-size:0.8rem;">Nome</h2>
                                                <input type="text" disabled id="liInput" class="form-control mb-3"
                                                    value="{{ $empresa->nome_user }}"
                                                    placeholder="Sem resposta (1- sim, 0 é não)">
                                            </div>
                                            <div class="col-md-8">
                                                <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                                    style="font-size:0.8rem;">Email</h2>
                                                <input type="text" disabled id="liInput" class="form-control mb-3"
                                                    value="{{ $empresa->email }}"
                                                    placeholder="Sem resposta (1- sim, 0 é não)">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>

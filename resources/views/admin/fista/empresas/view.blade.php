<x-app-layout>

    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:1rem;font-size:1.5rem;">
            {{ __('👋 Olá, ') }}<span style="font-size:1.8rem;">{{ __('Deloitte') }}</span>
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
                                            <button class="btn mr-2" style="background-color:black;color:#fff">Detalhes</button>
                                            <button class="btn  mr-2" style="background-color:black;color:#fff">Faturação</button>
                                            <button class="btn" style="background-color:black; color:#fff">Logistica</button>
                                        </div>

                                        <!-- Botão à direita -->
                                        <div class="col-md-3 text-right">
                                            <button class="btn btn-danger">Ativar/Desativar</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Logo da empresa -->
                                        <div class="col-md-4">
                                            <div class="image-container position-relative">
                                                <img src="https://via.placeholder.com/300x150" alt="Logotipo da Empresa"
                                                    style="width: 300px; height: 150px;" class="img-fluid mb-2">
                                                                                                                                   </div>
                                        </div>

                                        <!-- Detalhes da empresa -->
                                        <div class="col-md-8">
                                            <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                                style="font-size:1.2rem;">Nome da Empresa</h2>
                                            <p id="descText" class="mb-3">Texto Descritivo da Empresa. Breve
                                                descrição sobre a atividade da empresa.</p>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p id="webText" class="mb-1"><i
                                                            class="fab fa-instagram mr-2"></i><a href="#"
                                                            target="_blank" id="webLink">Website</a></p>


                                                    <p id="instaText" class="mb-1"><i
                                                            class="fab fa-instagram mr-2"></i><a href="#"
                                                            target="_blank" id="instaLink">Instagram</a></p>

                                                </div>
                                                <div class="col-md-6">
                                                    <p id="fbText" class="mb-1"><i
                                                            class="fab fa-facebook-f mr-2"></i><a href="#"
                                                            target="_blank" id="fbLink">Facebook</a></p>


                                                    <p id="liText" class="mb-1"><i
                                                            class="fab fa-linkedin-in mr-2"></i><a href="#"
                                                            target="_blank" id="liLink">LinkedIn</a></p>
                                                                                                  </div>
                                            </div>

                                            <p id="otherInfoText" class="mb-3">Outras informações sobre a empresa...
                                            </p>
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

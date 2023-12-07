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
                                        <a href="{{ route('fatura.empresas', ['id' => $empresa->id]) }}"
                                            class="btn  mr-2" style="background-color:black;color:#fff">Faturação</a>
                                        <!--<button class="btn"
                                            style="background-color:black; color:#fff">Logistica</button>-->
                                    </div>

                                    <!-- Botão à direita -->
                                    <style>
                                        .btn-mostrar {
                                            background-color: green;
                                            color: white;
                                            padding: 10px 15px;
                                            border: none;
                                            cursor: pointer;
                                        }

                                        .btn-nao-mostrar {
                                            background-color: red;
                                            color: white;
                                            padding: 10px 15px;
                                            border: none;
                                            cursor: pointer;
                                        }
                                    </style>
                                    <form action="{{ route('toggle.mostrar', $empresa->id) }}" method="post">
                                        @csrf
                                        <div class="col-md-3 text-right">
                                            <button type="submit" class="{{ $empresa->mostrar ? 'btn-nao-mostrar' : 'btn-mostrar' }}">
                                                {{ $empresa->mostrar ? 'Desativar' : 'Ativar' }}
                                            </button>
                                        </div>
                                    </form>




                                </div>
                                <form id="companyProfile" method="post"
                                    action="{{ route('admin.empresa.infos.guardar', ['id' => $empresa->id]) }}" enctype="multipart/form-data">
                                    @csrf
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <div class="row">

                                        <!-- Logo da empresa -->
                                        <div class="col-md-4">
                                            <div class="alert alert-warning" style="width: 80%;font-size:1rem;" role="alert">
                                                Clica em cima da imagem para editar o logotipo e de seguida em em Guardar.
                                                Tamanho do logotipo: <br>
                                                <?php if (strcmp($empresa->plano,"silver") == 0) {
                                                   echo "-Silver:90x80px<br>";
                                                }?>
                                                <?php if (strcmp($empresa->plano,"gold") == 0) {
                                                    echo "-Gold:130x120px";
                                                 }?>
                                                 <?php if (strcmp($empresa->plano,"premium") == 0) {
                                                    echo "-Premium:200x190px";
                                                 }?>
                                            </div>
                                            <div class="image-container position-relative">
                                                <!-- Clique na imagem para mudar -->
                                                <img src="{{ asset('storage/' . $empresa->avatar) }}" alt="Logotipo da Empresa" style="width: 300px; height: 150px;" class="img-fluid mb-2" onclick="document.getElementById('fileInput').click()">

                                                <!-- Input de arquivo escondido -->
                                                <input type="file" id="fileInput" name="avatar">
                                            </div>
                                        </div>

                                        <!-- Detalhes da empresa -->
                                        <div class="col-md-8">
                                            <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                                style="font-size:1.2rem;">
                                                {{ $empresa->nome_empresa }}</h2>
                                            <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                                style="font-size:0.8rem;">
                                                Descrição</h2>
                                            <textarea id="descInput" name="description" class="form-control mb-3">{{ $empresa->description }}</textarea>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                                        style="font-size:0.8rem;">Website( https://...)</h2>
                                                    <input type="text" name="website" id="webInput"
                                                        class="form-control mb-3" value="{{ $empresa->website }}"
                                                        placeholder="Link do Website">
                                                </div>
                                                <div class="col-md-6">
                                                    <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                                        style="font-size:0.8rem;">Linkedin( https://...)</h2>
                                                    <input type="text" name="linkedin" id="liInput"
                                                        class="form-control mb-3" value="{{ $empresa->linkedin }}"
                                                        placeholder="Link do LinkedIn">
                                                </div>
                                                <div class="col-md-6">
                                                    <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                                        style="font-size:0.8rem;">Mail</h2>
                                                    <input type="text" name="email" id="liInput"
                                                        class="form-control mb-3" value="{{ $empresa->email }}"
                                                        placeholder="email">
                                                </div>
                                            </div>
                                            <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                                style="font-size:0.8rem;">
                                                Outras Informações</h2>
                                            <textarea id="otherInfoInput" name="others" class="form-control mb-3" placeholder="Outras Informações">{{ $empresa->others }}</textarea>
                                            @if (strcmp($empresa->plano,"premium")==0 || strcmp($empresa->plano,"diamond") ==0 )
                                                A empresa escolheu o modelo de <?php if (strcmp($empresa->modelo_workshop,"ws_presencial")==0){  echo " Workshop"; }elseif(strcmp($empresa->modelo_workshop,"si")==0){  echo " Speed Interviews"; }
                                            ?>
                                            @endif
                                            <p></p>
                                            <button type="submit" id="editBtn" class="btn"
                                                style="margin-top:2%;background: linear-gradient(195deg, #00c4cc 0%, #008d84 100%);">Guardar</button>

                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>

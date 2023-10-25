<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:1rem;font-size:1.5rem;">
            {{ __('👋 Olá, ') }}<span style="font-size:1.8rem;">{{ Auth::user()->name }}</span>
        </h1>
    </x-slot>
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

        .card {
            opacity: 0.95;
            border-radius: 15px;
            border: 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 4em; /* Tamanho de fonte maior */
            color: black;
            font-weight: bold;
        }

        .card-text {
            font-size: 1.5em;
            text-transform: uppercase; /* Deixa o texto em maiúsculas */
            letter-spacing: 2px; /* Espaçamento entre letras */
            font-weight: bold;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div style="margin-top:3rem;margin-bottom:3rem;; position: relative;">
                    <div class="container mt-5">
                        <div class="row">
                            <!-- Card 1: Usuários -->
                            <div class="col-md-3 mb-4">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h2 class="card-title">
                                         {{$usersWithoutRoleXCount}}
                                        </h2>
                                        <p class="card-text">Utilizadores</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2: Posts -->
                            <div class="col-md-3 mb-4">
                                <div class="card text-center">
                                    <a href="{{ route('admin.empresas') }}"><div class="card-body">
                                        <h2 class="card-title">{{$empresasCount}}</h2>
                                        <p class="card-text">Empresas</p>
                                    </div></a>
                                </div>
                            </div>

                            <!-- Card 3: Comentários -->
                            <div class="col-md-3 mb-4">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h2 class="card-title">-</h2>
                                        <p class="card-text">Workshops</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 4: Curtidas -->
                            <div class="col-md-3 mb-4">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h2 class="card-title">{{$sessions}}</h2>
                                        <p class="card-text">Nº acedem ao site FISTA</p>
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

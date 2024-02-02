<?php
use App\Models\Billing;
use App\Models\Logistica;

$faturacao = Billing::where('id_empresa', $company->id)->first();
$logistica = Logistica::where('id_empresa', $company->id)->first();

function progressoEmpresa($empresa, $faturacao, $logistica)
{
    $count = 9;
    $camposPreenchidos = 0;
    //acrescentar campos do dashboard
    if (isset($empresa->avatar)) {
        $camposPreenchidos += 1;
    }
    if (isset($empresa->description)) {
        $camposPreenchidos += 1;
    }
    if (isset($empresa->linkedin)) {
        $camposPreenchidos += 1;
    }
    if (isset($empresa->website)) {
        $camposPreenchidos += 1;
    }

    if ($faturacao != null) {
        if (isset($faturacao->nome_fiscal)) {
            $camposPreenchidos += 1;
        }
        if (isset($faturacao->nif)) {
            $camposPreenchidos += 1;
        }
        if (isset($faturacao->morada)) {
            $camposPreenchidos += 1;
        }
        if (isset($faturacao->s_n_numeroOrdemCompra)) {
            $camposPreenchidos += 1;
            if ($faturacao->s_n_numeroOrdemCompra === 1) {
                $count = $count + 1;
                if (isset($faturacao->numeroOrdemCompra)) {
                    $camposPreenchidos += 1;
                }
            }
        }
        if (isset($faturacao->faturacao2023)) {
            $camposPreenchidos += 1;
        }
    }

    if (isset($empresa->dia1)) {
        $count = $count + 3;
        if ($logistica != null) {
            if (isset($logistica->s_n_cadeiras_dia1)) {
                $camposPreenchidos += 1;
                if ($logistica->s_n_cadeiras_dia1 === 1) {
                    $count = $count + 1;
                    if (isset($logistica->cadeiras_dia1)) {
                        $camposPreenchidos += 1;
                    }
                }
            }
            if (isset($logistica->mesa_stand_dia1)) {
                $camposPreenchidos += 1;
            }

        }
    }

    if (isset($empresa->dia2)) {
        if ($logistica != null) {
            $count = $count + 3;
            if (isset($logistica->s_n_cadeiras_dia2)) {
                $camposPreenchidos += 1;
                if ($logistica->s_n_cadeiras_dia2 === 1) {
                    $count += 1;
                    if (isset($logistica->cadeiras_dia2)) {
                        $camposPreenchidos += 1;
                    }
                }
            }
            if (isset($logistica->mesa_stand_dia2)) {
                $camposPreenchidos += 1;
            }

        }
    }

    return round(($camposPreenchidos / $count) * 100);
}

function camposEmFalta($empresa, $faturacao, $logistica)
{
    //alterar
    $campos = [];
    if (progressoEmpresa($empresa, $faturacao, $logistica) != 100) {
        if (!isset($empresa->avatar)) {
            array_push($campos, 'Logotipo');
        }
        if (!isset($empresa->description)) {
            array_push($campos, 'Descrição');
        }
        if (!isset($empresa->linkedin)) {
            array_push($campos, 'LinkedIn');
        }
        if (!isset($empresa->website)) {
            array_push($campos, 'Website');
        }

        if ($faturacao == null) {
            array_push($campos, 'Nome Fiscal', 'NIF', 'Morada', 'Se pretende número de ordem de compra', 'Se pretende faturação em 2023');
        } else {
            if (!isset($faturacao->nome_fiscal)) {
                array_push($campos, 'Nome Fiscal');
            }
            if (!isset($faturacao->nif)) {
                array_push($campos, 'NIF');
            }
            if (!isset($faturacao->morada)) {
                array_push($campos, 'Morada');
            }
            if (!isset($faturacao->s_n_numeroOrdemCompra)) {
                array_push($campos, 'Se pretende número de ordem de compra');
            } else {
                if ($faturacao->s_n_numeroOrdemCompra == 1 && !isset($faturacao->numeroOrdemCompra)) {
                    array_push($campos, 'Número de ordem de compra');
                }
            }
            if (!isset($faturacao->faturacao2023)) {
                array_push($campos, 'Se pretende faturação em 2023');
            }
        }

        if ($logistica == null) {
            if (isset($empresa->dia1)) {
                array_push($campos, 'Se necessita de mais cadeiras para dia 28', 'Se necessita de mesa ou tem stand para o dia 28', 'Número de almoços para dia 28');
            }
            if (isset($empresa->dia2)) {
                array_push($campos, 'Se necessita de mais cadeiras para dia 29', 'Se necessita de mesa ou tem stand para o dia 29', 'Número de almoços para dia 29');
            }
        } else {
            if (isset($empresa->dia1)) {
                if (!isset($logistica->s_n_cadeiras_dia1)) {
                    array_push($campos, 'Se necessita de mais cadeiras para dia 28');
                } else {
                    if ($logistica->s_n_cadeiras_dia1 == 1 && !isset($logistica->cadeiras_dia1)) {
                        array_push($campos, 'Número de cadeiras para dia 28');
                    }
                }
                if (!isset($logistica->mesa_stand_dia1)) {
                    array_push($campos, 'Se necessita de mesa ou tem stand para o dia 28');
                }

            }

            if (isset($empresa->dia2)) {
                if (!isset($logistica->s_n_cadeiras_dia2)) {
                    array_push($campos, 'Se necessita de mais cadeiras para dia 29');
                } else {
                    if ($logistica->s_n_cadeiras_dia2 == 1 && !isset($logistica->cadeiras_dia2)) {
                        array_push($campos, 'Número de cadeiras para dia 29');
                    }
                }
                if (!isset($logistica->mesa_stand_dia2)) {
                    array_push($campos, 'Se necessita de mesa ou tem stand para o dia 29');
                }

            }
        }

        return $campos;
    }
}
?>
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
    </style>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="alert alert-warning" style="width: 100%;font-size:1rem;" role="alert">
                Visualiza <a style="font-weight: bold; font-size:1.2rem;" href="https://fista.iscte-iul.pt/img/fista/Booklet_FISTA24.pdf">AQUI</a> o Booklet!
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div style="margin-top:3rem;margin-bottom:3rem; position: relative;">
                    <div class="overlay" style="margin:0.6rem;">
                        <span class="font-semibold text-xl text-gray-800 leading-tight"
                            style="margin-left:1rem;font-size:1.5rem;">
                            {{ __('⚠ Progresso') }} <a data-toggle="modal" data-target="#camposModal"></a>
                        </span>
                        @if (auth()->user() &&
                                auth()->user()->hasRole('empresa'))
                            <a href="" data-toggle="modal" data-target="#camposModal">
                                <div class="notification">
                                    <i class="fas fa-bell fa-2x"></i>
                                    <span class="badge"><?php $counta = camposEmFalta($company, $faturacao, $logistica);
                                    if (!isset($counta)) {
                                        if (is_array($counta) || $counta instanceof Countable) {
                                            $count = count($count);
                                            echo $count;
                                        } else {
                                            $count = 0;
                                            echo $count;
                                        }
                                    }
                                    ?></span>
                                </div>
                            </a>
                        @endif
                    </div>

                    <div class="progress" style="background-color:#e1e1e1;margin-left:2.1em;margin-right:2.1em">
                        <div class="progress-bar" role="progressbar"
                            style="width:{{ progressoEmpresa($company, $faturacao, $logistica) }}%;background-color:#21386e;color:white;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span
                                style="padding-left: 2rem;">{{ progressoEmpresa($company, $faturacao, $logistica) }}%</span>
                        </div>
                    </div>
                </div>

                @if (progressoEmpresa($company, $faturacao, $logistica) != 100)
                    <div class="modal fade" id="camposModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel" style="color:grey">Campos em Falta
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <ul class="list-group">
                                        @foreach (camposEmFalta($company, $faturacao, $logistica) as $item)
                                            <li class="list-group-item">{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn" data-dismiss="modal"
                                        style="background: linear-gradient(195deg, #00c4cc 0%, #008d84 100%);padding:10px;height:auto;line-height:normal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="container mt-5 emp-profile">
                    <form id="companyProfile" method="post" action="{{ route('empresa.infos.guardar') }}" enctype="multipart/form-data">
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
                                    -Silver:90x80px<br>
                                    -Gold:130x120px  <br>
                                    -Premium:200x190px <br>
                                </div>
                                <div class="image-container position-relative">
                                    <!-- Clique na imagem para mudar -->
                                    <img src="{{ asset('storage/' . $company->avatar) }}" alt="Logotipo da Empresa" style="width: 300px; height: 150px;" class="img-fluid mb-2" onclick="document.getElementById('fileInput').click()">

                                    <!-- Input de arquivo escondido -->
                                    <input type="file" id="fileInput" name="avatar">
                                </div>
                            </div>



                            <!-- Detalhes da empresa -->
                            <div class="col-md-8">
                                <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:1.2rem;">
                                    {{ $company->nome_empresa }}</h2>
                                <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:0.8rem;">
                                    Descrição</h2>
                                <textarea id="descInput" name="description" class="form-control mb-3">{{ $company->description }}</textarea>

                                <div class="row">
                                    <div class="col-md-6">
                                        <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                            style="font-size:0.8rem;">Website( https://...)</h2>
                                        <input type="text" name="website" id="webInput" class="form-control mb-3"
                                            value="{{ $company->website }}" placeholder="Link do Website">
                                    </div>
                                    <div class="col-md-6">
                                        <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                            style="font-size:0.8rem;">Linkedin( https://...)</h2>
                                        <input type="text" name="linkedin" id="liInput" class="form-control mb-3"
                                            value="{{ $company->linkedin }}" placeholder="Link do LinkedIn">
                                    </div>
                                </div>
                                <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                                    style="font-size:0.8rem;">
                                    Outras Informações</h2>
                                <textarea id="otherInfoInput" name="others" class="form-control mb-3" placeholder="Outras Informações">{{ $company->others }}</textarea>

                                <button type="submit" id="editBtn" class="btn"
                                    style="margin-top:2%;background: linear-gradient(195deg, #00c4cc 0%, #008d84 100%);">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>

                <script>
                    function previewImage(event) {
                        const reader = new FileReader();
                        reader.onload = function() {
                            const output = document.querySelector('.img-fluid');
                            output.src = reader.result;
                        };
                        reader.readAsDataURL(event.target.files[0]);
                    }
                </script>

            </div>
        </div>
    </div>
</x-app-layout>

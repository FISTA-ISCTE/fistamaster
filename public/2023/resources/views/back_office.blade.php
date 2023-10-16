@extends('layouts.nav')
@section('title', 'Back Office')
@section('content')
<link href="{{ asset('css/media.css') }}" rel="stylesheet">
<script>
    const nav = document.querySelector('nav')
    const img = document.querySelector('img')
    nav.classList.add('active');
    img.setAttribute('src', 'img/logo_fista_horizontal_azul_2023_v2.png');
</script>

@php
use App\Ano;
use App\Curso;
use App\User;
@endphp

<style>

    .header-tabela {
        font-size: 15px;
        padding-top: 1.5rem;
        padding-right: 1.5rem;
        padding-left: 1.5rem;
        cursor:default;
        text-align: center;
    }

    .body-tabela {
        padding-top: 2rem;
        text-align: center;
        font-size: 1rem;
    }

    tr:not(.header):nth-of-type(odd) { 
	    background: #eee; 
	}

    .linkedin {
        color: #1EC4BD !important;
        font-size: 1rem !important;
    }

    .tabela {
        margin-bottom: 4rem;
    }

    .row-tabela {
        border-right: 1px solid #000;
        border-left: 1px solid #000;
        border-bottom: 1px solid #000;
    }

    .row-tabela:first-child {
        border-top: 1px solid #000;
    }

    .campo-tabela {
        padding: 5px;
    }

    .divTabela{
        overflow-x:scroll
    }

    @media screen and (min-width:1300px){
        .tabela{
            width:1200px
        }

        .divTabela{
            width:1200px
        }

        .container{
            max-width:1230px
        }
    }
    
</style>

<div class="back-office">
    <div class="container">
        <div class="mb-4" style="margin-top:auto;margin-left:auto;margin-top:12%">
            <div class="row" style="height:0%;margin:0">
                <h1 style="font-family:'Myriad Pro 1';font-size:55px;color:#666666;">Back Office</h1>
            </div>
            <div class="row" style="height:0%;margin:0;">
                <a href="{{route('exportarBackOffice')}}" style="display:block;margin-left:auto"><button class="btn-fista" style="width:150px;display:block;margin-left:auto">Exportar</button></a>
            </div>
        </div>
        <div class="divTabela">
            <div class="tabela">
                <table>
                    <thead>
                    <tr class="header">
                        <th class="header-tabela">Nome</th>
                        <th class="header-tabela">Email</th>
                        <th class="header-tabela">LinkedIn</th>
                        <th class="header-tabela">Área Interesse 1</th>
                        <th class="header-tabela">Área Interesse 2</th>
                        <th class="header-tabela">Estágio Verão</th>
                        <th class="header-tabela">Full time</th>
                        <th class="header-tabela">Part time</th>
                        <th class="header-tabela">Licenciatura</th>
                        <th class="header-tabela">Ano</th>
                        <th class="header-tabela">Data Nascimento</th>
                    </tr>
                    </thead>
                    <tbody class="body-tabela">
                        @foreach($backofficealunosempresas as $boempresas)
                            @if($boempresas->id_empresa == Auth::user()->empresa)
                                @foreach($backofficealunos as $boalunos)
                                    @if($boempresas->id_user == $boalunos->id_user)
                                        <tr class="row-tabela">
                                            <td class="campo-tabela" data-column="Nome">{{ User::where('id', $boalunos->id_user)->value('first_name').' '.User::where('id', $boalunos->id_user)->value('last_name') }}</td>
                                            <td class="campo-tabela" data-column="Email">{{ $boalunos->email }}</td>
                                            <td class="campo-tabela" data-column="LinkedIn"><a class="linkedin" href="{{ $boalunos->linkedin }}">LinkedIn</a></td>
                                            <td class="campo-tabela" data-column="Área Interesse 1">{{ $boalunos->areainteresse1 }}</td>
                                            <td class="campo-tabela" data-column="Área Interesse 2">{{ $boalunos->areainteresse2 }}</td>
                                            <td class="campo-tabela" data-column="Estágio Verão">@if($boalunos->estagioverao == 1) X @endif</td>
                                            <td class="campo-tabela" data-column="Full time">@if($boalunos->fulltime == 1) X @endif</td>
                                            <td class="campo-tabela" data-column="Part time">@if($boalunos->parttime == 1) X @endif</td>
                                            <td class="campo-tabela" data-column="Licenciatura">{{ Curso::where('id', User::where('id', $boalunos->id_user)->value('id_curso'))->value('designacao') }}</td>
                                            <td class="campo-tabela" data-column="Ano">{{ Ano::where('id', User::where('id', $boalunos->id_user)->value('id_ano'))->value('designacao') }}</td>
                                            <td class="campo-tabela" data-column="Data Nascimento">{{ date("d-m-Y", strtotime($boalunos->datanascimento)) }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
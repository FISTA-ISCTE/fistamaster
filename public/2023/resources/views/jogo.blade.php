@extends('layouts.nav')
@section('title', 'FISTA GO-Perguntas')
@section('content')
<script>
    const nav = document.querySelector('nav')
    const img = document.querySelector('img')
    nav.classList.add('active');
    img.setAttribute('src', 'img/logo_fista_horizontal_azul_2023_v2.png');
</script>
@php

use App\Questao;
$q1= request()->get('q1');
$q2= request()->get('q2');
$questao1= Questao::find($q1);
$questao2= Questao::find($q2);
@endphp
<div class="main footer_right" style="margin-top:2rem;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-3"></div>
            <div class="col-6 text-center">
                <img src="/img/FISTAGOO.png" style="height:6rem">
            </div>
            <div class="col-3"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">

                <form id="join_form" method="POST" action="/jogo/jogoBack" accept-charset="UTF-8" >
                    @csrf
                    <h4 style="color:#666666"></h4>
    
                    <h4 style="color:#666666;text-align:center;">{{$questao1->pergunta}}</h4>

                    <h4 style="color:#666666">Opções:</h4>
                    <div class="form-group">
                        <select class="custom-select" type="text" name="resposta_pergunta1">
                            <option value="none" disabled selected>Seleciona a opção correta</option>
                            <option value="{{$questao1->alinea1}}">{{$questao1->alinea1}}</option>
                            <option value="{{$questao1->alinea2}}">{{$questao1->alinea2}}</option>
                            <option value="{{$questao1->alinea3}}">{{$questao1->alinea3}}</option>
                            <option value="{{$questao1->alinea4}}">{{$questao1->alinea4}}</option>
                        </select>
                    </div>
                    <input TYPE="hidden" id="q1" readonly  value="{{ app('request')->input('q1') }}" type="text" class="form-control" name="q1" autocomplete="q1">

                    <br>

                    <h4 style="color:#666666"></h4>

                    <h4 style="color:#666666;text-align:center;">{{$questao2->pergunta}}</h4>

                    <h4 style="color:#666666">Opções:</h4>
                    <div class="form-group">
                        <select class="custom-select" type="text" name="resposta_pergunta2">
                            <option value="none" disabled selected>Seleciona a opção correta</option>
                            <option value="{{$questao2->alinea1}}">{{$questao2->alinea1}}</option>
                            <option value="{{$questao2->alinea2}}">{{$questao2->alinea2}}</option>
                            <option value="{{$questao2->alinea3}}">{{$questao2->alinea3}}</option>
                            <option value="{{$questao2->alinea4}}">{{$questao2->alinea4}}</option>
                        </select>
                    </div>
                    <input TYPE="hidden" id="q2" readonly  value="{{ app('request')->input('q2') }}" type="text" class="form-control" name="q2" autocomplete="q2">
                    <input TYPE="hidden" id="token" readonly  value="{{ app('request')->input('token') }}" type="text" class="form-control" name="token" autocomplete="token">
                    <br>

                    <div class="center">
                        <button type="submit" class="btn-fista center" style="margin-left:23%;">
                            Submeter Resposta
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>

@endsection
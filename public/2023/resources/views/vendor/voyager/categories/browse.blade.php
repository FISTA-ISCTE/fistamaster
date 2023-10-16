@extends('voyager::master')

@section('categories_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))


@section('content')
@php
$user=Auth::user();
$role=$user->role_id;
@endphp
@if($role == 3 || $role == 1)
<div class="main footer_right">
    <div class="container">
        <h1 style="font-size:40px;color:#666666;margin-bottom:30px;">Registo dos pontos:</h1>

        <div class="row justify-content-center">
            <div class="col-md-8">

                <form id="join_form" target="gravar" method="POST" action="/pontosUser"  accept-charset="UTF-8" >
				@csrf
                    <h4 style="color:#666666">Email:</h4>
                    <div class="form-group">
                        <input id="email" type="text" placeholder="Email" class="form-control" name="email" required autofocus>
                    </div>

                    <div class="center">
                        <button type="submit" class="btn-fista center" style="margin-left:23%;">
                            Registar pontos
                        </button>
                    </div>

                </form>
                <iframe name="gravar" style="display: none;"></iframe>
            </div>
        </div>

    </div>
</div>
@endif



@php

use App\Mailing;
use App\Empresa;
use App\Teste;
$testes = Teste::all();
$mailings= Mailing::all();
$empresas = Empresa::all();
use App\Contest;
use App\Workshop;
$grupos= Contest::where('tipo_concurso','MAT')->orderBy('pontos', 'desc')->get();
$workshop= Workshop::find(25);

@endphp

<div class="container">
            @foreach($testes as $teste)
            <h5>{{$teste->first_name}} {{$teste->last_name}}</h5>
            @endforeach
        </div>

@if($role == 4 || $role == 1)

<div class="main footer_right">
<div class="container" style="padding-top:30px;">

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome Grupo</th>
      <th scope="col">Elementos Grupo</th>
      <th scope="col">Pontos</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $num=0;
  ?>
      @foreach ($grupos as $grupo)
    <tr <?php if($num==0){ ?>style="font-size:21px;color:#7EBC4D;font-weight:bold;"<?php } ?>>
      <th scope="row"><?php $num=$num+1; echo $num;  ?></th>
      <td>{{$grupo->nome_grupo}}</td>
      <td>{{$grupo->nome1}} <?php if(!empty($grupo->nome2)){ ?>, {{$grupo->nome2}}  <?php } ?><?php if(!empty($grupo->nome3)){ ?>, {{$grupo->nome3}}  <?php } ?><?php if(!empty($grupo->nome4)){ ?>, {{$grupo->nome4}}  <?php } ?></td>
      <td>{{$grupo->pontos}}</td>
    </tr>

@endforeach
  </tbody>
</table>
</div>
    <div class="container">
        <h1 style="font-size:40px;color:#666666;margin-bottom:30px;">Registar Pontos - Concurso de MAT :</h1>

        <div class="row justify-content-center">
            <div class="col-md-8">

                <form id="join_form" method="POST" target="gravar" action="/pontosMAT" accept-charset="UTF-8" >
                @csrf
                    <h4 style="color:#666666">Seleciona o grupo:</h4>
					<div class="form-group">
                        <select class="custom-select" type="text" name="id_grupo">
                            <option value="" disabled selected>Nome dos Grupos</option>
                            @foreach($grupos as $grupo)
                     
                            <option value="{{$grupo->id}}">{{$grupo->nome_grupo}}</option>
                 
                            @endforeach
                        </select>
                    </div>

                    <h4 style="color:#666666">Pontos:</h4>
					<div class="form-group">
                     <input class="form-control" type="number" name="pontos" id="example-number-input">
                    </div>

                    <div class="center">
                        <button type="submit" class="btn-fista center" style="margin-left:23%;">
                            Registar pontos
                        </button>
                    </div>
                </form>
               
            </div>
        </div>
    
    
    </div>
    <iframe name="gravar" style="display: none;"></iframe>
</div>
@endif

@if($role == 3 || $role == 1)
<div class="main footer_right">
    <div class="container">
        <h1 style="font-size:40px;color:#666666;margin-bottom:30px;">Registo dos tokens:</h1>

        <div class="row justify-content-center">
            <div class="col-md-8">

                <form id="join_form" method="POST"  action="/tokenJogo" accept-charset="UTF-8" >
                @csrf
                    <h4 style="color:#666666">Token/empresa:</h4>
					<div class="form-group">
                        <select class="custom-select" type="text" name="token">
                            <option value="" disabled selected>Token</option>
                            @foreach($mailings as $mailing)
                     
                            <option value="{{$mailing->token}}">{{$mailing->empresa}} - {{$mailing->token}}</option>
                 
                            @endforeach
                        </select>
                    </div>

                    <h4 style="color:#666666">Empresa:</h4>
					<div class="form-group">
                        <select class="custom-select" type="text" name="id_empresa">
                            <option value="" disabled selected>Empresa</option>
                            @foreach($empresas as $empresa)
                                <option value="{{$empresa->id}}">{{$empresa->nome_empresa}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="center">
                        <button type="submit" class="btn-fista center" style="margin-left:23%;">
                            Registar token
                        </button>
                    </div>
                </form>
               
            </div>
        </div>
    
    
    </div>
</div>
@endif
@stop
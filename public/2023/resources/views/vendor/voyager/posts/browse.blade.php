@extends('voyager::master')

@section('post_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))


@section('content')

@php

use App\Workshop;
use App\User;

$workshops = Workshop::all()->sortBy('begin');


@endphp

@foreach($workshops as $workshop)
<div class="container">

<div class="row text-center">
<h3>{{$workshop->title}}</h3>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome inscrito</th>
      <th scope="col">Está presente (1-Sim, 0-Não)</th>
      <th scope="col">Botão</th>
    </tr>
  </thead>
  
  <tbody>
    @foreach($workshop->usersInscritos as $user)
    <tr>
    <form method="POST" target="gravar" action="{{ route('presenca_work') }}">
        @csrf
      <td>{{$user->first_name}} {{$user->last_name}}</td>
      <td>
        <select name="presenca" class="form-control mb-1">
            <option disabled selected>Seleciona a presença</option>
            <option value="1">Sim</option>
            <option value="0">Não</option>
        </select>
        <div class="form-group" >
            <input TYPE="hidden" id="uuid" readonly  value="{{ $user->uuid }}" type="text" class="form-control" name="uuid" autocomplete="uuid">
        </div>
        <div class="form-group" >
            <input TYPE="hidden" id="id_work" readonly  value="{{ $workshop->id }}" type="text" class="form-control" name="id_work" autocomplete="id_work">
        </div>
      </td>
      <td><button type="submit" class="btn-fista center" style="margin-left:50%;">Guardar</button></td>
      </form>
    </tr>
    <iframe name="gravar" style="display: none;"></iframe>
    @endforeach
  </tbody>  
</table>


</div>

@endforeach
@stop
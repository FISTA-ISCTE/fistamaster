@extends('layouts.nav')
@section('title', 'Registo das Perguntas')
@section('content')
<script>
    const nav = document.querySelector('nav')
    const img = document.querySelector('img')
    nav.classList.add('active');
    img.setAttribute('src', 'img/logo_fista_horizontal_azul_2023_v2.png');
</script>

@php
use App\Empresa;
use App\Questao;
$questoes = Questao::all();
$empresas =Empresa::all();

@endphp

<div class="main footer_right">
    <div class="container">
    <iframe name="gravar" style="display: none;"></iframe>
        <h1 style="font-size:40px;color:#666666;margin-bottom:30px;">Registo das perguntas:</h1>

        <div class="row justify-content-center">
            <div class="col-md-8">

                <form id="join_form" target="gravar" method="POST" action="/perguntasubmit" >
				    @csrf
                    <h4 style="color:#666666">Pergunta:</h4>

                    <div class="form-group">
                        <input id="pergunta" type="text" placeholder="Pergunta" class="form-control" name="pergunta" value="" required autocomplete="company_name" autofocus>
                    </div>

                    <h4 style="color:#666666">Alíneas:</h4>

                    <div class="form-group">
                        <input id="alinea1" type="text" placeholder="alínea1" class="form-control" name="alinea1" required="">
                    </div>
                    <div class="form-group">
                        <input id="alinea2" type="text" placeholder="alínea2" class="form-control" name="alinea2" required="">
                    </div>
                    <div class="form-group">
                        <input id="alinea3" type="text" placeholder="alínea3" class="form-control" name="alinea3" required="">
                    </div>
                    <div class="form-group">
                        <input id="alinea4" type="text" placeholder="alínea4" class="form-control" name="alinea4" required="">
                    </div>

                    <h4 style="color:#666666">Alínea Correta:</h4>

                    <div class="form-group">
                        <input id="alinea_correta" type="text" placeholder="alínea correta" class="form-control" name="alinea_correta" required="">
                    </div>

                    <h4 style="color:#666666">Empresa:</h4>
					<div class="form-group">
                        <select class="custom-select" type="text" name="id_empresa">
                            <option value="" disabled selected>Empresa</option>
                            @foreach($empresas as $empresa)
                            <option value="{{$empresa->id}}" selected>{{$empresa->nome_empresa}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="center">
                        <button type="submit" class="btn-fista center" style="margin-left:23%;">
                            Registar pergunta
                        </button>
                    </div>

                </form>
                
            </div>
        </div>
<div >
<h1 style="font-size:40px;color:#666666;margin-bottom:30px;margin-top:30px;">Ver perguntas:</h1>

        <div class="row justify-content-center">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Perguntas</th>
      <th scope="col">alinea1</th>
      <th scope="col">alinea2</th>
      <th scope="col">alinea3</th>
      <th scope="col">alinea4</th>
      <th scope="col">alinea_correta</th>
      <th scope="col">Empresa</th>
    </tr>
  </thead>
  <tbody>

      @foreach ($questoes as $questao)
    <tr>
      <td>{{$questao->pergunta}}</td>
      <td>{{$questao->alinea1}}</td>
      <td>{{$questao->alinea2}}</td>
      <td>{{$questao->alinea3}}</td>
      <td>{{$questao->alinea4}}</td>
      <td>{{$questao->alinea_correta}}</td>
      @php
      $id_empresa=$questao->id_empresa; 
      $empresa_t= Empresa::find($id_empresa);
      @endphp
      <td>{{$empresa_t->nome_empresa}} </td>
      
    </tr>

@endforeach
  </tbody>
</table>
        </div>

</div>
    </div>
</div>

@endsection
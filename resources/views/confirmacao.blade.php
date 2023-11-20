@extends('layouts.app2')

@section('content')
<title>Confirmação</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; background-color: #f4f4f4;">

   <img src="img/Mascote_SemFundo.png" style="height:15rem;margin-top:5rem;" alt="Tekas-mascote FISTA">

   <div class="content" style="margin-left: 3rem;margin-right: 3rem">
<h2> Estás inscrito no nosso concurso de ideias. <br> Envia para o nosso email: <a href="mailto:fista@iscte-iul.pt">fista@iscte-iul.pt</a> todos os documentos complementares.</h2>
</div>

<button onclick="goBack()" style="margin-top:3rem;" class="btn btn-light">
    <i class="fas fa-arrow-left"></i> Voltar atrás
</button>
<script>
    function goBack() {
        window.history.back();
    }
</script>
<style>
    .footer-section{
        margin-top:0px !important;
    }
</style>
</div>


@endsection

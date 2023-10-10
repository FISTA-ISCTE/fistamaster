@extends('layouts.app2')

@section('content')
<title>Erro de Permissão</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; background-color: #f4f4f4;">

   <img src="img/Mascote_SemFundo.png" style="height:15rem;margin-top:5rem;" alt="Tekas-mascote FISTA">

<h2> Estamos a preparar o melhor FISTA de sempre...</h2>
<button onclick="goBack()" style="margin-top:3rem;" class="btn btn-light">
    <i class="fas fa-arrow-left"></i> Voltar atrás
</button>
<script>
    function goBack() {
        window.history.back();
    }
</script>
</div>


@endsection

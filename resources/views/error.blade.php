@extends('layouts.app2')

@section('content')
    <title>Erro de Permissão</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <div
        style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; background-color: #f4f4f4;">
        <i class="fas fa-exclamation-triangle fa-5x mb-4" style="color: red;"></i>
        @if (session('error'))
            <h2>{{ session('error') }}</h2>
        @endif
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

@extends('layouts.nav')

@section('content')
<script>
const nav = document.querySelector('nav')
const img = document.querySelector('img')
nav.classList.add('active');
img.setAttribute('src', 'img/logo_fista_horizontal_azul_2023_v2.png');
</script>
<div class="main footer_right">
    <div class="container single-header" style="padding-bottom: 2em;">
        <div class="page-title">
            <h1>Sorteio</h1>
        </div>
    </div>
    <div style="display: flex; justify-content: center; align-items: center;">
        <div style="padding: 2rem; border: 1px solid #F4F4F4;margin-top:2rem;margin-bottom:1rem;">

            {!! QrCode::size(250)->generate('https://fista.iscte-iul.pt/sorteio') !!}
            <div
                style="display: flex; align-items: center; justify-content: center; margin-top: 2rem; font-size: 1.5rem;">

            </div>
        </div>
    </div>
    <div class="container single-header" style="padding-bottom: 2em;">
        <div class="page-title">
            <h1>Participantes do Sorteio</h1>
        </div>
    </div>
    @if($vencedor==null)
    <div class="container">
        <div class="row">
            @foreach(App\Sorteio::where('tipo',"sorteio_pulseira")->get() as $sorteio)
            <div class="col-md-3">
                <h3>{{$sorteio->nome}}</h3>
            </div>
            @endforeach
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form method="POST" action="{{ route('resultadoSorteio') }}">
                @csrf
                <input type="hidden" name="tipo_sorteio" value="sorteio_pulseira">
                <button type="submit" class="btn-fista center" style="margin-left:23%;margin-top:5%">
                    Resultado
                </button>
            </form>
        </div>
        @else
        <h2 style="text-align:center">{{$vencedor->nome}}</h2>
        @endif
    </div>


</div>
</div>
<!--container-->

</section>



@endsection
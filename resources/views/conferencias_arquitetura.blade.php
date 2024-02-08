@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-start">
        <div class="col-lg-6 col-md-12 text-left">

            <h1 style="font-size:60px;line-height: 1.2;font-weight: bold;padding-top:8.5rem;">Ciclo de <br>conferências</h1>
        </div>
    </div>
    <!-- <h1 style="font-size:60px;color: #1ec4bd;font-weight: bold;padding-top:8.5rem;">Concurso de ideias</h1> -->
</div>


<section style="width:100%; padding:5rem 0;">
    <div style="padding-top:0px;background-color:white">
        <div class="container">
            <div class="row" style="margin:0">
                <div class="col-lg-6 col-md-12 align-self-end" >
                        <!--<button onclick="window.location.href ='https://fista.iscte-iul.pt/storage/settings/November2020/Enunciado%20%20Concurso%20de%20Ideias%202021.pdf'" class="btn-fista" style="margin-bottom:10px;display: block;margin-left: auto;margin-right: auto">Conhece o enunciado!</button>-->
                            <p style="margin-top:20px;font-size: 23px;text-align:justify;padding: 0 2% 0 2%">Saber de fazer é a exposição anual do FISTA, que conta com uma seleção de trabalhos realizados integralmente pelos
                                                                                                            alunos do 1º ao 5º ano do MIA, no âmbito da UC de Arquitetura e Projeto de Arquitetura. Acompanhando a exposição existe também
                                                                                                            um catálogo elaborado pelos alunos, compilando os diferentes elementos produzidos.</p>
                </div>
                <div class="col-lg-6 col-md-12 align-self-end">
                    <img src="/arquitetura/conferencias/2024/6.jpg" style="display:block;margin-top:30px;margin-left:auto;margin-right:auto">
                </div>
            </div>
        </div>
    </div>
</section>

<section style="width:100%;padding:5rem 0;">
    <div class="container">
        <div class="row justify-content-start">
            <h1 style="font-size:40px;line-height: 1;font-weight: bold;">Os nossos convidados</h1>
            
        </div>
        <div class="row justify-content-start py-5" style="margin-left:30px">
            <div class="col-md-4">
                <ul style="list-style-type: disc; margin-left: 1.5em;">
                    <li style="font-size:20px; color:#000000;">BUREAU</li>
                    <li style="font-size:20px; color:#000000;">Atelier do Corvo </li>
                    <li style="font-size:20px; color:#000000;">DUOMA </li>

                </ul>
            </div>
            <div class="col-md-4 ">

                <ul style="list-style-type: disc; margin-left: 1.5em;">
                    <li style="font-size:20px; color:#000000;">Ponto Atelier</li>
                    <li style="font-size:20px; color:#000000;">Pedro Maurício Borges</li>
                    <li style="font-size:20px; color:#000000;">Nuno Brandão Costa</li>

                </ul>
            </div>
            

        </div>
      
        <div class="row mt-5 justify-content-center">
            <div class="col-md-11">

                <ul class="card-slider">
                    @foreach($presentconferences as $presentconference)
                        <li>
                            <img class="carousel-image" style="width:180px;height:250px;"src="{{asset($presentconference->avatar)}}" alt="Card Title">
                            
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>


<section style="width:100%;padding:5rem 0;">
    <div class="container">
        <div class="row justify-content-start">
            <h1 style="font-size:40px;line-height: 1;font-weight: bold;">Vê os cartazes das últimas edições</h1>
        
        </div>
        
        @foreach($pastyears as $pastyear)

            <h1 style="font-size:30px;line-height: 1;font-weight: lighter;margin-left:40px; padding: 2rem 0;">Edição {{$pastyear}}</h1>
            <div class="row mt-5 justify-content-center">
                <div class="col-md-11">

                    <ul class="card-slider">
                        @foreach($lastconferences as $lastconference)
                            @if($lastconference->ano == $pastyear)
                                <li>
                                    <img class="carousel-image" style="width:180px;height:250px;"src="{{asset($lastconference->avatar)}}" alt="Card Title">
                                    
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
  
</section>           



<script>
    $(document).ready(function(){
        $('.card-slider').lightSlider({
            pager:false,
            item:5,
            responsive : [
                {
                    breakpoint:992,
                    settings: {
                        item:4,
                        slideMove:1,
                        slideMargin:6,
                    }
                },
                {
                    breakpoint:768,
                    settings: {
                        item:3,
                        slideMove:1,
                        slideMargin:6,
                    }
                },
                {
                    breakpoint:576,
                    settings: {
                        item:2,
                        slideMove:1
                    }
                }
            ]
        });
    });
</script>

@endsection
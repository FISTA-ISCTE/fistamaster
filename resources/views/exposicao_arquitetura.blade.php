@extends('layouts.app2')

@section('content')
    <style>
        .carousel-image {
            width: 180px;
            height: 250px;
        }
    </style>

    <section>

        <div class="container">
            <div class="row justify-content-start">
                <div class="col-lg-6 col-md-12 text-left">

                    <h1 style="font-size:60px;line-height: 1.2;font-weight: bold;padding-top:8.5rem;">Saber de<br>fazer</h1>
                </div>
            </div>
        </div>
    </section>


    <section style="width:100%; padding:3rem 0">
        <div class="container">
            <div style="padding-top:0px;background-color:white">
                <div class="row" style="margin:0">
                    <div class="col-lg-6 col-md-12 "
                        style="display: flex; flex-direction: column; justify-content: space-between;">
                        <h1 style="font-size:60px;line-height: 1.2;font-weight: lighter;margin-bottom:3rem;">Exposição</h1>
                        <p
                            style="margin-top:20px;font-size: 23px;text-align:justify;padding: 0 2% 0 2%; margin-bottom: 0; ">
                            Saber de fazer é a exposição anual do FISTA, que conta com uma seleção de trabalhos realizados
                            integralmente pelos alunos do 1º ao 5º ano do MIA, no âmbito da UC de Arquitetura e Projeto de
                            Arquitetura.
                            Acompanhando a exposição existe também um catálogo elaborado pelos alunos, compilando os
                            diferentes elementos produzidos</p>
                    </div>
                    <div class="col-lg-6 col-md-12 align-self-end">
                        <img src="arquitetura/Exposicao/2023/1.jpg"
                            style="display:block;margin-top:30px;margin-left:auto;margin-right:auto">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--
            TEM DE SER DESCOMENTADO E ADICIONADO QUANDO FOR ENTREGUE O MATERIAL -->

    <!-- <section style="width:100%;padding:5rem 0;">
                <div class="container">
                    <div class="row justify-content-start">
                        <h1 style="font-size:40px;line-height: 1;font-weight: bold;">Catálogo da edição anterior</h1>

                    </div>
                </div>
            </section> -->



    <section style="width:100%; padding:5rem 0;">
        <div class="container">
            <div class="row justify-content-start">
                <h1 style="font-size:40px;line-height: 1;font-weight: bold;">Vê como correu a última exposição</h1>

            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-md-11">

                    <ul class="card-slider">
                        @foreach ($lastYearWorkshops as $cartaz)
                        <li>
                            <img class="carousel-image" style="width:180px; height:250px; object-fit: cover;" src="{{ asset($cartaz->avatar) }}" alt="Card Title">
                        </li>
                        @endforeach


                    </ul>
                </div>
            </div>

        </div>
    </section>

    <script>
        $(document).ready(function() {
            $('.card-slider').lightSlider({
                pager: false,
                item: 5,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            item: 4,
                            slideMove: 1,
                            slideMargin: 6,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            item: 3,
                            slideMove: 1,
                            slideMargin: 6,
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            item: 2,
                            slideMove: 1
                        }
                    }
                ]
            });
        });
    </script>
@endsection

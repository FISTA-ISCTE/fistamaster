@extends('layouts.app2')

@section('content')

<div class="container">
    <div class="row justify-content-start">
        <div class="col-lg-6 col-md-12 text-left">

            <h1 style="font-size:60px;line-height: 1.2;font-weight: bold;padding-top:8.5rem;">Saber de <br>fazer</h1>
        </div>
    </div>
</div>


<section style="width:100%; padding:5rem 0;">
    <div style="padding-top:0px;background-color:white">
        <div class="container">
            <div class="row" style="margin:0">
                <div class="col-lg-6 col-md-12 " >
                    <h1 style="font-size:60px;line-height: 1.2;font-weight: lighter; ">Workshop</h1>
                    <p style="margin-top:20px;font-size: 23px;text-align:justify;padding: 0 2% 0 2%; position:absolute; bottom:0">O workshop Repensar o espaço traz aos alunos a possibiliade de modificarem um
                                                                                                            espaço do seu cuotidiano no Iscte. Com a mentoria de um atelier convidado, os
                                                                                                            alunos projetam e constrõem uma instalação que modifique o espaço selecionado.</p>
                </div>
                <div class="col-lg-6 col-md-12 align-self-end">
                    <img src="https://arquivo.pt/noFrame/replay/20220729095301im_/https://fista.iscte-iul.pt/img/concurso-ideias/img_ideia.png"
                        style="display:block;margin-top:30px;margin-left:auto;margin-right:auto">
                </div>
            </div>
        </div>
    </div>
</section>

<section style="width:100%; padding:5rem 0;">
    <div class="container">
        <div class="row justify-content-start">
            <h1 style="font-size:40px;line-height: 1;font-weight: bold;">Vê como correu a última edição</h1>
           
        </div>
        <div class="row mt-4 justify-content-center">
            <div class="col-md-11">

                <ul class="card-slider">
                    <li>
                        <img class="carousel-image" style="width:180px;height:250px;"src="https://placehold.co/600x300" alt="Card Title">
                        
                    </li>
                    <li>
                        <img class="carousel-image"style="width:180px;height:250px;" src="https://placehold.co/600x300" alt="Card Title">
                        
                    </li>
                    <li>
                        <img class="carousel-image" style="width:180px;height:250px;"src="https://placehold.co/600x300" alt="Card Title">
                        
                    </li>
                    <li>
                        <img class="carousel-image" style="width:180px;height:250px;"src="https://placehold.co/600x300" alt="Card Title">
                        
                    </li>
                    <li>
                        <img class="carousel-image"style="180px;height:250px;" src="https://placehold.co/600x300" alt="Card Title">
                        
                    </li>
                    <li>
                        <img class="carousel-image" style="width:180px;height:250px;" src="https://placehold.co/600x300" alt="Card Title">
                        
                    </li>
                    <li>
                        <img class="carousel-image" style="width:180px;height:250px;" src="https://placehold.co/600x300" alt="Card Title">
                        
                    </li>
                    <li>
                        <img class="carousel-image" style="width:180px;height:250px;" src="https://placehold.co/600x300" alt="Card Title">
                        
                    </li>
                    
                </ul>
            </div>
        </div>
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


@extends('layouts.nav')
@section('title', 'Edições Anteriores!')
@section('content')
<link href="{{ asset('css/media.css') }}" rel="stylesheet">
<script>
      const nav = document.querySelector('nav')
      const img = document.querySelector('img')
      nav.classList.add('active');
      img.setAttribute('src', "{{asset('img/logo_fista_horizontal_azul_2023_v2.png')}}");
  </script>


        <div class="clearfix striped-sections left">
            <div>
                <div class="container">

                <h1 style="margin-top:120px;letter-spacing:0.2;text-align:center;color:#1EC4BD;font-size:50px;text-shadow: 3px 2px #7beae5;">Explora as edições anteriores!</h1>

                <div class="wrap">
                    <div class="timeline-wrap">
                        <ul class="timeline">
                            
                            <a href="media#2017">
                                <li class="timeline-item bmw" >
                                    <div class="p-timeline-item" >
                                        <time class="p-timeline-date"> 2017</time>
                                        <div class="p-timeline-block"></div>
                                    </div>
                                </li>
                            </a>

                            <a href="media#2018">
                                <li class="timeline-item mini">
                                    <div class="p-timeline-item" >
                                        <time class="p-timeline-date"> 2018</time>
                                        <div class="p-timeline-block"></div>
                                    </div>
                                </li>
                            </a>

                            <a href="media#2019">
                                <li class="timeline-item mini" >
                                    <div class="p-timeline-item" >
                                        <time class="p-timeline-date"> 2019</time>
                                        <div class="p-timeline-block"></div>
                                    </div>
                                </li>
                            </a>

                            <a href="media#2020">
                                <li class="timeline-item bmw">
                                    <div class="p-timeline-item" >
                                        <time class="p-timeline-date"> 2020</time>
                                        <div class="p-timeline-block"></div>
                                    </div>
                                </li>
                            </a>

                            <a href="media#2021">
                                <li class="timeline-item bmw" >
                                    <div class="p-timeline-item" >
                                        <time class="p-timeline-date"> 2021</time>
                                        <div class="p-timeline-block"></div>
                                    </div>
                                </li>
                            </a>

                            <a href="media#2022">
                                <li class="timeline-item bmw" >
                                    <div class="p-timeline-item" >
                                        <time class="p-timeline-date"> 2022</time>
                                        <div class="p-timeline-block"></div>
                                    </div>
                                </li>
                            </a>

                        </ul>
                        
                    </div>
                </div>

                </div>
            </div>
        </div>
        <div class="clearfix striped-sections left">
            <div>
                <div class="container" id="2022">
                    <!-- APRESENTAÇÕES -->
                        <h1 style="margin-top: 40px;color:#666666; padding-top:20px; font-size:50px;">Apresentações</h1>
                        <p style="font-size:18px;color:#666666;">São muitos os profissionais nacionais e internacionais que já passaram pelo FISTA. Vários estão inseridos em empresas de renome mundial e apresentaram projetos inovadores e carreiras inspiradoras. Aqui podes ver algumas das apresentações!</p>            
                        
                    <!-- 2022 -->
                        <div class="row row2022" style="padding:50px 0 70px 0;">
                            <div class="col col-md-12 col-lg-4 order-sm-1 order-lg-2 order-1" style="display:flex;margin:auto;flex-direction:column;justify-content:center;align-items:center;">
                                <div>
                                    <h2 style="color:#1EC4BD;text-shadow: 5px -2px #7beae5;" class="texto2020e2018">2022</h2>
                                </div>
                                <a href="https://www.flickr.com/photos/iscteiul/albums/72177720296917280" style="width:50%; display: flex; justify-content: center; align-items: center; margin-bottom: 1rem;">
                                    <div class="fotos2022" style="display: flex; align-items: center; justify-content:center;background-color:#1EC4BD;box-shadow: 5px -2px #7beae5; border-radius: 20px;padding:0.25rem;width:100%; font-size: 1.5rem; text-align: center; color: #FFF">
                                        Fotos
                                    </div>
                                </a>
                            </div>
    
                            <div class="col col-12 col-md-12 col-lg-7 order-lg-1 order-md-2 order-2" style="display:block;margin:auto;">
                        
                            <div id="videos2022" class="carousel slide" data-interval="false" style="box-shadow: 4px 6px 15px 7px #7D7D7D">
                                    <ol class="carousel-indicators">
                                        <!--<li data-target="#videos2020" data-slide-to="0" class="active"></li>-->
                                        
                                        <!-- <li data-target="#videos2020" data-slide-to="3"></li> -->
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/aiE6tCvtQeQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>

        <div class="clearfix striped-sections right">
            <div>
                <div class="container" id="2021">
                    <!-- 2021 -->
                    <div class="row" style="margin-top: 50px;padding-bottom:80px;">

                        <div class="col col-12 col-md-12 col-lg-4" style="display:block;margin:auto;">
                            <h2 style="color:#1EC4BD;text-shadow: 5px -2px #7beae5;">2021</h2>
                        </div>

                        <div class="col col-md-12 col-lg-7" style="display:block;margin:auto;">

                            <div id="videos2021" class="carousel slide" data-interval="false" style="box-shadow: 4px 6px 15px 7px #7D7D7D">
                                <ol class="carousel-indicators">
                                    <!--<li data-target="#videos2021" data-slide-to="0" class="active"></li>-->
                                    
                                    <!-- <li data-target="#videos2021" data-slide-to="3"></li> -->
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cicTTBijw84" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <!--
                                    <div class="carousel-item">
                                        <div class="col-6 col-md-4 embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/18VPIC9PmwI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    -->
                                    
                                </div>

                               <!-- <a class="carousel-control-prev" href="#videos2020" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Anterior</span>
                                </a>
                                <a class="carousel-control-next" href="#videos2020" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Próximo</span>
                                </a>-->
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="clearfix striped-sections left">
            <div>
                <div class="container" id="2020">
                    <!-- 2020 -->
                    <div class="row row2020" style="padding:50px 0 70px 0;">

                        <div class="col col-md-12 col-lg-4 order-sm-1 order-lg-2 order-1" style="display:block;margin:auto;">
                            <h2 style="color:#1EC4BD;text-shadow: 5px -2px #7beae5;" class="texto2020e2018">2020</h2>
                        </div>

                        <div class="col col-12 col-md-12 col-lg-7 order-lg-1 order-md-2 order-2" style="display:block;margin:auto;">
                    
                        <div id="videos2020" class="carousel slide" data-interval="false" style="box-shadow: 4px 6px 15px 7px #7D7D7D">
                                <ol class="carousel-indicators">
                                    <!--<li data-target="#videos2020" data-slide-to="0" class="active"></li>-->
                                    
                                    <!-- <li data-target="#videos2020" data-slide-to="3"></li> -->
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7rzzwawyz78" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    

                                    <!--
                                    <div class="carousel-item">
                                        <div class="col-6 col-md-4 embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/18VPIC9PmwI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    -->
                                    
                                </div>

                               <!-- <a class="carousel-control-prev" href="#videos2020" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Anterior</span>
                                </a>
                                <a class="carousel-control-next" href="#videos2020" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Próximo</span>
                                </a>-->
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix striped-sections right">
            <div>
                <div class="container" id="2019">                

                    <!-- 2019 -->
                    <div class="row row2019">

                        <div class="col col-12 col-md-12 col-lg-4" style="display:block;margin:auto;">
                            <h2 style="color:#1EC4BD;text-shadow: 5px -2px #7beae5;">2019</h2>
                        </div>

                        <div class="col col-md-12 col-lg-7" style="display:block;margin:auto;">
                    
                            <div id="videos2019" class="carousel slide" data-interval="false" style="box-shadow: 4px 6px 15px 7px #7D7D7D">
                                <ol class="carousel-indicators">
                                    <li data-target="#videos2019" data-slide-to="0" class="active"></li>
                                    <li data-target="#videos2019" data-slide-to="1"></li>
                                    <li data-target="#videos2019" data-slide-to="2"></li>
                                    <!-- <li data-target="#videos2019" data-slide-to="3"></li> -->
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/whi8FWV8R6g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Wgmm6ib4UF8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/TAgu21-4neQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <!--
                                    <div class="carousel-item">
                                        <div class="col-6 col-md-4 embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/18VPIC9PmwI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    -->
                                </div>

                                <a class="carousel-control-prev" href="#videos2019" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Anterior</span>
                                </a>
                                <a class="carousel-control-next" href="#videos2019" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Próximo</span>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

        
        <div class="clearfix striped-sections left">
            <div>
                <div class="container" id="2018">                

                    <!-- 2018 -->
                    <div class="row" style="padding:50px 0 70px 0;">

                        <div class="col col-md-12 col-lg-4 order-sm-1 order-lg-2 order-1" style="display:block;margin:auto;">
                            <h2 style="color:#1EC4BD;text-shadow: 5px -2px #7beae5;" class="texto2020e2018">2018</h2>
                        </div>

                        <div class="col col-12 col-md-12 col-lg-7 order-lg-1 order-md-2 order-2" style="display:block;margin:auto;">

                            <div id="videos2018" class="carousel slide" data-interval="false" style="box-shadow: 4px 6px 15px 7px #7D7D7D">
                                <ol class="carousel-indicators">
                                    <li data-target="#videos2018" data-slide-to="0" class="active"></li>
                                    <li data-target="#videos2018" data-slide-to="1"></li>
                                    <li data-target="#videos2018" data-slide-to="2"></li>
                                    <!-- <li data-target="#videos2018" data-slide-to="3"></li> -->
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2v8IXZLdxmg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/W6K4E-fgh2U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5g1zUm5Bt7U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <!--
                                    <div class="carousel-item">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/LKaB3uPqEzs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    -->

                                </div>

                                <a class="carousel-control-prev" href="#videos2018" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Anterior</span>
                                </a>
                                <a class="carousel-control-next" href="#videos2018" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Próximo</span>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        

        <div class="clearfix striped-sections right">
            <div>
                <div class="container" id="2017" style="margin-top:20px">

                    <!-- Quick View -->
                    <h1 style="color:#666666;font-size:50px;">Quick View</h1>
                    <p style="font-size:18px;color:#666666;">Sem tempo a perder, deixamos-te aqui um conjunto de vídeos rápidos! Resumos do mais importante de cada participação e declarações inéditas dos oradores numa entrevista exclusiva.</p>

                    <!-- 2017 -->
                    <div class="row" style="margin-top: 50px;padding-bottom:60px;">

                        <div class="col col-12 col-md-12 col-lg-4 order-lg-2 order-1" style="display:block;margin:auto;">
                            <h2 class="texto2019e2017" style="color:#1EC4BD;text-shadow: 5px -2px #7beae5;">2017</h2>
                        </div>

                        <div class="col col-md-12 col-lg-7 order-lg-1 order-2" style="display:block;margin:auto;">

                            <div id="videos2017" class="carousel slide" data-interval="false" style="box-shadow: 4px 6px 15px 7px #7D7D7D">
                                <ol class="carousel-indicators">
                                    <li data-target="#videos2017" data-slide-to="0" class="active"></li>
                                    <li data-target="#videos2017" data-slide-to="1"></li>
                                    <li data-target="#videos2017" data-slide-to="2"></li>
                                    <!-- <li data-target="#videos2017" data-slide-to="3"></li> -->
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/os6Kg1XURFE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PV5Cb0-5Eq4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Pd7DmtGFwaY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <!--
                                    <div class="carousel-item">
                                        <div class="col-6 col-md-4 embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VO9VVKGdrps" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    -->
                                </div>

                                <a class="carousel-control-prev" href="#videos2017" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Anterior</span>
                                </a>
                                <a class="carousel-control-next" href="#videos2017" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Próximo</span>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="clearfix striped-sections left">
            <div>
                <div class="container">

                    <!-- YOUTUBE -->
                    <h4 style="margin-top: 40px; color:#666666; font-size:30px;">Queres ver mais?</h4>
                    <h4 style="color:#666666;">Visita o nosso canal no Youtube para mais videos.</h4>
                    <h4 style="color:#666666;">Não te esqueças de subscrever!</h4>
                    
                    <div style="text-align:center;width:100%;">
                        <a href="https://www.youtube.com/channel/UCCNbJIiznD05DrHuhwe-InQ" target="_blank">
                            <img src="/img/media/youtube.png" style="width:222px;"> <!-- width="20%" -->
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="clearfix striped-sections right" style="margin-bottom:-10%;">
            <div>
                <div class="container textcom">
                    <!-- COMENTÁRIOS -->
                    <h1 class="comentarios" style="color:#666666; font-size:50px;">Comentários ao FISTA</h1>
                </div>

                <div class="container containercom">
                    <div class="row rowcom">

                        <div class="col col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="face face1">
                                <div class="content">
                                    <div class="icon">
                                        <img src="/img/media/pcguia.jpg" aria-hidden="true" style="width:65%" class="imgcom"></img>
                                    </div>
                                </div>
                            </div>
                            <div class="face face2">
                                <div class="content">
                                    <h3>
                                        <a href="https://www.google.com/amp/s/www.pcguia.pt/2020/03/questoes-relacionadas-com-ciberseguranca-vao-estar-no-centro-do-fista-20/amp/" target="_blank">Saber mais</a>
                                        <img src="/img/media/external-link.svg" style="width:4.5%;vertical-align:top;"></img>
                                    </h3>
                                    <p style="margin: 0 3%;text-shadow: 1px 1px #4e4e4e;">"A nova edição do FISTA pretende aproximar os estudantes da realidade empresarial ao partilhar experiências tecnológicas e de arquitectura e ainda dar a conhecer os desafios das organizações."</p>
                                </div>
                            </div>
                        </div>
                        </div>
                        
                        <div class="col col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="face face1">
                                <div class="content">
                                    <div class="icon">
                                        <img src="/img/media/warpcom.jpeg" aria-hidden="true" style="width:65%" class="imgcom"></img>
                                    </div>
                                </div>
                            </div>
                            <div class="face face2">
                                <div class="content">
                                    <h3>
                                        <a href="https://warpcom.com/fista-20/" target="_blank">Saber mais</a>
                                        <img src="/img/media/external-link.svg" style="width:4.5%;vertical-align:top;"></img>
                                    </h3>
                                    <p style="margin: 0 3%;text-shadow: 1px 1px #4e4e4e;">"A participação no FISTA foi extremamente positiva e, com certeza, se repetirá. É sempre um prazer contribuir para fomentar a proximidade entre o mundo académico e empresarial."</p>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="col col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="face face1">
                                <div class="content">
                                    <div class="icon">
                                        <img src="/img/media/caixamagica.png" aria-hidden="true" style="width:65%" class="imgcom"></img>
                                    </div>
                                </div>
                            </div>
                            <div class="face face2">
                                <div class="content">
                                    <h3>
                                        <a href="https://www.caixamagica.pt/pt-pt/noticias/fista-2020" target="_blank">Saber mais</a>
                                        <img src="/img/media/external-link.svg" style="width:4.5%;vertical-align:top;"></img>
                                    </h3>
                                    <p style="margin: 0 3%;text-shadow: 1px 1px #4e4e4e;">"O contacto direto com os diferentes alunos revelou-se bastante benéfico, pois ajudou-nos a compreender e identificar melhor quais as suas principais motivações e áreas de interesse..."</p>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="col col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="face face1">
                                <div class="content">
                                    <div class="icon">
                                        <img src="/img/media/dinheirovivo.jpg" aria-hidden="true" style="width:65%" class="imgcom"></img>
                                    </div>
                                </div>
                            </div>
                            <div class="face face2">
                                <div class="content">
                                    <h3>
                                        <a href="https://www.google.com/amp/s/www.dinheirovivo.pt/iniciativas/fista-feira-dedicada-a-tecnologia-e-motor-de-contratacoes-de-universitarios/%3famp=1" target="_blank">Saber mais</a>
                                        <img src="/img/media/external-link.svg" style="width:4.5%;vertical-align:top;"></img>
                                    </h3>
                                    <p style="margin: 0 3%;text-shadow: 1px 1px #4e4e4e;">"É descrita como o “motor de contratações” dos estudantes dos cursos tecnológicos do instituto universitário."</p>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="col col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="face face1">
                                <div class="content">
                                    <div class="icon">
                                        <img src="/img/media/itinsight.png" aria-hidden="true" style="width:65%" class="imgcom"></img>
                                    </div>
                                </div>
                            </div>
                            <div class="face face2">
                                <div class="content">
                                    <h3>
                                        <a href="https://www.itinsight.pt/news/eventos/fista-a-chave-desta-decada-e-a-ciberseguranca" target="_blank">Saber mais</a>
                                        <img src="/img/media/external-link.svg" style="width:4.5%;vertical-align:top;"></img>
                                    </h3>
                                    <p style="margin: 0 3%;text-shadow: 1px 1px #4e4e4e;">"O FISTA pretende aproximar os estudantes da realidade empresarial ao partilhar experiências tecnológicas e de arquitetura e dar a conhecer os desafios das organizações."</p>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="col col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="face face1">
                                <div class="content">
                                    <div class="icon">
                                        <img src="/img/FISTA23_AZUL.png" aria-hidden="true" style="width:65%" class="imgcom"></img>
                                    </div>
                                </div>
                            </div>
                            <div class="face face2">
                                <div class="content">
                                    <h3>
                                        <a href="https://www.instagram.com/fista.iscte" target="_blank" style="font-size:1.25rem">Saber mais</a>
                                        <img src="/img/media/external-link.svg" style="width:4.5%;vertical-align:top;"></img>
                                    </h3>
                                    <p style="margin: 0 3%;text-shadow: 1px 1px #4e4e4e;">Segue-nos no Instagram para acompanhares todas as novidades desta edição do FISTA!</p>
                                </div>
                            </div>
                        </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    @endsection
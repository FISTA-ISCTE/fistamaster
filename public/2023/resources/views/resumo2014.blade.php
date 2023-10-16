@extends('layouts.nav')
@section('title', 'FISTA14 Resumo')
@section('content')
<script>
      const nav = document.querySelector('nav')
      const img = document.querySelector('img')
      nav.classList.add('active');
      img.setAttribute('src', "{{asset('img/logo_fista_horizontal_azul_2023_v2.png')}}");
  </script>

<style>
    .background-img {
        background-position-y: 50%;
        height: 20rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .logo {
        position:relative;
        background-size: cover;
        background-position: center;
        width:10rem;
        height:10rem
    }

    .sponsors {
        margin-top: 1rem;
        text-align: center;
    }

    .platinum-sponsor, .gold-sponsor {
        margin-top: 1rem;
    }

    .gold-sponsor-list {
        display:flex;
        flex-direction: row;
        justify-content: center;
        align-content: center;
    }

    .concurso-ideias-btn > a {
        background-color: #fff;
        border: solid 3px;
        color: #141D27 !important;
        position: relative;
        display: inline-block;
        text-align: center;
        border-radius: 0.5em;
        text-decoration: none;
        padding: 0.65em 3em 0.65em 3em;
        border: 0;
        cursor: pointer;
        outline: 0;
        text-decoration: none !important;
    }

    .programa2014 {
        margin-top: 2rem;
    }

    .dia-selector {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }
    .selector {
        padding: 1rem;
        border-bottom: 1px solid black;
        width: 15rem;
        text-align: center;
    }

    .selector.active {
        border-top: 1px solid black;
        border-left: 1px solid black;
        border-right: 1px solid black;
        border-bottom: 0px;
        color: #8CC870;
    }

    .time {
        font-size: 1rem;
    }

    .horario {
        display: none;
    }

    .horario.active {
        display: block;
    }

    .oradores_grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(4, 4fr);
        grid-column-gap: 16px;
        grid-row-gap: 16px;
    }   

    .div1 { grid-area: 1 / 1 / 2 / 2; }
    .div2 { grid-area: 1 / 2 / 2 / 3; }
    .div3 { grid-area: 1 / 3 / 2 / 4; }
    .div4 { grid-area: 1 / 4 / 2 / 5; }
    .div5 { grid-area: 2 / 1 / 3 / 2; }
    .div6 { grid-area: 2 / 2 / 3 / 3; }
    .div7 { grid-area: 2 / 3 / 3 / 4; }
    .div8 { grid-area: 2 / 4 / 3 / 5; }
    .div9 { grid-area: 3 / 1 / 4 / 2; }
    .div10 { grid-area: 3 / 2 / 4 / 3; }
    .div11 { grid-area: 3 / 3 / 4 / 4; }
    .div12 { grid-area: 3 / 4 / 4 / 5; }
    .div13 { grid-area: 4 / 1 / 5 / 2; }
    .div14 { grid-area: 4 / 2 / 5 / 3; }
    .div15 { grid-area: 4 / 3 / 5 / 4; }
    .div16 { grid-area: 4 / 4 / 5 / 5; }

    
</style>

<div class="container" style="padding-top:8rem; padding-bottom: 20rem;">
    <div class="background-img" style="background-image: url({{ asset('/img/resumos/2014/background.jpeg') }})">
        <div class="logo" style="background-image:url({{ asset('/img/resumos/2014/logo_2014.png') }})"></div>
        <p style="color: #FFF; font-size:1.25rem; margin-top: 0.5rem;">Forum of ISCTE-IUL School of Technology and Architecture, <b>12 e 13 de Março</b></p>
    </div>
    <div class="sponsors">
        <div class="main-sponsor">
            <p>Main Sponsor</p>
            <div class="deloitte-sponsor" style="background-image: url({{ asset('/img/resumos/2014/deloitte_logo.jpeg') }});background-size: contain;background-repeat:no-repeat; background-position: center;height: 1.75rem;"></div>
        </div>
        <div class="platinum-sponsor">
            <p>Platinum Sponsor</p>
            <div class="pwc-sponsor" style="background-image: url({{ asset('/img/resumos/2014/pwc_logo.jpeg') }});background-size: contain;background-repeat:no-repeat; background-position: center; height:3rem;"></div>
        </div>
        <div class="gold-sponsor">
            <p>Gold Sponsors</p>
            <div class="gold-sponsor-list" style="height: 2rem;">
                <div class="fixe-ads-sponsor" style="background-image: url({{ asset('/img/resumos/2014/fixeads_logo.jpeg') }});background-size: contain;background-repeat:no-repeat; background-position: center; width:6rem; margin-right: 0.5rem;"></div>
                <div class="opensoft-sponsor" style="background-image: url({{ asset('/img/resumos/2014/opensoft_logo.jpeg') }});background-size: contain;background-repeat:no-repeat; background-position: center; width:6rem; margin-right: 0.5rem;"></div>
                <div class="caixa-magica-sponsor" style="background-image: url({{ asset('/img/resumos/2014/caixa_magica_logo.jpeg') }});background-size: contain;background-repeat:no-repeat; background-position: center; width:6rem; margin-right: 0.5rem;"></div>
                <div class="innowave-sponsor" style="background-image: url({{ asset('/img/resumos/2014/innowave_logo.jpeg') }});background-size: contain;background-repeat:no-repeat; background-position: center; width:6rem; margin-right: 0.5rem;"></div>
                <div class="bee-sponsor" style="background-image: url({{ asset('/img/resumos/2014/bee_engineering_logo.jpeg') }});background-size: contain;background-repeat:no-repeat; background-position: center; width:6rem; margin-right: 0.5rem;"></div>
                <div class="ieee-sponsor" style="background-image: url({{ asset('/img/resumos/2014/ieee_logo.jpeg') }});background-size: contain;background-repeat:no-repeat; background-position: center; width:6rem;"></div>
            </div>
        </div>
    </div>
    <div class="concurso-ideias" style="background-color:#141D27; color: #F0F4F4; margin-top: 2rem; padding: 2rem; text-align:center;">
        <div style="background-image: url({{ asset('/img/resumos/2014/sleeping_project.jpeg') }});background-size: contain;background-repeat:no-repeat; background-position: center; height: 15rem;"></div>
        <p style="font-size: 1rem; line-height: 1.6; padding-top: 1rem;">O FISTA em parceria com a Escola de Tecnologias e Arquitectura e o VFABLAB, desafia-te a criares um Módulo Móvel para Descanso Temporário que envolva elementos das duas áreas de estudo.
            Junta-te a outros colegas da Escola de Tecnologias e Arquitectura e participa!
            Temos prémios no valor de 1000€ para os vencedores e a possibilidade de construção da melhor proposta!
        </p>
        <div class="concurso-ideias-btn">
            <a href="{{ asset('/img/resumos/2014/regulamento-fista-concurso.pdf') }}">
                    Sabe Mais!
            </a>
        </div>
    </div>
    <div class="programa2014">
        <div class="dia-selector">
            <div class="dia1 selector active" onclick="selectDia(1)">12 de Março</div>
            <div class="dia2 selector" onclick="selectDia(2)">13 de Março</div>
        </div>
        <div class="container dia1 horario active" style="text-align: center; width: 75%; margin-top: 1rem;">
            <div class="row" style="height: auto !important; width: auto !important; margin-top: 1rem !important; padding: 1rem;">
                <div class="col-md-4 col-sm-4 time"  style="display: flex; align-items: center; justify-content: center;">
                    9:00
                </div>
                <div class="col-md-8" style="display: flex; align-items: center; justify-content: center;">
                    <p style="font-size: 1.1rem;">Recepção</p>
                </div>
            </div>
            <div class="row" style="height: auto !important; width: auto !important; margin-top: 1rem;  padding: 1rem; background-color: #FBFBFB">
                <div class="col-md-4 col-sm-4 time" style="display: flex; align-items: center; justify-content: center;">
                    9:30
                </div>
                <div class="col-md-8" style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
                    <p style="font-size: 1.1rem;">Sessão de Abertura (Grande Auditório)</p>
                    <b>Luís Reto</b>
                
                    Reitor ISCTE - Instituto Universitário de Lisboa
                </div>
            </div>
            <div class="row" style="height: auto !important; width: auto !important; margin-top: 1rem;  padding: 1rem;">
                <div class="col-md-4 col-sm-4" style="display: flex; align-items: center; justify-content: center;">
                    9:45
                </div>
                <div class="col-md-8" style="display: flex; align-items: center; justify-content: center; flex-direction: column">
                    <p style="font-size: 1.1rem;">Sapo</p>
                    <b>Celso Martinho</b>
                    CTO
                    <p>Chairperson Américo Correia</p>
                </div>
            </div>
            <div class="row" style="height: auto !important; width: auto !important; margin-top: 1rem;  padding: 1rem; background-color: #FBFBFB">
                <div class="col-md-4 col-sm-4 time" style="display: flex; align-items: center; justify-content: center;">
                    10:15
                </div>
                <div class="col-md-8" style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
                    <p style="font-size: 1.1rem;">Microsoft</p>
                    <b>Alexandre Pinho</b>
                
                    Diretor do Setor Público
                </div>
            </div>
            <div class="row" style="height: auto !important; width: auto !important; margin-top: 1rem;  padding: 1rem;">
                <div class="col-md-4 col-sm-4 time" style="display: flex; align-items: center; justify-content: center;">
                    10:45
                </div>
                <div class="col-md-8" style="display: flex; align-items: center; justify-content: center; flex-direction: column">
                    <p style="font-size: 1.1rem;">Coffee Break por</p>
                    <div style="background-image:url({{ asset('/img/resumos/2014/pwc_logo.jpeg') }}); background-size: cover; width: 2rem; height:2rem;"></div>
                </div>
            </div>
            <div class="row" style="height: auto !important; width: auto !important; margin-top: 1rem;  padding: 1rem; background-color: #FBFBFB">
                <div class="col-md-4 col-sm-4 time" style="display: flex; align-items: center; justify-content: center;">
                    11:00
                </div>
                <div class="col-md-8" style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
                    <p style="font-size: 1.1rem;">Comunicação e Segurança (Grande Auditório)</p>
                    <b>Deloite</b>
                    <b>IBM</b>
                    <b>InnoWave</b>
                    <b>IEEE + NAU</b>
                    <p>Chairperson Américo Correia</p>
                </div>
            </div>
            <div class="row" style="height: auto !important; width: auto !important; margin-top: 1rem;  padding: 1rem;">
                <div class="col-md-4 col-sm-4 time" style="display: flex; align-items: center; justify-content: center;">
                    12:30
                </div>
                <div class="col-md-8" style="display: flex; align-items: center; justify-content: center; flex-direction: column">
                    <p style="font-size: 1.1rem;">Pausa para almoço</p>
                </div>
            </div>
            <div class="row" style="height: auto !important; width: auto !important; margin-top: 1rem;  padding: 1rem; background-color: #FBFBFB">
                <div class="col-md-4 col-sm-4 time" style="display: flex; align-items: center; justify-content: center;">
                    14:00
                </div>
                <div class="col-md-8" style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
                    <p style="font-size: 1.1rem;">Workshops</p>
                    <b>Google Students (B103 14:00)</b>
                    <b>Novabase (C104 14:00)</b>
                    <b>Agap2 (C104 15:30)</b>
                    <b>Multicert (B103 15:30)</b>
                    <b>Caixa Mágica (C104 17:00)</b>
                    <b>Samsung (B104 17:00)</b>
                </div>
            </div>
            <div class="row" style="height: auto !important; width: auto !important; margin-top: 1rem;  padding: 1rem;">
                <div class="col-md-4 col-sm-4" style="display: flex; align-items: center; justify-content: center;">
                    16:00
                </div>
                <div class="col-md-8" style="display: flex; align-items: center; justify-content: center; flex-direction: column">
                    <p style="font-size: 1.1rem;">Aula Aberta (Grande Auditório)</p>
                    <b>Arq. Josep Llinás</b>
                </div>
            </div>
        </div>
        <div class="container dia2 horario" style="text-align: center; width: 75%; margin-top: 1rem;">
            <div class="row" style="height: auto !important; width: auto !important; margin-top: 1rem !important; padding: 1rem;">
                <div class="col-md-4 col-sm-4 time"  style="display: flex; align-items: center; justify-content: center;">
                    9:00
                </div>
                <div class="col-md-8" style="display: flex; align-items: center; justify-content: center;">
                    <p style="font-size: 1.1rem;">Recepção</p>
                </div>
            </div>
            <div class="row" style="height: auto !important; width: auto !important; margin-top: 1rem;  padding: 1rem; background-color: #FBFBFB">
                <div class="col-md-4 col-sm-4 time" style="display: flex; align-items: center; justify-content: center;">
                    9:30
                </div>
                <div class="col-md-8" style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
                    <p style="font-size: 1.1rem;">Sessão de Abertura (Grande Auditório)</p>
                    <b>Ricardo Fonseca</b>
                
                    Diretor ISTA
                </div>
            </div>
            <div class="row" style="height: auto !important; width: auto !important; margin-top: 1rem;  padding: 1rem;">
                <div class="col-md-4 col-sm-4" style="display: flex; align-items: center; justify-content: center;">
                    9:45
                </div>
                <div class="col-md-8" style="display: flex; align-items: center; justify-content: center; flex-direction: column">
                    <p style="font-size: 1.1rem;">Cisco</p>
                    <b>Carlos Brazão</b>
                    Director Sénior de Vendas e Marketing da Cisco Capital para a Europa, Médio Oriente, África e Rússia
                    <p>Chairperson Francisco Cercas</p>
                </div>
            </div>
            <div class="row" style="height: auto !important; width: auto !important; margin-top: 1rem;  padding: 1rem; background-color: #FBFBFB">
                <div class="col-md-4 col-sm-4 time" style="display: flex; align-items: center; justify-content: center;">
                    10:15
                </div>
                <div class="col-md-8" style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
                    <p style="font-size: 1.1rem;">Nokia Solutions Networks</p>
                    <b>Marta Almeida</b>
                
                    Gestora de Conta
                </div>
            </div>
            <div class="row" style="height: auto !important; width: auto !important; margin-top: 1rem;  padding: 1rem;">
                <div class="col-md-4 col-sm-4 time" style="display: flex; align-items: center; justify-content: center;">
                    10:45
                </div>
                <div class="col-md-8" style="display: flex; align-items: center; justify-content: center; flex-direction: column">
                    <p style="font-size: 1.1rem;">Coffee Break</p>
                </div>
            </div>
            <div class="row" style="height: auto !important; width: auto !important; margin-top: 1rem;  padding: 1rem; background-color: #FBFBFB">
                <div class="col-md-4 col-sm-4 time" style="display: flex; align-items: center; justify-content: center;">
                    11:00
                </div>
                <div class="col-md-8" style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
                    <p style="font-size: 1.1rem;">Outsourcing (Grande Auditório)</p>
                    <b>Deloite</b>
                    <b>RUPEAL</b>
                    <b>Dell</b>
                    <b>Novabase</b>
                    <p>Chairperson Francisco Cercas</p>
                </div>
            </div>
            <div class="row" style="height: auto !important; width: auto !important; margin-top: 1rem;  padding: 1rem;">
                <div class="col-md-4 col-sm-4 time" style="display: flex; align-items: center; justify-content: center;">
                    12:30
                </div>
                <div class="col-md-8" style="display: flex; align-items: center; justify-content: center; flex-direction: column">
                    <p style="font-size: 1.1rem;">Pausa para almoço</p>
                </div>
            </div>
            <div class="row" style="height: auto !important; width: auto !important; margin-top: 1rem;  padding: 1rem; background-color: #FBFBFB">
                <div class="col-md-4 col-sm-4 time" style="display: flex; align-items: center; justify-content: center;">
                    14:00
                </div>
                <div class="col-md-8" style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
                    <p style="font-size: 1.1rem;">Debate (Grande Auditório)</p>
                    <p style="font-size: 1.1rem;">Académicos, empresas e empreendedores discutem o futuro</p>
                    <b>Miguel Duarte</b>
                    <b>Tiago Marques</b>
                    <b>Nuno Teodoro</b>
                    <b>João Morgado</b>
                    <b>Miguel Carreiro</b>
                </div>
            </div>
            <div class="row" style="height: auto !important; width: auto !important; margin-top: 1rem;  padding: 1rem;">
                <div class="col-md-4 col-sm-4" style="display: flex; align-items: center; justify-content: center;">
                    16:00
                </div>
                <div class="col-md-8" style="display: flex; align-items: center; justify-content: center; flex-direction: column">
                    <p style="font-size: 1.1rem;">Apresentação ISTA</p>
                    <b>Luís Ducla Soares (DCTI)</b>
                    <b>Sara Elloy (DAU)</b>
                </div>
            </div>
            <div class="row" style="height: auto !important; width: auto !important; margin-top: 1rem;  padding: 1rem;">
                <div class="col-md-4 col-sm-4 time" style="display: flex; align-items: center; justify-content: center;">
                    16:15
                </div>
                <div class="col-md-8" style="display: flex; align-items: center; justify-content: center; flex-direction: column">
                    <p style="font-size: 1.1rem;">Entrega de Diplomas e Porto de Honra</p>
                </div>
            </div>
        </div>
    </div>
    <!--
    <div class="oradores" style="margin-top: 2rem; text-align: center;">
        <div class="header" style="font-size: 2rem;">
            Oradores
        </div>
        <div class="oradores_grid">
            <div class="div1">
                <div class="div1 orador" style="background-image: url({{ asset('/img/resumos/2014/alexandre_pinho.jpeg') }}); background-size: cover; width: 100%; height:100%;">
                </div>
                <p>Alexandre Pinho</p>
            </div>
            <div class="div2"> </div>
            <div class="div3"> </div>
            <div class="div4"> </div>
            <div class="div5"> </div>
            <div class="div6"> </div>
            <div class="div7"> </div>
            <div class="div8"> </div>
            <div class="div9"> </div>
            <div class="div10"> </div>
            <div class="div11"> </div>
            <div class="div12"> </div>
            <div class="div13"> </div>
            <div class="div14"> </div>
            <div class="div15"> </div>
            <div class="div16"> </div>
            </div>
    </div>
    -->
</div>

<script>

    function selectDia(dia) {
       
        if(dia == 1) {
            console.log(1);
            $('.dia1.selector').addClass('active');
            $('.dia2.selector').removeClass('active');
            $('.dia1.horario').css('display','block');
            $('.dia2.horario').css('display', 'none');
        }
        if(dia == 2) {
            $('.dia2.selector').addClass('active');
            $('.dia1.selector').removeClass('active');
            $('.dia2.horario').css('display','block');
            $('.dia1.horario').css('display', 'none');
        }
    }
</script>
@endsection
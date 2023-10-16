@extends('layouts.nav')
@section('title', 'FISTA22 Resumo')
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

    .selector.active {
        color: #1EC4BD;
    }

    .selector {
        color: #7BEAE5;
    }

    .imgEmpresaDiamond {
      display: inline-block;
      padding: 0 20px;
      margin-bottom: 10%;
      margin-top:10%;
      height: 140px;
      position: relative;
    }

    .imgEmpresaPremium {
      display: inline-block;
      padding: 0 20px;
      margin-bottom: 10%;
      margin-top:10%;
      height: 120px;
      position: relative;
    }

    .imgEmpresaGold {
      display: inline-block;
      padding: 0 20px;
      margin-bottom: 10%;
      margin-top:10%;
      height: 100px;
      position: relative;
    }

    .imgEmpresaSilver {
      display: inline-block;
      padding: 0 20px;
      margin-bottom: 7%;
      margin-top:7%;
      height: 80px;
      position: relative;
    }
    .progress {
      position: relative;
      font-size:  xx-large;
    }
    .flex-well-container{
        display: flex;
        width:100%;
    }
    .progress img {
      position: absolute;
      height:50px;
    }
    /* .progress{
      font-size: xx-large;
    } */
    .title{
        font-family:'Myriad Pro 1';
        font-size:55px;
        margin-top:auto;
        margin-bottom:5%;    
        color:#666666;       
    }
    .title2{
        font-family:'Myriad Pro 1';
        font-size:60px;
        color:#6cb743;
        font-weight:lighter !important;
        letter-spacing:0.3px;
        line-height:120%;
        margin-top:2%;  
        margin-right:140px;        
    }

    .inputstyle{
  
        border-style: none none outset none;
        border-color:whitesmoke;
        font-size:20px;
        width:100%;
        padding-bottom:7px;
        outline:none;
    }

    .txarea {
     border:2px solid whitesmoke;
     outline:none;
     font-size:20px;width:100%; 
     border-style: none none outset none;
     overflow:auto;
     padding-bottom:5%;
    }

    progressBarIn{
        width: 75%;
    }

    @media only screen and (max-width: 582px) {
        .title{
            font-family:'Myriad Pro 1';
            font-size:55px;
            color:#666666;
            margin-top:auto;
            margin-bottom:10%;
            text-align:center;
                         
        }
        .form-align{
            margin:auto;
            margin-top:20%;
            text-align:center;
                         
        }
        .title2{
            font-family:'Myriad Pro 1';
            font-size:52px;
            color:#6cb743;
            font-weight:lighter !important;
            letter-spacing:0.3px;
            margin-top:15%;  
            margin-left:auto;
            margin-right:auto;
            text-align:center;
                         
        }

  
    }

    
  details {
    width: 75%;
    min-height: 6px;
    max-width: 700px;
    padding: 25px 70px 25px 25px;
    margin: 0 auto;
    position: relative;
    font-size: 20px;
    border: 1px solid rgba(0,0,0,.1);
    border-radius: 20px;
    color:#6cb743;
    border-style: none none outset none;
    animation: sweep .5s ease-in-out;
  }

  @keyframes sweep {
    0%    {opacity: 0; margin-top: 10px}
    100%  {opacity: 1; margin-top: 0px}
  }

  details + details {
    margin-top: 60px;
    animation: sweep .5s ease-in-out;
  

  }

  details[open] {
    min-height: 50px;
    background-color: white;
    animation: sweep .5s ease-in-out;
    
    transition-duration:0.4s;

    
  }

  details p {
    color: #96999d;
    font-weight: 300;
    transition: .5s ease;
    margin-top:2%;
    margin-bottom:-1%;
  }

  details[open] .control-icon-close {
    display: initial;
    animation: sweep .5s ease-in-out;

  
  }

  details[open] .control-icon-expand {
    display: none;
    transition: .5s ease;
    animation: sweep .5s ease-in-out;

  }


  summary {

    font-weight: 500;
    text-align:left;
    transition: .5s ease;
  
  }

  summary:focus {
    outline: none;
    transition: .5s ease;
    
  }

  summary:focus::after {
    content: "";
    height: 60%;
    width: 100%;
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    transition: .5s ease;

  }

  summary::-webkit-details-marker {
    display: none;
    transition: .5s ease;
  }

  @media only screen and (max-width: 1010px) {
            .search-group-align {

                position:relative;
                width:100%;
                height:50px;
                margin-top:auto;
                margin-bottom:auto;
                margin-left: auto;
                margin-right:auto;

            }

            .workshop-title{
                    font-family:'Myriad Pro 1';
                    font-size:55px;
                    color:#949494;
                    margin-top:auto;
                    text-align:center;
            }
        }

        p.spots_left {
            position: absolute;
            top: 10px;
            right: 25px;
            border-radius: 7px;
            background: white;
            line-height: 18px;
            margin: 0;
            color:#333333;
            font-weight: bold;
            font-size: 1rem;
            padding: 4px 7px;
        }
        .cont{
            overflow-x:hidden;
            -webkit-overflow-scrolling: touch;
            width:1110px;
        }

        .line {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
            width: 100%;
        }

        .card{
            background-color:#fff;
            display: flex;
            max-width:925px;
            min-height:100%;
            box-shadow: 0 5px 5px rgba(0,0,0,0.2);
        }

        h3{
            font-size:18px;
            font-weight:bold;
        }

        h4{
            font-size:18px;
        }

        h5{
            font-size:15px;
        }

        .hora{
            position: relative;
        }

        .hora2{
            position: absolute;
            top : 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform    : translate(-50%, -50%);
        }

        .cardTECH{
            border-style:solid;
            border-color:#1d47c2;
            border-width:1px;
            color:#1d47c2;
            width:45px;
            height:20px;
            position: relative;
            border-radius:5px;
            float:right;
        }

        .cardARQ{
            border-style:solid;
            border-color:#f97203;
            border-width:1px;
            color:#f97203;
            width:40px;
            height:20px;
            position: relative;
            border-radius:5px;
            float:right;
        }

        .cardProg{
            -webkit-box-shadow: 2px 2px 0px 2px #1EC4BD; 
            box-shadow: 2px 2px 1px 2px #1EC4BD;        
            border-radius: 5px;
            border-width: 2px 2px 2px 2px;
            justify-content: center;
            align-items: center;
            height:100%;
            padding: 10px;
        }

        .cardTipo{
            padding-right:5px;
        }

        .tipo{
            position: absolute;
            top : 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform    : translate(-50%, -50%);
            font-size:16px;
        }

        .col-hora{
            max-width:92.5px;
            margin-left:46.25px;
        }

        .logo{
            width:27.78px;
            height:27.78px;
        }

        .title{
            font-family:'Myriad Pro 1';
            font-size:70px;
            color:#666666;
            padding-top:5rem;
        }
        .horario {
            display:none;
        }
        .horario.active {
            display:grid;
        }
        .card {
            box-shadow: 0 5px 5px rgba(0,0,0,0.2);
            background-color: transparent;
            padding-top: 20px;
        }
        .card:hover h3, .card:hover h4, .card:hover, .cardProg:hover, .cardProg:hover h3 {
            color: #1EC4BD;
            cursor: pointer;
            transform: translateY(-1px)
        }
        .card-title h3, .card-title h4 {
            color: #7BEAE5;
        }
        .card.active h3, .card.active h4 {
            color:#1EC4BD;
        }
        .card.active {
            pointer-events: none;
        }

        .horarios {
            justify-content:center;
        }
        .card-time{
            box-shadow: 0 5px 5px rgba(0,0,0,0.2);
            border-radius: 7px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 30px;
            padding-bottom: 10px;
            height:100%;
        }
        .btn-close {
            cursor: pointer;
        }

        .btn-close:hover {
            $btn-close-color: #1EC4BD;  
        }

        #event-sala {
            color: #909090;
        }
                   
</style>

<div class="main">
    <div style="background-image:url('{{ asset('/img/resumos/2022/homepage_img1.jpeg')}}');background-position:center;background-size: cover;width: 100%;height:50rem;">
        <div class="" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);width:80%">
            <div class="row" style="margin:0;width:100%">
                <div class="col-lg-8 col-md-12 col-sm-12 order-sm-1 order-lg-2 order-md-1">
                    <div id="fist">
                        <img id="fis" src="{{asset('img/resumos/2022/logo_fista_branco.png')}}">
                    </div>
                    <div id="text">
                        <h4 id="tex1" style="text-shadow: 2px 2px 4px #000000;">23 e 24 de Fevereiro</h4>
                        <p id="data">Bem vindo ao mundo <br> das tecnologias e arquitetura </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 order-sm-2 order-lg-1 order-md-2" style="display: flex; flex-direction: column-reverse;">
                    <div id="logoRFM">
                        <h5 style="color:white;text-shadow: 2px 2px 4px #000000;">Media Partner</h5>
                        <img src="{{asset('img/Logo-RFM-Institucional_final.png')}}" style="width:18vh;display:block;margin-left:auto;margin-right:auto">
                    </div>
                </div>
                <div class="col-lg-2 col-md-0 col-sm-0 order-lg-3"></div>
            </div>
        </div>
    </div>

    <div class="clearfix striped-sections left"  style="margin-bottom: 10%;">

    <div class="container" style="margin-top: 2rem;">
        <h1 style="margin-top: 40px;color:#666666;margin-bottom: 1rem; font-size:50px; text-align:center;">Aftermovie FISTA22</h1>
        <div class="col col-12 col-md-12 col-lg-7 order-lg-1 order-md-2 order-2" style="display:block;margin:auto;">        
            <div id="videos2022" class="carousel slide" data-interval="false" style="box-shadow: 4px 6px 15px 7px #7D7D7D">
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
<div class="clearfix striped-sections right" >

        <div class="container" style="">
            <h1 style="color:#666666;margin-bottom: 1rem; font-size:50px; text-align:center;">Empresas Presentes</h1>
          <div style="width:100%;height:20px;"></div>
          <div style="margin-left:10%;margin-right:10%;">
            <h2 style="margin:none !important;paddin-bottom:0.5rem;background-color:#1EC4BD;text-align:center;color:white;border-radius: 25px;">Diamond</h2>
            <hr>
            <div class="row justify-content-center" style="margin:0;margin-bottom:10%">
                @foreach ($dataEmp['diamond'] as $empresa)
                <div class='col-md-4 text-center' style="cursor: auto !important; margin-left: auto;margin-right: auto; padding:10px;">
                    <div class="card" style="cursor: auto !important; margin-bottom:15px;width:100%;-webkit-box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);">
                      <img  src="https://fista.iscte-iul.pt/img/resumos/2022/{{$empresa['avatar']}}" class="imgEmpresaDiamond" style="object-fit:contain">
                    </div>
                </div> 
                @endforeach                            
            </div>
          </div>
          <div style="margin-left:10%;margin-right:10%;">
            <h2 style="margin:none !important;paddin-bottom:0.5rem;background-color:#4FAD32;text-align:center;color:white;border-radius: 25px;">Premium</h2>
            <hr>
            <div class="row justify-content-center" style="margin:0;margin-bottom:5%">
                @foreach ($dataEmp['premium'] as $empresa)
                <div class='col-md-3 text-center' style="cursor: auto !important; margin-left: auto;margin-right: auto; padding:10px;">
                    <div class="card" style="cursor: auto !important; margin-bottom:15px;width:100%;-webkit-box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);">
                      <img  src="https://fista.iscte-iul.pt/img/resumos/2022/{{$empresa['avatar']}}" class="imgEmpresaPremium" style="object-fit:contain">
                    </div>
                </div> 
                @endforeach                            
            </div>
          </div>
          <div style="width:100%;height:40px;"></div>
          <div style="margin-left:10%;margin-right:10%;">
            <h2 style="background-color:#FFCC66;text-align:center;color:white;border-radius: 25px;">Gold</h2>
            <hr></hr>
            <div class="row justify-content-center" style="margin:0;margin-bottom:5%">
              @foreach ($dataEmp['gold'] as $empresa)
              <div  class='col-md-3 d-flex justify-content-center' style="cursor: auto !important;">
                <div class="card" style="cursor: auto !important; margin-bottom:15px;width:100%;-webkit-box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);">
                  <img src="https://fista.iscte-iul.pt/img/resumos/2022/{{$empresa['avatar']}}" class="imgEmpresaGold" style="object-fit:contain">
                </div>
              </div> 
              @endforeach                            
            </div>
          </div>
          <div style="width:100%;height:40px;"></div>
          <div style="margin-left:10%;margin-right:10%;">
            <h2 style="margin:none !important;paddin-bottom:0.5rem;background-color:#c0c0c0;color:white;text-align:center;border-radius: 25px;">Silver</h2>
            <hr>
            <div class="row justify-content-center" style="margin:0">
              @foreach ($dataEmp['silver'] as $empresa)
              <div class='col-md-2 d-flex justify-content-center' style="cursor: auto !important; margin-left: auto;margin-right: auto;">
                  <div class="card" style="cursor: auto !important; margin-bottom:15px;width:100%;-webkit-box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);">
                    <img src="https://fista.iscte-iul.pt/img/resumos/2022/{{$empresa['avatar']}}" class="imgEmpresaSilver" style="object-fit:contain">
                  </div>
              </div> 
              @endforeach                            
            </div>
          </div>
          <div style="width:100%;height:40px;"></div>
        </div>
    </div>

    <div class="clearfix striped-sections left" style="margin-bottom: 10%;">

    <div class="container">
        <h1 style="color:#666666;margin-bottom: 3rem; font-size:50px; text-align:center;">Programa FISTA22</h1>
        <div class="container program" style="overflow-x:scroll">
            <div class="cont">
                <div class="line" id="diasUnicos" style="justify-content:center;height: 10rem;">
                    @foreach($dias as $dia)
                        @if($activeDia == date('d', strtotime($dia)))
                        <div class="col-2" >
                            <div class="card active" id="dia{{date('d', strtotime($dia))}}" onload="openSection({{date('d', strtotime($dia))}})" onclick="openSection({{date('d', strtotime($dia))}})">
                                <div class="card-title">
                                    <h3 style="text-align:center;font-size:60px;">{{date("d", strtotime($dia))}}</h3>
                                    <h4 style="font-size:20px; text-align:center;">Fevereiro</h4>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="col-2" >
                            <div class="card" id="dia{{date('d', strtotime($dia))}}" onclick="openSection({{date('d', strtotime($dia))}})">
                                <div class="card-title">
                                    <h3 style="text-align:center;font-size:60px;">{{date("d", strtotime($dia))}}</h3>
                                    <h4 style="font-size:20px; text-align:center;">Fevereiro</h4>
                                </div> 
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
                <div id="horarios" style="margin: 20px">
                    @foreach($dias as $dia)
                    @if($activeDia == date('d', strtotime($dia)))
                    <div class="horario active" id="horario{{date('d', strtotime($dia))}}">
                        <div class="row" style="margin-top:3%;margin-bottom:3%">
                            <div class="col-2"></div>
                            <div class="col-5">
                                <h3 style="text-align: center; color: #1d47c2;">Tecnologias</h3>
                            </div>
                            <div class="col-5">
                                <h3 style="text-align: center; color: #f97203;">Arquitetura</h3>
                            </div>
                        </div>
                        @foreach(App\Programas_anteriores::horasDias($dia) as $hora)
                            <div class="row"  style="padding: 5px; display: flex;">
                                <div class="col-2">
                                    <div class="card-time">
                                        <h3>{{date("H:i", strtotime($hora["horaInicio"]))}}</h3>
                                    </div>
                                </div>
                                @foreach($programas as $programa)
                                    @if($programa->dia == $dia && $programa->horaInicio == $hora["horaInicio"])
                                        @if($programa->tipo == NULL)
                                        <div class="col-10" style="color:black">
                                            <div class="cardProg">
                                            <h3 style="text-align: center;font-weight:bold">
                                                @if($programa->titulo == NULL)
                                                TBD
                                                @else {{$programa->titulo}}
                                                @endif
                                            </h3>
                                            <h5 style="text-align: center;">{{$programa->sala}}</h5>
                                            </div>
                                        </div>
                                        @endif
                                    @endif
                                @endforeach
                                @foreach($programas as $programa)
                                    @if($programa->dia == $dia && $programa->horaInicio == $hora["horaInicio"])
                                            @if($programa->tipo == "TECH")
                                            @if($programa->speedTalkId == 1)
                                                    <a class="col-5" style="color:black">
                                                        <div class="cardProg">
                                                            <h3 style="text-align:center;font-weight:bold">{{$programa->titulo}}</h3>
                                                            <h5 style="text-align: center;">{{$programa->sala}}</h5>
                                                        </div>    
                                                    </a>
                                                @else
                                                    <div class="col-5" style="color:black">
                                                        <div class="cardProg">
                                                            <h3 style="text-align:center;font-weight:bold">{{$programa->titulo}}</h3>
                                                            @if($programa->keynoteId==1)
                                                            <h4>{{$programa->descricao}}</h4>
                                                            @endif
                                                            <h5 style="text-align: center;">{{$programa->sala}}</h5>
                                                        </div>    
                                                    </div>
                                                @endif
                                            @endif
                                        @endif
                                    @endforeach
                                    @foreach($programas as $programa)
                                    @if($programa->dia == $dia && $programa->horaInicio == $hora["horaInicio"])
                                        @if($programa->tipo == "ARQ")
                                        @if(App\Programas_anteriores::where('dia',$programa->dia)->where('horaInicio',$programa->horaInicio)->where('tipo','TECH')->get()->isEmpty())
                                        <div class="col-5"></div>
                                        @endif
                                        <div class="col-5" style="color:black">
                                            <div class="cardProg">
                                                    <h3 style="text-align: center;font-weight:bold">
                                                        @if($programa->titulo == NULL)
                                                        TBD
                                                        @else {{$programa->titulo}}
                                                        @endif
                                                    </h3>
                                                    <h5 style="text-align: center;">{{$programa->sala}}</h5>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    @else
                    <div class="horario" id="horario{{date('d', strtotime($dia))}}">
                        <div class="row" style="margin-top:3%;margin-bottom:3% text-align: center;">
                            <div class="col-2"></div>
                            <div class="col-5">
                                <h3 style="text-align: center; color: #1d47c2;">Tecnologias</h3>
                            </div>
                            <div class="col-5">
                                <h3 style="text-align: center; color: #f97203;">Arquitetura</h3>
                            </div>
                        </div>
                        @foreach(App\Programas_anteriores::horasDias($dia) as $hora)
                            <div class="row"  style="padding: 5px; display: flex;">
                                <div class="col-2">
                                    <div class="card-time">
                                        <h3>{{date("H:i", strtotime($hora["horaInicio"]))}}</h3>
                                    </div>
                                </div>
                                @foreach($programas as $programa)
                                    @if($programa->dia == $dia && $programa->horaInicio == $hora["horaInicio"])
                                        @if($programa->tipo == NULL)
                                        <div class="col-10" style="color:black">
                                            <div class="cardProg">
                                            <h3 style="text-align: center;font-weight:bold">
                                                @if($programa->titulo == NULL)
                                                TBD
                                                @else {{$programa->titulo}}
                                                @endif
                                            </h3>
                                            <h5 style="text-align: center;">{{$programa->sala}}</h5>
                                            </div>
                                        </div>
                                        @endif
                                    @endif
                                @endforeach
                                @foreach($programas as $programa)
                                    @if($programa->dia == $dia && $programa->horaInicio == $hora["horaInicio"])
                                            @if($programa->tipo == "TECH")
                                                @if($programa->speedTalkId == 1)
                                                    <a class="col-5" style="color:black">
                                                        <div class="cardProg">
                                                            <h3 style="text-align:center;font-weight:bold">{{$programa->titulo}}</h3>
                                                            <h5 style="text-align: center;">{{$programa->sala}}</h5>
                                                        </div>    
                                                    </a>
                                                @else
                                                    <div class="col-5" style="color:black">
                                                        <div class="cardProg">
                                                            <h3 style="text-align:center;font-weight:bold">{{$programa->titulo}}</h3>
                                                            @if($programa->keynoteId==1)
                                                            <h4>{{$programa->descricao}}</h4>
                                                            @endif
                                                            <h5 style="text-align: center;">{{$programa->sala}}</h5>
                                                        </div>    
                                                    </div>
                                                @endif
                                            @endif
                                        @endif
                                    @endforeach
                                    @foreach($programas as $programa)
                                    @if($programa->dia == $dia && $programa->horaInicio == $hora["horaInicio"])
                                        @if($programa->tipo == "ARQ")
                                        @if(App\Programas_anteriores::where('dia',$programa->dia)->where('horaInicio',$programa->horaInicio)->where('tipo','TECH')->get()->isEmpty())
                                        <div class="col-5"></div>
                                        @endif
                                        <div class="col-5" style="color:black">
                                            <div class="cardProg">
                                                    <h3 style="text-align: center;font-weight:bold">
                                                        @if($programa->titulo == NULL)
                                                        TBD
                                                        @else {{$programa->titulo}}
                                                        @endif
                                                    </h3>
                                                    <h5 style="text-align: center;">{{$programa->sala}}</h5>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix striped-sections right" style="margin-top: 10%;">
        <div class="container" style="">
            <h1 style="color:#666666;margin-bottom: 3rem; font-size:50px; text-align:center;">Equipa FISTA22</h1>
            <div id="slider-organization" style="margin-top:0%">
                <ul>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="https://www.linkedin.com/in/david-gabriel-4a3583151/">
                                <img class="front" style="height:100%"alt="David" src="./img/resumos/2022/equipa/David_Gabriel.jpeg">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">David Gabriel</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">Resp. Geral</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="https://www.linkedin.com/in/ritabs/">
                                <img class="front" style="height:100%"alt="Rita" src="./img/resumos/2022/equipa/Rita_Silva.jpeg">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Rita Silva</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">Resp. Geral</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="https://www.linkedin.com/in/rodrigo-pinto-pinheiro-16a0851a3/">
                                <img class="front" style="height:100%"alt="Rodrigo" src="./img/resumos/2022/equipa/Rodrigo_Pinheiro.jpeg">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Rodrigo Pinheiro</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">Resp. Geral</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="https://www.linkedin.com/in/daniela-o-pedroso/">
                                <img class="front" style="height:100%"alt="Daniela" src="./img/resumos/2022/equipa/Daniela_Pedroso.jpeg">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Daniela Pedroso</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">IT</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="https://www.linkedin.com/in/jo%C3%A3o-figueira-644289142/">
                                <img class="front" style="height:100%"alt="João" src="./img/resumos/2022/equipa/Joao_Figueira.jfif">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">João Figueira</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">Conferências</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="https://www.linkedin.com/in/rita-bairros-b7a6a0b7/">
                                <img class="front" style="height:100%"alt="Rita" src="./img/resumos/2022/equipa/Rita_Bairros.jpeg">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Rita Bairros</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">Check-In</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="https://www.linkedin.com/in/joao-zribeiro/">
                                <img class="front" style="height:100%"alt="João" src="./img/resumos/2022/equipa/Joao_Ribeiro.jpeg">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">João Ribeiro</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">Workshops</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="https://www.linkedin.com/in/tom%C3%A1s-n-845840122/">
                                <img class="front" style="height:100%"alt="Tomás" src="./img/resumos/2022/equipa/Tomas_Nascimento.jpeg">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Tomás Nascimento</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">Comunicação</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="https://www.linkedin.com/in/margaridabrantes">
                                <img class="front" style="height:100%"alt="Margarida" src="./img/resumos/2022/equipa/Margarida_Abrantes.jpeg">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Margarida Abrantes</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">Comunicação</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="https://www.linkedin.com/in/sebastiao-henriques-leal/">
                            <img class="front" style="height:100%"alt="Sebastião" src="./img/resumos/2022/equipa/Sebastiao_Leal.jpeg">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Sebastião Leal</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">IT</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="https://www.linkedin.com/in/marta-falcato-2453b0203/">
                                <img class="front" style="height:100%"alt="Marta" src="./img/resumos/2022/equipa/Marta_Falcato.jpeg">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Marta Falcato</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">Workshops</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="https://www.linkedin.com/in/beatriz-santos-050378225/">
                                <img class="front" style="height:100%"alt="Beatriz" src="./img/resumos/2022/equipa/Beatriz_Santos.jpeg">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Beatriz Santos</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">Concurso de Ideias</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="https://www.linkedin.com/in/vera-martins-9a3420225/">
                                <img class="front" style="height:100%"alt="Vera" src="./img/resumos/2022/equipa/Vera_Martins.jpeg">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Vera Martins</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">Conferências</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="https://www.linkedin.com/in/carolina-mira-201272199/">
                                <img class="front" style="height:100%"alt="Carolina" src="./img/resumos/2022/equipa/Carolina_Mira.jpeg">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Carolina Mira</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">Concurso de Ideias</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="https://www.linkedin.com/in/miguelpfdaguiar/">
                                <img class="front" style="height:100%"alt="Miguel" src="./img/resumos/2022/equipa/Miguel_Aguiar.png">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Miguel d'Aguiar</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">IT</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="https://www.linkedin.com/in/samuel-carvalho-3114b1175/">
                                <img class="front" style="height:100%"alt="Samuel" src="./img/resumos/2022/equipa/Samuel_Carvalho.jpeg">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Samuel Carvalho</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">Patrocínios</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="https://www.linkedin.com/in/anamalexandre26/">
                                <img class="front" style="height:100%"alt="Ana" src="./img/resumos/2022/equipa/Ana_Alexandre.jpeg">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Ana Alexandre</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">Career Services</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="">
                                <img class="front" style="height:100%"alt="Luis" src="./img/resumos/2022/equipa/Luis_Cancela.jpeg">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Luís Cancela</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">Professor Responsável</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="">
                                <img class="front" style="height:100%"alt="Miguel" src="./img/resumos/2022/equipa/Miguel_Gomes.jpeg">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Miguel Gomes</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">Professor Arquitetura</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="https://www.linkedin.com/in/gabrielalbmonteiro//">
                                <img class="front" style="height:100%"alt="Gabriel" src="./img/resumos/2022/equipa/Gabriel_Monteiro.jpeg">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Gabriel Monteiro</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">Comunicação</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="https://www.linkedin.com/in/goncalomatospereira/">
                                <img class="front" style="height:100%"alt="Gonçalo" src="./img/resumos/2022/equipa/Goncalo_Pereira.jpeg">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Gonçalo Pereira</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">IT Speed Talks</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="https://www.linkedin.com/in/miguel-valentim-3b4683199/">
                                <img class="front" style="height:100%"alt="Miguel" src="./img/resumos/2022/equipa/Miguel_Valentim.png">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Miguel Valentim</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">IT Speed Talks</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="">
                                <img class="front" style="height:100%"alt="Ana" src="./img/resumos/2022/equipa/Ana_Fonseca.jpeg">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Ana Beatriz Fonseca</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">Arquitetura</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="">
                                <img class="front" style="height:100%"alt="Rafael" src="./img/resumos/2022/equipa/Rafael_Pereira.jpeg">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Rafael Pereira</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">Arquitetura</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="">
                                <img class="front" style="height:100%"alt="Vera" src="./img/resumos/2022/equipa/Vera_Morais.jpeg">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Vera Morais</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">Arquitetura</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="">
                                <img class="front" style="height:100%"alt="Gonçalo" src="./img/resumos/2022/equipa/Goncalo_Camoes.png">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Gonçalo Camões</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">Arquitetura</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="">
                                <img class="front" style="height:100%"alt="Daniel" src="./img/resumos/2022/equipa/Daniel_Gomes.jpeg">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Daniel Gomes</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">Arquitetura</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="">
                                <img class="front" style="height:100%"alt="Mariya" src="./img/resumos/2022/equipa/Mariya.png">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Mariya Polyans'ka</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">Arquitetura</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="">
                                <img class="front" style="height:100%"alt="Maria" src="./img/resumos/2022/equipa/Maria_Frois.jpeg">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Maria Fróis</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">Arquitetura</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="card_wrapper">
                        <div class="card" >
                            <a target="_blanc" href="">
                                <img class="front" style="height:100%"alt="Rita" src="./img/resumos/2022/equipa/Rita_Cruz.png">
                                <div class="vertical-alignment-helper back">
                                    <span class="vertical-align-center">
                                        <span class="name">Rita Cruz</span>
                                        <div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto"></div>
                                        <span style="font-size:14px">Arquitetura</span><br>
                                        <span class="fa fa-linkedin"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
    .card_wrapper {
        text-decoration: none;
        list-style: none;
    }
    .card {
        background-color: transparent;
        border: 0;
        box-shadow: none;
    }
    .front2 {
        box-shadow:   10px 8px 20px #C4C4C4;height:235px;border-radius:50%;border: 2px;border: #1EC4BD solid 3px !important;
    }
    
    .front2:hover {
      border-radius:50%;
      border: #1EC4BD solid 5px !important;
    }


</style>

<script>
    var activeDia = {{$activeDia}};
        
    function openSection(dia) {
        document.getElementById('dia'+activeDia).classList.remove('active');  
        document.getElementById('horario'+activeDia).classList.remove('active');  
        document.getElementById('horario'+dia).classList.toggle('active');
        document.getElementById('dia'+dia).classList.toggle('active');
        var horarios = document.getElementsByClassName('horario');
        for(var i = 0; i < horarios.length; i++) {
            if(horarios[i].classList.contains('active') && horarios[i].id != 'horario'+dia) {
                horarios[i].classList.remove('active');
                document.getElementById('dia'+horarios[i].id.substring(7)).classList.remove('active');
            }
        }
    }
</script>
@endsection
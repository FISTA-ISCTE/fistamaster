@extends('layouts.nav')
@section('title', 'FISTA23 - Perfil')
@section('content')

<script>
const nav = document.querySelector('nav')
const img = document.querySelector('img')
nav.classList.add('active');
img.setAttribute('src', "{{asset('img/logo_fista_horizontal_azul_2023_v2.png')}}");
</script>
<?php
  use App\Ano;
  use App\Curso;
  use App\Empresa;
  use App\Workshop;
  use App\Billing;
  use App\ItSpeedTalk;
  use App\Orador;
  use App\BackOfficeAlunos;
  use App\WorkshopSlots;
  use App\ItstSlots;
  $empresa=Empresa::where('id',Auth::user()->empresa)->first();
  $anos= Ano::all();
  $cursos= Curso::all();
  $slots = WorkshopSlots::all();
  $itslots = ItstSlots::all();
  $itslotsdia8 = ItstSlots::where('dia', 8)->get();
  $itslotsdia9 = ItstSlots::where('dia', 9)->get();

  if($empresa){
    $workshop = Workshop::where('company',$empresa->nome_empresa)->first();
    $faturacao = Billing::where('id_empresa',$empresa->id)->first();
    $itspeedtalk = ItSpeedTalk::where('id_empresa',$empresa->id)->first();
    $slot_ws = WorkshopSlots::where('empresa_id', $empresa->id)->first();
    $slot_it = ItstSlots::where('id_empresa', $empresa->id)->first();
    if($itspeedtalk!=null)
        $orador = Orador::where('id',$itspeedtalk->id_orador)->first();
    else
        $orador = null;
  }
  $informacao = BackOfficeAlunos::where('id_user',Auth::user()->id)->first();
?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
@if(empty(Auth::user()->empresa))
<div class="main footer_left">

    <div class="clearfix " style="margin-top:5%;margin-bottom:5%;overflow:hidden;">
        <div class="container">
            <div class="mb-4" style="margin-top:auto;margin-left:auto">
                <div class="row">
                    <img onclick="javascript:window.history.back()" class="ml-3 mr-2" src="{{ asset('img/back.png') }}"
                        style="height: 2rem; margin-top: 0.75rem; cursor: pointer">
                    <h1 style="font-family:'Myriad Pro 1';font-size:55px;color:#B0B5B5;margin-left:1rem">A minha conta
                    </h1>
                </div>

            </div>
            <style>
            .rounded-circle {
                border-radius: 50% !important;
            }
            </style>

            <div id="user_image_wrapper">
                <div id="user_image"
                    style="background-image: url(https://fista.iscte-iul.pt/storage/{{ Auth::user()->avatar }});"></div>
            </div>

            <div id="user_details">
                @can('browse_admin')
                <span>Administrador</span>
                @endcan
                <h2 style="margin-bottom:10px;" id="user_name">{{Auth::user()->first_name}} {{Auth::user()->last_name}}
                </h2>
                @isset( $user->curso->designacao)
                <h2 id="user_course">{{$user->curso->designacao}} <span class="badge badge-light"
                        style="font-size: 13px;left: 5px;position: relative;top: 0px;background:#1EC4BD;color:white;"><?php if(!empty($user->ano->designacao)){ ?>
                        {{$user->ano->designacao}} <?php } ?></span></h2>
                @endisset


                <a id="user_more_defs" style="margin-right:1%;" data-toggle="modal" data-target="#myModal1">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                    Configurações
                </a>
                <a id="user_more_defs" data-toggle="modal" data-target=".qrcode-modal">
                    <i class="fa fa-qrcode" style="" aria-hidden="true"></i> O meu QR
                </a>

                <br>

                <a id="user_more_defs" data-toggle="modal" data-target="#modalBackOffice" style="margin-top:1%">
                    <button class="btn-fista" style="width:100%"> 
                        Partilhar Informação com Empresas
                    </button>
                </a>
            </div>


            <style>
            .cs-placeholder {
                border: solid 2px #4fad32 !important;
            }
            </style>

            <div class="modal fade bd-example-modal-sm qrcode-modal" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                    <div class="modal-content shadow" style="border-color:white;color:grey">
                        <div class="modal-header">
                            <h1>QR code</h1>
                        </div>
                        <div class="modal-body">
                            <?php 
                  
                  ?>
                            {!! QrCode::size(250)->generate(Auth::user()->uuid); !!}
                        </div>
                        <div class="modal-footer">
                            {{Auth::user()->uuid}}
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="myModal1">
                <div class="modal-dialog" style="background:white;border-radius:200px;">
                    <div class="modal-content" style="background:white;">
                        <div class="modal-header" style="background:white;margin-top:2%;">
                            <h1 id="title"
                                style="color:#1EC4BD !important; font-size:26px;font-family:'Myriad Pro 2';letter-spacing:0.2px;">
                                Configurações</h1>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->

                        <div class="modal-body " style="background:white;">
                            <div id="box1" class="box1" style="display:block;">
                                <div class="content">
                                    <form action="minhaconta/updateprofile" method="post" enctype="multipart/form-data">
                                        <div class="row justify-content-center" style="display:flex;">
                                            @csrf
                                            <label id="overlay" name="avatar" for="avatar">
                                                <figure class="imghvr-fade rounded-circle"
                                                    style="background-color: transparent!important; padding: 0; margin: 0;border-color: #1EC4BD;border-width: 0.2rem;border-style: solid;border-radius: 50%;">
                                                    <img class="rounded-circle" id="image21"
                                                        src="https://fista.iscte-iul.pt/storage/{{ Auth::user()->avatar }}"
                                                        height="200px" width="200px" style="object-fit: cover;" />
                                                </figure>
                                            </label>

                                            <!-- badge -->

                                            <input type="file" style=" display: none;" onchange="readURL(this);"
                                                class="form-control-file" name="avatar" id="avatar">
                                            <button type="submit" class="btn-fista btn-file"
                                                style="margin-left:20px;height:40px;width:170px">Guardar</button>
                                        </div>
                                        <style>
                                        .btn-file {
                                            margin-top: 100px;
                                        }

                                        @media only screen and (max-width:450px) {
                                            .btn-file {
                                                margin-top: 20px !important;
                                            }
                                        }
                                        </style>
                                    </form>
                                    <form method="POST" action="minhaconta/submitSelect" accept-charset="UTF-8">
                                        @csrf
                                        <div class="form-group">
                                            <label> Curso </label>
                                            <select name="id_curso" class="form-control mb-1">
                                                <option disabled selected>Select Curso</option>
                                                @foreach($cursos as $curso)
                                                @if( Auth::user()->id_curso == $curso->id)
                                                <option value="{{$curso->id}}" selected>{{$curso->designacao}}</option>
                                                @else
                                                <option value="{{$curso->id}}">{{$curso->designacao}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                            <label> Ano </label>
                                            <select name="id_ano" class="form-control" id="exampleFormControlSelect1">
                                                <option disabled selected>Select Ano</option>
                                                @foreach($anos as $ano)
                                                @if( Auth::user()->id_ano == $ano->id)
                                                <option value="{{$ano->id}}" selected>{{$ano->designacao}}</option>
                                                @else
                                                <option value="{{$ano->id}}">{{$ano->designacao}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                            <button type="submit" class="btn-fista center mt-3"
                                                style="margin-left:23%;">
                                                {{ __('Guardar') }}
                                            </button>
                                        </div>
                                    </form>
                                    
                                    <form method="POST" action="minhaconta/updatelinkedin" accept-charset="UTF-8">
                                        @csrf
                                        <div class="form-group">
                                            <label> Linkedin-Admin </label>
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-1"
                                                    placeholder="EXEMPLO: https://www.linkedin.com/david-gabriel/"
                                                    name="linkedin" required value="{{Auth::user()->linkedin}}">
                                            </div>

                                            <button type="Guardar" class="btn-fista center mt-3"
                                                style="margin-left:23%;">
                                                {{ __('Guardar Linkedin') }}
                                            </button>
                                        </div>

                                    </form>
                                    


                                    <form method="POST" action="minhaconta/updatepassword" accept-charset="UTF-8">
                                        @csrf
                                        <div class="form-group">
                                            <label> Password </label>
                                            <div class="form-group">
                                                <input id="password" type="password" placeholder="Password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="new-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <input id="password-confirm" placeholder="Password confirm"
                                                    type="password" class="form-control" name="password_confirmation"
                                                    required autocomplete="new-password">
                                            </div>
                                            <button type="Guardar" class="btn-fista center mt-3"
                                                style="margin-left:23%;">
                                                {{ __('Guardar password') }}
                                            </button>
                                        </div>

                                    </form>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalBackOffice">
                <div class="modal-dialog" style="background:white;border-radius:200px;">
                    <div class="modal-content" style="background:white;">
                        <div class="modal-header" style="background:white;margin-top:2%;">
                            <h1 id="title"
                                style="color:#1EC4BD !important; font-size:26px;font-family:'Myriad Pro 2';letter-spacing:0.2px;">
                                Partilhar Informação com Empresas</h1>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->

                        <div class="modal-body " style="background:white;">
                            <div id="box1" class="box1" style="display:block;">
                                <div class="content">
                                    <form method="POST" action="minhaconta/submitBackOffice" accept-charset="UTF-8">
                                        @csrf
                                        <div class="form-group">
                                            <label> Email </label>
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-1"
                                                    placeholder="Email"
                                                    name="email" required value="@if($informacao!=null){{$informacao->email}}@endif">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label> LinkedIn </label>
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-1"
                                                    placeholder="ex: https://www.linkedin.com/company/fista"
                                                    name="linkedin" value="@if($informacao!=null){{$informacao->linkedin}}@endif">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label> Área de Interesse 1 </label>
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-1"
                                                    placeholder="ex: desenvolvimento de software"
                                                    name="areainteresse1" required value="@if($informacao!=null){{$informacao->areainteresse1}}@endif">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label> Área de Interesse 2 (opcional) </label>
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-1"
                                                    placeholder="ex: segurança dos sistemas"
                                                    name="areainteresse2" value="@if($informacao!=null){{$informacao->areainteresse2}}@endif">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label> Procura </label>
                                            <div class="form-group browsers">
                                                <div class="form-check form-check">
                                                    @if($informacao!=null && $informacao->estagioverao==1)
                                                    <input class="form-check-input" type="checkbox" id="estagioverao" name="estagioverao" value="1" required checked>
                                                    @else
                                                    <input class="form-check-input" type="checkbox" id="estagioverao" name="estagioverao" value="1" required>
                                                    @endif
                                                    <label class="form-check-label" for="estagioverao">Estágio de Verão</label>
                                                </div>
                                                <div class="form-check form-check">
                                                    @if($informacao!=null && $informacao->fulltime==1)
                                                    <input class="form-check-input" type="checkbox" id="fulltime" name="fulltime" value="1" required checked>
                                                    @else
                                                    <input class="form-check-input" type="checkbox" id="fulltime" name="fulltime" value="1" required>
                                                    @endif
                                                    <label class="form-check-label" for="fulltime">Full-time</label>
                                                </div>
                                                <div class="form-check form-check">
                                                    @if($informacao!=null && $informacao->parttime==1)
                                                    <input class="form-check-input" type="checkbox" id="parttime" name="parttime" value="1" required checked>
                                                    @else
                                                    <input class="form-check-input" type="checkbox" id="parttime" name="parttime" value="1" required>
                                                    @endif
                                                    <label class="form-check-label" for="parttime">Part-time</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label> Data de Nascimento </label>
                                            <div class="form-group">
                                                <input type="date" name="datanascimento" class="form-control mb-1" required value="@if($informacao!=null){{$informacao->datanascimento}}@endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <button type="submit" class="btn-fista center mt-3"
                                                style="margin-left:23%;">
                                                {{ __('Guardar') }}
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modalano">
    <div class="modal-dialog" style="background:white;border-radius:200px;">
        <div class="modal-content" style="background:white;">
            <div class="modal-header" style="background:white;margin-top:2%;">
                <h1 id="title"
                    style="color:#1EC4BD !important; font-size:26px;font-family:'Myriad Pro 2';letter-spacing:0.2px;">
                    Configurações</h1>
                <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
            </div>

            <!-- Modal body -->

            <div class="modal-body " style="background:white;">
                <div id="box1" class="box1" style="display:block;">
                    <div class="content">
                        <form method="POST" action="minhaconta/submitSelect" accept-charset="UTF-8">
                            @csrf
                            <div class="form-group">
                                <label> Curso </label>
                                <select name="id_curso" class="form-control mb-1">
                                    <option disabled selected>Seleciona o curso</option>
                                    @foreach($cursos as $curso)
                                    <option value="{{$curso->id}}">{{$curso->designacao}}</option>
                                    @endforeach

                                </select>
                                <label> Ano </label>
                                <select name="id_ano" class="form-control" id="exampleFormControlSelect1">
                                    <option disabled selected>Seleciona o ano</option>
                                    @foreach($anos as $ano)
                                    <option value="{{$ano->id}}">{{$ano->designacao}}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn-fista center mt-3" style="margin-left:23%;">
                                    {{ __('Guardar') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php if( empty($user->curso->designacao) || $user->curso->designacao== null  ){ ?>
<script>
$(document).ready(function() {
    $("#Modalano").modal();
});
</script>
<?php } ?>
<?php if( $informacao == null ){ ?>
<script>
$(document).ready(function() {
    $("#modalBackOffice").modal();
});
</script>
<?php } ?>
<div class="clearfix striped-sections right">
    <div class="container" id="personal_items">
        <div id="points" style="text-align:right;margin-bottom:5%;">
            <h2 class="mt-1" style="color:grey;text-align:right;font-size:168%;"> Os meus pontos</h2>
            <h2>
                <p style="color:#1EC4BD;font-size:119%;text-align:right;"> Tem {{Auth::user()->pontos}} pontos.</p>
            </h2>


            <div style="width:auto;">
                <canvas id="canvas" height="20%"></canvas>
            </div>
            <!--
    <script>new Chart(document.getElementById("canvas"),
    {"type":"line",
      "data":{
        "labels":[,"October","November","December","January","February","March",],
        "datasets":[{
            "label":"first",
            "data":[10,350,203,1080,1000,4000],
            "fill":true,
            "borderColor":"rgb(141, 191, 111)",
            "backgroundColor": "rgba(126, 198, 75, 0.5)",
            "lineTension":0.1
        },
        {
            "label":"Me",
            "data":[10,600,500,980,2000,4000],
            "fill":true,
            "borderColor":"grey",
            "lineTension":0.1,
            "borderDash": [5, 5],
            "backgroundColor": "rgba(225, 227, 227, 1)"
        }]},
      "options":{}
    });</script>-->
            <iframe name="gravar" style="display: none;"></iframe>
            <div class="row mx-auto" style="margin-top:4%;">
                <div class="col-sm-5">
                    <div class="card shadow mb-4 mx-auto token"
                        style="color:white;height:16.5rem;background: linear-gradient(180deg, #cfcfcf 10%, #858585 100%);text-align:center;border-radius:6px; border:2px; ">
                        <div id="token" class="mx-auto" style="justify-content-center">
                            <h3
                                style="font-size:33px;margin-left:auto;margin-right:auto;margin-bottom:40%;text-align:center;">
                                Introduz o token aqui</h3>
                            <form action="/log_pontos" id="code" method="POST" enctype="multipart/form-data" target="gravar">
                                @csrf
                                <div class="" style="justify-content:center;">
                                    <div class="col " style="justify-content:center;color:white;">
                                        <div class="input-group" style="justify-content:center;">
                                            <input class="some" name="token" type="text" placeholder="ABC123">
                                            <button type="submit" class="btn-fista-p"
                                                style="margin-left:-3%;">Guardar</button>
                                            <!-- <input type="submit" value="Submeter" class="btn-fista-p" style="margin-left:-3%;">-->
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <script>
                $(function(){
                    var requiredCheckboxes = $('.browsers :checkbox[required]');
                    requiredCheckboxes.change(function(){
                        if(requiredCheckboxes.is(':checked')) {
                            requiredCheckboxes.removeAttr('required');
                        } else {
                            requiredCheckboxes.attr('required', 'required');
                        }
                    });
                    requiredCheckboxes.trigger("change");
                });

                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('#image21')
                                .attr('src', e.target.result);
                        };
                        reader.readAsDataURL(input.files[0]);
                    }
                }
                </script>

                <script>
                $(document).ready(function() {
                    $("#token").hover(function() {
                        $("#code").css("display", "block");
                    }, function() {
                        $("#code").css("display", "none");
                    });
                });
                </script>

                <div class="col mb-2 mx-auto">
                    <div class="card shadow mb-1 mx-auto"
                        style="color:#636b6f;width:auto;height:94%;background: linear-gradient(160deg, #7beae5 0%, #1EC4BD 100%);text-align:center;border-radius:6px; border:6px; ">
                        <div class="container">
                            <script>
                            function sub(obj) {
                                var file = obj.value;
                                var fileName = file.split("\\");
                                document.getElementById("yourBtn").innerHTML = fileName[fileName.length - 1];
                                document.myForm.submit();
                                event.preventDefault();
                            }
                            </script>
                            <h2
                                style="font-family:'Myriad Pro 1';font-size:25px;margin-top:20px;color:white;text-align:center;">
                                Queres fazer boa figura perante as empresas participantes no FISTA?<br>Faz o upload do
                                teu currículo e no final do evento vamos enviá-lo a todas as empresas!</h2>
                            <div class="row text-center mx-0">
                                <div class="col mb-2 px-1">
                                    <form method="POST" action="/minhaconta/cvupload" enctype="multipart/form-data">
                                        @csrf
                                        @if(isset(Auth::user()->file))
                                        <a href="https://fista.iscte-iul.pt/storage/curriculos/{{Auth::user()->file}}"
                                            target="_black"><img class="ml-3 mr-2"
                                                src="{{ asset('img/document2.png') }}"
                                                style="height: 2rem; cursor: pointer;margin-top:0.3rem"></a>
                                        @endif
                                        <input id="file" hidden name="file" onchange="sub(this)" type="file"
                                            accept=".pdf">
                                        <label class="btn-fista_file w-auto" id="yourBtn"
                                            style="cursor:pointer;margin-top:8px;" for="file"> Upload currículo</label>
                                        <button type="submit" class="btn-fista-g w-auto" width=200px
                                            style="margin-left:0;width:200px !important">
                                            {{ __('Guardar') }}
                                        </button>

                                    </form>
                                    <!--<input id="cv_file" name="cv_file" onchange="document.getElementById('cv_upload_form').submit()" hidden name="cv_file" type="file" accept=".pdf">
            
              <label class="btn-fista w-auto" style="cursor:pointer;margin-top:30px;" for="cv_file"> Upload currículo</label> -->
                                    <p style="font-size:10px;">* formato PDF, máx. 3 MB</p>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>


            </div>








        </div>
    </div>
</div>

<div class="clearfix striped-sections left">
    <div class="container">
        <div class="mx-auto" style="margin-top:5%;">
            <p class="mx-auto" style="font-family:'Myriad Pro 1';font-size:45px;text-align:center;color:#4B4C4C;">
                Partilha o teu <a style="color: grey !important;font-size:45px;" data-toggle="modal"
                    data-target=".bd-example-modal-lg">link</a></p>
            <p class="mx-auto" style="font-family:'Myriad Pro 1';font-size:25px;text-align:center;color:#1EC4BD;">Junta
                pontos e ganha prémios! Convida os teus amigos e ganha pontos sempre que eles se registarem!</p>
                <p class="mx-auto" style="font-family:'Myriad Pro 1';font-size:20px;text-align:center;color:#1EC4BD;">Os pontos apenas serão depositados quando o teu amigo verificar a conta!</p>


            <div class="container ml-10 mr-10">
                <div class="row " style="margin-top:5%;">
                    <a class="share mx-auto" style="color: grey !important;" data-toggle="modal"
                        data-target=".bd-example-modal-lg">
                        <span class="mdi mdi-link-variant" style="font-size:400%;"> </span>
                    </a>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content cpydiv shadow"
                                style="border-color:white;border-radius:30px;color:grey">

                                <p class="container copy mx-auto"
                                    style="font-family:'Myriad Pro 1';font-size:auto;text-align:center;color:grey;margin-top:2%;margin-bottom:2%;">
                                    <?php echo url('?').http_build_query(['invite' => Auth::user()->uuid ], null, '&', PHP_QUERY_RFC3986);?>
                                </p>


                            </div>
                        </div>
                    </div>
                    <a class="share mx-auto" style="color: #0077b5 !important;"
                        href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo url('?').http_build_query(['invite' => Auth::user()->uuid ], null, '&', PHP_QUERY_RFC3986);?>">
                        <span class="mdi mdi-linkedin" style="font-size:400%;"> </span>
                    </a>
                    <a class="share mx-auto" style="color:#1da1f2 !important;"
                        href="https://twitter.com/intent/tweet?text=<?php echo url('?').http_build_query(['invite' => Auth::user()->uuid ], null, '&', PHP_QUERY_RFC3986);?>">
                        <span class="mdi mdi-twitter " style="font-size:400%;"></span>
                    </a>
                    <a class="share mx-auto" style="color:#3a5897 !important;"
                        href="https://www.facebook.com/sharer/sharer.php?u=<?php echo url('?').http_build_query(['invite' => Auth::user()->uuid ], null, '&', PHP_QUERY_RFC3986);?>">
                        <span class="mdi mdi-facebook " style="font-size:400%;"></span>
                    </a>
                    <a class="share mx-auto" style="color: #27ab00 !important;margin-top:11px;"
                        href="https://wa.me/?text=<?php echo url('?').http_build_query(['invite' => Auth::user()->uuid ], null, '&', PHP_QUERY_RFC3986);?>">
                        <img class=" m-1 social-icon hvr-grow" style=" width:80px;height:80px" src="{{ asset('img/whatsapp.svg') }}">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.searchform {
    max-width: 80%;
    margin-top: 2%;
    margin-left: auto;
    margin-right: auto;
    position: relative;
}

.workshop-title {
    font-family: 'Myriad Pro 1';
    font-size: 55px;
    color: #949494;
    margin-top: auto;

}


.lable {
    position: absolute;
    right: 2%;
    top: 50%;
    transform: translatey(-50%);
    color: #A7A8A7;
    transition: all 0.2s ease;
}

.search-input {
    width: 100%;
    padding: 8px 30px 8px 12px;
    border: 2px solid rgba(0, 0, 0, 0.01);
    outline: none;
    font-size: 16px;
    box-shadow: 1px 2px 5px rgba(0, 0, 0, 0.06);
    color: #A7A8A7;
    font-weight: bold;
    letter-spacing: 0.5px;
    border-radius: 40px;
    transition: all 0.2s ease;
    font-family: 'Myriad Pro 3';
    padding-left: 12%;


}

.search-input:focus {
    border-color: white;
}

.search-input:focus+label {
    transform: scale(1.05) translatey(-50%);
    color: :#A7A8A7;
}

.search-input::placeholder {
    /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: #A7A8A7;
    opacity: 1;
    /* Firefox */
}

.workshop {
    font-size: 20px;
    letter-spacing: -0.50px;
}

.search-group-align {
    margin-left: auto;
    margin-right: none;
    position: relative;
    width: 310px;
    height: 50px;
    margin-top: -12%;
    margin-bottom: auto;
}

.workshop-img {
    height: 23vh;
    width: 55vh;
    background-size: cover;
    background-position: center;
    position: relative;
    -webkit-box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.2);
    box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.2);
    border-radius: 15px;
    transition-duration: 0.6s;
    transition-timing-function: ease-out;
}

.workshop-img:hover {
    background-size: cover;
    background-position: center;
    position: relative;
    border-radius: 15px;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    border-radius: 15px;
    transition-duration: 0.5s;
    transition-timing-function: ease-out;
}

@media only screen and (max-width: 1010px) {
    .search-group-align {

        position: relative;
        width: 100%;
        height: 50px;
        margin-top: auto;
        margin-bottom: auto;
        margin-left: auto;
        margin-right: auto;

    }

    .workshop-title {
        font-family: 'Myriad Pro 1';
        font-size: 55px;
        color: #949494;
        margin-top: auto;
        text-align: center;
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
    color: #333333;
    font-weight: bold;
    font-size: 11px;
    padding: 4px 7px;
}
</style>
@if(!empty($recomendados))
<div class="clearfix striped-sections right" style="margin-bottom:-10%;">

    <div class="container padding modal_container clickable same-height" id="workshops"
        style="margin-top:20px;opacity: 1;margin-bottom:30%;">

        <p class="mx-auto"
            style="font-family:'Myriad Pro 1';font-size:45px;margin-top:3rem;text-align:center;color:#4B4C4C;">Workshops
            Inscritos </p>

        <div class="row m-auto">
            @foreach($recomendados as $workshop)
                @if($workshop->show == 1)
                    <div class="workshop-modal-box col-md-3 col-sm-6 col-xs-12 ws" style="margin-bottom:5%;">
                        <div class="same-height-item center" style="height:auto;">
                            <img class="workshop-img " data-toggle="modal" data-target="#editDealModal-{{ $workshop->id}}"
                                data-id="{{!! $workshop->id !!}}"
                                src="https://fista.iscte-iul.pt/storage/{{ $workshop->image }}"/>
                            <div class="content">
                                <h1 class="workshop" style="margin-top:10%;">{{ $workshop->title }}</h1>
                                <p class="date_place">dia {{ date('d', strtotime($workshop->begin)) }} às
                                    {{ date('H', strtotime($workshop->begin)) }}h{{ date('i', strtotime($workshop->begin)) }}
                                    <?php if(!empty($workshop->end)){?>e às
                                    {{ date('H', strtotime($workshop->end)) }}h{{ date('i', strtotime($workshop->end)) }}
                                    <?php } ?> </p> <?php if(empty($workshop->form)){ if($workshop->spotsavailable!=0){?><p
                                    class="spots_left"> {{$workshop-> spotsavailable}} vagas </p> <?php }else{ ?> <p
                                    class="spots_left"> ESGOTADO </p> <?php } } ?>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="editDealModal-{{ $workshop->id}}" tabindex="" role="dialog" tabindex="-1"
                        role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog-centered modal-dialog modal-lg">
                            <div class="modal-content shadow" style="border:none !important;border-radius:10px;">
                                <div class="modal-header" style="background-color:#1EC4BD;color:white;">
                                    <div class="bora">
                                        <h3 class="modal-title" style="text-shadow: 0 0 3px #4e4e4e;"
                                            id="exampleModalLongTitle">{{ $workshop->title }}</h3>
                                        <h5 class="modal-title" id="exampleModalLongTitle">{{ $workshop->company}}</h5>
                                    </div>

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>

                                </div>

                                <div class="row"
                                    style="border-bottom: 5px #1EC4BD solid;padding-top:1vh;margin-left: 0px !important">
                                    <div class="col-md-6">
                                        <h6 class="text-left">DIA {{ date('d', strtotime($workshop->begin)) }} ÀS
                                            {{ date('H', strtotime($workshop->begin)) }}H{{ date('i', strtotime($workshop->begin)) }}
                                            <?php if(!empty($workshop->end)){?>E ÀS
                                            {{ date('H', strtotime($workshop->end)) }}H{{ date('i', strtotime($workshop->end)) }}
                                            <?php } ?></h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="text-right" style="color:#4ABA3A">
                                            </p> <?php if(empty($workshop->form)){ if($workshop->spotsavailable!=0){?><p
                                                class="spots_left"> {{$workshop-> spotsavailable}} vagas </p> <?php }else{ ?> <p
                                                class="spots_left"> ESGOTADO </p> <?php } } ?></h6>
                                    </div>
                                </div>
                                <div class="modal-body" style="color:#6c757d">
                                    <h5>Descrição</h5>
                                    <h6>{!! nl2br(e($workshop->description)) !!}</h6>
                                    <br>
                                    <?php if(!empty($workshop->requirements)){  ?>
                                    <h5>Informação Adicional</h5>
                                    <h6>{!! nl2br(e($workshop->requirements)) !!}</h6>
                                    <?php } ?>
                                    <div style="padding-top:30px;" class="container align-items-center text-center">
                                        <img src="https://fista.iscte-iul.pt/storage/{{ $workshop->image }}" style="width:60%; "
                                            class="img" alt="" />
                                    </div>

                                </div>

                                @if($workshop->inscrever_desinscrever != 0)
                                    <div class="modal-footer justify-content-center" style="">

                                        @if($workshop->spotsavailable !=0 )
                                            @if(Auth::check() )

                                                @if( Auth::user()->id_curso != null && Auth::user()->id_ano != null)
                                                    @if(empty($workshop->form))
                                                        @if(Auth::user()->workshopsInscritos()->get()->contains($workshop) == false)
                                                        <a class="btn-fista"
                                                            style="color:white !important;background-color: #4ABA3A !important;width: 30% !important;font-weight: bold !important;padding: 0 !important"
                                                            href="{{ route('workshopAttach', $workshop->id )}}">Inscrever</a>
                                                        @else
                                                        <a class="btn-fista"
                                                            style="color:white !important;background-color: #1EC4BD !important;width: 30% !important;font-weight: bold !important;padding: 0 !important"
                                                            href="{{ route('workshopDetach', $workshop->id )}}">Desinscrever</a>
                                                        @endif
                                                    @else
                                                    <a class="btn-fista"
                                                        style="color:white !important;background-color: #4ABA3A !important;width: 30% !important;font-weight: bold !important;padding: 0 !important"
                                                        href="{{$workshop->form}}">Inscrever no formulário</a>
                                                    @endif
                                                @else
                                                <a class="btn-fista"
                                                    style="color:white !important;background-color: #4ABA3A !important;width: 30% !important;font-weight: bold !important;padding: 0 !important"
                                                    href="https://fista.iscte-iul.pt/minhaconta/{{Auth::user()->uuid}}">Coloca o ano e o
                                                    curso! Por favor!</a>
                                                @endif
                                            @else
                                            <a class="btn-fista"
                                                style="color:white !important;background-color: #4ABA3A !important;width: 30% !important;font-weight: bold !important;padding: 0 !important"
                                                data-dismiss="modal" data-toggle="modal" data-target="#myModal">Login</a>
                                            @endif
                                        @else

                                        @endif
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach



        </div>
    </div>
    @endif




</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.4/clipboard.min.js"></script>


@else


<div class="main footer_left" style="padding-bottom:0">

    <div class="clearfix " style="margin-top:5%;margin-bottom:5%;overflow:hidden;">
        <div class="container">
            <div class="mb-4" style="margin-top:auto;margin-left:auto">

                <h1 style="font-family:'Myriad Pro 1';font-size:55px;color:#E8E9E9;">Empresa -
                    {{$empresa->nome_empresa}}</h1>
            </div>
            <style>
            .rounded-circle {
                border-radius: 20px !important;
            }
            </style>




            <style>
            .cs-placeholder {
                border: solid 2px #4fad32 !important;
            }
            </style>

            <h1 style="font-family:'Myriad Pro 1';font-size:35px;color:grey;margin-top:50px">Progresso</h1>
            <div class="row" style="margin:0;margin-bottom:7%">
                <div class="progress">
                    <progress value="{{progressoEmpresa($empresa,$faturacao,$workshop)}}" max="100"> {{progressoEmpresa($empresa,$faturacao,$workshop)}}% </progress>
                </div>
                @if(progressoEmpresa($empresa,$faturacao,$workshop)!=100)
                <a style="color:#212529 !important;display:block;margin-right:auto" data-toggle="modal" data-target="#camposModal"><span class="fa fa-info-circle" style="margin:auto;font-size:25px"></span></a>
                @endif
            </div>
            @if(progressoEmpresa($empresa,$faturacao,$workshop)==100)
            <h1 style="font-family:'Myriad Pro 1';font-size:25px;color:grey;margin-top:20px;margin-bottom:7%;text-align:center">Todos os campos estão preenchidos!</h1>
            @endif

            @if(progressoEmpresa($empresa,$faturacao,$workshop) != 100)
            <div class="modal fade" id="camposModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="color:grey">Campos em Falta</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <ul class="list-group">
                            @foreach(camposEmFalta($empresa,$faturacao,$workshop) as $item)
                                <li class="list-group-item">{{$item}}</li>
                            @endforeach
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="color:white !important">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <style>
                .progress {
                    width: 50%;
                    margin-left:10px;
                    display:block;
                    margin-left:auto;
                    @if(progressoEmpresa($empresa,$faturacao,$workshop) == 100)
                    margin-right:auto;
                    @else
                    margin-right:10px;
                    @endif
                }

                .progress{
                    height: 18.75px;
                    background-color:#fff;
                }

                .progress progress {
                    -webkit-appearance: none;
                    height: 12.5px;
                    width: 100%;
                    margin-top:6.25px;
                }

                .progress progress::-webkit-progress-bar {
                    background-color: #eee;
                    border-radius: 5px;
                }
                .progress ::-webkit-progress-value {
                    background-color: #1EC4BD;
                    border-radius: 5px;
                }
            </style>

            <script>
                $(document).ready(function(){
                    $('[data-toggle="tooltip"]').tooltip({
                        placement : 'top'
                    });
                });
            </script>

        </div>
    </div>
    <div class="clearfix striped-sections right">
        <div style="margin-top:3%;">
            <h2 class="mt-1" style="color:#1EC4BD;text-align:left;font-size:248%;text-align:center;margin-bottom:5%;">
                Gerir Informação</h2>
        </div>

        <div class="Imanager container" style="justify-content:center;margin-bottom:7%;overflow:hidden;">
            <div class="row">
                <div class="col mt-6">

                    <form action="/empresa/updateEmpresaP" method="post" enctype="multipart/form-data">
                        <div style="text-align:center">
                            <label for="Set Company Logo"
                                style="color:grey;font-family:'Myriad Pro 1';font-size:140%;justify-content:center;margin-bottom:7%;">Logo
                                da Empresa</label>
                        </div>


                        <div class="row justify-content-center" style="display:flex;margin:0">
                            @csrf

                            <label id="overlay" name="avatar" for="avatar" style="cursor:pointer">
                                <figure class="imghvr-fade rounded-circle"
                                    style="background-color: transparent!important; padding: 0; margin: 0;border-color: #1EC4BD;border-width: 0.2rem;border-style: solid;border-radius: 50%;">
                                    <img class="rounded-circle" id="image21"
                                        src="https://fista.iscte-iul.pt/storage/{{ $empresa->avatar }}"
                                        style="object-fit: cover;width:260px" />
                                </figure>
                            </label>

                            <!-- badge -->

                            <input type="file" style=" display: none;" onchange="readURL(this);"
                                class="form-control-file" name="avatar" id="avatar">

                        </div>
                        <div style="text-align:center;margin-top:3%;">
                            <button type="submit" class="btn-fista btn-file"
                                style="height:40px;width:170px">Guardar</button>
                        </div>
                        <style>
                        .btn-file {
                            margin-top: 30px;
                        }

                        @media only screen and (max-width:450px) {
                            .btn-file {
                                margin-top: 20px !important;
                            }
                        }
                        </style>

                    </form>

                    <form action="/empresa/updateInfoEmpresa" method="post" enctype="multipart/form-data" style="margin-top:20px">
                    @csrf

                        <input type="hidden" name="idEmpresa" value="{{$empresa->id}}">

                        <div class="row justify-content-center" style="display:flex;margin:0">
                            <div class="form-group" style="width:100%;">
                                <label for="" style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Descricao</label>
                                <textarea class="" type="text"
                                style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
                                id="descricao" rows="4" name="descricao">{{$empresa->pequena_descricao}}</textarea>
                            </div>

                            <div class="form-group" style="width:100%;">
                                <label for="" style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Link</label>
                                <input
                                    style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
                                    id="introduction" type="text" placeholder="Link"
                                    class="form-control @error('link') is-invalid @enderror" name="link" value="{{$empresa->link}}">
                            </div>
                        </div>
                        <div style="text-align:center;margin-top:3%;margin-bottom:7%">
                            <button type="submit" class="btn-fista btn-file"
                                style="height:40px;width:170px">Guardar</button>
                        </div>

                    </form>

                </div>

                <div class="col-xl-6">

                    <form action="/empresa/updateFaturas" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="idFaturacao" value="{{$faturacao->id}}">

                        <div class="form-group" style="width:100%;">
                            <label for="Description" style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Nome
                                Fiscal</label>
                            <input
                                style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
                                id="introduction" type="text" placeholder="Nome Fiscal"
                                class="form-control @error('nome_fiscal') is-invalid @enderror" name="nome_fiscal" value="{{$faturacao->nome_fiscal}}">
                        </div>

                        <div class="form-group" style="width:100%;margin-top:5%;">
                            <label for="Description"
                                style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">NIF</label>
                            <input
                                style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
                                id="introduction" type="number" placeholder="Nif"
                                class="form-control @error('nif') is-invalid @enderror" name="nif" value="{{$faturacao->nif}}">

                        </div>

                        <div class="form-group" style="width:100%;margin-top:5%;">
                            <label for="Description"
                                style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Morada Fiscal</label>
                            <textarea class="" type="text"
                                style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
                                id="introduction" rows="4" name="morada">{{$faturacao->morada}}</textarea>
                        </div>

                        <div class="form-group" style="width:100%;margin-top:5%;">
                            <label for="Description"
                                style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Descrição</label>
                            <input
                                style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
                                id="introduction" type="text" placeholder="Descricao"
                                class="form-control @error('descricao') is-invalid @enderror" name="descricao" value="{{$faturacao->indicacao}}">
                        </div>
                        <p style="font-size:10px;">*Assim que clicar no botão guardar será guardada toda a informação na
                            nossa base de dados. Obrigado</p>
                        <button type="submit" class="btn-fista btn-file"
                            style="margin-top:2%;height:40px;width:170px;">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php if(($empresa->worshop==1 && strcmp($empresa->modelo_workshop, 'si') != 0) || strcmp($empresa->plano,'diamond')==0){ ?>
    <div class="clearfix striped-sections left">
        <div style="margin-top:4%;">
            <h2 class="mt-1" style="color:#1EC4BD;text-align:left;font-size:248%;text-align:center;margin-bottom:5%;">
                Workshop</h2>
        </div>
        <div class="container">
            <div class="col-xl-7" style="display:block;margin-left:auto;margin-right:auto">


                <form action="/workshop/empresainscrever" method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="idWorkshop" value="{{$workshop->id}}">

                    <div class="row justify-content-center" style="width:100%;margin:0">
                        <label id="overlay" name="imagemWorkshop" for="imagemWorkshop" style="cursor:pointer">
                            <figure class="imghvr-fade rounded-circle"
                            style="background-color: transparent!important; padding: 0; margin: 0;border-color: #1EC4BD;border-width: 0.2rem;border-style: solid;border-radius: 50%;">
                            <img class="rounded-circle" id="imageWorkshop"
                                src="https://fista.iscte-iul.pt/storage/{{ $workshop->image }}"
                                style="object-fit: cover;width:260px"/>
                            </figure>
                        </label>
                        
                        @if($workshop->image == null)
                            <input type="file" style=" display: none;" onchange="readURL2(this);" class="form-control-file" name="imagemWorkshop" id="imagemWorkshop">
                        @endif
                    </div>

                    <div class="form-group" style="width:100%;margin-top:20px">
                        <div style="text-align:center">
                            <label style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Nº de Inscritos: {{$workshop->usersInscritos->count()}}</label>
                        </div>
                    
                        <label for="titulo"
                            style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Título</label>
                        @if($workshop->title != null)
                        <input
                        style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"type="text"
                        class="form-control" name="titulo" value="{{$workshop->title}}" readonly="readonly">
                        @else
                        <input
                            style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
                            id="introduction" type="text" placeholder="Titulo"
                            class="form-control @error('titulo') is-invalid @enderror" name="titulo">
                        @endif
                    </div>

                    <div class="form-group" style="width:100%;margin-top:5%;">
                        <label for="Description"
                            style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Descrição</label>
                        @if($workshop->description != null)
                        <textarea class="" type="text"
                            style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
                            id="introduction" rows="2" name="descricao" readonly="readonly">{{$workshop->description}}</textarea>
                        @else
                        <textarea class="" type="text"
                            style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
                            id="introduction" rows="2" name="descricao"></textarea>
                        @endif
                    </div>

                    <div class="form-group" style="width:100%;margin-top:5%;">
                        <label for="Description" style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Plano do
                            workshop</label>
                        @if($workshop->plan != null)
                        <textarea class="" type="text"
                            style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
                            id="introduction" rows="2" name="plano" readonly="readonly">{{$workshop->plan}}</textarea>
                        @else
                        <textarea class="" type="text"
                            style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
                            id="introduction" rows="2" name="plano"></textarea>
                        @endif
                    </div>

                    <div class="form-group" style="width:100%;margin-top:5%;">
                        <label for="Description"
                            style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Observações</label>
                        @if($workshop->purpose != null)
                        <textarea class="" type="text"
                            style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
                            id="introduction" rows="2" name="observaçao" readonly="readonly">{{$workshop->purpose}}</textarea>
                        @else
                        <textarea class="" type="text"
                            style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
                            id="introduction" rows="2" name="observaçao"></textarea>
                        @endif
                    </div>
                    <div style="display: flex; justify-content: center; align-items: center; gap: 1rem;">
                    <div class="form-group" style="width:50%;margin-top:5%;">
                        <label for="Slot"
                            style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Slot</label>
                        @if($workshop->slot_id == null)
                            <select style="padding-right:2px;padding-left:10px; padding: 0.5rem;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;" name="slot" id="slot">
                        @foreach($slots as $slot)
                            @if($slot->empresa_id == NULL)
                                <option value="{{ $slot->id }}">{{ $slot->slot }}</option>
                            @endif
                        @endforeach
                            </select>   
                        @else
                        <select disabled style="padding-right:2px;padding-left:10px; padding: 0.5rem;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;" name="slot" id="slot">
                            <option value="{{ $slot_ws->id }}">{{ $slot_ws->slot }}</option>
                        </select>
                        @endif
                    </div>

                    <div class="form-group" style="width:50%; margin-top:5%">
                        @if($workshop->tempo == null)
                        <label for="Time" style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Tempo</label>
                        <select style="padding-right:2px;padding-left:10px; padding: 0.5rem;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;" name="time" id="time">
                            <option value="30m">30 minutos</option>
                            <option value="45m">45 minutos</option>
                            <option value="1h">1 hora</option>
                            <option value="1:30h">1 hora e 30 minutos</option>
                            <option value="1:45h">1 hora e 45 minutos</option>
                            <option value="2:00h">2 hora</option>
                        </select>
                        @else
                        <label for="Time" style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Tempo</label>
                        <select disabled style="padding-right:2px;padding-left:10px; padding: 0.5rem;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;" name="time" id="time">
                            <option value="{{ $workshop->tempo }}">{{ $workshop->tempo }}</option>
                        </select>
                        @endif
                    </div>
                </div>
                    <div class="form-group" style="width:100%;margin-top:5%;">
                        <label for="Description"
                            style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Requisitos</label>
                        @if($workshop->requirements != null)
                        <input
                            style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
                            id="introduction" type="text" placeholder="Requisitos"
                            class="form-control @error('descricao') is-invalid @enderror" name="requisitos" value="{{$workshop->requirements}}" readonly="readonly">
                        @else
                        <input
                            style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
                            id="introduction" type="text" placeholder="Requisitos"
                            class="form-control @error('descricao') is-invalid @enderror" name="requisitos">
                        @endif
                    </div>
                    <div class="form-group" style="width:100%;margin-top:5%;">
                        <label for="Description"
                            style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Número de participantes máximo</label>
                        @if($workshop->atendees != null)
                        <input
                            style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
                            id="introduction" type="text" placeholder="Requisitos"
                            class="form-control @error('descricao') is-invalid @enderror" name="participantes" value="{{$workshop->atendees}}" readonly="readonly">
                        @else
                        <input
                            style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
                            id="introduction" type="text" placeholder="Número de Participantes"
                            class="form-control @error('descricao') is-invalid @enderror" name="participantes">
                        @endif
                    </div>
                    @if($workshop->tempo == "" || $workshop->slot_id == NULL)
                    <p style="font-size:10px;">*Assim que clicar no botão guardar será guardada toda a informação na
                        nossa base de dados.Obrigado</p>
                    <button type="submit" class="btn-fista btn-file"
                        style="margin-top:2%;height:40px;width:170px;">Guardar</button>
                    @endif
                </form>
            </div>
        </div>
    </div>
    <?php } ?>

    <!-- IT SPEED TALKS -->
    <?php if(strcmp($empresa->plano,"premium") ==0 || strcmp($empresa->plano,'diamond')==0 || $empresa->itspeedtalks==1){ ?>
    <div class="clearfix striped-sections left">
        <div style="margin-top:4%;">
            <h2 class="mt-1" style="color:#1EC4BD;text-align:left;font-size:248%;text-align:center;margin-bottom:5%;">
                It Speed Talk</h2>
        </div>
        <div class="container">
            <div class="col-xl-7" style="display:block;margin-left:auto;margin-right:auto">


                <form action="/itspeedtalk/empresainscrever" method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="idItSpeedTalk" value="@if($itspeedtalk!=null){{$itspeedtalk->id}}@endif">

                    <div class="row justify-content-center" style="width:100%;margin:0">
                        <label id="overlay" name="imagemItSpeedTalk" for="imagemItSpeedTalk" style="cursor:pointer">
                            <figure class="imghvr-fade rounded-circle"
                            style="background-color: transparent!important; padding: 0; margin: 0;border-color: #1EC4BD;border-width: 0.2rem;border-style: solid;border-radius: 50%;">
                            <img class="rounded-circle" id="imageItSpeedTalk"
                                src="https://fista.iscte-iul.pt/storage/@if($itspeedtalk!=null){{ $itspeedtalk->imagem }}@endif"
                                style="object-fit: cover;width:260px"/>
                            </figure>
                        </label>
                        
                        @if($itspeedtalk== null || ($itspeedtalk!= null && $itspeedtalk->imagem == null))
                            <input type="file" style=" display: none;" onchange="readURL3(this);" class="form-control-file" name="imagemItSpeedTalk" id="imagemItSpeedTalk">
                        @endif
                    </div>

                    <div class="form-group" style="width:100%;margin-top:20px">
                        <label for="titulo"
                            style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Título</label>
                        @if($itspeedtalk!= null && $itspeedtalk->titulo != null)
                        <input
                        style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"type="text"
                        class="form-control" name="titulo" value="{{$itspeedtalk->titulo}}" readonly="readonly">
                        @else
                        <input
                            style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
                            id="introduction" type="text" placeholder="Titulo"
                            class="form-control @error('titulo') is-invalid @enderror" required name="titulo">
                        @endif
                    </div>

                    <div class="form-group" style="width:100%;margin-top:5%;">
                        <label for="Description"
                            style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Descrição</label>
                        @if($itspeedtalk!=null && $itspeedtalk->descricao != null)
                        <textarea class="" type="text"
                            style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
                            id="introduction" rows="2" name="descricao" readonly="readonly">{{$itspeedtalk->descricao}}</textarea>
                        @else
                        <textarea class="" type="text"
                            style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
                            id="introduction" rows="2" name="descricao" required></textarea>
                        @endif
                    </div>
                    <div class="form-group" style="width:50%;margin-top:5%;">
                        <label for="Slot"
                            style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Slot</label>
                        @if(!$itspeedtalk || $itspeedtalk->slot_id == null)
                            <select required style="padding-right:2px;padding-left:10px; padding: 0.5rem;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;" name="slot" id="slot">
                            @if($empresa->dia1 != NULL && $empresa->dia2 != NULL)
                                @foreach($itslots as $slot)
                                    @if($slot->id_empresa == NULL)
                                        <option value="{{ $slot->id }}">{{ $slot->slot }}</option>
                                    @endif
                                @endforeach
                            @elseif($empresa->dia1 != NULL && $empresa->dia2 == NULL)
                                @foreach($itslotsdia8 as $slot)
                                    @if($slot->id_empresa == NULL)
                                        <option value="{{ $slot->id }}">{{ $slot->slot }}</option>
                                    @endif
                                @endforeach
                            @elseif($empresa->dia1 == NULL && $empresa->dia2 != NULL)
                                @foreach($itslotsdia9 as $slot)
                                    @if($slot->id_empresa == NULL)
                                        <option value="{{ $slot->id }}">{{ $slot->slot }}</option>
                                    @endif
                                @endforeach
                            @endif
                        </select>   
                        @else
                        <select disabled style="padding-right:2px;padding-left:10px; padding: 0.5rem;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;" name="slot" id="slot">
                            <option value="{{ $slot_it->id }}">{{ $slot_it->slot }}</option>
                        </select>
                        @endif
                    </div>

                    <h3 style="color:#1EC4BD;margin-top:5%">Orador</h3>
                    <input type="hidden" name="idOrador" value="@if($orador!=null){{$orador->id}}@endif">

                    <div class="row justify-content-center" style="width:100%;margin:0">
                        <label id="overlay" name="imagemOrador" for="imagemOrador" style="cursor:pointer">
                            <figure class="imghvr-fade rounded-circle"
                            style="background-color: transparent!important; padding: 0; margin: 0;border-color: #1EC4BD;border-width: 0.2rem;border-style: solid;border-radius: 50%;">
                            <img class="rounded-circle" id="imageOrador"
                                src="https://fista.iscte-iul.pt/storage/@if($orador!=null){{ $orador->imagem }}@endif"
                                style="object-fit: cover;width:260px"/>
                            </figure>
                        </label>
                        
                        @if($orador== null || ($orador!= null && $orador->imagem == null))
                            <input type="file" style=" display: none;" onchange="readURL4(this);" class="form-control-file" name="imagemOrador" id="imagemOrador">
                        @endif
                    </div>

                    <div class="form-group" style="width:100%;margin-top:2%;">
                        <label for="Description"
                            style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Nome</label>
                            @if($orador!=null && $orador->nome != null)
                        <input
                            style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"type="text"
                            class="form-control" name="nomeOrador" value="{{$orador->nome}}" readonly="readonly">
                        @else
                        <input
                            style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
                            id="nomeOrador" type="text" placeholder="Nome" required
                            class="form-control" name="nomeOrador">
                        @endif
                    </div>
                    <div class="form-group" style="width:100%;margin-top:2%;">
                        <label for="Description"
                            style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Cargo</label>
                            @if($orador!=null && $orador->cargo != null)
                        <input
                            style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"type="text"
                            class="form-control" name="cargoOrador" value="{{$orador->cargo}}" readonly="readonly">
                        @else
                        <input
                            style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
                            id="cargoOrador" type="text" placeholder="Cargo" required
                            class="form-control" name="cargoOrador"> 
                        @endif
                    </div>
                    <div class="form-group" style="width:100%;margin-top:5%;">
                        <label for="Description"
                            style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Descrição</label>
                        @if($orador!=null && $orador->bio != null)
                        <textarea class="" type="text"
                            style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
                            id="bioOrador" rows="2" name="bioOrador" readonly="readonly">{{$orador->bio}}</textarea>
                        @else
                        <textarea class="" type="text"
                            style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
                            id="bioOrador" rows="2" required name="bioOrador"></textarea>
                        @endif
                    </div>
                    <div class="form-group" style="width:100%;margin-top:2%;">
                        <label for="Description"
                            style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Link</label>
                            @if($orador!=null && $orador->url != null)
                        <input
                            style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"type="text"
                            class="form-control" name="urlOrador" value="{{$orador->url}}" readonly="readonly">
                        @else
                        <input
                            style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
                            id="urlOrador" type="text" placeholder="https://www.linkedin.com/in/..."
                            class="form-control" required name="urlOrador">
                        @endif
                    </div>
                    <p style="font-size:10px;">*Assim que clicar no botão guardar será guardada toda a informação na
                        nossa base de dados.Obrigado</p>
                    <button type="submit" class="btn-fista btn-file"
                        style="margin-top:2%;height:40px;width:170px;">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- IT SPEED TALKS -->

    <script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#image21')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imageWorkshop')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURL3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imageItSpeedTalk')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURL4(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imageOrador')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.4/clipboard.min.js"></script>

</div>



<style>
.share {}

.share:hover,
.share:active {
    transform: translateY(-10px);
    -webkit-transform: translateY(-10px);


}



.chart-container {
    position: relative;
    height: 100%;
    width: 100%;
}

.isResizable {
    background-color: #ffffff;
    margin: 0px auto;
    padding: 5px;
    border: 1px solid #d8d8d8;
    overflow: hidden;
    /* Not usable in IE */
    /* resize: both; */

    width: auto;
    height: 400px;
    min-width: 280px;
    min-height: 280px;
    max-width: 1200px;
    max-height: 600px;
}

#updateChart {
    background: white;
    border: 1px solid #d8d8d8;
    width: 160px;
    padding: 10px;
}


#token {
    margin-top: 25%;
}

#token:hover {
    transition-duration: .3s;
    transform: translateY(-40px);
}


#code {
    display: none;
    margin-top: -28%;
    margin-left: auto;
    margin-right: auto;
    padding-bottom: 50%;
}

.some {
    text-align: center;
    padding: 6px 8px;
    width: 60%;
    border-radius: 5px 0px 0px 5px;
    display: inline-block;
    border: solid 2px white;
    background: transparent;
    border-right-width: 0px;
    color: white;
    outline: none;



}


#user_image {
    width: 200px;
    height: 200px;
    background-size: cover;
    background-position: center;
    border-radius: 50%;
    border: #1EC4BD solid 4px;
    margin: auto;

}

#user_details {

    padding-top: 30px;
    text-align: center;



}

.btn-fista-p {

    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: solid 2px white;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: none;
    background-color: #333333;
    border: solid 2px white;
    color: white;
}

.btn-fista-p:hover {
    color: black;
    border: solid 2px white;
    background-color: white;
    outline: none;

}

.btn-fista-p:active {
    color: white;
    background: #333333;
    outline: none;

    padding: calc(0.375rem + 2px) calc(0.75rem + 2px);
}

#user_details #user_more_defs {
    color: #919191 !important;
    padding: 3px 0;
    display: inline-block;
    cursor: pointer;
    border-radius: 5px;
}

#user_details #user_more_defs:hover {
    -ms-transform: scale(1.05, 1.05);
    -webkit-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05);
    color: #787878;
}

#user_details #user_name {
    font-size: 40px;
    font-weight: bold;
    margin: 0;
    text-align: center;
}

#user_details #user_course {
    margin: 0;
    font-size: 20px;
    text-align: center;
}

#user_image_wrapper {
    position: relative;
    float: center;
    cursor: pointer;
    border-radius: 50%;
}

#user_image_overlay {
    border: #4fad32 solid 4px;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    background: rgba(255, 255, 255, 0.5);
    text-align: center;
    padding: 70px 0;
    opacity: 0;
    -webkit-transition: opacity 0.5s;
    -moz-transition: opacity 0.5s;
    -o-transition: opacity 0.5s;
    transition: opacity 0.5s;
    margin: auto;
}

#user_image_wrapper:hover #user_image_overlay {
    opacity: 1;
}

#user_image_overlay .fa-camera {
    font-size: 60px;
}
</style>



@endif


<style>
.share {}

.share:hover,
.share:active {
    transform: translateY(-10px);
    -webkit-transform: translateY(-10px);


}



.chart-container {
    position: relative;
    height: 100%;
    width: 100%;
}

.isResizable {
    background-color: #ffffff;
    margin: 0px auto;
    padding: 5px;
    border: 1px solid #d8d8d8;
    overflow: hidden;
    /* Not usable in IE */
    /* resize: both; */

    width: auto;
    height: 400px;
    min-width: 280px;
    min-height: 280px;
    max-width: 1200px;
    max-height: 600px;
}

#updateChart {
    background: white;
    border: 1px solid #d8d8d8;
    width: 160px;
    padding: 10px;
}


#token {
    margin-top: 25%;
}

#token:hover {
    transition-duration: .3s;
    transform: translateY(-40px);
}


#code {
    display: none;
    margin-top: -28%;
    margin-left: auto;
    margin-right: auto;
    padding-bottom: 50%;
}

.some {
    text-align: center;
    padding: 6px 8px;
    width: 60%;
    border-radius: 5px 0px 0px 5px;
    display: inline-block;
    border: solid 2px white;
    background: transparent;
    border-right-width: 0px;
    color: white;
    outline: none;



}


#user_image {
    width: 200px;
    height: 200px;
    background-size: cover;
    background-position: center;
    border-radius: 50%;
    border: #1EC4BD solid 4px;
    margin: auto;

}

#user_details {

    padding-top: 30px;
    text-align: center;



}

.btn-fista-p {

    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: solid 2px white;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: none;
    background-color: #858585;
    border: solid 2px white;
    color: white;
}

.btn-fista-p:hover {
    color: black;
    border: solid 2px white;
    background-color: white;
    outline: none;

}

.btn-fista-p:active {
    color: white;
    background: #333333;
    outline: none;

    padding: calc(0.375rem + 2px) calc(0.75rem + 2px);
}







#user_details #user_more_defs {
    color: #919191 !important;
    padding: 3px 0;
    display: inline-block;
    cursor: pointer;
    border-radius: 5px;
}

#user_details #user_more_defs:hover {
    -ms-transform: scale(1.05, 1.05);
    -webkit-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05);
    color: #787878;
}

#user_details #user_name {
    font-size: 40px;
    font-weight: bold;
    margin: 0;
    text-align: center;
}

#user_details #user_course {
    margin: 0;
    font-size: 20px;
    text-align: center;
}

#user_image_wrapper {
    position: relative;
    float: center;
    cursor: pointer;
    border-radius: 50%;
}

#user_image_overlay {
    border: #4fad32 solid 4px;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    background: rgba(255, 255, 255, 0.5);
    text-align: center;
    padding: 70px 0;
    opacity: 0;
    -webkit-transition: opacity 0.5s;
    -moz-transition: opacity 0.5s;
    -o-transition: opacity 0.5s;
    transition: opacity 0.5s;
    margin: auto;
}

#user_image_wrapper:hover #user_image_overlay {
    opacity: 1;
}

#user_image_overlay .fa-camera {
    font-size: 60px;
}
</style>

<?php
    function progressoEmpresa($empresa,$faturacao,$workshop){
        $count=5;
        $camposPreenchidos=0;
        if(isset($empresa->pequena_descricao))$camposPreenchidos+=1;
        if(isset($empresa->avatar))$camposPreenchidos+=1;
        if($faturacao != null){
            if(isset($faturacao->nome_fiscal))$camposPreenchidos+=1;
            if(isset($faturacao->nif))$camposPreenchidos+=1;
            if(isset($faturacao->morada))$camposPreenchidos+=1;
        }
        if(strcmp($empresa->plano,'premium')==0 || $empresa->worshop==1 || strcmp($empresa->plano,'diamond')==0){
            $count= $count+4;
            if($workshop != null){
                if(isset($workshop->title))$camposPreenchidos+=1;
                if(isset($workshop->description))$camposPreenchidos+=1;
                if(isset($workshop->image))$camposPreenchidos+=1;
                if(isset($workshop->begin))$camposPreenchidos+=1;
            }
        }
        return round($camposPreenchidos/$count*100);
    }

    function camposEmFalta($empresa,$faturacao,$workshop){
        $campos=[];
        if(progressoEmpresa($empresa,$faturacao,$workshop) != 100){
            if(!isset($empresa->pequena_descricao))array_push($campos,"Descrição da Empresa");
            if(!isset($empresa->avatar))array_push($campos,"Logótipo da Empresa");
            if($faturacao == null){
                array_push($campos,"Nome Fiscal","NIF","Morada");
            }else{
                if(!isset($faturacao->nome_fiscal))array_push($campos,"Nome Fiscal");
                if(!isset($faturacao->nif))array_push($campos,"NIF");
                if(!isset($faturacao->morada))array_push($campos,"Morada");
            }
            if(strcmp($empresa->plano,'premium')==0 || $empresa->worshop == 1 || strcmp($empresa->plano,'diamond')==0){
                if($workshop == null){
                    array_push($campos,"Título do Workshop","Descrição do Workshop","Imagem do Workshop","Data do Workshop");
                }else{
                    if(!isset($workshop->title))array_push($campos,"Título do Workshop");
                    if(!isset($workshop->description))array_push($campos,"Descrição do Workshop");
                    if(!isset($workshop->image))array_push($campos,"Imagem do Workshop");
                    if(!isset($workshop->begin))array_push($campos,"Data do Workshop");
                }
            }
            return $campos;
        }
    }
?>


@endsection
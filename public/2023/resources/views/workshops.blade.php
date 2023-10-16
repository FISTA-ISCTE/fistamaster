@extends('layouts.nav')
@section('title', 'Workshops')
@section('content')
<section class="welcome" style="display:none;height:0px;margin-top:-2000px;">  
<h1> </h1>
</section>
<script>
    const nav = document.querySelector('nav')
    const img = document.querySelector('img')
    nav.classList.add('active');
    img.setAttribute('src', 'img/logo_fista_horizontal_azul_2023_v2.png');
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<div class="main footer_left">
    <div class="container single-header pb-md-5 pb-4" style="padding-bottom:0 !important">
        <div style="margin-top:5%;margin-bottom:10%;">
            <div>
                <h1 class="workshop-title" style="color: #666666;font-weight: bold;">Workshops</h1>
            </div>  
        </div>
    </div>
        <style>

            .searchform {
                max-width: 80%;
                margin-top: 2%;
                margin-left:auto;
                margin-right:auto;
                position: relative;
            }

           .workshop-title{
                font-family:'Myriad Pro 1';
                font-size:55px;
                color:#949494;
                margin-top:auto;
               
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
                    font-family:'Myriad Pro 3';
                    padding-left:12%;
                    
                
                }

                .search-input:focus {
                    border-color:white;
                }

                .search-input:focus + label {
                    transform: scale(1.05) translatey(-50%);
                    color: :#A7A8A7;
                }

                .search-input::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
                    color: #A7A8A7;
                    opacity: 1; /* Firefox */
                }

                .workshop{
                    font-size:20px;
                    letter-spacing:-0.50px;
                }

                .search-group-align {
                    margin-left: auto;
                    margin-right:none;
                    position:relative;
                    width:310px;
                    height:50px;
                    margin-top:-12%;
                    margin-bottom:auto;    
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
                    -webkit-box-shadow:none;
                    -moz-box-shadow: none;
                    box-shadow: none;
                    border-radius: 15px;
                    transition-duration: 0.5s;
                    transition-timing-function: ease-out;
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
                    font-size: 11px;
                    padding: 4px 7px;
                }

                
               




        </style>
    <div class="clearfix striped-sections right" style="margin-bottom:-10%;">
        <div class="container padding modal_container clickable same-height" id="workshops" style="margin-top:20px;opacity: 1;margin-bottom:30%;">
            <div class="row m-auto">
            @foreach($workshops as $workshop)
@if($workshop->show == 1)

            <div class="workshop-modal-box col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3"   style="margin-bottom:5%;">
                    
                    <div class="same-height-item center" style="height:auto;">
                        @if($workshop->image!=null)
                        <img <?php if (time() > strtotime($workshop->begin)) echo 'style="filter: saturate(50%) opacity(50%);"' ?> class="workshop-img " data-toggle="modal" data-target="#editDealModal-{{ $workshop->id}}" data-id="{{!! $workshop->id !!}}" src="https://fista.iscte-iul.pt/storage/{{ $workshop->image }}" ></img>
                        @else
                        <img <?php if (time() > strtotime($workshop->begin)) echo 'style="filter: saturate(50%) opacity(50%);"' ?> class="workshop-img " data-toggle="modal" data-target="#editDealModal-{{ $workshop->id}}" data-id="{{!! $workshop->id !!}}" src="https://fista.iscte-iul.pt/storage/users/workshops/workshop_fista.jpeg"></img>
                        @endif
                            <div class="content">
                                <h1 class="workshop" style="margin-top:10%;">{{ $workshop->title }}</h1>   
                                <p class="date_place">dia {{ date('d', strtotime($workshop->begin)) }} às {{ date('H', strtotime($workshop->begin)) }}h{{ date('i', strtotime($workshop->begin)) }} <?php if(!empty($workshop->end)){?>até às {{ date('H', strtotime($workshop->end)) }}h{{ date('i', strtotime($workshop->end)) }}  <?php } ?> </p> 
                                <?php if(empty($workshop->form)){ if($workshop->spotsavailable > 0 && $workshop->inscrever_desinscrever==1){?><p class="spots_left"> {{$workshop-> spotsavailable}} vagas </p> <?php }elseif($workshop->spotsavailable==0 && $workshop->inscrever_desinscrever==1){ ?> <p class="spots_left"> ESGOTADO </p> <?php }elseif($workshop->spotsavailable==-1){ ?> <?php } } ?>
                                   </div>
                    </div>
                </div>
        
              
            <div class="modal fade"  id="editDealModal-{{ $workshop->id}}" tabindex="" role="dialog"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                         <div class="modal-dialog-centered modal-dialog modal-lg">
                            <div class="modal-content shadow" style="border:none !important;border-radius:10px;">  
                                <div class="modal-header" style="background-color:#1EC4BD;color:white;" >
                                    <div class="bora" >
                                        <h3 class="modal-title" style="text-shadow: 0 0 3px #4e4e4e;" id="exampleModalLongTitle">{{ $workshop->title }}</h3>
                                        <h5 class="modal-title" id="exampleModalLongTitle">{{ $workshop->company}}</h5>
                                    </div>
                                                          
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                   </button>
                                  
                                </div>
                       
                                <div class="row" style="border-bottom: 5px #1EC4BD solid;padding-top:1vh;margin-left: 0px !important">
                                    <div class="col-md-6">
                                        <h6 class="text-left">DIA {{ date('d', strtotime($workshop->begin)) }} DAS {{ date('H', strtotime($workshop->begin)) }}H{{ date('i', strtotime($workshop->begin)) }} <?php if(!empty($workshop->end)){?>ÀS {{ date('H', strtotime($workshop->end)) }}H{{ date('i', strtotime($workshop->end)) }}  <?php } ?> @if($workshop->room != null)LOCAL: {{$workshop->room}}@endif</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="text-right" style="color:#4ABA3A"> </p> <?php if(empty($workshop->form)){ if($workshop->spotsavailable!=0){?><p class="spots_left"> {{$workshop-> spotsavailable}} vagas </p> <?php }else{ ?> <p class="spots_left"> ESGOTADO </p> <?php } } ?></h6>
                                    </div>
                                </div>
                                <div class="modal-body" style="color:#6c757d">
                                    <h5>Descrição</h5>
                                    <h6>{!! nl2br(e($workshop->description)) !!}</h6>
                                    <br>
                                    @if($workshop->plan!=null)
                                    <h5>Plano</h5>
                                    <h6>{!! nl2br(e($workshop->plan)) !!}</h6>
                                    @endif
                                    {{-- <br>
                                    @if($workshop->purpose!=null)
                                    <h5>Informação Adicional</h5>
                                    <h6>{!! nl2br(e($workshop->purpose)) !!}</h6>
                                    @endif --}}
                                    <!--<?php if(!empty($workshop->requirements)){  ?>
                                    <h5>Informação Adicional</h5>
                                    <h6>{!! nl2br(e($workshop->requirements)) !!}</h6>
                                    <?php } ?>-->
                                    <div style="padding-top:30px;"class="container align-items-center text-center">
                                    <img src="https://fista.iscte-iul.pt/storage/{{ $workshop->image }}" style="width:60%; "class="img" alt=""/>
                                    </div>
                                    
                                </div>

                                @if($workshop->inscrever_desinscrever == 1)
                                <div class="modal-footer justify-content-center" style="">
                                  
                                    @if($workshop->spotsavailable !=0 )
                                        @if(Auth::check() )
                                        @if( Auth::user()->id_curso != null  && Auth::user()->id_ano != null)
                                            @if(empty($workshop->form))
                                                @if(Auth::user()->workshopsInscritos()->get()->contains($workshop) == false)
                                                    <a class="btn-fista" style="color:white !important;background-color: #1EC4BD !important;width: 30% !important;font-weight: bold !important;padding: 0 !important" href="{{ route('workshopAttach', $workshop->id )}}">Inscrever</a>
                                                @else
                                                    <a class="btn-fista" style="color:white !important;background-color: #1EC4BD !important;width: 30% !important;font-weight: bold !important;padding: 0 !important" href="{{ route('workshopDetach', $workshop->id )}}">Desinscrever</a>
                                                @endif
                                            @else
                                                <a class="btn-fista" style="color:white !important;background-color: #1EC4BD !important;width: 30% !important;font-weight: bold !important;padding: 0 !important" href="{{$workshop->form}}">Inscrever no formulário</a>
                                            @endif
                                        @else
                                        <a class="btn-fista" style="color:white !important;background-color: #1EC4BD !important;width: 30% !important;font-weight: bold !important;padding: 0 !important" href="https://fista.iscte-iul.pt/minhaconta/{{Auth::user()->uuid}}">Coloca o ano e o curso! Por favor!</a>
                                        @endif
                                        @else
                                            <a class="btn-fista" style="color:white !important;background-color: #1EC4BD !important;width: 30% !important;font-weight: bold !important;padding: 0 !important"  data-dismiss="modal" data-toggle="modal" data-target="#myModal" >Login</a>
                                        @endif
                                    @else
                                        @if(Auth::check() )
                                            @if( Auth::user()->id_curso != null  && Auth::user()->id_ano != null)
                                                @if(Auth::user()->workshopsInscritos()->get()->contains($workshop) == true)
                                                    <a class="btn-fista" style="color:white !important;background-color: #1EC4BD !important;width: 30% !important;font-weight: bold !important;padding: 0 !important" href="{{ route('workshopDetach', $workshop->id )}}">Desinscrever</a>
                                                @endif
                                            @endif
                                        @endif
                                    @endif
                                </div>
                                @elseif($workshop->room == 3)
                                <div class="modal-footer justify-content-center" style="">
                                    <a class="btn-fista" style="color:white !important;background-color: #1EC4BD !important;width: 30% !important;font-weight: bold !important;padding: 0 !important"  href="mailto:fista@iscte-iul.pt" >Inscreve-te por email!<br>Clica aqui!</a>
                                </div>
                                @endif
                            </div>
                        </div>
            </div>
            @endif
            @endforeach   
                   
            
          
         </div>
     </div>
     
</div>
<!--container-->
    
</div>


@endsection
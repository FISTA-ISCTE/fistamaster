@extends('layouts.nav')
@section('title', 'Confirmação')
@section('content')
<script>
const nav = document.querySelector('nav')
const img = document.querySelector('img')
nav.classList.add('active');
img.setAttribute('src', 'img/logo_fista_horizontal_azul_2023_v2.png');
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<div class="main footer_right">
    <div class="container " style="margin-top:3%;">
    <div class="row mx-auto" style="overflow:hidden;">
        <div >
            <h1 class="title2" > Obrigado pela a inscrição! </br> Boa sorte, para este novo desafio! </h1>
        </div>

    </div>

    <style>
    .title{
        font-family:'Myriad Pro 1';
        font-size:55px;
        color:#949494;
        margin-top:auto;           
    }
    .title2{
        font-family:'Myriad Pro 1';
        font-size:60px;
        color:#1EC4BD;
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
 
    @media only screen and (max-width: 582px) {
        .title{
            font-family:'Myriad Pro 1';
            font-size:55px;
            color:#949494;
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
                   
    </style>




</div>
@endsection
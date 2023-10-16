@extends('layouts.nav')
@section('title', 'Contactos')
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
    <h1 class="title" style="margin-left:1%;">Contactos</h1>
    <div class="row mx-auto" style="overflow:hidden;">
        <div class="col"><!-- col-sm-7 mt-lg-5 -->
            <h1 class="title2" style="text-align:center"> Precisas de ajuda? </br> Entra em contacto connosco através do chatbot!</h1>
        </div>
        <!--<div class="col-sm-5 mt-lg-5 " style="overflow:hidden;">
            <form method="POST" action="/contacts" class="form-align" accept-charset="UTF-8">
                        @csrf
                            <div class="form-group" >
                            <input id="name" class="inputstyle" type="text" placeholder="Nome"  name="name"  required autocomplete="name" autofocus>
                            </div>

                           
                            <div class="form-group" >
                            <input id="email" type="email" class="inputstyle" placeholder="E-mail"  name="email"  required autocomplete="email">

                            
                            </div>
                            <div class="form-group" >
                            <input id="subject" type="text" class="inputstyle" placeholder="Assunto"  name="subject" required autocomplete="subject" autofocus>
                            
                            </div>
                            <div class="form-group"  >

                            <textarea class="txarea" id="message" type="text"  placeholder="Mensagem" name="message" required autocomplete="message" autofocus></textarea>
                            </div>
                            <div class="card" style="border:none;">
                            <button type="submit" class="btn-fista center" style="margin-top:5%;margin-left:26%;">
                                                Submeter
                                            </button>
                            </div>
            </form>
        </div>-->
        
    </div>
<div style="width:100%;height:400px;margin-top:5%;">
<iframe width="100%" height="100%" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Iscte%2C%20Portugal+(Fista)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</div>
    <!--<section style="margin-top:15%;margin-bottom:10%;overflow:auto;">
    
    <h1 class="title mx-auto" style="text-align:center;letter-spacing:2px;margin-bottom:7%;">Frequently Asked Questions</h1>

    

    <details class="mt-lg-5">
    <summary>
        Does this product have what I need?
        <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
        <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
    </summary>
    <p>Totally. Totally does.</p>
    </details>

    <details class="mt-lg-5">
    <summary>
        Does this product have what I need?
        <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
        <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
    </summary>
    <p>Totally. Totally does.</p>
    </details>

    <details class="mt-lg-5">
    <summary>
        Does this product have what I need?
        <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
        <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
    </summary>
    <p>Totally. Totally does.</p>
    </details>

    <details class="mt-lg-5">
    <summary>
        Does this product have what I need?
        <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
        <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
    </summary>
    <p>Totally. Totally does.</p>
    </details>

    <details class="mt-lg-5">
    <summary>
        Does this product have what I need?
        <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
        <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
    </summary>
    <p>Totally. Totally does.</p>
    </details>
    </section>-->
    <style>

    .title{
        font-family:'Myriad Pro 1';
        font-size:60px;
        color:#666666;
        margin-top:auto;           
    }
    .title2{
        font-family:'Myriad Pro 1';
        font-size:50px;
        color:#1EC4BD;
        font-weight:lighter !important;
        letter-spacing:0.3px;
        line-height:120%;
        margin-top:2%;          
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

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61afe6a2c82c976b71c0487d/1fmbhprba';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
@endsection
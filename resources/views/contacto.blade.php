
@extends('layouts.app2')

@section('content')
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
<!-- Hero Start -->

<div class="section page-banner-section" style="background-color: #21386e;min-height:15rem;">
    <div class="container">
        <div class="page-banner" style="margin-top:0.8%;margin-bottom:3%;">
            <div class="row text-center d-flex justify-content-center align-items-center">
                <h4 class="title" style="color:white;font-size:2.2rem;">Contactos</h4>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12">
            <img src="img/Mascote_SemFundo.png" style="height:25rem;margin-top:5rem;" alt="Tekas-mascote FISTA">
        </div>
        <div class="col-md-7 col-sm-12 d-flex justify-content-center align-items-center text-center" >
            <h1 >Se tiveres alguma dúvida contacta-nos através do ChatBot ou através do email <a style="color:#00c4cc" href="mailto:fista@iscte-iul.pt">fista@iscte-iul.pt</a></h1>
        </div>
    </div>

</div>
<div class="row" style="margin-bottom:-7.5rem;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d670.7852752803966!2d-9.1544512512526!3d38.74895881872208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd19330380ff4505%3A0x355b8eb07d81a35e!2sP%C3%A1teo%20Principal!5e0!3m2!1spt-PT!2sid!4v1696956738787!5m2!1spt-PT!2sid" style="width:100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

@endsection

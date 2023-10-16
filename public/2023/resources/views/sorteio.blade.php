@extends('layouts.nav')

@section('content')
<script>
    const nav = document.querySelector('nav')
    const img = document.querySelector('img')
    nav.classList.add('active');
    img.setAttribute('src', 'img/logo_fista_horizontal_azul_2023_v2.png');
</script>
         <div class="main footer_right">
            <div class="container single-header" style="padding-bottom: 2em;">
                <div class="page-title">
                    <h1>Sorteio</h1>
                </div>    
            </div>
            <div class="row justify-content-center">
            <div class="col-md-8">

                <form method="POST" action="{{ route('sorteioInscrever') }}">
                    @csrf
                    <input type="hidden" name="tipo_sorteio" value="sorteio_pulseira">

                     <div class="center">
                        <p style="font-size: .9rem; line-height: 15px;">Ao inscrever fica logo inscrito no concurso!</p>
                        @if(Auth::check())
                            <button type="submit" class="btn-fista center" style="margin-left:23%;">
                             Inscrever
                            </button>
                           
                                            @else
                                                <a href="#" data-toggle="modal" data-target="#myModal" class="btn-fista center" >Inscrever</a>
                                            @endif
                        
                    </div>  
                </form>
            </div>
        </div>


            </div>
        </div>
        <!--container-->
        
        </section>
       


@endsection
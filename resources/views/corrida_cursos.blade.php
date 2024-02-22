@extends('layouts.app2')


@section('content')
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-md-12 text-center">

                <h1 style="font-size:55px;color: #1ec4bd;font-weight: bold;padding-top:8.5rem;">Corrida de Cursos
                </h1>

                <p style="margin-top:20px;font-size: 23px;text-align:center;padding: 0 2% 0 2%">
                    Neste momento, é <strong style="color:#1EC4BD "> {{$cursos[$cursoAfrente]->designacao}}</strong> que está na frente da corrida!!
                
                    Qual será o curso que vai marcar a maior presença no FISTA24? Será que é o teu? <br>
                    Não deixes o teu curso ficar para trás nesta corrida!! 
                </p>
            </div>
        </div>
        <!-- <h1 style="font-size:60px;color: #1ec4bd;font-weight: bold;padding-top:8.5rem;">Concurso de ideias</h1> -->

    </div>


    <div class="container" style="margin-top:6%;">
    @foreach($cursos as $curso)
        <div class="row" style="margin-top: 40px;">

			<h4 id="data" style="margin-bottom:15px;font-size:25px;">{{$curso->designacao}}</h4>
			<div class="flex-well-container">
				<div class="progress" style="height:50px; width:100%;position: relative;z-index: 1;overflow: visible;">
					<div class="progress-bar" role="progressbar" style="width: {{$aux[$curso->id - 1]}}%; background-color:#1EC4BD !important;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
						<!--57%-->
					</div>
                    <img src="https://fista.iscte-iul.pt/2023/public/img/foguetao.gif" style="left: calc({{$aux[$curso->id - 1]}}%);position:absolute;height:50px; transform: translateX(-50%);z-index: 2;">
				</div>
			</div>
        </div>
    @endforeach
		<div style="margin-top:40px;">



            <h3 style="font-size:25px; color:rgb(76,77,86);font-weight:600;margin-bottom:30px; text-align:center;" >Convida mais colegas teus para participarem de forma a mostrar qual o curso que mais presença tem no FISTA.</h3>
                <div class="hero-btn aos-init aos-animate text-center" data-aos="fade-up" data-aos-delay="1000">
                    <a class="btn" style="font-size:1.3rem !important" href="/registar-user">Regista-te AQUI</a>
                </div>
    
            <div style="width:100%;height:40px;"></div>
        </div>
	</div>
@endsection
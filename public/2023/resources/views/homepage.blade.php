@extends('layouts.nav')
@section('title', 'FISTA23')
@section('content')
	<!-- Section Welcome -->



	<!-- End Section Welcome -->
	<div class="welcome" style="clip-path: polygon(0 0, 100% 0, 100% 88%, 0 100%);">

		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false"
			style="background-color:transparent;height:80%;display: flex;justify-content: center;align-items: center;">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<!--<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
			</ol>
			<div class="carousel-inner" style="height:100%;">
				<div class="carousel-item active" style="height:100%">
					<div
						style="background-image:url('{{ asset('/img/homepage_img1_2023_optimized.png') }}');background-position:center;background-size: cover;width: 100%;height:92%;margin-top:67px">

						<div class="" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);width:80%;;">
							<div class="row" style="margin:0;width:100%">
								<div class="col-lg-8 col-md-12 col-sm-12 order-sm-1 order-lg-2 order-md-1">
									<div id="fist">
										<img id="fis" style="max-width:100% ; margin-top: 3rem;" src="{{ asset('img/logoupdate2023.png') }}">
									</div>
									<div id="text">
										<h4 id="tex1" style="text-shadow: 2px 2px 4px #000000;">8 e 9 de Março</h4>
										<p id="data">Bem vindo ao mundo <br> das tecnologias e arquitetura </p>
									</div>
									<!--<a class="btn-bp" href="{{ route('becomePartener') }}"><button class="btn-fista"
													style="display:block;margin-left:auto;margin-right:auto;width:max-content; margin-bottom: 1rem;">Become-a-partner</button></a>
											-->
								</div>
								<div class="col-lg-2 col-md-12 col-sm-12 order-sm-2 order-lg-1 order-md-2">
									<div id="logoRFM">
										<h5 style="color:white;text-shadow: 2px 2px 4px #000000;">Media Partner</h5>
										<img src="{{ asset('img/Logo-RFM-Institucional_final.png') }}"
											style="width:18vh;display:block;margin-left:auto;margin-right:auto">
									</div>
								</div>
								<div class="col-lg-3 col-md-0 col-sm-0 order-lg-3">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item" style="height:100%">
					<div class="backgroundCom"
						style="background-image:url('{{ asset('/img/empresa_optimized.jpg') }}');background-position:center;background-size: cover;width: 100%;height:92%;margin-top:67px">
						<div style="backdrop-filter: blur(6px);background: rgba(255,255,255,0.2);width:100%;height:100%">
							<div style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">
								<h1 style="font-size:4rem;color:#1EC4BD;text-align:center">"</h1>
								<h1
									style="text-shadow: 3px 2px #585858;text-align:center;letter-spacing:0.05px;color:white;line-height:40px;line-height:1.5"
									id="textoCarousel1">
									A feira surpreendeu-me com as oportunidades, partilha e momentos que proporcionou. Excelente iniciativa para
									aproximar os estudantes do mundo do trabalho!</h1>
							</div>
						</div>
					</div>
				</div>
				<!--<div class="carousel-item">
																																																																																																																																																																																																																																																																																				<h1 style="text-align:center;">Olá</h1>
																																																																																																																																																																																																																																																																																</div>-->
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<h1
			style="color:white;background-color:#1EC4BD; text-shadow: 2px 2px 4px #000000;margin-top:3%;margin-left:3%;font-size:3rem">
			Sobre Nós</h1>
	</div>
	<!-- Section Cards -->


	<!-- Section Cards -->


	<style>
		.hero {
			position: relative;
			height: 100vh;
			width: 100%;
			align-items: center;
			justify-content: center;
			background-image: url('{{ asset('/img/homepage_img2_2023_optimized.png') }}');
			background-size: cover;
			background-position: center;

		}
	</style>

	<section>

		<div class="hero"
			style="opacity:0.9;position:relative;margin-bottom:5%;height:max-content; clip-path: polygon(0 11%, 100% 0%, 100% 100%, 0 100%);">
			<div class="container" style="text-align: justify">
				<div class="nav-bar-menu"
					style="background:transparent;opacity:padding-top:1% padding-bottom:2%;padding-left:3%; padding-right:3%;margin-top:0%;">
					<h1
						class="mobile-text"style="text-shadow: 2px 1px #585858;font-size:20px;text-align: justify;letter-spacing:0.03px;padding-bottom:13%; color:white;
                    ;line-height:35px;">
						O "Forum of Iscte School of Technology and Architecture" é um evento anual que decorre em Lisboa graças à vontade e
						dedicação dos estudantes da Escola de Tecnologias e Arquitetura em trazer o mundo das empresas à universidade. São
						dois dias de apresentações, workshops e bancas de empresas nacionais e internacionais que trouxeram, o ano passado,
						mais de 3100 participantes e mais de 80 empresas! Vê <a href="https://fista.iscte-iul.pt/media/#2022"
							style="text-decoration: underline;">AQUI</a> como foi o FISTA o ano passado. Depois disso, não o vais querer
						perder!</h1>
				</div>
			</div>

			<div class="row"
				style="background: rgba(255, 255, 255, 0.5);width:100%;padding-top:3%;padding-bottom:3%;margin:0; margin-bottom: 2rem;">
				<div class="col-xl-4 col-lg-6 col-md-12 row" style="padding:0;height:75px" id="participantesNum">
					<div style="border-radius:50%;border: solid 3px black;width:75px;height:75px;display:block;margin-left:auto">
						<img src="img/participantes.svg" style="width:50px;margin-top:7px;margin-left:9.5px">
					</div>
					<h1
						style="color:black;text-shadow: 1px 1px 2px #fff;font-weight:bold;margin-left:12px;font-size:2.2rem;margin-top:auto;margin-bottom:auto">
						+3100</h1>
					<h2
						style="margin-left:5px;color:black;font-size:1.3rem;display:block;margin-right:auto;margin-top:auto;margin-bottom:auto">
						Participantes</h2>
				</div>

				<div class="col-xl-4 col-lg-6 col-md-12 row" style="padding:0;height:75px" id="empresasNum">
					<div style="border-radius:50%;border: solid 3px black;width:75px;height:75px;display:block;margin-left:auto">
						<img src="img/companies.svg" style="width:50px;margin-top:7px;margin-left:9.5px">
					</div>
					<h1
						style="color:black;text-shadow: 1px 1px 2px #fff;font-weight:bold;margin-left:12px;font-size:2.2rem;margin-top:auto;margin-bottom:auto">
						+80</h1>
					<h2
						style="margin-left:5px;color:black;font-size:1.3rem;display:block;margin-right:auto;margin-top:auto;margin-bottom:auto">
						Empresas</h2>
				</div>

				<div class="col-xl-4 col-lg-6 col-md-12 row" style="padding:0;height:75px" id="workshopsNum">
					<div style="border-radius:50%;border: solid 3px black;width:75px;height:75px;display:block;margin-left:auto">
						<img src="img/workshops.svg" style="width:50px;margin-top:10px;margin-left:9.5px">
					</div>
					<h1
						style="color:black;text-shadow: 1px 1px 2px #fff;font-weight:bold;margin-left:12px;font-size:2.2rem;margin-top:auto;margin-bottom:auto">
						+20</h1>
					<h2
						style="margin-left:5px;color:black;font-size:1.3rem;display:block;margin-right:auto;margin-top:auto;margin-bottom:auto">
						Workshops</h2>
				</div>
			</div>
			<div style="background: rgba(255, 255, 255, 0.5);width:100%;padding-top:3%;margin-bottom:3%; padding-bottom: 5rem;">

				<h1 style="padding-bottom: 2.5rem; color:white;text-align: center; text-shadow: 2px 2px 4px #000000;">Empresas
					Diamond</h1>
				<div class="row"style="display: flex; gap: 15%; flex-wrap: wrap; justify-content: center; ">
					<a href="https://www.bi4all.pt/en/" target="_blank">
						<div class="" style="display: flex; justify-content: center; align-items: center; margin-bottom: 2rem;">
							<img style="height: 80px;" src="https://fista.iscte-iul.pt/img/BI4ALL_Logo.png" alt="Logo BI4ALL">
						</div>
					</a>
					<a href="https://www.mercedes-benz.io/" target="_blank">
						<div class="" style="display: flex; justify-content: center; align-items: center;">
							<img style="height: 80px;" src="https://fista.iscte-iul.pt/img/mercedes_Logo.png" alt="Logo Mercedes">
						</div>
					</a>
					<a href="https://recrutamento.nos.pt/content/Porque-escolher-a-NOS/?locale=pt_PT" target="_blank">
						<div class="" style="display: flex; justify-content: center; align-items: center;">
							<img style="height: 80px;" src="https://fista.iscte-iul.pt/img/nos_logo_teste.png" alt="Logo NOS">
						</div>
					</a>
				</div>
			</div>
			<div style="height: 25px; background-image: linear-gradient(to bottom, rgba(255,255,255,0), rgba(255,255,255,1)); ">

			</div>
		</div>
	</section>

	<section style="overflow-y:scroll">
		<div class="timeline-wrapper clearfix" style="overflow:hidden">
			<div class="timeline-content-day">
				<div class="timeline-line"></div>

				<div class="timeline-content-item" style="margin-right:10%">
					<span>2017</span>
					<div class="timeline-content-item-reveal">
						<a href="https://fista.iscte-iul.pt/2017">
							<img src="img/logo2017.svg" style="background-color:white">
							<span>Conhece o FISTA17</span>
						</a>
					</div>
				</div>

				<div class="timeline-content-item" style="margin-right:10%">
					<span>2018</span>
					<div class="timeline-content-item-reveal">
						<a href="https://fista.iscte-iul.pt/2018">
							<img src="img/logo2018.png" style="background-color:white">
							<span>Conhece o FISTA18</span>
						</a>
					</div>
				</div>

				<div class="timeline-content-item" style="margin-right:10%">
					<span>2019</span>
					<div class="timeline-content-item-reveal">
						<a href="https://fista.iscte-iul.pt/2019">
							<img src="img/logo2019.png" style="background-color:white">
							<span>Conhece o FISTA19</span>
						</a>
					</div>
				</div>

				<div class="timeline-content-item" style="margin-right:10%">
					<span>2020</span>
					<div class="timeline-content-item-reveal">
						<a href="https://fista.iscte-iul.pt/2020">
							<img src="img/logo2020.png" style="background-color:white">
							<span>Conhece o FISTA20</span>
						</a>
					</div>
				</div>

				<div class="timeline-content-item" style="margin-right:10%">
					<span>2021</span>
					<div class="timeline-content-item-reveal">
						<a href="https://fista.iscte-iul.pt/2021">
							<img src="img/logo2021.jpeg">
							<span>Conhece o FISTA21</span>
						</a>
					</div>
				</div>

				<div class="timeline-content-item active">
					<span>2022</span>
					<div class="timeline-content-item-reveal">
						<a href="https://fista.iscte-iul.pt/2022/fista-master/public/">
							<img src="img/logo2022.png">
							<span>Conhece o FISTA22</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<style>
		.timeline-wrapper {
			display: block;
			width: 1400px;
			height: 15rem;
			position: relative;
			text-align: center;
			margin: 0 auto;
		}

		.timeline-wrapper .timeline-line {
			display: block;
			width: 93.9%;
			height: 1px;
			background: black;
			position: absolute;
			top: 50%;
			-webkit-box-shadow: 0 0 1px black;
			-moz-box-shadow: 0 0 1px black;
			box-shadow: 0 0 1px black;
			left: 3%;
			margin-left: 2.5px;
		}

		.timeline-wrapper .timeline-content-day {
			height: 100%;
		}

		.timeline-wrapper .timeline-content-item {
			width: 6%;
			display: inline-block;
			position: relative;
			height: 100%;
			margin-right: -5px;
			-webkit-transition: width 0.5s;
			-moz-transition: width 0.5s;
			-o-transition: width 0.5s;
			transition: width 0.5s;
			z-index: 1;
		}

		.timeline-wrapper .timeline-content-item>span {
			height: 2rem;
			display: block;
			font-weight: bold;
			position: absolute;
			top: 50%;
			margin-top: -0.25em;
			width: 100%;
			cursor: pointer;
		}

		.timeline-wrapper .timeline-content-item>span:before {
			content: " ";
			display: block;
			width: 0.5em;
			height: 0.5em;
			background: #1EC4BD;
			margin: 0 auto 0.5em auto;
			-moz-border-radius: 50%;
			-webkit-border-radius: 50%;
			border-radius: 50%;
			-webkit-box-shadow: 0 0 1px black;
			-moz-box-shadow: 0 0 1px black;
			box-shadow: 0 0 1px black;
		}

		.timeline-wrapper .timeline-content-item .timeline-content-item-reveal {
			display: none;
			position: absolute;
			left: 0;
			top: 50%;
			margin-top: -50%;
			width: 100%;
		}

		.timeline-wrapper .timeline-content-item .timeline-content-item-reveal a {
			display: block;
			width: 100%;
			height: 100%;
		}

		.timeline-wrapper .timeline-content-item .timeline-content-item-reveal a img {
			-moz-border-radius: 50%;
			-webkit-border-radius: 50%;
			border-radius: 50%;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			max-height: 100%;
			max-width: 100%;
			border: 3px solid white;
			-webkit-box-shadow: 0 0 2px black;
			-moz-box-shadow: 0 0 2px black;
			box-shadow: 0 0 2px black;
		}

		.timeline-wrapper .timeline-content-item .timeline-content-item-reveal a span {
			position: absolute;
			width: 250%;
			margin-left: -75%;
			bottom: -2rem;
			left: 0;
			font-size: 1.3em;
			text-decoration: none;
			white-space: nowrap;
			color: black;
		}

		.timeline-wrapper .timeline-content-item .timeline-content-item-reveal a span:after {
			content: "\203A";
			margin-left: 0.3em;
			color: #1EC4BD;
		}

		.timeline-wrapper .timeline-content-item.active {
			width: 10%;
		}

		.timeline-wrapper .timeline-content-item.active .timeline-content-item-reveal {
			display: block;
		}
	</style>

	<script>
		$(".timeline-wrapper .timeline-content-item > span").on("mouseenter mouseleave", function(e) {
			$(".timeline-wrapper .timeline-content-item.active").removeClass("active");
			$(this).parent().addClass("active");
		});
	</script>

	<!--
																																																																																																																																																																																																																																																																				<section id="cards" style="overflow:hidden;justify-content:center;padding-top:2%;margin-bottom:9%;" >
																																																																																																																																																																																																																																																																																				
																																																																																																																																																																																																																																																																								<div class="container mx-auto" style="justify-content:center;text-align:center;">

																																																																																																																																																																																																																																																																																<div class="row mx-auto">
																																																																																																																																																																																																																																																																																<div class="col mx-auto mb-2" >
																																																																																																																																																																																																																																																																																				<div class="card mx-auto mb-4 shadow"  style="color:#636b6f;width:13rem;background-color:white;text-align:center;border-radius:9px; border:2px">
																																																																																																																																																																																																																																																																																												<img class="front" style="height:100px;margin-bottom: -5%;margin-top: 26%;border-radius: 9px;border: 2px;" src="https://fista.iscte-iul.pt/img/inscricao.svg">
																																																																																																																																																																																																																																																																																												<div class="counter 2183 mx-auto"  style="margin-top:15%;font-weight:bold;">+2100</div>
																																																																																																																																																																																																																																																																																												<h3 class="mx-auto" style="margin-top:-25%;font-size:17px;margin-bottom:7%;">Inscritos</h3>
																																																																																																																																																																																																																																																																																				</div>
																																																																																																																																																																																																																																																																																</div>
																																																																																																																																																																																																																																																																																<div class="col mx-auto mb-2" >
																																																																																																																																																																																																																																																																																				<div class="card mx-auto mb-4 shadow" style="color:#636b6f;width:13rem;background-color:white;text-align:center;border-radius:9px; border:2px; ">
																																																																																																																																																																																																																																																																																												<img class="front" style="height:100px;margin-bottom: -5%;margin-top: 26%;border-radius: 9px;border: 2px;" src="https://fista.iscte-iul.pt/img/empresas.svg">
																																																																																																																																																																																																																																																																																												<div class="counter 85 mx-auto"  style="margin-top:15%;font-weight:bold;">+80</div>
																																																																																																																																																																																																																																																																																												<h3 class="mx-auto"style="margin-top:-25%;font-size:17px;margin-bottom:7%;">Empresas</h3>
																																																																																																																																																																																																																																																																																				</div>
																																																																																																																																																																																																																																																																																</div>
																																																																																																																																																																																																																																																																																<div class="col mx-auto mb-2" >
																																																																																																																																																																																																																																																																																				<div class="card mx-auto mb-4 shadow"  style="color:#636b6f;width:13rem;background-color:white;text-align:center;border-radius:9px; border:2px">
																																																																																																																																																																																																																																																																																												<img class="front" style="height:100px;margin-bottom: -5%;margin-top: 26%;border-radius: 9px;border: 2px;" src="https://fista.iscte-iul.pt/img/talks.svg">
																																																																																																																																																																																																																																																																																												<div class="counter 39 mx-auto" style="margin-top:15%;font-weight:bold;">39</div>
																																																																																																																																																																																																																																																																																												<h3  class="mx-auto" style="margin-top:-25%;margin-bottom:7%;font-size:17px;">Talks</h3>
																																																																																																																																																																																																																																																																																				</div>

																																																																																																																																																																																																																																																																																</div>
																																																																																																																																																																																																																																																																																<div class="col mx-auto mb-2" >
																																																																																																																																																																																																																																																																																				<div class="card mx-auto mb-4 shadow" style="color:#636b6f;width:13rem;background-color:white;text-align:center;border-radius:9px; border:2px">
																																																																																																																																																																																																																																																																																												<img class="front" style="height:100px;margin-bottom: -5%;margin-top: 26%;border-radius: 9px;border: 2px;" src="https://fista.iscte-iul.pt/img/workshop.svg">
																																																																																																																																																																																																																																																																																												<div class="counter 15 mx-auto"  style="margin-top:15%;font-weight:bold;">15</div>
																																																																																																																																																																																																																																																																																												<h3 class="mx-auto"style="margin-top:-25%;font-size:17px;margin-bottom:7%;">Workshops</h3>
																																																																																																																																																																																																																																																																																				</div>
																																																																																																																																																																																																																																																																																</div>
																																																																																																																																																																																																																																																																																</div>
																																																																																																																																																																																																																																																																												
																																																																																																																																																																																																																																																																																
																																																																																																																																																																																																																																																																																</div>
																																																																																																																																																																																																																																																																				</section> -->
	<!--
																																																																																																																																																																																																																																																																								<section style="background-color:white; width:100%;" id="keynotes">
																																																																																																																																																																																																																																																																												<div style="background-color:#f4f6f8; clip-path: polygon(0 10%, 100% 0%, 100% 100%, 0 90%);padding-bottom:100px;">
																																																																																																																																																																																																																																																																																<div class="container">
																																																																																																																																																																																																																																																																																				<h1 style="margin-top: 40px;color:#666666; padding-top:120px; font-size:50px;">Keynote Speakers</h1>
																																																																																																																																																																																																																																																																																				<div style="margin-left:0%;margin-right:0%;">
																																																																																																																																																																																																																																																																																								<div class="row justify-content-center" style="margin-left:auto;margin-right:auto;padding-top:50px">
																																																																																																																																																																																																																																																																																												@foreach ($keynotes as $keynote)
	<div class='col-md-3 col-xs-3 col-lg-3 text-center' style="margin-left:auto;margin-right:auto; padding:10px;">
																																																																																																																																																																																																																																																																																																<a href='#' data-toggle='modal' data-target='#oraModal{{ $keynote->id }}' data-cargo="{{ $keynote['cargo'] }}" data-imagem="{{ $keynote['avatar_orador'] }}" data-nome="{{ $keynote['nome_orador'] }}" data-texto="{{ $keynote['descricao'] }}" data-bio="{{ $keynote['bio'] }}" data-url="{{ $keynote['linkedin'] }}">
																																																																																																																																																																																																																																																																																																				<img class="front2" style="" src="{{ $keynote['avatar_orador'] }}" class="imgEmpresa">
																																																																																																																																																																																																																																																																																																</a>
																																																																																																																																																																																																																																																																																																<h2 style="text-align:center;padding:5px 5px 0px 5px;margin-bottom:-1px !important;">{{ $keynote['nome_orador'] }}</h2>
																																																																																																																																																																																																																																																																																																<h3 style="text-align:center;font-size:18px;margin-bottom:-1px !important;">{{ $keynote['cargo'] }}</h3>
																																																																																																																																																																																																																																																																																																<span class="badge badge-secondary" style="background-color:#1EC4BD;">{{ $keynote['dia'] }}</span>
																																																																																																																																																																																																																																																																																												</div>
	@endforeach
																																																																																																																																																																																																																																																																																																																							
																																																																																																																																																																																																																																																																																								</div>

																																																																																																																																																																																																																																																																																												
																																																																																																																																																																																																																																																																																								</div>
																																																																																																																																																																																																																																																																																				</div>
																																																																																																																																																																																																																																																																																</div>
																																																																																																																																																																																																																																																																																@foreach ($keynotes as $keynote)
	<div class="row justify-content-center">
																																																																																																																																																																																																																																																																																				<div class="modal fade" id="oraModal{{ $keynote->id }}">
																																																																																																																																																																																																																																																																																								<div class="modal-dialog-centered modal-dialog modal-lg"
																																																																																																																																																																																																																																																																																												style="border:none !important;border-radius:10px;">
																																																																																																																																																																																																																																																																																												<div class="modal-content shadow" style="border:none !important;border-radius:10px;">
																																																																																																																																																																																																																																																																																																<div class="modal-header" style="background-color:#1EC4BD;color:white;">
																																																																																																																																																																																																																																																																																																				<div class="row" style="width:100%">
																																																																																																																																																																																																																																																																																																								<div class="col-md-2 align-items-center text-center">
																																																																																																																																																																																																																																																																																																												<img class="front rounded-circle modal-ora-img"
																																																																																																																																																																																																																																																																																																																style="height:100px;border-radius:50%;border: 2px; border: white solid 3px !important;"
																																																																																																																																																																																																																																																																																																																src="{{ $keynote->avatar_orador }}" class="imgEmpresa">
																																																																																																																																																																																																																																																																																																								</div>

																																																																																																																																																																																																																																																																																																								<div class="col-md-10">
																																																																																																																																																																																																																																																																																																												<h2 class="modal-title modal-ora-nome"
																																																																																																																																																																																																																																																																																																																style="font-size:2.25rem;text-shadow: 0 0 3px #4e4e4e; display:inline-block;"
																																																																																																																																																																																																																																																																																																																id="exampleModalLongTitle">{{ $keynote->nome_orador }}</h2>
																																																																																																																																																																																																																																																																																																												<div style="height:3px;width:100%;background-color:white"></div>
																																																																																																																																																																																																																																																																																																												</h3>
																																																																																																																																																																																																																																																																																																												<h5 class="modal-ora-cargo">{{ $keynote->cargo }}</h5>
																																																																																																																																																																																																																																																																																																								</div>
																																																																																																																																																																																																																																																																																																				</div>


																																																																																																																																																																																																																																																																																																				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																																																																																																																																																																																																																																																																																																								<span aria-hidden="true">&times;</span>
																																																																																																																																																																																																																																																																																																				</button>

																																																																																																																																																																																																																																																																																																</div>
																																																																																																																																																																																																																																																																																																<div class="modal-body" style="color:#6c757d">
																																																																																																																																																																																																																																																																																																				<h5>Descrição</h5>
																																																																																																																																																																																																																																																																																																				<h6 class="modal-ora-texto" style="line-height:inherit">{{ $keynote->bio }}</h6>
																																																																																																																																																																																																																																																																																																				<br>
																																																																																																																																																																																																																																																																																																</div>

																																																																																																																																																																																																																																																																																												</div>
																																																																																																																																																																																																																																																																																								</div>
																																																																																																																																																																																																																																																																																				</div>
																																																																																																																																																																																																																																																																																</div>
	@endforeach
																																																																																																																																																																																																																																																																							
																																																																																																																																																																																																																																																																				</section>
																																																																																																																																																																																																																																																																				-->

	<style>
		.front2 {
			box-shadow: 10px 8px 20px #C4C4C4;
			height: 235px;
			border-radius: 50%;
			border: 2px;
			border: #1EC4BD solid 3px !important;
		}

		.front2:hover {
			border-radius: 50%;
			border: #1EC4BD solid 5px !important;
		}
	</style>

	<!-- End Section Cards -->

	<!-- Section Youtube -->
	<!-- Section Youtube -->
	<!--
																																																																																																																																																																																																																																																																					<section style="width:100%;background-color:white;" >
																																																																																																																																																																																																																																																																																<div style="height:auto;background-color: #4fad32;background-image:url('{{ asset('/img/network3.png') }}');background-size:inline;clip-path: polygon(100% 0, 0 14%, 0 88%, 100% 100%);">clip-path: polygon(0 0, 100% 14%, 100% 84%, 0 95%);
																																																																																																																																																																																																																																																																															
																																																																																																																																																																																																																																																																																<div class="container">
																																																																																																																																																																																																																																																																																				<br>
																																																																																																																																																																																																																																																																																<div class="family" style="width:80%;color:#ffffff;margin-bottom:2%;line-height:30px;transform:rotate(0deg);margin-left:8%;margin-top:8%;">
																																																																																																																																																																																																																																																																																<h2 style="color:white;">Vê como foi o FISTA21</h2></div><div class="videoBox" style="max-width: 800px; margin-top: 20px;"> <div class="video">
																																																																																																																																																																																																																																																																																																<iframe src="https://www.youtube.com/embed/cicTTBijw84?&amp;autoplay=0&amp;rel=0&amp;theme=light&amp;showinfo=0&amp;disablekb=1&amp;modestbranding=1&amp;autohide=1&amp;color=white&amp;cc_load_policy=1&amp;hl=en" frameborder="0" allowfullscreen=""></iframe>
																																																																																																																																																																																																																																																																																																</div> </div>
																																																																																																																																																																																																																																																																								
																																																																																																																																																																																																																																																																																				<br>
																																																																																																																																																																																																																																																																																								
																																																																																																																																																																																																																																																																																</div>
																																																																																																																																																																																																																																																																																<br>
																																																																																																																																																																																																																																																																																<br>
																																																																																																																																																																																																																																																																																<br>
																																																																																																																																																																																																																																																																																<br>
																																																																																																																																																																																																																																																																																
																																																																																																																																																																																																																																																																												</div>
																																																																																																																																																																																																																																																																																

																																																																																																																																																																																																																																																																																	</div>
																																																																																																																																																																																																																																																																																</div>
																																																																																																																																																																																																																																																																															
																																																																																																																																																																																																																																																																				</section>-->
	<!-- End Section Youtube -->

	{{-- <div class="container" style="margin-top:6%">
		<h1 style="font-weight:bold;color:#1EC4BD;text-align:center;">
			Diamond Sponsors</h1>

		<div style="max-width:900px;margin:auto; ">
			@foreach (App\Empresa::where('plano', 'diamond')->get() as $empresa)
				<div>
					<a class="logo" href="{{ $empresa->link }}" target="_blank">
						<img class="entity" src="https://fista.iscte-iul.pt/storage/{{ $empresa->avatar }}"
							alt="{{ $empresa->nome_empresa }}" style="width:33%;margin-left:auto;margin-right:auto">
					</a>
				</div>
			@endforeach
			<a class="logo" href="" target="_blank">
				<img class="entity" src="https://fista.iscte-iul.pt/img/BI4ALL_Logo.png" alt="BI4ALL"
					style="width:50%;margin-left:auto;margin-right:auto">
			</a>
			<a class="logo" href="" target="_blank">
				<img class="entity" src="https://fista.iscte-iul.pt/img/nos_logo_teste.png" alt="NOS"
					style="width:50%;margin-left:auto;margin-right:auto">
			</a>
		</div>
	</div> --}}


	<section style="width:100%;margin-top:0%;overflow:hidden;background-color:#333333;position:relative;">

		<div style="background-color:white;">
			<h1 style="font-weight:bold;color:#1EC4BD;text-align:center;margin-bottom:0%">
				A Equipa</h1>
			<div class="clearfix" style="margin-top:0%;" id="footer">
				<div class="container pb-4" style="margin-top:0%;"id="organization">
					<br>
					<!--
																																																																																																																																																																																																																																																																																<div class="family">
																																																																																																																																																																																																																																																																							<h1 style="font-weight:bold;">Quem somos?</h1>
																																																																																																																																																																																																																																																																																</div>
																																																																																																																																																																																																																																																																												-->
					<!--<h3 style="font-size:1.5rem;text-align:center;padding:2%;color:#4d4d4c">O FISTA é um evento organizado por alunos, professores e funcionários do Iscte. Texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto.</h3>-->

					<div id="slider-organization" style="margin-top:0%; margin-bottom: 7%;">

						<ul>

							@foreach ($members as $member)
								<?php $role = $member->role_id;
								?>
								@if ($role == 29)
									<li class="card_wrapper">
										<div class="card" style="cursor: pointer !important;">
											@if ($member->linkedin != null)
												<a target="_blanc" href="{{ $member->linkedin }}">
													<img class="front" style="height:100%"alt="{{ $member->first_name }}"
														src="@if (strcmp($member->avatar, 'users/default.png') != 0) https://fista.iscte-iul.pt/storage/{{ $member->avatar }}@else/users/default.png @endif">
													<div class="vertical-alignment-helper back">
														<span class="vertical-align-center">
															<span class="name">{{ $member->first_name }} {{ $member->last_name }}</span>
															<div
																style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto">
															</div>
															<span style="font-size:14px">{{ App\Role::where('id', $role)->first()->display_name }}</span><br>
															<span class="fa fa-linkedin"></span>
														</span>
													</div>
												</a>
											@else
												<img class="front" style="height:100%"alt="{{ $member->first_name }}"
													src="@if (strcmp($member->avatar, 'users/default.png') != 0) https://fista.iscte-iul.pt/storage/{{ $member->avatar }}@else/users/default.png @endif">
												<div class="vertical-alignment-helper back">
													<span class="vertical-align-center">
														<span class="name">{{ $member->first_name }} {{ $member->last_name }}</span>
														<div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto">
														</div>
														<span style="font-size:14px">{{ App\Role::where('id', $role)->first()->display_name }}</span><br>
													</span>
												</div>
											@endif
										</div>
									</li>
								@endif
							@endforeach
							@foreach ($members as $member)
								<?php $role = $member->role_id;
								?>
								@if ($role == 10 || $role == 11)
									<li class="card_wrapper">
										<div class="card" style="cursor: pointer !important;">
											@if ($member->linkedin != null)
												<a target="_blanc" href="{{ $member->linkedin }}">
													<img class="front" style="height:100%"alt="{{ $member->first_name }}"
														src="@if (strcmp($member->avatar, 'users/default.png') != 0) https://fista.iscte-iul.pt/storage/{{ $member->avatar }}@else/users/default.png @endif">
													<div class="vertical-alignment-helper back">
														<span class="vertical-align-center">
															<span class="name">{{ $member->first_name }} {{ $member->last_name }}</span>
															<div
																style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto">
															</div>
															<span style="font-size:14px">{{ App\Role::where('id', $role)->first()->display_name }}</span><br>
															<span class="fa fa-linkedin"></span>
														</span>
													</div>
												</a>
											@else
												<img class="front" style="height:100%"alt="{{ $member->first_name }}"
													src="@if (strcmp($member->avatar, 'users/default.png') != 0) https://fista.iscte-iul.pt/storage/{{ $member->avatar }}@else/users/default.png @endif">
												<div class="vertical-alignment-helper back">
													<span class="vertical-align-center">
														<span class="name">{{ $member->first_name }} {{ $member->last_name }}</span>
														<div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto">
														</div>
														<span style="font-size:14px">{{ App\Role::where('id', $role)->first()->display_name }}</span><br>
													</span>
												</div>
											@endif
										</div>
									</li>
								@endif
							@endforeach
							@foreach ($members as $member)
								<?php $role = $member->role_id;
								?>
								@if ($role != 1 && $role != 2 && $role != 24 && $role != 26 && $role != 7 && $role != 10 && $role != 11 && $role != 29)
									<li class="card_wrapper">
										<div class="card" style="cursor: pointer !important;">
											@if ($member->linkedin != null)
												<a target="_blanc" href="{{ $member->linkedin }}">
													<img class="front" style="height:100%"alt="{{ $member->first_name }}"
														src="@if (strcmp($member->avatar, 'users/default.png') != 0) https://fista.iscte-iul.pt/storage/{{ $member->avatar }}@else/users/default.png @endif">
													<div class="vertical-alignment-helper back">
														<span class="vertical-align-center">
															<span class="name">{{ $member->first_name }} {{ $member->last_name }}</span>
															<div
																style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto">
															</div>
															<span style="font-size:14px">{{ App\Role::where('id', $role)->first()->display_name }}</span><br>
															<span class="fa fa-linkedin"></span>
														</span>
													</div>
												</a>
											@else
												<img class="front" style="height:100%"alt="{{ $member->first_name }}"
													src="@if (strcmp($member->avatar, 'users/default.png') != 0) https://fista.iscte-iul.pt/storage/{{ $member->avatar }}@else/users/default.png @endif">
												<div class="vertical-alignment-helper back">
													<span class="vertical-align-center">
														<span class="name">{{ $member->first_name }} {{ $member->last_name }}</span>
														<div style="width:80%;height:1px;background-color:white;display:block;margin-left:auto;margin-right:auto">
														</div>
														<span style="font-size:14px">{{ App\Role::where('id', $role)->first()->display_name }}</span><br>
													</span>
												</div>
											@endif
										</div>
									</li>
								@endif
							@endforeach
						</ul>

						<div class="spacer" style="clear: both;"></div>
					</div>
					<!--
																																																																																																																																																																																																																																																																				<div class="container" style="margin-bottom:10%;margin-top:4%">
																																																																																																																																																																																																																																																																												<img src="{{ asset('/img/logo_50_anos_iscte.png') }}" style="display:block;margin-left:auto;margin-right:auto">
																																																																																																																																																																																																																																																																												<button class="btn-fista" style="display:block;margin-left:auto;margin-right:auto;width:max-content"><a class="btn-bp" href="https://www.iscte-iul.pt/contents/2270/50-anos-iscte" target="_blank">Saber mais</a></button>
																																																																																																																																																																																																																																																																				</div>
																																																																																																																																																																																																																																																																				-->

					<h1 style="font-weight:bold;color:#1EC4BD;text-align:center;margin-bottom:6%">
						Parcerias</h1>
					<div id="logos-organizacao">
						<a class="logo" href="http://iscte-iul.pt/ista.aspx" target="_blank">
							<img class="entity" src="img/organization/ista.svg" alt="ISTA">
						</a>
						<!--
																																																																																																																																																																																																																																																																								<a class="logo" href="https://www.facebook.com/IEEEISCTEIULSB/" target="_blank">
																																																																																																																																																																																																																																																																												<img class="entity" src="img/organization/ieee.svg" alt="IEEE">
																																																																																																																																																																																																																																																																								</a>
																																																																																																																																																																																																																																																																								-->
						<a class="logo" href="http://vitruviusfablab.iscte-iul.pt/pt-pt/news/vfablab" target="_blank">
							<img class="entity" src="img/organization/vfablab.svg" alt="VFABLAB" style="height:3.5rem;">
						</a>
						<a class="logo" href="https://www.facebook.com/nauiscte/" target="_blank">
							<img class="entity" src="img/organization/nau.svg" alt="NAU">
						</a>
						<a class="logo" href="hhttps://www.instagram.com/netiscte/" target="_blank">
							<img class="entity" src="img/organization/net.svg" alt="NET" style="height:3.5rem;">
						</a>
						<!--
																																																																																																																																																																																																																																																																								<a class="logo" href="https://www.facebook.com/acm.iscte" target="_blank">
																																																																																																																																																																																																																																																																												<img class="entity" src="img/organization/acm.png" alt="ACM">
																																																																																																																																																																																																																																																																								</a>
																																																																																																																																																																																																																																																																								-->
						<a class="logo" href="https://www.instagram.com/ned.iscte/?hl=pt" target="_blank">
							<img class="entity" src="img/organization/ned.png" alt="NED" style="height:4rem;">
						</a>
					</div>

					<h1 style="font-weight:bold;color:#1EC4BD;text-align:center;margin-bottom:6%">
						Patrocínios</h1>
					<div id="logos-organizacao">
						<a class="logo" href="https://www.deltacafes.pt/" target="_blank">
							<img class="entity" src="img/patrocinios/logos_delta.jpg" alt="Delta" style="height:5rem">
						</a>
						<a class="logo" href="https://sumolcompal.pt/" target="_blank">
							<img class="entity" src="img/patrocinios/sumol.jpg" alt="Sumol" style="height: 10rem">
						</a>
						<a class="logo" href="" target="_blank">
							<img class="entity" src="img/patrocinios/logo_vgroup.png" alt="V Group" style="height: 5rem">
						</a>
						<a class="logo" href="https://www.yorn.net/yorn.html" target="_blank">
							<img class="entity" src="img/patrocinios/Yorn_logo.svg" alt="Yorn">
						</a>
						<a class="logo" href="https://www.ef.edu.pt/" target="_blank">
							<img class="entity" src="img/patrocinios/logo_preto_ef.svg" alt="EF">
						</a>
						<a class="logo" href="https://www.redbull.com/pt-pt/" target="_blank">
							<img class="entity" src="img/patrocinios/REDBULL.jpeg" alt="Redbull" style="height: 5rem">
						</a>
						<a class="logo" href="https://www.gms-store.com/pt/" target="_blank">
							<img class="entity" src="img/patrocinios/gms.png" alt="GMS" style="height: 5rem">
						</a>
						<a class="logo" href="https://www.unimidia.pt/" target="_blank">
							<img class="entity" src="img/patrocinios/Logo_Unimidia.jpg" alt="Unimidia" style="height: 2rem">
						</a>
						<a class="logo" href="https://www3.sogenave.pt/" target="_blank">
							<img class="entity" src="img/patrocinios/Logo_Sogenave.png" alt="Unimidia" style="height: 4rem">
						</a>


					</div>

					<style>
						.card {
							background-color: transparent;
							border: 0;
						}
					</style>
				</div>

				<style>
					#logoRFM {
						width: max-content;
						display: block;
						margin-left: auto;
						margin-right: auto;
						bottom: 0;
						position: absolute
					}

					@media screen and (max-width:991px) {
						#logoRFM {
							margin-top: 5%;
							position: static;
						}
					}

					@media screen and (max-width: 410px) {
						.mobile-text {
							padding-top: 0%;

						}

						.hero {
							margin-top: -19%;
						}
					}

					@media screen and (min-width: 410px)and (max-width: 650px) {
						.mobile-text {
							padding-top: 0%;
						}

						.hero {
							margin-top: -10%;
						}
					}

					@media screen and (min-width: 650px)and (max-width: 850px) {
						.mobile-text {
							padding-top: 0%;
						}

						.hero {
							margin-top: -10%;
						}
					}


					@media screen and (min-width: 850px)and (max-width: 1027px) {
						.mobile-text {
							padding-top: 0%;
						}

						.hero {
							margin-top: -8%;
						}
					}

					@media screen and (min-width: 1027px) {
						.mobile-text {
							padding-top: 0%;
						}

						.hero {
							margin-top: -5%;
						}
					}

					@media screen and (min-height: 1200px) {
						.mobile-text {
							padding-top: 0%;
						}

						.hero {
							margin-top: -15%;
						}
					}

					@media screen and (max-width: 1199px) {
						#workshopsNum {
							margin-left: auto;
							margin-right: auto;
							margin-top: 20px;
						}
					}

					@media screen and (max-width: 991px) {
						#empresasNum {
							margin-top: 20px;
						}
					}

					@media screen and (min-width: 992px) {
						#empresasNum {
							margin: 0;
						}
					}

					@media screen and (min-width: 1200px) {
						#workshopsNum {
							margin: 0;
						}
					}

					@media screen and (max-height: 905px) and (min-width:451px) {
						.hero {
							height: 120vh;
						}
					}

					@media screen and (max-height: 750px) and (min-width:451px) {
						.hero {
							height: 140vh;
						}
					}

					@media screen and (max-height: 650px) and (min-width:451px) {
						.hero {
							height: 160vh;
						}
					}

					@media screen and (max-height: 565px) and (min-width:451px) {
						.hero {
							height: 180vh;
						}
					}

					@media screen and (max-height: 500px) and (min-width:451px) {
						.hero {
							height: 210vh;
						}
					}

					@media screen and (max-height: 500px) and (min-width:451px) {
						.hero {
							height: 210vh;
						}
					}

					@media screen and (max-width:690px) {
						.mobile-text {
							padding-top: 25%;
						}
					}

					@media screen and (min-width:691px) {
						.mobile-text {
							padding-top: 30%;
						}
					}

					@media screen and (max-width:450px) {
						.mobile-text {
							padding-top: 40%;
						}
					}

					@media screen and (max-width:750px) {
						#textoCarousel1 {
							font-size: 1.8rem;
						}
					}

					@media screen and (min-width:750px) {
						#textoCarousel1 {
							font-size: 2.5rem;
						}
					}

					@media screen and (max-width:450px) and (min-height:701px) {
						.hero {
							height: 140vh;
						}
					}

					@media screen and (max-width:450px) and (max-height:700px) {
						.hero {
							height: 160vh;
						}
					}

					@media screen and (max-width:450px) and (max-height:610px) {
						.hero {
							height: 180vh;
						}
					}

					@media screen and (max-width:450px) and (max-height:550px) {
						.hero {
							height: 200vh;
						}
					}

					@media screen and (max-width:450px) and (max-height:500px) {
						.hero {
							height: 220vh;
						}
					}
				</style>

				<!-- <style>
																																																																																																																																																																																																																																																																																@media print {

																																																																																																																																																																																																																																																																																				.striped-sections:not(#agenda),
																																																																																																																																																																																																																																																																																				#intro,
																																																																																																																																																																																																																																																																																				#info,
																																																																																																																																																																																																																																																																																				.navContainer,
																																																																																																																																																																																																																																																																																				.page-title,
																																																																																																																																																																																																																																																																																				.programa .nav-tabs>li:not(.active) {
																																																																																																																																																																																																																																																																																								display: none;
																																																																																																																																																																																																																																																																																				}

																																																																																																																																																																																																																																																																																				.programa .nav-tabs {
																																																																																																																																																																																																																																																																																								max-width: 150px;
																																																																																																																																																																																																																																																																																				}

																																																																																																																																																																																																																																																																																				.programa .nav-tabs>li {
																																																																																																																																																																																																																																																																																								width: 100%;
																																																																																																																																																																																																																																																																																				}

																																																																																																																																																																																																																																																																																				.striped-sections,
																																																																																																																																																																																																																																																																																				#wrapper {
																																																																																																																																																																																																																																																																																								padding: 0;
																																																																																																																																																																																																																																																																																				}

																																																																																																																																																																																																																																																																																				.programa .table-programa tr td {
																																																																																																																																																																																																																																																																																								padding-bottom: 8px;
																																																																																																																																																																																																																																																																																								padding-top: 8px;
																																																																																																																																																																																																																																																																																				}

																																																																																																																																																																																																																																																																																				.programa .table-programa {
																																																																																																																																																																																																																																																																																								border-spacing: 5px !important;
																																																																																																																																																																																																																																																																																								border-collapse: separate !important;
																																																																																																																																																																																																																																																																																				}
																																																																																																																																																																																																																																																																																}
																																																																																																																																																																																																																																																																												</style>-->
			</div>
		</div>
	</section>

	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
		var Tawk_API = Tawk_API || {},
			Tawk_LoadStart = new Date();
		(function() {
			var s1 = document.createElement("script"),
				s0 = document.getElementsByTagName("script")[0];
			s1.async = true;
			s1.src = 'https://embed.tawk.to/61afe6a2c82c976b71c0487d/1fmbhprba';
			s1.charset = 'UTF-8';
			s1.setAttribute('crossorigin', '*');
			s0.parentNode.insertBefore(s1, s0);
		})();
	</script>
	<!--End of Tawk.to Script-->

@endsection

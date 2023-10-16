@extends('layouts.nav')
@section('title', 'Programa IT Speed Talks')
@section('content')
	<link href="{{ asset('css/media.css') }}" rel="stylesheet">
	<script>
		const nav = document.querySelector('nav');
		const img = document.querySelector('img');
		nav.classList.add('active');
		img.setAttribute('src', "{{ asset('img/logo_fista_horizontal_azul_2023_v2.png') }}");
	</script>
	<style>
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
			font-size: 1rem;
			padding: 4px 7px;
		}

		.cont {
			overflow-x: hidden;
			-webkit-overflow-scrolling: touch;
			width: 1110px;
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

		.card {
			background-color: #fff;
			display: flex;
			max-width: 925px;
			min-height: 100%;
			box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
		}

		h3 {
			font-size: 18px;
			font-weight: bold;
		}

		h4 {
			font-size: 18px;
		}

		.hora {
			position: relative;
		}

		.hora2 {
			position: absolute;
			top: 50%;
			left: 50%;
			-ms-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
		}

		.cardTECH {
			border-style: solid;
			border-color: #1d47c2;
			border-width: 1px;
			color: #1d47c2;
			width: 45px;
			height: 20px;
			position: relative;
			border-radius: 5px;
			float: right;
		}

		.cardARQ {
			border-style: solid;
			border-color: #f97203;
			border-width: 1px;
			color: #f97203;
			width: 40px;
			height: 20px;
			position: relative;
			border-radius: 5px;
			float: right;
		}

		.cardProg {
			-webkit-box-shadow: 2px 2px 0px 2px #1EC4BD;
			box-shadow: 2px 2px 1px 2px #1EC4BD;
			border-radius: 5px;
			border-width: 2px 2px 2px 2px;
			justify-content: center;
			align-items: center;
			height: 100%;
			padding: 10px;
		}

		.cardTipo {
			padding-right: 5px;
		}

		.tipo {
			position: absolute;
			top: 50%;
			left: 50%;
			-ms-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			font-size: 16px;
		}

		.col-hora {
			max-width: 92.5px;
			margin-left: 46.25px;
		}

		.logo {
			width: 27.78px;
			height: 27.78px;
		}

		.title {
			font-family: 'Myriad Pro 1';
			font-size: 70px;
			color: #666666;
			padding-top: 5rem;
		}

		.horario {
			display: none;
		}

		.horario.active {
			display: grid;
		}

		.card {
			box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
			background-color: transparent;
			padding-top: 20px;
		}

		.card:hover h3,
		.card:hover h4,
		.card:hover,
		.cardProg:hover,
		.cardProg:hover h3 {
			color: #1EC4BD;
			cursor: pointer;
			transform: translateY(-1px)
		}

		.card-title h3,
		.card-title h4 {
			color: #7BEAE5;
		}

		.card.active h3,
		.card.active h4 {
			color: #1EC4BD;
		}

		.card.active {
			pointer-events: none;
		}

		.horarios {
			justify-content: center;
		}

		.card-time {
			box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
			border-radius: 7px;
			display: flex;
			justify-content: center;
			align-items: center;
			padding-top: 30px;
			padding-bottom: 10px;
			height: 100%;
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

	<div class="container">
		<div class="mb-4" style="margin-top:auto;margin-left:auto;margin-top:14%">
			<div class="row" style="height:0%">
				<img onclick="javascript:window.history.back()" class="ml-3 mr-2" src="{{ asset('img/back.png') }}"
					style="height: 2rem; margin-top: 0.75rem; cursor: pointer">
				<h1 style="font-family:'Myriad Pro 1';font-size:55px;color:#666666;margin-left:1rem">IT Speed Talks
				</h1>
			</div>

		</div>

		<div class="program container" style="margin-top:6%">
			<div class="cont">
				<div class="line" id="diasUnicos" style="justify-content:center;height: 10rem;">
					@foreach ($dias as $dia)
						@if ($activeDia == date('d', strtotime($dia)))
							<div class="col-2">
								<div class="card active" id="dia{{ date('d', strtotime($dia)) }}"
									onload="openSection({{ date('d', strtotime($dia)) }})" onclick="openSection({{ date('d', strtotime($dia)) }})">
									<div class="card-title">
										<h3 style="text-align:center;font-size:60px;">{{ date('d', strtotime($dia)) }}</h3>
										<h4 style="font-size:20px;">Março</h4>
									</div>
								</div>
							</div>
						@else
							<div class="col-2">
								<div class="card" id="dia{{ date('d', strtotime($dia)) }}"
									onclick="openSection({{ date('d', strtotime($dia)) }})">
									<div class="card-title">
										<h3 style="text-align:center;font-size:60px;">{{ date('d', strtotime($dia)) }}</h3>
										<h4 style="font-size:20px;">Março</h4>
									</div>
								</div>
							</div>
						@endif
					@endforeach
				</div>
				<div id="horarios" style="margin: 20px;margin-top:5%">
					@foreach ($dias as $dia)
						@if ($activeDia == date('d', strtotime($dia)))
							<div class="horario active" id="horario{{ date('d', strtotime($dia)) }}">
								@foreach (App\ItSpeedTalk::horasDias($dia) as $hora)
									@foreach ($itspeedtalks as $itspeedtalk)
										@if ($itspeedtalk->show == 1 && $itspeedtalk->dia == $dia && $itspeedtalk->horaInicio == $hora['horaInicio'])
											<div class="row" style="padding: 5px; display: flex;">
												<div class="col-2">
													<div class="card-time">
														<h3>{{ date('H:i', strtotime($hora['horaInicio'])) }}</h3>
													</div>
												</div>
												<a class="col-10" style="color:black !important;" href="#" data-toggle="modal"
													data-target="#itModal{{ $itspeedtalk->id }}">
													<div class="cardProg">
														<h3 style="text-align: center;">
															{{ App\Empresa::where('id', $itspeedtalk->id_empresa)->first()->nome_empresa }}:
															{{ $itspeedtalk->titulo }}</h3>
														<p style="font-size:15px;text-align:center"> Orador:
															{{ App\Orador::where('id', $itspeedtalk->id_orador)->first()->nome }}</p>
													</div>
												</a>
												<div class="modal fade" id="itModal{{ $itspeedtalk->id }}" tabindex="-1" role="dialog"
													aria-labelledby="mediumModalLabel" aria-hidden="true">
													<div class="modal-dialog" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h3 style="color:#1EC4BD">{{ $itspeedtalk->titulo }}</h3>
																<button type="button" class="close" style="margin-right: 0 !important;" data-dismiss="modal"
																	aria-label="Close">
																</button>
															</div>
															<div class="modal-body" id="mediumBody">
																<div>
																	<p>{{ $itspeedtalk->descricao }}</p>
																	<p>Orador: {{ App\Orador::where('id', $itspeedtalk->id_orador)->first()->nome }}</p>
																	@foreach ($empresas as $empresa)
																		@if ($empresa->id == $itspeedtalk->id_empresa)
																			<p>Empresa: {{ $empresa->nome_empresa }}</p>
																		@endif
																	@endforeach

																	@if ($itspeedtalk->imagem != null)
																		<img src="https://fista.iscte-iul.pt/storage{{ $itspeedtalk->imagem }}">
																	@endif
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										@endif
									@endforeach
								@endforeach
							</div>
						@else
							<div class="horario" id="horario{{ date('d', strtotime($dia)) }}">
								@foreach (App\ItSpeedTalk::horasDias($dia) as $hora)
									@foreach ($itspeedtalks as $itspeedtalk)
										@if ($itspeedtalk->show == 1 && $itspeedtalk->dia == $dia && $itspeedtalk->horaInicio == $hora['horaInicio'])
											<div class="row" style="padding: 5px; display: flex;">
												<div class="col-2">
													<div class="card-time">
														<h3>{{ date('H:i', strtotime($hora['horaInicio'])) }}</h3>
													</div>
												</div>
												<a class="col-10" style="color:black !important;" href="#" data-toggle="modal"
													data-target="#itModal{{ $itspeedtalk->id }}">
													<div class="cardProg">
														<h3 style="text-align: center;">
															{{ App\Empresa::where('id', $itspeedtalk->id_empresa)->first()->nome_empresa }}:
															{{ $itspeedtalk->titulo }}
														</h3>
														<p style="font-size:15px;text-align:center"> Orador:
															{{ App\Orador::where('id', $itspeedtalk->id_orador)->first()->nome }}</p>
													</div>
												</a>
												<div class="modal fade" id="itModal{{ $itspeedtalk->id }}" tabindex="-1" role="dialog"
													aria-labelledby="mediumModalLabel" aria-hidden="true">
													<div class="modal-dialog" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h3 style="color:#1EC4BD">{{ $itspeedtalk->titulo }}</h3>
																<button type="button" class="close" style="margin-right: 0 !important;" data-dismiss="modal"
																	aria-label="Close">
																</button>
															</div>
															<div class="modal-body" id="mediumBody">
																<div>
																	<p>{{ $itspeedtalk->descricao }}</p>
																	<p>Orador: {{ App\Orador::where('id', $itspeedtalk->id_orador)->first()->nome }}</p>
																	@foreach ($empresas as $empresa)
																		@if ($empresa->id == $itspeedtalk->id_empresa)
																			<p>Empresa: {{ $empresa->nome_empresa }}</p>
																		@endif
																	@endforeach
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										@endif
									@endforeach
								@endforeach
							</div>
						@endif
					@endforeach
				</div>
			</div>
		</div>
	</div>

	<script>
		var activeDia = {{ $activeDia }};

		function openSection(dia) {
			document.getElementById('dia0' + activeDia).classList.remove('active');
			document.getElementById('horario0' + activeDia).classList.remove('active');
			document.getElementById('horario0' + dia).classList.toggle('active');
			document.getElementById('dia0' + dia).classList.toggle('active');
			var horarios = document.getElementsByClassName('horario');
			for (var i = 0; i < horarios.length; i++) {
				if (horarios[i].classList.contains('active') && horarios[i].id != 'horario0' + dia) {
					horarios[i].classList.remove('active');
					document.getElementById('dia' + horarios[i].id.substring(7)).classList.remove('active');
				}
			}
		}
	</script>

@endsection

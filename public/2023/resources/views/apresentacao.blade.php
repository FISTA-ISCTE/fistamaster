@extends('layouts.nav')
@section('title', 'Programa Apresentações')
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
			cursor: default;
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

	<?php
	use App\Apresentacoes;
	$apresentacoes = App\Apresentacoes::all();
	?>

	<div class="container">
		<div class="mb-4" style="margin-top:auto;margin-left:auto;margin-top:14%">
			<div class="row" style="height:0%">
				<img onclick="javascript:window.history.back()" class="ml-3 mr-2" src="{{ asset('img/back.png') }}"
					style="height: 2rem; margin-top: 0.75rem; cursor: pointer">
				<h1 style="font-family:'Myriad Pro 1';font-size:55px;color:#666666;margin-left:1rem">Apresentações de Projetos
				</h1>
			</div>

		</div>

		<div class="program container" style="margin-top:6%">
			<div class="cont">
				<div id="horarios" style="margin: 20px;margin-top:5%">

					<div class="horario active">
						@foreach (App\Apresentacoes::horas() as $hora)
							<div class="row" style="padding: 5px; display: flex;">
								<div class="col-2">
									<div class="card-time">
										<h3>{{ date('H:i', strtotime($hora['hora_inicio'])) }}</h3>
									</div>
								</div>
								@foreach ($apresentacoes as $apresentacao)
									@if ($apresentacao->hora_inicio == $hora['hora_inicio'])
										<div class="col-10" style="color:black; ">
											<div class="cardProg" style="padding: 2rem;">
												<h3 style="text-align: center;font-weight:bold">
													{{ $apresentacao->titulo }}
												</h3>

												<p>
													{{ $apresentacao->descricao }}
												</p>

												<p style="font-size: 1.1rem;">
													Orador: {{ $apresentacao->orador }}
												</p>
											</div>
										</div>
									@endif
								@endforeach
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>

	@endsection

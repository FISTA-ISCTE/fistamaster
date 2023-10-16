@extends('layouts.nav')
@section('title', 'Programa')
@section('content')
	<link href="{{ asset('css/media.css') }}" rel="stylesheet">
	<script>
		const nav = document.querySelector('nav')
		const img = document.querySelector('img')
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

		h5 {
			font-size: 15px;
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
			border-color: rgb(210, 162, 176);
			border-width: 1px;
			color: rgb(210, 162, 176);
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

	<div class="container" style="margin-bottom: 10rem;">
		<div class="mb-4" style="margin-top:auto;margin-left:auto;margin-top:10%">
			<div class="row" style="height:0%">
				<h1 style="font-family:'Myriad Pro 1';font-size:55px;color:#666666;margin-left:1rem">Programa
				</h1>
			</div>

		</div>

		<div class="program container" style="margin-top:10%;overflow-x:scroll">
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
				<div id="horarios" style="margin: 20px">
					@foreach ($dias as $dia)
						@if ($activeDia == date('d', strtotime($dia)))
							<div class="horario active" id="horario{{ date('d', strtotime($dia)) }}">
								<div class="row" style="margin-top:3%;margin-bottom:3%">
									<div class="col-2"></div>
									<div class="col-5">
										<h3 style="text-align: center; color: #1d47c2;">Tecnologias</h3>
									</div>
									<div class="col-5">
										<h3 style="text-align: center; color: rgb(210, 162, 176);">Arquitetura</h3>
									</div>
								</div>
								@foreach (App\Programas::horasDias($dia) as $hora)
									<div class="row" style="padding: 5px; display: flex;">
										<div class="col-2">
											<div class="card-time">
												<h3>{{ date('H:i', strtotime($hora['horaInicio'])) }}</h3>
											</div>
										</div>

										@foreach ($programas as $programa)
											@if ($programa->dia == $dia && $programa->horaInicio == $hora['horaInicio'])
												@if ($programa->tipo == 'TECH')
													@if ($programa->speedTalkId == 1)
														@if ($programa->id == 17)
															<a class="col-3" style="color:black" href="/programaItSpeedTalks">
																<div>
																	<div class="cardProg">
																		<h3 style="text-align:center;font-weight:bold">{{ $programa->titulo }}</h3>
																		<h5 style="text-align: center;">{{ $programa->sala }}</h5>
																		<p style="font-size:14px;text-align:center">Clica aqui para veres o horário!</p>
																	</div>
																</div>
															</a>
														@else
															<a class="col-5" style="color:black" href="/programaItSpeedTalks">
																<div>
																	<div class="cardProg">
																		<h3 style="text-align:center;font-weight:bold">{{ $programa->titulo }}</h3>
																		<h5 style="text-align: center;">{{ $programa->sala }}</h5>
																		<p style="font-size:14px;text-align:center">Clica aqui para veres o horário!</p>
																	</div>
																</div>
															</a>
														@endif
													@elseif ($programa->keynoteId == 1)
														<a href="/keynote" class="col-5">
															<div style="color:black">
																<div class="cardProg">
																	<p style="text-align:center;font-weight:bold; color:#1EC4BD">KEYNOTE</p>
																	<h3 style="text-align:center;font-weight:bold">{{ $programa->titulo }}</h3>
																	@if ($programa->keynoteId == 1)
																		<h4>{{ $programa->descricao }}</h4>
																	@endif
																	<h5 style="text-align: center;">{{ $programa->sala }}</h5>
																</div>
															</div>
														</a>
													@else
														@if ($programa->id == 25)
															<a class="col-5" style="color:black" href="/apresentacaoprojetos">
																<div>
																	<div class="cardProg">
																		<h3 style="text-align:center;font-weight:bold">{{ $programa->titulo }}</h3>
																		<h5 style="text-align: center;">{{ $programa->sala }}</h5>
																		<p style="font-size:14px;text-align:center">Clica aqui para saberes mais!</p>

																	</div>
																</div>
															</a>
														@elseif ($programa->id == 12)
															<div class="col-3">
																<div class="cardProg">
																	<h3 style="text-align:center;font-weight:bold">{{ $programa->titulo }}</h3>
																	<h5 style="text-align: center;">{{ $programa->sala }}</h5>

																</div>
															</div>
														@elseif ($programa->id == 7)
															<div class="col-2" style="color:black">
																<div class="cardProg">
																	<h3 style="text-align:center;font-weight:bold">{{ $programa->titulo }}</h3>
																	@if ($programa->keynoteId == 1)
																		<h4>{{ $programa->descricao }}</h4>
																	@endif
																	<h5 style="text-align: center;">{{ $programa->sala }}</h5>
																</div>
															</div>
														@else
															<div class="col-5" style="color:black">
																<div class="cardProg">
																	<h3 style="text-align:center;font-weight:bold">{{ $programa->titulo }}</h3>
																	@if ($programa->keynoteId == 1)
																		<h4>{{ $programa->descricao }}</h4>
																	@endif
																	<h5 style="text-align: center;">{{ $programa->sala }}</h5>
																</div>
															</div>
														@endif
													@endif
												@endif
											@endif
										@endforeach
										@foreach ($programas as $programa)
											@if ($programa->dia == $dia && $programa->horaInicio == $hora['horaInicio'])
												@if ($programa->tipo == null)
													@if ($programa->id == 30)
														<div class="col-7" style="color:black">
															<div class="cardProg">
																<h3 style="text-align: center;font-weight:bold">
																	@if ($programa->titulo == null)
																		TBD
																	@else
																		{{ $programa->titulo }}
																	@endif
																</h3>
																<h5 style="text-align: center;">{{ $programa->sala }}</h5>
															</div>
														</div>
													@else
														<div class="col-10" style="color:black">
															<div class="cardProg">
																<h3 style="text-align: center;font-weight:bold">
																	@if ($programa->titulo == null)
																		TBD
																	@else
																		{{ $programa->titulo }}
																	@endif
																</h3>
																<h5 style="text-align: center;">{{ $programa->sala }}</h5>
															</div>
														</div>
													@endif
												@endif
											@endif
										@endforeach
										@foreach ($programas as $programa)
											@if ($programa->dia == $dia && $programa->horaInicio == $hora['horaInicio'])
												@if ($programa->tipo == 'ARQ')
													@if (App\Programas::where('dia', $programa->dia)->where('horaInicio', $programa->horaInicio)->where('tipo', 'TECH')->get()->isEmpty())
														<div class="col-5"></div>
													@endif
													@if ($programa->keynoteId == 1)
														<a href="/keynote" class="col-5">
															<div style="color:black">
																<div class="cardProg">
																	<p style="text-align:center;font-weight:bold; color:#1EC4BD">KEYNOTE</p>
																	<h3 style="text-align: center;font-weight:bold">
																		@if ($programa->titulo == null)
																			TBD
																		@else
																			{{ $programa->titulo }}
																		@endif
																	</h3>
																	<h5 style="text-align: center;">{{ $programa->sala }}</h5>
																</div>
															</div>
														</a>
													@elseif($programa->id == 11)
														<a href="https://videoconf-colibri.zoom.us/j/96147706384" class="col-5">
															<div>
																<div class="cardProg">
																	<h3 style="text-align:center;font-weight:bold">{{ $programa->titulo }}</h3>
																	<h5 style="text-align: center;">{{ $programa->sala }}</h5>
																	<p style="font-size:14px;text-align:center">Clica aqui para acederes à conferência online!</p>

																</div>
															</div>
														</a>
													@else
														<div class="col-5" style="color:black">
															<div class="cardProg">
																<h3 style="text-align: center;font-weight:bold">
																	@if ($programa->titulo == null)
																		TBD
																	@else
																		{{ $programa->titulo }}
																	@endif
																</h3>
																<h5 style="text-align: center;">{{ $programa->sala }}</h5>
															</div>
														</div>
													@endif
												@endif
											@endif
										@endforeach
									</div>
								@endforeach
							</div>
						@else
							<div class="horario" id="horario{{ date('d', strtotime($dia)) }}">
								<div class="row" style="margin-top:3%;margin-bottom:3%">
									<div class="col-2"></div>
									<div class="col-5">
										<h3 style="text-align: center; color: #1d47c2;">Tecnologias</h3>
									</div>
									<div class="col-5">
										<h3 style="text-align: center; color: rgb(210, 162, 176);">Arquitetura</h3>
									</div>
								</div>
								@foreach (App\Programas::horasDias($dia) as $hora)
									<div class="row" style="padding: 5px; display: flex;">
										<div class="col-2">
											<div class="card-time">
												<h3>{{ date('H:i', strtotime($hora['horaInicio'])) }}</h3>
											</div>
										</div>

										@foreach ($programas as $programa)
											@if ($programa->dia == $dia && $programa->horaInicio == $hora['horaInicio'])
												@if ($programa->tipo == 'TECH')
													@if ($programa->speedTalkId == 1)
														@if ($programa->id == 17)
															<a class="col-3" style="color:black" href="/programaItSpeedTalks">
																<div>
																	<div class="cardProg">
																		<h3 style="text-align:center;font-weight:bold">{{ $programa->titulo }}</h3>
																		<h5 style="text-align: center;">{{ $programa->sala }}</h5>
																		<p style="font-size:14px;text-align:center">Clica aqui para veres o horário!</p>
																	</div>
																</div>
															</a>
														@else
															<a class="col-5" style="color:black" href="/programaItSpeedTalks">
																<div>
																	<div class="cardProg">
																		<h3 style="text-align:center;font-weight:bold">{{ $programa->titulo }}</h3>
																		<h5 style="text-align: center;">{{ $programa->sala }}</h5>
																		<p style="font-size:14px;text-align:center">Clica aqui para veres o horário!</p>
																	</div>
																</div>
															</a>
														@endif
													@elseif ($programa->keynoteId == 1)
														<a href="/keynote" class="col-5">
															<div style="color:black">
																<div class="cardProg">
																	<p style="text-align:center;font-weight:bold; color:#1EC4BD">KEYNOTE</p>
																	<h3 style="text-align:center;font-weight:bold">{{ $programa->titulo }}</h3>
																	@if ($programa->keynoteId == 1)
																		<h4>{{ $programa->descricao }}</h4>
																	@endif
																	<h5 style="text-align: center;">{{ $programa->sala }}</h5>
																</div>
															</div>
														</a>
													@else
														@if ($programa->id == 25)
															<a class="col-3" style="color:black" href="/apresentacaoprojetos">
																<div>
																	<div class="cardProg">
																		<h3 style="text-align:center;font-weight:bold">{{ $programa->titulo }}</h3>
																		<h5 style="text-align: center;">{{ $programa->sala }}</h5>
																		<p style="font-size:14px;text-align:center">Clica aqui para saberes mais!</p>

																	</div>
																</div>
															</a>
														@elseif ($programa->id == 7)
															<div class="col-2" style="color:black">
																<div class="cardProg">
																	<h3 style="text-align:center;font-weight:bold">{{ $programa->titulo }}</h3>
																	@if ($programa->keynoteId == 1)
																		<h4>{{ $programa->descricao }}</h4>
																	@endif
																	<h5 style="text-align: center;">{{ $programa->sala }}</h5>
																</div>
															</div>
														@elseif($programa->id == 33)
															<div class="col-2">
																<div class="cardProg">
																	<h3 style="text-align:center;font-weight:bold">{{ $programa->titulo }}</h3>
																	@if ($programa->keynoteId == 1)
																		<h4>{{ $programa->descricao }}</h4>
																	@endif
																	<h5 style="text-align: center;">{{ $programa->sala }}</h5>
																</div>
															</div>
														@else
															<div class="col-5" style="color:black">
																<div class="cardProg">
																	<h3 style="text-align:center;font-weight:bold">{{ $programa->titulo }}</h3>
																	@if ($programa->keynoteId == 1)
																		<h4>{{ $programa->descricao }}</h4>
																	@endif
																	<h5 style="text-align: center;">{{ $programa->sala }}</h5>
																</div>
															</div>
														@endif
													@endif
												@endif
											@endif
										@endforeach
										@foreach ($programas as $programa)
											@if ($programa->dia == $dia && $programa->horaInicio == $hora['horaInicio'])
												@if ($programa->tipo == null)
													<div class="col-10" style="color:black">
														<div class="cardProg">
															<h3 style="text-align: center;font-weight:bold">
																@if ($programa->titulo == null)
																	TBD
																@else
																	{{ $programa->titulo }}
																@endif
															</h3>
															<h5 style="text-align: center;">{{ $programa->sala }}</h5>
														</div>
													</div>
												@endif
											@endif
										@endforeach
										@foreach ($programas as $programa)
											@if ($programa->dia == $dia && $programa->horaInicio == $hora['horaInicio'])
												@if ($programa->tipo == 'ARQ')
													@if (App\Programas::where('dia', $programa->dia)->where('horaInicio', $programa->horaInicio)->where('tipo', 'TECH')->get()->isEmpty())
														<div class="col-5"></div>
													@endif
													@if ($programa->keynoteId == 1)
														<a href="/keynote" class="col-5">
															<div style="color:black">
																<div class="cardProg">
																	<p style="text-align:center;font-weight:bold; color:#1EC4BD">KEYNOTE</p>
																	<h3 style="text-align: center;font-weight:bold">
																		@if ($programa->titulo == null)
																			TBD
																		@else
																			{{ $programa->titulo }}
																		@endif
																	</h3>
																	<h5 style="text-align: center;">{{ $programa->sala }}</h5>
																</div>
															</div>
														</a>
													@else
														<div class="col-5" style="color:black">
															<div class="cardProg">
																<h3 style="text-align: center;font-weight:bold">
																	@if ($programa->titulo == null)
																		TBD
																	@else
																		{{ $programa->titulo }}
																	@endif
																</h3>
																<h5 style="text-align: center;">{{ $programa->sala }}</h5>
															</div>
														</div>
													@endif
												@endif
											@endif
										@endforeach
									</div>
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

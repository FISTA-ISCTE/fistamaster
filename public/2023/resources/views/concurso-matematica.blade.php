@extends('layouts.nav')
@section('title', 'Concurso de Matematica')
@section('content')
	<link href="{{ asset('css/becomePartner.css') }}" rel="stylesheet">
	<script>
		const nav = document.querySelector('nav')
		const img = document.querySelector('img')
		nav.classList.add('active');
		img.setAttribute('src', "{{ asset('img/logo_fista_horizontal_azul_2023_v2.png') }}");
	</script>
	<style>
		h4 {
			text-align: center;
		}

		.projeto:link,
		.projeto:visited,
		.projeto:active {
			margin-bottom: 50px;
			color: #96c45b !important;
			text-decoration: none;
		}



		@media only screen and (min-width:768px) {
			.titulo {
				margin-top: 20px;
				padding-top: 50px;
			}

			.botao2 {
				margin-bottom: 35px;
			}

			#titulo2016 {
				padding-top: 120px;
			}

			#imagemflyer {
				padding-bottom: 110px;
			}

			#imagem2016 {
				margin-bottom: 60px;
			}

			#botao {
				margin-bottom: 60px
			}
		}

		@media only screen and (max-width:767px) {
			.titulo {
				margin-top: 20px;
				padding-top: 80px;
			}

			.botao2 {
				margin-bottom: 70px;
			}

			#titulo2016 {
				padding-top: 200px;
			}

			#imagemflyer {
				padding-bottom: 10px;
			}

			#imagem2016 {
				padding-bottom: 190px;
			}

			#botao {
				margin-bottom: 60px
			}
		}

		@media only screen and (max-width:991px) {
			#botao2019 {
				margin-bottom: 60px;
			}

			#botao {
				margin-bottom: 60px
			}
		}

		hr {
			display: block;
			height: 1px;
			border-top: 5px solid black;
			width: 40%;
		}
	</style>

	<div class="container">
		<h1 style="font-size:60px;color:#777777;padding-top:100px;font-weight:900;">Concurso de Matemática e Programação</h1>

		<div class="row" style="margin-top:3%">
			<div class="col-lg-6 col-md-12" style="text-align:center;">
				<p style="margin-top:20px;font-size: 23px;">Gostas de trabalhar em equipa, matemática e programação? O Fista tem um
					desafio para ti! Este ano inscreve-te no concurso de matemática e habilita-te a ganhar 75 euros! Este concurso é
					para todos e ganha o mais rápido, achas que tens o que é preciso para ser o primeiro a concluir os desafios que
					temos para ti? Inscreve te com os teus amigos! Consulta aqui o regulamento em breve!</p>
				<a href="{{ asset('img/regulamentos/Regulamento_Concurso_Matematica_2023_v2.pdf') }}" target="_blank"><button
						class="btn-fista">Regulamento</button></a>

			</div>
			<div class="col-lg-6 col-md-12">
				<img alt="" src="/img/concursomatematica.png"
					style="display:block;margin-left:auto;margin-right:auto;margin-top:20px;">
			</div>
		</div>
		<!--<div>
																																														<h1 style="text-align: center; font-size: 50px; font-weight:900;margin-top:5%;color:black">EM BREVE<hr/></h1>
																																										</div>-->

		<!--<div class="col-md-8" style="display:block;margin-right:auto;margin-left:auto">
																							<h1 style="font-size:60px;color:#1EC4BD;font-weight: bold;padding-top:100px;text-align:center">Inscreve-te Aqui</h1>
																							<form method="POST" action="/concurso-matematica" enctype="multipart/form-data">
																								@csrf
																								<label>Nome do Grupo</label>
																								<input class="form-control" type="text" name="nomeGrupo" placeholder="Nome do Grupo"
																									style="margin-top:10px;border-color:#1EC4BD; border-width:2px;" required>
																								<label style="margin-top:3%">Elemento 1</label>
																								<input class="form-control" type="text" name="nome1" placeholder="Nome"
																									style="margin-top:10px;border-color:#1EC4BD; border-width:2px;" required>
																								<input class="form-control" type="text" name="email1" placeholder="Email"
																									style="margin-top:10px;border-color:#1EC4BD; border-width:2px;" required>
																								<div class="form-group">
																									<select class="form-control" name="curso1" style="margin-top:10px; border-color:#1EC4BD; border-width:2px;"
																										required>
																										<option value="" disabled selected>Curso</option>
																										@foreach (App\Curso::all() as $curso)
	<option value="{{ $curso->id }}">{{ $curso->designacao }}</option>
	@endforeach
																									</select>
																								</div>
																								<label>Elemento 2 (opcional)</label>
																								<input class="form-control" type="text" name="nome2" placeholder="Nome"
																									style="margin-top:10px;border-color:#1EC4BD; border-width:2px;">
																								<input class="form-control" type="text" name="email2" placeholder="Email"
																									style="margin-top:10px;border-color:#1EC4BD; border-width:2px;">
																								<div class="form-group">
																									<select class="form-control" name="curso2" style="margin-top:10px; border-color:#1EC4BD; border-width:2px;">
																										<option value="" disabled selected>Curso</option>
																										@foreach (App\Curso::all() as $curso)
	<option value="{{ $curso->id }}">{{ $curso->designacao }}</option>
	@endforeach
																									</select>
																								</div>
																								<label>Elemento 3 (opcional)</label>
																								<input class="form-control" type="text" name="nome3" placeholder="Nome"
																									style="margin-top:10px;border-color:#1EC4BD; border-width:2px;">
																								<input class="form-control" type="text" name="email3" placeholder="Email"
																									style="margin-top:10px;border-color:#1EC4BD; border-width:2px;">
																								<div class="form-group">
																									<select class="form-control" name="curso3" style="margin-top:10px; border-color:#1EC4BD; border-width:2px;">
																										<option value="" disabled selected>Curso</option>
																										@foreach (App\Curso::all() as $curso)
	<option value="{{ $curso->id }}">{{ $curso->designacao }}</option>
	@endforeach
																									</select>
																								</div>
																								<label>Elemento 4 (opcional)</label>
																								<input class="form-control" type="text" name="nome4" placeholder="Nome"
																									style="margin-top:10px;border-color:#1EC4BD; border-width:2px;">
																								<input class="form-control" type="text" name="email4" placeholder="Email"
																									style="margin-top:10px;border-color:#1EC4BD; border-width:2px;">
																								<div class="form-group">
																									<select class="form-control" name="curso4" style="margin-top:10px; border-color:#1EC4BD; border-width:2px;">
																										<option value="" disabled selected>Curso</option>
																										@foreach (App\Curso::all() as $curso)
	<option value="{{ $curso->id }}">{{ $curso->designacao }}</option>
	@endforeach
																									</select>
																								</div>
																								<div>
																									<button type="submit" class="btn-fista"
																										style="border-color:#1EC4BD ;margin-top:3rem;border-width:2px;margin-bottom:2rem;display: block;margin-left: auto;margin-right: auto">Inscrever</button>
																								</div>
																							</form>
																						</div>-->
	</div>

	<section style="background-color:white;width:100%">
		<div
			style="padding-top:70px;padding-bottom:0px;background-color:#f4f6f8; clip-path: polygon(0 0, 100% 10%, 100% 100%, 0% 100%);">
			<div class="container" style="padding-bottom:10rem; ">
				<h1 style="color:#1EC4BD; padding-top:5rem;">Edição do FISTA23</h1>
				<div class="row">
					<div class="col-md-12">
						<div class="container" style="padding-top:30px;">
							<div style="text-align: center">
								<h3>Classificação</h3>
								<table class="table">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Nome Grupo</th>
											<th scope="col">Pontos</th>
										</tr>
									</thead>
									<tbody>

										<?php
										use App\Contest;
										$grupos = Contest::where('tipo_concurso', 'MAT')
										    ->orderBy('pontos', 'desc')
										    ->get();
										?>
										@foreach ($grupos as $grupo)
											@if ($loop->first)
												<tr style="font-size:21px;color:#1EC4BD;font-weight:bold;">
													<th scope="row">{{ $loop->iteration }}º</th>
													<td>{{ $grupo->nome_grupo }}</td>
													<td>{{ $grupo->pontos }}</td>
												</tr>
											@else
												<tr style="font-size:19px;color:black;font-weight:bold;">
													<th scope="row">{{ $loop->iteration }}º</th>
													<td>{{ $grupo->nome_grupo }}</td>
													<td>{{ $grupo->pontos }}</td>
												</tr>
											@endif
										@endforeach
									</tbody>
								</table>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>


	<section style="background-color:white;width:100%">
		<div
			style="padding-top:70px;padding-bottom:0px;background-color:#f4f6f8; clip-path: polygon(0 0, 100% 10%, 100% 100%, 0% 100%);">
			<div class="container" style="padding-bottom:10rem; ">
				<h1 style="color:#1EC4BD; padding-top:5rem;">Edição do FISTA22</h1>
				<div class="row">
					<div class="col-md-12">
						<div class="container" style="padding-top:30px;">
							<div style="text-align: center">
								<h3>Classificação</h3>
								<table class="table">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Nome Grupo</th>
											<th scope="col">Pontos</th>
										</tr>
									</thead>
									<tbody>
										<tr style="font-size:21px;color:#1EC4BD;font-weight:bold;">
											<th scope="row">1º</th>
											<td>__init__</td>
											<td>18</td>
										</tr>
										<tr>
											<th scope="row">2º</th>
											<td>Gajas e Jola</td>
											<td>13</td>
										</tr>
										<tr>
											<th scope="row">3º</th>
											<td>Esser</td>
											<td>13</td>
										</tr>
										<tr>
											<th scope="row">4º</th>
											<td>Zero_Brain</td>
											<td>13</td>
										</tr>
										<tr>
											<th scope="row">5º</th>
											<td>Ninjas 2.0</td>
											<td>8</td>
										</tr>
										<tr>
											<th scope="row">6º</th>
											<td>Laranja</td>
											<td>8</td>
										</tr>
										<tr>
											<th scope="row">7º</th>
											<td>Martim</td>
											<td>3</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

					</div>
				</div>
				<!--
					@if (Auth::check() && App\Contest::where('email1', Auth::user()->email)->first() != null)
	<h1 style="color:#1EC4BD; margin-top:4%">Submissão de Respostas</h1>
						<h3>Grupo: {{ App\Contest::where('email1', Auth::user()->email)->first()->nome_grupo }}</h3>
						<a href="{{ asset('img/Enunciado_Concurso_Matematica_FISTA22.pdf') }}" target="_blank"><button class="btn-fista"
								style="margin-bottom:3%;width:150px">Enunciado</button></a>
						<form method="POST" action="/submeterRespostasConcMat" enctype="multipart/form-data" target="gravar">
							@csrf
							<input type="hidden" name="idGrupo"
								value="{{ App\Contest::where('email1', Auth::user()->email)->first()->id }}">
							<label style="font-weight:bold">Pergunta 1 (3 pontos)</label>
							<input class="form-control" type="text" name="pergunta1" placeholder="Resposta Pergunta 1"
								style="margin-top:10px;border-color:#1EC4BD; border-width:2px;">
							<label style="margin-top:3%;font-weight:bold">Pergunta 2 (5 pontos)</label>
							<input class="form-control" type="text" name="pergunta2" placeholder="Resposta Pergunta 2"
								style="margin-top:10px;border-color:#1EC4BD; border-width:2px;">
							<label style="margin-top:3%;font-weight:bold">Pergunta 3 (5 pontos)</label>
							<input class="form-control" type="text" name="pergunta3" placeholder="Resposta Pergunta 3"
								style="margin-top:10px;border-color:#1EC4BD; border-width:2px;">
							<label style="margin-top:3%;font-weight:bold">Pergunta 4 (5 pontos)</label>
							<input class="form-control" type="text" name="pergunta4" placeholder="Resposta Pergunta 4"
								style="margin-top:10px;border-color:#1EC4BD; border-width:2px;">
							<div>
								<button type="submit" class="btn-fista"
									style="border-color:#1EC4BD ;margin-top:3rem;border-width:2px;margin-bottom:2rem;display: block;margin-left: auto;margin-right: auto">Submeter</button>
							</div>
							<iframe name="gravar" style="display: none;"></iframe>
						</form>
	@endif
					-->
			</div>
		</div>
	</section>
@endsection

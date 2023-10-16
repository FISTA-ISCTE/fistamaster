@extends('layouts.nav')
@section('title', 'Concurso de Cibersegurança')
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
		<h1 style="font-size:60px;color:#777777;padding-top:100px;font-weight:900;">Concurso de Cibersegurança</h1>

		<div class="row" style="margin-top:3%;margin-right:0;margin-left:0">
			<div class="col-lg-6 col-md-12" style="text-align: center;">
				<p style="margin-top:20px;font-size: 23px;">Gostavas de testar a tua criatividade, agilidade mental,
					conhecimento vários, trabalho de equipa e resiliência, tudo numa competição contra-relógio? O Concurso
					CTF do FISTA23, organizado pela Academia de Redes e Segurança da ISTA, é o desafio ideal para ti!</p>
				<img src="https://fista.iscte-iul.pt/storage/users/empresas/1561667389253.png"
					style=" width: 200px; display:block;margin-top:20px; padding-bottom:40px;margin-left:auto;margin-right:auto">
				<a href="{{ asset('img/RegulamentoCTF23.pdf') }}" target="_blank"><button class="btn-fista">Regulamento</button></a>
			</div>
			<div class="col-lg-6 col-md-12" style="display:block;margin-left:auto;margin-right:auto;margin-top:20px">
				<img alt="" src="/img/concursociberseguranca.png">
			</div>
		</div>
		<div>

			<!--<div class="col-md-8" style="display:block;margin-right:auto;margin-left:auto">
					<h1 style="font-size:60px;color:#1EC4BD;font-weight: bold;padding-top:100px;text-align:center">Inscreve-te
						Aqui</h1>
					<form method="POST" action="/concurso-ciberseguranca" enctype="multipart/form-data">
						@csrf
						<label>Elemento 1</label>
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
						<label>Elemento 2(opcional)</label>
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
						<label>Elemento 3(opcional)</label>
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
						<div>
							<button type="submit" class="btn-fista"
								style="border-color:#1EC4BD ;margin-top:3rem;border-width:2px;margin-bottom:2rem;display: block;margin-left: auto;margin-right: auto">Inscrever</button>
						</div>
					</form>
				</div>
			-->

			<div class="container">
				<h1 style="color:#1EC4BD; padding-top:2rem;">Edição de 2022</h1>
				<div class="row">
					<div class="col-md-12">
						<div class="container" style="padding-top:30px;">

							<div style="text-align: center ">
								<h3>Classificação</h3>
								<table class="table">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Nome Participantes</th>
										</tr>
									</thead>
									<tbody>
										<tr style="font-size:21px;color:#1EC4BD;">
											<th scope="row">1º</th>
											<td><span style="font-weight:bold;">Tiago Belo </span> (Eng. Informática) e
												<span style="font-weight:bold;">Samuel Correia</span> (Eng. Informática)
											</td>
										</tr>
										<tr>
											<th scope="row">2º</th>
											<td><span style="font-weight:bold;">Daniel Maio</span> (Eng. de Telecomunicações
												e Informática) e <span style="font-weight:bold;">Manuel Covas</span> (Eng.
												de Telecomunicações e Informática)</td>
										</tr>
										<tr>
											<th scope="row">3º</th>
											<td><span style="font-weight:bold;">Rita Regada</span> (Eng. Informática), <span
													style="font-weight:bold;">Nuno Alves</span> (Eng. Informática) e <span style="font-weight:bold;">Francisco
													Rodrigues</span> (Eng. Informática)
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

					</div>
				</div>
			</div>




		</div>
	</div>
@endsection

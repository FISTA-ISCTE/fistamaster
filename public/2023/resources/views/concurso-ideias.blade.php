@extends('layouts.nav')
@section('title', 'Concurso de Ideias')
@section('content')
	<link href="{{ asset('css/becomePartner.css') }}" rel="stylesheet">
	<script>
		const nav = document.querySelector('nav')
		const img = document.querySelector('img')
		nav.classList.add('active');
		img.setAttribute('src', "{{ asset('img/logo_fista_horizontal_azul_2023_v2.png') }}");
	</script>
	<style>
		p.blocktext {

			width: 40%;
		}

		hr {
			display: block;
			height: 1px;
			border-top: 5px solid black;
			width: 40%;
		}

		h4 {
			text-align: center;
		}

		.projeto:link,
		.projeto:visited,
		.projeto:active {
			margin-bottom: 50px;
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
	</style>

	<div class="container">
		<h1 style="font-size:60px;color: #666666;font-weight: bold;padding-top:100px;">Concurso de ideias</h1>
	</div>
	<style>
		ul {
			margin-left: 20px;
		}

		.upload-btn-wrapper {
			position: relative;
			overflow: hidden;
			display: inline-block;
		}

		.fileb {
			border: 2px solid #7AC14F;
			color: #7AC14F;
			font-weight: bold;
			background-color: white;
			padding: 2px 8px;
			border-radius: 8px;
			font-size: 2rem;
			font-weight: bold;
		}

		.upload-btn-wrapper input[type=file] {
			font-size: 100px;
			position: absolute;
			left: 0;
			top: 0;
			opacity: 0;
		}

		.cont {
			display: flex;
			align-items: center;
			justify-content: center;
			text-align: center
		}
	</style>
	<section style="background-color:white;width:100%;">
		<div style="padding-top:0px;padding-bottom:70px;background-color:white">
			<div class="container">

				<!-- 2021
																																																																													<h1 style="color:#666666">Edição de 2022</h1> -->
				<div class="row" style="margin:0">


					<div class="col-lg-6 col-md-12">
						<div class="cont">

							<div>

								<p style="margin-top:20px;font-size: 23px;text-align:center;padding: 0 2% 0 2%">Todos os anos, o FISTA permite-te
									dar largas à imaginação e desenvolver uma ideia! Forma um grupo constituído por 2 a 3 pessoas e participa
									no concurso de Ideias!</p>
								<!--<p style="margin-top:20px;font-size: 23px;text-align:center;padding-right: 20px;width:80%">Consulta aqui o regulamento em breve!</p>-->
								<!-- Descomentar quando sair o regulamento, e comentar o p acima-->

								<p style="margin-top:20px;font-size: 22px;text-align:center;padding:0 2% 0 2%">Este ano o tema é <b>"Soluções
										para
										problemas do quotidiano"</b>, em parceria com a bi4all, para ficares a saber mais sobre o funcionamento do
									concurso
									consulta o regulamento.</p>

								<p>
									<img src="https://fista.iscte-iul.pt/storage/users/empresas/2101670933578.png"
										style=" width: 200px; display:block;margin-top:20px; padding-bottom:20px;margin-left:auto;margin-right:auto">

									<a class="projeto" target="_blank" href="{{ asset('img/regulamento_concurso_ideias23.pdf') }}"><button
											class="btn-fista"
											style="display:block;margin-left:auto;margin-right:auto;margin-top:5%">Regulamento</button></a>
								</p>

							</div>
						</div>
						<!--<p style="text-align: center;font-size: 50px;font-weight: bold;margin-top:20px">EM BREVE<hr/></p>-->
						<!--<p style="margin-top:20px;font-size: 22px;">Com mais uma edição do FISTA vem mais uma edição do Concurso de Ideias! Este ano apresentamos-te o tema, para ficares a saber mais sobre o funcionamento do concurso consulta o <a href="https://fista.iscte-iul.pt/storage/settings/November2020/regulamento21.pdf" style="color:black !important;font-size: 22px !important;font-weight: bold !important;">regulamento </a>.</p>-->

					</div>

					<div class="col-lg-6 col-md-12">
						<img src="{{ asset('img/concurso-ideias/img_ideia.png') }}"
							style="display:block;margin-top:20px; padding-bottom:40px;margin-left:auto;margin-right:auto">
					</div>

					{{-- <div class="col-md-8" style="display:block;margin-right:auto;margin-left:auto">

						<h1 style="font-size:60px;color:#1EC4BD;font-weight: bold;padding-top:100px;text-align:center">Inscreve-te aqui!
						</h1>
						<form method="POST" action="/concurso-ideias" enctype="multipart/form-data">
							@csrf
							<label>Nome do Grupo *</label>
							<input class="form-control" type="text" name="nome_grupo" placeholder="Nome Grupo"
								style="margin-top:10px;border-color:#1EC4BD; border-width:2px;" required>

							<label style="margin-top: 2rem;">Elemento 1 *</label>
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
							<label>Elemento 2 *</label>
							<input class="form-control" type="text" name="nome2" placeholder="Nome"
								style="margin-top:10px;border-color:#1EC4BD; border-width:2px;" required>
							<input class="form-control" type="text" name="email2" placeholder="Email"
								style="margin-top:10px;border-color:#1EC4BD; border-width:2px;" required>
							<div class="form-group">
								<select class="form-control" name="curso2" style="margin-top:10px; border-color:#1EC4BD; border-width:2px;"
									required>
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
							<div>
								<script>
									function sub(obj) {
										var file = obj.value;
										var fileName = file.split("\\");
										document.getElementById("yourBtn").innerHTML = fileName[fileName.length - 1];
										document.myForm.submit();
										event.preventDefault();
									}
								</script>
								<div style="display: flex; justify-content: center; align-items: center">
									<div>
										<img src="img/document2.png" style="height: 2rem; cursor: pointer;">
									</div>
									<div>
										<input id="file" style="opacity: 0; width:1px; float: left;" name="file" required onchange="sub(this)"
											type="file" accept=".pdf">
										<label class="btn-fista_file w-auto" id="yourBtn" style="cursor:pointer;margin-top:8px;color: #1EC4BD;"
											for="file">Upload PDF *</label>
									</div>
								</div>
							</div>
							<div>
								<button type="submit" class="btn-fista"
									style="border-color:#1EC4BD ;margin-top:3rem;border-width:2px;margin-bottom:2rem;display: block;margin-left: auto;margin-right: auto">Inscrever</button>

							</div>


						</form>
					</div> --}}

					<!--<div class="col-md-8" style="display:block;margin-right:auto;margin-left:auto">
																																																																																	<form method="POST" action="/uploadProjetoIdeias" enctype="multipart/form-data">
																																																																																					@csrf
																																																																																					<h2 style="color:#1EC4BD;margin-top:3%">Submeter Projeto</h2>
																																																																																					<label>Grupo (Obrigatório)</label>
																																																																																					<div class="form-group">
																																																																																									<select class="form-control" name="grupo_id" style="margin-top:10px; border-color:#1EC4BD; border-width:2px;" required>
																																																																																													<option value="" disabled selected>Grupo</option>
																																																																																													@foreach (App\Contest::where('tipo_concurso', 'IDEIAS')->get() as $grupo)
	<option value="{{ $grupo->id }}">{{ $grupo->nome1 }}@if ($grupo->nome2 != null)
	, {{ $grupo->nome2 }}
	@endif @if ($grupo->nome3 != null)
	, {{ $grupo->nome3 }}
	@endif @if ($grupo->nome4 != null)
	, {{ $grupo->nome4 }}
	@endif
																																																									</option>
	@endforeach
																																																																																									</select>
																																																																																					</div>
																																																																																					<div class="row justify-content-center align-self-center" style="margin-bottom:1.1rem;">
																																																																																									<div class="upload-btn-wrapper" style="">
																																																																																													<button class="btn fileb" style="border-color:#1EC4BD"><i  class="fa fa-upload"></i>Carregar Projetos</button>
																																																																																													<input required type="file" name="file" />
																																																																																									</div>
																																																																																					</div>
																																																																																					<p style="text-align:center">Caso queiras submeter vários ficheiros, tem que ser em zip.</p>
																																																																																					<div>
																																																																																									<button type="submit" class="btn" style="border-color:#1EC4BD ;margin-top:2.5rem;border-width:2px;margin-bottom:2rem;display: block;margin-left: auto;margin-right: auto">Confirmar</button>
																																																																																					</div>
																																																																																	</form>

																																																																																	<p style="font-weight:bold">Caso tenhas algum problema a submeter o teu ficheiro, envia-nos por email com o assunto "Concurso de Ideias" e os nomes do teu grupo!</p>
																																																																													</div> -->

				</div>
	</section>

	<section style="background-color:white;width:100%;">
		<div style="background-color:white; clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);">
			<div class="container">

				<h1 class="titulo" style="color:black;font-weight: bold">Edição de 2022<span style="font-weight:bold"> Projeto
						Vencedor</span></h1>

				<div class="row">
					<div class="col-12 col-md-7 order-md-1 order-2">
						<p style="color:black">O projecto vencedor da edição de 2022 do Concurso de Ideias foi a aplicação <span
								style="font-weight:bold">SAFESIT</span>, com o objetivo de permitir a monitorização ao minuto da lotação das
							salas de estudo da faculdade. </span></p>
						<h3 style="color: black; font-weight: bold">Grupo:</h3>
						<ul>
							<li style="color:black; font-size:18px">Sebastião Leal (Informática e Gestão de Empresas)</li>
							<li style="color:black; font-size:18px">Francisco Quintela (Informática e Gestão de Empresas) </li>
						</ul>
						<a class="projeto" href="/img/concurso-ideias/file/ci_venc_2022_presentation.pdf" target="_blank"><button
								class="btn-fista" style="display:block;margin-left:auto;margin-right:auto;margin-top:6%">Conhecer o
								projeto</button></a>
					</div>
					<div class="col-12 col-md-5 order-md-2 order-1">
						<img src="/img/concurso-ideias/ci_venc_2022.png" width="100%"
							style="display:block;margin:auto; margin-bottom:60px;">
					</div>
				</div>

			</div>
		</div>
	</section>


	<section style="background-color:white;width:100%;">
		<div style="background-color:white; clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);">
			<div class="container">

				<!-- 2021 -->
				<h1 class="titulo" style="color:black;font-weight: bold">Edição de 2021<span style="font-weight:bold"> Projeto
						Vencedor</span></h1>

				<div class="row">
					<div class="col-12 col-md-5">
						<img src="/img/concurso-ideias/ci_venc_2021.png" width="80%"
							style="display:block;margin:auto; margin-bottom:60px;">
					</div>

					<div class="col-12 col-md-7">
						<p style="color:black">O projecto vencedor da edição de 2021 do Concurso de Ideias foi Iscte Virtual,<span
								style="font-weight:bold"> uma solução do tema "Desenvolvimento de Atividades Interativas dentro do ISCTE".
							</span></p>
						<h3 style="color: black; font-weight: bold">Grupo:</h3>
						<ul>
							<li style="color:black; font-size:18px">João Antão (Engenharia de Telecomunicações e Informática)</li>
							<li style="color:black; font-size:18px">Bernardo Gameiro (Informática e Gestão de Empresas) </li>
						</ul>
						<a class="projeto" href="/img/concurso-ideias/file/ci_venc_2021_presentation.pdf" target="_blank"><button
								class="btn-fista" style="display:block;margin-left:auto;margin-right:auto;margin-top:6%">Conhecer o
								projeto</button></a>
						<!--
																																																																																					<button class="btn-fista" style="display:block;margin-left:auto;margin-right:auto;margin-top:10%"><a class="projeto" href="/img/concurso-ideias/file/ci_venc_2020_presentation.pptx.pdf">Conhecer o projeto</a></button> -->
					</div>
				</div>

			</div>
		</div>
	</section>

	<section style="background-color:white;width:100%;">
		<div style="background-color:white; clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);">
			<div class="container">

				<!-- 2020 -->
				<h1 class="titulo" style="color:black;font-weight: bold">Edição de 2020<span style="font-weight:bold"> Projeto
						Vencedor</span></h1>

				<div class="row">
					<div class="col-12 col-md-7 order-md-1 order-2">
						<p style="color:black">O projecto vencedor da edição de 2020 do Concurso de Ideias foi,<span
								style="font-weight:bold"> uma solução de mesa de estudo inteligente. </span></p>
						<h3 style="color: black; font-weight: bold">Grupo:</h3>
						<ul>
							<li style="color:black; font-size:18px">Ben-hur Fidalgo (Informática e Gestão de Empresas)</li>
							<li style="color:black; font-size:18px">João Costa (Informática e Gestão de Empresas) </li>
						</ul>
						<a class="projeto" href="/img/concurso-ideias/file/ci_venc_2020_presentation.pptx.pdf" target="_blank"><button
								class="btn-fista" style="display:block;margin-left:auto;margin-right:auto;margin-top:6%">Conhecer o
								projeto</button></a>
						<!--
																																																																																					<button class="btn-fista" style="display:block;margin-left:auto;margin-right:auto;margin-top:10%"><a class="projeto" href="/img/concurso-ideias/file/ci_venc_2020_presentation.pptx.pdf">Conhecer o projeto</a></button> -->
					</div>
					<div class="col-12 col-md-5 order-md-2 order-1">
						<img src="/img/concurso-ideias/Imagem1.jpg" width="100%"
							style="display:block;margin:auto; margin-bottom:60px;">
					</div>
				</div>

			</div>
		</div>
	</section>

	<section style="background-color:white;width:100%;">
		<div style="background-color: white;">
			<div class="container">

				<!-- 2019 -->
				<h1 class="titulo" style="color:black;font-weight: bold">Edição de 2019<span style="font-weight:bold"> Projeto
						Vencedor</span></h1>

				<div class="row" style="margin-top:20px">
					<div class="col-12 col-md-5">
						<img src="/img/concurso-ideias/ci_venc_2019.png" width="90%"
							style="display:block;margin:auto; margin-bottom:60px;">
					</div>

					<div class="col-12 col-md-7">
						<p style="color:black">O projecto vencedor da edição de 2019 do Concurso de Ideias foi o<span
								style="font-weight:bold"> iTrash, uma solução de ecoponto inteligente.</span></p>
						<h3 style="color:black; font-weight: bold">Grupo:</h3>
						<ul>
							<li style="color:black; font-size:18px">António Lima (Informática e Gestão de Empresas)</li>
							<li style="color:black; font-size:18px">Tomás Mendes (Informática e Gestão de Empresas)</li>
						</ul>
						<a class="projeto" href="/img/concurso-ideias/file/ci_venc_2019_presentation.pdf" target="_blank"><button
								class="btn-fista" style="display:block;margin-left:auto;margin-right:auto;margin-top:6%">Conhecer o
								projeto</button></a>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section style="background-color:white;width:100%;">
		<div style="background-color:white; clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);">
			<div class="container">

				<!-- 2017 -->
				<h1 class="titulo" style="color:black;font-weight: bold">Edição de 2017<span style="font-weight:bold"> Projeto
						Vencedor</span></h1>

				<div class="row">
					<div class="col-12 col-md-5 order-md-2 order-1">
						<img src="/img/concurso-ideias/ci_venc_2017.png" width="90%"
							style="display:block;margin:auto; margin-bottom:60px;">
					</div>

					<div class="col-12 col-md-7 order-md-1 order-2">
						<p style="color:black">Na edição de 2017 do Concurso de Ideias foi proposta a criação de <span
								style="font-weight:bold">um Ponto de Acesso Inteligente para recolha e apresentação de informações.</span> O
							projecto vencedor foi o INFUS!</p>
						<h3 style="color:black; font-weight: bold">Grupo:</h3>
						<ul>
							<li style="color:black; font-size:18px">Luísa Almeida (Arquitetura)</li>
							<li style="color:black; font-size:18px">Eduardo Gonçalves (Eng. de Telecomunicações e Informática)</li>
						</ul>
						<a class="projeto" href="/img/concurso-ideias/file/ci_venc_2017_presentation.pdf" target="_blank"><button
								class="btn-fista" style="display:block;margin-left:auto;margin-right:auto;margin-top:6%">Conhecer o
								projeto</button></a>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-6">
						<img src="/img/concurso-ideias/premier1_2017.jpeg" width="100%"
							style="display:block;margin:auto; margin-bottom:30px;">
					</div>

					<div class="col-12 col-md-6">
						<img src="/img/concurso-ideias/premier2_2017.jpeg" width="57%" style="display:block;margin:auto;">
					</div>
				</div>

			</div>
		</div>
	</section>

	<section style="background-color:white;width:100%;">
		<div style="background-color:white">
			<div class="container">

				<!-- 2016 -->
				<h1 class="titulo" style="color:black;font-weight: bold">Edição de 2016<span style="font-weight:bold"> Projeto
						Vencedor</span></h1>

				<div class="row" style="margin-top:20px">
					<div class="col-12 col-md-5">
						<img src="/img/concurso-ideias/ci_venc_2016.png" width="90%"
							style="display:block;margin:auto; margin-bottom:60px;">
					</div>

					<div class="col-12 col-md-7">
						<p style="color:black">O projecto vencedor da edição de 2016 do Concurso de Ideias foi o Verticallis,<span
								style="font-weight:bold"> uma solução de jardim vertical inteligente.</p>
						<h3 style="color:black; font-weight: bold">Grupo:</h3>
						<ul>
							<li style="color:black; font-size:18px">João Pedro Duarte Monge (Eng. de Telecomunicações e Informática)</li>
							<li style="color:black; font-size:18px">João Duarte Batalha Parcelas (Arquitetura)</li>
							<li style="color:black; font-size:18px">André Marques (Arquitetura)</li>
							<li style="color:black; font-size:18px">Fernando Simões (Arquitetura)</li>
						</ul>
						<a class="projeto" href="/img/concurso-ideias/file/ci_venc_2016_presentation.pdf" target="_blank"><button
								class="btn-fista" style="display:block;margin-left:auto;margin-right:auto;margin-top:6%">Conhecer o
								projeto</button></a>
					</div>
				</div>

				<span style="font-weight:400;font-size:35px;color:#666666;"> Inauguração</span>

				<div class="row">
					<div class="col-12 col-md-6">
						<img src="/img/concurso-ideias/flyer_2016.png" id="imagemflyer" width="70%"
							style="display:block;margin:auto;">
					</div>

					<div class="col-12 col-md-6">
						<img src="/img/concurso-ideias/premier1_2016.jpg" width="73%"
							style="display:block;margin:auto; margin-bottom:10px;">
						<img src="/img/concurso-ideias/premier2_2016.jpg" id="imagem2016" width="73%"
							style="display:block;margin:auto;">
					</div>

				</div>

			</div>
		</div>
	</section>

	<section style="background-color:white;width:100%;">
		<div style="background-color:white; clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);">
			<div class="container">

				<!-- 2015 -->
				<h1 class="titulo" style="color:black;font-weight: bold">Edição de 2015<span style="font-weight:bold"> Projeto
						Vencedor</span></h1>

				<div class="row">
					<div class="col-12 col-md-6">
						<img src="/img/concurso-ideias/ci_venc_2015.jpg" width="90%"
							style="display:block;margin:auto;padding-top:15px;">
					</div>

					<div class="col-12 col-md-6">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1GwazM1_8Gk" frameborder="0"
								allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div>

				<div class="row" style="margin-top:40px;">

					<div class="col-12 col-md-6">
						<p style="color:black;">O projecto Smartbench é a proposta vencedora da edição de 2015 do Concurso de Ideias. Foi
							desenvolvido pelos alunos do Departamento de Arquitetura e Urbanismo e do Departamento de Ciências e Tecnologias
							de Informação com o apoio do IT-IUL e
							VFABLAB. A inauguração teve lugar no dia 16 de Dezembro de 2015. Parabéns aos nossos alunos por terem concretizado
							este projeto!</p>
					</div>

					<div class="col-12 col-md-6">
						<h3 style="color:black; font-weight: bold">Grupo:</h3>
						<ul>
							<li style="color:black; font-size:18px">Pedro Romano (Eng. de Telecomunicações e Informática)</li>
							<li style="color:black; font-size:18px">André Gloria (Eng. de Telecomunicações e Informática)</li>
							<li style="color:black; font-size:18px">Daniela Rosa (Arquitetura)</li>
							<li style="color:black; font-size:18px">João Ribeiro (Arquitetura)</li>
						</ul>
						<a class="projeto" href="/img/concurso-ideias/file/ci_venc_2015_presentation.pdf" target="_blank"><button
								class="btn-fista botao2" style="display:block;margin-left:auto;margin-right:auto;margin-top:6%">Conhecer o
								projeto</button></a>

					</div>
				</div>

			</div>
		</div>
	</section>

	<!--
																																																																	<section style="background-color:white;width:100%;">
																																																																					<div style="background-color:#f4f6f8; clip-path: polygon(0 10%, 100% 0, 100% 100%, 0 90%);">
																																																																									<div class="container">
																																																																													2018
																																																																													<h1 style="margin-top:60px">Edição de 2018<span style="font-weight:400;font-size:35px"> Projeto Vencedor</span></h1>
																																																																													<div class="row" style="margin-top:20px">
																																																																																	<div class="col-12 col-md-6">
																																																																																	</div>
																																																																																	<div class="col-12 col-md-6">
																																																																																					<p>O projecto vencedor da edição de 2018 do Concurso de Ideias foi o , uma solução de . Parabéns pela ideia!</p>
																																																																																					<h2>Grupo:</h2>
																																																																																					<ul>
																																																																																									<li></li>
																																																																																									<li></li>
																																																																																					</ul>
																																																																																					<button class="btn" style="border-color:green; border-width:2px; display:block; margin:auto; margin-top:30px;"><a id="projeto" href="#">Conhecer o projeto</a></button>
																																																																																	</div>
																																																																													</div>
																																																																									</div>
																																																																					</div>
																																																																	</section>
																																																																	-->

@endsection

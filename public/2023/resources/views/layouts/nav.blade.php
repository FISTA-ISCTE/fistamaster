<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<base href="/">
	<meta name="image" property="og:image" content="{{ asset('img/logo_fista_fundo_azul_2023_v2.png') }}" />
	<meta name="title" property="og:title" content="FISTA 23 - Forum of Iscte School of Technology and Architecture" />
	<meta name="description" property="og:description"
		content="O Forum of Iscte School of Technologies and Architecture é um evento anual que decorre em Lisboa, Portugal. Este evento traz o mundo das empresas à universidade. São dois dias de apresentações, workshops e bancas de empresas nacionais e internacionais. Vem conhecer o FISTA!" />
	<meta name="keywords" content="FISTA 23 - Iscte">
	<meta name="theme-color" content="#1EC4BD" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="shortcut icon" href="{{ asset('img/ficon.png') }}" type="image/png">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/hamburgers.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script defer src="https://friconix.com/cdn/friconix.js"></script>
	<script src="https://cmp.osano.com/169lHtSFVnrxt2WAM/a1a8da60-90f1-40a1-a5c3-d0f32cf93c0d/osano.js"></script>
</head>
<script>
	window.onload = function() {
		if (localStorage.getItem("hasCodeRunBefore") === null) {
			/** Your code here. **/
			console.log("aqui estou eu");
			localStorage.setItem("hasCodeRunBefore", true);
		}
	}
</script>

<body>

	<?php
	use App\Curso;
	use App\Ano;
	$cursos = Curso::all();
	$anos = Ano::all();
	?>


	<div id="app">
		<!--<div id="particles-js" style="background: linear-gradient(160deg, #96c45b 0%, #4fad32 100%);">-->
		<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="position: fixed;" id="nav">
			<div class="container">
				@yield('img')
				<a href="{{ url('/') }}" class="navbar-brand"><img id="image" style="width:10rem;" alt="Logo"
						title="Logo">

				</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!--<style>
		@media only screen and (max-width:780px){
		ul {
				background: linear-gradient(160deg, #4fad32 0%, #96c45b 100%);
}
		}
</style>-->

				<div class="navbar-collapse collapse" style="" id="navbarSupportedContent">
					<ul class="navbar-nav navbar-right ml-auto" id="ul">
						<!-- <input id="toggle-on" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
						<label for="toggle-on" class="btn">EN</label>
						<input id="toggle-off" class="toggle toggle-right" name="toggle" value="true" type="radio">
						<label for="toggle-off" class="btn">PT</label>
-->
						<div id="google_translate_element" class="boxTradutor"></div>
						<div class="nav-item" style="display:flex;margin-left:auto;margin-right:auto;">
							<a href="javascript:trocarIdioma('en')" class="nav-link"
								style="padding-left:0 !important;padding-right:0 !important;">EN &nbsp</a>
							<a class="nav-link" style="padding-left:.08 !important;padding-right:.08 !important;">|
								&nbsp</a>
							<a href="javascript:trocarIdioma('pt')" style="padding-left:0 !important;" class="nav-link">PT</a>
						</div>
						<li class="nav-item">
							<a class="nav-link" id="link" href="/">Home</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" id="link" href="{{ route('empresas') }}">Empresas</a>
						</li>

						<!--<li class="nav-item">
							<a class="nav-link" id="link" href="{{ route('corridadecursos') }}">Corrida de Cursos</a>
						</li>-->



						<li class="nav-item">
							<a class="nav-link" id="link" href="{{ route('programa') }}">Programa</a>
						</li>


						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false" v-pre>Atividades</a>

							<div class="dropdown-menu dropdown-menu-right" id="drop4" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('workshops') }}">Workshops</a>
								<a class="dropdown-item" href="{{ route('speedinterviews') }}">Speed Interviews</a>
								<a class="dropdown-item" href="{{ route('apresentacaoprojetos') }}">Apresentações de Projetos</a>

							</div>
						</li>

						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false" v-pre>Oradores</a>

							<div class="dropdown-menu dropdown-menu-right" id="drop" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('oradores') }}">IT Speed Talks</a>
								<a class="dropdown-item" href="{{ route('conferencias') }}">Conferências</a>
								<a class="dropdown-item" href="{{ route('keynote') }}">Keynote Speakers</a>
								<!--  <a class="dropdown-item" href="{{ route('oradores') }}" >IT Speed Talks</a> -->

							</div>
						</li>


						<!--<li class="nav-item dropdown">
																												<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
																																data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Oradores/Conf.</a>

																												<div class="dropdown-menu dropdown-menu-right" id="drop" aria-labelledby="navbarDropdown">
																																<a class="dropdown-item" href="{{ route('oradores') }}">Oradores</a>
																																<a class="dropdown-item" href="{{ route('conferencias') }}">Conferências</a>
																												</div>
																								</li>-->
						<!--<li class="nav-item">
																												<a class="nav-link" id="link" href="{{ route('oradores') }}">Oradores</a>
																								</li>-->
						<!--<li class="nav-item">
																												<a class="nav-link" id="link" href="{{ route('conferencias') }}">Conferências</a>
																								</li>-->

						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false" v-pre>Concursos</a>

							<div class="dropdown-menu dropdown-menu-right" id="drop3" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('concursoIdeias') }}"> Concurso de Ideias</a>
								<a class="dropdown-item" href="{{ route('concurso-matematica') }}"> Concurso de
									Matemática e Programação</a>
								<a class="dropdown-item" href="{{ route('concurso-ciberseguranca') }}"> Concurso de
									Cibersegurança</a>
								<a class="dropdown-item" href="/classificacao">FISTA GO</a>
								<a class="dropdown-item" href="{{ route('corridadecursos') }}">Corrida de Cursos</a>
							</div>
						</li>

						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false" v-pre>Sobre nós</a>

							<div class="dropdown-menu dropdown-menu-right" id="drop1" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('contacts') }}"> Contactos</a>
								<a class="dropdown-item" href="{{ route('media') }}"> Edições Anteriores</a>
							</div>
						</li>
						<!--
																								<li class="nav-item">
																												<a class="nav-link" id="link" href="{{ asset('img/FISTA21_Cartaz_A3_mail.pdf') }}" target="_blank">EXPO MIA</a>
																								</li>
-->

						{{-- <li class="nav-item">
							<a class="nav-link" id="link" href="/classificacao">FISTA GO</a>
						</li> --}}

						<!-- <li class="nav-item">
																												@if (Auth::check())
@if (Auth::user()->id_curso != null && Auth::user()->id_ano != null)
<a class="nav-link"
																																href="https://fista.iscte-iul.pt/img/concurso-ideias/FISTA21%20Interativo.pdf">Expo
																																MIA</a>
@else
<a class="nav-link" href="https://fista.iscte-iul.pt/minhaconta/{{ Auth::user()->uuid }}">Expo
																																MIA</a>
@endif
@else
<a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">Expo MIA</a>
@endif
																								</li>-->

						<!-- <li class="nav-item">
																												<a class="nav-link" id="link" href="#">Corrida de Cursos</a>
																								</li>-->
						<style>
							.dropdown-item:hover {
								background: none !important;
							}
						</style>

						@guest
							@if (Route::has('register'))
								<li class="nav-item">
									<a class="nav-link" id="link" href="#" data-toggle="modal" data-target="#myModal">Sign In /
										Registar</a>
								</li>
							@endif
						@else
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
									aria-haspopup="true" aria-expanded="false" v-pre>
									@if (Auth::user()->empresa == null)
										<img class="profile-img"
											style="width:25px;height:25px;border-radius:50%;border: #1EC4BD solid 1px;object-fit:cover"
											src="https://fista.iscte-iul.pt/storage/{{ Auth::user()->avatar }}">
									@else
										<img class="profile-img"
											style="width:25px;height:25px;border-radius:50%;border: #1EC4BD solid 1px;object-fit:cover"
											src="https://fista.iscte-iul.pt/storage/{{ App\Empresa::where('id', Auth::user()->empresa)->first()->avatar }}">
									@endif
									{{ Auth::user()->first_name }} <span class="caret"></span>
								</a>

								<div class="dropdown-menu dropdown-menu-right" id="drop2" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ route('minhaConta', Auth::user()->uuid) }}">
										<i class="fa fa-user" aria-hidden="true"></i> Minha Conta
									</a>

									<a class="dropdown-item" aria-labelledby="navbarDropdown" href="{{ route('qrcode', Auth::user()->uuid) }}">
										<i class="fa fa-qrcode" aria-hidden="true"></i> O meu QR
									</a>

									@can('browse_admin')
										<a class="dropdown-item" href="{{ url('/admin', app()->getLocale()) }}">
											<i class="fa fa-lock" aria-hidden="true"></i> Administração
										</a>
									@endcan

									@if (Auth::user()->role_id == 3 ||
											Auth::user()->role_id == 7 ||
											Auth::user()->role_id == 24 ||
											Auth::user()->role_id == 26 ||
											Auth::user()->role_id == 14)
										<a class="dropdown-item" href="{{ url('/check_in') }}">
											<i class="fa fa-check" aria-hidden="true"></i> Check-in
										</a>
									@endif

									@if (Auth::user()->role_id == 3 || Auth::user()->role_id == 7 || Auth::user()->role_id == 4)
										<a class="dropdown-item" href="{{ url('/troca_pontos') }}">
											<i class="fa fa-money" aria-hidden="true"></i> Troca de Pontos
										</a>
									@endif

									@if (Auth::user()->empresa != null)
										<a class="dropdown-item" href="{{ url('/logistica') }}">
											<i class="fa fa-truck" aria-hidden="true"></i> Logística
										</a>
									@endif

									@if (Auth::user()->empresa != null &&
											(strcmp(App\Empresa::where('id', Auth::user()->empresa)->first()->plano, 'premium') == 0 ||
												strcmp(App\Empresa::where('id', Auth::user()->empresa)->first()->backoffice, 1) == 0 ||
												strcmp(App\Empresa::where('id', Auth::user()->empresa)->first()->plano, 'diamond') == 0))
										<a class="dropdown-item" href="{{ url('/back_office') }}">
											<i class="fa fa-briefcase" aria-hidden="true"></i> Back Office
										</a>
									@endif

									<a class="dropdown-item" href="{{ url('/home', app()->getLocale()) }}">
										<i class="fa fa-rss" aria-hidden="true"></i> Feed
									</a>

									{{-- <a class="dropdown-item" href="{{ url('report-bug') }}">
										<i class="fa fa-bug" aria-hidden="true"></i> Reportar um Bug
									</a> --}}

									<a class="dropdown-item" href="{{ route('logout', app()->getLocale()) }}"
										onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
										<i class="fa fa-sign-out" aria-hidden="true"></i> {{ __('Logout') }}
									</a>

									<form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST"
										style="display: none;color:black;">
										@csrf
									</form>
								</div>
							</li>
						@endguest


					</ul>
				</div>
			</div>
		</nav>
		<!--____________________________________________________________________________________________________--->

		<script>
			console.log(window.location.hash);

			if (window.location.hash === "#myModal") {
				console.log("window.location.hash");
				$(document).ready(function() {
					$("#myModal").modal();
				});
			}
		</script>


		<script>
			function myFunction() {
				var x = document.getElementById("box1");
				if (x.style.display === "none") {
					document.getElementById("button").innerHTML = "Registar";
					document.getElementById("title").innerHTML = "Login";
					document.getElementById("pass").style.display = "flex";
					x.style.display = "block";
					document.getElementById("box2").style.display = "none";
					document.getElementById("login-text").innerHTML = " Nova conta ? ";
				} else {
					document.getElementById("button").innerHTML = "Login";
					document.getElementById("title").innerHTML = "Registar";
					document.getElementById("login-text").innerHTML = "Já tens Conta?";
					document.getElementById("pass").style.display = "none";
					x.style.display = "none";
					document.getElementById("box2").style.display = "block";
				}
			}
		</script>







		<!--____________________________________________________________________________________________________--->

		<main>
			@yield('content')
		</main>

		<footer class="footer"
			style="background: linear-gradient(120deg, #4fe3dc 0%, #1EC4BD 100%);background-repeat: no-repeat;">
			<div class="container">
				<div class="row justify-content-around" style="margin:0">
					<div style="font-size: 17px;margin-top:5%;margin-bottom:5%" class="col-lg-7 col-sm-12 pb-2 text-center">
						<h2 style="text-align:center;font-weigth:bold;margin-bottom:20px;font-size:2rem">Edições
							Anteriores</h2>
						<a target="_blank" href="/2022/fista-master/public/">2022</a> •
						<a target="_blank" href="/2021">2021</a> •
						<a target="_blank" href="/2020">2020</a> •
						<a target="_blank" href="/2019">2019</a> •
						<a target="_blank" href="/2018">2018</a> •
						<a target="_blank" href="/2017">2017</a> •
						<a target="_blank" href="/2016">2016</a> •
						<a target="_blank" href="/2015">2015</a> •
						<a target="_blank" href="/2014">2014</a>
						<br>
						<a href="politica-privacidade" target="_blank">Política de Privacidade</a>
						<br>Copyright © 2020 Iscte School of Technology and Architecture
					</div>
					<div class="col-lg-4 col-sm-12 text-center" style="margin-top:5%;margin-bottom:5%">
						<h2 style="text-align:center;font-weigth:bold;margin-bottom:20px;font-size:2rem">Redes Sociais
						</h2>
						<div class="row my-3" style="height:50px;margin-right:0;margin-left:0">
							<div class="rede_social" style="display:block;margin-left:auto">
								<a href="https://www.facebook.com/fista.iscte/" target="_blank"><img class="social-icon hvr-grow"
										src="{{ asset('img/facebook.svg') }}"></a>
							</div>
							<div class="rede_social">
								<a href="https://www.instagram.com/fista.iscte/" target="_blank"><img class="social-icon hvr-grow"
										src="{{ asset('img/instagram.svg') }}"></a>
							</div>
							<div class="rede_social">
								<a href="https://www.linkedin.com/company/fista/" target="_blank"> <img class="social-icon hvr-grow"
										src="{{ asset('img/linkedin.svg') }}"></a>
							</div>
							<div class="rede_social" style="display:block;margin-right:auto">
								<a href="https://www.youtube.com/channel/UCCNbJIiznD05DrHuhwe-InQ" target="_blank"> <img
										class="social-icon hvr-grow" src="{{ asset('img/youtube.svg') }}"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>


	<!-- The Modal -->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog"
			style="background:transparent;border-color:transparent;border-radius: 200px;height: 110%;">
			<div class="modal-content" style="background:transparent;border-color:transparent;height:44pc">
				<div class="modal-header"
					style="background: #1EC4BD;
                    padding-top:10%;
                    padding-bottom:30%;
                    height: 350px;
                    ">

					<h1 id="title"
						style="color:white !important;margin-left:20px;font-size:55px;font-family:'Myriad Pro 1';letter-spacing:0.4px;">
						Login</h1>
					<button type="button" style="outline:none;padding-top: 35px;padding-right: 35px;" class="close"
						data-dismiss="modal"><i class="fa fa-times-circle" style="outline:none;color:white;"
							aria-hidden="true"></i></button>
				</div>

				<!-- Modal body -->

				<div class="modal-body"
					style="background: white;flex: 0.3 1 auto;margin-top: -144px;padding-top: 80px;margin-bottom: -10px;">
					<div id="box1" class="box1 container" style="display:block;">
						<div class="content">
							<form method="POST" action="{{ route('login', app()->getLocale()) }}" accept-charset="UTF-8">
								@csrf
								<div class="form-group">
									<input id="email" type="email" placeholder="E-mail"
										class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
										required autocomplete="email" autofocus>
									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<div class="form-group">
									<input id="password" type="password" placeholder="Password"
										class="form-control @error('password') is-invalid @enderror" name="password" required
										autocomplete="current-password">

									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<button type="submit" class="btn-fista center" style="margin-left:23%;">
									{{ __('Login') }}
								</button>


							</form>
						</div>
					</div>
					<div id="box2" class="box2" style="display: none;">
						<div class="content registerBox">
							<div class="form">
								<form method="POST" action="{{ route('register', app()->getLocale()) }}" accept-charset="UTF-8">
									@csrf

									<div class="form-group">
										<input id="first_name" type="text" placeholder="Nome"
											class="form-control @error('first_name') is-invalid @enderror" name="first_name"
											value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
										@error('first_name')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>

									<div class="form-group">
										<input id="last_name" type="text" placeholder="Apelido"
											class="form-control @error('last_name') is-invalid @enderror" name="last_name"
											value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

										@error('last_name')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									<div class="form-group">
										<input id="email" type="email" placeholder="E-mail"
											class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
											required autocomplete="email">

										@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>

									<div class="form-group">
										<select name="id_curso" class="form-control mb-1" id="id_curso" required>
											<option disabled selected value="">Select Curso</option>
											@foreach ($cursos as $curso)
												@if ($errors->any() && old('id_curso') == $curso->id)
													<option value="{{ $curso->id }}" selected>{{ $curso->designacao }}</option>
												@else
													<option value="{{ $curso->id }}">{{ $curso->designacao }}</option>
												@endif
											@endforeach
										</select>
									</div>

									<div class="form-group">
										<select name="id_ano" class="form-control mb-1" id="id_ano" required>
											<option disabled selected value="">Select Ano</option>
											@foreach ($anos as $ano)
												@if ($errors->any() && old('id_ano') == $ano->id)
													<option value="{{ $ano->id }}" selected>{{ $ano->designacao }}</option>
												@else
													<option value="{{ $ano->id }}">{{ $ano->designacao }}</option>
												@endif
											@endforeach
										</select>
									</div>

									<div class="form-group">
										<input id="password" type="password" placeholder="Password"
											class="form-control @error('password') is-invalid @enderror" name="password" required
											autocomplete="new-password">

										@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>

									<div class="form-group">
										<input id="password-confirm" placeholder="Password confirm" type="password" class="form-control"
											name="password_confirmation" required autocomplete="new-password">
									</div>

									<div class="form-group">
										<input TYPE="hidden" id="invite" readonly value="{{ app('request')->input('invite') }}"
											type="text" class="form-control" name="invite" autocomplete="invite">
									</div>
									<div class="center">
										<button type="submit" class="btn-fista center" style="margin-left:23%;">
											Registar
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer"
					style="border-color: white;background:white;clip-path: polygon(0 0, 100% 0, 100% 87%, 0 100%);">
					@if (Route::has('password.request'))
						<div class="row mx-auto" id="pass" style="font-size:13px;margin-top:13px;color:grey;">
							<p style="margin-right:2px;margin-top:-1px;">Esqueceste da password?</p>
							<a style="color:black !important;font-size:14px;margin-left:2px; text-decoration: underline;"
								href="{{ route('password.request') }}"> Reset</a>
						</div>
					@endif
					<div class="row mx-auto" style="font-size:13px;margin-top:13px;color:grey;">
						<p id="login-text" style="margin-right:2px;margin-top:-1px;">Nova conta ? </p>
						<a id="button" class="form-register"
							style="color:black !important;font-size:14px;margin-left:2px; text-decoration: underline; cursor:pointer;"
							onclick="myFunction()"> Registar</a>
					</div>
					<!--<div class="or-separator" style="margin-top:5%;margin-bottom:10%;"><span> OR </span></div>
																				<div class="row mx-auto" style="margin-bottom:16%;">
																								<div class="mx-auto">
																												<a class='button -linkedin center' href="{{ url('/login/linkedin') }}">
																																<p style="font-size:13px;margin-bottom:-3px;">Sign In with Linkedin</p>
																																<h5 class="mdi mdi-linkedin"
																																				style="font-size:180%;margin-top:-10px;margin-left:20px;margin-bottom:-12px;"></h5>
																												</a>
																								</div>
																								<div class="mx-auto">
												<a class='button -google center' href="{{ url('/login/google') }}">
														<p style="font-size:13px;margin-bottom:-3px;">Sign In with Google</p>
														<h5 class="mdi mdi-google" style="font-size:180%;margin-top:-10px;margin-left:30px;margin-bottom:-12px;"></h5>
												</a>
										</div>  -->
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>

	<script>
		if ($('#app').height() < $(window).height()) {
			$('footer').addClass('fixed-bottom');
		} else {
			$('footer').removeClass('fixed-bottom');
		}

		$(window).resize(function() {
			if ($('#app').height() < $(window).height()) {
				$('footer').addClass('fixed-bottom');
			} else {
				$('footer').removeClass('fixed-bottom');
			}
		});
	</script>
	<style type="text/css">
		#google_translate_element {
			display: none;
		}

		.goog-te-banner-frame {
			display: none !important;
		}

		body {
			position: static !important;
			top: 0 !important;
		}
	</style>
	<script type="text/javascript">
		var comboGoogleTradutor = null; //Variavel global

		function googleTranslateElementInit() {
			new google.translate.TranslateElement({
				pageLanguage: 'pt',
				includedLanguages: 'en,pt',
				layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
			}, 'google_translate_element');

			comboGoogleTradutor = document.getElementById("google_translate_element").querySelector(".goog-te-combo");
		}

		function changeEvent(el) {
			if (el.fireEvent) {
				el.fireEvent('onchange');
			} else {
				var evObj = document.createEvent("HTMLEvents");

				evObj.initEvent("change", false, true);
				el.dispatchEvent(evObj);
			}
		}

		function trocarIdioma(sigla) {
			if (comboGoogleTradutor) {
				comboGoogleTradutor.value = sigla;
				changeEvent(comboGoogleTradutor); //Dispara a troca
				if (sigla == 'pt') {
					changeEvent(comboGoogleTradutor);
				}
			}
		}
	</script>
	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
	</script>



	<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="{{ asset('js/scroll2.js') }}"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
		crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="{{ asset('js/particles.js') }}"></script>
</body>

</html>

@extends('layouts.nav')
@section('title', 'Corrida de Cursos')
@section('content')
	<script>
		const nav = document.querySelector('nav')
		const img = document.querySelector('img')
		nav.classList.add('active');
		img.setAttribute('src', 'img/logo_fista_horizontal_azul_2023_v2.png');
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<div class="main footer_right">
		<div class="container" style="margin-top:3%;">
			<div style="width:100%;height:20px;"></div>
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-6">
					@php
						$perceIGE = ($data['Ige'] / 561) * 100;
						$perceLEI = ($data['Lei'] / 625) * 100;
						$perceETI = ($data['Eti'] / 348) * 100;
						$perceCD = ($data['Cd'] / 371) * 100;
						$perceARQ = ($data['Arq'] / 289) * 100;
						$max = max($perceIGE, $perceLEI, $perceETI, $perceCD, $perceARQ);
						if ($max == $perceIGE) {
						    $vencedor = 'IGE';
						}
						if ($max == $perceETI) {
						    $vencedor = 'ETI';
						}
						if ($max == $perceLEI) {
						    $vencedor = 'LEI';
						}
						if ($max == $perceCD) {
						    $vencedor = 'LCD';
						}
						if ($max == $perceARQ) {
						    $vencedor = 'ARQ';
						}
					@endphp
					<h2>Neste momento <strong style="color:#1EC4BD ">{{ $vencedor }}</strong> está à frente!</h2>
				</div>
			</div>
			<div style="width:100%;height:20px;"></div>
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-6">
					<h3>Não deixes o teu curso ficar para trás!</h3>
				</div>
			</div>
			<div style="width:100%;height:20px;"></div>
			<p id="data">Informática e Gestão de Empresas</p>
			<div class="flex-well-container">
				<div class="progress" style="height:50px; width:100%;">
					<div class="progress-bar" role="progressbar"
						style="width: {{ $perceIGE }}%; background-color:#1EC4BD !important" aria-valuenow="0" aria-valuemin="0"
						aria-valuemax="100">
						<!--<?php echo round($perceIGE); ?>%-->
					</div>
					<img src="{{ asset('img/foguetao.gif') }}" style="left: calc({{ $perceIGE }}% - 40px);">
				</div>
			</div>
			<div style="width:100%;height:20px;"></div>
			<p id="data">Engenharia Informática</p>
			<div class="flex-well-container">
				<div class="progress" style="height:50px; width:100%;">
					<!-- <?php echo round($perceIGE); ?>% -->
					<div class="progress-bar" role="progressbar"
						style="width: {{ $perceLEI }}%; background-color:#1EC4BD !important" aria-valuenow="25" aria-valuemin="0"
						aria-valuemax="100">
						<!--<?php echo round($perceLEI); ?>%-->
					</div>
					<img src="{{ asset('img/foguetao.gif') }}" style="left: calc({{ $perceLEI }}% - 40px);">
				</div>
			</div>
			<div style="width:100%;height:20px;"></div>
			<p id="data">Engenharia de Telecomunicações e Informática</p>
			<div class="flex-well-container">
				<div class="progress" style="height:50px; width:100%;">

					<div class="progress-bar" role="progressbar" style="width: {{ $perceETI }}%;background-color:#1EC4BD !important"
						aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
						<!--<?php echo round($perceETI); ?>%-->
					</div>
					<img src="{{ asset('img/foguetao.gif') }}" style="left: calc({{ $perceETI }}% - 40px);">
				</div>
			</div>
			<div style="width:100%;height:20px;"></div>
			<p id="data">Ciência de Dados</p>
			<div class="flex-well-container">
				<div class="progress" style="height:50px; width:100%;">

					<div class="progress-bar" role="progressbar"
						style="width: {{ $perceCD }}%;background-color:#1EC4BD !important" aria-valuenow="50" aria-valuemin="0"
						aria-valuemax="100">
						<!--<?php echo round($perceCD); ?>%-->
					</div>
					<img src="{{ asset('img/foguetao.gif') }}" style="left: calc({{ $perceCD }}% - 40px);">
				</div>
			</div>
			<div style="width:100%;height:20px;"></div>
			<p id="data">Arquitetura</p>
			<div class="flex-well-container">
				<div class="progress" style="height:50px; width:100%;">

					<div class="progress-bar" role="progressbar"
						style="width: {{ $perceARQ }}%;background-color:#1EC4BD !important" aria-valuenow="50" aria-valuemin="0"
						aria-valuemax="100">
						<!--<?php echo round($perceARQ); ?>%-->
					</div>
					<img src="{{ asset('img/foguetao.gif') }}" style="left: calc({{ $perceARQ }}% - 40px);">
				</div>
			</div>
			<div style="width:100%;height:40px; text-align:center;"></div>
			<h3>Convida mais colegas teus para participarem de forma a mostrar qual o curso que mais presença tem no FISTA.</h3>
			<div class="text-center" style="">
				<p style="color:black;font-size:6vh;font-weight:600;">Regista-te <a style="color:#1EC4BD !important;font-size:6vh;"
						href="https://fista.iscte-iul.pt/#myModal">AQUI</a></p>
			</div>

			<div style="width:100%;height:40px;"></div>
		</div>
		<style>
			.progress {
				position: relative;
				font-size: xx-large;
			}

			.flex-well-container {
				display: flex;
				width: 100%;
			}

			.progress img {
				position: absolute;
				height: 50px;
			}

			/* .progress{
													font-size: xx-large;
											} */
			.title {
				font-family: 'Myriad Pro 1';
				font-size: 55px;
				color: #949494;
				margin-top: auto;
			}

			.title2 {
				font-family: 'Myriad Pro 1';
				font-size: 60px;
				color: #1EC4BD;
				font-weight: lighter !important;
				letter-spacing: 0.3px;
				line-height: 120%;
				margin-top: 2%;
				margin-right: 140px;
			}

			.inputstyle {

				border-style: none none outset none;
				border-color: whitesmoke;
				font-size: 20px;
				width: 100%;
				padding-bottom: 7px;
				outline: none;
			}

			.txarea {
				border: 2px solid whitesmoke;
				outline: none;
				font-size: 20px;
				width: 100%;
				border-style: none none outset none;
				overflow: auto;
				padding-bottom: 5%;
			}

			progressBarIn {
				width: 75%;
			}

			@media only screen and (max-width: 582px) {
				.title {
					font-family: 'Myriad Pro 1';
					font-size: 55px;
					color: #949494;
					margin-top: auto;
					margin-bottom: 10%;
					text-align: center;

				}

				.form-align {
					margin: auto;
					margin-top: 20%;
					text-align: center;

				}

				.title2 {
					font-family: 'Myriad Pro 1';
					font-size: 52px;
					color: #6cb743;
					font-weight: lighter !important;
					letter-spacing: 0.3px;
					margin-top: 15%;
					margin-left: auto;
					margin-right: auto;
					text-align: center;

				}


			}


			details {
				width: 75%;
				min-height: 6px;
				max-width: 700px;
				padding: 25px 70px 25px 25px;
				margin: 0 auto;
				position: relative;
				font-size: 20px;
				border: 1px solid rgba(0, 0, 0, .1);
				border-radius: 20px;
				color: #1EC4BD;
				border-style: none none outset none;
				animation: sweep .5s ease-in-out;
			}

			@keyframes sweep {
				0% {
					opacity: 0;
					margin-top: 10px
				}

				100% {
					opacity: 1;
					margin-top: 0px
				}
			}

			details+details {
				margin-top: 60px;
				animation: sweep .5s ease-in-out;


			}

			details[open] {
				min-height: 50px;
				background-color: white;
				animation: sweep .5s ease-in-out;

				transition-duration: 0.4s;


			}

			details p {
				color: #96999d;
				font-weight: 300;
				transition: .5s ease;
				margin-top: 2%;
				margin-bottom: -1%;
			}

			details[open] .control-icon-close {
				display: initial;
				animation: sweep .5s ease-in-out;


			}

			details[open] .control-icon-expand {
				display: none;
				transition: .5s ease;
				animation: sweep .5s ease-in-out;

			}


			summary {

				font-weight: 500;
				text-align: left;
				transition: .5s ease;

			}

			summary:focus {
				outline: none;
				transition: .5s ease;

			}

			summary:focus::after {
				content: "";
				height: 60%;
				width: 100%;
				display: block;
				position: absolute;
				top: 0;
				left: 0;
				transition: .5s ease;

			}

			summary::-webkit-details-marker {
				display: none;
				transition: .5s ease;
			}
		</style>
		<!-- </div> -->
	@endsection

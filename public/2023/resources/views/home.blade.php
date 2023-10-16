@extends('layouts.nav')
@section('title', 'FISTA23 - Feed')
@section('content')
	<link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
	<script>
		const nav = document.querySelector('nav')
		const img = document.querySelector('img')
		nav.classList.add('active');
		img.setAttribute('src', 'img/logo_fista_horizontal_azul_2023_v2.png');
	</script>
	<?php
	use App\Empresa;
	use App\Feed;
	$empresa1 = Empresa::where('id', Auth::user()->empresa)->first();
	
	?>

	<style>
		ul.ks-cboxtags {
			list-style: none;

		}

		ul.ks-cboxtags li {
			display: inline;
		}

		ul.ks-cboxtags li label {
			display: inline-block;
			background-color: rgba(255, 255, 255, .9);
			border: 2px solid rgba(139, 139, 139, .3);
			color: #adadad;
			border-radius: 25px;
			white-space: nowrap;
			margin: 3px 0px;
			-webkit-touch-callout: none;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			-webkit-tap-highlight-color: transparent;
			transition: all .2s;
		}

		ul.ks-cboxtags li label {
			padding: 8px 12px;
			cursor: pointer;
		}

		ul.ks-cboxtags li label::before {
			display: inline-block;
			font-style: normal;
			font-variant: normal;
			text-rendering: auto;
			-webkit-font-smoothing: antialiased;
			font-family: "Font Awesome 5 Free";
			font-weight: 900;
			font-size: 12px;
			padding: 2px 6px 2px 2px;
			content: "\f067";
			transition: transform .3s ease-in-out;
		}

		ul.ks-cboxtags li input[type="checkbox"]:checked+label::before {
			content: "\f00c";
			transform: rotate(-360deg);
			transition: transform .3s ease-in-out;
		}

		ul.ks-cboxtags li input[type="checkbox"]:checked+label {
			border: 2px solid #1bdbf8;
			background-color: #12bbd4;
			color: #fff;
			transition: all .2s;
		}

		ul.ks-cboxtags li input[type="checkbox"] {
			display: absolute;
		}

		ul.ks-cboxtags li input[type="checkbox"] {
			position: absolute;
			opacity: 0;
		}

		ul.ks-cboxtags li input[type="checkbox"]:focus+label {
			border: 2px solid #e9a1ff;
		}

		.upload-btn-wrapper {
			position: relative;
			overflow: hidden;
			display: inline-block;
		}

		.fileb {
			border: 2px solid #1EC4BD;
			color: #1EC4BD;
			font-weight: bold;
			background-color: white;
			padding: 2px 8px;
			border-radius: 8px;
			font-size: .9rem;
			font-weight: bold;
		}

		.upload-btn-wrapper input[type=file] {
			font-size: 100px;
			position: absolute;
			left: 0;
			top: 0;
			opacity: 0;
		}
	</style>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<div class="main footer_right">
		<div class="container">

			<h1 class="mt-lg-5 mb-lg-2" style="text-align:center;font-family:'Myriad Pro 1';font-size:325%;color:#1EC4BD ;">
				Bem-vindo ao FISTA23 </h1>
			@if (Auth::user()->empresa != null)
				<?php $numPubli = Feed::where('id_empresa', $empresa1->id)->count();
				$publiRestantes;
				?>
				<div class="" style="margin-top:4rem;">
					<h1 class="text-center"
						style="border-bottom: 5px solid #1EC4BD;background-color:#7BEAE5;font-family: 'Myriad Pro 2';padding-top:4px;color:white;text-shadow: 0 0 3px #4e4e4e;">
						FEED</h1>
					<p>Divulgação de ofertas de trabalho em part-time ou full-time, programas de trainees, estágios, estágios de verão,
						informações sobre recrutamento, programas de embaixadores, etc.</p>
				</div>
				<div class="container">
					<div class="card"
						style="margin-top:6vh;margin-bottom:8vh;border: 1.5px solid #DFE3E2;border-radius: 30px 30px 0px 0px;">
						@if (session('sucess'))
							<div class="alert alert-success">
								{{ session('sucess') }}
							</div>
						@endif
						@if (session('danger'))
							<div class="alert alert-danger">
								{{ session('danger') }}
							</div>
						@endif
						<form method="POST" action="/home/feedone" enctype="multipart/form-data">
							@csrf
							<div class="card-header"
								style="border-radius: 25px 25px 0px 0px;border: 4px solid #1EC4BD;background-color:white;">
								<div class="row">
									<div class="col-md-3"
										style="margin-left:2vw;height: 12vh;background-repeat:no-repeat; background-position: left;background-size: contain; background-image: url(https://fista.iscte-iul.pt/storage/{{ $empresa1->avatar }});">
									</div>

									<div class="col-md-7">
										<h2 style="text-align:center;font-weight:bold;color:#1EC4BD;">{{ $empresa1->nome_empresa }} </h2>
										@if (
											($empresa1->plano == 'silver' && $numPubli >= 1) ||
												($empresa1->plano == 'gold' && $numPubli >= 2) ||
												($empresa1->plano == 'premium' && $numPubli >= 3) ||
												($empresa1->plano == 'diamond' && $numPubli >= 3))
											<h4 style="text-align:center;"> Atingiu o número máximo de publicações no nosso feed</h4>
										@else
											@if ($empresa1->plano == 'silver')
												<?php $publiRestantes = 1 - $numPubli; ?>
											@elseif($empresa1->plano == 'gold')
												<?php $publiRestantes = 2 - $numPubli; ?>
											@else
												<?php $publiRestantes = 3 - $numPubli; ?>
											@endif
											<input required
												style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
												id="titulo" type="text" placeholder="Inserir título da publicação*" class="form-control"
												name="titulo">
									</div>
								</div>
							</div>
							<div class="card-body" style="background-color:rgb(244 246 252);">
								<textarea required type="text"
								 style="padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
								 id="descricao" placeholder="Inserir texto para a descrição da publicação.*" rows="6" name="descricao"></textarea>
								<div>
									<input
										style="margin-top:2vh;padding-right:2px;padding-left:10px;border-radius:4px;display: block;width: 60%;outline:none;border:2px solid #19330a45;"
										id="link" type="text" placeholder="Inserir hiperligação. Ex.:https://fista.iscte-iul.pt/empresas"
										class="form-control" name="link">
								</div>
								<div class="row">
									<div class="col-md-2" style="margin-top:4vh;"></div>
									<div class="col-md-8" align="center" style="margin-top:4vh;">
										<div class="row justify-content-center align-self-center" style="height:1.2rem;margin-bottom:1.1rem;">
											<div class="upload-btn-wrapper">
												<button class="btn fileb"><i class="fa fa-upload"></i>Carregar imagens</button>
												<input required type="file" multiple name="file[]" />
											</div>

										</div>
										<div class="row justify-content-center align-self-center" style="height:auto">
											<div>
												<p style="font-size:0.6rem;">*Obrigatório submeter pelo menos 1 imagem. Máximo de 2 imagens. <br>Formato de
													imagem: 1200px x 675px</p>
											</div>
										</div>

										<div class="justify-content-center align-self-center">
											<button type="submit"
												style="height:2rem;padding-top:0px !important;padding-bottom:0px !important;font-size:1.5rem;font-family: 'Myriad Pro 2';border-radius:10px;width:max-content; display: flex; align-items: center;"
												class="btn-fista">
												<p style="margin-bottom: 0rem !important">Guardar</p>
											</button>
										</div>
										<div style="margin-top:1rem">
											<p>Publicações restantes: {{ $publiRestantes }}</p>
										</div>
									</div>
									<div class="col-md-2" style="margin-top:4vh;"></div>
								</div>
			@endif

		</div>
		</form>
	</div>
	</div>
@else
	<!--FIXO FISTA -->

	<div class="" style="margin-top:4rem;">
		<h1 class="text-center"
			style="border-bottom: 5px solid #1EC4BD;background-color:#7BEAE5;font-family: 'Myriad Pro 2';padding-top:4px;color:white;text-shadow: 0 0 3px #4e4e4e;">
			FEED</h1>
		<p>Divulgação de ofertas de trabalho em part-time ou full-time, programas de trainees, estágios, estágios de verão,
			informações sobre recrutamento, programas de embaixadores, etc.</p>
	</div>
	<div class="container">
		<div class="card"
			style="margin-top:6vh;margin-bottom:8vh;border: 1.5px solid #DFE3E2;border-radius: 30px 30px 0px 0px;">
			<div class="card-header" style="border-radius: 25px 25px 5px 5px;border: 4px solid #1EC4BD;background-color:white;">
				<div class="row">
					<div class="col-md-3"
						style="margin-left:2vw;height: 12vh;background-repeat:no-repeat; background-position: left;background-size: contain; background-image: url('{{ asset('img/logo_fista_azul_2023_10edicao.png') }}');">
					</div>
					<div class="col-md-7">
						<h2 style="text-align:center;font-weight:bold;color:#1EC4BD;">FISTA 23</h2>
						<h5 style="text-align:center;">Vem conhecer o mundo das Tecnologias e Arquitetura!</h5>
					</div>
				</div>
			</div>
			<div class="card-body" style="background-color:rgb(244 246 252);">
				<p class="card-text">
					&emsp;O FISTA - Forum of Iscte School of Technology and Architecture, é um evento que se realiza anualmente no Iscte
					e é organizado pelos alunos da Escola de Tecnologias e Arquitetura, com o apoio de alguns professores, serviços e/ou
					núcleos do Iscte. Ao longo destes anos os alunos têm participado de forma ativa, cada vez em maior número, e têm
					contribuído para que o FISTA seja um dos maiores eventos desta natureza no nosso país.<br>
					<br>
					&emsp;Este ano, regressamos ao formato presencial, com uma imagem renovada, e estamos a trabalhar para te oferecer o
					melhor FISTA de sempre. Para que isso aconteça, contamos com o teu envolvimento e entusiasmo! Temos novas empresas,
					novos concursos, novos parceiros e muito mais.<br>
					<br>
					&emsp;O feed apresenta as ofertas de emprego das empresas que estão presentes no nosso evento.
				</p>
				<!--
																																				<h3>
																																						<a style="font-size:3vh;color:#1EC4BD !important" href="https://www.youtube.com/watch?v=7rzzwawyz78" target="_blank">Vê aqui o último FISTA presencial! <i class="fa fa-link"></i></a>
																																				</h3>
																																		-->

			</div>
		</div>
	</div>
	@endif
	<!--FIXO FISTA -->
	<!--NAVBAR2-->

	<nav class="navbar navbar-expand-md" style="background-color:#1EC4BD;border-radius:10px;margin-bottom:-5%">
		<div class="navbar-collapse w-100 order-md-0 dual-collapse2 collapse order-1">

		</div>
		<div class="order-0 mx-auto">
			<a class="navbar-brand mx-auto" href="#">FEED</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
				<span style="color:white;" class="navbar-toggler-icon"></span>
			</button>
		</div>

		<div class="navbar-collapse w-100 dual-collapse2 collapse order-3">
			<ul class="navbar-nav ml-auto">
				<a style="margin:auto;margin-right:2%"><span class="fa fa-info-circle" style="margin:auto;font-size:2vw;"
						data-toggle="tooltip" data-original-title="Pesquisa a empresa que pretendes procurar pelo seu nome!"></span></a>
				<div class="search-box">
					<div style="color:white;" class="search-icon"><i class="fa fa-search search-icon"></i></div>
					<form action="/home" method="GET" class="search-form">
						<input type="text" placeholder="Empresas" id="search" name="search" autocomplete="off">
					</form>
					<svg class="search-border" version="1.1" xmlns="http://www.w3.org/2000/svg"
						xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
						x="0px" y="0px" viewBox="0 0 671 111"
						style="enable-background:new 0 0 671 111;"xml:space="preserve">
						<path class="border" d="M335.5,108.5h-280c-29.3,0-53-23.7-53-53v0c0-29.3,23.7-53,53-53h280" />
						<path class="border" d="M335.5,108.5h280c29.3,0,53-23.7,53-53v0c0-29.3-23.7-53-53-53h-280" />
					</svg>
					<div style="color:white;" class="go-icon"><i class="fa fa-arrow-right"></i></div>

				</div>
			</ul>
		</div>
	</nav>


	<div>
		<div>

			<?php
			$tr = false;
			?>

			@foreach ($feed as $item)
				<?php
if($item == "VAZIO"){
  $tr=true;
  ?>
				<p>Pesquisa uma empresa.</p>
			@break

			<?php

}

$empresa=Empresa::where('id',$item->id_empresa)->first();
?>
			<div class="container">
				<div class="card" style="margin-top:15vh;border: 1.5px solid #DFE3E2;border-radius: 30px 30px 0px 0px;">
					<div class="card-header"
						style="border-radius: 25px 25px 5px 5px;border: 4px solid #1EC4BD;background-color:white;">
						<div class="row">
							@if ($empresa->avatar != null)
								<div class="col-md-3"
									style="margin-left:2vw;height: 12vh;background-repeat:no-repeat; background-position: left;background-size: contain; background-image: url(https://fista.iscte-iul.pt/storage/{{ $empresa->avatar }});">
								</div>
							@endif
							<div class="col-md-7">
								<h2 style="text-align:center;font-weight:bold;">{{ $empresa->nome_empresa }}</h2>
								<h5 style="text-align:center;">{{ $item->titulo }}</h5>
							</div>
						</div>
					</div>
					<div class="card-body" style="background-color:rgb(244 246 252);">
						<p class="card-text">
							{!! nl2br(e($item->descricao)) !!}
						</p>
						<?php if (isset($item->link_post)){ ?>
						<h3>
							<a style="font-size:1.5rem;color:#1EC4BD !important" href="{{ $item->link_post }}">Saber Mais <i
									class="fa fa-link"></i></a>
						</h3>
						<?php } ?>


						<div class="row d-flex justify-content-center">

							@if (!empty($item->avatar1) && !empty($item->avatar2))
								<div class="col-md-6" style="margin-top:4vh;">
									<img class="card-img-center img-responsive" src="https://fista.iscte-iul.pt/storage/{{ $item->avatar1 }}"
										alt="Card image cap">
								</div>
								<div class="col-md-6" style="margin-top:4vh;">
									<img class="card-img-center img-responsive" src="https://fista.iscte-iul.pt/storage/{{ $item->avatar2 }}"
										alt="Card image cap">
								@else
									<div class="col-md-8 text-center" style="margin-top:4vh;">
										<img class="card-img-center img-responsive" src="https://fista.iscte-iul.pt/storage/{{ $item->avatar1 }}"
											alt="Card image cap">
									</div>
							@endif
						</div>
					</div>
				</div>
				<div class="card-footer text-muted">{{ $item->created_at }}</div>
			</div>
	</div>
	@endforeach


</div>
<div class="pagination justify-content-center">
	<?php 

if ($feed->first() != "VAZIO") { ?>
	{{ $feed->appends(['search' => request()->query('search')])->links() }}
	<?php } ?>
</div>
<style>
	.pagination {
		margin: 20px;

	}

	.page-item.active .page-link {
		background-color: #1EC4BD;
		border-color: #dee2e6;
		color: #ffffff !important;
		font-size: 18px;
		font-family: "Myriad Pro 1";
	}



	.page-link {
		color: #1EC4BD !important;
		border-radius: 20px;
		margin-left: 3px;
		margin-right: 3px;
		font-weight: bold;
		font-size: 18px;
		border-color: white !important;
	}

	.page-item.disabled .page-link {
		color: white !important;
		pointer-events: none;
		cursor: auto;
		/*background-color: #e7e7e7 !important;
				border-color: #1EC4BD;*/
		font-size: 18px;
		font-family: "Myriad Pro 1";

	}

	.page-item:first-child .page-link {
		margin-right: 10px;
		border-radius: 20px;
	}

	.page-item:last-child .page-link {
		margin-left: 10px;
		border-radius: 20px;

	}
</style>
<script>
	$(document).ready(function() {
		$("#search").focus(function() {
			$(".search-box").addClass("border-searching");
			$(".search-icon").addClass("si-rotate");
		});
		$("#search").blur(function() {
			$(".search-box").removeClass("border-searching");
			$(".search-icon").removeClass("si-rotate");
		});
		$("#search").keyup(function() {
			if ($(this).val().length > 0) {
				$(".go-icon").addClass("go-in");
			} else {
				$(".go-icon").removeClass("go-in");
			}
		});

		$(".go-icon").click(function() {
			$(".search-form").submit();
		});
	});

	$(document).ready(function() {
		$('[data-toggle="tooltip"]').tooltip({
			placement: 'top'
		});
	});
</script>

<style>
	.search-box {
		position: relative;
		width: 100%;
		max-width: 360px;
		height: 40px;
		border-radius: 120px;
		margin: 0 auto;
	}

	.search-icon,
	.go-icon {
		position: absolute;
		top: 0;
		height: 40px;
		width: 86px;
		line-height: 41px;
		text-align: center;
	}

	.search-icon {
		left: 0;
		pointer-events: none;
		font-size: 1.02em;
		will-change: transform;
		transform: rotate(-45deg);
		-webkit-transform: rotate(-45deg);
		-moz-transform: rotate(-45deg);
		-o-transform: rotate(-45deg);
		transform-origin: center center;
		-webkit-transform-origin: center center;
		-moz-transform-origin: center center;
		-o-transform-origin: center center;
		transition: transform 400ms 220ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
		-webkit-transition: transform 400ms 220ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
		-moz-transition: transform 400ms 220ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
		-o-transition: transform 400ms 220ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
	}

	.si-rotate {
		transform: rotate(0deg);
		-webkit-transform: rotate(0deg);
		-moz-transform: rotate(0deg);
		-o-transform: rotate(0deg);
	}

	.go-icon {
		right: 0;
		pointer-events: none;
		font-size: 1.08em;
		will-change: opacity;
		cursor: default;
		opacity: 0;
		transform: rotate(45deg);
		-webkit-transform: rotate(45deg);
		-moz-transform: rotate(45deg);
		-o-transform: rotate(45deg);
		transition: opacity 190ms ease-out, transform 260ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
		-webkit-transition: opacity 190ms ease-out, transform 260ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
		-moz-transition: opacity 190ms ease-out, transform 260ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
		-o-transition: opacity 190ms ease-out, transform 260ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
	}

	.go-in {
		opacity: 1;
		pointer-events: all;
		cursor: pointer;
		transform: rotate(0);
		-webkit-transform: rotate(0);
		-moz-transform: rotate(0);
		-o-transform: rotate(0);
		transition: opacity 190ms ease-out, transform 260ms 20ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
		-webkit-transition: opacity 190ms ease-out, transform 260ms 20ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
		-moz-transition: opacity 190ms ease-out, transform 260ms 20ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
		-o-transition: opacity 190ms ease-out, transform 260ms 20ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
	}

	.search-border {
		display: block;
		width: 100%;
		max-width: 360px;
		height: 40px;
	}

	.border {
		fill: none;
		stroke: #FFFFFF;
		stroke-width: 5;
		stroke-miterlimit: 10;
	}

	.border {
		stroke-dasharray: 740;
		stroke-dashoffset: 0;
		transition: stroke-dashoffset 400ms cubic-bezier(0.600, 0.040, 0.735, 0.990);
		-webkit-transition: stroke-dashoffset 400ms cubic-bezier(0.600, 0.040, 0.735, 0.990);
		-moz-transition: stroke-dashoffset 400ms cubic-bezier(0.600, 0.040, 0.735, 0.990);
		-o-transition: stroke-dashoffset 400ms cubic-bezier(0.600, 0.040, 0.735, 0.990);
	}

	.border-searching .border {
		stroke-dasharray: 740;
		stroke-dashoffset: 459;
		transition: stroke-dashoffset 650ms cubic-bezier(0.755, 0.150, 0.205, 1.000);
		-webkit-transition: stroke-dashoffset 650ms cubic-bezier(0.755, 0.150, 0.205, 1.000);
		-moz-transition: stroke-dashoffset 650ms cubic-bezier(0.755, 0.150, 0.205, 1.000);
		-o-transition: stroke-dashoffset 650ms cubic-bezier(0.755, 0.150, 0.205, 1.000);
	}

	#search {
		font-family: 'Montserrat Alternates', sans-serif;
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		border-radius: 120px;
		border: none;
		background: rgba(255, 255, 255, 0);
		padding: 0 68px 0 68px;
		color: #FFFFFF;
		font-size: 1.32em;
		font-weight: 400;
		letter-spacing: -0.015em;
		outline: none;
	}

	#search::-webkit-input-placeholder {
		color: #FFFFFF;
	}

	#search::-moz-placeholder {
		color: #FFFFFF;
	}

	#search:-ms-input-placeholder {
		color: #FFFFFF;
	}

	#search:-moz-placeholder {
		color: #FFFFFF;
	}

	#search::-moz-selection {
		color: #FFFFFF;
		background: rgba(0, 0, 0, 0.25);
	}

	#search::selection {
		color: #FFFFFF;
		background: rgba(0, 0, 0, 0.25);
	}
</style>

@endsection

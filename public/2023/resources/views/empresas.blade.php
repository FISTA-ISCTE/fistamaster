@extends('layouts.nav')
@section('title', 'Empresas')
@section('content')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>
	<script>
		const nav = document.querySelector('nav')
		const img = document.querySelector('img')
		nav.classList.add('active');
		img.setAttribute('src', 'img/logo_fista_horizontal_azul_2023_v2.png');
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

	<div class="main footer_right">
		<div style="width:100%;height:40px;"></div>
		<div class="container" style="">
			<div style="width:100%;height:20px;"></div>
			<div style="margin-left:10%;margin-right:10%;">
				<h2
					style="margin:none !important;paddin-bottom:0.5rem;background-color:#1EC4BD;text-align:center;color:white;border-radius: 25px;">
					Diamond</h2>
				<hr>
				<div class="row justify-content-center" style="margin:0;margin-bottom:10%">
					@foreach ($dataEmp['diamond'] as $empresa)
						@if ($empresa->id != 244)
							<div class='col-md-4 text-center' style="margin-left: auto;margin-right: auto; padding:10px;">
								<a href='#' data-toggle='modal' data-target='#empModal' data-dia1="{{ $empresa['dia1'] }}"
									data-dia2="{{ $empresa['dia2'] }}" data-nome="{{ $empresa['nome_empresa'] }}"
									data-texto="{{ $empresa['pequena_descricao'] }}"
									data-imagem="https://fista.iscte-iul.pt/storage/{{ $empresa['avatar'] }}" data-link="{{ $empresa->link }}"
									style="width:100%">
									<div class="card"
										style="margin-bottom:15px;width:100%;-webkit-box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);">
										<img src="https://fista.iscte-iul.pt/storage/{{ $empresa['avatar'] }}" class="imgEmpresaDiamond"
											style="object-fit:contain">

									</div>
								</a>
							</div>
						@endif
					@endforeach
				</div>
			</div>
			<div style="margin-left:10%;margin-right:10%;">
				<h2
					style="margin:none !important;paddin-bottom:0.5rem;background-color:#4FAD32;text-align:center;color:white;border-radius: 25px;">
					Premium</h2>
				<hr>
				<div class="row justify-content-center" style="margin:0;margin-bottom:5%">
					@foreach ($dataEmp['premium'] as $empresa)
						@if ($empresa->id != 147)
							<div class='col-md-3 text-center' style="margin-left: auto;margin-right: auto; padding:10px;">
								<a href='#' data-toggle='modal' data-target='#empModal' data-dia1="{{ $empresa['dia1'] }}"
									data-dia2="{{ $empresa['dia2'] }}" data-nome="{{ $empresa['nome_empresa'] }}"
									data-texto="{{ $empresa['pequena_descricao'] }}"
									data-imagem="https://fista.iscte-iul.pt/storage/{{ $empresa['avatar'] }}" data-link="{{ $empresa->link }}"
									style="width:100%">
									<div class="card"
										style="margin-bottom:15px;width:100%;-webkit-box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);">
										<img src="https://fista.iscte-iul.pt/storage/{{ $empresa['avatar'] }}" class="imgEmpresaPremium"
											style="object-fit:contain">

									</div>
								</a>
							</div>
						@endif
					@endforeach
				</div>
			</div>
			<div style="width:100%;height:40px;"></div>
			<div style="margin-left:10%;margin-right:10%;">
				<h2 style="background-color:#FFCC66;text-align:center;color:white;border-radius: 25px;">Gold</h2>
				<hr>
				<div class="row justify-content-center" style="margin:0;margin-bottom:5%">
					@foreach ($dataEmp['gold'] as $empresa)
						<div class='col-md-3 d-flex justify-content-center'>
							<a href='#' data-toggle='modal' data-target='#empModal' data-dia1="{{ $empresa['dia1'] }}"
								data-dia2="{{ $empresa['dia2'] }}" data-nome="{{ $empresa['nome_empresa'] }}"
								data-texto="{{ $empresa['pequena_descricao'] }}"
								data-imagem="https://fista.iscte-iul.pt/storage/{{ $empresa['avatar'] }}" data-link="{{ $empresa->link }}"
								style="width:100%;padding-left:7%;padding-right:7%">
								<div class="card"
									style="margin-bottom:15px;width:100%;-webkit-box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);">
									<img src="https://fista.iscte-iul.pt/storage/{{ $empresa['avatar'] }}" class="imgEmpresaGold"
										style="object-fit:contain">

								</div>
							</a>
						</div>
					@endforeach
				</div>
			</div>
			<div style="width:100%;height:40px;"></div>
			<div style="margin-left:10%;margin-right:10%;">
				<h2
					style="margin:none !important;paddin-bottom:0.5rem;background-color:#c0c0c0;color:white;text-align:center;border-radius: 25px;">
					Silver</h2>
				<hr>
				<div class="row justify-content-center" style="margin:0">
					@foreach ($dataEmp['silver'] as $empresa)
						<div class='col-md-2 d-flex justify-content-center' style="margin-left: auto;margin-right: auto;">
							<a href='#' data-toggle='modal' data-target='#empModal' data-dia1="{{ $empresa['dia1'] }}"
								data-dia2="{{ $empresa['dia2'] }}" data-nome="{{ $empresa['nome_empresa'] }}"
								data-texto="{{ $empresa['pequena_descricao'] }}"
								data-imagem="https://fista.iscte-iul.pt/storage/{{ $empresa['avatar'] }}" data-link="{{ $empresa->link }}"
								style="width:100%">
								<div class="card"
									style="margin-bottom:15px;width:100%;-webkit-box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);">
									<img src="https://fista.iscte-iul.pt/storage/{{ $empresa['avatar'] }}" class="imgEmpresaSilver"
										style="object-fit:contain">

								</div>
							</a>
						</div>
					@endforeach
				</div>
			</div>
			<!--<div style="width:100%;height:40px;"></div>
								<div style="margin-left:10%;margin-right:10%;">
										<h2 style="text-align:center;">Bronze</h2>
										<hr>
								</div>
								</div>-->
			<div style="width:100%;height:40px;"></div>
		</div>

		<div class="modal fade" id="empModal">
			<div class="modal-dialog" style="background:transparent;border-color:transparent;border-radius: 200px;height: 110%;">
				<div class="modal-content" style="background:transparent;border-color:transparent;height:44pc">
					<div class="modal-header"
						style="background-color:#1EC4BD;
      padding-top:15%;
      padding-bottom:15%;
      height: max-content;
      -webkit-box-shadow: inset 0px -9px 15px -15px rgba(0, 0, 0, 0.75);
      -moz-box-shadow: inset 0px -9px 15px -15px rgba(0, 0, 0, 0.75);
      drop-shadow: inset 0px -9px 15px -15px rgba(0, 0, 0, 0.75); display: flex; flex-direction: column">
						<div style="display: flex; width:100%;">
							<h1 class="modal-empresa-nome" style="color:white;font-size:40px;paddin-bottom:5%;margin-left:4%">Nome</h1>
							<button type="button" style="outline:none;padding-top: 35px;padding-right: 35px;"class="close"
								data-dismiss="modal"><i class="fa fa-times-circle" style="outline:none;color:white;"
									aria-hidden="true"></i></button>
						</div>
						<div style="display: flex; margin-top: 1rem;text-align:center;">
							<p id="dia1"
								style="color: #1EC4BD; background: white; font-size: 10px font-weight: 700; border-radius: 5px; padding:3px; margin-left: 1rem">
								Dia 8</p>
							<p id="dia2"
								style="color: #1EC4BD; background: white; font-size: 10px font-weight: 700; border-radius: 5px; padding:3px; margin-left: 1rem">
								Dia 9</p>
						</div>
					</div>
					<!-- Modal body -->
					<div class="modal-body"
						style="background: white;flex: 0.2 1 auto;padding-top: 10%;margin-bottom: -10px;border-bottom-left-radius:1.5%;border-bottom-right-radius:1.5%">
						<div style="display: flex; align-items: center; justify-content: center; margin-bottom: 2rem;">
							<img src="" style="width: 200px;" class="modal-empresa-imagem" alt="imagem empresa">
						</div>
						<p class="modal-empresa-texto">Texto</p>
						<!-- <button type="" class="btn-fista center" style="margin-top:5%;margin-left:26%;">Mais Info</button> -->
						<a class="modal-empresa-link" href="" target="_blank">Saber mais<img src="/img/link.svg"
								class="modal-empresa-link-img" style="width:4.5%;vertical-align:top;margin-left:2%" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		$('#empModal').on('show.bs.modal', function(event) {
			var button = $(event.relatedTarget) // Button that triggered the modal
			var nome = button.data('nome') // Extract info from data-* attributes
			var texto = button.data('texto')
			var imagem = button.data('imagem')
			var link = button.data('link')
			var dia1 = button.data('dia1')
			var dia2 = button.data('dia2')

			console.log(dia1, dia2)
			// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
			// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
			var modal = $(this)
			modal.find('.modal-empresa-nome').text(nome)
			modal.find('.modal-empresa-texto').text(texto)
			modal.find('.modal-empresa-imagem').attr('src', imagem)
			modal.find('.modal-empresa-link').attr('href', link)
			if (link === "")
				modal.find('.modal-empresa-link').css("display", "none")
			else
				modal.find('.modal-empresa-link').css("display", "inline-block")

			if (dia1 === "") {
				modal.find('#dia1').css('display', "none")
			} else {
				modal.find('#dia1').css('display', "block")
			}
			if (dia2 === "") {
				modal.find('#dia2').css('display', "none")
			} else {
				modal.find('#dia2').css('display', "block")
			}
			//modal.find('.modal-body input').val(recipient)
		})
	</script>

	<style>
		.modal-empresa-link:hover {
			color: #1EC4BD !important;
			text-decoration: none;
		}

		.modal-empresa-link-img:hover {
			color: #1EC4BD !important;
		}

		.modal-empresa-link {
			text-decoration: none;
			color: black !important;
		}

		modal-empresa-link>img {
			width: 2.5%;
			vertical-align: top;
			margin-left: 2%;
		}

		a {
			text-decoration: none !important;
		}

		#dia1,
		#dia2 {
			text-decoration: none;
		}

		#dia1:hover {
			text-decoration: none;
		}

		#dia2:hover {
			text-decoration: none;
		}

		.imgEmpresaDiamond {
			display: inline-block;
			padding: 0 20px;
			margin-bottom: 10%;
			margin-top: 10%;
			height: 140px;
			position: relative;
		}

		.imgEmpresaPremium {
			display: inline-block;
			padding: 0 20px;
			margin-bottom: 10%;
			margin-top: 10%;
			height: 120px;
			position: relative;
		}

		.imgEmpresaGold {
			display: inline-block;
			padding: 0 20px;
			margin-bottom: 10%;
			margin-top: 10%;
			height: 100px;
			position: relative;
		}

		.imgEmpresaSilver {
			display: inline-block;
			padding: 0 20px;
			margin-bottom: 7%;
			margin-top: 7%;
			height: 80px;
			position: relative;
		}

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
			margin-top: auto;
			margin-bottom: 5%;
			color: #666666;
		}

		.title2 {
			font-family: 'Myriad Pro 1';
			font-size: 60px;
			color: #6cb743;
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
				color: #666666;
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
			color: #6cb743;
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

@extends('layouts.nav')
@section('title', 'Conferências')
@section('content')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>
	<script>
		const nav = document.querySelector('nav')
		const img = document.querySelector('img')
		nav.classList.add('active');
		img.setAttribute('src', 'img/logo_fista_horizontal_azul_2023_v2.png');
	</script>
	<div class="main footer_right">
		<div style="width:100%;height:40px;"></div>
		<div class="container" style="">
			<h1 class="title" style="">Conferências</h1>

			<h1 style="color:#1EC4BD;text-align:center;margin-top:5%">Conferências Blockchain e Web3</h1>
			<h2 style="color:black;text-align:center;margin-bottom:5%; font-size: 1.5rem;">Dia 2 março às 11h no Grande
				Auditório</h2>
			<div class="row justify-content-center" style="margin-left:auto;margin-right:auto;">
				@foreach ($conferencia_tecnologia as $conferencia)
					<div class="col-md-3 col-xs-4 text-center"
						style=" padding: 30px 0 40px; margin: 0 30px 20px 30px; border: 1px solid #1EC4BD;  box-shadow: 5px 5px #1EC4BD;border-radius:3%">
						<a href='#' data-toggle='modal' data-target='#oraModal'
							data-imagem="https://fista.iscte-iul.pt/storage{{ $conferencia['avatar_orador'] }}"
							data-nome="{{ $conferencia['nome'] }}" data-texto="{{ $conferencia['bio'] }}"
							data-cargo="{{ $conferencia['cargo'] }}">
							<img class="front" alt="imgOrador" src="https://fista.iscte-iul.pt/storage{{ $conferencia['avatar_orador'] }}"
								class="imgEmpresa">
						</a>
						<h3 style="text-align:center;padding:5px 5px 0px 5px;">
							{{ $conferencia['nome'] }}</h3>
						<h3 style="text-align:center;font-size:15px;margin-bottom:5 px !important;">
							{{ $conferencia['cargo'] }}
						</h3>

					</div>
				@endforeach
			</div>
			<div style="width:100%;height:20px;"></div>
			<div style="margin-left:0%;margin-right:0%;">
				<h1 style="color:#1EC4BD;text-align:center;">Architecture and Metaverse</h1>
				<h2 style="color:black;text-align:center;margin-bottom:5%; font-size: 1.5rem;">Dia 2 março às 17h no Grande
					Auditório</h2>
				<div class="row justify-content-center" style="margin-left:auto;margin-right:auto;">
					@foreach ($conferencia_arquitetura as $conferencia)
						<div class="col-md-5 col-xs-5 text-center"
							style=" padding: 30px 0 40px; margin: 0 10px 20px 10px; border: 1px solid #1EC4BD;  box-shadow: 5px 5px #1EC4BD;border-radius:3%">
							<a href='#' data-toggle='modal' data-target='#oraModal'
								data-imagem="https://fista.iscte-iul.pt/storage{{ $conferencia['avatar_orador'] }}"
								data-nome="{{ $conferencia['nome'] }}" data-texto="{{ $conferencia['bio'] }}"
								data-cargo="{{ $conferencia['cargo'] }}">
								<img class="front" alt="imgOrador" src="https://fista.iscte-iul.pt/storage{{ $conferencia['avatar_orador'] }}"
									class="imgEmpresa">
							</a>
							<h3 style="text-align:center;padding:5px 5px 0px 5px;">
								{{ $conferencia['nome'] }}</h3>
							<h3 style="text-align:center;font-size:15px;margin-bottom:5 px !important;">
								{{ $conferencia['cargo'] }}
							</h3>

						</div>
					@endforeach
				</div>
				<div class="row justify-content-center">
					<div class="modal fade" id="oraModal">
						<div class="modal-dialog-centered modal-dialog modal-lg" style="border:none !important;border-radius:10px;">
							<div class="modal-content shadow" style="border:none !important;border-radius:10px;">
								<div class="modal-header" style="background-color:#1EC4BD;color:white;">
									<div class="row">
										<div class="col-md-2 align-items-center text-center">
											<img class="front rounded-circle modal-ora-img"
												style="height:100px;border-radius:50%;border: 2px; border: white solid 3px !important;" src=""
												class="imgEmpresa">
										</div>

										<div class="col-md-10">
											<h2 class="modal-title modal-ora-nome"
												style="font-size:2.25rem;text-shadow: 0 0 3px #4e4e4e; display:inline-block;" id="exampleModalLongTitle">
											</h2>
											<div style="height:3px;width:100%;background-color:white"></div>
											<h3 class="modal-ora-empresa" style="font-size: 1.4rem; font-weight: 600;margin-top:2%"
												id="exampleModalLongTitle">
											</h3>
											<h5 class="modal-ora-cargo"></h5>
										</div>
									</div>


									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>

								</div>
								<div class="modal-body" style="color:#6c757d">
									<h5>Descrição</h5>
									<h6 class="modal-ora-texto" style="line-height:inherit"></h6>
									<br>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		$('#oraModal').on('show.bs.modal', function(event) {
			var button = $(event.relatedTarget) // Button that triggered the modal
			var nome = button.data('nome') // Extract info from data-* attributes
			var texto = button.data('texto')
			var cargo = button.data('cargo')
			var src1 = button.data('imagem')
			var urlimg = "https://fista.iscte-iul.pt/storage/"

			// Load default image if no image is found
			if (src1 == "") {
				var res = "/users/default.png";
			} else {
				var res = src1;
			}

			// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
			// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
			var modal = $(this)
			modal.find('.modal-ora-nome').text(nome)
			modal.find('.modal-ora-texto').text(texto)
			modal.find('.modal-ora-img').attr("src", res)
			modal.find('.modal-ora-cargo').text(cargo)
			//modal.find('.modal-body input').val(recipient)
		})
	</script>



	<style>
		.LinkedInIcon {
			height: 2.25rem;
			padding: 0.4rem;
			border: 2px white solid;
			border-radius: 10px;
			margin-right: 5px;
		}

		.LinkedInIcon:hover {
			background-color: #7beae5;
		}

		.WebsiteIcon {
			height: 2.25rem;
			padding: 0.4rem;
			border: 2px white solid;
			border-radius: 10px;
		}

		.WebsiteIcon:hover {
			background-color: #7beae5;
		}

		.front {
			height: 150px;
			border-radius: 50%;
			border: #1EC4BD solid 3px !important;
		}

		.front:hover {
			border-radius: 50%;
			border: #1EC4BD solid 5px !important;
		}

		/*
																																									.imgEmpresa {
																																													display: inline-block;
																																													padding: 0 20px;
																																													margin-bottom: 20px;
																																													height: 80px;
																																													position: relative;
																																									}*/

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
			color: #666666;
			margin-top: auto;
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

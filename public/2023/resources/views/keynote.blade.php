@extends('layouts.nav')
@section('title', 'Keynote')
@section('content')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>
	<script>
		const nav = document.querySelector('nav')
		const img = document.querySelector('img')
		nav.classList.add('active');
		img.setAttribute('src', 'img/logo_fista_horizontal_azul_2023_v2.png');
	</script>

	<?php
	
	use App\Keynote;
	$keynotesTech = Keynote::where('tipo', 'TECH')->get();
	$keynotesArq = Keynote::where('tipo', 'ARQ')->get();
	
	?>

	<div class="main footer_right">
		<div style="width:100%;height:40px;"></div>
		<div class="container" style="">
			<h1 class="title">Keynote Speakers</h1>
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12 col-12">
					<h1 style="text-align: center; color:#1EC4BD; margin-bottom: 3rem; margin-top: 3rem;">Tecnologias</h1>
					<div id="techKeynotes" style="display:flex;">
						@foreach ($keynotesTech as $tech)
							<div class="col-lg-6 col-md-6 col-sm-6" style="margin-bottom: 2rem;">
								<div style="display: flex; flex-direction: column; gap:1rem;">
									<a href="#" data-toggle='modal' data-target='#keynoteModal' data-nome="{{ $tech->nome_orador }}"
										data-bio="{{ $tech->bio }}" data-imagem="https://fista.iscte-iul.pt/storage{{ $tech->avatar_orador }}"
										data-cargo="{{ $tech->cargo }}">
										<div class="keynoteImage"
											style="background-image: url(https://fista.iscte-iul.pt/storage{{ $tech->avatar_orador }});">
										</div>
									</a>
									<div>
										<h2 style="text-align:center; margin-bottom: 0rem !important;">{{ $tech->nome_orador }}</h2>
										<p style="text-align:center; font-weight: 500; margin-bottom: 0.5rem !important;">{{ $tech->cargo }}</p>
										<span class="badge badge-secondary"
											style="background-color:#1EC4BD; margin: auto; display: table;">{{ $tech->dia }}</span>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 col-12">
					<h1 style="text-align: center; margin-bottom: 3rem; margin-top:3rem;">Arquitetura</h1>
					<div id="arqKeynotes" style="display:flex;">
						@foreach ($keynotesArq as $arq)
							<div class="col-lg-6 col-md-6 col-sm-6" style="margin-bottom: 2rem;">
								<div style="display: flex; flex-direction: column; gap:1rem">
									<a href="#" data-toggle='modal' data-target='#keynoteModal' data-nome="{{ $arq['nome_orador'] }}"
										data-bio="{{ $arq['bio'] }}" data-imagem="https://fista.iscte-iul.pt/storage{{ $arq['avatar_orador'] }}"
										data-cargo="{{ $arq['cargo'] }}">
										<div class="keynoteImage"
											style="border: black solid 4px !important; background-image: url(https://fista.iscte-iul.pt/storage{{ $arq->avatar_orador }});">
										</div>
									</a>
									<div style="display: flex; flex-direction: column;">
										<h2 style="text-align:center; margin-bottom: 0rem !important;">{{ $arq->nome_orador }}</h2>
										<p style="text-align:center; font-weight: 500; margin-bottom: 0.5rem !important;">{{ $arq->cargo }}</p>
										<span class="badge badge-secondary"
											style="background-color:#1EC4BD; margin: auto; display: table;">{{ $arq->dia }}</span>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="keynoteModal">
			<div class="modal-dialog-centered modal-dialog modal-lg" style="border:none !important;border-radius:10px;">
				<div class="modal-content shadow" style="border:none !important;border-radius:10px;">
					<div class="modal-header" style="background-color:#1EC4BD;color:white;">
						<div class="row" style="width:100%">
							<div class="col-md-2 align-items-center text-center">
								<img class="front rounded-circle modal-keynote-imagem"
									style="height:100px;border-radius:50%;border: 2px; border: white solid 3px !important;" src="">
							</div>

							<div class="col-md-10">
								<h2 class="modal-title modal-keynote-nome"
									style="font-size:2.25rem;text-shadow: 0 0 3px #4e4e4e; display:inline-block;" id="exampleModalLongTitle">
									Nome</h2>
								<div style="height:3px;width:100%;background-color:white"></div>

								<h5 class="modal-keynote-cargo">Cargo</h5>
							</div>
						</div>


						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>

					</div>
					<div class="modal-body" style="color:#6c757d">
						<h5>Descrição</h5>
						<h6 class="modal-keynote-bio" style="line-height:inherit">Bio
						</h6>
						<br>
					</div>

				</div>
			</div>
		</div>

	</div>



	<script>
		$('#keynoteModal').on('show.bs.modal', function(event) {
			var button = $(event.relatedTarget) // Button that triggered the modal
			var nome = button.data('nome') // Extract info from data-* attributes
			var bio = button.data('bio')
			var imagem = button.data('imagem')
			var cargo = button.data('cargo')

			var modal = $(this)
			modal.find('.modal-keynote-nome').text(nome)
			modal.find('.modal-keynote-bio').text(bio)
			modal.find('.modal-keynote-imagem').attr('src', imagem)
			modal.find('.modal-keynote-cargo').text(cargo)
		})
	</script>


	<style>
		.title {
			font-family: 'Myriad Pro 1';
			font-size: 55px;
			color: #666666;
			margin-top: auto;
		}

		.keynoteImage {
			width: 175px;
			height: 175px;
			background-size: cover;
			background-position: center;
			border-radius: 50%;
			border: #1EC4BD solid 4px;
			margin: auto;
		}

		@media only screen and (max-width: 582px) {

			#arqKeynotes,
			#techKeynotes {
				flex-direction: column;
			}
		}
	</style>
@endsection

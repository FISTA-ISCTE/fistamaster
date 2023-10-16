@extends('layouts.nav')
@section('title', 'Speed Interviews')
@section('content')
	<link href="{{ asset('css/media.css') }}" rel="stylesheet">
	<script>
		const nav = document.querySelector('nav')
		const img = document.querySelector('img')
		nav.classList.add('active');
		img.setAttribute('src', "{{ asset('img/logo_fista_horizontal_azul_2023_v2.png') }}");
	</script>

	<?php
	
	use App\SpeedInterviews;
	
	$speedinterviews_1 = SpeedInterviews::where('turno_si', 1);
	$speedinterviews_2 = SpeedInterviews::where('turno_si', 2);
	
	?>

	<div class="main footer_left">
		<div class="single-header pb-md-5 container pb-4" style="padding-bottom:0 !important">
			<div style="margin-top:5%;margin-bottom:10%;">
				<div>
					<h1 class="speedinterviews-title" style="color: #666666;font-weight: bold;">Speed Interviews</h1>
				</div>
			</div>
		</div>

		<div class="clearfix striped-sections right" style="margin-bottom:-10%;">
			<div class="padding modal_container clickable same-height container" id="speedinterviews"
				style="margin-top:20px;opacity: 1;margin-bottom:30%;">
				<div class="row m-auto">
					<div class="speedinterviews-modal-box col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4" style="margin-bottom:5%;">
						<div class="same-height-item center" style="height:auto;">
							<img class="speedinterviews-img" src="{{ asset('/img/speedinterviews_1.png') }}" data-toggle="modal"
								data-target="#editDealModal-1"></img>
							<div class="content">
								<h1 class="speedinterviews" style="margin-top:10%;">Speed Interview Ronda 1</h1>
								<p class="date_place">dia 8 das 16h00 às 17h30</p>
								<?php if($speedinterviews_1->count() < 16){?><p class="spots_left"> {{ 16 - $speedinterviews_1->count() }} vagas </p>
								<?php }else{ ?>
								<p class="spots_left"> ESGOTADO </p> <?php }?>
							</div>
						</div>
					</div>
					<div class="speedinterviews-modal-box col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4" style="margin-bottom:5%;">
						<div class="same-height-item center" style="height:auto;">
							<img class="speedinterviews-img" src="{{ asset('/img/speedinterviews_2.png') }}" data-toggle="modal"
								data-target="#editDealModal-2"></img>
							<div class="content">
								<h1 class="speedinterviews" style="margin-top:10%;">Speed Interview Ronda 2</h1>
								<p class="date_place">dia 9 das 16h00 às 17h30</p>
								<?php if($speedinterviews_2->count() < 18){?><p class="spots_left"> {{ 18 - $speedinterviews_2->count() }} vagas </p>
								<?php }else{ ?>
								<p class="spots_left"> ESGOTADO </p> <?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="editDealModal-1" tabindex="" role="dialog" tabindex="-1" role="dialog"
		aria-labelledby="myLargeModalLabel">
		<div class="modal-dialog-centered modal-dialog modal-lg">
			<div class="modal-content shadow" style="border:none !important;border-radius:10px;">
				<div class="modal-header" style="background-color:#1EC4BD;color:white;">
					<div class="bora">
						<h3 class="modal-title" style="text-shadow: 0 0 3px #4e4e4e;" id="exampleModalLongTitle">Speed Interview Ronda 1
						</h3>
					</div>

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>

				</div>

				<div class="row"
					style="border-bottom: 5px #1EC4BD solid;padding-top:1vh;margin-left: 0px !important; margin-right: 0px !important;">
					<div class="col-md-6">
						<h6 class="text-left">DIA 8 DAS 16H00 ÀS 17H30</h6>
					</div>
					<div class="col-md-6">
						<h6 class="text-right" style="color:#4ABA3A">
							</p> <?php if($speedinterviews_1->count() < 16){?><p class="spots_left"> {{ 16 - $speedinterviews_1->count() }} vagas </p>
							<?php }else{ ?>
							<p class="spots_left"> ESGOTADO </p> <?php }?>
						</h6>
					</div>
				</div>
				<div class="modal-body" style="color:#6c757d">
					<h5>Descrição</h5>
					<h6>Empresas presentes: </h6>
					<br>
					<div class="align-items-center container flex text-center"
						style="padding-top:30px; flex-wrap: wrap; display: flex; gap: 2rem; justify-content: center;">
						<img src="https://fista.iscte-iul.pt/storage/users/empresas/2431673622810.png" style="width:20%; "class="img"
							alt="" />
						<img src="https://fista.iscte-iul.pt/storage/users/empresas/2361675943651.png" style="width:20%; "class="img"
							alt="" />
						<img src="https://fista.iscte-iul.pt/storage/users/empresas/2491673973184.jpg" style="width:20%; "class="img"
							alt="" />
						<img src="https://fista.iscte-iul.pt/storage/users/empresas/2601676379612.png" style="width:20%; "class="img"
							alt="" />
						<img src="https://fista.iscte-iul.pt/storage/users/empresas/2611676398488.png" style="width:20%; "class="img"
							alt="" />
						<img src="https://fista.iscte-iul.pt/storage/users/empresas/1831668784740.jpg" style="width:20%; "class="img"
							alt="" />
					</div>

				</div>

				<div class="modal-footer justify-content-center" style="">

					@if ($speedinterviews_1->count() < 16)
						@if (Auth::check())
							@if (Auth::user()->id_curso != null && Auth::user()->id_ano != null)
								@if ($speedinterviews_1->where('id_user', Auth::user()->id)->first() == null)
									<a class="btn-fista"
										style="color:white !important;background-color: #1EC4BD !important;width: 30% !important;font-weight: bold !important;padding: 0 !important"
										href="{{ route('inscreverspeedinterview', 1) }}">Inscrever</a>
								@else
									<a class="btn-fista"
										style="color:white !important;background-color: #1EC4BD !important;width: 30% !important;font-weight: bold !important;padding: 0 !important"
										href="{{ route('desinscreverspeedinterview', 1) }}">Desinscrever</a>
								@endif
							@else
								<a class="btn-fista"
									style="color:white !important;background-color: #1EC4BD !important;width: 30% !important;font-weight: bold !important;padding: 0 !important"
									href="https://fista.iscte-iul.pt/minhaconta/{{ Auth::user()->uuid }}">Coloca o ano e o curso! Por favor!</a>
							@endif
						@else
							<a class="btn-fista"
								style="color:white !important;background-color: #1EC4BD !important;width: 30% !important;font-weight: bold !important;padding: 0 !important"
								data-dismiss="modal" data-toggle="modal" data-target="#myModal">Login</a>
						@endif
					@else
						@if (Auth::check())
							@if (Auth::user()->id_curso != null && Auth::user()->id_ano != null)
								@if ($speedinterviews_1->where('id_user', Auth::user())->first() != null)
									<a class="btn-fista"
										style="color:white !important;background-color: #1EC4BD !important;width: 30% !important;font-weight: bold !important;padding: 0 !important"
										href="{{ route('desinscreverspeedinterview', 1) }}">Desinscrever</a>
								@endif
							@endif
						@endif
					@endif
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="editDealModal-2" tabindex="" role="dialog" tabindex="-1" role="dialog"
		aria-labelledby="myLargeModalLabel">
		<div class="modal-dialog-centered modal-dialog modal-lg">
			<div class="modal-content shadow" style="border:none !important;border-radius:10px;">
				<div class="modal-header" style="background-color:#1EC4BD;color:white;">
					<div class="bora">
						<h3 class="modal-title" style="text-shadow: 0 0 3px #4e4e4e;" id="exampleModalLongTitle">Speed Interview Ronda 2
						</h3>
					</div>

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>

				</div>

				<div class="row"
					style="border-bottom: 5px #1EC4BD solid;padding-top:1vh;margin-left: 0px !important; margin-right: 0px !important;">
					<div class="col-md-6">
						<h6 class="text-left">DIA 9 DAS 16H00 ÀS 17H30</h6>
					</div>
					<div class="col-md-6">
						<h6 class="text-right" style="color:#4ABA3A">
							</p> <?php if($speedinterviews_2->count() < 18){?><p class="spots_left"> {{ 18 - $speedinterviews_2->count() }} vagas </p>
							<?php }else{ ?>
							<p class="spots_left"> ESGOTADO </p> <?php }?>
						</h6>
					</div>
				</div>
				<div class="modal-body" style="color:#6c757d">
					<h5>Descrição</h5>
					<h6>Empresas presentes: </h6>
					<br>
					<div style="padding-top:30px; flex-wrap: wrap; display: flex; gap: 2rem; justify-content: center;"
						class="align-items-center container flex text-center">
						<img src="https://fista.iscte-iul.pt/storage/users/empresas/2481673890264.png" style="width:20%; "class="img"
							alt="" />
						<img src="https://fista.iscte-iul.pt/storage/users/empresas/2591676646227.jpg" style="width:20%; "class="img"
							alt="" />
						<img src="https://fista.iscte-iul.pt/storage/users/empresas/1801668539701.png" style="width:20%; "class="img"
							alt="" />
						<img src="https://fista.iscte-iul.pt/storage/users/empresas/2101670933578.png" style="width:20%; "class="img"
							alt="" />
						<img src="https://fista.iscte-iul.pt/storage/users/empresas/2131671034321.png" style="width:20%; "class="img"
							alt="" />
						<img src="https://fista.iscte-iul.pt/storage/users/empresas/2551674736851.png" style="width:20%; "class="img"
							alt="" />
						<img src="https://fista.iscte-iul.pt/storage/users/empresas/2111671016671.jpeg"
							style="width:20%; "class="img" alt="" />
					</div>

				</div>

				<div class="modal-footer justify-content-center" style="">

					@if ($speedinterviews_2->count() < 18)
						@if (Auth::check())
							@if (Auth::user()->id_curso != null && Auth::user()->id_ano != null)
								@if ($speedinterviews_2->where('id_user', Auth::user()->id)->first() == null)
									<a class="btn-fista"
										style="color:white !important;background-color: #1EC4BD !important;width: 30% !important;font-weight: bold !important;padding: 0 !important"
										href="{{ route('inscreverspeedinterview', 2) }}">Inscrever</a>
								@else
									<a class="btn-fista"
										style="color:white !important;background-color: #1EC4BD !important;width: 30% !important;font-weight: bold !important;padding: 0 !important"
										href="{{ route('desinscreverspeedinterview', 2) }}">Desinscrever</a>
								@endif
							@else
								<a class="btn-fista"
									style="color:white !important;background-color: #1EC4BD !important;width: 30% !important;font-weight: bold !important;padding: 0 !important"
									href="https://fista.iscte-iul.pt/minhaconta/{{ Auth::user()->uuid }}">Coloca o ano e o curso! Por favor!</a>
							@endif
						@else
							<a class="btn-fista"
								style="color:white !important;background-color: #1EC4BD !important;width: 30% !important;font-weight: bold !important;padding: 0 !important"
								data-dismiss="modal" data-toggle="modal" data-target="#myModal">Login</a>
						@endif
					@else
						@if (Auth::check())
							@if (Auth::user()->id_curso != null && Auth::user()->id_ano != null)
								@if ($speedinterviews_2->where('id_user', Auth::user())->first() != null)
									<a class="btn-fista"
										style="color:white !important;background-color: #1EC4BD !important;width: 30% !important;font-weight: bold !important;padding: 0 !important"
										href="{{ route('desinscreverspeedinterview', 2) }}">Desinscrever</a>
								@endif
							@endif
						@endif
					@endif
				</div>
			</div>
		</div>
	</div>



	<style>
		.searchform {
			max-width: 80%;
			margin-top: 2%;
			margin-left: auto;
			margin-right: auto;
			position: relative;
		}

		.speedinterviews-title {
			font-family: 'Myriad Pro 1';
			font-size: 55px;
			color: #949494;
			margin-top: auto;

		}


		.lable {
			position: absolute;
			right: 2%;
			top: 50%;
			transform: translatey(-50%);
			color: #A7A8A7;
			transition: all 0.2s ease;
		}

		.search-input {
			width: 100%;
			padding: 8px 30px 8px 12px;
			border: 2px solid rgba(0, 0, 0, 0.01);
			outline: none;
			font-size: 16px;
			box-shadow: 1px 2px 5px rgba(0, 0, 0, 0.06);
			color: #A7A8A7;
			font-weight: bold;
			letter-spacing: 0.5px;
			border-radius: 40px;
			transition: all 0.2s ease;
			font-family: 'Myriad Pro 3';
			padding-left: 12%;


		}

		.search-input:focus {
			border-color: white;
		}

		.search-input:focus+label {
			transform: scale(1.05) translatey(-50%);
			color: :#A7A8A7;
		}

		.search-input::placeholder {
			/* Chrome, Firefox, Opera, Safari 10.1+ */
			color: #A7A8A7;
			opacity: 1;
			/* Firefox */
		}

		.speedinterviews {
			font-size: 20px;
			letter-spacing: -0.50px;
		}

		.search-group-align {
			margin-left: auto;
			margin-right: none;
			position: relative;
			width: 310px;
			height: 50px;
			margin-top: -12%;
			margin-bottom: auto;
		}

		.speedinterviews-img {
			height: 23vh;
			width: 55vh;
			background-size: cover;
			background-position: center;
			position: relative;
			-webkit-box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.2);
			-moz-box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.2);
			box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.2);
			border-radius: 15px;
			transition-duration: 0.6s;
			transition-timing-function: ease-out;
		}

		.speedinterviews-img:hover {
			background-size: cover;
			background-position: center;
			position: relative;
			border-radius: 15px;
			-webkit-box-shadow: none;
			-moz-box-shadow: none;
			box-shadow: none;
			border-radius: 15px;
			transition-duration: 0.5s;
			transition-timing-function: ease-out;
		}

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

			.speedinterviews-title {
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
			font-size: 11px;
			padding: 4px 7px;
		}
	</style>
@endsection

@extends('layouts.nav')
@section('title', 'FISTA23')
@section('content')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>
	<script>
		const nav = document.querySelector('nav')
		const img = document.querySelector('img')
		nav.classList.add('active');
		img.setAttribute('src', 'img/logo_fista_horizontal_azul_2023_v2.png');
	</script>

	<style>
		@media (max-width: 575.98px) {
			.padding {
				padding-top: 25%;
			}

			#texte {
				font-size: 50px;
			}
		}

		/* Small devices (landscape phones, 576px and up)*/
		@media (min-width: 576px) and (max-width: 767.98px) {
			.padding {
				padding-top: 18%;
			}

			#texte {
				font-size: 50px;
			}
		}

		/* Medium devices (tablets, 768px and up)*/
		@media (min-width: 768px) and (max-width: 991.98px) {
			.padding {
				padding-top: 10%;
			}

			#texte {
				font-size: 50px !important;
			}
		}

		/* Large devices (desktops, 992px and up)*/
		@media (min-width: 992px) and (max-width: 1199.98px) {
			.padding {
				padding-top: 8%;
			}

			#texte {
				font-size: 50px !important;
			}
		}

		/*Extra large devices (large desktops, 1200px and up)*/
		@media (min-width: 1200px) {
			.padding {
				padding-top: 8%;
			}

			#texte {
				font-size: 50px !important;
			}
		}
	</style>


	<section class="welcome" id="background" style="height:900px;">

		<div class="padding container">
			<div style=" margin:auto;">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<h1 id="texte" style="color:#f4f6f8; text-align:center" class="font-weight-bold">FAQ</h1>
					</div>
					<div class="col-md-2"></div>
				</div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6" style="text-align:center;"><img src="/img/logo_fista_branco_2023.png"></div>
					<div class="col-md-3"></div>
				</div>
			</div>
		</div>

	</section>

@endsection

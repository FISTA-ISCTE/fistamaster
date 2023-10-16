@extends('layouts.nav')

@section('content')
	<script>
		const nav = document.querySelector('nav')
		const img = document.querySelector('img')
		nav.classList.add('active');
		img.setAttribute('src', "{{ asset('img/logo_fista_horizontal_azul_2023_v2.png') }}");
	</script>

	<style>
		/* Extra small devices (portrait phones, less than 576px)*/
		@media (max-width: 575.98px) {
			.padding {
				padding-top: 25%;
			}

			#texte {
				font-size: 65px;
			}
		}

		/* Small devices (landscape phones, 576px and up)*/
		@media (min-width: 576px) and (max-width: 767.98px) {
			.padding {
				padding-top: 18%;
			}

			#texte {
				font-size: 68px;
			}
		}

		/* Medium devices (tablets, 768px and up)*/
		@media (min-width: 768px) and (max-width: 991.98px) {
			.padding {
				padding-top: 10%;
			}

			#texte {
				font-size: 75px !important;
			}
		}

		/* Large devices (desktops, 992px and up)*/
		@media (min-width: 992px) and (max-width: 1199.98px) {
			.padding {
				padding-top: 8%;
			}

			#texte {
				font-size: 80px !important;
			}
		}

		/*Extra large devices (large desktops, 1200px and up)*/
		@media (min-width: 1200px) {
			.padding {
				padding-top: 8%;
			}

			#texte {
				font-size: 90px !important;
			}
		}
	</style>
	<div class="container padding">
		<div style="max-width: 900px; margin:auto;">
			<div class="col-md-4" style="margin:0 auto"><img src="{{ asset('img/manutencao23.png') }}"></div>
			<h4 style="text-align:center; margin-top: 2rem;"> A página que procurou está em manutenção!</h4>
			<h5 style="text-align:center"> Esperamos ser breves</h5>

		</div>
	</div>
@endsection

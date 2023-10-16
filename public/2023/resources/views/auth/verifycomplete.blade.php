@extends('layouts.nav')
@section('title', 'FISTA23 - Verificar Email')
@section('content')
	<script>
		const nav = document.querySelector('nav')
		const img = document.querySelector('img')
		nav.classList.add('active');
		img.setAttribute('src', "{{ asset('img/logo_fista_horizontal_azul_2023_v2.png') }}");
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<div class="main footer_right">

		<div class="container" style="margin-top: 5%;">
			<div class="justify-content-center">

				<div class="card"
					style="box-shadow: -1px 7px 20px 0px #0000001f;
    border-radius: 10px;
    border-color: transparent;">
					<div class="container">
						<div style="display: flex; align-items:center; justify-content: center;">
							<img style="width:20rem" src="{{ asset('img/logo_fista_azul_2023_10edicao.png') }}" alt="Logo fista 10ª edição">
						</div>
						<h1 style="margin-top: 1rem;text-align: center;color:#1EC4BD;">Email verificado com sucesso!</h1>

						<div class="card-body"
							style="font-family:'Myriad Pro 1';color:grey;text-align:center;margin-top: 1.5rem;font-size:24px;">
							Pode fechar esta página ou efetuar o login <a style="color:#1EC4BD !important; font-size:24px;"
								href="https://fista.iscte-iul.pt/#myModal">aqui</a>!</div>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection

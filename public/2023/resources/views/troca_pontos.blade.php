@extends('layouts.nav')
@section('title', 'Troca de Pontos')
@section('content')
	<link href="{{ asset('css/media.css') }}" rel="stylesheet">
	<script>
		const nav = document.querySelector('nav')
		const img = document.querySelector('img')
		nav.classList.add('active');
		img.setAttribute('src', "{{ asset('img/logo_fista_horizontal_azul_2023_v2.png') }}");
	</script>

	<div class="container" style="margin-bottom:5%">
		<div class="mb-4" style="margin-top:auto;margin-left:auto;margin-top:12%">
			<div class="row" style="height:0%;margin:0">
				<h1 style="font-family:'Myriad Pro 1';font-size:55px;color:#666666;">Troca de Pontos</h1>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-8">

				<form method="POST" action="{{ route('troca_pontos') }}" target="gravar" class="formPontos">
					@csrf
					<div class="center">
						<div class="form-group">
							<label for="email" style="font-size: .9rem; line-height: 15px;">Email</label>
							<input type="text" id="email" placeholder="Email" class="form-control" name="email" required>
						</div>
					</div>
					<div class="center">
						<div class="form-group">
							<label for="telemovel" style="font-size: .9rem; line-height: 15px;">Telemóvel</label>
							<input type="text" id="telemovel" placeholder="Telemovel" class="form-control" name="telemovel" required>
						</div>
					</div>

					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="1" id="pulseira_checkbox" name="pulseira_checkbox">
						<label class="form-check-label" for="pulseira_checkbox">
							Pulseira + Copo (5500 pontos)
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="1" id="pack_checkbox" name="pack_checkbox">
						<label class="form-check-label" for="pack_checkbox">
							Pack (7000 pontos): pulseira, copo, 5 cervejas
						</label>
					</div>

					<button type="submit" class="btn-fista center" style="margin-left:23%;margin-top:4%">
						Trocar
					</button>
				</form>
				<iframe name="gravar" style="display: none;"></iframe>
			</div>
		</div>
	</div>

	<script>
		$(function() {
			var opcoes = $('.formPontos :checkbox');
			opcoes.change(function() {
				var opcao2 = $('input#pulseira_checkbox.form-check-input');
				var opcao3 = $('input#pack_checkbox.form-check-input');
				if (opcao2.is(':checked'))
					opcao3.attr('disabled', 'disabled');
				else
					opcao3.removeAttr('disabled');
				if (opcao3.is(':checked')) {
					opcao2.attr('disabled', 'disabled');
				} else {
					opcao2.removeAttr('disabled');
				}
			});
		});
	</script>
@endsection

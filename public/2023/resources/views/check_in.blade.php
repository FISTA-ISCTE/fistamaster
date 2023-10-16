@extends('layouts.nav')
@section('title', 'Check-in')
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
				<h1 style="font-family:'Myriad Pro 1';font-size:55px;color:#666666;">Check-in</h1>
			</div>
		</div>
		@if (Auth::check() &&
				(Auth::user()->role_id == 3 ||
					Auth::user()->role_id == 7 ||
					Auth::user()->role_id == 5 ||
					Auth::user()->role_id == 24 ||
					Auth::user()->role_id == 14))
			<div class="row justify-content-center" style="margin-top:5%">
				<div class="col-md-8">
					<h3>Check-in Tenda</h3>

					<form method="POST" action="{{ route('check_in_tenda') }}" target="gravar">
						@csrf
						<div class="center">
							<p style="font-size: .9rem; line-height: 15px;">Email</p>
							<div class="form-group">
								<input type="text" placeholder="Email" class="form-control" name="email"required>
							</div>
						</div>

						<button type="submit" class="btn-fista center" style="margin-left:23%;">
							Verificar
						</button>
					</form>
					<iframe name="gravar" style="display: none;"></iframe>
				</div>
			</div>
		@endif
		@if (Auth::check() &&
				(Auth::user()->role_id == 3 ||
					Auth::user()->role_id == 7 ||
					Auth::user()->role_id == 5 ||
					Auth::user()->role_id == 23 ||
					Auth::user()->role_id == 14))
			<div class="row justify-content-center" style="margin-top:5%">
				<div class="col-md-8">
					<h3>Check-in Conferência Arquitetura</h3>

					<form method="POST" action="{{ route('check_in_conferencia') }}" target="gravar">
						@csrf
						<input type="hidden" name="tipo_conferencia" value="conferencia_arquitetura">
						<div class="center">
							<p style="font-size: .9rem; line-height: 15px;">Email</p>
							<div class="form-group">
								<input type="text" placeholder="Email" class="form-control" name="email"required>
							</div>
						</div>

						<button type="submit" class="btn-fista center" style="margin-left:23%;">
							Check-in
						</button>
					</form>
					<iframe name="gravar" style="display: none;"></iframe>
				</div>
			</div>

			<div class="row justify-content-center" style="margin-top:5%">
				<div class="col-md-8">
					<h3>Check-in Conferência Tecnologias</h3>

					<form method="POST" action="{{ route('check_in_conferencia') }}" target="gravar">
						@csrf
						<input type="hidden" name="tipo_conferencia" value="conferencia_tecnologia">

						<div class="center">
							<p style="font-size: .9rem; line-height: 15px;">Email</p>
							<div class="form-group">
								<input type="text" placeholder="Email" class="form-control" name="email"required>
							</div>
						</div>

						<button type="submit" class="btn-fista center" style="margin-left:23%;">
							Check-in
						</button>
					</form>
					<iframe name="gravar" style="display: none;"></iframe>
				</div>
			</div>
		@endif
		@if (Auth::check() &&
				(Auth::user()->role_id == 3 ||
					Auth::user()->role_id == 7 ||
					Auth::user()->role_id == 5 ||
					Auth::user()->role_id == 14 ||
					Auth::user()->role_id == 26))
			<div class="row justify-content-center" style="margin-top:5%">
				<div class="col-md-8">
					<h3>Check-in Keynotes</h3>

					<form method="post" action="/check_in_keynote" style="margin-top:20px" accept-charset="UTF-8" target="gravar">
						@csrf
						<h4 style="text-align:inherit">Keynote</h4>
						<div class="form-group">
							<select name="id_keynote" id="id_keynote" class="form-control">
								<option value="" disabled selected>Escolher Keynote</option>
								@foreach (App\Keynote::all() as $keynote)
									<option value="{{ $keynote->id }}">{{ $keynote->id }}: {{ $keynote->titulo }}</option>
								@endforeach
							</select>
						</div>

						<br>

						<h4 style="text-align:inherit">Email</h4>
						<div class="form-group">
							<input type="text" id="email" name="email" placeholder="Introduzir Email" class="form-control">
						</div>


						<button type="submit" class="btn-fista center" style="margin-left:23%;">
							Check-in
						</button>
					</form>
					<iframe name="gravar" style="display: none;"></iframe>
				</div>
			</div>
		@endif
		@if (Auth::check() &&
				(Auth::user()->role_id == 3 ||
					Auth::user()->role_id == 7 ||
					Auth::user()->role_id == 5 ||
					Auth::user()->role_id == 14 ||
					Auth::user()->role_id == 25))
			<div class="row justify-content-center" style="margin-top:5%">
				<div class="col-md-8">
					<h3>Check-in Workshops</h3>

					<form method="post" action="/checkinWorkshop" style="margin-top:20px" accept-charset="UTF-8" target="gravar">
						@csrf
						<h4 style="text-align:inherit">Workshop</h4>
						<div class="form-group">
							<select name="workshop" id="workshop" class="form-control">
								<option value="" disabled selected>Escolher Workshop</option>
								@foreach (App\Workshop::all() as $workshop)
									<option value="{{ $workshop->id }}">{{ $workshop->id }}: {{ $workshop->title }}</option>
								@endforeach
							</select>
						</div>

						<br>

						<h4 style="text-align:inherit">Email</h4>
						<div class="form-group">
							<input type="text" id="emailUser" name="emailUser" placeholder="Introduzir Email" class="form-control">
						</div>


						<button type="submit" class="btn-fista center" style="margin-left:23%;">
							Check-in
						</button>
					</form>
					<iframe name="gravar" style="display: none;"></iframe>
				</div>
			</div>
		@endif
	</div>
@endsection

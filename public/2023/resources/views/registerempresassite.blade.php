@extends('layouts.nav')
@section('title', 'Registar Empresa')
@section('content')
	<script>
		const nav = document.querySelector('nav')
		const img = document.querySelector('img')
		nav.classList.add('active');
		img.setAttribute('src', 'img/logo_fista_horizontal_azul_2023_v2.png');
	</script>
x
	<div class="main footer_right">
		<div class="container">

			<h1 style="font-size:40px;color:#666666;margin-bottom:30px;">Registo da empresa no site</h1>

			<div class="row justify-content-center">
				<div class="col-md-8">

					<form method="POST" action="{{ route('register') }}">
						@csrf

						<div class="form-group">
							<input id="first_name" type="text" placeholder="First name"
								class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}"
								required autocomplete="first_name" autofocus>

							@error('first_name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>

						<div class="form-group">
							<input id="last_name" type="text" placeholder="Last name"
								class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}"
								required autocomplete="last_name" autofocus>

							@error('last_name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>

						<div class="form-group">
							<input id="email" type="email" placeholder="E-mail"
								class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
								autocomplete="email">

							@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>

						<div class="form-group">
							<input id="password" type="password" placeholder="Password"
								class="form-control @error('password') is-invalid @enderror" name="password" required
								autocomplete="new-password">

							@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>

						<div class="form-group">
							<input id="password-confirm" placeholder="Password confirm" type="password" class="form-control"
								name="password_confirmation" required autocomplete="new-password">
						</div>

						<div class="form-group">
							<input TYPE="hidden" id="empresa" readonly value="{{ app('request')->input('empresa') }}" type="text"
								class="form-control" name="empresa" autocomplete="empresa">
						</div>
						<div class="form-group">
							<input TYPE="hidden" id="invite" readonly value="{{ app('request')->input('invite') }}" type="text"
								class="form-control" name="invite" autocomplete="invite">
						</div>

						<div class="center">
							<p style="font-size: 11px; line-height: 15px;">Ao registar, aceita as nossas condições. Veja como recolhemos,
								usamos e partilhamos a sua informação na nossa <a href="https://fista.iscte-iul.pt/politica-privacidade"
									style="color:black !important;font-size: 11px; line-height: 15px;">Política de Privacidade</a>.</p>
							<button type="submit" class="btn-fista center" style="margin-left:23%;">
								Registar
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


@endsection

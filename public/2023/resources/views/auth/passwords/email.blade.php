@extends('layouts.nav')
@section('title', 'Reset Password')
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
			<div class=" justify-content-center">

				<div class="card"
					style="box-shadow: -1px 7px 20px 0px #0000001f;
    border-radius: 10px;
    border-color: transparent;">
					<div class="container">
						<h1 style="margin-top: 61px;text-align: center;color:#1EC4BD;">Reset Password</h1>

						<div class="card-body"
							style="font-family:'Myriad Pro 1';color:grey;text-align:center;margin-top: 38px;font-size:24px;">

							@if (session('resent'))
								{{ __('A fresh verification link has been sent to your email address!') }}
							@else
								Before proceeding, please check your email for a verification link.
								If you did not receive the email then
							@endif

							<div style="margin-top: 6pc;margin-bottom: 55px;">

								@if (session('status'))
									<div class="alert alert-success" role="alert" style="background-color:#1EC4BD;color:white">
										{{ session('status') }}
									</div>
								@endif

								<form method="POST" action="{{ route('password.email') }}">
									@csrf

									<div class="form-group ">
										<label for="email" class="col-md-4 col-form-label">{{ __('E-Mail Address') }}</label>


										<input id="email" type="email" style="border: 2px solid #1EC4BD;border-radius: 40px;"
											class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
											autocomplete="email" autofocus>

										@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror

									</div>

									<div class="form-group ">

										<button type="submit" class="btn-fista">
											{{ __('Send Password Reset Link') }}
										</button>

									</div>
								</form>
								<style>
									.request {
										outline: none;
										border-radius: 40px;
										font-size: 17px;
										padding-top: 19px;
										font-family: 'Myriad Pro 1';
										padding-bottom: 16px;
										padding-left: 33px;
										padding-right: 31px;
										color: white !important;
										background: linear-gradient(160deg, #aede70 0%, #4fad32 100%);
										border: 2px transparent;
										transition: 0.2s ease;
										box-shadow: 1px 6px 20px #00000014;
									}

									.request:hover,
									.request:active {
										outline: none;
										border-radius: 40px;
										font-size: 17px;
										font-family: 'Myriad Pro 1';
										transition: 0.2s ease;
										padding-top: 19px;
										padding-bottom: 16px;
										padding-left: 33px;
										padding-right: 31px;
										color: #7ac14f !important;
										background: white;
										border-color: #7ac14f;
										box-shadow: 1px 6px 20px #00000014;
									}
								</style>

							</div>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

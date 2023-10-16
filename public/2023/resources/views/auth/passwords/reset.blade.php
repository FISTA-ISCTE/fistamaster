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
					style="box-shadow: -1px 7px 20px 0px #0000001f;margin-bottom:10%;
    border-radius: 10px;
    border-color: transparent;">
					<div class="container">
						<h1 style="margin-top: 61px;text-align: center;color:#1EC4BD;">Reset Password</h1>

						<div class="card-body"
							style="font-family:'Myriad Pro 1';color:grey;text-align:center;margin-top:0px;font-size:24px;">


							<div class="container" style="width:80%;margin-top:1pc;margin-bottom:70px;">

								<form method="POST" action="{{ route('password.update') }}">
									@csrf

									<input type="hidden" name="token" value="{{ $token }}">

									<div class="form-group ">


										<input id="email" type="email" style="display:none;"
											class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}"
											required autocomplete="email" autofocus>

										@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror

									</div>

									<div class="form-group ">



										<input id="password" placeholder="{{ __('Password') }}" type="password"
											style="border: 2px solid #1EC4BD;border-radius: 40px;"class="form-control @error('password') is-invalid @enderror"
											name="password" required autocomplete="new-password">

										@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror

									</div>

									<div class="form-group ">



										<input id="password-confirm"
											style="border: 2px solid #1EC4BD;border-radius: 40px;"placeholder="{{ __('Confirm Password') }}"
											type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

									</div>

									<div class="form-group" style="text-align:center;margin-top:10%;">

										<button type="submit" class="btn-fista">
											{{ __('Reset Password') }}
										</button>

									</div>
								</form>
								<style>
									.request {
										outline: none;
										border-radius: 40px;
										font-size: 17px;
										padding-top: 14px;
										font-family: 'Myriad Pro 1';
										padding-bottom: 14px;
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
										padding-top: 14px;
										padding-bottom: 14px;
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

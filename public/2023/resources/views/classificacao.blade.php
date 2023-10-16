@extends('layouts.nav')
@section('title', 'FISTA GO')
@section('content')
	<link href="{{ asset('css/becomePartner.css') }}" rel="stylesheet">
	<script>
		const nav = document.querySelector('nav')
		const img = document.querySelector('img')
		nav.classList.add('active');
		img.setAttribute('src', "{{ asset('img/logo_fista_horizontal_azul_2023_v2.png') }}");
	</script>


	<?php
	
	use App\Log_ponto;
	use App\User;
	
	$users = User::orderBy('pontos', 'desc')
	    ->limit(5)
	    ->get();
	
	?>

	<section style="background-color:white;width:100%;padding-top:70px; padding-bottom: 19rem; background-color: #F5F6F8"">
		<div class="clearfix" style="margin-top:0%; background-color: #F5F6F8">
			<div style="padding-top:50px;padding-bottom:20px;">
				<div class="container">
					<div class="row">
						<div class=""
							style="margin:auto; display: flex; flex-direction: column; justify-content: center; align-items: center;">
							<img style="height:300px;" src="{{ asset('img/FISTAGO23.png') }}" alt="FISTAGO">
							<h1 style="font-size: 60px; color: #666; margin-bottom: 2rem;">FISTA GO</h1>
							<a href="{{ asset('img/regulamento_fista_go23.pdf') }}" target="_blank"><button type="button" class="btn"
									style="padding-top:0px !important;padding-bottom:0px !important;  color:#1EC4BD !important;font-size:3vh; background-color:white;font-family: 'Myriad Pro 2';border-radius:30px;">Regulamento</button></a>
							{{-- <a href="#" target="_blank"><button disabled type="button" class="btn"
									style="padding-top:0px !important;padding-bottom:0px !important;  color:#1EC4BD !important;font-size:3vh; background-color:white;font-family: 'Myriad Pro 2';border-radius:30px;">Regulamento
									em breve!</button></a> --}}

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container" style="padding-top:30px; text-align:center">

			<h1 style="text-align:center; margin-bottom: 2rem">Top 5 FISTA GO 2023</h1>
			<table class="table">
				<thead>
					<tr>
						<th scope="col"></th>
						<th scope="col">Nome</th>
						<th scope="col">Pontos</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($users as $user)
						@if ($loop->first)
							<tr style="font-size:19px;color:#1EC4BD;">
								<th>{{ $loop->iteration }}</th>
								<td scope="row">{{ $user->first_name . ' ' . $user->last_name }}</td>
								<td><span style="font-weight: bold">{{ $user->pontos . ' pontos' }}</span></td>
							</tr>
						@else
							<tr style="font-size:19px;color:black;">
								<th>{{ $loop->iteration }}</th>
								<td scope="row">{{ $user->first_name . ' ' . $user->last_name }}</td>
								<td><span style="font-weight: bold">{{ $user->pontos . ' pontos' }}</span></td>
							</tr>
						@endif
					@endforeach
				</tbody>
			</table>
		</div>
	</section>

@endsection

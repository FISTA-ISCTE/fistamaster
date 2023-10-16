@extends('layouts.nav')
@section('title', 'FISTA23 - QR Code')
@section('content')
	<link href="{{ asset('css/media.css') }}" rel="stylesheet">
	<script>
		const nav = document.querySelector('nav')
		const img = document.querySelector('img')
		nav.classList.add('active');
		img.setAttribute('src', "{{ asset('img/logo_fista_horizontal_azul_2023_v2.png') }}");
	</script>

	<?php
	use App\Role;
	
	$roles = Role::where('id', Auth::user()->role_id)->first();
	?>

	<div class="container" style="margin-top: 10rem; margin-bottom: 10rem;">
		<div style="display: flex; justify-content: center; align-items: center;">
			<div style="padding: 2rem; border: 1px solid #F4F4F4;">
				<div
					style="display: flex; align-items: center; justify-content: center; margin-bottom: 2rem; font-size: 1.5rem; background:">
					{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
				</div>
				{!! QrCode::size(250)->generate(Auth::user()->uuid) !!}
				<div style="display: flex; align-items: center; justify-content: center; margin-top: 2rem; font-size: 1.5rem;">
					{{ $roles->display_name }}
				</div>
			</div>
		</div>
	</div>
@endsection

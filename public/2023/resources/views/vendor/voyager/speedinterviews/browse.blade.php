@extends('voyager::master')

@section('post_title', __('voyager::generic.viewing') . ' ' . $dataType->getTranslatedAttribute('display_name_plural'))


@section('content')

	@php
		
		use App\SpeedInterviews;
		use App\User;
		
		$speedinterviews = SpeedInterviews::all();
		
	@endphp

	<div class="container">
		<div class="row text-center">
			<h3>Speed Interview Ronda 1</h3>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">Email</th>
				</tr>
			</thead>

			<tbody>
				@foreach ($speedinterviews as $si)
					@if ($si->turno_si == 1)
						<tr>
							<?php
							$user = User::where('id', $si->id_user)->first();
							?>
							<td>{{ $user->first_name }} {{ $user->last_name }}</td>
							<td>{{ $user->email }}</td>
						</tr>
					@endif
				@endforeach
			</tbody>
		</table>

		<div class="row text-center">
			<h3>Speed Interview Ronda 2</h3>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">Email</th>
				</tr>
			</thead>

			<tbody>
				@foreach ($speedinterviews as $si)
					@if ($si->turno_si == 2)
						<tr>
							<?php
							$user = User::where('id', $si->id_user)->first();
							?>
							<td>{{ $user->first_name }} {{ $user->last_name }}</td>
							<td>{{ $user->email }}</td>
						</tr>
					@endif
				@endforeach
			</tbody>
		</table>

	</div>

@stop

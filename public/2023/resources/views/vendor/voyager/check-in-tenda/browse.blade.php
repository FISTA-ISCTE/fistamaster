@extends('voyager::master')

@section('post_title', __('voyager::generic.viewing') . ' ' . $dataType->getTranslatedAttribute('display_name_plural'))


@section('content')

	@php
		
		use App\CheckInTenda;
		use App\User;
		
		$checkins = CheckInTenda::orderBy('updated_at', 'desc')->get();
		
	@endphp

	<div class="container">
		<div class="row text-center">
			<h3>Check Ins</h3>
			<h4>{{ 'Total: ' . $checkins->count() }}</h4>
			<h4>{{ 'Total dia 8: ' . $checkins->where('updated_at', '<', '2023-03-09 00:00:00')->count() }}</h4>
			<h4>{{ 'Total dia 9: ' . $checkins->where('updated_at', '>', '2023-03-09 00:00:00')->count() }}</h4>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Timestamp</th>
					<th scope="col">Nome</th>
					<th scope="col">Email</th>
				</tr>
			</thead>

			<tbody>
				@foreach ($checkins as $checkin)
					<tr>
						<?php
						$user = User::where('id', $checkin->id_user)->first();
						?>
						<td>{{ $checkin->updated_at }}</td>
						<td>{{ $user->first_name }} {{ $user->last_name }}</td>
						<td>{{ $user->email }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@stop

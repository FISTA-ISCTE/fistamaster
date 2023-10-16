@extends('voyager::master')

@section('post_title', __('voyager::generic.viewing') . ' ' . $dataType->getTranslatedAttribute('display_name_plural'))


@section('content')

	@php
		
		use App\Log_ponto;
		use App\User;
		
		$users = User::orderBy('pontos', 'desc')
		    ->limit(20)
		    ->get();
		
	@endphp

	<div class="container">
		<div class="row text-center">
			<h3>Top 20 FISTA GO</h3>
			<h4>{{ '# de alunos com +5500 pontos: ' . User::where('pontos', '>', 5500)->count() }}</h4>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th style="text-align: center" scope="col">Nome</th>
					<th style="text-align: center" scope="col">Pontos</th>
					<th style="text-align: center" scope="col">Num Convidados</th>
					<th style="text-align: center" scope="col">Num Workshops</th>
					<th style="text-align: center" scope="col">Tokens Inseridos</th>
					<th style="text-align: center" scope="col">Backoffices Inseridos</th>
				</tr>
			</thead>

			<tbody>
				@foreach ($users as $user)
					<tr style="text-align: center;">
						<td>{{ $user->first_name }} {{ $user->last_name }}</td>
						<td> {{ $user->pontos }}</td>
						<td>{{ $user->count_conv }}</td>
						<td>{{ App\WorkshopPresenca::where('user_id', $user->id)->count() }}</td>
						<td>{{ App\Log_ponto::where('id_user', $user->id)->count() }}</td>
						@if (App\Log_ponto::where('id_user', $user->id)->where('tipo', '=', 'backoffice_app')->count() > 1)
							<td style="color: red">
								{{ App\Log_ponto::where('id_user', $user->id)->where('tipo', '=', 'backoffice_app')->count() }}
							</td>
						@else
							<td>{{ App\Log_ponto::where('id_user', $user->id)->where('tipo', '=', 'backoffice_app')->count() }}</td>
						@endif
					</tr>
				@endforeach
			</tbody>
		</table>

		<!--@foreach (User::all() as $user)
	@if (App\Log_ponto::where('id_user', $user->id)->where('tipo', '=', 'backoffice_app')->count() > 1)
	<p>
						{{ $user->id .' - ' .$user->first_name .' ' .$user->last_name .' -' .(App\Log_ponto::where('id_user', $user->id)->where('tipo', '=', 'backoffice_app')->count() -1) *150 }}
					</p>
	@endif
	@endforeach-->
	</div>

@stop

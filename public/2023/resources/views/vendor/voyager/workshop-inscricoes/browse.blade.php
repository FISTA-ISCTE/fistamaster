@extends('voyager::master')

@section('post_title', __('voyager::generic.viewing') . ' ' . $dataType->getTranslatedAttribute('display_name_plural'))


@section('content')

	@php
		
		use App\Workshop;
		use App\User;
		use App\WorkshopPresenca;
		
		$workshops = Workshop::all()->sortBy('begin');
		
	@endphp

	@foreach ($workshops as $workshop)
		@if ($workshop->title != null)
			<div class="container">
				<div class="row text-center">
					<h3>{{ $workshop->title }} - {{ $workshop->atendees - $workshop->spotsavailable }}/{{ $workshop->atendees }}
						inscrições</h3>
					<h4>
						{{ App\WorkshopPresenca::where('workshop_id', $workshop->id)->count() }} presentes de
						{{ $workshop->atendees - $workshop->spotsavailable }} inscritos.
						@if ($workshop->atendees - $workshop->spotsavailable != 0)
							{{ round((App\WorkshopPresenca::where('workshop_id', $workshop->id)->count() / ($workshop->atendees - $workshop->spotsavailable)) * 100) . '%' }}
						@else
							0%
						@endif
					</h4>
					@if (Auth::user()->role_id == 3)
						@if ($workshop->pontos_retirados == null)
							<form id="join_form" method="POST" action="/retirarpontosworkshop" accept-charset="UTF-8">
								@csrf
								<div class="form-group">
									<input TYPE="hidden" id="workshop_id" readonly value="{{ $workshop->id }}" type="text" class="form-control"
										name="workshop_id" autocomplete="workshop_id">
								</div>
								<button>
									Remover Pontos
								</button>
							</form>
						@endif
					@endif
				</div>
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Nome</th>
							<th scope="col">Email</th>
							<th scope="col">Esteve presente?</th>
							<th scope="col">Pontos</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($workshop->usersInscritos as $user)
							<tr>
								<td>{{ $user->first_name }} {{ $user->last_name }}</td>
								<td>{{ $user->email }}</td>
								@if (App\WorkshopPresenca::where('user_id', $user->id)->where('workshop_id', $workshop->id)->first() != null)
									<td>Sim</td>
								@else
									<td>Não</td>
								@endif
								<td>{{ $user->pontos }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		@endif
	@endforeach
@stop

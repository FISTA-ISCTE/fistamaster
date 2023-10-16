@extends('voyager::master')

@section('post_title', __('voyager::generic.viewing') . ' ' . $dataType->getTranslatedAttribute('display_name_plural'))


@section('content')

	<?php
	use App\Logistica;
	use App\LogisticaSlots;
	use App\Empresa;
	$empresas = Empresa::all();
	
	?>
	<div class="container">
		<div class="row text-center">
			<h3>Dia 8</h3>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">
						Empresa
					</th>
					<th scope="col">
						# Cadeiras
					</th>
					<th scope="col">
						Slot Montagem
					</th>
					<th scope="col">
						Slot Desmontagem
					</th>

				</tr>
			</thead>
			<tbody>
				@foreach ($empresas as $empresa)
					@if ($empresa->dia1 != null || $empresa->dia2 == null)
						<tr>
							<td>{{ $empresa->nome_empresa }}</td>
							@if (Logistica::where('id_empresa', $empresa->id)->first() != null)
								<td>{{ Logistica::where('id_empresa', $empresa->id)->first()->cadeiras8 }}</td>
								@if (LogisticaSlots::where('id', Logistica::where('id_empresa', $empresa->id)->first()->montagem_id8)->first() != null)
									<td>
										{{ LogisticaSlots::where('id', Logistica::where('id_empresa', $empresa->id)->first()->montagem_id8)->first()->slot }}
									</td>
								@else
									<td>
										Não preenchido
									</td>
								@endif
								@if (LogisticaSlots::where('id', Logistica::where('id_empresa', $empresa->id)->first()->desmontagem_id8)->first() !=
										null)
									<td>
										{{ LogisticaSlots::where('id', Logistica::where('id_empresa', $empresa->id)->first()->desmontagem_id8)->first()->slot }}
									</td>
								@else
									<td>
										Não preenchido
									</td>
								@endif
							@endif
						</tr>
					@endif
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="container">
		<div class="row text-center">
			<h3>Dia 9</h3>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">
						Empresa
					</th>
					<th scope="col">
						# Cadeiras
					</th>
					<th scope="col">
						Slot Montagem
					</th>
					<th scope="col">
						Slot Desmontagem
					</th>

				</tr>
			</thead>
			<tbody>
				@foreach ($empresas as $empresa)
					@if ($empresa->dia1 == null || $empresa->dia2 != null)
						<tr>
							<td>{{ $empresa->nome_empresa }}</td>
							@if (Logistica::where('id_empresa', $empresa->id)->first() != null)
								<td>{{ Logistica::where('id_empresa', $empresa->id)->first()->cadeiras9 }}</td>

								@if (LogisticaSlots::where('id', Logistica::where('id_empresa', $empresa->id)->first()->montagem_id9)->first() != null)
									<td>
										{{ LogisticaSlots::where('id', Logistica::where('id_empresa', $empresa->id)->first()->montagem_id9)->first()->slot }}
									</td>
								@else
									<td>
										Não preenchido
									</td>
								@endif
								@if (LogisticaSlots::where('id', Logistica::where('id_empresa', $empresa->id)->first()->desmontagem_id9)->first() !=
										null)
									<td>
										{{ LogisticaSlots::where('id', Logistica::where('id_empresa', $empresa->id)->first()->desmontagem_id9)->first()->slot }}
									</td>
								@else
									<td>
										Não preenchido
									</td>
								@endif
							@endif
						</tr>
					@endif
				@endforeach
			</tbody>
		</table>
	</div>
@stop

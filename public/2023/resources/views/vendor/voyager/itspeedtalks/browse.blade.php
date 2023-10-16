@extends('voyager::master')

@section('post_title', __('voyager::generic.viewing') . ' ' . $dataType->getTranslatedAttribute('display_name_plural'))


@section('content')

	<?php
	use App\ItSpeedTalk;
	use App\ItstSlots;
	use App\Empresa;
	$itsts = ItSpeedTalk::all();
	?>
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">
						Empresa
					</th>
					<th scope="col">
						Id Orador
					</th>
					<th scope="col">
						Imagem
					</th>
					<th scope="col">
						Titulo
					</th>
					<th scope="col">
						Descrição
					</th>
					<th scope="col">
						Dia
					</th>
					<th scope="col">
						Slot
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($itsts as $itst)
					<tr>
						<td>
							{{ Empresa::where('id', $itst->id_empresa)->first()->nome_empresa }}
						</td>
						<td>
							{{ $itst->id_orador }}
						</td>
						<td>
							@if ($itst->imagem != null)
								<img style="width:5rem" src="https://fista.iscte-iul.pt/storage{!! $itst->imagem !!}" alt="">
							@else
								N/A
							@endif
						<td>
							{{ $itst->titulo }}
						</td>
						<td>
							{{ $itst->descricao }}
						</td>
						<td>
							{{ ItstSlots::where('id', $itst->slot_id)->first()->dia }}
						</td>
						<td>
							{{ ItstSlots::where('id', $itst->slot_id)->first()->slot }}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop

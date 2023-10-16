@extends('voyager::master')

@section('post_title', __('voyager::generic.viewing') . ' ' . $dataType->getTranslatedAttribute('display_name_plural'))


@section('content')

	<?php
	use App\Orador;
	use App\Empresa;
	$oradores = Orador::all();
	?>
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">
						Empresa
					</th>
					<th scope="col">
						Cargo
					</th>
					<th scope="col">
						Imagem
					</th>
					<th scope="col">
						Nome
					</th>
					<th scope="col">
						Bio
					</th>
					<th scope="col">
						Url
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($oradores as $orador)
					<tr>
						<td>
							{{ Empresa::where('id', $orador->idEmpresa)->first()->nome_empresa }}
						</td>
						<td>
							{{ $orador->cargo }}
						</td>
						<td>
							@if ($orador->imagem != null)
								<img style="width:5rem" src="https://fista.iscte-iul.pt/storage{!! $orador->imagem !!}" alt="">
							@else
								N/A
							@endif
						<td>
							{{ $orador->nome }}
						</td>
						<td>
							{{ $orador->bio }}
						</td>
						<td>
							{{ $orador->url }}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop

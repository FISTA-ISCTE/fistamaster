@extends('voyager::master')

@section('post_title', __('voyager::generic.viewing') . ' ' . $dataType->getTranslatedAttribute('display_name_plural'))


@section('content')

	<?php
	use App\RespostasConcursoMat;
	use App\Contest;
	$grupos = Contest::where('tipo_concurso', 'MAT')->get();
	?>

	<div class="container">
		<h2 style="text-align: center">Concurso Matemática</h2>

		@foreach ($grupos as $grupo)
			<h4 style="text-align: center">{{ 'Grupo ' . $grupo->nome_grupo }}</h4>
			<?php
			$respostas = RespostasConcursoMat::where('id_grupo', $grupo->id)->get();
			?>
			@foreach ($respostas as $resposta)
				@if ($resposta->certo_errado == null)
					<div class="row"
						style="display:flex; align-items: center; justify-content:center;border: 1px black solid; gap: 5rem;">
						<div style="text-align:center">{{ 'Pergunta ' . $resposta->num_pergunta . ' - ' . $resposta->resposta }}</div>
						<div>
							<form id="join_form" method="POST" action="/avaliarMat" accept-charset="UTF-8">
								@csrf
								<div class="form-group">
									<input TYPE="hidden" id="resposta_id" readonly value="{{ $resposta->id }}" type="text" class="form-control"
										name="resposta_id" autocomplete="resposta_id">
								</div>
								<div class="form-group">
									<input TYPE="hidden" id="avaliacao" readonly value="certo" type="text" class="form-control"
										name="avaliacao" autocomplete="avaliacao">
								</div>
								<button>
									Certo
								</button>
							</form>
						</div>
						<div>
							<form id="join_form" method="POST" action="/avaliarMat" accept-charset="UTF-8">
								@csrf
								<div class="form-group">
									<input TYPE="hidden" id="resposta_id" readonly value="{{ $resposta->id }}" type="text" class="form-control"
										name="resposta_id" autocomplete="resposta_id">
								</div>
								<div class="form-group">
									<input TYPE="hidden" id="avaliacao" readonly value="errado" type="text" class="form-control"
										name="avaliacao" autocomplete="avaliacao">
								</div>
								<button>
									Errado
								</button>
							</form>
						</div>
					</div>
				@endif
			@endforeach
		@endforeach
	</div>

@stop

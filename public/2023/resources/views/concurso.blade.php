@extends('layouts.nav')
@section('title', 'Concurso de Matematica')
@section('content')

	<link href="{{ asset('css/becomePartner.css') }}" rel="stylesheet">
	<script>
		const nav = document.querySelector('nav')
		const img = document.querySelector('img')
		nav.classList.add('active');
		img.setAttribute('src', "{{ asset('img/logo_fista_horizontal_azul_2023_v2.png') }}");
	</script>


	<div class="container">
		<h4 style="padding-top:100px; text-align: center;">Grupo: {{ $grupo->nome_grupo }}</h4>

		<?php
		$respostas = App\RespostasConcursoMat::where('id_grupo', $grupo->id)->get();
		
		$resposta1 = $respostas
		    ->where('num_pergunta', 1)
		    ->where('certo_errado', 1)
		    ->first();
		$resposta2 = $respostas
		    ->where('num_pergunta', 2)
		    ->where('certo_errado', 1)
		    ->first();
		$resposta3 = $respostas
		    ->where('num_pergunta', 3)
		    ->where('certo_errado', 1)
		    ->first();
		$resposta4 = $respostas
		    ->where('num_pergunta', 4)
		    ->where('certo_errado', 1)
		    ->first();
		?>

		@if ($resposta1)
			<div style="padding: 3rem; display: flex; justify-content: center; align-items: center; gap: 0.5rem;">
				<h4 style="text-align:center;">Pergunta 1</h4>
				<h4 style="color:#1EC4BD">guardada!</h4>
			</div>
		@elseif(!$resposta1)
			<div style="padding: 3rem;">
				<h4 style="text-align:center;">Pergunta 1</h4>
				<div margin-top: 1rem;>
					<form action="{{ route('submit_mat') }}" method="POST"
						style="display: flex; justify-content: center; align-items: center;">
						@csrf
						<div class="form-group">
							<input TYPE="hidden" id="idGrupo" readonly value="{{ $grupo->id }}" type="text" class="form-control"
								name="idGrupo" autocomplete="idGrupo">
						</div>
						<div class="form-group">
							<input TYPE="hidden" id="idPergunta" readonly value="1" type="text" class="form-control"
								name="idPergunta" autocomplete="idPergunta">
						</div>
						<div class="form-group">
							<label style="padding: 0.5rem;" for="resposta">Insere a resposta aqui: </label>
							<input required style="padding: 0.5rem; width: 20rem;" type="text" name="resposta" id="resposta" />
						</div>
						<div class="form-group">
							<button type="submit" class="btn-fista"
								style="border-color:#1EC4BD;border-width:2px;display: block;margin-left: 1rem; width: 6rem;">Submeter</button>
						</div>
					</form>
				</div>
			</div>
		@endif
		@if ($resposta2)
			<div style="padding: 3rem; display: flex; justify-content: center; align-items: center; gap: 0.5rem;">
				<h4 style="text-align:center;">Pergunta 2</h4>
				<h4 style="color:#1EC4BD">guardada!</h4>
			</div>
		@elseif (!$resposta2)
			<div style="padding: 3rem;">
				<h4 style="text-align:center;">Pergunta 2</h4>
				<div margin-top: 1rem;>
					<form action="{{ route('submit_mat') }}" method="POST"
						style="display: flex; justify-content: center; align-items: center;">
						@csrf
						<div class="form-group">
							<input TYPE="hidden" id="idGrupo" readonly value="{{ $grupo->id }}" type="text" class="form-control"
								name="idGrupo" autocomplete="idGrupo">
						</div>
						<div class="form-group">
							<input TYPE="hidden" id="idPergunta" readonly value="2" type="text" class="form-control"
								name="idPergunta" autocomplete="idPergunta">
						</div>
						<div class="form-group">
							<label style="padding: 0.5rem;" for="resposta">Insere a resposta aqui: </label>
							<input required style="padding: 0.5rem; width: 20rem;" type="text" name="resposta" id="resposta" />
						</div>
						<div class="form-group">
							<button type="submit" class="btn-fista"
								style="border-color:#1EC4BD;border-width:2px;display: block;margin-left: 1rem; width: 6rem;">Submeter</button>
						</div>
					</form>
				</div>
			</div>
		@endif
		@if ($resposta3)
			<div style="padding: 3rem; display: flex; justify-content: center; align-items: center; gap: 0.5rem;">
				<h4 style="text-align:center;">Pergunta 3</h4>
				<h4 style="color:#1EC4BD">guardada!</h4>
			</div>
		@elseif(!$resposta3)
			<div style="padding: 3rem;">
				<h4 style="text-align:center;">Pergunta 3</h4>
				<div margin-top: 1rem;>
					<form action="{{ route('submit_mat') }}" method="POST"
						style="display: flex; justify-content: center; align-items: center;">
						@csrf
						<div class="form-group">
							<input TYPE="hidden" id="idGrupo" readonly value="{{ $grupo->id }}" type="text" class="form-control"
								name="idGrupo" autocomplete="idGrupo">
						</div>
						<div class="form-group">
							<input TYPE="hidden" id="idPergunta" readonly value="3" type="text" class="form-control"
								name="idPergunta" autocomplete="idPergunta">
						</div>
						<div class="form-group">
							<label style="padding: 0.5rem;" for="resposta">Insere a resposta aqui: </label>
							<input required style="padding: 0.5rem; width: 20rem;" type="text" name="resposta" id="resposta" />
						</div>
						<div class="form-group">
							<button type="submit" class="btn-fista"
								style="border-color:#1EC4BD;border-width:2px;display: block;margin-left: 1rem; width: 6rem;">Submeter</button>
						</div>
					</form>
				</div>
			</div>
		@endif
		@if ($resposta4)
			<div style="padding: 3rem; display: flex; justify-content: center; align-items: center; gap: 0.5rem;">
				<h4 style="text-align:center;">Pergunta 4</h4>
				<h4 style="color:#1EC4BD">guardada!</h4>
			</div>
		@elseif(!$resposta4)
			<div style="padding: 3rem;">
				<h4 style="text-align:center;">Pergunta 4</h4>
				<div margin-top: 1rem;>
					<form action="{{ route('submit_mat') }}" method="POST"
						style="display: flex; justify-content: center; align-items: center;">
						@csrf
						<div class="form-group">
							<input TYPE="hidden" id="idGrupo" readonly value="{{ $grupo->id }}" type="text"
								class="form-control" name="idGrupo" autocomplete="idGrupo">
						</div>
						<div class="form-group">
							<input TYPE="hidden" id="idPergunta" readonly value="4" type="text" class="form-control"
								name="idPergunta" autocomplete="idPergunta">
						</div>
						<div class="form-group">
							<label style="padding: 0.5rem;" for="resposta">Insere a resposta aqui: </label>
							<input required style="padding: 0.5rem; width: 20rem;" type="text" name="resposta" id="resposta" />
						</div>
						<div class="form-group">
							<button type="submit" class="btn-fista"
								style="border-color:#1EC4BD;border-width:2px;display: block;margin-left: 1rem; width: 6rem;">Submeter</button>
						</div>
					</form>
				</div>
			</div>
		@endif
	</div>
@endsection

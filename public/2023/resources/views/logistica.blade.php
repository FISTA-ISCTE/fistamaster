@extends('layouts.nav')
@section('title', 'FISTA23 - Logística')
@section('content')
	<script>
		const nav = document.querySelector('nav')
		const img = document.querySelector('img')
		nav.classList.add('active');
		img.setAttribute('src', "{{ asset('img/logo_fista_horizontal_azul_2023_v2.png') }}");
	</script>

	<?php
	use App\Empresa;
	use App\LogisticaSlots;
	use App\Logistica;
	$empresa = Empresa::where('id', Auth::user()->empresa)->first();
	$slots_montagem = LogisticaSlots::where('tipo', 'montagem')->get();
	$slots_desmontagem = LogisticaSlots::where('tipo', 'desmontagem')->get();
	$logistica = Logistica::where('id_empresa', Auth::user()->empresa)->first();
	?>

	<div class="main footer_left">
		<div class="container single-header pb-md-5 pb-4" style="padding-bottom:0 !important">
			<div style="margin-top:5%;margin-bottom:10%;">
				<div style=" text-align: center !important">
					<h1 style="color: #666666;font-weight: bold;text-align: center !important">Logística</h1>
					<p style="color: #777777; font-size: 1.25rem">Trata da logística da tua empresa no FISTA23! Ajuda-nos a dar a melhor
						experiência aos
						alunos, agendando horas de
						montagens e desmontagens bem como o resto da logística!</p>
				</div>
			</div>
		</div>

		<div class="clearfix"
			style="display: flex; gap: 3rem; flex-wrap: wrap; justify-content: center; align-items: center; margin:2rem;">
			@if ($empresa->dia1 != null)
				<div class="rounded" style="border: 1px solid black; padding: 2.5rem;">
					<form action="{{ 'logistica8' }}" method="post" enctype="multipart/form-data"
						style="display: flex; flex-direction: column; gap: 1rem;">
						@csrf
						<h3 style="text-align: center; color: #1EC4BD;">Dia 8</h3>
						<div>
							<label for="cadeiras" style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Número de cadeiras</label>
							@if ($logistica->cadeiras8 == null)
								<select name="cadeiras"
									style="padding-right:2px;padding-left:10px; padding: 0.5rem;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
									id="cadeiras">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							@else
								<select disabled
									style="padding-right:2px;padding-left:10px; padding: 0.5rem;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
									name="cadeiras" id="cadeiras">
									<option selected value={{ $logistica->cadeiras8 }}>
										{{ $logistica->cadeiras8 }}</option>
								</select>
							@endif
						</div>
						<div>
							<label for="montagens8" style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Slot Montagens</label>
							@if ($logistica->montagem_id8 == null)
								<select
									style="padding-right:2px;padding-left:10px; padding: 0.5rem;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
									name="montagens8" id="montagens8">
									@foreach ($slots_montagem as $slot)
										@if ($slot->dia == 8)
											<?php
											$mont8 = Logistica::where('montagem_id8', $slot->id)->count();
											?>
											@if ($mont8 >= 7)
												<option disabled value={{ $slot->id }}>{{ $slot->slot }}</option>
											@else
												<option value={{ $slot->id }}>{{ $slot->slot }}</option>
											@endif
										@endif
									@endforeach
								</select>
							@else
								<select disabled
									style="padding-right:2px;padding-left:10px; padding: 0.5rem;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
									name="montagens8" id="montagens8">
									<option selected value={{ $logistica->montagem_id8 }}>
										{{ LogisticaSlots::where('id', $logistica->montagem_id8)->first()->slot }}</option>
								</select>
							@endif
						</div>
						@if ($empresa->dia1 != null && $empresa->dia2 != null)
						@else
							<div>
								<label for="desmontagens8" style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Slot
									Desmontagens</label>
								@if ($logistica->desmontagem_id8 == null)
									<select
										style="padding-right:2px;padding-left:10px; padding: 0.5rem;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
										name="desmontagens8" id="desmontagens8">
										@foreach ($slots_desmontagem as $slot)
											@if ($slot->dia == 8)
												<option value={{ $slot->id }}>{{ $slot->slot }}</option>
											@endif
										@endforeach
									</select>
								@else
									<select disabled
										style="padding-right:2px;padding-left:10px; padding: 0.5rem;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
										name="desmontagens8" id="desmontagens8">
										<option selected value={{ $logistica->desmontagem_id8 }}>
											{{ LogisticaSlots::where('id', $logistica->desmontagem_id8)->first()->slot }}</option>
									</select>
								@endif
							</div>
						@endif
						<div>
							<p style="font-size:10px;">*Assim que clicar no botão guardar será guardada toda a informação na
								nossa base de dados. Não serão permitidas alterações. Obrigado.</p>
							<button type="submit" class="btn-fista btn-file" style="margin-top:1%;height:40px;width:170px;">Guardar</button>
						</div>
					</form>
				</div>
			@endif
			@if ($empresa->dia2 != null)
				<div class="rounded" style="border: 1px solid black; padding: 2.5rem;">
					<form action="{{ 'logistica9' }}" method="post" enctype="multipart/form-data"
						style="display: flex; flex-direction: column; gap: 1rem;">
						@csrf
						<h3 style="text-align: center; color: #1EC4BD;">Dia 9</h3>
						<div>
							<label for="cadeiras" style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Número de cadeiras</label>
							@if ($logistica->cadeiras9 == null)
								<select name="cadeiras"
									style="padding-right:2px;padding-left:10px; padding: 0.5rem;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
									id="cadeiras">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							@else
								<select disabled
									style="padding-right:2px;padding-left:10px; padding: 0.5rem;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
									name="cadeiras" id="cadeiras">
									<option selected value={{ $logistica->cadeiras9 }}>
										{{ $logistica->cadeiras9 }}</option>
								</select>
							@endif
						</div>
						<div>
							<label for="montagens9" style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Slot Montagens</label>
							@if ($logistica->montagem_id9 == null)
								<select
									style="padding-right:2px;padding-left:10px; padding: 0.5rem;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
									name="montagens9" id="montagens9">
									@foreach ($slots_montagem as $slot)
										@if ($slot->dia == 9)
											<?php
											$mont9 = Logistica::where('montagem_id9', $slot->id)->count();
											?>
											@if ($mont9 >= 7)
												<option disabled value={{ $slot->id }}>{{ $slot->slot }}</option>
											@else
												<option value={{ $slot->id }}>{{ $slot->slot }}</option>
											@endif
										@endif
									@endforeach
								</select>
							@else
								<select disabled
									style="padding-right:2px;padding-left:10px; padding: 0.5rem;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
									name="montagens9" id="montagens9">
									<option selected value={{ $logistica->montagem_id9 }}>
										{{ LogisticaSlots::where('id', $logistica->montagem_id9)->first()->slot }}</option>
								</select>
							@endif
						</div>

						<div>
							<label for="desmontagens9" style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Slot
								Desmontagens</label>
							@if ($logistica->desmontagem_id9 == null)
								<select
									style="padding-right:2px;padding-left:10px; padding: 0.5rem;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
									name="desmontagens9" id="desmontagens9">
									@foreach ($slots_desmontagem as $slot)
										@if ($slot->dia == 9)
											<option value={{ $slot->id }}>{{ $slot->slot }}</option>
										@endif
									@endforeach
								</select>
							@else
								<select disabled
									style="padding-right:2px;padding-left:10px; padding: 0.5rem;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;"
									name="desmontagens9" id="desmontagens9">
									<option selected value={{ $logistica->desmontagem_id9 }}>
										{{ LogisticaSlots::where('id', $logistica->desmontagem_id9)->first()->slot }}</option>
								</select>
							@endif
						</div>
						<div>
							<p style="font-size:10px;">*Assim que clicar no botão guardar será guardada toda a informação na
								nossa base de dados. Não serão permitidas alterações. Obrigado.</p>
							<button type="submit" class="btn-fista btn-file" style="margin-top:1%;height:40px;width:170px;">Guardar</button>
						</div>
					</form>
				</div>
			@endif
		</div>

		<div style=" text-align: center !important">
			<h2 style="color: #666666;font-weight: bold;text-align: center !important">Matriculas</h2>
			<p style="color: #777777; font-size: 1.25rem">Matrículas estacionamento - coloca abaixo as matrículas dos carros que vão necessitar de estacionamento durante o evento.
			<br> Matrículas montagens e desmontagens - coloca abaixo a matrícula e o nome do responsável pela montagem e desmontagem do stand
			</p>
		</div>
		
		<div class="modal-body " style="display: flex; gap: 3rem; flex-wrap: wrap; justify-content: center; align-items: center; margin:2rem;">
			<div style="border: 1px solid black; padding: 2.5rem;">
				<form action="/matricula" method="post" style="display: flex; flex-direction: column; gap: 1rem;">
				@csrf
					<div class="form-group">
						<label for="tipo" style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Montagens e Desmontagens</label>
						<select name="tipo" 
									style="padding-right:2px;padding-left:10px; padding: 0.5rem;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45; visibility: hidden;"
									id="tipo">
									<option value="2">Montagens e Desmontagens</option>
						</select>
					</div>
				
					<div class="form-group">
						<label for="matricula" style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Matricula:</label>
						<input type="text" id="matricula" name="matricula">
					</div>

					<div class="form-group">
						<label for="nome" style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Nome:</label>
						<input type="text" id="nome" name="nome">
						
					</div>
					<button type="submit" class="btn-fista btn-file" style="margin-top:1%;height:40px;width:170px;">Guardar</button>
					<h6>Só pode submeter uma matrícula !</h6>
				</form>
		</div>	
		
		<div style="border: 1px solid black; padding: 2.5rem;">
				<form action="/matricula" method="post" style="display: flex; flex-direction: column; gap: 1rem;">
				@csrf
					<div class="form-group">
						<label for="tipo" style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Estacionamento</label>
						<select name="tipo"
									style="padding-right:2px;padding-left:10px; padding: 0.5rem;border-radius:4px;display: block;width: 100%;outline:none;border:2px solid #19330a45;visibility: hidden;"
									id="tipo">
									<option value="1">Estacionamento</option>
						</select>
					</div>
				
					<div class="form-group">
						<label for="matricula" style="color:grey;font-family:'Myriad Pro 1';font-size:140%;">Matricula:</label>
						<input type="text" id="matricula" name="matricula">
					</div>

					<button type="submit" class="btn-fista btn-file" style="margin-top:1%;height:40px;width:170px;">Guardar</button>
					<h6>Separe as várias matrículas por virgulas</h6>
				</form>
		</div>	
	</div>
	<div style="text-align: center; margin-top: -2rem;">
		<h6> Assim que clicar no botão guardar as suas informações ficaram guardadas </h6>
	</div>
	
	</div>
@endsection

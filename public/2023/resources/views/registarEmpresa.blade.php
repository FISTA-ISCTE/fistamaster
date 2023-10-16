@extends('layouts.nav')
@section('title', 'Registar Empresa')
@section('content')
	<script>
		const nav = document.querySelector('nav')
		const img = document.querySelector('img')
		nav.classList.add('active');
		img.setAttribute('src', 'img/logo_fista_horizontal_azul_2023_v2.png');
	</script>


	<script type="text/javascript">
		function checkedOn(element) {

			// Select all checkboxes by class
			var checkboxesList = document.getElementsByClassName("checkoption");
			for (var i = 0; i < checkboxesList.length; i++) {
				checkboxesList.item(i).checked = false; // Uncheck all checkboxes
			}

			element.checked = true; // Checked clicked checkbox
		}
	</script>

	<div class="main footer_right">
		<div class="container">
			<h1 style="font-size:40px;color:#666666;margin-bottom:30px;">Registo da empresa no evento</h1>

			<div class="row justify-content-center">
				<div class="col-md-8">

					<form id="join_form" method="POST" action="{{ route('registarEmpresasite') }}" accept-charset="UTF-8"
						enctype="multipart/form-data">
						@csrf

						<div class="form-group">
							@if (strcmp($_GET['type'], 'premium') == 0)
								<div style="background-color: #4FAD32; text-align: center; color: white; border-radius: 25px;font-size: 1.4rem">
									Premium</div>
							@elseif(strcmp($_GET['type'], 'gold') == 0)
								<div style="background-color: #FFCC66; text-align: center; color: white; border-radius: 25px;font-size: 1.4rem">
									Gold</div>
							@elseif(strcmp($_GET['type'], 'silver') == 0)
								<div style="background-color: #c0c0c0; text-align: center; color: white; border-radius: 25px;font-size: 1.4rem">
									Silver</div>
							@endif
							<select class="custom-select" type="text" name="company_plan" style="display: none;">
								<option value="none" disabled selected>Escolha</option>
								@if (strcmp($_GET['type'], 'premium') == 0)
									<option value="premium" selected>Premium</option>
									<option value="gold">Gold</option>
									<option value="silver">Silver</option>
								@elseif(strcmp($_GET['type'], 'gold') == 0)
									<option value="premium">Premium</option>
									<option value="gold" selected>Gold</option>
									<option value="silver">Silver</option>
								@elseif(strcmp($_GET['type'], 'silver') == 0)
									<option value="premium">Premium</option>
									<option value="gold">Gold</option>
									<option value="silver" selected>Silver</option>
								@else
									<option value="premium">Premium</option>
									<option value="gold">Gold</option>
									<option value="silver">Silver</option>
								@endif
							</select>
						</div>
						<div style="text-align:center; margin:1rem; font-size: large;">
							@error('day')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>

						<div class="form-group">
							<input id="company_name" type="text" placeholder="Nome da empresa" class="form-control" name="company_name"
								value="{{ old('first_name') }}" required autocomplete="company_name" autofocus>
						</div>

						<div class="form-group">
							<textarea id="company_desc" type="text" placeholder="Descrição (máx 250 caracteres)" class="form-control"
							 name="company_desc" rows="3" maxlength="250" required="" style="width: 100%"></textarea>
						</div>



						<h4 style="color:#666666; margin-top: 1rem;">Upload de Logotipo (PNG, JPG ou JPEG)</h4>
						<input type="file" onchange="ValidateSingleInput(this);" required="" class="form-control-file" name="avatar"
							id="avatar">

						<h4 style="color:#666666;margin-top:20px">Pessoa de contacto</h4>

						<div class="form-group">
							<input id="contact_name" type="text" placeholder="Nome" class="form-control" name="contact_name"
								required="">
						</div>

						<div class="form-group">
							<input id="contact_number" type="text" placeholder="Contacto telefónico direto" class="form-control"
								name="contact_number" required="">
						</div>

						<div class="form-group">
							<input id="contact_email" type="email" placeholder="Endereço de email" class="form-control" name="contact_email"
								required="">
						</div>

						<div class="row">
							<div class="col-md-6 col-s-12">
								<h4 style="color:#666666">Extras:</h4>
								<div style="padding-left:2px;" id="form_extras">
									<label class="container" style="display: flex;">
										<label id="almocotext" style="width: 100%;">Almoços Extra</label>
										<div class="almocoselector" style="display: flex; width: 40%;">
											<select class="custom-select" type="text" name="almoco_number">
												<option value="0" selected>0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
											</select>
										</div>
									</label>
									<label class="container">
										<label id="cvtext"><span style="display: inline; color: black">Currículos dos estudantes</span></label>
										<input type="checkbox" value=1 name="cvs">
										<span class="checkmark"></span>
									</label>
									<label class="container">
										<label id="workshoptext"><span style="display: inline; color: black">Speed Interview</span> </label>
										<input type="checkbox" value=1 name="workshop" id="workshopCheckbox">
										<span class="checkmark"></span>
										<div class="workshopselector" style="display:none; width: 100%;">
											<select class="custom-select" type="text" name="workshop_option">
												<option value="null" selected disabled>Selecionar Modelo</option>
												<option value="ws_online" disabled>ESGOTADO Workshop Online</option>
												<option value="ws_presencial" disabled>ESGOTADO Workshop Presencial</option>
												<option value="si">Speed Interviews</option>
											</select>
										</div>
									</label>
									<label class="itst container">
										<label id="itspeedtalkstext"><span style="display: inline; color: black">IT Speed Talks</span> </label>
										<input type="checkbox" value=1 name="itspeedtalks">
										<span class="checkmark"></span>
									</label>
									<label class="container">
										<label id="backofficetext"><span style="display: inline; color: black">Back Office</span> </label>
										<input type="checkbox" value=1 name="backoffice">
										<span class="checkmark"></span>
									</label>
									<label class="cocktaildiv container">
										<label id="cocktailtext"><span style="display: inline; color: black">Cocktail</span> </label>
										<input type="checkbox" value=1 name="cocktail">
										<span class="checkmark"></span>
									</label>
								</div>
							</div>
							<div class="col-md-6 col-s-12">
								<h4 style="color:#666666">Dias:</h4>
								<div style="padding-left:10px;" id="attending">
									<label class="container">
										<label id="day1text"><span style="display: inline; color: black">8 de março</span> </label>
										<input type="checkbox" class="checkoption" value="8" name="day1" onclick="checkedOn(this);">
										<span id="checkday1" class="checkmark"></span>
									</label>
									<label class="container">
										<label id="day2text"><span style="display: inline; color: black">9 de março</span> </label>
										<input type="checkbox" class="checkoption" value="9" name="day2" onclick="checkedOn(this);">
										<span id="checkday2" class="checkmark"></span>
									</label>
								</div>
							</div>

							<div style="clear: both"></div>
							<div class="col">
								<p id="price-simulation">
									<small>Simulação:</small>
									0€
									<small>+ IVA</small>
								</p>
							</div>

							<input type="hidden" id="idUnico" name="price_simulation">
						</div>

						<div class="center">
							<p style="font-size: 11px; line-height: 15px;">Ao registar, aceita as nossas condições. Veja como recolhemos,
								usamos e partilhamos a sua informação na nossa <a href="https://fista.iscte-iul.pt/politica-privacidade"
									style="color:black !important;font-size: 11px; line-height: 15px;">Política de Privacidade</a>.</p>
							<button type="submit" class="btn-fista center" style="margin-left:23%;">
								Seguinte
							</button>
						</div>

					</form>

				</div>
			</div>

		</div>
	</div>

	<?php
	use App\Empresa;
	
	$day1silver = Empresa::where('plano', 'silver')
	    ->where('dia1', '8')
	    ->count();
	$day2silver = Empresa::where('plano', 'silver')
	    ->where('dia2', '9')
	    ->count();
	$day1gold = Empresa::where('plano', 'gold')
	    ->where('dia1', '8')
	    ->count();
	$day2gold = Empresa::where('plano', 'gold')
	    ->where('dia2', '9')
	    ->count();
	$day1premium = Empresa::where('plano', 'premium')
	    ->where('dia1', '8')
	    ->count();
	$day2premium = Empresa::where('plano', 'premium')
	    ->where('dia2', '9')
	    ->count();
	?>

	<script>
		$(document)

		$('input[name="workshop"]').change(function() {
			if ($(this).is(':checked')) {
				$('.workshopselector').css("display", "block");
				console.log('workshop checked')
			} else {
				$('.workshopselector').css("display", "none");
				console.log('workshop not checked')
			}
		});

		var modaldade = 'none';
		if ($('#join_form select[name="company_plan"]').val() != 'none')
			calcSim(true);
		$('#join_form select[name="company_plan"], #join_form #form_extras input[type="checkbox"]').change(function() {
			calcSim(true);
		});
		$('#join_form select[name="almoco_number"]').change(function() {
			calcSim(true);
		});
		$('#join_form #attending input[type="checkbox"]').change(function() {
			calcSim(false);
		});


		function calcSim(clear) {
			selected = $('#join_form select[name="company_plan"]').val();
			$extras = $('#form_extras');
			price = 0;
			if (selected != 'none')
				$('#join_form select[name="company_plan"] option[value="none"]').remove();

			if (modaldade != selected) {
				if (clear) {
					$extras.find('input[name="cvs"], input[name="lunch"]').prop({
						checked: false,
						disabled: false

					});
					$extras.find('input[name="workshop"]').prop({
						checked: false,
						disabled: false
					});
					$extras.find('input[name="itspeedtalks"]').prop({
						checked: false,
						disabled: false
					});
					$extras.find('input[name="backoffice"]').prop({
						checked: false,
						disabled: false
					});
				}
				modaldade = selected;
			}


			//Desativar silver para dia 8 se tiver excedido o limite (5)
			var day1silver = {{ $day1silver }}
			if (selected == 'silver') {
				if (day1silver >= 6) {
					$('#join_form #attending input[name="day1"]').attr({
						disabled: true,
						checked: false
					});
					$('#checkday1').css('display', 'none');
					document.getElementById('day1text').innerHTML =
						'<strike>8 de março</strike> <b><font color="red">Esgotado!</font></b>';
				} else {
					$('#join_form #attending input[name="day1"]').attr({
						disabled: false
					});
					document.getElementById('day1text').innerHTML = '8 de março';
				}

			}
			//Desativar silver para dia 9 se tiver excedido o limite (6)
			var day2silver = {{ $day2silver }}
			if (selected == 'silver') {
				if (day2silver >= 6) {
					$('#join_form #attending input[name="day2"]').attr({
						disabled: true,
						checked: false
					});
					$('#checkday2').css('display', 'none');
					document.getElementById('day2text').innerHTML =
						'<strike>9 de março</strike> <b><font color="red">Esgotado!</font></b>';
				} else {
					$('#join_form #attending input[name="day2"]').attr({
						disabled: false
					});
					document.getElementById('day2text').innerHTML = '9 de março';
				}
			}

			//Desativar gold para dia 8 se tiver excedido o limite (34)
			var day1gold = {{ $day1gold }}
			if (selected == 'gold') {
				if (day1gold >= 34) {
					$('#join_form #attending input[name="day1"]').attr({
						disabled: true,
						checked: false
					});
					$('#checkday1').css('display', 'none');
					document.getElementById('day1text').innerHTML =
						'<strike>8 de março</strike> <b><font color="red">Esgotado!</font></b>';
				} else {
					$('#join_form #attending input[name="day1"]').attr({
						disabled: false
					});
					document.getElementById('day1text').innerHTML = '8 de março';
				}
			}

			//Desativar gold para dia 9 se tiver excedido o limite (34)
			var day2gold = {{ $day2gold }}
			if (selected == 'gold') {
				if (day2gold >= 34) {
					$('#join_form #attending input[name="day2"]').attr({
						disabled: true,
						checked: false
					});
					$('#checkday2').css('display', 'none');
					document.getElementById('day2text').innerHTML =
						'<strike>9 de março</strike> <b><font color="red">Esgotado!</font></b>';
				} else {
					$('#join_form #attending input[name="day2"]').attr({
						disabled: false
					});
					document.getElementById('day2text').innerHTML = '9 de março';
				}
			}

			//Desativar premium para dia 8 se tiver excedido o limite (10)
			var day1premium = {{ $day1premium }}

			if (selected == 'premium') {
				if (day1premium >= 10) {
					$('#join_form #attending input[name="day1"]').attr({
						disabled: true,
						checked: false
					});
					$('#checkday1').css('display', 'none');
					document.getElementById('day1text').innerHTML =
						'<strike>8 de março</strike> <b><font color="red">Esgotado!</font></b>';
				} else {
					$('#join_form #attending input[name="day1"]').attr({
						disabled: false
					});
					document.getElementById('day1text').innerHTML = '8 de março';
				}
			}

			//Desativar premium para dia 9 se tiver excedido o limite (9)
			var day2premium = {{ $day2premium }}
			if (selected == 'premium') {
				if (day2premium >= 9) {
					$('#join_form #attending input[name="day2"]').attr({
						disabled: true,
						checked: false
					});
					$('#checkday2').css('display', 'none');
					document.getElementById('day2text').innerHTML =
						'<strike>9 de março</strike> <b><font color="red">Esgotado!</font></b>';
				} else {
					$('#join_form #attending input[name="day2"]').attr({
						disabled: false
					});
					document.getElementById('day2text').innerHTML = '9 de março';
				}
			}

			//Desativar silver para dia 14
			/*if (selected == 'silver') {
			    $('#join_form #attending input[name="day14"]').attr({disabled: true, checked: false});
			    document.getElementById('day14text').innerHTML = 'February 14 <b><font color="red">Sold Out!</font></b> <h6>*If you want to come both days, send an email to <a href="mailto:fista@iscte-iul.pt">fista@iscte-iul.pt</a>.</h6>';
			} else {
			    $('#join_form #attending input[name="day14"]').attr({disabled: false});
			    document.getElementById('day14text').innerHTML = 'February 14';
			}*/

			//Desativar premium para todos
			//$('#join_form #attending input[name="day27"]').attr({disabled: true, checked: false});
			//$('#join_form #attending input[name="day28"]').attr({checked: true});

			//Desativar speed talk para silver
			/*if (selected == 'silver' || selected == 'bronze' || selected == 'gold') {
			    $('#join_form #attending input[name="itst"]').attr({
			        disabled: true,
			        checked: false
			    });
			    document.getElementById('itsttext').innerHTML = 'IT Speed Talks <b><font color="red">Sold Out!</font></b>';
			} else {
			    $('#join_form #attending input[name="itst"]').attr({
			        disabled: false
			    });
			    document.getElementById('itsttext').innerHTML = 'IT Speed Talks';
			}*/

			checkedcount = $('#join_form #attending input[type="checkbox"]:checked').length;
			/*if(checkedcount==0){
			    $('#join_form #attending input[name="day27"]')[0].checked = true;
			    checkedcount=1;
			}*/

			switch (selected) {
				case 'premium':
					price = 1000;
					$extras.find(
							'input[name="cvs"], input[name="workshop"],input[name="backoffice"],input[name="itspeedtalks"]'
						)
						.prop({
							checked: true,
							disabled: true
						});
					$('.cocktaildiv').css('display', 'block');
					$('.itst').css('display', 'block');
					$('.workshopselector').css("display", "block");
					if (checkedcount == 2) {
						price *= 2;
						console.log(price);

					}
					//Compensar preço dos extras
					price -= 750;
					break;
				case 'gold':
					price = 675;
					$extras.find('input[name="cvs"]').prop({
						checked: true,
						disabled: false
					});
					/*$extras.find('input[name="itst"]').prop({
					    checked: false,
					    disabled: true
					}); //IT Speed Talk Sold Out*/
					$('.cocktaildiv').css('display', 'none');
					$('.itst').css('display', 'block');

					if (checkedcount == 2) {
						price *= 2;
					}

					//Compensar preço dos extras
					price -= 300;
					//price -= 300;   SPEED TALK SOLD OUT
					break;
				case 'silver':
					price = 350;
					/*$extras.find('input[name="itst"]').prop({
					    checked: false,
					    disabled: true
					}); //IT Speed Talk Sold Out*/
					$('.itst').css('display', 'none');
					$('.cocktaildiv').css('display', 'none');
					if (checkedcount == 2) {
						price *= 2;
					}
					break;
				case 'architecture':
					price = 100;
					$extras.find('input[name="cvs"]').prop({
						checked: true,
						disabled: true
					});
					if (checkedcount == 2) {
						price *= 2;

					}
					//Compensar preço dos extras
					price -= 300;
					break;
			}


			if ($extras.find('input[name="cvs"]')[0].checked)
				price += 300;

			if ($extras.find('input[name="workshop"]')[0].checked)
				price += 200;

			if ($extras.find('input[name="itspeedtalks"]')[0].checked)
				price += 150;

			if ($extras.find('input[name="backoffice"]')[0].checked)
				price += 100;

			if ($extras.find('input[name="cocktail"]')[0].checked)
				price += 200;

			if (parseInt($extras.find('select[name="almoco_number"]').val()) != 0) {
				almoco_price = parseInt($extras.find('select[name="almoco_number"]').val()) * 10;
			} else {
				almoco_price = parseInt($extras.find('select[name="almoco_number"]').val());
			}

			if (checkedcount == 0) {
				price = 0;
				almoco_price = 0;
			}


			/*if(selected=='premium' && $('#join_form #attending input[name="day27"]')[0].checked){
			     $('#join_form #attending input[name="day27"]')[0].checked = false;
			    $('#join_form #attending input[name="day28"]')[0].checked = true;
			}*/

			document.getElementById("idUnico").value = price + almoco_price;
			$('#price-simulation').html("<small>Simulação:</small> " + (price + almoco_price) + "€ <small>+ IVA</small>");
		}

		var _validFileExtensions = [".jpg", ".jpeg", ".png"];

		function ValidateSingleInput(oInput) {
			if (oInput.type == "file") {
				var sFileName = oInput.value;
				if (sFileName.length > 0) {
					var blnValid = false;
					for (var j = 0; j < _validFileExtensions.length; j++) {
						var sCurExtension = _validFileExtensions[j];
						if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length)
							.toLowerCase() ==
							sCurExtension.toLowerCase()) {
							blnValid = true;
							break;
						}
					}

					if (!blnValid) {
						alert("Desculpe, o ficheiro do tipo " + sFileName.substr(sFileName.length - sCurExtension.length,
								sCurExtension.length).toLowerCase() +
							" não é válido, os únicos ficheiros permitidos são do tipo: " + _validFileExtensions.join(
								", ")
						);
						oInput.value = "";
						return false;
					}
				}
			}
			return true;
		}

		function beforeSubmit(form) {

			if ($('#join_form #attending input[type="checkbox"]:checked').length == 0) {
				alert('You have to select at least a day to attend!');
				return false;
			}
			if ($('#join_form select[name="company_plan"] option[value="none"]:checked').length != 0) {
				alert('You have to select a plan!');
				return false;
			}
			if ($('select[name="almoco_number"]').val() == "null") {
				alert('You have to select a Workshop or Speed Interview!');
				return false;
			}
			if ($('select[name="workshop_option"]').val() == "null") {
				alert('You have to select a Workshop or Speed Interview Model!');
				return false;
			}
			if (!validateEmail($('input[name="contact_email"]').val())) {
				alert('The e-mail is incorrect!');
				return false;
			}
			return true;
		}

		function validateEmail(email) {
			var re =
				/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return re.test(email);
		}
	</script>

@endsection

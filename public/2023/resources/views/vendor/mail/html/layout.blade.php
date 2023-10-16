<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="min-height: 100%; padding: 0">

<head>
	<script src="https://kit.fontawesome.com/7522c69372.js"></script>
</head>

<body
	style="box-sizing: border-box; padding: 10px;margin: 0; min-height: 100%; background: #1EC4BD; background: -moz-linear-gradient(-110deg, #1EC4BD 0%, #7beae5 100%); background: -webkit-linear-gradient(-110deg, #1EC4BD 0%,#7beae5 100%); background: linear-gradient(-110deg, #1EC4BD 0%,#7beae5 100%); text-align: center; ">
	<a href="#"><img style="width: 180px; padding-bottom:20px; padding-top: 10px; max-width: 100%;"
			src="https://fista.iscte-iul.pt/img/logo_fista_horizontal_branco_2023.png"></a>
	<div
		style="max-width: 600px; margin: auto; text-align: left; box-sizing: border-box; background: white; padding: 28px;">
		{{ Illuminate\Mail\Markdown::parse($slot) }}</div>
	<p
		style="font-family: sans-serif; text-align: center; color: white; font-size: 12px; letter-spacing: 1px; line-height: 15px; margin-top: 1rem;">
		FISTA 23<br>Escola de Tecnologias e Arquitetura, Iscte<br><a href="http://fista.iscte-iul.pt"
			style="text-decoration:none;color:white;">fista.iscte-iul.pt</a></p>
</body>

</html>

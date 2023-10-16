<p>Boa tarde {{ $user->first_name . ' ' . $user->last_name }},</p>

<br>

<p>Espero que te encontres bem.</p>

<br>
<!--<p>Estamos a enviar este email para avisar que houve uma alteração na data do Workshop <strong>{{ $workshop->title }}</strong> do FISTA22 realizado pela <strong>{{ $workshop->company }}</strong>, passa a ser no dia <strong>{{ date('d', strtotime($workshop->begin)) }} às {{ date('H', strtotime($workshop->begin)) }}h{{ date('i', strtotime($workshop->begin)) }}</strong>, na sala <strong>{{ $workshop->room }}</strong>.</p>-->
<!--<p>Estamos a enviar este email para avisar que houve uma alteração de sala do Workshop <strong>{{ $workshop->title }}</strong> do FISTA22 realizado pela <strong>{{ $workshop->company }}</strong>, no dia <strong>{{ date('d', strtotime($workshop->begin)) }} às {{ date('H', strtotime($workshop->begin)) }}h{{ date('i', strtotime($workshop->begin)) }}</strong>, passa a ser na sala <strong>{{ $workshop->room }}</strong>.</p>-->
<!--<p>Estamos a enviar este email para avisar que o Workshop <strong>{{ $workshop->title }}</strong> do FISTA22 realizado pela <strong>{{ $workshop->company }}</strong>, no dia <strong>{{ date('d', strtotime($workshop->begin)) }} às {{ date('H', strtotime($workshop->begin)) }}h{{ date('i', strtotime($workshop->begin)) }}</strong>, na sala <strong>{{ $workshop->room }}</strong> foi <strong>cancelado</strong>.</p>-->
<p>Estamos a enviar este email para confirmar a tua inscrição para o Workshop <strong>{{ $workshop->title }}</strong>
	do FISTA23 realizado pela <strong>{{ $workshop->company }}</strong>, no dia
	<strong>{{ date('d', strtotime($workshop->begin)) }} às
		{{ date('H', strtotime($workshop->begin)) }}h{{ date('i', strtotime($workshop->begin)) }}</strong>, na sala
	<strong>{{ $workshop->room }}</strong>.
</p>
<!--<p>Estamos a enviar este email para confirmar a tua inscrição para o Workshop {{ $workshop->title }} do FISTA22 realizado pela {{ $workshop->company }}, no dia {{ date('d', strtotime($workshop->begin)) }} às {{ date('H', strtotime($workshop->begin)) }}h{{ date('i', strtotime($workshop->begin)) }}, disponibilizando em baixo o link para acederes ao workshop.</p>

<p>{{ $workshop->link }}</p>-->

<!--<p>Estamos a enviar este email para avisar que o Workshop <strong>{{ $workshop->title }}</strong> do FISTA22 realizado pelo <strong>{{ $workshop->company }}</strong> sofreu uma alteração e foi adiado para a próxima semana em formato presencial.</p>
<p>Irão haver duas sessões: uma dia 10 de Março às 14h30 e outra às 17h30.</p>
<p>Mais perto da data iremos indicar qual será a sala.</p>-->

<!--<p>Estamos a enviar este email para avisar que ocorreu um lapso e que o Workshop <strong>{{ $workshop->title }}</strong> do FISTA22 realizado pela <strong>{{ $workshop->company }} não foi adiado e vai acontecer na sala {{ $workshop->room }} e estamos a contar contigo.</p>-->

<!--<p>Estamos a enviar este email para avisar que ocorreu um imprevisto e que o Workshop <strong>{{ $workshop->title }}</strong> do FISTA22 realizado pela <strong>{{ $workshop->company }}</strong>, foi adiado.</p>-->
<!--<p>Pedimos desculpa pelo incómodo.</p>-->
<!--<p>Em breve iremos colocar no site a nova data.</p>-->
<!--p>Caso não possas comparecer responde a este email indicando o email com o qual fizeste o registo no site do FISTA que cancelamos a tua inscrição.</p>-->
<br>

<p>Qualquer dúvida ou questão, não hesites em contactar.</p>

<br>

<p>Os melhores cumprimentos,</p>

<p>A organização do FISTA23</p>

<div id="x_Signature">
	<div>
		<div></div>
		<div></div>
		<div dir="ltr" id="x_divtagdefaultwrapper"
			style="color:black;font-size:12pt;font-family:Calibri,Helvetica,sans-serif;">
			<p style="margin-top:0;margin-bottom:0;font-size:12px"></p>
			<table cellspacing="0" cellpadding="0"
				style="color:#444444;font-size:14px;font-family:Verdana,sans-serif;border-spacing:0;border-collapse:collapse;table-layout:fixed;">
				<tbody>
					<tr>
						<td style="text-align:center;vertical-align:middle;width:140px;padding:0;">
							<img src="https://fista.iscte-iul.pt/storage/logo_fista_azul_2023_10edicao.png" style="width:80%">
							<!--
				<img data-imagetype="AttachmentByCid" originalsrc="cid:ee12b007-fe70-41e4-8c4c-640c8bb0bfbe" explicitlogon="fista@iscte-iul.pt" data-custom="AAMkAGFkOWZkNjJiLWUzNzEtNDRmNS1iYWQ4LWE2MWQ0M2RiZmZhMgBGAAAAAAAWGS9Ted5DTKInWhNleiCmBwA0dMHLNFTFRqWOJA25n8Y5AAAAAAEJAAA0dMHLNFTFRqWOJA25n8Y5AANQNxZjAAABEgAQAHBfUj2GOAhDhNnmsa7gXHE%3D" naturalheight="0" naturalwidth="0" src="https://attachments.office.net/owa/fista@iscte-iul.pt/service.svc/s/GetAttachmentThumbnail?id=AAMkAGFkOWZkNjJiLWUzNzEtNDRmNS1iYWQ4LWE2MWQ0M2RiZmZhMgBGAAAAAAAWGS9Ted5DTKInWhNleiCmBwA0dMHLNFTFRqWOJA25n8Y5AAAAAAEJAAA0dMHLNFTFRqWOJA25n8Y5AANVd5ujAAABEgAQALeZGdxUFwtHrN2g7ErJVSw%3D&amp;thumbnailType=2&amp;token=eyJhbGciOiJSUzI1NiIsImtpZCI6IjMwODE3OUNFNUY0QjUyRTc4QjJEQjg5NjZCQUY0RUNDMzcyN0FFRUUiLCJ0eXAiOiJKV1QiLCJ4NXQiOiJNSUY1emw5TFV1ZUxMYmlXYTY5T3pEY25ydTQifQ.eyJvcmlnaW4iOiJodHRwczovL291dGxvb2sub2ZmaWNlLmNvbSIsInVjIjoiYzdlZGY1OTFlZjA3NDUyMmI4NTU4NmQ4YTExZDg0MmEiLCJzaWduaW5fc3RhdGUiOiJbXCJrbXNpXCJdIiwidmVyIjoiRXhjaGFuZ2UuQ2FsbGJhY2suVjEiLCJhcHBjdHhzZW5kZXIiOiJPd2FEb3dubG9hZEA2MjMwZTg2MC1iZmM1LTQwOTUtYTZiYy0xMDQ3MjFhZGQ2ZTYiLCJpc3NyaW5nIjoiV1ciLCJhcHBjdHgiOiJ7XCJtc2V4Y2hwcm90XCI6XCJvd2FcIixcInB1aWRcIjpcIjExNTM3NjU5MzI0NTI5NzE1NjJcIixcInNjb3BlXCI6XCJPd2FEb3dubG9hZFwiLFwib2lkXCI6XCIwZjc2NjlmNy02ZDc3LTQ4MDctOTM2MC1iNjM3NTU4OGU4ODlcIixcInByaW1hcnlzaWRcIjpcIlMtMS01LTIxLTI0OTI4MzEyMTEtMzk3NzY2MDQ1Ny0yMzEwODI4Mzg3LTkzNDQxOTdcIn0iLCJuYmYiOjE2MTM5NDEwNzYsImV4cCI6MTYxMzk0MTY3NiwiaXNzIjoiMDAwMDAwMDItMDAwMC0wZmYxLWNlMDAtMDAwMDAwMDAwMDAwQDYyMzBlODYwLWJmYzUtNDA5NS1hNmJjLTEwNDcyMWFkZDZlNiIsImF1ZCI6IjAwMDAwMDAyLTAwMDAtMGZmMS1jZTAwLTAwMDAwMDAwMDAwMC9hdHRhY2htZW50cy5vZmZpY2UubmV0QDYyMzBlODYwLWJmYzUtNDA5NS1hNmJjLTEwNDcyMWFkZDZlNiIsImhhcHAiOiJvd2EifQ.QHrm1B6cQil7Eez1dvUuvSeu-9Zmronx7OV6zfzuRr6BtZYKJ-r63BZZoS4PgEkQvTqgvXsi22ffzvOZiQt88V9-0nNzEeksuqcC_CMGCj3dwoznPGxgkL06DBLcWw3ZZSiYcOU3fzBFZ460Qk5xqF4hPKmuLMvGRTubo0M3k89-b4QQPSMWdlhi8F2mlBcOrmEfOSRyhvP4KVJ0wGd4W3PmcA8DvGXU_MMHKuRaJVz8ogHfEwEzvHAqmB9Zr3KUDS-SP5nRaMJpvf94-kHSBONHCVCf-s8vVt6S2fnxr0HR_Kfmb9-xt2APXbB4oEx7OuVAyaicmUYasY-1hf5JWg&amp;X-OWA-CANARY=ls4J-x3qS0CtIgMOR3yEHYAlvWmr1tgYFGTqABgDgQSUChIX-VfplTof2gC3k52-jZi-aFumu0U.&amp;owa=outlook.office.com&amp;scriptVer=20210215002.04&amp;animation=true" data-outlook-trace="F:1|T:1" style="width: 114.5px; height: 114.5px; cursor: pointer;" crossorigin="use-credentials"><br>
				-->
						</td>
						<td style="vertical-align:top;width:230px;padding:0;border-bottom:2px solid #1EC4BD;">
							<table cellspacing="0" cellpadding="0"
								style="background-color:transparent;border-spacing:0;border-collapse:collapse;">
								<tbody>
									<tr>
										<!--<td style="color:#ED5A24;vertical-align:top;padding:0 0 6px 0;"><span style="color:#4FAD32;font-size:18.67px;"><b><i>David Gabriel, Rita Silva, Rodrigo Pinheiro<br>-->

										</i></b></span><span style="color:#1EC4BD;font-size:10pt;">Organização do FISTA</span>
						</td>
					</tr>
					<tr>
						<td style="vertical-align:top;padding:0 0 6px 0;line-height:18px;"><span style="font-size:10pt;">email: <a
									href="mailto:fista@iscte-iul.pt" target="_blank" rel="noopener noreferrer"
									data-auth="NotApplicable">fista@iscte-iul.pt</a><br>

							</span></td>
					</tr>
					<tr>
						<td style="vertical-align:top;padding:0 0 6px 0;line-height:18px;"><span
								style="font-size:10pt;">FISTA,&nbsp;</span><span style="font-size:10pt;">Av. das Forças Armadas, 1649-026
								Lisboa</span></td>
					</tr>
				</tbody>
			</table>
			</td>
			</tr>
			<tr>
				<td style="text-align:center;vertical-align:middle;padding:6px 0 0 0;"><span><a
							href="https://www.facebook.com/FISTA.ISCTE.IUL/" target="_blank" rel="noopener noreferrer"
							data-auth="NotApplicable" style="color:#337AB7;background-color:transparent;"><img data-imagetype="External"
								src="https://codetwocdn.azureedge.net/images/mail-signatures/generator/photo2/fb.png" border="0"
								alt="facebook icon"
								style="vertical-align:middle;width:16px;height:16px;border-width:0;"></a>&nbsp;</span><span><a
							href="https://www.youtube.com/channel/UCCNbJIiznD05DrHuhwe-InQ" target="_blank" rel="noopener noreferrer"
							data-auth="NotApplicable" style="color:#337AB7;background-color:transparent;"><img data-imagetype="External"
								src="https://codetwocdn.azureedge.net/images/mail-signatures/generator/photo2/yt.png" border="0"
								alt="youtube icon"
								style="vertical-align:middle;width:16px;height:16px;border-width:0;"></a>&nbsp;</span><span><a
							href="https://www.instagram.com/fista_iscte/" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable"
							style="color:#337AB7;background-color:transparent;"><img data-imagetype="External"
								src="https://codetwocdn.azureedge.net/images/mail-signatures/generator/photo2/it.png" border="0"
								alt="instagram icon" style="vertical-align:middle;width:16px;height:16px;border-width:0;"></a>&nbsp;</span></td>
				<td style="vertical-align:middle;padding:6px 0 0 0;"><span
						style="color:#ED5A24;font-size:10pt;background-color:transparent;"><span style="color:#1EC4BD;font-size:10pt;"><a
								href="http://fista.iscte-iul.pt/" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable"
								style="color:#337AB7;background-color:transparent;">fista.iscte-iul.pt</a>&nbsp;<a
								href="http://fista.iscte-iul.pt/" target="_blank" rel="noopener noreferrer"
								data-auth="NotApplicable"></a></span></span></td>
			</tr>
			</tbody>
			</table>
		</div>
	</div>
</div>

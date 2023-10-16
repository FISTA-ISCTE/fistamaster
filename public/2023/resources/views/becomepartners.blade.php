@extends('layouts.nav')
@section('title', 'Become a Partner')
@section('content')
<link href="{{ asset('css/becomePartner.css') }}" rel="stylesheet">
<script>
      const nav = document.querySelector('nav')
      const img = document.querySelector('img')
      nav.classList.add('active');
      img.setAttribute('src', "{{asset('img/logo_fista_horizontal_azul_2023_v2.png')}}");
  </script>


<section class="welcome" id="background" style="height:900px;">  
	
	<div class="container padding">
		<div style=" margin:auto;">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8" ><h1 id="texte" style="color:#f4f6f8; text-align:center" class="font-weight-bold"  >Become a partner</h1></div>
				<div class="col-md-2"></div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6" style="text-align:center;"><img src="/img/logo_fista_branco_2023.png"></div>
				<div class="col-md-3"></div>
			</div>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8" ><h1 id="texte2" style="color:#f4f6f8; text-align:center" class="font-weight-bold"  >8 e 9 de março de 2023</h1></div>
				<div class="col-md-2"></div>
			</div>
			
		</div>
	</div>

</section>
<style>
	/* Extra small devices (portrait phones, less than 576px)*/
@media (max-width: 575.98px) { .padding{
			padding-top:25%;
		}
	#texte{
		font-size:65px;
	}
	}

/* Small devices (landscape phones, 576px and up)*/
@media (min-width: 576px) and (max-width: 767.98px) { .padding{
			padding-top:18%;
		}
	#texte{
		font-size:68px;
	}
	}

/* Medium devices (tablets, 768px and up)*/
@media (min-width: 768px) and (max-width: 991.98px) { .padding{
			padding-top:10%;
		} 
	#texte{
		font-size:75px !important;
	}
	}

/* Large devices (desktops, 992px and up)*/
@media (min-width: 992px) and (max-width: 1199.98px) { 
	.padding{
			padding-top:8%;
		} 
	#texte{
		font-size:80px !important;
	}
	}

/*Extra large devices (large desktops, 1200px and up)*/
@media (min-width: 1200px) { 
	.padding{
			padding-top:8%;
		}
	#texte{
		font-size:85px !important;
	}
}
.ulpremium, .ulgold, .ulsilver {
	cursor: pointer;
}

.faq_button {
	color: black !important;
	font-size: 20px;
	width: 200px;
	height: 20px;
}
	
</style>

<div class="clearfix striped-sections right" style="margin-top:0%">
	<div class="container padding">
		<div style="max-width: 900px; margin:auto;">
			<h5 style="line-height:1.5">O FISTA é um evento anual que decorre no Iscte, em Lisboa, Portugal, com o objetivo de aproximar empresas e estudantes.</h5>
			<h5 style="line-height:1.5">Contando com a presença de milhares de alunos, é uma excelente oportunidade para falar sobre as 
			futuras tendências de IT e Arquitetura, enquanto  <span class="font-weight-bold">os nossos alunos descobrem a sua empresa</span>.
			A sua empresa, estando presente num stand do nosso evento, pode dar a conhecer aos nossos alunos os seus objetivos, áreas de trabalho e missão.
			Durante o evento, as empresas podem ainda organizar Workshops, IT Speed Talks e até <span class="font-weight-bold">recrutar!</span>
			Através da escolha da <span class="font-weight-bold">parceria Premium ou Gold</span> damos-lhe a oportunidade de ter acesso a uma base de dados com <span class="font-weight-bold">centenas de currículos!</span></h5>
			<h5 style="line-height:1.5">Este ano o evento decorre nos dias <span class="font-weight-bold">8 e 9 de março de 2023</span>.</h5>
			<h4 style="line-height:1.5">Aproveite esta oportunidade para promover a sua empresa e tornar-se uma escolha de referência entre jovens talentos!</h4>			
		</div>
	</div>
</div>


<div class="clearfix striped-sections left">
	<div class="container" style="padding-top: 30px;">

		{{-- <div class="faq_button clearfix">
			<a href="{{ route('faqpartner')}}">Frequent Asked Questions</a>
		</div> --}}

		<h3 style="text-align: center; margin: 2em 0">Junte-se a nós. Esperamos a sua empresa neste fantástico evento anual!</h3>

		<div id="generic_price_table">
			<section>
			
					<div class="row">

						<!-- SILVER -->
						<div class="col-md-4">
						
							<div class="generic_content clearfix">
								
								<div class="generic_head_price clearfix">
								
									<div class="generic_head_content clearfix">
									
										<div class="head_bg_silver"></div>
										<div class="head">
											<span>Silver</span>
										</div>
										
									</div>
									
									<div class="generic_price_tag clearfix">	
										<span class="price">
											<span class="sign">€</span>
											<span class="preco">350</span>
											<span class="iva">+IVA</span>
											<span class="dia">/DIA</span>
										</span>
									</div>
									
								</div>                            

								<!-- COMPONENTES SILVER -->
								<div class="generic_feature_list">
									<ul class="ulsilver">
										<span tabindex="0" class="tooltips" data-toggle="tooltip" data-placement="right" title="2.5mx2.5m">
											<li class="icon"><span>Stand A</span>
												<i style="font-size: 0.7rem; vertical-align: middle;"class="fi-ctldxl-exclamation-mark"></i>
												<i style="font-size:0.7rem; vertical-align: middle; display: none;" class="fi-cnsdxl-exclamation-mark"></i>
											</li>
										</span>
										<span tabindex="0" class="tooltips" data-toggle="tooltip" data-placement="right" title="Por anunciar">
											<li class="icon"><span>Jogo</span> (QR Code)
												<i style="font-size: 0.7rem; vertical-align: middle;"class="fi-ctldxl-exclamation-mark"></i>
												<i style="font-size:0.7rem; vertical-align: middle; display: none;" class="fi-cnsdxl-exclamation-mark"></i>
											</li>
										</span>
										<span tabindex="0" class="tooltips" data-toggle="tooltip" data-placement="right" title="90x80 pixeis">
											<li class="icon"><span>Logo no site</span> (tamanho pequeno)
												<i style="font-size: 0.7rem; vertical-align: middle;"class="fi-ctldxl-exclamation-mark"></i>
												<i style="font-size:0.7rem; vertical-align: middle; display: none;" class="fi-cnsdxl-exclamation-mark"></i>
											</li>
										</span>
										<span tabindex="0" class="tooltips" data-toggle="tooltip" data-placement="right" title="1 post todas juntas no LinkedIn e no Instagram">
											<li class="icon"><span>Redes Sociais</span> (1 publicação)
												<i style="font-size: 0.7rem; vertical-align: middle;"class="fi-ctldxl-exclamation-mark"></i>
												<i style="font-size:0.7rem; vertical-align: middle; display: none;" class="fi-cnsdxl-exclamation-mark"></i>
											</li>
										</span>
										<li class="icon"><span>Almoços</span> (2 refeições)</li>	
										<li class="icon"><span>Feed Website FISTA</span> (1 publicação)</li>
										<li>
											<span>Estacionamento</span>
										</li>
									</ul>
								</div>
								
								<!-- BOTAO SILVER -->
								<div class="generic_price_btn_silver clearfix">
									<a class="" href="{{ route('registarEmpresa',['type' => 'silver'])}}">Sign up</a>
								</div>
								
							</div>
								
						</div>

						<!-- GOLD -->
						<div class="col-md-4">
						
							<div class="generic_content clearfix">
								
								<div class="generic_head_price clearfix">
								
									<div class="generic_head_content clearfix">
									
										<div class="head_bg_gold"></div>
										<div class="head">
											<span>Gold</span>
										</div>
										
									</div>
									
									<div class="generic_price_tag clearfix">	
										<span class="price">
											<span class="sign">€</span>
											<span class="preco">675</span>
											<span class="iva">+IVA</span>
											<span class="dia">/DIA</span>
										</span>
									</div>
									
								</div>                            
								
								<!-- COMPONENTES DO PACOTE -->
								<div class="generic_feature_list">
									<ul class="ulgold">
										<span tabindex="0" class="tooltips"  data-toggle="tooltip" data-placement="right" title="2.5mx2.75m">
											<li class="icon"><span>Stand B</span>
												<i style="font-size: 0.7rem; vertical-align: middle;"class="fi-ctldxl-exclamation-mark"></i>
												<i style="font-size:0.7rem; vertical-align: middle; display: none;" class="fi-cnsdxl-exclamation-mark"></i>
											</li>
										</span>
										<span tabindex="0" class="tooltips" data-toggle="tooltip" class="tooltips" data-placement="right" title="Receber currículos dos estudantes">
											<li class="icon"><span>Currículos</span>
												<i style="font-size: 0.7rem; vertical-align: middle;"class="fi-ctldxl-exclamation-mark"></i>
												<i style="font-size:0.7rem; vertical-align: middle; display: none;" class="fi-cnsdxl-exclamation-mark"></i>
											</li>
										</span>
										<span tabindex="0" class="tooltips" data-toggle="tooltip" data-placement="right" title="Por anunciar">
											<li class="icon"><span>Jogo</span> (QR Code)
												<i style="font-size: 0.7rem; vertical-align: middle;"class="fi-ctldxl-exclamation-mark"></i>
												<i style="font-size:0.7rem; vertical-align: middle; display: none;" class="fi-cnsdxl-exclamation-mark"></i>
											</li>
										</span>
										<span tabindex="0" class="tooltips" data-toggle="tooltip" data-placement="right" title="130x120 pixeis">
											<li class="icon"><span>Logo no site</span> (tamanho médio)
												<i style="font-size: 0.7rem; vertical-align: middle;"class="fi-ctldxl-exclamation-mark"></i>
												<i style="font-size:0.7rem; vertical-align: middle; display: none;" class="fi-cnsdxl-exclamation-mark"></i>
											</li>
										</span>
										<span tabindex="0" class="tooltips" data-toggle="tooltip" data-placement="right" title="1 story + 1 post todas juntas no LinkedIn e no Instagram">
											<li class="icon"><span>Redes Sociais</span> (2 publicações)
												<i style="font-size: 0.7rem; vertical-align: middle;"class="fi-ctldxl-exclamation-mark"></i>
												<i style="font-size:0.7rem; vertical-align: middle; display: none;" class="fi-cnsdxl-exclamation-mark"></i>
											</li>			
										</span>
										<span tabindex="0" class="tooltips" data-toggle="tooltip" data-placement="right" title="Roll-ups, placares das empresas, etc">
											<li class="icon"><span>Publicidade Física</span>
												<i style="font-size: 0.7rem; vertical-align: middle;"class="fi-ctldxl-exclamation-mark"></i>
												<i style="font-size:0.7rem; vertical-align: middle; display: none;" class="fi-cnsdxl-exclamation-mark"></i>
											</li>		
										</span>
										<li class="icon"><span>Almoços</span> (2 refeições)</li>	
										<li class="icon"><span>Feed Website FISTA</span> (2 publicações)</li>
										<li>
											<span>Estacionamento</span>
										</li>
									</ul>
								</div>
								
								<!--BOTAO GOLD -->
								<div class="generic_price_btn_gold clearfix">
									<a class="" href="{{ route('registarEmpresa',['type' => 'gold'])}}">Sign up</a>
								</div>
								
							</div>
								
						</div>

						<!-- PREMIUM -->
						<div class="col-md-4">
						
							<div class="generic_content clearfix">
								
								<div class="generic_head_price clearfix">
								
									
									<div class="generic_head_content clearfix">
									
										<div class="head_bg_premium"></div>
										<div class="head">
											<span>Premium</span>
										</div>
										
									</div>
									
									<div class="generic_price_tag clearfix">	
										<span class="price">
											<span class="sign">€</span>
											<span class="preco">1000</span>
											<span class="iva">+IVA</span>
											<span class="dia">/DIA</span>
										</span>
									</div>
									
								</div>                            

								<!-- ELEMENTOS DO PACOTE -->
								<div class="generic_feature_list">
									<ul class="ulpremium">
										<span tabindex="0" class="tooltips" data-toggle="tooltip" data-placement="right" title="2.5mx3m">
											<li class="icon"><span>Stand C</span>
												<i style="font-size: 0.7rem; vertical-align: middle;"class="fi-ctldxl-exclamation-mark"></i>
												<i style="font-size:0.7rem; vertical-align: middle; display: none;" class="fi-cnsdxl-exclamation-mark"></i>
											</li>
										</span>
										<li><span>IT Speed Talks</span></li>
										<span tabindex="0" class="tooltips" data-toggle="tooltip" data-placement="right" title="Receber currículos dos estudantes">
											<li class="icon"><span>Currículos</span>
												<i style="font-size: 0.7rem; vertical-align: middle;"class="fi-ctldxl-exclamation-mark"></i>
												<i style="font-size:0.7rem; vertical-align: middle; display: none;" class="fi-cnsdxl-exclamation-mark"></i>
											</li>
										</span>
										<span tabindex="0" class="tooltips" data-toggle="tooltip" data-placement="right" title="Escolha entre Workshop (online ou presencial) ou Speed Interviews">
											<li class="icon"><span>Workshops/Speed Interviews</span>
												<i style="font-size: 0.7rem; vertical-align: middle;"class="fi-ctldxl-exclamation-mark"></i>
												<i style="font-size:0.7rem; vertical-align: middle; display: none;" class="fi-cnsdxl-exclamation-mark"></i>
											</li>
										</span>
										<span tabindex="0" class="tooltips" data-toggle="tooltip" data-placement="right" title="Por anunciar">
											<li class="icon"><span>Jogo</span> (QR Code)
												<i style="font-size: 0.7rem; vertical-align: middle;"class="fi-ctldxl-exclamation-mark"></i>
												<i style="font-size:0.7rem; vertical-align: middle; display: none;" class="fi-cnsdxl-exclamation-mark"></i>
											</li>
										</span>
										<span tabindex="0" class="tooltips" data-toggle="tooltip" data-placement="right" title="200x190 pixeis">
											<li class="icon"><span>Logo no site</span> (tamanho grande) 
												<i style="font-size: 0.7rem; vertical-align: middle;"class="fi-ctldxl-exclamation-mark"></i>
												<i style="font-size:0.7rem; vertical-align: middle; display: none;" class="fi-cnsdxl-exclamation-mark"></i>
											</li>
										</span>
										<span tabindex="0" class="tooltips" data-toggle="tooltip" data-placement="right" title="3 stories (quando é lançado, durante o fista, sobre a atividade) 2 posts no LinkedIn e no Instagram (1 todas juntas, 1 sobre a atividade)">
											<li class="icon"><span>Redes Sociais</span> (3 publicações)
												<i style="font-size: 0.7rem; vertical-align: middle;"class="fi-ctldxl-exclamation-mark"></i>
												<i style="font-size:0.7rem; vertical-align: middle; display: none;" class="fi-cnsdxl-exclamation-mark"></i>
											</li>							
										</span>
										<span tabindex="0" class="tooltips" data-toggle="tooltip" data-placement="right" title="Roll-ups, placares das empresas, etc">
											<li class="icon"><span>Publicidade Física</span>
												<i style="font-size: 0.7rem; vertical-align: middle;"class="fi-ctldxl-exclamation-mark"></i>
												<i style="font-size:0.7rem; vertical-align: middle; display: none;" class="fi-cnsdxl-exclamation-mark"></i>
											</li>		
										</span>
										<li class="icon"><span>Almoços</span> (3 refeições)</li>	
										<li class="icon"><span>Feed Website FISTA</span> (3 publicações)</li>
										<span tabindex="0" class="tooltips" data-toggle="tooltip" data-placement="right" title="Acesso à informação fornecida pelos alunos, por exemplo, área de interesse, CV, LinkedIn">
											<li class="icon"><span>Backoffice</span>
												<i style="font-size: 0.7rem; vertical-align: middle;"class="fi-ctldxl-exclamation-mark"></i>
												<i style="font-size:0.7rem; vertical-align: middle; display: none;" class="fi-cnsdxl-exclamation-mark"></i>
											</li>		
										</span>
										<li>
											<span>Estacionamento</span>
										</li>
									</ul>
								</div>
								
								<!-- BOTAO PREMIUM -->
								<div class="generic_price_btn_premium clearfix">
									<a class="" href="{{ route('registarEmpresa',['type' => 'premium'])}}">Sign up</a>
								</div>
								
							</div>
								
						</div>
					</div>	
					
			</section>             	
		</div>
			
	</div>
</div>


<script>
	var timeout;
	$('.tooltips').mouseenter(function(){
  		var that = $(this);
  		if(timeout){
     		clearTimeout(timeout); 
   		}
  		timeout = setTimeout(function(){
		that.tooltip('enable');
		that.tooltip('show');
		setTimeout(function(){
		that.tooltip('disable');
		}, 1000);
  }, 1);
});
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">

var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61afe6a2c82c976b71c0487d/1fmbhprba';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
@endsection
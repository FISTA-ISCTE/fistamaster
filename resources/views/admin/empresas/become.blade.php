
@extends('layouts.app2')

@section('content')
        <!-- Page Banner Start -->
        <div class="section page-banner-section" style="background-color: #000000;min-height:20rem;">
            <div class="container">
                <div class="page-banner" style="margin-top:0.5%;margin-bottom:5%">
                    <div class="row text-center">
                        <h2 class="title">Become a partner</h2>
                    </div>
                    <!--<div class="row justify-content-center">
                        <img src="{{asset('assets/images/logos/logo_fista_horizontal_branco_2023.png')}}" style="width:30%">
                    </div>-->
                    <div class="row text-center">
                        <h4 class="title" style="font-size: 1.5rem !important">28 e 29 de Fevereiro de 2024</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner End -->

        <!-- Pricing Start -->
        <div class="section techwix-pricing-section section-padding-02" style="margin-bottom:5%">
            <div class="container">
                <!-- Pricing Wrap Start -->
                <div class="pricing-wrap">
                    <div class="section-title text-center">
                        <h2 class="title">Junte-se a nós. Esperamos a sua empresa neste fantástico evento anual!</h2>
                    </div>
                    <div class="pricing-content-wrap">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <!-- Single Pricing Start -->
                                <div class="single-pricing">
                                    <div class="pricing-badge">
                                        <span class="title">Silver</span>
                                    </div>
                                    <div class="pricing-price">
                                        <span class="currency">€</span>
                                        <h3 class="price">350<span>+IVA/DIA</span></h3>
                                    </div>
                                    <div class="pricing-content">
                                        <ul class="pricing-list">
                                            <li>Stand A</li>
                                            <li>Jogo(QR Code)</li>
                                            <li>Logo no site(tamanho pequeno)</li>
                                            <li>Redes Sociais(1 publicação)</li>
                                            <li>Almoços(2 refeições)</li>
                                            <li>Feed Website FISTA(1 publicação)</li>
                                        </ul>
                                        <div class="pricing-btn">
                                            <a class="btn" href="{{ route('registarEmpresa',['type' => 'silver'])}}">Registar</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Pricing End -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <!-- Single Pricing Start -->
                                <div class="single-pricing">
                                    <div class="pricing-badge">
                                        <span class="title">Gold</span>
                                    </div>
                                    <div class="pricing-price">
                                        <span class="currency">€</span>
                                        <h3 class="price">675<span>+IVA/DIA</span></h3>
                                    </div>
                                    <div class="pricing-content">
                                        <ul class="pricing-list">
                                            <li>Stand B</li>
                                            <li>Currículos</li>
                                            <li>Jogo(QR Code)</li>
                                            <li>Logo no site(tamanho médio)</li>
                                            <li>Redes Sociais(2 publicações)</li>
                                            <li>Publicidade Física</li>
                                            <li>Almoços(2 refeições)</li>
                                            <li>Feed Website FISTA(2 publicações)</li>
                                        </ul>
                                        <div class="pricing-btn">
                                            <a class="btn" href="{{ route('registarEmpresa',['type' => 'gold'])}}">Registar</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Pricing End -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <!-- Single Pricing Start -->
                                <div class="single-pricing">
                                    <div class="pricing-badge">
                                        <span class="title">Premium</span>
                                    </div>
                                    <div class="pricing-price">
                                        <span class="currency">€</span>
                                        <h4 class="price">1000<span>+IVA/DIA</span></h4>
                                    </div>
                                    <div class="pricing-content">
                                        <ul class="pricing-list">
                                            <li>Stand C</li>
                                            <li>IT Speed Talks</li>
                                            <li>Currículos</li>
                                            <li>Workshops/Speed Interviews</li>
                                            <li>Jogo(QR Code)</li>
                                            <li>Logo no site(tamanho grande)</li>
                                            <li>Redes Sociais(3 publicações)</li>
                                            <li>Publicidade Física</li>
                                            <li>Almoços(3 refeições)</li>
                                            <li>Feed Website FISTA(3 publicações)</li>
                                            <li>Backoffice</li>
                                            <li>Estacionamento</li>
                                        </ul>
                                        <div class="pricing-btn">
                                            <a class="btn" href="{{ route('registarEmpresa',['type' => 'premium'])}}">Registar</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Pricing End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pricing Wrap End -->
            </div>
        </div>
        <!-- Pricing End -->
        <div class="section techwix-choose-us-section-02 section-padding-02" style="background-image: url(assets/images/bg/choose-us-bg2.jpg);">
            <div class="container">
                <!-- Choose Us Wrap Start -->
                <div class="choose-us-wrap">
                    <h1 style="font-size:2.5rem;font-weight:bold;color:#1EC4BD;text-align:center;margin-bottom:3%">FAQ</h1>

                    <div class="row">

                        <div class="col-lg-12">
                            <!-- Choose Us Right Start -->
                            <div class="choose-us-right">
                                <!-- Faq Accordion Start -->
                                <div class="faq-accordion">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <div class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <span class="title">Como é que como empresa me posso inscrever para participar no FISTA24 e qual é o prazo para as inscrições?                                                    </span>
                                                </button>
                                            </div>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    As inscrições para o FISTA24 estão abertas até início de fevereiro e podem ser feitas através do nosso website.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    <span class="title">Pretendo participar nos dois dias do FISTA como é que o posso fazer? </span>
                                                </button>
                                            </div>
                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Na inscrição para o FISTA24 apenas dá para escolher um dos dois dias para estarem presentes, no entanto caso pretendam estar presentes nos dois dias envie um email para o seguinte endereço: <a href="mailto:fista@iscte.iul.pt">fista@iscte.iul.pt</a>. Tomando nota de que ao participar nos dois dias terá que ser com a mesma modalidade do pacote.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <div class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                                    <span class="title">Como é que podemos entrar em contacto para obter mais informações ou esclarecer dúvidas sobre a participação no FISTA24? </span>
                                                </button>
                                            </div>
                                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Para obter mais informações ou esclarecer dúvidas sobre a participação no FISTA24, podem contactar connosco por meio do nosso website ou por email (fista.iscte-iul.pt). Estamos à disposição para fornecer informações adicionais e orientação sobre como aproveitar ao máximo a sua participação no evento.
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Faq Accordion End -->
                            </div>
                            <!-- Choose Us Right End -->
                        </div>
                    </div>
                </div>
                <!-- Choose Us Wrap End -->
            </div>
        </div>


@endsection


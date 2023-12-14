
@extends('layouts.app2')

@section('content')
        <!-- Page Banner Start -->
        <div class="section page-banner-section" style="background: url(https://fista.iscte-iul.pt/img/fotobecomeapartner.jpg); background-size: cover;min-height:35rem;">
            <div class="container">
                <div class="page-banner" style="margin-top:0.5%;margin-bottom:5%;">
                    <div class="row text-center">
                        <h2 class="title" style="color:black;text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);">Become a partner</h2>
                    </div>
                    <!--<div class="row justify-content-center">
                                <img src="https://fista.iscte-iul.pt/assets/images/logos/logo_fista_horizontal_branco_2023.png" style="width:30%">
                            </div>-->
                    <div class="row text-center">
                        <h4 class="title" style="color:black; text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);font-size: 1.5rem !important">28 e
                            29 de Fevereiro de 2024</h4>
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
                        <h2 class="title">Junte-se a nós. Esperamos pela sua empresa neste fantástico evento anual!</h2>
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
                                        <h3 class="price">1000<span>+IVA/DIA</span></h3>
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


@endsection


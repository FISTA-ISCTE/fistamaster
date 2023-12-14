@extends('layouts.app2')

@section('content')
    <!-- Page Banner Start -->
    <div class="section page-banner-section"
        style="background: url({{ asset('img/fotobecomeapartner.jpg') }}); background-size: cover;min-height:35rem;">
        <div class="container">
            <div class="page-banner" style="margin-top:0.5%;margin-bottom:5%;">
                <div class="row text-center">
                    <h2 class="title" style="color:black;text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);">Become a partner</h2>
                </div>
                <!--<div class="row justify-content-center">
                                <img src="{{ asset('assets/images/logos/logo_fista_horizontal_branco_2023.png') }}" style="width:30%">
                            </div>-->
                <div class="row text-center">
                    <h4 class="title"
                        style="color:black; text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);font-size: 1.5rem !important">28 e
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
                    <h2 class="title">Junte-se a nós. Esperamos a sua empresa neste fantástico evento anual!</h2>
                </div>
                <!-- Modal Itspeed -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">O que são as IT Speed Talks</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apresentações que abordam tópicos de tecnologia com a duração de 5 a 10 minutos.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Backofice -->
                <div class="modal fade" id="back" tabindex="-1" aria-labelledby="back" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">O que é o Backoffice?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Acesso às informações fornecidas pelos participantes, por exemplo, áreas de interesse,
                                hobbies, linkedin.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Backofice -->
                <div class="modal fade" id="breakfast" tabindex="-1" aria-labelledby="back" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Opcional (200€ + IVA): Pequeno Almoço com
                                    alunos</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Antes da abertura da tenda, venha tomar o pequeno almoço com um grupo de estudantes
                                previamente selecionados. Aproveite este momento de networking, para conhecer melhor os
                                nossos estudantes, falar sobre a sua empresa e as oportunidades que tem para lhes oferecer.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>

                            </div>
                        </div>
                    </div>
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
                                    <h3 class="price">400<span>+IVA/DIA</span></h3>
                                </div>
                                <div class="pricing-content">
                                    <ul class="pricing-list">
                                        <li>Stand A (2.5mx2.5m)</li>
                                        <li>Jogo(QR Code)</li>
                                        <li>Logo no site(90x80 pixeis)</li>
                                        <li>Redes Sociais(1 publicação)</li>
                                        <li>Almoços(2 refeições)</li>
                                        <li>Feed Website FISTA(1 publicação)</li>
                                        <li>Estacionamento</li>
                                    </ul>
                                    <div class="pricing-btn">
                                        <a class="btn disabled-link">ESGOTADO</a>
                                    </div>
                                    <span style="color:red; font-size: 0.8rem;text-align:center;"> Para mais esclarecimentos, envie-nos email. <a href="mailto:fista@iscte-iul.pt">AQUI</a></span>
                                    <style>
                                        .disabled-link {
                                            background: rgb(215, 215, 215) !important;
                                            color: rgb(248, 0, 0);
                                            pointer-events: none;
                                            cursor: default;
                                        }
                                    </style>
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
                                    <h3 class="price">700<span>+IVA/DIA</span></h3>
                                </div>
                                <div class="pricing-content">
                                    <ul class="pricing-list">
                                        <li>Stand B (2.5mx2.75m)</li>
                                        <li>Currículos</li>
                                        <li>Jogo(QR Code)</li>
                                        <li>Logo no site(130x120 pixeis)</li>
                                        <li>Redes Sociais(2 publicações)</li>
                                        <li>Publicidade Física</li>
                                        <li>Almoços(2 refeições)</li>
                                        <li>Feed Website FISTA(2 publicações)</li>
                                        <li>Estacionamento</li>
                                    </ul>
                                    <div class="pricing-btn">
                                        <a class="btn"
                                            href="{{ route('registarEmpresa', ['type' => 'gold']) }}">Registar</a>
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
                                    <h4 class="price">1100<span>+IVA/DIA</span></h4>
                                </div>
                                <div class="pricing-content">
                                    <ul class="pricing-list">
                                        <li>Stand C (2.5mx3.0m)</li>
                                        <li><a data-bs-toggle="modal" data-bs-target="#exampleModal" href="">IT
                                                Speed Talks <i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                                        <li>Currículos</li>
                                        <li>Workshops/Speed Interviews</li>
                                        <li>Jogo(QR Code)</li>
                                        <li>Logo no site(200x190 pixeis)</li>
                                        <li>Redes Sociais(3 publicações)</li>
                                        <li>Publicidade Física</li>
                                        <li>Almoços(3 refeições)</li>
                                        <li>Feed Website FISTA(3 publicações)</li>
                                        <li><a data-bs-toggle="modal" data-bs-target="#back" href="">BackOffice <i
                                                    class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                                        <li>Estacionamento</li>
                                        <li><a data-bs-toggle="modal" data-bs-target="#breakfast"
                                                href="">(Opcional) Pequeno Almoço com Alunos<i
                                                    class="fa fa-info-circle" aria-hidden="true"></i></a></li>

                                    </ul>
                                    <div class="pricing-btn">
                                        <a class="btn"
                                            href="{{ route('registarEmpresa', ['type' => 'premium']) }}">Registar</a>
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
    <div class="section techwix-choose-us-section-02 section-padding-02" style="background-color: #e1e1e1;">
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
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <span class="title">Como é que como empresa me posso inscrever para
                                                    participar no FISTA24 e qual é o prazo para as inscrições? </span>
                                            </button>
                                        </div>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                A inscrição é feita através do registo no nosso site. Basta ver qual o
                                                pacote que pretende, “clicar” no respetivo botão e preencher com a
                                                informação solicitada.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <span class="title">Pretendo participar nos dois dias do FISTA como é que
                                                    o posso fazer? </span>
                                            </button>
                                        </div>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Na inscrição para o FISTA24 apenas dá para escolher um dos dois dias para
                                                estarem presentes, no entanto caso pretendam estar presentes nos dois dias
                                                envie um email para o seguinte endereço: <a
                                                    href="mailto:fista@iscte.iul.pt">fista@iscte.iul.pt</a>. Tomando nota
                                                de que ao participar nos dois dias terá que ser com a mesma modalidade do
                                                pacote.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <span class="title">Como é que podemos entrar em contacto para obter mais
                                                    informações ou esclarecer dúvidas sobre a participação no FISTA24?
                                                </span>
                                            </button>
                                        </div>
                                        <div id="collapseFour" class="accordion-collapse collapse"
                                            aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Para obter mais informações ou esclarecer dúvidas sobre a participação no
                                                FISTA24, podem contactar connosco por meio do nosso website ou por email
                                                (fista.iscte-iul.pt). Estamos à disposição para fornecer informações
                                                adicionais e orientação sobre como aproveitar ao máximo a sua participação
                                                no evento.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <div class="accordion-header" id="heading1">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse1"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <span class="title">Até quando me posso inscrever?
                                                </span>
                                            </button>
                                        </div>
                                        <div id="collapse1" class="accordion-collapse collapse"
                                            aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                A tenda tem lugares limitados para cada um dos dias. Assim, não existe uma
                                                data de fecho formal das inscrições, sendo que estas fecham quando todos os
                                                lugares estiverem esgotados. Nos anos anteriores isso acontece cerca de 3
                                                semanas antes do evento
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <div class="accordion-header" id="heading2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse2"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <span class="title">Quando deverá ser feito o pagamento da participação no
                                                    evento?
                                                </span>
                                            </button>
                                        </div>
                                        <div id="collapse2" class="accordion-collapse collapse"
                                            aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                O pagamento é feito, por norma, durante os meses de fevereiro e março do ano
                                                em que o evento acontece.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <div class="accordion-header" id="heading3">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse3"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <span class="title">Pretendo que o evento seja faturado ainda em 2023. É
                                                    possível?
                                                </span>
                                            </button>
                                        </div>
                                        <div id="collapse3" class="accordion-collapse collapse"
                                            aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Neste caso, quando fizer a sua inscrição deverá enviar um email para
                                                fista@iscte-iul.pt dando essa indicação. Neste caso, para que isto seja
                                                possível, todas as informações para faturação devem ser enviadas até ao dia
                                                12 de dezembro de 2023
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <div class="accordion-header" id="heading4">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse4"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <span class="title">Inscrevi a minha empresa, mas aconteceu um imprevisto
                                                    e vou ter de cancelar a nossa participação. Como devo proceder e quais
                                                    as consequências desse cancelamento?
                                                </span>
                                            </button>
                                        </div>
                                        <div id="collapse4" class="accordion-collapse collapse"
                                            aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Neste caso deve dar-nos conhecimento dessa situação para podermos fazer o
                                                cancelamento. O cancelamento é gratuito até 31 de dezembro 2023, sendo que a
                                                partir dessa data se aplicam as seguintes condições:
                                                <br>
                                                Até 1 mês antes data do evento, a empresa deverá pagar 20% do valor da
                                                inscrição efetuada.
                                                <br>
                                                A menos de 1 mês do evento, há lugar a uma compensação no valor de 50% da
                                                inscrição efetuada.
                                                <br>
                                                Por fim, o cancelamento a menos de uma semana do evento e daí para a frente,
                                                implica o pagamento de 75% do pacote previamente escolhido.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <div class="accordion-header" id="heading5">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse5"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <span class="title">A que tenho direito com a minha inscrição?
                                                </span>
                                            </button>
                                        </div>
                                        <div id="collapse5" class="accordion-collapse collapse"
                                            aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                A sua inscrição dá-lhe um espaço com a dimensão de acordo com o pacote
                                                escolhido. Para conveniência das empresas o espaço não é delimitado com
                                                “paredes”. Assim sendo as empresas podem personalizar totalmente o seu
                                                espaço. Fornecemos ainda cadeira e mesas, de acordo com o tamanho do stand,
                                                wi-fi, tomadas e extensões elétricas. Caso não precisem de algum deste
                                                material, ou tenham algum material com dimensões mais específicas, bem comos
                                                outras necessidades devem sempre contactar-nos.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <div class="accordion-header" id="heading6">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse6"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <span class="title">Pretendo adquirir mais almoços para além dos que
                                                    constam na inscrição, como poderei fazer?
                                                </span>
                                            </button>
                                        </div>
                                        <div id="collapse6" class="accordion-collapse collapse"
                                            aria-labelledby="heading6" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                O número de almoços pode ser ajustado na sua área até à altura da faturação.
                                                Uma vez já faturado poderá adquirir o seu almoço no dia, em qualquer um dos
                                                espaços que sirvam refeições no Iscte, ou em qualquer local próximo. Iremos
                                                tentar garantir uma margem de almoços extra a pagar no próprio dia, mas não
                                                conseguimos ter a certeza de que serão suficientes para todos os
                                                participantes de última hora. Falem com a nossa equipa e tentaremos sempre
                                                dar o nosso melhor.
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

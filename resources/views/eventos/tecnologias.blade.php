@extends('layouts.app2')

@section('content')
    <div class="section techwix-case-study-section section-padding-02">
        <div class="container">
            <div class="case-study-wrap" style="margin-top:5rem;">
                <div class="section-title text-center">
                    <h3 class="sub-title">Concursos, Conferências, Workshops</h3>
                    <h2 class="title">Tecnologias</h2>
                </div>
                <style>.single-case-study .case-study-img img {
                    width: 100%;   /* Define a largura da imagem para 100% do container */
                    height: 15rem !important;  /* Mantém a proporção da imagem ajustando a altura automaticamente */
                    object-fit: cover; /* Isso garante que a imagem cubra todo o espaço sem distorcer */
                }
                </style>
                <div class="case-study-content-wrap">
                    <div class="swiper-container case-study-active">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <!-- Single Case Study Start -->
                                <div class="single-case-study">
                                    <div class="case-study-img">
                                        <a href="/concurso-de-ideias"><img
                                                src="{{ asset('img/conjunto/concurso_ideias.png') }}" alt=""></a>
                                    </div>
                                    <div class="case-study-content">
                                        <h3 class="title"><a href="/concurso-de-ideias">Concurso de Ideias</a></h3>

                                    </div>
                                </div>
                                <!-- Single Case Study End -->
                            </div>
                            <div class="col-md-4">
                                <!-- Single Case Study Start -->
                                <div class="single-case-study">
                                    <div class="case-study-img">
                                        <a href="/ctf"><img
                                                src="{{ asset('img/fotos/pessoa-trabalhando-html-no-computador.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="case-study-content">
                                        <h3 class="title"><a href="/ctf">Concurso de CiberSegurança</a></h3>

                                    </div>
                                </div>
                                <!-- Single Case Study End -->
                            </div>
                        </div>

                        <!-- Add Pagination -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Case Study End -->
@endsection

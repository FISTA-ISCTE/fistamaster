@extends('layouts.app2')

@section('content')
<div class="section techwix-case-study-section section-padding-02">
    <div class="container">
        <div class="case-study-wrap" style="margin-top:5rem;">
            <div class="section-title text-center">
                <h3 class="sub-title">Concursos, Conferências, Exposição</h3>
                <h2 class="title">Arquitetura</h2>
            </div>
            <div class="case-study-content-wrap">
                <div class="swiper-container case-study-active">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <!-- Single Case Study Start -->
                            <div class="single-case-study">
                                <div class="case-study-img">
                                    <a href="/concurso-de-ideias"><img src="{{ asset('img/conjunto/concurso_ideias.png')}}" alt=""></a>
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
                                    <a href="/arquitetura_conferencias"><img src="{{ asset('arquitetura/52723325495_c23030dd88_c.jpg')}}" alt=""></a>
                                </div>
                                <div class="case-study-content">
                                    <h3 class="title"><a href="/arquitetura_conferencias">Conferências</a></h3>

                                </div>
                            </div>
                            <!-- Single Case Study End -->
                        </div>
                        <div class="col-md-4">
                            <!-- Single Case Study Start -->
                            <div class="single-case-study">
                                <div class="case-study-img">
                                    <a href="/arquitetura_exposicao"><img src="{{ asset('arquitetura/52731919844_c875c2b7c7_c.jpg')}}" alt=""></a>
                                </div>
                                <div class="case-study-content">
                                    <h3 class="title"><a href="/arquitetura_exposicao">Exposição- Saber Fazer</a></h3>

                                </div>
                            </div>
                            <!-- Single Case Study End -->
                        </div>
                        <div class="col-md-4">
                            <!-- Single Case Study Start -->
                            <div class="single-case-study" style="margin-top:1.5rem;">
                                <div class="case-study-img">
                                    <a href="/corrida-de-cursos"><img src="{{ asset('img/fotos/mat.jpg') }}"
                                            alt=""></a>
                                </div>
                                <div class="case-study-content">
                                    <h3 class="title"><a href="/corrida-de-cursos">Corrida de Cursos</a></h3>

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

@extends('layouts.app2')

@section('content')
<div class="section techwix-case-study-section section-padding-02">
    <div class="container">
        <div class="case-study-wrap" style="margin-top:5rem;">
            <div class="section-title text-center">
                <h3 class="sub-title">Eventos</h3>
                <h2 class="title">Os nossos eventos...</h2>
            </div>
            <div class="case-study-content-wrap">
                <div class="swiper-container case-study-active">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <!-- Single Case Study Start -->
                            <div class="single-case-study">
                                <div class="case-study-img">
                                    <a href="/eventos/arquitetura"><img src="img/conjunto/arq.png" alt=""></a>
                                </div>
                                <div class="case-study-content">
                                    <h3 class="title"><a href="/eventos/arquitetura">Arquitetura</a></h3>
                                    <p>Concursos, Conferências, Exposição</p>
                                </div>
                            </div>
                            <!-- Single Case Study End -->
                        </div>
                        <div class="col-md-4">
                            <!-- Single Case Study Start -->
                            <div class="single-case-study">
                                <div class="case-study-img">
                                    <a href="/eventos/tecnologias"><img src="img/conjunto/tech.png" alt=""></a>
                                </div>
                                <div class="case-study-content">
                                    <h3 class="title"><a href="/eventos/tecnologias">Tecnologia</a></h3>
                                    <p>Concursos, Conferências, Workshops</p>
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

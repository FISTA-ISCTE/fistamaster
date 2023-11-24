@extends('layouts.app2')

@section('content')
<div class="section techwix-case-study-section section-padding-02">
    <div class="container">
        <div class="case-study-wrap" style="margin-top:5rem;">
            <div class="section-title text-center">
                <h3 class="sub-title">Tecnologias</h3>
                <h2 class="title">Concursos, Conferências, Workshops</h2>
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
                    </div>

                    <!-- Add Pagination -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Case Study End -->
@endsection

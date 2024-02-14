@extends('layouts.app2')

@section('content')
    <!-- Adicione na seção <head> do seu arquivo HTML -->

    <div class="section page-banner-section" style="background-color: white;min-height:15rem;">
        <div class="container">
            <div class="page-banner" style="margin-top:5rem;">
                <div class="row text-left">
                    <h1 class="titl" style="color:black;"></h1>
                </div>
            </div>

            <div class="choose-us-wrap">
                <div class="section-title text-center">
                    <h3 class="sub-title">Dia 22 de Fevereiro no Grande Auditório, Iscte</h3>
                    <h2 class="title">Conferências</h2>
                </div>
                <div class="choose-us-content-wrap">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <!-- Choose Us Item Start -->
                            <div class="choose-us-item">
                                <div class="choose-us-img">
                                    <a href="choose-us.html"><img src="assets/images/choose-us1.jpg" alt=""></a>
                                    <div class="choose-us-content">
                                        <h3 class="title">"Por trás das odds"</h3>
                                        <p>Às 11h de dia 22 de fevereiro, a conferência irá mergulhar no universo da Kaizen Gaming, a empresa por trás da Betano e patrocinadora oficial do EURO2024.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Choose Us Item End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- Choose Us Item Start -->
                            <div class="choose-us-item">
                                <div class="choose-us-img">
                                    <a href="choose-us.html"><img src="assets/images/choose-us2.jpg" alt=""></a>
                                    <div class="choose-us-content">
                                        <h3 class="title">Information Database Security</h3>
                                        <p>Accelerate innovation with world-class tech teams We’ll match you to an entire
                                            remote
                                            team of incredible freelance talent for all your software development needs.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Choose Us Item End -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app2')

@section('content')
    <div class="section page-banner-section"
        style="background: url(https://fista.iscte-iul.pt/img/fotobecomeapartner.jpg); background-size: cover;min-height:15rem;">
        <div class="container">
            <div class="page-banner" style="margin-top:0.5%;margin-bottom:5%;">
                <div class="row text-center">
                    <h2 class="title" style="color:black;text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);">Empresas</h2>
                </div>

            </div>
        </div>
    </div>
    <style>
        .logo-premium,
        .logo-gold,
        .logo-silver {
            display: block;
            width: 100%;
            max-width: 100%;
            height: auto;
        }

        .logo-premium {
            max-width: 200px;
            max-height: 190px;
        }

        .logo-gold {
            max-width: 130px;
            max-height: 120px;
        }

        .logo-silver {
            max-width: 90px;
            max-height: 80px;
        }
    </style>
    <div class="container mt-5">
        <!-- Premium Plan -->
        @if ($countpremium != 0)
            <h2 class="mb-3">Plano Premium</h2>
            <div class="row mb-5">
                <!-- Premium Logo -->
                @foreach ($empresaspremium as $empresapremium)
                    <div class="col-md-3 mb-4">
                        <img src="https://fista.iscte-iul.pt/storage/users/empresas/201698210271.jpg" alt="Logo Empresa 1"
                            class="logo-premium">
                    </div>
                @endforeach
                <!-- ... repetir conforme necessário ... -->
            </div>
        @endif

        <!-- Gold Plan -->
        @if ($countgold != 0)
            <h2 class="mb-3">Plano Gold</h2>
            <div class="row mb-5">
                <!-- Gold Logo -->
                @foreach ($empresasgold as $empresagold)
                    <div class="col-md-3 mb-3">
                        <img src="https://fista.iscte-iul.pt/storage/users/empresas/201698210271.jpg" alt="Logo Empresa 2"
                            class="logo-gold">
                    </div>
                @endforeach


                <!-- ... repetir conforme necessário ... -->
            </div>
        @endif
        <!-- Silver Plan -->
        @if ($countsilver != 0)
            <h2 class="mb-3">Plano Silver</h2>
            <div class="row mb-5">
                <!-- Silver Logos -->
                @foreach ($empresassilver as $empresasilver)
                    <div class="col-md-2 mb-2">
                        <img src="https://fista.iscte-iul.pt/storage/users/empresas/201698210271.jpg" alt="Logo Empresa 3"
                            class="logo-silver">
                    </div>
                @endforeach
                <!-- ... repetir conforme necessário ... -->
            </div>
        @endif
    </div>
@endsection

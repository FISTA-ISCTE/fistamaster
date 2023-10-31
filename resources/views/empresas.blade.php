@extends('layouts.app2')

@section('content')
    <div class="section page-banner-section" style="background-color: white;min-height:15rem;">
        <div class="container">
            <div class="page-banner" style="margin-top:0.5%;margin-bottom:5%;">
                <div class="row text-left">
                    <h1 class="titl" style="color:black;">Empresas</h1>
                </div>

            </div>
        </div>
    </div>
    <style>
        .logo-card {
            display: flex;
            justify-content: center;
            align-items: center;
            border: none;
        }

        .logo-premium,
        .logo-gold,
        .logo-silver {
            display: block;
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
                    <div class="shadow col-md-3 mb-4 d-flex justify-content-center">
                        <div class="card logo-card">
                            <img src="{{ asset('storage/' . $empresapremium->avatar) }}" alt="Logo Empresa 1"
                                class="card-img-top logo-premium">
                        </div>
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
                    <div class="shadow col-md-3 mb-3 d-flex justify-content-center">
                        <div class="card logo-card">
                            <img src="{{ asset('storage/' . $empresagold->avatar) }}" alt="Logo Empresa 2"
                                class="card-img-top logo-gold">
                        </div>
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
                    <div class="shadow col-md-2 mb-2 d-flex justify-content-center">
                        <div class="card logo-card">
                            <img src="{{ asset('storage/' . $empresasilver->avatar) }}" alt="Logo Empresa 3"
                                class="card-img-top logo-silver">
                        </div>
                    </div>
                @endforeach
                <!-- ... repetir conforme necessário ... -->
            </div>
        @endif
    </div>



@endsection

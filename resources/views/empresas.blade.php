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
        .btn {
            border: none !important;
            outline: none !important;
            padding: 12px 16px !important;
            background-color: white !important;
            cursor: pointer !important;
        }

        .btn:hover {
            background-color: #ddd !important;
        }

        .btn.active {
            background-color: #666 !important;
            color: white !important;
        }

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
        @if ($countdiamount != 0)
            <h2
                style="margin:none !important;paddin-bottom:0.5rem;background-color:#1EC4BD;text-align:center;color:white;border-radius: 25px;">
                Diamond</h2>
            <hr>
            <div class="row justify-content-center" style="margin:0;margin-bottom:10%">
                <!-- Premium Logo -->
                @foreach ($empresasdiamount as $empresadiamount)
                    <div class='col-md-4 text-center column cars' style="margin-left: auto;margin-right: auto; padding:10px;">
                        <a <?php if (!empty($empresadiamount->website)) {
                            echo "href='$empresadiamount->website'";
                        } ?> style="width:100%;padding-left:7%;padding-right:7%">
                            <div class="card"
                                style="margin-bottom:15px;width:100%;-webkit-box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);">
                                <img src="{{ asset('storage/' . $empresadiamount->avatar) }}" alt="Logo Empresa 1"
                                    class="imgEmpresaDiamond" style="object-fit:contain">
                            </div>
                        </a>
                    </div>
                @endforeach
                <!-- ... repetir conforme necessário ... -->
            </div>
        @endif
        <!-- Premium Plan -->
        @if ($countpremium != 0)
            <h2
                style="margin:none !important;paddin-bottom:0.5rem;background-color:#4FAD32;text-align:center;color:white;border-radius: 25px;">
                Premium</h2>
            <hr>
            <div class="row justify-content-center" style="margin:0;margin-bottom:5%">
                <!-- Premium Logo -->
                @foreach ($empresaspremium as $empresapremium)
                    <div class='col-md-3 text-center' style="margin-left: auto;margin-right: auto; padding:10px;">
                        <a <?php if (!empty($empresapremium->website)) {
                            echo "href='$empresapremium->website'";
                        } ?> style="width:100%;padding-left:7%;padding-right:7%">
                            <div class="card"
                                style="margin-bottom:15px;width:100%;-webkit-box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);">
                                <img src="{{ asset('storage/' . $empresapremium->avatar) }}" class="imgEmpresaPremium"
                                    style="object-fit:contain">

                            </div>
                        </a>
                    </div>
                @endforeach
                <!-- ... repetir conforme necessário ... -->
            </div>
        @endif

        <!-- Gold Plan -->
        @if ($countgold != 0)
            <h2 style="background-color:#FFCC66;text-align:center;color:white;border-radius: 25px;">Gold</h2>
            <hr>
            <div class="row justify-content-center" style="margin:0;margin-bottom:5%">
                <!-- Gold Logo -->
                @foreach ($empresasgold as $empresagold)
                    <div class='col-md-3 d-flex justify-content-center'>
                        <a <?php if (!empty($empresagold->website)) {
                            echo "href='$empresagold->website'";
                        } ?> style="width:100%;padding-left:7%;padding-right:7%">
                            <div class="card"
                                style="margin-bottom:15px;width:100%;-webkit-box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);">
                                <img src="{{ asset('storage/' . $empresagold->avatar) }}" alt="Logo Empresa 2"
                                    class="imgEmpresaGold" style="object-fit:contain">
                            </div>
                        </a>
                    </div>
                @endforeach
                <!-- ... repetir conforme necessário ... -->
            </div>
        @endif

        <!-- Silver Plan -->
        @if ($countsilver != 0)
            <h2
                style="margin:none !important;paddin-bottom:0.5rem;background-color:#c0c0c0;color:white;text-align:center;border-radius: 25px;">
                Silver</h2>
            <hr>
            <div class="row justify-content-center" style="margin:0">
                <!-- Silver Logos -->
                @foreach ($empresassilver as $empresasilver)
                    <div class='col-md-2 d-flex justify-content-center' style="margin-left: auto;margin-right: auto;">
                        <a <?php if (!empty($empresasilver->website)) {
                            echo "href='$empresasilver->website'";
                        } ?> style="width:100%;padding-left:7%;padding-right:7%">
                            <div class="card"
                                style="margin-bottom:15px;width:100%;-webkit-box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);">
                                <img src="{{ asset('storage/' . $empresasilver->avatar) }}" alt="Logo Empresa 3"
                                    class="imgEmpresaSilver" style="object-fit:contain">
                            </div>
                        </a>
                    </div>
                @endforeach
                <!-- ... repetir conforme necessário ... -->
            </div>
        @endif
    </div>

    <style>
        .imgEmpresaDiamond {
            display: inline-block;
            padding: 0 20px;
            margin-bottom: 10%;
            margin-top: 10%;
            height: 140px;
            position: relative;
        }

        .imgEmpresaPremium {
            display: inline-block;
            padding: 0 20px;
            margin-bottom: 10%;
            margin-top: 10%;
            height: 120px;
            position: relative;
        }

        .imgEmpresaGold {
            display: inline-block;
            padding: 0 20px;
            margin-bottom: 10%;
            margin-top: 10%;
            height: 100px;
            position: relative;
        }

        .imgEmpresaSilver {
            display: inline-block;
            padding: 0 20px;
            margin-bottom: 7%;
            margin-top: 7%;
            height: 80px;
            position: relative;
        }
    </style>

@endsection

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

        .form-check-input:checked {
            background-color: #1EC4BD;
            border-color: #1EC4BD;
        }
    </style>


    <div class="container mt-5">


        <!-- <div class="row pb-4 justify-content-center">
                <div class="col-auto">

                    <button class="btn-filter">
                        <h4 id="filter">28</h4>
                        <p>Fevereiro</p>
                    </button>
                    <button class="btn-filter">
                        <h4>28</h4>
                        <p>Fevereiro
                        </p>
                    </button>
                    <button class="btn btn-primary">
                        <h4>28</h4>
                        <p>Fevereiro
                        </p>
                    </button>
                </div>


            </div> -->


        <div class="row justify-content-center pb-4">

            <div class="col-md-3 p-0 d-flex justify-content-center">

                <div class="form-check p-0 ">
                    <label class="form-check-label" style="line-height:1.25;display:inline-flex" for="exampleRadios1">
                        Todos os dias
                    </label>
                    <input class="form-check-input" style="margin-left:0.5rem" type="radio" onclick="filterData('todos')"
                        name="exampleRadios">
                </div>
            </div>
            <div class="col-md-3 p-0 d-flex justify-content-center">

                <div class="form-check p-0 ">
                    <label class="form-check-label" style="line-height:1.25;display:inline-flex" for="exampleRadios1">
                        28 Fevereiro
                    </label>
                    <input class="form-check-input" style="margin-left:0.5rem" type="radio" onclick="filterData('dia1')"
                        name="exampleRadios">
                </div>
            </div>
            <div class="col-md-3 p-0 d-flex justify-content-center">

                <div class="form-check p-0">
                    <label class="form-check-label" style="line-height:1.25;display:inline-flex" for="exampleRadios1">
                        29 Fevereiro
                    </label>
                    <input class="form-check-input" style="margin-left:0.5rem" type="radio" onclick="filterData('dia2')"
                        name="exampleRadios">
                </div>
            </div>


        </div>











        <!-- <div class="row justify-content-center pb-4"> -->
        <!--
            <div class="row">

                <ul style="display:flex;padding:0;margin:0; list-style:none;">
                    <li>
                        <button class="btn">
                            <p style="font-size: 2rem;bold;margin:0">28</p>
                            <p style="font-size: 0.7rem; margin:0">fevereiro</p>
                        </button>
                    </li>
                    <li>
                        <button  >
                            <p style="font-size: 2rem;bold;margin:0">28</p>
                            <span style="font-size: 0.7rem; margin:0">fevereiro</span>
                        </button>
                    </li>
                    <li>
                        <a href="#" type="button"   >
                            <p style="font-size: 2rem;bold;margin:0">28</p>
                            <p style="font-size: 0.7rem; margin:0">fevereiro</p>
                        </a>
                    </li>
                </ul>
            </div> -->
        <!-- <div class="col-auto">
                    -->
        <!-- <button class="btn btn-primary btn-sm" onclick="filterData('todos')">Todos os dias</button> -->

        <!-- <button class="btn btn-primary btn-sm" onclick="filterData('dia1')"></button>
                    <button class="btn btn-primary btn-sm" onclick="filterData('dia2')">Dia 29</button> -->
        <!-- </div> -->
        <!-- </div> -->
        @if ($countdiamount != 0)
            <h2
                style="margin:none !important;paddin-bottom:0.5rem;background-color:#1EC4BD;text-align:center;color:white;border-radius: 25px;">
                Diamond</h2>
            <hr>
            <div class="row justify-content-center" style="margin:0;margin-bottom:10%">
                <!-- Premium Logo -->
                @foreach ($empresasdiamount as $empresadiamount)
                    <div class="col-md-4 text-center column cars <?php if(isset($empresadiamount->dia1)){ echo "calendario-dia1";} if(isset($empresadiamount->dia1)){ echo "calendario-dia2";} ?>"
                        style="margin-left: auto; margin-right: auto; padding: 10px;">
                        <a <?php if (!empty($empresadiamount->website)) {
                            echo "href='$empresadiamount->website'";
                        } ?> style="width:100%;padding-left:7%;padding-right:7%">
                            <div class="card" data-toggle="tooltip" data-placement="bottom"
                                title="
                                <?php

                                if (is_null($empresadiamount->dia1) && is_null($empresadiamount->dia2)) {
                                    // Se ambos dia1 e dia2 são nulos
                                    echo 'Nenhum dia está definido.';
                                } elseif (is_null($empresadiamount->dia1) || is_null($empresadiamount->dia2)) {
                                    // Se um dos dias é nulo
                                    $diaDisponivel = is_null($empresadiamount->dia1) ? $empresadiamount->dia2 : $empresadiamount->dia1;
                                    echo 'Presente no dia ' . $diaDisponivel;
                                } else {
                                    // Se ambos os dias estão definidos
                                    echo 'Presente nos dias ' . $empresadiamount->dia1 . ' e ' . $empresadiamount->dia2;
                                }
                                ?>
                                "
                                style="margin-bottom:15px;width:100%;-webkit-box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.51);">
                                <img src="{{ asset('storage/' . $empresadiamount->avatar) }}" class="imgEmpresaDiamond"
                                    style="object-fit:contain">


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
                    @isset($empresapremium->dia1)
                        <div class='col-md-3 text-center calendario-dia1'
                            style="margin-left: auto;margin-right: auto; padding:10px;">
                        @else
                            <div class='col-md-3 text-center calendario-dia2'
                                style="margin-left: auto;margin-right: auto; padding:10px;">
                            @endisset
                            <a <?php if (!empty($empresapremium->website)) {
                                echo "href='$empresapremium->website'";
                            } ?> style="width:100%;padding-left:7%;padding-right:7%">
                                <div class="card" data-toggle="tooltip" data-placement="bottom"
                                    title="
                                <?php

                                if (is_null($empresapremium->dia1) && is_null($empresapremium->dia2)) {
                                    // Se ambos dia1 e dia2 são nulos
                                    echo 'Nenhum dia está definido.';
                                } elseif (is_null($empresapremium->dia1) || is_null($empresapremium->dia2)) {
                                    // Se um dos dias é nulo
                                    $diaDisponivel = is_null($empresapremium->dia1) ? $empresapremium->dia2 : $empresapremium->dia1;
                                    echo 'Presente no dia ' . $diaDisponivel;
                                } else {
                                    // Se ambos os dias estão definidos
                                    echo 'Presente nos dias ' . $empresapremium->dia1 . ' e ' . $empresapremium->dia2;
                                }
                                ?>
                                "
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
                    @isset($empresagold->dia1)
                        <div class='col-md-3 d-flex justify-content-center calendario-dia1'>
                        @else
                            <div class='col-md-3 d-flex justify-content-center calendario-dia2'>
                            @endisset
                            <a <?php if (!empty($empresagold->website)) {
                                echo "href='$empresagold->website'";
                            } ?> style="width:100%;padding-left:7%;padding-right:7%">
                                <div class="card" data-toggle="tooltip" data-placement="bottom"
                                    title="
                                <?php

                                if (is_null($empresagold->dia1) && is_null($empresagold->dia2)) {
                                    // Se ambos dia1 e dia2 são nulos
                                    echo 'Nenhum dia está definido.';
                                } elseif (is_null($empresagold->dia1) || is_null($empresagold->dia2)) {
                                    // Se um dos dias é nulo
                                    $diaDisponivel = is_null($empresagold->dia1) ? $empresagold->dia2 : $empresagold->dia1;
                                    echo 'Presente no dia ' . $diaDisponivel;
                                } else {
                                    // Se ambos os dias estão definidos
                                    echo 'Presente nos dias ' . $empresagold->dia1 . ' e ' . $empresagold->dia2;
                                }
                                ?>
                                "
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
                    @isset($empresasilver->dia1)
                        <div class='col-md-2 d-flex justify-content-center calendario-dia1'
                            style="margin-left: auto;margin-right: auto;">
                        @else
                            <div class='col-md-2 d-flex justify-content-center calendario-dia2'
                                style="margin-left: auto;margin-right: auto;">
                            @endisset
                            <a <?php if (!empty($empresasilver->website)) {
                                echo "href='$empresasilver->website'";
                            } ?> style="width:100%;padding-left:7%;padding-right:7%">
                                <div class="card" data-toggle="tooltip" data-placement="bottom"
                                    title="
                                <?php

                                if (is_null($empresasilver->dia1) && is_null($empresasilver->dia2)) {
                                    // Se ambos dia1 e dia2 são nulos
                                    echo 'Nenhum dia está definido.';
                                } elseif (is_null($empresasilver->dia1) || is_null($empresasilver->dia2)) {
                                    // Se um dos dias é nulo
                                    $diaDisponivel = is_null($empresasilver->dia1) ? $empresasilver->dia2 : $empresasilver->dia1;
                                    echo 'Presente no dia ' . $diaDisponivel;
                                } else {
                                    // Se ambos os dias estão definidos
                                    echo 'Presente nos dias ' . $empresasilver->dia1 . ' e ' . $empresasilver->dia2;
                                }
                                ?>
                                "
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
    <script>
        function filterData(category) {
            // Get all data items
            var elementsDay1 = document.querySelectorAll('.calendario-dia1');
            var elementsDay2 = document.querySelectorAll('.calendario-dia2');
            var allElements = document.querySelectorAll('[class^="calendario-"]');
            console.log(elementsDay2);

            switch (category) {
                case "todos":
                    console.log(allElements);
                    elementsDay1.forEach(function(element) {
                        element.style.setProperty('display', 'block', 'important');
                    });
                    elementsDay2.forEach(function(element) {
                        element.style.setProperty('display', 'block', 'important');
                    });
                    break;
                case "dia1":
                    elementsDay1.forEach(function(element) {
                        element.style.setProperty('display', 'block', 'important');
                    });
                    elementsDay2.forEach(function(element) {
                        element.style.setProperty('display', 'none', 'important');
                    });
                    break;
                case "dia2":
                    elementsDay2.forEach(function(element) {
                        element.style.setProperty('display', 'block', 'important');
                    });
                    elementsDay1.forEach(function(element) {
                        element.style.setProperty('display', 'none', 'important');
                    });
                    break;
            }
        }
    </script>
@endsection

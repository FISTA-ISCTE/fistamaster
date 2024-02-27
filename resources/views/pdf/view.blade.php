<!DOCTYPE html>
<html>

<head>
    <title>Hi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <style>
    /* bebas-neue-regular - latin */
    @font-face {
        font-family: 'Bebas Neue';
        font-style: normal;
        font-weight: 400;
        src: url('../font/bebas-neue-v9-latin-regular.eot');
        /* IE9 Compat Modes */
        src: local(''),
            url('/font/bebas-neue-v9-latin-regular.eot?#iefix') format('embedded-opentype'),
            /* IE6-IE8 */
            url('../font/bebas-neue-v9-latin-regular.woff2') format('woff2'),
            /* Super Modern Browsers */
            url('../font/bebas-neue-v9-latin-regular.woff') format('woff'),
            /* Modern Browsers */
            url('../font/bebas-neue-v9-latin-regular.ttf') format('truetype'),
            /* Safari, Android, iOS */
            url('../font/bebas-neue-v9-latin-regular.svg#BebasNeue') format('svg');
        /* Legacy iOS */
    }

    img {
        position: absolute;
        top: 25px;
        left: 25px;
    }

    .img-responsive {
        z-index: 1;
    }

    .imgB1 {
        z-index: 3;
        top: 3.5rem;
        left: 3.4rem;
    }

    h3 {
        font-family:helvetica ;
        z-index: 3;
        position: absolute;
        font-weight: bold;
    }

    .cargo {
        top: 7.7rem;
        left: 13.7rem;
        text-transform: uppercase;
    }

    .nome {
        top: 10rem;
        left: 13.7rem;
        text-transform: uppercase;
    }

    h2 {
        font-family:helvetica;
        text-transform: uppercase;
        z-index: 3;
        position: absolute;
        top: 5rem;
        left: 13.7rem;
        font-weight: bold;
    }
    </style>
    <div class="">
        <div class="masthead-subheading">
            <img src="img/pdf2.jpg" class="img-responsive"
                style="width:23rem;height:33rem;border-width:1px; border-style:solid; border-color:#2f7fb0;" />
                <img class="imgB1" src="{{$foto}}" style="width:9.5rem;height:10rem !important;">
                {!! QrCode::size(200)->generate('Conteúdo do QR Code Aqui') !!}
                <h2 style="color:#e6d753;">TESTE</h2>
            <h3 class="cargo" style="color:#ffffff;"> Teste </h3>

            <h3 class="nome" style="color:#ffffff;">teste</h3>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>

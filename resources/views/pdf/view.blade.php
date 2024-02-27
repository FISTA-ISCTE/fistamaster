<!DOCTYPE html>
<html>

<head>
    <title>Hi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <style>
        /* bebas-neue-regular - latin */


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
            font-family: helvetica;
            z-index: 3;
            position: absolute;
            font-weight: bold;
        }

        .cargo {
            top: 80%;
            left: 9.7rem;
            color: black;
            text-transform: uppercase;
        }

        .nome {
            top: 10rem;
            left: 13.7rem;
            text-transform: uppercase;
        }

        h2 {
            font-family: helvetica;
            text-transform: uppercase;
            z-index: 3;
            position: absolute;
            top: 5rem;
            left: 13.7rem;
            font-weight: bold;
        }

        .qr-code {
            position: absolute;
            z-index: 2;
            /* Adjust these values to center the QR Code */
            top: 53%;
            /* Center vertically */
            left: 17%;
            /* Center horizontally */
            transform: translate(-50%, -50%);
            /* Adjust based on QR size to center exactly */
        }
    </style>

    <div class="row">
        <div class="col-md-6">
            <div class="masthead-subheading">
                <img src="img/pdf2.jpg" class="img-responsive"
                    style="width:23rem;height:33rem;border-width:1px; border-style:solid; border-color:#2f7fb0;" />
                <div class="qr-code">
                    {!! QrCode::size(200)->generate($token->token) !!}
                </div>
                <h3 class="cargo" style="font-size:1rem;width:8rem"> {{ $token->empresa->nome_empresa }}</h3>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

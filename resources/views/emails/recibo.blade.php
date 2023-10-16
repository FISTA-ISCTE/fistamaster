
<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .email-card {
            width: 80%;
            margin: 50px auto;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="email-card">
        <div class="logo">
            <img src="{{asset('img/fista/original_fista.png')}}" alt="Logotipo FISTA'24" height="40">
        </div>
        <h4>A empres {{$nome}} inscreveu-se!</h4>
        <p>Vê mais sobre a nova empresa inscrita <a href="https://fista.iscte-iul.pt/admin/empresas/{{$id}}">AQUI</a>.</p>
        <p>Email gerado automáticamente pelo website</p>
    </div>
</body>
</html>


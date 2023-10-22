
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
        <h2>Bem-vindo(a) à plataforma do FISTA24</h2>
        <p>Estamos satisfeitos em informar que a inscrição da sua empresa foi aceite com sucesso!</p>

        <p>Para concluir o processo de registo, por favor, <a href="htpps://fista.iscte-iul.pt/registar-user?empresa={{$id}}" class="btn">htpps://fista.iscte-iul.pt/registar-user?empresa={{$id}}</a>.</p>

        <h3>Nota Importante</h3>
        <p>O cancelamento é gratuito até 31 de dezembro de 2023. No entanto, após essa data aplicam-se as seguintes condições:</p>
        <ul>
            <li>Até 1 mês antes da data do evento, a empresa deverá pagar 20% do valor da inscrição efetuada.</li>
            <li>A menos de 1 mês do evento, há lugar a uma compensação no valor de 50% da inscrição efetuada.</li>
            <li>O cancelamento a menos de uma semana do evento e daí para a frente, implica o pagamento de 75% do pacote previamente escolhido.</li>
        </ul>

        <p>Relembramos que tem um mês para concluir o preenchimento dos dados de faturação na plataforma.</p>

        <p>Cumprimentos,<br>Equipa FISTA</p>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email FISTA'24</title>
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
        <h3>{{ $mail }},</h3>
        <h4><strong>Bem-vindo ao FISTA24!</strong></h4>
        <p>Agradecemos pelo seu registo. Informamos que a sua inscrição foi efetuada com <strong>sucesso</strong> e está atualmente sob revisão pela nossa equipa.</p>
        <p>Tal como foi apresentado através da página “Become a Partner” do nosso website, tendo sido selecionado o tipo de plano <strong>{{$plano}}</strong>, o valor do orçamento corresponderá a <strong>{{ $preco }}+IVA</strong>.</p>
        <p>Assim que a sua inscrição for verificada e aprovada, enviar-lhe-emos um e-mail de confirmação com todas as informações e passos necessários para a sua participação no FISTA24.</p>
        <p>Entendemos a importância deste evento para a sua empresa e estamos a trabalhar para garantir que tudo corra da melhor forma possível. Agradecemos a sua paciência e compreensão durante este processo de verificação.</p>
        <p>Se tiver alguma dúvida ou necessitar de esclarecimentos adicionais, por favor, não hesite em contactar-nos. Estamos à disposição para ajudar.</p>
        <p>Cumprimentos,<br>Organização FISTA'24.</p>
    </div>
</body>
</html>

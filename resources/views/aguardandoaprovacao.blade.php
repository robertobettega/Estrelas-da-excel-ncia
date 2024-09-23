<!-- aguardando_aprovacao.html -->
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aguardando Aprovação</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom/style.css') }}">
</head>

<body>

    <div class="container" style="margin-top: 40px">
        <img class="logo2 img-fluid" src="{{ asset('images/Logo Hospital Rio Grande.png') }}" alt="Logo">
        <img class="img-fluid" src="images/LOGO.png" alt="logo" style="height: 100px">
    </div>

    <div class="container text-center">
        <div class="card justify-content-center" style="margin: 40px; padding: 40px">
            <h1>Agradecemos pelo seu cadastro!</h1>
            <p>Seu login foi enviado para aprovação e em breve será liberado!</p>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            
            <button class="entrar" id="sairaprovacao" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Voltar a tela inicial
            </button>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css\custom\style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/your-project-id.css">
</head>
<style>
    .input-with-icon {
        background-image: url('images/Icone Usuario.png');
        /* Caminho corrigido */
    }

    .input-with-icon2 {
        background-image: url('images/Icone Cadeado.png');
        /* Caminho corrigido */
    }

    .input-with-icon::placeholder,
    .input-with-icon2::placeholder {
        color: #1C2C5C;
        font-size: 14px;
    }
</style>

<body>
    <header class="text-center ">
        <img class="logo img-fluid" src="{{ asset('images/Logo Hospital Rio Grande.png') }}" alt="Logo">
        <div class="text-container" style="font-family: 'ITC Avant Garde Gothic', sans-serif;">
            <h1 class="h11">ESTRELAS DA</h1>
            <h1 class="h12">EXCELÊNCIA</h1>
        </div>

    <div class="image-container">
    <img class="logo img-fluid" src="{{ asset('images/Hospitalidade.png') }}" alt="Hospitalidade">
    <img class="logo img-fluid" src="{{ asset('images/Prestreza.png') }}" alt="Prestreza">
    <img class="logo img-fluid" src="{{ asset('images/Inovacao.png') }}" alt="Inovação">
    <img class="logo img-fluid" src="{{ asset('images/Seguranca.png') }}" alt="Segurança">
    </div>

        <div>
            <h2>Consolidando nossa excelência</h2>
        </div>
        <div class="divisoria">
            <img src="{{ asset('images/Divisória Degradê (5).png') }}">
        </div>

    </header>
</body>
<main>

    <div class="container">
        <div class="input-container">
            <input type="text" class="input-with-icon" placeholder="Usuário">
        </div>
        <div class="container">
            <div class="input-container">
                <input type="password" id="password-field" class="input-with-icon2" placeholder="Senha">
                <img src="{{ asset('images/Icone Olho.png') }}" id="toggle-password" alt="Ícone Olho">
            </div>
        </div>

        <button class="entrar"><a href="home" style="color: white; text-decoration: none"><b>ENTRAR<b></a></button>

        <h5><a href="cadastro">Novo Usuário?Faça aqui seu cadastro</a></h5>

    </div>



</main>

<footer> <img src="{{ asset('images/Group 1 (3).png') }}" alt=""></footer>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const passwordField = document.getElementById('password-field');
        const togglePassword = document.getElementById('toggle-password');

        togglePassword.addEventListener('click', function() {
            // Alterna entre mostrar e esconder a senha
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                togglePassword.src =
                '{{ asset('images/Icone Olho.png') }}'; // Atualiza para ícone de olho fechado
            } else {
                passwordField.type = 'password';
                togglePassword.src =
                '{{ asset('images/Icone Olho Fechado.png') }}'; // Atualiza para ícone de olho aberto
            }
        });
    });
</script>
</body>

</html>

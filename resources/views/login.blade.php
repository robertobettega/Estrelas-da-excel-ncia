<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css\custom\style.css') }}">
</head>
<style>

.input-with-icon {
    background-image: url('images/Icone Usuario.png'); /* Caminho corrigido */
}

.input-with-icon2 {
    background-image: url('images/Icone Cadeado.png'); /* Caminho corrigido */
}

.input-with-icon::placeholder, .input-with-icon2::placeholder {
    color: #1C2C5C;
    font-size: 14px;
}

html,body{
    overflow: hidden;
}

</style>
<body>
<header class="text-center ">
    <img class="logo img-fluid" src="{{ asset('images/Logo Hospital Rio Grande.png') }}" alt="Logo">
    <div class="text-container">
        <h1 class="h11">ESTRELAS DA</h1>
        <h1 class="h12">EXCELÊNCIA</h1>
    </div>

    <div class="image-container">
    <img class="logo img-fluid" src="{{ asset('images/Hospitalidade.png') }}" alt="Hospitalidade">
    <img class="logo img-fluid" src="{{ asset('images/Prestreza.png') }}" alt="Prestreza">
    <img class="logo img-fluid" src="{{ asset('images/Inovação.png') }}" alt="Inovação">
    <img class="logo img-fluid" src="{{ asset('images/Segurança.png') }}" alt="Segurança">
    </div>

<div>
    <h2>Consolidando nossa excelência</h2>
</div>
<div class="divisoria">
<img src="{{ asset('images/Divisória Degradê (5).png') }}" alt="">
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
            <input type="password"  id="password-field" class="input-with-icon2" placeholder="Senha">
            <img src="{{ asset('images/Icone Olho.png') }}" id="toggle-password" alt="Ícone Olho">
        </div>
    </div>

    <button class="entrar">ENTRAR</button>
   
    <h4><a href="cadastro">Novo Usuário?Faça aqui seu cadastro</a></h4>

</div>



</main>

<footer> <img src="{{ asset('images/Group 1 (3).png') }}" alt=""></footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
            const passwordField = document.getElementById('password-field');
            const togglePassword = document.getElementById('toggle-password');

            togglePassword.addEventListener('click', function () {
                // Alterna entre mostrar e esconder a senha
                if (passwordField.type === 'password') {
                    passwordField.type = 'text';
                    togglePassword.src = '{{ asset('images/Icone Olho.png') }}'; // Atualiza para ícone de olho fechado
                } else {
                    passwordField.type = 'password';
                    togglePassword.src = '{{ asset('images/Icone Olho Fechado.png') }}'; // Atualiza para ícone de olho aberto
                }
            });
    });
    </script>
</body>
</html>
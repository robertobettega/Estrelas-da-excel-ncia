<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;700&display=swap">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css\custom\style.css') }}">
</head>
<style>

.input-with-icon {
    background-image: url('images/Icone Usuario.png'); /* Caminho corrigido */
}

.input-with-icon2 {
    background-image: url('images/Icone Cadeado.png'); /* Caminho corrigido */
}


.input-with-icon3 {
    background-image: url('images/Icone Email.png'); /* Caminho corrigido */
}

.input-with-icon4 {
    background-image: url('images/Icone CPF.png'); /* Caminho corrigido */
}

.input-with-icon::placeholder, .input-with-icon2::placeholder, .input-with-icon3::placeholder, .input-with-icon4::placeholder {
    color: #1C2C5C;
    font-size: 14px;
}

html,body{
    overflow: hidden;
}

</style>
<body>

<nav class="navbar navbar-expand-lg custom-navbar">
        <img class="logo2" src="{{ asset('images/Logo Hospital Rio Grande.png') }}" alt="">
        <div class="d-flex flex-column align-items-center mx-auto">
            <a class="navbar-brand" href="#"><strong>Estrelas da</strong></a>
            <a class="navbar-brand" href="#"><strong>EXCELÊNCIA</strong></a>
        </div>
       <span ></span>
</nav>
   

<div class="text-center divisoria">
<h2><strong>Cadastro de Usuário</strong></h2>
<img src="{{ asset('images/Divisória Degradê (5).png') }}" alt="">
</div>


<main>

<div class="container mb-5">
    <div class="input-container">
        <input type="text" class="input-with-icon" placeholder="Usuário">
    </div>
    <div class="input-container">
        <input type="text" class="input-with-icon3" placeholder="E-mail">
    </div>
    <div class="input-container">
        <input type="text" class="input-with-icon4" placeholder="CPF">
    </div>
    <div class="container">
        <div class="input-container">
            <input type="password"  id="password-field" class="input-with-icon2" placeholder="Senha">
            <img src="{{ asset('images/Icone Olho.png') }}" id="toggle-password" alt="Ícone Olho">
        </div>
    </div>

    <button id="register-button" class="cadastrar">CADASTRAR</button>
   

</div>
</div>



</main>

<footer class="footercadastro" > <img src="{{ asset('images/Group 1 (3).png') }}" alt=""></footer>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
<script>document.addEventListener('DOMContentLoaded', function () {
    const passwordField = document.getElementById('password-field');
    const togglePassword = document.getElementById('toggle-password');
    const registerButton = document.getElementById('register-button');

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

    registerButton.addEventListener('click', function () {
            // Redireciona para a página de aguardando aprovação
            window.location.href = '{{ route('aguardando.aprovacao') }}'; // Use a rota nomeada
        });
});
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<style>
html, body {
    height: 100%;
    margin: 0;
}

body {
    background-color: rgba(249, 244, 245, 0.95);
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* Ajusta o espaçamento entre o conteúdo e o rodapé */
}

header {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 10px;
}

.logo {
    width: 100px;
    height: auto;
}

.h11 {
    font-size: 24px;
    font-family: 'Crimson Text', serif;
    text-align: center;
    color: #000000;
}

.h12 {
    font-size: 40px;
    font-family: 'Crimson Text', serif;
    color: #13743C;
}

.image-container {
    display: flex;
    gap: 30px;
}

h2 {
    font-family: 'Crimson Text', serif;
    color: #1C2C5C;
}

.container {
    display: flex;
    flex-direction: column;
    gap: 10px;
    justify-content: center;
    align-items: center;
}

input[type="text"] {
    width: 340px;
    border: 3px solid #1C2C5C;
    border-radius: 12px;
    height: 60px;
}

.input-container {
    position: relative;
}

.input-with-icon, .input-with-icon2 {
    padding: 10px;
    width: 450px;
    border: 3px solid #1C2C5C;
    border-radius: 12px;
    height: 30px;
    background-repeat: no-repeat;
    background-position: 10px center;
    background-size: 25px 25px;
    padding-left: 40px;
    box-sizing: border-box;
}

.input-with-icon {
    background-image: url('images/Icone Usuario.png');
}

.input-with-icon2 {
    background-image: url('images/Icone Cadeado.png');
}

.input-with-icon::placeholder, .input-with-icon2::placeholder {
    color: #1C2C5C;
    font-size: 14px;
}

.entrar {
    background: linear-gradient(to right, #1C2C5C, #13743C);
    color: #FFFFFF;
    width: 280px;
    height: 50px;
    border-radius: 15px;
    border: 3px solid #1C2C5C;
    margin-top: 20px;
    font-size: 20px;
}

h4 {
    color: #1C2C5C;
}

footer {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    width: 100%;
    margin-top: auto; /* Garante que o rodapé fique na parte inferior da tela */
    padding: 10px; /* Ajuste o padding se necessário */
}

footer img {
    width: 100%;
    margin-top: -30px; /* Ajuste o valor conforme necessário para mover a imagem para cima */
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

</header>
</body>
<main>

<div class="container">
    <div class="input-container">
        <input type="text" class="input-with-icon" placeholder="Usuário">
    </div>
    <div class="input-container">
        <input type="text" class="input-with-icon2" placeholder="Senha">
    </div>

    <button class="entrar">ENTRAR</button>
   
    <h4>Novo Usuário?Faça aqui seu cadastro</h4>

</div>



</main>

<footer> <img src="{{ asset('images/Group 1 (2).png') }}" alt=""></footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
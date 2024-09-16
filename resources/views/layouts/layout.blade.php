<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Estrelas da excelência')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.0/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css\custom\style.css') }}">
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid">
            <a href="home">
                <img src="images/Logo Hospital Rio Grande.png" class="logo2" alt="Hospital Rio Grande">
            </a>
            <div class="dropdown">
                <button class="entrar-navbar" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                       <div>{{ Auth::user()->name }}<i class="bi bi-person-fill"></i></div>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="Cadastro">Meus dados</a></li>
                    <li><a class="dropdown-item" href="minhasestatisticas">Minhas estrelas</a></li>
                    <li><a class="dropdown-item" href="#">Ajuda</a></li>
                    <li><a class="dropdown-item" href="dashboard">Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content') <!-- Área onde o conteúdo das outras views será injetado -->
    </main>

    <footer style="margin-left: 0 !important; margin-top: 1em;">
        <div>Copyright © 2021 <a href="http://www.hospitalriogrande.com.br/" target="_blank">Hospital Rio Grande</a></div>. Todos os direitos reservados.
        <div class="float-right d-none d-sm-inline-block">
          <b>Versão</b> 0.0.1
        </div>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script src="{{ asset('js\custom\custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.0/dist/sweetalert2.all.min.js"></script>

    @stack('scripts')
</body>
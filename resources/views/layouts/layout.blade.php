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
    <link rel="stylesheet" href="https://use.typekit.net/your-project-id.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a href="home">
                <img src="images/Logo Hospital Rio Grande.png" class="logo2" alt="Hospital Rio Grande">
            </a>
            <div class="dropdown">
                <button class="entrar-navbar" class="navbar-toggler" type="button" data-bs-toggle="dropdown" data-bs-toggle="collapse" aria-expanded="false">
                       <div>{{ Auth::user()->name }}<i class="bi bi-person-fill"></i></div>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="profile">Meus dados</a></li>
                    <li><a class="dropdown-item" href="minhasestatisticas">Minhas estatísticas</a></li>
                    <li><a class="dropdown-item" href="estatisticas-rh">Estatísticas RH</a></li>
                    <li><a class="dropdown-item" href="#">Ajuda</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content') <!-- Área onde o conteúdo das outras views será injetado -->
    </main>

    <footer class="row justify-content-center text-center align-items-center" style="margin:15px">
        <div>Copyright © 2024 <a href="http://www.hospitalriogrande.com.br/" target="_blank" style="text-decoration: none">Hospital Rio Grande</a>. Todos os direitos reservados. Versão 0.0.1</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script src="{{ asset('js\custom\custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.0/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    @stack('scripts')
</body>
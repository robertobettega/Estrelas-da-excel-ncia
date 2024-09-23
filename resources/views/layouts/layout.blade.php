<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Estrelas da excelência')</title>
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
                    <li><a class="dropdown-item" href="profile">Meus dados</a></li>
                    <li><a class="dropdown-item" href="minhasestatisticas">Minhas estatísticas</a></li>

                    @if (Auth::user()->isAdmin())
                        <li><a class="dropdown-item" href="estatisticas-rh">Estatísticas RH</a></li>
                        <li><a class="dropdown-item" href="aprovacaorh">Aprovação RH</a></li>
                    @endif

                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#AjudaModal">Ajuda</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <li><a class="dropdown-item" href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <main>
        @yield('content') <!-- Área onde o conteúdo das outras views será injetado -->
    </main>

    <footer style="margin-top: 30px; font-weight:normal">
        <div class="d-flex flex-wrap text-center justify-content-center">
            <div class="col-11">Copyright © 2024 <a href="http://www.hospitalriogrande.com.br/" target="_blank">Hospital Rio Grande</a>. Todos os direitos reservados. Versão 0.0.1</div>
            <div class="col-1 align-items-end">
            <img src="images/GPConnect.svg" style="width: 100px">
            </div>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="AjudaModal" tabindex="-1" aria-labelledby="AjudaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header header-avaliacao">
                    <div>
                        <img src="{{ asset('images/Logo Hospital Rio Grande.png') }}"
                            style="width: 35px; margin-right: 15px" alt="Logo">
                    </div>
                    <h1 class="modal-title fs-5" id="AjudaModalLabel">Ajuda</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Card with Pillars Information -->
                    <div class="text-center">
                        <h2 class="mb-4"><i class="bi bi-question-circle"></i></h2>
                        <h5 class="mb-5"><i class="bi bi-star-fill"></i> Painel de Destaques dos Pilares</h5>
                    </div>

                    <div class="container">
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            @foreach ([['image' => 'Hospitalidade.png', 'title' => 'Hospitalidade', 'description' => 'Paixão por cuidar!', 'items' => ['Respeito', 'Comunicação', 'Confiança', 'Acolhimento', 'Carinho', 'Cuidado']], ['image' => 'Prestreza.png', 'title' => 'Presteza', 'description' => 'Agilidade com qualidade!', 'items' => ['Agilidade', 'Foco no Resultado', 'Análise', 'Qualidade']], ['image' => 'Inovacao.png', 'title' => 'Inovação', 'description' => 'Construir diferenciais!', 'items' => ['Criação', 'Desenvolvimento', 'Novas Experiências', 'Iniciativa', 'Empreendedorismo']], ['image' => 'Seguranca.png', 'title' => 'Segurança', 'description' => 'Cuidado em cada detalhe!', 'items' => ['Conformidade', 'Segurança', 'Padronização', 'Qualidade']]] as $pillar)
                                <div class="col">
                                    <figure class="text-center">
                                        <img src="images/{{ $pillar['image'] }}" alt="{{ $pillar['title'] }}"
                                            class="img-fluid" style="width: 100px; height: 100px;">
                                        <h3 class="mt-2" style="font-size: 18px;">{{ $pillar['title'] }}</h3>
                                        <p style="font-style: italic;font-weight:normal;">{{ $pillar['description'] }}
                                        </p>
                                        <ul class="mt-4 list-unstyled">
                                            @foreach ($pillar['items'] as $item)
                                                <li class="mt-1" style="font-weight:600;">{{ $item }}</li>
                                            @endforeach
                                        </ul>
                                    </figure>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Steps for Dedication -->
                    <div
                        style="text-align: center; padding: 20px; border-radius: 8px; margin: 20px auto; max-width: 1000px; background-color: #f8f9fa; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                        <h3 style="font-size: 1.5em; margin-bottom: 20px; color: #13743C;">Passos para dedicar uma
                            estrela:</h3>
                        <ul
                            style="list-style: none; padding: 0; margin: 0; text-align: left; display: inline-block; width: 100%; font-weight:normal;">
                            <li
                                style="padding: 10px; margin: 5px 0; font-size: 1.1em; color: #333; border-bottom: 1px solid #ddd; background-color: #fff;">
                                1. Clique no botão de excelência</li>
                            <li
                                style="padding: 10px; margin: 5px 0; font-size: 1.1em; color: #333; border-bottom: 1px solid #ddd; background-color: #fff;">
                                2. Escolha para quem dedicar a estrela</li>
                            <li
                                style="padding: 10px; margin: 5px 0; font-size: 1.1em; color: #333; border-bottom: 1px solid #ddd; background-color: #fff;">
                                3. Escolha a excelência</li>
                            <li
                                style="padding: 10px; margin: 5px 0; font-size: 1.1em; color: #333; border-bottom: 1px solid #ddd; background-color: #fff;">
                                4. Justifique a sua escolha</li>
                            <li
                                style="padding: 10px; margin: 5px 0; font-size: 1.1em; color: #333; background-color: #fff;">
                                5. Deixe uma dedicatória</li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Voltar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script src="{{ asset('js\custom\custom.js') }}"></script>
    <script src="{{ asset('js\custom\graficos.js') }}"></script>
    {{-- <script src="{{ asset('js\custom\aprovaruser.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.0/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('js\custom\canvasjs.min.js') }}"></script>
    @stack('scripts')
</body>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Estrelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom/style.css') }}">

</head>

<body>
    <nav class="navbar">
        <div class="container-fluid">
            <a href="home">
                <img src="images/Logo Hospital Rio Grande.png" class="logo2" alt="Hospital Rio Grande">
            </a>
            <div class="dropdown">
                <button class="entrar-navbar" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Roberto Bettega <i class="bi bi-person-fill"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="Cadastro">Meus dados</a></li>
                    <li><a class="dropdown-item" href="minhasestatisticas">Minhas estrelas</a></li>
                    <li><a class="dropdown-item" href="#">Ajuda</a></li>
                    <li><a class="dropdown-item" href="login">Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="card text-center justify-content-center">

        <div class="container content-container mt-3">
            <h2>Minhas Estatísticas</h2>
            <img src="images/Divisória Degradê (9).png" alt="">
            <h5>
                “Toda conquista, um dia, começou como <br> um sonho e uma ideia”
            </h5>
        </div>

        <div class="d-flex justify-content-evenly">
            <div class="col-4 justify-content-center">
                <label>Excelencia:</label>
                <div>
                    {{-- CAIXA DE OPÇÕES QUE PEGA AS EXCELÊNCIAS --}}

                    <select class="col form-select col-6" aria-label="Selecione o Usuário" id="caixaexcelencia">
                        <option selected>Selecione a excelencia</option>
                        <option>Hospitalidade</option>
                        <option>Prestreza</option>
                        <option>Inovação</option>
                        <option>Segurança</option>
                    </select>
                </div>
            </div>

            <div class="col-4 justify-content-center">
                <label>Mês:</label>
                <div>
                    {{-- CAIXA DE OPÇÕES QUE PEGA AS EXCELÊNCIAS --}}

                    <select class="col form-select" aria-label="Selecione o Usuário" id="caixaexcelencia">
                        <option selected>Janeiro</option>
                        <option>Fevereiro</option>
                        <option>Março</option>
                        <option>Abril</option>
                        <option>Maio</option>
                        <option>Junho</option>
                        <option>Julho</option>
                        <option>Agosto</option>
                        <option>Setembro</option>
                        <option>Outubro</option>
                        <option>Novembro</option>
                        <option>Dezembro</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="d-flex flex-wrap text-center justify-content-evenly" style="margin: 15px">
            <div class="card card-estatistica">
                <div class="d-flex flex-wrap ">
                    <div>
                        <img src="imagens/Hospitalidade.png" style="width: 160px; margin: 15px" alt="Hospitalidade">
                        <div><b>Hospitalidade</b></div>
                    </div>
                    <div class="col align-self-center"><b>4</b></div>
                    <img class="img-estat col align-self-center" src="images\estrela.png">
                </div>
            </div>
            <div class="card card-estatistica">
                <div class="d-flex flex-wrap ">
                    <div>
                        <img src="imagens/Prestreza.png" style="width: 160px; margin: 15px" alt="Prestreza">
                        <div><b>Prestreza</b></div>
                    </div>
                    <div class="col align-self-center"><b>10</b></div>
                    <img class="img-estat col align-self-center" src="images\estrela.png">
                </div>
            </div>
            <div class="card card-estatistica">
                <div class="d-flex flex-wrap ">
                    <div>
                        <img src="imagens/Inovação.png" style="width: 160px; margin: 15px" alt="Inovação">
                        <div><b>Inovação</b></div>
                    </div>
                    <div class="col align-self-center"><b>2</b></div>
                    <img class="img-estat col align-self-center" src="images\estrela.png">
                </div>
            </div>
            <div class="card card-estatistica">
                <div class="d-flex flex-wrap ">
                    <div>
                        <img src="imagens/Hospitalidade.png" style="width: 160px; margin: 15px" alt="Segurança">
                        <div><b>Segurança</b></div>
                    </div>
                    <div class="col align-self-center"><b>0</b></div>
                    <img class="img-estat col align-self-center" src="images\estrela.png">
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
</body>

</html>

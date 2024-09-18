@extends('layouts.layout')

@section('title', 'Minhas Estatísticas')

@section('content')

    <div class="card text-center justify-content-center">

        <div class="container content-container mt-3">
            <h2>Minhas Estatísticas</h2>
            <h5>
                “Toda conquista, um dia, começou como um sonho e uma ideia”
            </h5>
            <img src="images/Divisória Degradê (9).png" alt="">
        </div>

        <div class="d-flex justify-content-evenly">
            <div class="col-4 justify-content-center">
                <label>Excelência:</label>
                <div>
                    {{-- CAIXA DE OPÇÕES QUE PEGA AS EXCELÊNCIAS --}}

                    <select class="col form-select col-6" aria-label="Selecione o Usuário" id="caixaexcelencia">
                        <option selected disabled>Escolha a excelência</option>
                        @foreach ($excelencias_opcoes as $opcoes)
                            <option value="{{ $opcoes->id }}">
                                {{ $opcoes->DESCRICAO }}
                                {{-- ID:({{ $opcoes->id }}) --}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-4 justify-content-center">
                <label>Mês:</label>
                <div>
                    {{-- CAIXA DE OPÇÕES QUE PEGA AS EXCELÊNCIAS --}}

                    <select class="col form-select" aria-label="Selecione o Usuário" id="caixaexcelencia">
                        <option selected disabled>Escolha o mês</option>
                        <option value="1">Janeiro</option>
                        <option value="2">Fevereiro</option>
                        <option value="3">Março</option>
                        <option value="4">Abril</option>
                        <option value="5">Maio</option>
                        <option value="6">Junho</option>
                        <option value="7">Julho</option>
                        <option value="8">Agosto</option>
                        <option value="9">Setembro</option>
                        <option value="10">Outubro</option>
                        <option value="11">Novembro</option>
                        <option value="12">Dezembro</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="d-flex flex-wrap text-center justify-content-evenly" style="margin: 15px">
            <div class="card card-estatistica">
                <div class="d-flex flex-wrap ">
                    <div>
                        <img src="images/Hospitalidade.png" style="width: 160px; margin: 15px" alt="Hospitalidade">
                        <div><b>Hospitalidade</b></div>
                    </div>
                    <div class="col align-self-center"><b>4</b></div>
                    <img class="img-estat col align-self-center" src="images\estrela.png">
                </div>
            </div>
            <div class="card card-estatistica">
                <div class="d-flex flex-wrap ">
                    <div>
                        <img src="images/Prestreza.png" style="width: 160px; margin: 15px" alt="Prestreza">
                        <div><b>Prestreza</b></div>
                    </div>
                    <div class="col align-self-center"><b>9</b></div>
                    <img class="img-estat col align-self-center" src="images\estrela.png">
                </div>
            </div>
            <div class="card card-estatistica">
                <div class="d-flex flex-wrap ">
                    <div>
                        <img src="images/Inovacao.png" style="width: 160px; margin: 15px" alt="Inovação">
                        <div><b>Inovação</b></div>
                    </div>
                    <div class="col align-self-center"><b>2</b></div>
                    <img class="img-estat col align-self-center" src="images\estrela.png">
                </div>
            </div>
            <div class="card card-estatistica">
                <div class="d-flex flex-wrap ">
                    <div>
                        <img src="images/Hospitalidade.png" style="width: 160px; margin: 15px" alt="Segurança">
                        <div><b>Segurança</b></div>
                    </div>
                    <div class="col align-self-center"><b>0</b></div>
                    <img class="img-estat col align-self-center" src="images\estrela.png">
                </div>
            </div>
        </div>
        <div>
            <h2>Meus pins</h2>
        </div>
        <div>
            <div class="justify-content-center">
                <div class="card justify-content-center" style="width: 95%">
                    <div class="row justify-content-center">
                        <div class="col-sm-3 mb-2 mb-sm-0" style="margin: 10px">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="bi bi-star-fill"></i>Inovação</h5>
                                    <img src="images/Divisória Degradê (9).png" class="img-fluid" style="height: auto">
                                    <p class="card-text">Aqui um texto muito especial sobre como você é um funcionário incrível e trouxe grande inovação ao hospital. Parabéns, ícone.
                                    </p>
                                    <p class="card-text"><small class="text-body-secondary">Pin enviado em 17/09/24 as 13h16</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2 mb-sm-0" style="margin: 10px">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="bi bi-star-fill"></i>Inovação</h5>
                                    <img src="images/Divisória Degradê (9).png" class="img-fluid" style="height: auto">
                                    <p class="card-text">Aqui um texto muito especial sobre como você é um funcionário incrível e trouxe grande inovação ao hospital. Parabéns, ícone.
                                    </p>
                                    <p class="card-text"><small class="text-body-secondary">Pin enviado em 17/09/24 as 13h16</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2 mb-sm-0" style="margin: 10px">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="bi bi-star-fill"></i>Inovação</h5>
                                    <img src="images/Divisória Degradê (9).png" class="img-fluid" style="height: auto">
                                    <p class="card-text">Aqui um texto muito especial sobre como você é um funcionário incrível e trouxe grande inovação ao hospital. Parabéns, ícone.
                                    </p>
                                    <p class="card-text"><small class="text-body-secondary">Pin enviado em 17/09/24 as 13h16</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2 mb-sm-0" style="margin: 10px">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="bi bi-star-fill"></i>Inovação</h5>
                                    <img src="images/Divisória Degradê (9).png" class="img-fluid" style="height: auto">
                                    <p class="card-text">Aqui um texto muito especial sobre como você é um funcionário incrível e trouxe grande inovação ao hospital. Parabéns, ícone.
                                    </p>
                                    <p class="card-text"><small class="text-body-secondary">Pin enviado em 17/09/24 as 13h16</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2 mb-sm-0" style="margin: 10px">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="bi bi-star-fill"></i>Inovação</h5>
                                    <img src="images/Divisória Degradê (9).png" class="img-fluid" style="height: auto">
                                    <p class="card-text">Aqui um texto muito especial sobre como você é um funcionário incrível e trouxe grande inovação ao hospital. Parabéns, ícone.
                                    </p>
                                    <p class="card-text"><small class="text-body-secondary">Pin enviado em 17/09/24 as 13h16</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2 mb-sm-0" style="margin: 10px">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="bi bi-star-fill"></i>Inovação</h5>
                                    <img src="images/Divisória Degradê (9).png" class="img-fluid" style="height: auto">
                                    <p class="card-text">Aqui um texto muito especial sobre como você é um funcionário incrível e trouxe grande inovação ao hospital. Parabéns, ícone.
                                    </p>
                                    <p class="card-text"><small class="text-body-secondary">Pin enviado em 17/09/24 as 13h16</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="chartContainer" style="height: 300px; width: 100%;"></div>
    </div>

    @endsection

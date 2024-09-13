@extends('layouts.layout')

@section('title', 'Minhas Estatísticas')

@section('content')

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

@endsection

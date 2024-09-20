@extends('layouts.layout')

@section('title', 'Minhas Estatísticas')

@section('content')

    <div class="card text-center justify-content-center" style="margin: 15px">

        <div class="container content-container mt-3">
            <h2>Minhas Estatísticas</h2>
            <img class="img-large2" src="images/Divisória Degradê (9).png" alt="">
            <h5>
                “Toda conquista, um dia, começou como <br> um sonho e uma ideia”
            </h5>
        </div>

        <div class="d-flex flex-wrap text-center justify-content-evenly" style="margin: 15px">
            @foreach ($qualidades_cards as $qualidades)
            <div class="card card-estatistica">
                <div class="d-flex flex-wrap">
                    <div>
                        <img src={{ $qualidades->ICONES }} style="width: 180px; margin: 15px" alt="Segurança">
                        <div><b>{{ $qualidades->DESCRICAO }}</b></div>
                    </div>
                    @foreach ($countpin_cards as $count)
                        @if ($count->QUALIDADE_NOME == $qualidades->DESCRICAO)
                            <div class="col align-self-center"><b>{{ $count->TOTAL_QUALIDADE }}</b></div>
                        @endif
                    @endforeach
                    <img class="img-estat col align-self-center" src="images/estrela.png">
                </div>
            </div>
        @endforeach
        
        </div>
        <div>
            <h2>Meus pins</h2>
        </div>
        <div>
            <div class="justify-content-center" style="margin: 15px">
                <div class="card justify-content-center" style="width: 95%" style="margin: 15px">
                    <div class="row justify-content-center" style="margin: 15px">
                        @foreach ($pinusuarios as $pin)
                        <div class="col-sm-3 mb-2 mb-sm-0" style="margin: 10px">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <i class="bi bi-star-fill"></i>{{$pin->QUALIDADE_NOME}}</h5>
                                    <img src="images/Divisória Degradê (9).png" class="img-fluid" style="height: auto">
                                    <p class="card-text">
                                        <b> {{ $pin->JUSTIFICATIVA_NOME }} </b> <br>
                                        {{ $pin->DEDICATORIA }}
                                    </p>
                                    <p class="card-text"><small class="text-body-secondary">Pin enviado em {{ $pin->DATA_PIN }} às {{ $pin->HORA_PIN }}</small></p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="card justify-content-center text-center" style="margin:15px">
            <div class="card-header header-avaliacao">
                <b>Meu histórico de pins</b>
            </div>
            <div id="graficoHistoricoPins" style="height: 300px; width: 100%;">
            </div>
        </div>
    </div>

@endsection

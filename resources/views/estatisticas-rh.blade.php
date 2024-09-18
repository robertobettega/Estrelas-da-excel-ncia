@extends('layouts.layout')

@section('title', 'RH - Estrelas da excelência')

@section('content')
<div class="justify-content-center text-center">
    <div class="container content-container mt-3">
        <h2>Estatísticas gerais</h2>
        <img src="images/Divisória Degradê (9).png" alt="">
    </div>

<div class="card" style="margin: 30px">
    <div class="card" style="margin: 30px">
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
    <div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Usuário</th>
              <th scope="col">E-mail</th>
              <th scope="col">Matrícula</th>
              <th scope="col">Pins</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Roberto Bettega Medeiros Peixoto</td>
                <td>robertopeixoto@hospitalriogrande.com.br</td>
                <td>6747</td>
                <td>8</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Gabriel Mendes sei lá de quê</td>
                <td>gabrielsousa@hospitalriogrande.com.br</td>
                <td>num sei</td>
                <td>0</td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Vitória Vic</td>
                <td>acho que vitoria n tem email institucional</td>
                <td>nem matricula</td>
                <td>1</td>
            </tr>
      </table>
    </div>
    
</div>

@endsection
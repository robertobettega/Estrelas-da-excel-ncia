{{-- <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estrelas da excelência</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css\custom\style.css') }}">
</head>

<body> --}}
    @extends('layouts.layout')

    @section('title', 'Home - Estrelas da excelência')
    
    @section('content')
   
    <div class="container-fluid text-center">
        <div>
            <img src="images/Logo.png" class="img-fluid" alt="Estrelas da Excelência">
        </div>
        <h5>Dedique um pin para um colaborador!</h5>
        <img src="{{ asset('images/Divisória Degradê (5).png') }}" alt="">
    </div>

    <div class="d-flex flex-wrap text-center justify-content-center" style="margin: 15px">

        @include('assets.cards-excelencia')

    </div>
</div>



    <div class="modal fade" id="AvaliacaoModal" tabindex="-1" aria-labelledby="AvaliacaoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header header-avaliacao">
                    <div>
                    <img src="{{ asset('images/Logo Hospital Rio Grande.png') }}"
                        style="width: 35px; margin-right: 15px" alt="Logo">
                    </div>
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="margin 10px">Dedicar pin!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- CAIXA DE OPÇÕES CRIADA COM BOOTSTRAP PARA FAZER INPUT DE TESTE PARA O BANCO DE DADOS --}}
                    <div class="row">
                        <label>Usuário:</label>
                        <div class="col-8 pt-8">
                            {{-- CAIXA DE OPÇÕES QUE PEGA OS USUÁRIOS DO BANCO --}}
                            <select class="col form-select" aria-label="Selecione o Usuário" id="caixausuario">
                                <option selected> Adicione o usuário</option>
                                @foreach ($users as $usuarios)
                                    <option value="{{ $usuarios->id }}">
                                        {{ $usuarios->nome }} {{ $usuarios->sobrenome }} 
                                        {{ $usuarios->matricula }}
                                        ({{ $usuarios->id }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <label>Excelência:</label>
                        <div class="col-8 pt-8">
                            {{-- CAIXA DE OPÇÕES QUE PEGA AS EXCELÊNCIAS --}}

                            <select class="col form-select" aria-label="Selecione o Usuário" id="caixaexcelencia">
                                <option selected >Selecione a excelência</option>
                                @foreach ($excelencias_opcoes as $opcoes)
                                    <option value="{{ $opcoes->id }}">
                                        {{ $opcoes->DESCRICAO }}
                                        {{-- ID:({{ $opcoes->id }}) --}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label>Justificativa:</label>
                            <textarea class="form-control" id="caixajustificativa"></textarea>
                        </div>
                        <div>
                            <label>Dedicatória:</label>
                            <textarea class="form-control" id="caixadedicatoria"></textarea>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="entrar-navbar" id="btnsalvar" onclick="sucesso()" data-bs-dismiss="modal"><b>SALVAR<b></button>
                </div>
            </div>
        </div>
    </div>

    {{-- OS CARDS ESTÃO USANDO O 'FOREACH' PARA PUXAR OS TOP 3 DE CADA EXCELENCIA, CUIDADO AO ALTERAR O FRONT-END --}}
    <div class="card" style="margin: 15px; padding: 15px">

        <div class="text-center mt-4">
            <h4><i class="bi bi-star-fill"></i> Estrelas da excelência</h4>
            <h5><i class="bi bi-star-fill"></i> Destaques do mês</h5>
        </div>

        <div class="container-fluid row justify-content-center"  style="margin-left: 5px">

            @include('assets.cards-contagemexcelencias')

        </div>
    </div>
    @endsection

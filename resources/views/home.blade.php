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

    @include('assets.modal-pin')

    {{-- OS CARDS ESTÃO USANDO O 'FOREACH' PARA PUXAR OS TOP 3 DE CADA EXCELENCIA, CUIDADO AO ALTERAR O FRONT-END --}}
    <div class="card" style="margin: 15px; padding: 15px">

        <div class="text-center mt-4">
            <h4><i class="bi bi-star-fill"></i> Estrelas da excelência</h4>
            <h5><i class="bi bi-star-fill"></i> Destaques do trimestre</h5>
        </div>

        <div class="container-fluid row justify-content-center"  style="margin-left: 5px">

            @include('assets.cards-contagemexcelencias')

        </div>
    </div>
    @endsection

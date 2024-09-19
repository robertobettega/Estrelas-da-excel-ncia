@extends('layouts.layout')
@section('title', 'RH - Estrelas da excelência')

<head>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

@section('content')
<div class="container mt-3 text-center">
<h2 class="title-large">Aprovação de cadastro</h2>
<img src="images/Divisória Degradê (9).png" alt="" class="img-large">


    <div class="card mt-3 col-sm-10 col-12 mb-5">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Usuário</th>
                        <th>E-mail</th>
                        <th>Matrícula</th>
                        <th>Aprovação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->matricula }}</td>
                        <td>
                            <button class="aprovar btn btn-primary" onclick="aprovar(this)">Aprovar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center">
            {{ $users->links('components.custom-pagination') }}
        </div>
    </div>
</div>

<script>
    function aprovar(button) {
        // Altera o texto do botão e a classe
        button.textContent = 'Aprovado';
        button.classList.remove('btn-primary');
        button.classList.add('btn-danger'); // Muda para vermelho
        button.disabled = true; // Desabilita o botão após clicar
    }
</script>
@endsection

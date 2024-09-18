@extends('layouts.layout')
@section('title', 'RH - Estrelas da excelência')

<head>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

@section('content')
<div class="justify-content-center text-center">
    <div class="container content-container mt-3">
        <h2>Aprovação de cadastro</h2>
        <img src="images/Divisória Degradê (9).png" alt="">
    </div>

    <div class="card" style="margin: 30px">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Usuário</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Matrícula</th>
                    <th scope="col">Aprovação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->matricula }}</td>
                    <td><button class="aprovar">Aprovar</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center mt-4">
         {{ $users->links('components.custom-pagination') }} <!-- Chama a nova visualização de paginação -->
        </div>

    </div>
</div>
@endsection

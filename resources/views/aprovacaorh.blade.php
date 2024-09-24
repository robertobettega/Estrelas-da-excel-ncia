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
                        @if($naoaprovados)
                            @foreach ($naoaprovados as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->matricula }}</td>
                                <td>
                                    <form style="display:inline;">
                                        <button type="submit" id="btnaprovar" class="entrar-aprovar">Aprovar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4">Não há cadastros para serem aprovados :)</td>
                            </tr>
                        @endif
                    </tbody>
                
                </table>
            </div>
        </div>


        <div class="d-flex justify-content-center">
            {{ $paginate->links('components.custom-pagination') }}
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

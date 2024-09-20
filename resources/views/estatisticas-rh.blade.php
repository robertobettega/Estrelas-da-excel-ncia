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
                @foreach ($users as $item)
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>6747</td>
                <td>8</td>
                </tr>
            @endforeach
      </table>
    </div>
    
</div>

@endsection
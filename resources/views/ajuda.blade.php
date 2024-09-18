@extends('layouts.layout')

@section('title', 'ajuda - Estrelas da excelência')

@section('content')

<div class="container-fluid text-center">
    <div>
        <img src="images/Logo.png" alt="Estrelas da Excelência" style="height: 120px;">
    </div>
    <h5 class="mt-3">Dedique um pin para um colaborador!</h5>
    <img src="{{ asset('images/Divisória Degradê (5).png') }}" alt="" class="img-fluid mt-3">
</div>

<!-- Modal -->
<div class="modal fade" id="AjudaModal" tabindex="-1" aria-labelledby="AjudaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header header-ajuda">
                <div>
                    <img src="{{ asset('images/Logo Hospital Rio Grande.png') }}" style="width: 35px; margin-right: 15px" alt="Logo">
                </div>
                <h1 class="modal-title fs-5" id="AjudaModalLabel" style="margin: 10px">Ajuda</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Card with Pillars Information -->
                <div class="card mx-3 my-4 p-4">
                    <div class="text-center">
                        <h4><i class="bi bi-question-circle"></i> Ajuda</h4>
                        <h5><i class="bi bi-star-fill"></i> Painel de Destaques dos Pilares</h5>
                    </div>
                    
                    <div class="d-flex flex-wrap justify-content-center mt-4" style="gap: 2em;">
                        @foreach ([
                            ['image' => 'Hospitalidade.png', 'title' => 'Hospitalidade', 'description' => 'Paixão por cuidar!', 'items' => ['Respeito', 'Comunicação', 'Confiança', 'Acolhimento', 'Carinho', 'Cuidado']],
                            ['image' => 'Prestreza.png', 'title' => 'Presteza', 'description' => 'Agilidade com qualidade!', 'items' => ['Agilidade', 'Foco no Resultado', 'Análise', 'Qualidade']],
                            ['image' => 'Inovacao.png', 'title' => 'Inovação', 'description' => 'Construir diferenciais!', 'items' => ['Criação', 'Desenvolvimento', 'Novas Experiências', 'Iniciativa', 'Empreendedorismo']],
                            ['image' => 'Seguranca.png', 'title' => 'Segurança', 'description' => 'Cuidado em cada detalhe!', 'items' => ['Conformidade', 'Segurança', 'Padronização', 'Qualidade']]
                        ] as $pillar)
                        <figure class="text-center mx-2 mb-4" style="max-width: 300px;">
                            <img src="images/{{ $pillar['image'] }}" alt="{{ $pillar['title'] }}" class="img-fluid" style="width: 100px; height: 100px;">
                            <h3 class="mt-2" style="font-size: 18px;">{{ $pillar['title'] }}</h3>
                            <p style="font-style: italic;">{{ $pillar['description'] }}</p>
                            <ul class="mt-4 list-unstyled">
                                @foreach ($pillar['items'] as $item)
                                <li class="mt-1">{{ $item }}</li>
                                @endforeach
                            </ul>
                        </figure>
                        @endforeach
                    </div>
                </div>

                <!-- Steps for Dedication -->
                <div style="text-align: center; padding: 20px; border-radius: 8px; margin: 20px auto; max-width: 1000px; background-color: #f8f9fa; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <h3 style="font-size: 1.5em; margin-bottom: 20px; color: green;">Passos para dedicar uma estrela:</h3>
                    <ul style="list-style: none; padding: 0; margin: 0; text-align: left; display: inline-block; width: 100%;">
                        <li style="padding: 10px; margin: 5px 0; font-size: 1.1em; color: #333; border-bottom: 1px solid #ddd; background-color: #fff;">1. Clique no botão de excelência</li>
                        <li style="padding: 10px; margin: 5px 0; font-size: 1.1em; color: #333; border-bottom: 1px solid #ddd; background-color: #fff;">2. Escolha para quem dedicar a estrela</li>
                        <li style="padding: 10px; margin: 5px 0; font-size: 1.1em; color: #333; border-bottom: 1px solid #ddd; background-color: #fff;">3. Escolha a excelência</li>
                        <li style="padding: 10px; margin: 5px 0; font-size: 1.1em; color: #333; border-bottom: 1px solid #ddd; background-color: #fff;">4. Justifique a sua escolha</li>
                        <li style="padding: 10px; margin: 5px 0; font-size: 1.1em; color: #333; background-color: #fff;">5. Deixe uma dedicatória</li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="entrar-navbar" id="btnsalvar" onclick="sucesso()" data-bs-dismiss="modal"><b>SALVAR</b></button>
            </div>
        </div>
    </div>
</div>


@endsection

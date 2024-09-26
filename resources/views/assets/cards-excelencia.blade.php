@foreach ($excelencias_opcoes as $excelencia)
    <div>
        <!-- Adiciona um atributo data-id para armazenar o ID -->
        <img src="{{ asset($excelencia->ICONES) }}" style="width: 160px; margin: 15px; cursor: pointer" alt="{{ $excelencia->DESCRICAO }}"
            data-bs-toggle="modal" data-bs-target="#AvaliacaoModal" data-id="{{ $excelencia->id }}" class="excelencia-img">
        <div style="font-weight: 700;">{{ $excelencia->DESCRICAO }}</div>
    </div>
@endforeach

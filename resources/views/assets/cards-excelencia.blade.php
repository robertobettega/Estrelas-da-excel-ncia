
@foreach ($excelencias as $excelencia)
<div>
    <img src="{{ $excelencia->ICONES }}" style="width: 160px; margin: 15px" alt="{{ $excelencia->DESCRICAO }}" data-bs-toggle="modal"
        data-bs-target="#AvaliacaoModal">
    <div>{{ $excelencia->DESCRICAO }}</div>
</div>
@endforeach
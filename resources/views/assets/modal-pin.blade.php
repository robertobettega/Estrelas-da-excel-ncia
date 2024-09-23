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
                                    {{ $usuarios->name }} 
                                    {{-- {{ $usuarios->sobrenome }}  --}}
                                    {{-- {{ $usuarios->matricula }} --}}
                                    ({{ $usuarios->id }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <label>Excelência:</label>
                    <div class="col-8 pt-8">
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
                        <select class="col form-select" aria-label="Selecione o Usuário" id="caixajustificativa">
                            <option selected >Selecione a excelência</option>
                            @foreach ($justificativas_opcoes as $opcoes)
                                <option value="{{ $opcoes->id }}">
                                    {{ $opcoes->DESCRICAO }}
                                    {{-- ID:({{ $opcoes->id }}) --}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label>Dedicatória:</label>
                        <textarea class="form-control" id="caixadedicatoria" maxlength="150"></textarea>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="entrar-navbar" id="btnsalvar" data-bs-dismiss="modal"><b>SALVAR<b></button>
            </div>
        </div>
        <script src="{{ asset('js\custom\imgbotoes.js') }}"></script>
    </div>
</div>
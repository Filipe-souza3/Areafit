<h2 class="pg-title">Meu treino</h2>
<div class="total">
    <div class="accordion accordion-flush acc-days" id="accordionFlushExample">
        @foreach ($arrayListaDadosMuscle as $key => $days)
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne-{{ $key }}" aria-expanded="false"
                        aria-controls="flush-collapseOne">
                        @if ($key == 'terca')
                            Terça
                        @elseif($key == 'sabado')
                            Sábado
                        @else
                            {{ ucfirst($key) }}
                        @endif
                    </button>
                </h2>
                <div id="flush-collapseOne-{{ $key }}" class="accordion-collapse collapse"
                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        @foreach ($days as $item)
                            <x-card-list :listaDadosMuscle="$item['all_exercises']" :pathImage="$item['pathImage'][0]" :nomeMuscle="$item['nameMuscle'][0]"
                                :daysWeek="$key"></x-card-list>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>



    <div class="clean">
        <button type="button" class="btn btn-warning btn-clean"
            onclick="openModalImportExport('modalImportExport')">Importar/Exportar</button>
        <button type="button" class="btn btn-light btn-clean" onclick="openModal('modalClean')">Limpar Treino</button>
    </div>
</div>

<!-- Modal limpar -->
<div class="modal fade" id="modalClean" tabindex="-1" aria-labelledby="modalcleanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="cleanmodalLabel">Deseja excluir sua semana de treino ?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                Todos os exercícios de todos os dias da semana serão excluidos.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                    onclick="cleanCookie()">Deletar</button>
            </div>
        </div>
    </div>
</div>

<!-- importar/exportar -->
<div class="modal fade" id="modalImportExport" tabindex="-1" aria-labelledby="modalImportExportLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="cleanmodalLabel">Importar ou exportar treino</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Exportar
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Copiar meu treino" id="cookieExport" style="height: 100px" disabled></textarea>
                                    {{-- <label for="floatingTextarea2">Copiar meu treino</label> --}}
                                    <div class="div-copiar modal-footer">
                                        <button type="button" class="btn btn-warning btn-copiar" {{-- data-bs-dismiss="modal"  --}}
                                            onclick="copiarExpotacao()">Copiar</button>
                                    </div>
                                    <div class="alert alert-danger alert-export" role="alert">
                                        Problema ao copiar.
                                    </div>
                                    <div class="alert alert-success alert-success-export" role="alert">
                                        Copiado com sucesso.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Importar
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="textareaImport" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Cole aqui seu novo treino</label>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light"
                                        {{-- data-bs-dismiss="modal" --}}
                                         onclick="limparImportar()">Limpar</button>
                                    <button type="button" class="btn btn-warning" {{-- data-bs-dismiss="modal" --}}
                                        onclick="importar()">Importar</button>
                                </div>
                                <div class="alert alert-danger alert-import" role="alert">
                                    Treino inválido.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

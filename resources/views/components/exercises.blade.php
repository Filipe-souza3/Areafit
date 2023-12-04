
<h2 class="pg-title">Meu treino</h2>
@foreach ($arrayListaDadosMuscle as $key => $days)
    <div class="accordion accordion-flush acc-days" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne-{{ $key }}" aria-expanded="false"
                    aria-controls="flush-collapseOne">
                    {{ $key }}
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
    </div>
@endforeach


<div class="clean">
    <button type="button" class="btn btn-light btn-clean" onclick="openModal('modalClean')">Limpar Treino</button>
</div>


<!-- Modal limpar -->
<div class="modal fade" id="modalClean" tabindex="-1" aria-labelledby="modalcleanLabel"
    aria-hidden="true">
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
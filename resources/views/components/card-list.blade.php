<h1 class="muscle-name" id="{{ $nomeMuscle . '_' . $daysWeek }}">
    {{-- {{$nomeMuscle}} --}}
    {{ $nomeCorrecaoMuscle }}
</h1>
<div class="cards">
    @if (!empty($listaDadosMuscle))
        @foreach ($listaDadosMuscle as $key => $item)
            <div class="card-muscle" id="{{ $item['nome_url'] . '_' . $daysWeek }}">
                @if ($adcBotao == false)
                    <button class="btn-fechar" data-bs-toggle="modal"
                        data-bs-target="#delmodal-{{ $item['nome_url'] . $daysWeek }}"></button>
                @endif
                <a
                    href="{{ route('muscle', ['exercicio' => $lista->correcaoNomeExercicio($item['nome_url']), 'nomeMuscle' => $nomeMuscle]) }}">
                    <img loading="lazy" src="{{ asset($pathImage . $item['img']) }}" class="gif-person" alt="">
                    <div class="name">
                        <div class="name-1">
                            {{ $item['nome'] }}
                        </div>
                    </div>
                    <div class="desc">
                        <div class="desc-name">
                            {{ $item['desc'] }}
                        </div>
                        <div>
                            <ul>
                                @foreach ($item['passos'] as $passo)
                                    <li>{{ $passo }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="more">
                        </div>
                    </div>
                </a>
                @if ($adcBotao == true)
                    <button class="btn btn-list" onclick="openWeek('week-{{ $key }}')">Adicionar</button>
                @endif
            </div>
            <!-- Modal Semana -->
            <div class="modal fade" id="week-{{ $key }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Minha semana</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p style="text-align: center ">Clique no(s) dia(s) que deseja fazer:
                                <b>{{ $item['nome'] }}</b>
                            </p>

                            <div style="display: flex; flex-direction: column">
                                <a href="#" id="btn-seg-{{ $key }}" class="btn" role="button"
                                    data-bs-toggle="button" value="seg">Segunda-feira</a>
                                <a href="#" id="btn-ter-{{ $key }}" class="btn" role="button"
                                    data-bs-toggle="button">Terça-feira</a>
                                <a href="#" id="btn-qua-{{ $key }}" class="btn" role="button"
                                    data-bs-toggle="button">Quarta-feira</a>
                                <a href="#" id="btn-qui-{{ $key }}" class="btn" role="button"
                                    data-bs-toggle="button">Quinta-feira</a>
                                <a href="#" id="btn-sex-{{ $key }}" class="btn" role="button"
                                    data-bs-toggle="button">Sexta-feira</a>
                                <a href="#" id="btn-sab-{{ $key }}" class="btn" role="button"
                                    data-bs-toggle="button">Sabado</a>
                                <a href="#" id="btn-dom-{{ $key }}" class="btn" role="button"
                                    data-bs-toggle="button">Domingo</a>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-warning"
                                onclick="getDays('{{ $nomeMuscle }}','{{ $item['nome_url'] }}',null, {{ $key }})"
                                data-bs-dismiss="modal">Adicionar</button>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Deletar -->
            <div class="modal fade" id="delmodal-{{ $item['nome_url'] . $daysWeek }}" tabindex="-1"
                aria-labelledby="delmodalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="delmodalLabel">Deseja deletar {{ $item['nome'] }}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        {{-- <div class="modal-body">
                            ...
                        </div> --}}
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                                onclick="deleteCookie('{{ $nomeMuscle }}','{{ $item['nome_url'] }}','{{ route('getCookie') }}', '{{ $daysWeek }}')">Deletar</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>

<div class="content-out">
    <div class="content">
        {{-- <h1>{{$nomeMuscle}}</h1> --}}
        <h1>{{ $nomeCorrecao }}</h1>
        <!-- <div class="tip">
        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in
    </div> -->
        <div class="content-img">
            <div class="content-desc">
                <h3>{{ $dadosExercicio['nome'] }}</h3>
                <div class="level">
                    <strong>Musculo trabalhado</strong>:<br>
                    {{ $dadosExercicio['musculo_trabalhado'] }}
                </div>
            </div>

            <div class="benef-img">
                <div class="benef">
                    <strong>Beneficios: </strong><br>
                    {{ $dadosExercicio['beneficios'] }}
                </div>
                {{-- <button class="btn btn-warning">Adicionar na lista</button> --}}
                <img src="{{ asset($pathImage . $dadosExercicio['img']) }}" alt="">

            </div>
        </div>

        <div class="group-tip">
            <h3>Como fazer</h3>
            @foreach ($dadosExercicio['passos'] as $steps)
                <div class="tip">
                    <svg fill="#faa200" height="800px" width="800px" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 500.462 500.462" xml:space="preserve">
                        <g>
                            <g>
                                <path
                                    d="M500.462,155.514l-46.742-46.743l1.954-1.954c8.279-8.279,12.837-19.284,12.837-30.99c0-11.707-4.558-22.711-12.837-30.99
                    c-17.091-17.101-44.904-17.091-61.986,0l-1.95,1.95L344.995,0.043l-48.139,48.139L254.688,6.014L192.63,68.072l88.91,88.912
                    L156.91,281.609l-88.881-88.936L5.971,254.731l42.169,42.171L0,345.038l46.74,46.74l-1.952,1.952
                    c-17.087,17.091-17.087,44.899,0,61.986c8.543,8.548,19.769,12.817,30.99,12.817c11.226,0,22.452-4.269,30.995-12.817l1.952-1.952
                    l46.654,46.654l48.216-48.059l42.178,42.179l61.986-61.986l-88.881-88.936l124.644-124.648l88.91,88.912l62.063-62.063
                    l-42.169-42.168L500.462,155.514z M407.611,58.76c9.413-9.409,24.726-9.418,34.139,0c9.409,9.413,9.409,24.721,0,34.135
                    l-1.952,1.952l-17.07-17.067L405.66,60.71L407.611,58.76z M344.995,27.889l32.819,32.82l-0.002,0.002l30.993,30.99l63.81,63.813
                    l-34.212,34.212l-63.813-63.81l-63.812-63.811L344.995,27.889z M92.851,441.793c-9.409,9.413-24.721,9.413-34.139,0
                    c-9.409-9.409-9.409-24.726,0-34.139l1.952-1.952l34.139,34.139L92.851,441.793z M155.399,472.591l-32.75-32.75l-61.986-61.986
                    l-32.817-32.817l34.216-34.211l127.606,127.611L155.399,472.591z M279.913,432.553l-34.139,34.139l-28.233-28.234l0.002-0.002
                    L139.8,360.716L33.817,254.731l34.212-34.212l104.002,104.075l32.883,32.987l0.041-0.041L279.913,432.553z M204.955,329.685
                    l-17.064-17.075l-17.04-17.096l124.611-124.606l17.07,17.067l17.069,17.069L204.955,329.685z M466.649,245.817l-34.216,34.216
                    l-74.987-74.989l0.002-0.002l-30.993-30.99L220.476,68.072l34.212-34.212l28.246,28.245l-0.001,0.001l77.736,77.733
                    L466.649,245.817z" />
                            </g>
                        </g>
                    </svg>
                    {{ $steps }}
                </div>
            @endforeach
        </div>
    </div>
</div>

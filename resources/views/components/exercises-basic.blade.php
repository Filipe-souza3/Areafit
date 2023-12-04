<div class="total">
    <div class="content">
        <h2>{{$gender}}</h2>
        @foreach ($daysWeek as $day)
            <h2 class="day">{{$day}}</h2>
            <div>
                @foreach ($basicExercises[$day] as $item)
                <x-card-List class="cards" :listaDadosMuscle="$item['all_exercises']" :pathImage="$item['pathImage'][0]" :nomeMuscle="$item['nameMuscle'][0]" 
                :daysWeek="$day" :adcBotao="true"></x-card-List>
                    <div>

                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
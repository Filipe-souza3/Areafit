@extends('master/layout')

@section('scriptsStyles')
    <link rel="stylesheet" href="{{ asset('css/basicTrainning/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/list/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/exercises/style.css') }}"> --}}
@endsection

@section('content-master')
    @if ($ads == true)
        <div class="an an-top"></div>
    @endif
    <x-exercises-basic :basicExercises="$basicExercises" :daysWeek="$daysWeek" :gender="$gender"></x-exercises-basic>
    @if ($ads == true)
        <div class="an an-bottom"></div>
    @endif
@endsection

@extends('master/layout')

@section('scriptsStyles')
    <link rel="stylesheet" href="{{ asset('css/muscle/style.css') }}">
@endsection

@section('content-master')
    @if ($ads == true)
        <div class="an an-top"></div>
    @endif
    <x-muscle :exercicio="$exercicio" :dadosExercicio="$dadosExercicio" :pathImage="$pathImage" :nomeMuscle="$nomeMuscle"></x-muscle>
    @if ($ads == true)
        <div class="an an-bottom"></div>
    @endif
@endsection



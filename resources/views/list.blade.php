@extends('master/layout')

@section('scriptsStyles')
    <link rel="stylesheet" href="{{ asset('css/list/style.css') }}">
@endsection

@section('content-master')
    @if ($ads == true)
        <div class="an an-top"></div>
    @endif
    <x-card-list :listaDadosMuscle="$listaDadosMuscle" :pathImage="$pathImage" :nomeMuscle="$nomeMuscle" :adcBotao="true"></x-card-list>
    @if ($ads == true)
        <div class="an an-bottom"></div>
    @endif
@endsection


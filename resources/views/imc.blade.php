@extends('master/layout')

@section('scriptsStyles')
    <link rel="stylesheet" href="{{ asset('css/imc/style.css') }}">
    <script defer src="{{ asset('js/calc.js') }}"></script>
@endsection

@section('content-master')
    @if ($ads == true)
        <div class="an an-top"></div>
    @endif

    <x-imc></x-imc>

    @if ($ads == true)
        <div class="an an-bottom"></div>
    @endif
@endsection

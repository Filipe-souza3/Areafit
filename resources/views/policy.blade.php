@extends('master/layout')

@section('scriptsStyles')
    <link rel="stylesheet" href="{{ asset('css/policy/style.css') }}">
@endsection

@section('content-master')
    @if ($ads == true)
        <div class="an an-top"></div>
    @endif
    <x-policy></x-policy>
    @if ($ads == true)
        <div class="an an-bottom"></div>
    @endif
@endsection
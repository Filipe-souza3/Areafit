@extends('master/layout')

@section('scriptsStyles')
    <link rel="stylesheet" href="{{ asset('css/index/style.css') }}">
@endsection

@section('content-master')
    <x-index></x-index>
@endsection

@section('scripts')
    <script src="{{ asset('js/javascript.js') }}" defer></script>
@endsection

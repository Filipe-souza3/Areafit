@extends('master/layout')

@section('content-master')
    <x-index></x-index>
@endsection

@section('scripts')
    <script defer src="{{ asset('js/javascript.js') }}"></script>
@endsection

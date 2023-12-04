@extends('master/layout')

@section('scriptsStyles')

    <link rel="stylesheet" href="{{ asset('css/list/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/exercises/style.css') }}">
    <style>
        .cards {
            width: 100% !important;
        }

        .btn-fechar {
            box-shadow: none;
            outline: none;
            background-color: rgba(255, 255, 255, 0) !important;
            border: none;
        }
    </style>

    {{-- <script>
        function getCookie(params = null) {
            let content = null;
            let cookie = document.cookie;
            if (cookie) {
                if (document.cookie.indexOf(params) != -1) {
                    content = JSON.parse(
                        document.cookie.split("; ").find(
                            row => row.startsWith(params + "=")
                        ).split("=")[1]
                    );
                    console.log(content);
                }
            }
            return content;
        }

        //funçao sendo utilizada direto no execises.blade.php 
        async function myTraining(url, urlExercises = null, winLocation = true) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let muscleCookie = getCookie('training');
            console.log(muscleCookie);
            if (muscleCookie != null) {
                if (muscleCookie.length == 0) {
                    muscleCookie = "empty";
                }
                $.ajax({
                    url: url,
                    async: true,
                    type: "post",
                    dataType: 'json',
                    data: {
                        muscleCookie
                    },

                    success: function(data) {
                        console.log("success");
                        console.log(data);
                        if (winLocation) {
                            if (data != 'Lista vazia') {
                                // window.location = data;
                            } else {
                                // window.location = urlExercicios;
                            }
                        }
                    },
                    error: function(error) {
                        console.log("error");
                        console.log(error);
                    }
                });
            } else {
                // window.location = urlExercises;
                window.location = urlExercicios;
            }
        }

        //feito assim pois o da para passar a var php pro js
        let myCookie = "{{ route('getCookie') }}";
        let myRoute = "{{ route('exercises') }}";

        // myTraining('{{ route('getCookie') }}', '{{ route('exercises') }}');
        myTraining(myCookie, myRoute);
    </script> --}}
@endsection

@section('content-master')
    @if ($ads == true)
        <div class="an an-top"></div>
    @endif
    
    <x-exercises :arrayListaDadosMuscle="$arrayListaDadosMuscle"></x-exercises>

    @if ($ads == true)
        <div class="an an-bottom"></div>
    @endif  
  @endsection
  
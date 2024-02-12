<!DOCTYPE html>
<html lang="pt-BR">

<head>
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6XN2WQLCKZ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-6XN2WQLCKZ');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#171717">
    <meta name="apple-mobile-web-app-status-bar-style" content="#171717">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- <meta property="og:title" content="Seu treino de forma simples."> --}}
    {{-- <meta property="og:url" content="https://www.areafit.com.br"> --}}
    {{-- <meta property="og:image" itemprop="image" content="{{ asset('/storage/others/imgLink.jpg') }}"/> --}}

    <!-- Primary Meta Tags -->
    <title>Areafit — Seu treino de forma simples</title>
    <meta name="title" content="Areafit — Seu treino de forma simples" />
    <meta name="description" content="Areafit tem como objetivo simplificar seu treino, ajudando na montagem do treino, informações de como executar o exercício, calculadoras (IMC, Calorias)." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.areafit.com.br" />
    <meta property="og:title" content="Areafit — Seu treino de forma simples" />
    <meta property="og:description" content="Areafit tem como objetivo simplificar seu treino, ajudando na montagem do treino, informações de como executar o exercício, calculadoras (IMC, Calorias)." />
    <meta property="og:image" itemprop="image" content="{{ asset('/storage/others/imgLink.jpg') }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://www.areafit.com.br" />
    <meta property="twitter:title" content="Areafit — Seu treino de forma simples" />
    <meta property="twitter:description" content="Areafit tem como objetivo simplificar seu treino, ajudando na montagem do treino, informações de como executar o exercício, calculadoras (IMC, Calorias)." />
    <meta property="twitter:image" content="{{ asset('/storage/others/imgLink.jpg') }}" />

    
    <link rel="icon" type="image/x-icon" href="/storage/favicon/favicon.ico">
    <meta name="google-site-verification" content="e23Drh0PFauSgIAzrHQO4kmqdgztD1o5suNfZCMrwH4" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" rel="preload" as="style">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer>
    </script>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" defer></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"></script> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="{{ asset('css/menu-footer/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/master/style.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald"> --}}

    {{-- <link rel="preload" href="css/app.css" as="style" onload="this.onload=null;this.rel='stylesheet'"> --}}
    <link rel="preload" href="{{ asset('css/menu-footer/style.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('css/master/style.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Oswald" as="style" onload="this.onload=null;this.rel='stylesheet'">

    @yield('scriptsStyles')
</head>

<body>
    <x-menu></x-menu>
    <section>
        @yield('content-master')
    </section>
    <x-footer></x-footer>

    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottomCookie"
        aria-labelledby="offcanvasBottomLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Aceitar termos</h5>
                <button type="button" class="btn btn-warning" data-bs-dismiss="offcanvas" aria-label="success"
                    onclick="createCookie()">Aceitar</button>
        </div>
        <div class="offcanvas-body small" style="display:flex; flex-direction:column">
            <div class="content-offcanvas">
                Utilizamos cookies para melhorar sua experiência, gerenciando seu treino de acordo com a nossa 
                <a href="{{ route('policy') }}">Política de Privacidade</a>. Ao aceitar você concorda com os termos.
            </div>

        </div>
    </div>

</body>

</html>
<script src="{{ asset('js/cookie.js') }}" defer></script>
@yield('scripts')

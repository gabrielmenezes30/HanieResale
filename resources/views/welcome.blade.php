<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hanie Resale</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Link CSS -->

        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

        <!-- link Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico') }}" type="image/x-icon">

    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Hanie Resale
                </div>
            </div>

            <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

            @if(Route::has('login'))
            <div class="container-botoes links">
                @auth
                <a href="{{ url('/home') }}">
                    <button class="btnHome">
                    <i class="fas fa-home"></i>
                        Entrar
                    </button>
                </a>
                @else
                <a href="{{ route('login') }}">
                <button class="btn btn1">
                    Login
                </button>
                </a>

                @if(Route::has('register'))

                    <a href="{{ route('register') }}">
                        <button class="btn btn2">
                            Cadastrar
                        </button>
                    </a>
                @endif
            @endauth
            </div>
        @endif
        </div>
    </body>


        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

</html>

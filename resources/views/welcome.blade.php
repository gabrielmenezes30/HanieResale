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

        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    {{-- <body>
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
    </body> --}}
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">HanieResale</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    {{-- @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a  href="{{ url('/home') }}">
                                <button class="btn btn-primary">
                                    Home
                                </button>
                            </a>
                        @else
                            <a href="{{ route('login') }}">
                                <button class="btn btn-primary">
                                    Login
                                </button>
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">
                                    <button class="btn btn-outline-danger ">
                                        Cadastrar
                                    </button>
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif --}}

                {{-- @if(Route::has('login'))
                <div class="">
                    @auth
                    <a href="{{ url('/home') }}">
                        <button class="">
                        <i class="fas fa-home"></i>
                            Entrar
                        </button>
                    </a>
                    @else
                    <a href="{{ route('login') }}">
                    <button class="btn btn-primary  ">
                        Login
                    </button>
                    </a>

                    @if(Route::has('register'))

                        <a href="{{ route('register') }}">
                            <button class="btn btn-outline-danger">
                                Cadastrar
                            </button>
                        </a>
                    @endif
                @endauth
                </div>
            @endif --}}
                </div>
              </div>
            </div>
        </nav>

        <section>
            <div class="d-flex flex-row align-items-center justify-content-around container-fluid containerHome">
                <div class="textoHome">
                    <p>Bem vindo a <strong>Hanie Resale</strong> </p>
                    {{-- <div class="d-flex flex-row justify-content-evenly mt-5">
                        <button class="btnHome1">Login</button>
                        <button class="btnHome2">Cadastrar</button>
                    </div> --}}
                    @if (Route::has('login'))
                    <div class="d-flex flex-row justify-content-evenly mt-5">
                        @auth
                            <a  href="{{ url('/home') }}">
                                <button class="btnHome1">
                                    Home
                                </button>
                            </a>
                        @else
                            <a href="{{ route('login') }}">
                                <button class="btnHome1">
                                    Login
                                </button>
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">
                                    <button class="btnHome2">
                                        Cadastrar
                                    </button>
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif
                </div>
                <div>
                    <img src="{{asset('assets/images/svg/svg-home.svg')}}" alt="" width="600">
                </div>
            </div>
        </section>

    </body>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>

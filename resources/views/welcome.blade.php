<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hanie Resale</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">

        <!-- Link CSS -->

        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

        <!-- link Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico') }}" type="image/x-icon">

        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body class="body">
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

        <section id="primeriaSection">
            <div class="d-flex flex-row align-items-center justify-content-around container-fluid">
                <div class="d-flex flex-row align-items-center justify-content-between containerHome">
                    <div class="textoHome text-white">
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
            </div>
            <div class="d-flex flex-row justify-content-center arrow">
                <i class="fas fa-arrow-down"></i>
            </div>
        </section>

        <section id="segundaSection">
            {{-- <div class="container p-5">
                <div class="d-flex flex-column">
                    <div class="text-center">
                        <h1 class="textoPecas">Peças em disposição</h1>
                    </div>
                    <div class="boxInfo">
                        <h1>Vendas</h1>
                    </div>
                    <div class="d-flex flex-row-reverse boxCard">
                        <div class="card teste" style="width: 18rem;">
                            <img src="{{asset('assets/images/roupa.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                          <div class="card teste" style="width: 18rem;">
                            <img src="{{asset('assets/images/roupa.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                          <div class="card teste" style="width: 18rem;">
                            <img src="{{asset('assets/images/roupa.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>

                    </div>
                </div>

            </div> --}}
            <div class="container">
                <div class="container-cards">
                    <div>
                        <h1 class="text-center ">Na Hanie Resale você pode: </h1>
                    </div>
                    <div class="d-flex flex-row justify-content-evenly margin">
                        <div>
                            <a href=" {{ route('vendas') }} " class="link">
                                <div class="cards">
                                    <div class="d-flex flex-column align-items-center">
                                        <div class="contentCard">
                                            <p class="text-center">Vender uma peça!</p>
                                            <img src="{{asset('assets/images/welcome/venda.svg')}}" alt="" width="200">
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                        <div>
                            <a href=" {{ route('doacoes') }} " class="link">
                                <div class="cards">
                                    <div class="d-flex flex-column align-items-center">
                                        <div class="contentCard">
                                            <p class="text-center">Doar uma peça!</p>
                                            <img src="{{asset('assets/images/welcome/doacao.svg')}}" alt="" width="200">
                                        </div>
                                    </div>
                                </div>

                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section id="terceiraSection">
            <div class="container-fluid">
                <div class="d-flex justify-content-center">
                    <h1 class="text-white">Tecnologias usadas: </h1>
                </div>
                <div class="d-flex flex-row justify-content-evenly">
                    <div class="d-flex flex-column">
                        <img src="{{ asset('assets/images/laravel.png') }}" alt="" width="200">
                        <p class="text-center mt-2 text-white">Laravel</p>
                    </div>
                    <div class="d-flex flex-column">
                        <img src="{{ asset('assets/images/bootstrap.png') }}" alt="" width="250">
                        <p class="text-center mt-2 text-white">Bootstrap</p>
                    </div>
                </div>
            </div>

        </section>

        <section id="quartaSection">
            <div class="d-flex flex-row justify-content-evenly">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <h3 class="">Objetivo:</h3>
                    <h6 class=" mt-2">O sistema consiste em um local para venda de roupas usadas, no qual, <br> o indíviduo  pode escolher entre vender a peça em questão, ou doá-la.</h6>
                </div>
                <div>
                    <h2 class="text-center mt-5">Integrantes</h2>
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="{{ asset('assets/images/profile/gabriel.jpeg') }}" class="" alt="..." width="200" >
                            <p class="text-center text-dark mt-2">Gabriel: <br> Gestor da aplicação; <br> E Desenvolvedor BackEnd.</p>
                          </div>
                          <div class="carousel-item ">
                            <img src="{{ asset('assets/images/profile/alex.jpeg') }}" class="" alt="..." width="200" >
                            <p class="text-center text-dark">Alex: <br> Front-end.</p>
                          </div>
                          <div class="carousel-item ">
                            <img src="{{ asset('assets/images/profile/alisson.jpeg') }}" class="" alt="..." width="200" >
                            <p class="text-center text-dark mt-2">Alisson: <br> Desenvolvedor FrontEnd.</p>
                          </div>
                          <div class="carousel-item ">
                            <img src="{{ asset('assets/images/profile/emerson.jpeg') }}" class="" alt="..." width="200" >
                            <p class="text-center text-dark">Emerson: <br> Tester.</p>
                          </div>


                        </div>
                      </div>
                </div>
            </div>
        </section>

        <footer class="d-flex flex-row align-items-center justify-content-around footer">
            <div>
                <h5 class=" fs-1">Hanie Resale</h5>
            </div>
            <div>
                <h3 >Contato</h3>
                <p >HanieResale@contato.com</p>
            </div>
        </footer>
        <div class="text-center pt-2 pb-2" style="background-color:#E6E6E6;">
            <p >Direitos reservados© </p>
        </div>
    </body>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>

@extends('layouts.app')

    <!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<link rel="stylesheet" href="{{ asset('css/cssviews/home.scss') }}">

    <title>Home</title>
</head>
<body>
        @section('content')
    
        <div class="alert-message">
            <div class="row">
                @if(session('msg'))
                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                    <span class="msg">{{session('msg')}}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                @yield('content')
            </div>
        </div>
        
        <section>



        <div class="d-flex justify-content-evenly mt-5 p-5">
            <a href="{{route('vendas')}}" style="text-decoration: none;">
                <div>
                    <button class="btnTela">
                        <img src="{{asset('assets/images/welcome/venda.svg')}}" width="200">
                      <span style="font-weight: 600">Vendas</span>
                    </button>

                </div>
            </a>
            <a href="{{route('doacoes')}}" style="text-decoration: none;">
                <button class="btnTela">
                    <img src="{{asset('assets/images/welcome/doacao.svg')}}" width="200">
                    <span style="font-weight: 600">Doações</span>
                </button>
            </a>
        </div>
     

    </section>

    <section>
        <footer class="d-flex flex-row align-items-center justify-content-around footer">
            <div>
                <h5 class=" fs-1">Hanie Resale</h5>
            </div>
            <div>
                <h3 >Contato</h3>
                <p >HanieResale@contato.com</p>
            </div>
        </footer>
    </section>

    
    @endsection
</body>
</html>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- {{ Auth::user()->name }} -->
<link href="{{ asset('css/cssviews/home.css') }}" rel="stylesheet">

<!-- Link Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">




        {{-- <div class="container-fluid">
            <div class="containerTexto">
                <div>
                    <h1 class="text-dark">Seja bem vindo(a)
                        <strong>
                            <!-- Passando o parametro do nome do usuario a view -->
                            {{ Auth::user()->name }}
                        </strong>
                    </h1>
                </div>
            </div>
        </div>
        <hr>
            <div class="divContainer">
                <div class="caixaConversa"> --}}
                    {{-- <div>
                        <img src="{{asset('assets/images/logo.png')}}" alt="">
                    </div> --}}
                    {{-- <div class="caixaBotoes">
                        <a class="teste" href="/options/doacoes">
                            <button class="botoes">
                            <i class="fas fa-hand-holding-usd"></i>
                             Doações
                            </button>
                        </a>
                        <a class="teste" href="/options/vendas">
                            <button class="botoes">
                            <i class="fas fa-coins"></i>
                                Compras
                            </button>
                        </a>
                    </div>
                </div>
            </div> --}}



        <!-- <div class="teste">
            <a href="/options/doacoes">
                <button class="button m-5">
                    Doações
                </button>
            </a>
            <a href="/options/vendas">
                <button class="button ml-5" >
                    Vendas
                </button>
            </a>
        </div> -->
















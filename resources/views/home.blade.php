@extends('layouts.app')

@section('content')
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


    <div class="body">

        <div class="container-fluid">
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
                <div class="caixaConversa">
                    {{-- <div>
                        <img src="{{asset('assets/images/logo.png')}}" alt="">
                    </div> --}}
                    <div class="caixaBotoes">
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
            </div>



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

@endsection
</div>














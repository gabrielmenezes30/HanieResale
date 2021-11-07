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

<div class="container">
    <div class="d-flex justify-content-between">
        <div>
            <h1>Informações pessoais</h1>
            <div>

            </div>
        </div>
        <!-- <div class="teste d-flex flex-column">
            <div class="btn btn-primary btn-lg">
                <a class="text-decoration-none text-white" href="">Vendas</a>
            </div>
            <div class="btn btn-primary btn-lg mt-3 btn-outline-warning border-0">
                <a class="text-decoration-none text-secondary" href="">Compras</a>
            </div>
        </div> -->
        <div>
            <div class="classBotoes">
                <button class="botao">
                    <a class="textoBotaoHome" href="">Doações</a>
                </button>
            </div>
            <small class="texto ">Para entrar na Timeline de doações</small>
            <div>
                <button class="botao">
                    <a class="textoBotaoHome" href="">Vendas</a>
                </button>
            </div>
            <small>Para entrar na Timeline de Vendas</small>
        </div>
    </div>
</div>
@endsection


<style>
    .classBotoes{
        margin-top: 100px
    }


    .botao{
        width: 450px;
        height: 80px;
        background-color: #FF8000;
        margin-top:100px;
        border: none;
        font-size: 30px;
        border-radius: 5px;
    
    }
    .botao .textoBotaoHome{
        color: #ffffff;
        text-decoration: none;
    }
    .botao:hover{
        background-color: #B45F04;
        transition: ease all 300ms;

    }
    
    .teste{
        margin-top: 300px;
    }
</style>

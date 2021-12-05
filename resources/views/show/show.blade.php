@extends('layouts.app')

@section('content')



<div class="col-md-10 offset-md-1 container-fluid">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/storage/produtos/{{ $vendas->image }}" alt="" class="img-fluid">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>
                <i class="fas fa-align-justify"></i>
                Titulo: {{ $vendas->title }}
            </h1>
            <h1>
                <i class="fas fa-tags"></i>
                Preço: R${{$vendas->price}}
            </h1>
            <h1>
                <i class="fas fa-city"></i>
                Cidade: {{$vendas->city}}
            </h1>

            <h1>
                <i class="fas fa-file-alt"></i>
                Descrição: {{$vendas->description}}
            </h1>
        </div>
    </div>
</div>

@endsection


<style>
    #info-container i{
        margin-right: 6px;
    }
    .navbar{
        background-color: #111111 !important;
    }
    .container-fluid{
        margin-top: 200px !important;
    }
    .img-fluid{
        width: 400px;
        height: 400px;
    }
</style>

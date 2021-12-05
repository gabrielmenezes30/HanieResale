@extends('layouts.app')

@section('content')



<div class="col-md-10 offset-md-1 container-fluid">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/storage/produtos/{{ $doacoes->image }}" alt="" class="img-fluid">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>Titulo: {{ $doacoes->title }}</h1>
            <h1>Preço: R${{$doacoes->price}} </h1>
            <h1>Cidade: {{$doacoes->city}}</h1>
            <h1>Descrição: {{$doacoes->description}}</h1>
        </div>
    </div>
</div>

@endsection


<style>
    #info-container{

        height: 50vh;
    }
    .navbar{
        background-color: #111111 !important;
    }
    .container-fluid{
        margin-top: 200px !important;
    }
</style>

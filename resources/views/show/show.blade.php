@extends('layouts.app')

@section('content')



<div class="col-md-10 offset-md-1 container-fluid">
    <div class="d-flex flex-row justify-content-evenly">
        <div id="image-container" class="col-md-4">
            <img src="/storage/produtos/{{ $vendas->image }}" alt="" class="img-fluid">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>
                <i class="fas fa-align-justify"></i>
                Dono: {{ $vendasOwner['name'] }}
            </h1>
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
            <h1>
                <i class="fas fa-file-alt"></i>
                Contato: {{$vendas->tel}}
            </h1>
            <h1>

                @if($vendas->gender == 0)
                {{-- <i class="fas fa-file-alt"></i> --}}
                <p>
                    <i class="fas fa-file-alt"></i>
                    Gênero: Roupa Masculina
                </p>
                @else
                {{-- <i class="fas fa-file-alt"></i> --}}
                <p>
                    <i class="fas fa-file-alt"></i>
                    Gênero: Roupa Feminina
                </p>
                @endif
                {{-- Gênero: {{$doacoes->gender}} --}}
            </h1>

        </div>
    </div>
</div>


<section>
    <footer class="d-flex flex-row align-items-center justify-content-around footer">
        <div>
            <h5 class="fs-1">Hanie Resale</h5>
        </div>
        <div>
            <h3 >Contato</h3>
            <p >HanieResale@contato.com</p>
        </div>
    </footer>
</section>

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
    .footer{
    margin-top: 100px;
    padding-top: 50px;
    padding-bottom: 50px;
    margin-bottom: -20px;
    background-color: #E6E6E6;
    color: #3F3D56;
    }
    .fs-1{
        font-size: 50px;
    }
</style>

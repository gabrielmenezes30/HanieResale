@extends('layouts.app')

@section('content')



<div class="col-md-10 offset-md-1 container-fluid">
    <div class="d-flex flex-row justify-content-evenly">
        <div id="image-container" class="col-md-4">
            <img src="/storage/produtos/{{ $doacoes->image }}" alt="" class="img-fluid">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>
                <i class="fas fa-align-justify"></i>
                Dono: {{ $doacoesOwner['name'] }}
            </h1>
            <h1>
                <i class="fas fa-align-justify"></i>
                Titulo: {{ $doacoes->title }}
            </h1>


            <h1>
                <i class="fas fa-city"></i>
                Cidade: {{$doacoes->city}}
            </h1>

            <h1>
                <i class="fas fa-file-alt"></i>
                Descrição: {{$doacoes->description}}
            </h1>
            <h1>

                @if($doacoes->gender == 0)
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
</section>

@endsection


<style>
    *{
        padding: 0px;
        margin: 0px;
    }
    #info-container{

        height: 50vh;
    }
    .navbar{
        background-color: #111111 !important;
    }
    .container-fluid{
        margin-top: 200px !important;
    }
    .footer {
    margin-top: 100px;
    padding-top: 30px;
    background-color: #E6E6E6;
    color: #3F3D56;
}
</style>

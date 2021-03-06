<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link para o Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link href="{{ asset('css/optionsCSS/vendas.css') }}" rel="stylesheet">

    <title>@yield('title', 'Vendas') </title>
</head>
<body>

    <nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

    <a class="navbar-brand" href="">@yield('navbarTitle', 'Vendas')</a>
    <a class="navbar-brand" href="{{ route('createvenda') }}">
        <button class="btn btn-primary">
            <i class="fas fa-plus"></i>
        </button>
        </a>

    <div class="offcanvas offcanvas-start bg-danger" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">@yield('textoCanvas', 'Vendas')</h5>
        <button type="button" class="btn-close text-reset btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active text-uppercase fs-4" aria-current="page" href="{{ route('dashboard') }}">
            <i class="fas fa-user-circle"></i> Meus Produtos</a>
          </li>

         
          <li class="nav-item">
            <a class="nav-link active fs-5 text-success" href="#"><i class="fas fa-plus"></i>
             Anunciar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route('home') }}">Voltar</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<section class="">
    <div class="d-flex flex-row align-items justify-content-center teste">
           <div class="d-flex flex-column">
               <div class="d-flex flex-row align-items justify-content-center" style="margin-top: 100px; font-size: 50px;">
                   <p class="text-dark">
                    <i class="fas fa-search"></i>
                    Pesquisa uma pe??a!</p>
               </div>
               <form class="d-flex flex-column container-search" action="{{ route('vendas') }}" method="GET">
                   <input class="form-control me-2 search" type="search" placeholder=" Procurar...." aria-label="Search" name="search" id="search">
                   <button class="btn btn-success mt-4" type="submit"><i class="fas fa-search"></i>
                     Pesquisar</button>
               </form>
           </div>
       </div>
   </section>
   @if($search)
   <div class="margin">
       <h1 class="text-center">Buscando por: <span class="text-danger" style="font-weight: 700">"{{ $search }}"</span> </h1>
   </div>
   @endif




   <section class="">

    <div id="card-container" class="row">
   @foreach($venda as $venda)
       <div class="card mt-5" style="width: 20rem; height: 31rem;">
           <img src="/storage/produtos/{{ $venda->image }}" class="card-img-top" alt="..." style="width: 20rem; height: 20rem; margin-left:-11px;">
           <a class="p-1 btn btn-outline-primary mt-3" href="/create/{{ $venda->id }}">
            <i class="fas fa-eye"></i>
                Conferir
            </a>

           <div class="card-body">
             <h5 class="card-title">{{$venda->title}}</h5>
             <p class="card-text"> {{$venda->description}}</p>
             <div class="d-flex flex-row justify-content-around">
                 <h6 class="text-danger">Cidade: {{$venda->city}}</p>
                <h6 class="text-success">Pre??o: R${{$venda->price}}</p>
             </div>
           </div>
         </div>

   @endforeach
   @if (is_countable($venda) && count($venda) == 0 && $search)
       <h1 class="text-center">N??o foi possivel encontrar nenhuma pe??a com:
           <span class="text-danger" style="font-weight: 700">
            "{{ $search }}"!
            </span>  <br> <br>
          <a class="d-flex justify-content-center" href="{{ route('vendas') }}">
              <button class="btn btn-lg btn-primary">Ver todos!</button>
          </a>
      </h1>
    @elseif(is_countable($venda) && count($venda) == 0)
         <h1 class="text-center mt-5">N??o temos pe??as disponiveis</h1>
   @endif
        </section>


        

</body>






<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</html>

<style>
    .bg-danger{
        background-color: #FE9A2E !important
    }
    main{
      margin-top: 10rem;
    }
    .margin{
        margin-top: 100px;
    }
</style>

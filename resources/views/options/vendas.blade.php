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

    <link href="{{asset('../../../public/css/optionsCSS/doacoesCSS.css')}}" >

    <title>@yield('title', 'Vendas') </title>
</head>
<body>
   
    <nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

    <a class="navbar-brand" href="">@yield('navbarTitle', 'Vendas')</a>
    <a class="navbar-brand" href="">
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
            <a class="nav-link active text-uppercase fs-4" aria-current="page" href="{{ route('perfil') }}">
            <i class="fas fa-user-circle"></i> perfil</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link active fs-5" href="#"><i class="fas fa-shopping-cart"></i>
             Meus produtos</a>
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


<section class="p-5 m-5">
  <div>

  
    @foreach($vendas as $venda)

      <p>{{ $venda->title }}</p>

    @endforeach
  
  </div>
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
</style>
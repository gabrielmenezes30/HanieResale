@extends ('layouts.app')


@section('content')
<link rel="stylesheet" href="{{asset('css/perfil/perfil.css')}}">
   <!-- <p>{{ Auth::user()->name }} </p>
   <p>{{ Auth::user()->email }}</p> -->

   {{-- <div class="controle">
       <div class="container">
           <div class="teste">
               <div class="mb-3 form">
                <label for="formGroupExampleInput" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="{{ Auth::user()->name }} ">
              </div>
              <div class="mb-3 form">
                <label for="formGroupExampleInput2" class="form-label">Email:</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="{{ Auth::user()->email }}">
              </div>
           </div>
          <div class="botoes">
              <a href="">
                  <button class="btn btn-outline-danger mt-5 text-white">Vendas</button>
              </a>
              <a href="">
                <button class="btn btn-primary mt-5">Doações</button>
            </a>
            <a href="">
                <button class="btn btn-primary mt-5">Meus produtos</button>
            </a>

          </div>
       </div>
   </div> --}}
   >
   {{-- <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
       <span class="msg">{{session('msg')}}</span>
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div> --}}
<div class="mensagem-de-alerta">

    @if(session('msg'))
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Opa</h4>
            <span class="msg">{{session('msg')}}</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            <hr>
          </div>
    
              @endif
</div>
          @yield('content')
   <main class="container-fluid content">
       <p class="text text-dark"><i class="fas fa-user-circle"></i> Informações pessoais</p>
       <div class="d-flex flex-row align-items-center justify-content-around
       ">
           <div class="d-flex flex-column ">
               <div class="mt-3 d-flex flex-column formulario">
                   <label for="">Nome</label>
                   <input type="text" class="form-control" disabled value="{{ Auth::user()->name }} ">
               </div>
               <div class="mt-3 d-flex flex-column">
                <label for="">Email</label>
                <input type="text" class="form-control" disabled value="{{ Auth::user()->email }} ">
            </div>

           </div>
           <div class="d-flex flex-column">
            <a href="{{ route('vendas')}}">
                <button class="btn1 ">
                    <i class="fas fa-bell"></i>
                    Vendas
                </button>
            </a>
            <a href="{{ route('doacoes')}}">
                <button class="btn2 ">
                    <i class="fas fa-adjust"></i>
                    Doações
                </button>
            </a>
           </div>
       </div>

       <div class="dashboard-container">

            <h1 class="mt-5 text-center">Minhas peças para venda</h1>
            @if(count($vendas) > 0)
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">Venda</th>
                        <th scope="col">Peças</th>
                        <th scope="col">Ações</th>
                        <th scope="col">Preview</th>

                    </tr>
                </thead>
                <tbody class="">
                    @foreach($vendas as $venda)

                    <tr>
                        <td scropt="row">{{ $loop->index +1 }}</td>
                        <td><a href="/create/{{ $venda->id }}" class="text-info"> {{ $venda->title }}</a></td>

                        <td>
                            <a href="/create/edit/{{ $venda->id }}" class="btn btn-success edit-btn">
                                <i class="fas fa-edit"></i> Editar</a>

                           <form action="/create/{{ $venda->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn">
                                <i class="fas fa-trash-alt"></i> Deletar</button>
                            </form>
                        </td>
                            <td>
                                <img src=" /storage/produtos/{{ $venda->image }}" alt="" width="100">
                            </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
            @else
            <h3 class="text-center mt-5">Você ainda não tem nenhuma peça à venda</h3>
            @endif
       </div>






   </main>



@endsection

    <style>
        .dashboard-container{
            margin-bottom: 30px;
            margin-top: 30px;
        }
        .dashboard-container form{
            display: inline-block;
        }










        /* body{
            background-color: #7401df;
        }
        .form-control{
           width: 500px;
        }
        .controle{
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-top: 10rem;
            width: 100vh;
            height: 100vh;
            border: none;
            background-color: #7401df;
            color: #ffffff;
        }
        .container{
            display: flex;
            justify-content: space-around;
            width: 90vh;
        }
        .controle{
            display: flex;
            flex-direction: column;
        }
        .container{
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 100vh;
            color: #ffffff;

        }
        .teste{
            display: flex;
            flex-direction: column;
        }
        .botoes{
            display: flex;
            flex-direction: column;
        }
        .form{
            display: flex;
            flex-direction: column;
        }
        .btn{
            width: 200px !important;
        } */

    </style>
</html>

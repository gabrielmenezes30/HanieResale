@extends ('layouts.app')


@section('content')
<!-- CSS only -->


<link rel="stylesheet" href="{{asset('css/perfil/perfil.css')}}">
   <!-- <p>{{ Auth::user()->name }} </p>
   <p>{{ Auth::user()->email }}</p> -->

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


   <main class="container-fluid content">
       <p class="text"><i class="fas fa-user-circle"></i> Informações pessoais</p>
       <div class="d-flex flex-row align-items-center justify-content-around
       ">
           <div class="d-flex flex-column ">
               <div class="mt-3 d-flex flex-column formulario">
                   <label for="">Nome</label>
                   <input type="text" class="form-control" aria-label="Disabled input example" disabled value="{{ Auth::user()->name }} ">
               </div>
               <div class="mt-3 d-flex flex-column">
                <label for="">Email</label>
                <input type="text" class="form-control" value="{{ Auth::user()->email }}" disabled>
            </div>

           </div>
           <div class="d-flex flex-column">
            <a href="{{ route('vendas') }}">
                <button class="btn1 ">
                    <i class="fas fa-bell"></i>
                    Vendas
                </button>
            </a>
            <a href="{{ route('doacoes') }}">
                <button class="btn2 ">
                    <i class="fas fa-adjust"></i>
                    Doações
                </button>
            </a>
           </div>
       </div>

       <div class="dashboard-container">
            <h1 class="mt-5 text-center">Minhas peças para Doacao</h1>
            @if(count($doacoes) > 0)
            <table class="table table-dark table-striped ">
                <thead>
                    <tr>
                        <th scope="col">Venda</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Ações</th>
                        <th scope="col">Preview</th>

                    </tr>
                </thead>
                <tbody class="">
                    @foreach($doacoes as $doacao)
                    
                    <tr>
                        <td scropt="row">{{ $loop->index +1 }}</td>
                        <td><a href="/create/doacao/{{ $doacao->id }}" class="text-success">{{ $doacao->title }}</a></td>

                        <td>
                            <a href="/create/doacao/edit/{{ $doacao->id }}" class="btn btn-success edit-btn" >
                                <i class="fas fa-edit"></i>
                                Editar</a>

                           <form action="/create/doacao/{{ $doacao->id }}" method="POST" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            @csrf
                            @method('DELETE')
                            <button  type="submit" class="btn btn-danger delete-btn">
                                <i class="fas fa-trash-alt"></i>
                                Deletar</button>
                            </form>
                        </td>
                        <td>
                            <img src=" /storage/produtos/{{ $doacao->image }}" alt="" width="100">
                        </td>
                    </tr>

                


                    @endforeach
                </tbody>
            </table>
            @else
            <h3 class="text-center mt-5">Você ainda não tem nenhuma peça à doação</h3>
            @endif
       </div>






   </main>


   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

<script src="{{asset('js/dashboard.js')}} "></script>

<!-- JavaScript Bundle with Popper -->
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

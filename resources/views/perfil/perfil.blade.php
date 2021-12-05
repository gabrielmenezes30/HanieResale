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

   <main class="container-fluid content">
       <p class="text"><i class="fas fa-user-circle"></i> Informações pessoais</p>
       <div class="d-flex flex-row align-items-center justify-content-around
       ">
           <div class="d-flex flex-column ">
               <div class="mt-3 d-flex flex-column formulario">
                   <label for="">Nome</label>
                   <input type="text" class="form-control" >
               </div>
               <div class="mt-3 d-flex flex-column">
                <label for="">Email</label>
                <input type="text" class="form-control">
            </div>
            <div class="mt-3 d-flex flex-column">
                <label for="title">Biografia</label>
                <textarea class="form-control" name="description" id="description" maxlength="100"></textarea>
            </div>

           </div>
           <div class="d-flex flex-column">
            <a href="">
                <button class="btn1 ">
                    Vendas
                </button>
            </a>
            <a href="">
                <button class="btn2 ">
                    Doações
                </button>
            </a>
           </div>
       </div>
   </main>



@endsection

    <style>
        









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

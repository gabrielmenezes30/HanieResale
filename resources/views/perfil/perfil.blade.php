


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- link CSS perfil --}}
    <link href="{{ asset('css/perfil/perfil.css') }}" rel="stylesheet">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   <!-- <p>{{ Auth::user()->name }} </p>
   <p>{{ Auth::user()->email }}</p> -->

   <div class="controle">
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
   </div>





</body>

    <style>
        body{
            background-color: #7401df;
        }
        .form-control{
           width: 500px;
        }
        /* .controle{
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
        } */
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
        }

    </style>
</html>

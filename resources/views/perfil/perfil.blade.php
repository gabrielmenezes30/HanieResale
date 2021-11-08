<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   <!-- <p>{{ Auth::user()->name }} </p>
   <p>{{ Auth::user()->email }}</p> -->
   

    <div class="container-fluid">
        <div class="teste">
            <div class="boxContainer">
                <div class="caixaInfo">
                    <h5>Seu nome:</h5>
                    <input type="{{ Auth::user()->name }}" placeholder="{{ Auth::user()->name }}">
                    <h5>Seu email</h5>
                    <input type="{{ Auth::user()->name }}" placeholder="{{ Auth::user()->email }}">
                </div>
                
            </div>
        </div>
    </div>





</body>
    <style>
        .teste{
            width: 100%;
            background-color:#2E2E2E;
        }


        .caixaInfo{
            color: #ffffff;
            display: flex;
            flex-direction: column;
            margin-top: 10rem;
            padding: 10px;
        }
        .caixaInfo input{
            width: 300px;
            margin-left: 15px;
        }
        input::placeholder{
            color: #151515;
        }

    </style>
</html>
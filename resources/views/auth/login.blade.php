<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>


    <title>@yield('title', 'login')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand fs-1" href="{{url('/')}}">Hanie Resale</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('register') }}">Cadastrar</a>
            </li>
          </ul>
        </div>
      </nav>

    <main>

        <div class="container">
            @yield('content')
            <div class="d-flex flex-row align-items-center justify-content-between containerLogin">

                <div>
                    <img src="{{asset('assets/images/svg/svg-login.svg')}}" alt="" width="400">
                </div>
                <div class="ajuste-container-login">
                    <div class="col-md-8">
                        <div class="card cor-card">
                            <div class="card-header">{{ __('Login') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn1 btn text-white">
                                                {{ __('Login') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link botao-forgot" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="text-center">
                <a href="{{route('register')}}">
                    <p class="mt-5 text-success">Não tem conta ainda?</p>
                </a>
            </div>
        </div>
    </main>



</body>
</html>

<style>
    body, html{
        background-color: #ffffff !important;
    }
    .cor-card{
        background-color: #ffffff !important;
        color: #111111;
        width: 600px;
    }
    .botao-forgot{
        color: #000000 !important;
    }
    .container{
        margin-top: 200px
    }
    .ajuste-container-login{

    }
    .btn1{
        background-color: #FF8000 !important;
    }

    @media (max-width: 1000px){
        img{
            display: none;
        }

    }
</style>

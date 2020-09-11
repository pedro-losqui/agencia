<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Anchieta - Agência experimental de TI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/app.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg authentication-bg-pattern">

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <a href="{{ route('home') }}">
                                    <span><img src="{{ asset('site/images/logo.png') }}"
                                            height="46"></span>
                                </a>
                                <p class="text-muted mb-4 mt-3">Digite seu endereço de e-mail e senha para acessar o
                                    painel de administração.</p>
                            </div>

                            <h5 class="auth-title">Agência experimental de TI</h5>

                            <form action="{{ route('auth') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group mb-3">
                                    <label for="emailaddress">Endereço de e-mail</label>
                                    <input class="form-control" type="email" name="email"
                                        placeholder="Digite seu e-mail">
                                </div>

                                @error('email')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <div class="form-group mb-3">
                                    <label for="password">Senha</label>
                                    <input class="form-control" type="password" name="password"
                                        placeholder="Digite sua senha">
                                </div>

                                @error('password')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <div class="form-group mb-3">
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-danger btn-block" type="submit"> Entrar </button>
                                </div>

                            </form>

                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p> <a href="#" class="text-muted ml-1">Esqueceu sua senha?</a></p>
                            <p class="text-muted">Não tem conta? <a href="{{ route('register') }}"
                                    class="text-muted ml-1"><b class="font-weight-semibold">Inscrever-se</b></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer footer-alt">
        &copy; {{ date('Y') }} <a href="#">Anchieta - Agência experimental de TI.
    </footer>

    <script src="{{ asset('admin/js/vendor.min.js') }}"></script>
    <script src="{{ asset('admin/js/app.min.js') }}"></script>

</body>

</html>

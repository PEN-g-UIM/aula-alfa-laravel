<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recuperação de senha</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">

        <div class="card shadow-sm" style="width: 400px;">
            <div class="card-body">

                <h3 class="text-center mb-3">Recuperar senha</h3>

                <p class="text-muted">
                    Informe seu e-mail para receber o link de recuperação.
                </p>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form action="{{ route('password.email') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="email">E-mail</label>

                        <input type="email" name="email" id="email" class="form-control"
                            placeholder="Digite seu e-mail" value="{{ old('email') }}" required autofocus>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Recuperar senha
                    </button>
                </form>

                <div class="text-center mt-3">
                    <a href="{{ url('/login') }}">Voltar ao login</a>
                </div>

            </div>
        </div>

    </div>

</body>

</html>

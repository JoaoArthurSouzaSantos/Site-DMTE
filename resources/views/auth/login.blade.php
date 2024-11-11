<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Configurações da imagem de fundo */
        body {
            background-image: url('{{ asset('image.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.2);
            padding: 30px;
            border-radius: 15px;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .form-control, .btn {
            border-radius: 20px;
        }

        .social-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        .social-buttons .btn {
            width: 100px;
        }

        .forgot-password-link {
            color: white !important;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="mb-3">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Senha">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
                <button type="submit" class="btn btn-primary w-100 mb-3" >
                    {{ __('Login') }}
                </button>
                <button type="submit" class="btn btn-primary w-100 mb-3" >
                    {{ __('Registre-se') }}
                </button>
            <div class="text-center">
                @if (Route::has('password.request'))
                    <a class="btn btn-link forgot-password-link" href="{{ route('password.request') }}">
                        {{ __('Esqueceu a senha?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

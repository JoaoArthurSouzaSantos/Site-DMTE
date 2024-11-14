<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
body {
    background-color: #f9f9fc; /* Fundo suave */
    color: #4a4a6a; /* Texto roxo escuro */
    font-family: 'Nunito', sans-serif; /* Fonte leve */
    margin: 0;
    padding: 0;
    line-height: 1.6;
}

/* Cabeçalho da navegação */
.navbar {
    background-color: #ffffff; /* Branco */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Sombra leve */
}

.navbar-brand, .nav-link {
    color: #4a4a6a !important; /* Texto em roxo escuro */
}

.nav-link:hover {
    color: #6a5acd !important; /* Lilás ao passar o mouse */
}

/* Botões */
.btn-custom {
    background-color: #6a5acd; /* Lilás */
    color: #ffffff;
    border: none;
    transition: background-color 0.3s;
}

.btn-custom:hover {
    background-color: #483d8b; /* Roxo escuro */
}

/* Gradiente lilás a roxo */
main {
    padding: 2rem;
    background: linear-gradient(to bottom, #dcd6f7, #6a5acd); /* Gradiente de lilás a roxo */
    min-height: calc(100vh - 80px); /* Ajusta a altura para preencher a página */
}

/* Footer (opcional, se quiser que ele tenha a mesma cor do gradiente) */
footer {
    background-color: #6a5acd; /* Fundo lilás */
    color: #ffffff;
    text-align: center;
    padding: 1rem;
    margin-top: 2rem;
}
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto"></ul>
                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container py-4">
            @yield('content')
        </main>

        <footer class="footer">
            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
        </footer>
    </div>

    <!-- Bootstrap JS (opcional, se precisar de scripts) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

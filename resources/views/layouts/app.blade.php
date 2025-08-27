<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>@yield('title', 'Sistema de Aulas')</title>

    <!-- Link al CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Google Fonts (opcional, le da look cute) -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&family=Sacramento&display=swap" rel="stylesheet">
</head>
<body class="page-bg">
    <header class="topbar">
        <div class="container">
            <h1 class="logo">Aulas <span class="logo-heart">💖</span></h1>
            <nav>
                <a href="{{ url('/') }}" class="nav-link">Inicio</a>
                <a href="{{ route('aulas.index') }}" class="nav-link">Aulas</a>
                <a href="#" class="nav-link">Reservas</a>
            </nav>
        </div>
    </header>

    <main class="container content">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">© {{ date('Y') }} - Sistema Aulas • Cute UI</div>
    </footer>
</body>
</html>
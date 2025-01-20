<!-- resources/views/app.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Força de Vendas</title>
    <!-- CSS do Laravel (vai ser compilado e incluído automaticamente) -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Força de Vendas</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Produtos</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content') <!-- Onde o conteúdo da página será inserido -->
    </div>

    <!-- JavaScript do Laravel (compilado automaticamente) -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

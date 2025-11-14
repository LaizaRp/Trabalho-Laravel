<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loja de Carros</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Loja Carros Antiga</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Estoque</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-primary text-white" href="{{ route('carros.create') }}">Cadastrar Carro</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-4 mb-5">
        @yield('content') 
    </main>

    <footer class="text-center p-3 mt-5 bg-light border-top">
        © {{ date('Y') }} Loja de Carros Simples.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
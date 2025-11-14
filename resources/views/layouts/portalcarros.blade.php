<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PortalCarros') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="{{ asset('css/portalcarros.css') }}" rel="stylesheet"> 
</head>
<body class="bg-full-blue"> 
    <div id="app">
      
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm py-3">
            <div class="container-fluid"> 
                
              
                <a class="navbar-brand d-flex align-items-center ms-3 me-3" href="{{ url('/') }}">
                    <i class="fas fa-car fa-2x me-2 text-white"></i> 
                    <span class="fw-bold fs-4">Loja de Carros</span>
                </a>
    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    
                    
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">

                            <a class="nav-link fw-bold text-uppercase" href="{{ route('portal.index') }}">
                                Consulte nossos veículos
                            </a>
                        </li>
                    </ul>

                  
                    <ul class="navbar-nav ms-auto me-3">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-outline-light rounded-pill px-3" href="{{ route('login') }}">
                                        <i class="fas fa-sign-in-alt me-1"></i> {{ __('Entrar') }}
                                    </a>
                                </li>
                            @endif
                        @else
                           
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('carros.index') }}">
                                        {{ __('Painel Admin') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
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

        <main class="py-4">
            @yield('content')
        </main>


        <footer class="bg-dark text-white-50 py-4 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <h5 class="text-white">Seu Portal</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white-50 text-decoration-none">Sobre Nós</a></li>
                            <li><a href="#" class="text-white-50 text-decoration-none">Políticas</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-3">
                        <h5 class="text-white">Ajuda</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white-50 text-decoration-none">Ajuda e FAQ</a></li>
                            <li><a href="#" class="text-white-50 text-decoration-none">Fale Conosco</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-3">
                        <h5 class="text-white">Siga-nos</h5>
                        <a href="#" class="text-white-50 me-2"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="#" class="text-white-50 me-2"><i class="fab fa-instagram fa-lg"></i></a>
                    </div>
                </div>
                <hr class="bg-white-50">
                <div class="text-center text-white-50">
                    &copy; {{ date('Y') }} Loja de Carros. Todos os direitos reservados.
                </div>
            </div>
        </footer>
    </div>

    {{-- BOOTSTRAP 5 JS: O script foi revisado para incluir o atributo 'defer' --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
</body>
</html>
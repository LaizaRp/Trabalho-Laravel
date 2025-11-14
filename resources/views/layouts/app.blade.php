<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Loja de Carros') }}</title>

 
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    <style>
        html, body {
            height: 100%;
        }
        
       
        .main-content {
            padding-top: 72px; 
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start; 
        }

      
        .auth-card-container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            min-height: calc(100vh - 72px); 
        }
    </style>
</head>
<body>
    <div id="app">
     
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <i class="fas fa-car-alt me-2"></i> {{ config('app.name', 'Loja de Carros') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
              
                    <ul class="navbar-nav me-auto">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('carros.index') }}"><i class="fas fa-tachometer-alt me-1"></i> Dashboard</a>
                            </li>
                            {{-- Se as rotas de marca existirem --}}
                            @if (Route::has('marcas.index'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('marcas.index') }}"><i class="fas fa-tags me-1"></i> Marcas</a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link btn btn-sm btn-outline-light ms-3" href="{{ route('carros.create') }}"><i class="fas fa-plus me-1"></i> Adicionar Carro</a>
                            </li>
                        @endauth
                    </ul>

           
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
                                    <i class="fas fa-user-circle me-1"></i> {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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

        <main class="main-content">
           
            @if (in_array(Route::currentRouteName(), ['login', 'register', 'password.request', 'password.reset', 'verification.notice', 'verification.verify']))
                <div class="auth-card-container">
                    @yield('content')
                </div>
            @else
              
                <div class="container py-4">
                    @yield('content')
                </div>
            @endif
        </main>
    </div>

    <!-- Script JS do Bootstrap 5.3 (Última linha do body) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
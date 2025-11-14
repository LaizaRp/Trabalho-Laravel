<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Loja de Carros</title>
    
    <link href="{{ asset('css/portalcarros.php') }}" rel="stylesheet"> 
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="auth-page">

    <div class="auth-wave-bg-bottom"></div> 

    <div class="auth-card">
  
        <div class="auth-icon">
             <i class="fas fa-user"></i> 
        </div>

        <h2>Acesse sua conta</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="E-mail ou Nome de Usuário">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Senha">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="secondary-links">
                <div>
                    <input type="checkbox" name="remember" id="remember" style="width: auto;">
                    <label for="remember" style="display: inline;">Lembrar de mim</label>
                </div>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Esqueceu a senha?</a>
                @endif
            </div>

            <div class="form-group">
                <button type="submit" class="btn-auth-primary">
                    ENTRAR
                </button>
            </div>

            <div class="links" style="margin-top: 20px;">
                Não tem conta? <a href="{{ route('register') }}">Cadastre-se</a>
            </div>
        </form>
    </div>
</body>
</html> 
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro | Loja de Carros</title>
    
    <link href="{{ asset('css/portalcarros.php') }}" rel="stylesheet"> 
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="auth-page">

    <div class="auth-wave-bg-bottom"></div> 

    <div class="auth-card">
        <div class="auth-icon">
             <i class="fas fa-user-plus"></i>
        </div>

        <h2>Crie sua conta</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="Nome Completo">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <input id="email" type="email" name="email" value="{{ old('email') }}" required placeholder="E-mail">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Senha">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <input id="password_confirmation" type="password" name="password_confirmation" required placeholder="Confirmar Senha">
            </div>

            <div class="form-group">
                <button type="submit" class="btn-auth-primary">
                    REGISTRAR
                </button>
            </div>

            <div class="links" style="margin-top: 20px;">
                Já tem conta? <a href="{{ route('login') }}">Faça login</a>
            </div>
        </form>
    </div>
</body>
</html>
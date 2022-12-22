<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="{{ asset('css/estilos-register.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>
<div class="container">
        <div class="register-left">
            <div class="register-header">
                <h1>Regístrate</h1>
            </div>
            <div  class="errores">
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="register-formc">
                <form action="{{ url('register') }}" class="register-form" method="post">
                    <div class="register-form-content">
                        <h5>Nombre Completo:</h5>
                        <div class="form-item">
                            <span class="form-item-icon material-symbols-outlined">person</span>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Ingresa Nombre Completo" required autofocus>
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">Nombre completo sin símbolos</span>
                            </div>
                        </div>
                        <h5>Dirección de correo:</h5>
                        <div class="form-item">
                            <span class="form-item-icon material-symbols-outlined">email</span>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Correo Electrónico" required>
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">Puedes usar letras, números y signos de puntación </span>
                            </div>
                        </div>
                        <h5>Contraseña:</h5>
                        <div class="form-item">
                            <span class="form-item-icon material-symbols-outlined">lock</span>
                            <input type="password" name="password" id="password" placeholder="Ingresa Contraseña" required>
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">Usa de 8 a 20 caracteres con mínimo 1 mayúscula</span>
                            </div>
                        </div>
                        <h5>Confirmar Contraseña:</h5>
                        <div class="form-item">
                            <span class="form-item-icon material-symbols-outlined">lock</span>
                            <input type="password" name="password_confirmation" id="password_confirmation   " placeholder="Confirme Contraseña" required>
                        </div>
                        @csrf
                        <button type="submit">Registrarme</button>
                    </div>
                </form>
                <div class="register-social">
                    <div>o continuar con google</div>
                    <div class="register-social-btn">
                        <a href="/login-google">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-google" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M17.788 5.108a9 9 0 1 0 3.212 6.892h-8" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="register-right">
            <img src="{{ asset('img/Logo original.png') }}" alt="Logo">
        </div>
    </div>
</body>
</html>

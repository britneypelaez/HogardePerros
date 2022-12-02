<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/estilos-register.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>
<div class="login-card-container">
        <div class="login-card">
            <div class="login-left">
                <div class="login-card-header">
                    <h1>Registrate</h1>
               </div>
               <form action="{{ url('register') }}" class="login-card-form" method="POST">
                    <div class="form-item">
                        <span class="form-item-icon material-symbols-outlined">person</span>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nombre Completo" required autofocus>
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">Nombre completo sin símbolos</span>
                        </div>
                    </div>
                    <div class="form-item">
                        <span class="form-item-icon material-symbols-outlined">email</span>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Correo electrónico" required>
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">Puedes usar letras, números y signos de puntación </span>
                        </div>
                    </div>
                    <div class="form-item">
                        <span class="form-item-icon material-symbols-outlined">lock</span>
                        <input type="password" name="password" id="password" placeholder="Contraseña" required>
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">Usa de 8 a 20 caracteres con minimo 1 mayuscula</span>
                        </div>
                    </div>
                    <div class="form-item">
                        <span class="form-item-icon material-symbols-outlined">lock</span>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmar contraseña" required>
                    </div>
                    @csrf
                    <button type="submit">Registrarme</button>
               </form>
            </div>
            <div class="login-right">
                <img src="/IMG/LOGO.png" alt="Logo">
            </div>
        </div>
    </div>
</body>
</html>

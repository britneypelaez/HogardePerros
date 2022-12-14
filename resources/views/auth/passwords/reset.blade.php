<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/estilos-cambairContraseña.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <div class="register-left">
            <div class="register-header">
                <h1>Cambiar Contraseña</h1>
            </div>
            <div class="register-formc">
                <form action="{{ route('password.update') }}" class="register-form" method="post">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="register-form-content">
                        <h5>Dirección de Correo:</h5>
                        <div class="form-item">
                            <span class="form-item-icon material-symbols-outlined">email</span>
                            <input id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" placeholder="Correo Electrónico" autofocus>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <h5>Nueva Contraseña:</h5>
                        <div class="form-item">
                            <span class="form-item-icon material-symbols-outlined">lock</span>
                            <input id="password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Nueva Contraseña">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">Usa de 8 a 20 caracteres con mínimo 1 mayúscula</span>
                            </div>
                        </div>
                        <h5>Confirmar Nueva Contraseña:</h5>
                        <div class="form-item">
                            <span class="form-item-icon material-symbols-outlined">lock</span>
                            <input id="password-confirm" type="password"name="password_confirmation" placeholder="Confirme Nueva Contraseña" required autocomplete="new-password">
                        </div>
                        <button type="submit">Cambiar Contraseña</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

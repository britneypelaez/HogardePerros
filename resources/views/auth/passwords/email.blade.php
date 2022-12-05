<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>
    <div class="container-reset">
        <div class="reset">
            <div class="reset-header">
                <h1>Restablecer Contraseña</h1>
                <div>Por favor ingrese el correo electrónico con el que se registró</div>
            </div>
            <form action="" class="reset-form" method="post">
                <div class="form-item">
                    <span class="form-item-icon material-symbols-outlined">email</span>
                    <input type="email" name="email-reset" id="email-reset" placeholder="Ingresa Email" required autofocus>
                </div>
                <button type="submit">Enviar correo de restablecimiento</button>
            </form>
            <div class="reset-footer">
                <a href="{{ route('voyager.login') }}">Iniciar Sesión</a>
            </div>
            @csrf
        </div>
    </div>
</body>
</html>


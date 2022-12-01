<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>
    <div class="login-card-container">
        <div class="login-card">
           <div class="login-card-logo">
            <?php $admin_logo_img = Voyager::setting('admin.icon_image', ''); ?>
             <img src="{{ Voyager::image($admin_logo_img) }}" alt="Logo">
           </div>
           <div class="login-card-header">
                <h1>Ingresa</h1>
                <div>Por favor inicie sesión para usar la plataforma</div>
           </div>
           <form action="{{ route('voyager.login') }}" class="login-card-form" method="post">
            <div class="form-item">
                <span class="form-item-icon material-symbols-outlined">email</span>
                <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="{{ __('voyager::generic.email') }}" required autofocus>
            </div>
            <div class="form-item">
                <span class="form-item-icon material-symbols-outlined">lock</span>
                <input type="password" name="password" id="password" placeholder="{{ __('voyager::generic.password') }}" required>
            </div>
            <div class="form-item-other">
                <div class="checkbox">
                    <input type="checkbox" name="recordarcheckbox" id="recordarcheckbox">
                    <label for="recordarcheckbox">Recordar</label>
                </div>
                <a href="#">Olvidé mi contraseña</a>
            </div>
            @csrf
            <button type="submit">Ingresar</button>
           </form>
           <div class="login-card-footer">
            No tienes una cuenta?<a href="{{ route('admin/register') }}">Create una cuenta</a>
           </div>
        </div>
    </div>
</body>
</html>

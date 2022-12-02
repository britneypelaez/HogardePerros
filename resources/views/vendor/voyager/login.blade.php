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
             <img src="/IMG/LOGO.png" alt="Logo">
           </div> 
           <div class="login-card-header">
                <h1>Ingresa</h1>
                <div>Por favor inicie sesión para usar la plataforma</div>
           </div>
           <form action="" class="login-card-form" method="post">
            <div class="form-item">
                <span class="form-item-icon material-symbols-outlined">email</span>
                <input type="email" name="email" id="email" placeholder="Ingresa Email" required autofocus>
            </div>
            <div class="form-item">
                <span class="form-item-icon material-symbols-outlined">lock</span>
                <input type="password" name="password" id="password" placeholder="Ingresa Contraseña" required>
            </div>
            <button type="submit">Ingresar</button>
           </form>
           <div class="login-card-footer">
            No tienes una cuenta?<a href="{{ route('password.request') }}">Create una cuenta</a>
           </div>
           <div class="login-card-social">
            <div>Inicio de sesión con google</div>
            <div class="login-card-social-btn">
                <a href="/login-google">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-google" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M17.788 5.108a9 9 0 1 0 3.212 6.892h-8" />
                    </svg>
                </a>
            </div>
        </div>
        </div>
    </div>
</body>
</html>

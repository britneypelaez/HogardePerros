<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Login') }}</title>
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
                <h2>Ingresa</h2>
                <div>Por favor inicie sesión para usar la plataforma</div>
                @error('email')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <form action="{{ route('login') }}" class="login-card-form" method="post">
                @csrf
                <div class="form-item">
                    <span class="form-item-icon material-symbols-outlined">email</span>
                    {{-- <input type="email" name="email" id="email" placeholder="Ingresa Email" required autofocus> --}}
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" placeholder="Ingresa Email" value="{{ old('email') }}" required
                        autocomplete="email" autofocus>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-outlined">lock</span>
                    {{-- <input type="password" name="password" id="password"  placeholder="Ingresa Contraseña" required> --}}
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" placeholder="Ingresa Contraseña" required autocomplete="current-password">
                </div>
                <div class="form-item-other">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('Olvidé mi contraseña') }}
                        </a>
                    @endif
                </div>
                <button type="submit">Ingresar</button>
            </form>
            <div class="login-card-footer">
                No tienes una cuenta?<a href="{{ route('admin/register') }}">Create una cuenta</a>
            </div>
            <div class="login-card-social">
                <div>Inicio de sesión con google</div>
                <div class="login-card-social-btn">
                    <a href="/login-google">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-google"
                            width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M17.788 5.108a9 9 0 1 0 3.212 6.892h-8" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

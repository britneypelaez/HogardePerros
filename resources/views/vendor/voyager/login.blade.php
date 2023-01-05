<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Login') }}</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>

<body>
<div class="container">
    <div class="header">
      <h1>Hogar De Perros</h1>
      <div class="logo">
        <img src="{{ asset('img/LOGO_xd.png') }}" alt="">
      </div>
    </div>
    <div class="center">
      <div class="ear ear--left"></div>
      <div class="ear ear--right"></div>
      <div class="face">
        <div class="eyes">
          <div class="eye eye--left">
            <div class="glow"></div>
          </div>
          <div class="eye eye--right">
            <div class="glow"></div>
          </div>
        </div>
        <div class="nose">
          <svg width="38.161" height="22.03">
            <path d="M2.017 10.987Q-.563 7.513.157 4.754C.877 1.994 2.976.135 6.164.093 16.4-.04 22.293-.022 32.048.093c3.501.042 5.48 2.081 6.02 4.661q.54 2.579-2.051 6.233-8.612 10.979-16.664 11.043-8.053.063-17.336-11.043z" fill="#243946"></path>
          </svg>
          <div class="glow"></div>
        </div>
        <div class="mouth">
          <svg class="smile" viewBox="-2 -2 84 23" width="84" height="23">
            <path d="M0 0c3.76 9.279 9.69 18.98 26.712 19.238 17.022.258 10.72.258 28 0S75.959 9.182 79.987.161" fill="none" stroke-width="3" stroke-linecap="square" stroke-miterlimit="3"></path>
          </svg>
          <div class="mouth-hole"></div>
          <div class="tongue breath">
            <div class="tongue-top"></div>
            <div class="line"></div>
            <div class="median"></div>
          </div>
        </div>
      </div>
      <div class="hands">
        <div class="hand hand--left">
          <div class="finger">
            <div class="bone"></div>
            <div class="nail"></div>
          </div>
          <div class="finger">
            <div class="bone"></div>
            <div class="nail"></div>
          </div>
          <div class="finger">
            <div class="bone"></div>
            <div class="nail"></div>
          </div>
        </div>
        <div class="hand hand--right">
          <div class="finger">
            <div class="bone"></div>
            <div class="nail"></div>
          </div>
          <div class="finger">
            <div class="bone"></div>
            <div class="nail"></div>
          </div>
          <div class="finger">
            <div class="bone"></div>
            <div class="nail"></div>
          </div>
        </div>
      </div>
      <form  action="{{ route('login') }}" class="login" method="post">
        @csrf
        <label>
          <div class="fa fa-solid fa-envelope"></div>
          {{-- <input class="username" type="email" name="email" id="email" placeholder="Ingrese Email"  required autofocus/> --}}
          <input id="email" type="email" class=" username form-control @error('email') is-invalid @enderror"
            name="email" placeholder="Ingresa Email" value="{{ old('email') }}" required
            autocomplete="email">
        </label>
        <label>
          <div class="fa fa-regular fa-unlock"></div>
          {{--<input class="password" type="password" name="password" id="password" placeholder="Contraseña" required/> --}}
          <input id="password" type="password" class=" password form-control @error('password') is-invalid @enderror"
              name="password" placeholder="Contraseña" required autocomplete="current-password">
          <div class="password-button">Ver</div>
        </label>
        <div class="item">
          @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
                {{ __('Olvidé mi contraseña') }}
            </a>
          @endif
        </div>
        <button type="submit" class="login-button">Ingresar</button>
      </form>
      <div class="footer">
            ¿No tienes una cuenta? <a href="{{ route('admin/register') }}">Créate una cuenta</a>
      </div>
      <div class="social-buttons">
        <div class="text-footer">Inicio de sesión con google</div>
        <div class="social">
          <a href="/login-google">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-google" width="30" height="44" viewBox="0 -3.2 24 24" stroke-width="1.5" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M17.788 5.108a9 9 0 1 0 3.212 6.892h-8" />
         </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
  @error('email')
    <dialog id="modal">   
      <p>{{ $message }}</p>
      <button id= "cerrar-modal">Cerrar</button>
    </dialog>
  @enderror
  <script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.5/lodash.min.js'></script><script  src="{{ asset('js/script-login.js') }}"></script>
</body>

</html>

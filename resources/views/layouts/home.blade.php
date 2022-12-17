<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="{{ __('voyager::generic.is_rtl') == 'true' ? 'rtl' : 'ltr' }}" id="html-pre">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hogar de perros</title>
    <link rel="stylesheet" href="{{ asset('css/estilos-Home.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <?php $admin_favicon = Voyager::setting('admin.icon_image', ''); ?>
    @if($admin_favicon == '')
        <link rel="shortcut icon" href="{{ voyager_asset('images/logo-icon.png') }}" type="image/png">
    @else
        <link rel="shortcut icon" href="{{ Voyager::image($admin_favicon) }}" type="image/png">
    @endif
</head>

<body id="body-pre">
    <header>
        <div class="conten">
            <div class="logo">
                <a href="{{ route('/') }}">
                    <?php $admin_logo_img = Voyager::setting('admin.icon_image', ''); ?>
                <img src="{{ Voyager::image($admin_logo_img) }}" alt="Logo">
                </a>
                <div class="curva" style="height: 80px; overflow: hidden;"><svg viewBox="0 0 500 150"
                        preserveAspectRatio="none" style="height: 100%; width: 100%;">
                        <path d="M0.00,49.99 C150.00,150.00 349.21,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z"
                            style="stroke: none; fill: #000;"></path>
                    </svg></div>
            </div>
    </header>
    <div class="stick">
        <div class="navbar_r">
            <div class="nav_v">
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <img src="{{ asset('img/Home/menublack.png') }}" alt="menu">
                </label>
                <a href="{{ route('/') }}">
                    <?php $admin_logo_img = Voyager::setting('admin.icon_image', ''); ?>
                    <img src="{{ Voyager::image($admin_logo_img) }}" alt="Logo">
                </a>
                <ul class="lista">
                    <li>
                        <div class="opciones">
                            <a href="{{ route('QuienesSomos') }}">Quiénes Somos</a>
                            <img src="{{ asset('img/Home/information.png') }}" alt="" id="miniaturas"
                                style="left:60px">
                        </div>
                    </li>
                    <li>
                        <div class="opciones">
                            <a href="{{ route('servicios') }}">Servicios Veterinarios</a>
                            <img src="{{ asset('img/Home/veterinary.png') }}" alt="" id="miniaturas"
                                style="left:80px">
                        </div>
                    </li>
                    <li>
                        <div class="opciones">
                            <a href="{{ route('Adopcion') }}">Adopción</a>
                            <img src="{{ asset('img/Home/adoption.png') }}" alt="" id="miniaturas"
                                style="left:70px">
                        </div>
                    </li>
                    <li>
                        <div class="opciones">
                            <a href="">Donaciones</a>
                            <img src="{{ asset('img/Home/donation.png') }}" alt="" id="miniaturas"
                                style="left:80px">
                        </div>
                    </li>
                    <li>
                        <div class="opciones">
                            <a href="{{ route('encuentrame') }}">Encuéntrame</a>
                            <img src="{{ asset('img/Home/findme.png') }}" alt="" id="miniaturas"
                                style="left:90px">
                        </div>
                    </li>
                    <li>
                        <div class="opciones">
                            <a href="{{ route('PreguntasFrecuentes') }}">Preguntas Frecuentes </a>
                            <img id="miniaturas" src="{{ asset('img/Home/ask.png') }}" alt="" style="left:80px">
                        </div>
                    </li>
                    @if (Auth::user())
                        <li class="submenu">
                            <input type="checkbox" id="checke">
                            <label for="checke" class="opciones">
                                <a>{{ auth()->user()->name }}</a>
                                <img class="sesion" src="{{ asset('img/Home/banner.jpg') }}" alt="">
                            </label>
                            <ul class="sublista">
                                @can('browse_admin')
                                <li>
                                    <a href="{{ route('home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Administracion</a>
                                </li>
                                @endcan
                                <li>
                                    <a href="">Cambiar Imagen </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="ultimo">
                            <div class="opciones">
                                <a href="{{ route('voyager.login') }}">
                                <img id="miniaturas" src="{{ asset('img/Home/login.png') }}" alt=""
                                    style="left:50px">Iniciar Sesion
                                </a>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    @yield('content')
    <footer>
        <ul>
            <li>
                <p>Fundacion. Todos los derechos reservados</p>
            </li>
            <li class="whatsapp">
                <a href=""><img class="redes" src="{{ asset('img/Home/whatsapp.png') }}". alt=""></a>
                <p>+57 333 333 3333</p>
            </li>
            <li>
                <a href=""><img class="redes" src="{{ asset('img/Home/facebook.png') }}". alt=""></a>
                <a href=""><img class="redes" src="{{ asset('img/Home/instagram.png') }}". alt=""></a>
                <a href=""><img class="redes" src="{{ asset('img/Home/twitter.png') }}". alt=""></a>
            </li>
        </ul>
    </footer>
</body>

</html>

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="{{ __('voyager::generic.is_rtl') == 'true' ? 'rtl' : 'ltr' }}"
    id="html-pre">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    @yield('metas')
    <title>Hogar de perros</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/Home/Logoriginal2.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/estilos-Home.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <!-- <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/> -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
    <script src="https://kit.fontawesome.com/051df353f9.js" crossorigin="anonymous"></script>
    <?php $admin_favicon = Voyager::setting('admin.icon_image', ''); ?>
    @if($admin_favicon == '')
    <link rel="shortcut icon" href="{{ voyager_asset('images/logo-icon.png') }}" type="image/png">
    @else
    <link rel="shortcut icon" href="{{ Voyager::image($admin_favicon) }}" type="image/png">
    @endif
    <style>
        #my-image {
          max-width: 10%;
          height: auto;
        }
      </style>
</head>

<body id="body-pre">
    <header>
        <div class="conten">
            <div class="logo">
                <?php $admin_logo_img = Voyager::setting('admin.icon_image', ''); ?>
                <img src="{{ asset('img/Home/Logoriginal2.png') }}" alt="Logo">
                <div class="curva" style="height: 80px; overflow: hidden;"><svg viewBox="0 0 500 150"
                        preserveAspectRatio="none" style="height: 100%; width: 100%;">
                        <path d="M0.00,49.99 C150.00,150.00 349.21,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z"
                            style="stroke: none; fill: #000;"></path>
                    </svg>
                </div>
            </div>
        </div>
    </header>
    <div class="stick">
        <div class="navbar_r">
            <div class="nav_v">
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <img src="{{ asset('img/Home/menublack.png') }}" alt="menu">
                </label>
                <a>
                    <?php $admin_logo_img = Voyager::setting('admin.icon_image', ''); ?>
                    <img src="{{ asset('img/Home/Logoriginal2.png') }}" alt="Logo">
                </a>
                <ul class="lista">
                    <li>
                        <div class="opciones">
                            <a href="{{ route('/') }}">Inicio</a>
                            <img src="{{ asset('img/Home/home.png') }}" alt="" id="miniaturas" style="left:60px">
                        </div>
                    </li>
                    <li>
                        <div class="opciones">
                            <a href="{{ route('QuienesSomos') }}">Quiénes Somos</a>
                            <img src="{{ asset('img/Home/information.png') }}" alt="" id="miniaturas" style="left:60px">
                        </div>
                    </li>
                    <li>
                        <div class="opciones">
                            <a href="{{ route('servicios') }}">Servicios Veterinarios</a>
                            <img src="{{ asset('img/Home/veterinary.png') }}" alt="" id="miniaturas" style="left:80px">
                        </div>
                    </li>
                    <li>
                        <div class="opciones">
                            <a href="{{ route('Adopcion') }}">Adopción</a>
                            <img src="{{ asset('img/Home/adoption.png') }}" alt="" id="miniaturas" style="left:70px">
                        </div>
                    </li>
                    <li>
                        <div class="opciones">
                            <a href="{{ route('Donaciones') }}">Donaciones</a>
                            <img src="{{ asset('img/Home/donation.png') }}" alt="" id="miniaturas" style="left:80px">
                        </div>
                    </li>
                    <li>
                        <div class="opciones">
                            <a href="{{ route('encuentrame') }}">Encuéntrame</a>
                            <img src="{{ asset('img/Home/findme.png') }}" alt="" id="miniaturas" style="left:90px">
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
                            <a class="text-sm text-gray-700 dark:text-gray-500 underline">{{ auth()->user()->name }}</a>
                            <img class="sesion" src="{{ asset('img/Home/banner.jpg') }}" alt="">
                        </label>
                        <ul class="sublista">
                            @can('browse_fundaciones')
                            <li>
                                <a href="{{ route('fundacion.home') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Administracion</a>
                            </li>
                            @endcan
                            @can('browse_admin')
                            <li>
                                <a href="{{ route('home') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Admin</a>
                            </li>
                            @endcan
                            <li>
                                <a style="width: 100%;" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Cerrar Sesion</a>
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
                                    style="left:50px">Iniciar Sesión
                            </a>
                        </div>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
        <br>
        <a class="btn-donar" href="{{ route('Donaciones') }}">
            <img id="my-image" src="{{asset("img/donar.png")}}" alt="">
        </a>
    </div>
    @yield('content')
    @yield('scripts')
    <footer>
        <ul>
            <li>
                <p>©Fundación Hogar de perros. Todos los derechos reservados</p>
            </li>
            <li class="whatsapp">
                <a href="https://api.whatsapp.com/message/VCBGJZCG7QHXL1?autoload=1&app_absent=0" target="_blank"><img
                        class="redes" src="{{ asset('img/Home/whatsapp.png') }}" . alt=""></a>
                <p>+57 316 303 1839</p>
            </li>
            <li>
                <a href="https://www.facebook.com/profile.php?id=100059614896338" target="_blank"><img class="redes"
                        src="{{ asset('img/Home/facebook.png') }}" . alt=""></a>
                <a href="https://www.instagram.com/fund_perrosygatos/?hl=es-la" target="_blank"><img class="redes"
                        src="{{ asset('img/Home/instagram.png') }}" . alt=""></a>
            </li>
        </ul>
    </footer>
</body>

</html>
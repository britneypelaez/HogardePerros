<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="{{ asset('css/estilos-Home.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>

<body>
    <header>
        <div class="conten">
            <div class="logo">
                <img src="{{ asset('img/Home/LOGO.png') }}" alt="Logo">
                <div class="curva" style="height: 80px; overflow: hidden;"><svg viewBox="0 0 500 150"
                        preserveAspectRatio="none" style="height: 100%; width: 100%;">
                        <path d="M0.00,49.99 C150.00,150.00 349.21,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z"
                            style="stroke: none; fill: #000;"></path>
                    </svg></div>
            </div>
    </header>
    <div class="stick">
        <div class="navbar">
            <div class="nav">
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <img src="{{ asset('img/Home/menublack.png') }}" alt="menu">
                </label>
                <a>
                    <img src="IMG/LOGO.png" alt="Logo">
                </a>
                <ul class="lista">
                    <li>
                        <div class="opciones">
                            <a href="">Quienes Somos</a>
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
                            <a href="">Adopción</a>
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
                            <a href="">Encuéntrame</a>
                            <img src="{{ asset('img/Home/findme.png') }}" alt="" id="miniaturas"
                                style="left:90px">
                        </div>
                    </li>
                    <li>
                        <div class="opciones">
                            <a href="">Preguntas Frecuentes </a>
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
                                <a href="{{ route('voyager.login') }}">Iniciar Sesion </a>
                                <img id="miniaturas" src="{{ asset('img/Home/login.png') }}""IMG/" alt=""
                                    style="left:50px">
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
                <a href=""><img class="redes" src="{{ asset('img/Home/twitter.png') }}".
                        alt=""></a>
            </li>
        </ul>
    </footer>
</body>

</html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/estilos-HomeAdmin.css') }}" />
    <title>HomeAdmin</title>
</head>

<body>
    <header>
        <div class="submenu">
            <div class="iniciarSesion">
                <input type="checkbox" id="checke" />
                <label for="checke" class="subopcion">
                    <a>Nombre</a>
                    <img class="sesion" src="{{ asset('img/Home/banner.jpg') }}" alt="" />
                </label>
                <ul class="sublista">
                    <li>
                        <a href="">Cambiar Imagen </a>
                    </li>
                    <li>
                        <a href="">Cambiar Contraseña </a>
                    </li>
                    <li>
                        <a href="">Cerrar Sesion </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div class="stick">
        <div class="navbar">
            <div class="nav">
                <input type="checkbox" id="check" />
                <label for="check" class="checkbtn">
                    <img src="{{ asset('img/Home/menublack.png') }}" alt="menu" />
                </label>
                <a>
                    <img src="IMG/LOGO.png" alt="Logo" />
                </a>
                <ul class="lista">
                    <li>
                        <div class="opciones">
                            <a href="">Seccion Adopcion</a>
                            <img src="{{ asset('img/Home/home.png') }}" alt="" id="miniaturas" />
                        </div>
                    </li>
                    <li>
                        <div class="opciones">
                            <a href="">Seccion Servicios Veterinarios</a>
                            <img src="{{ asset('img/Home/information.png') }}" alt="" id="miniaturas" />
                        </div>
                    </li>
                    <li>
                        <div class="opciones">
                            <a href="">Seccion Campañas</a>
                            <img src="{{ asset('img/Home/adoption.png') }}" alt="" id="miniaturas" />
                        </div>
                    </li>
                    <li>
                        <div class="opciones">
                            <a href="">Certificados</a>
                            <img src="{{ asset('img/Home/donation.png') }}" alt="" id="miniaturas" />
                        </div>
                    </li>
                    <li>
                        <div class="opciones">
                            <a href="">Seccion Encuentrame </a>
                            <img src="{{ asset('img/Home/findme.png') }}" alt="" id="miniaturas" />
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <article></article>
</body>

</html>

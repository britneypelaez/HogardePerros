<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>AdaFriend</title>
    <link rel="stylesheet" href="{{ asset('css/homeFundacion.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="fijo">
        <h2><a href="{{ route('inicioFundaciones') }}">Adafriend</a></h2>
    </div>
    <div class="headerr">
        <div class="cont-titulo">
            <h1>Bienvenidos A Adafriend</h1>
        </div>
    </div>
    <div class="cuerpo">
        <hr class="uno">
        <div class="part1">
            <div class="text-img">
                <div class="izqui">
                    <img src="{{ asset('img/Home/adafriend.png') }}" alt="">
                </div>
                <div class="dere">
                    <p>
                        Nuestro propósito es facilitar a los usuarios de la aplicación un método fácil y 
                        cómodo de conectarse con fundaciones de animales y apoyarlas con donaciones o adoptando 
                        a un animal. 
                    </p>
                </div>
            </div>
        </div>
        <hr class="uno">
        <div class="enlaces">
            <h2>Para ingresar a nuestra aplicación solo basta con dirigirse al siguiente enlace:</h2>
            <ul>
                <li> <a href="http://adafriend.sisoft.com.co:8020/" target="_blank"> http://adafriend.sisoft.com.co:8020/</a></li>
            </ul>
        </div>
        <hr class="uno">
        <div class="title-funda">
            <h2>Fundaciones que ya son parte</h2>
        </div>
        <hr class="uno">
    </div>
    <div class="fundaciones">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <div class="card-img1">
                        <div class="card-imgg">
                            <img src="IMG/perros2.jpeg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="conttex">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" >
                    <div class="card-img1">
                        <div class="card-imgg">
                            <img src="IMG/gatos1.jpeg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="conttex">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" >
                    <div class="card-img1">
                        <div class="card-imgg">
                            <img src="IMG/WhatsApp Image 2023-01-16 at 3.34.18 PM.jpeg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="conttex">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" >
                    <div class="card-img1">
                        <div class="card-imgg">
                            <img src="IMG/perro1.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="conttex">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" >
                    <div class="card-img1">
                        <div class="card-imgg">
                            <img src="IMG/perro3.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="conttex">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" >
                    <div class="card-img1">
                        <div class="card-imgg">
                            <img src="IMG/Logo original.png" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="conttex">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" >
                    <div class="card-img1">
                        <div class="card-imgg">
                            <img src="IMG/gato2.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="conttex">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" >
                    <div class="card-img1">
                        <div class="card-imgg">
                            <img src="IMG/gato3.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="conttex">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">    
        © Adafriend. Todos los derechos reservados
    </div>
    <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var camb = document.querySelector('div.fijo');
            camb.classList.toggle("cambio",window.scrollY > 0);
        })
    </script>
</body>
</html>
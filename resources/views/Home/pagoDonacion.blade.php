<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donación</title>
    <link rel="stylesheet" href="{{ asset('css/estilos-Donacion.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <div class="cont-img">
            <div class="img-logcont">
                <div class="img-logo">
                    <img src="{{ asset('img/Home/Logoriginal2 .png') }}" alt="logoHogarDePerros">
                </div>
            </div>
            <div class="img-payu">
                <div class="cont-imgp">
                    <img src="{{ asset('img/Home/payu.jpeg') }}" alt="payu">
                </div>
            </div>
        </div>
        <div class="info-donacion">
            <div class="cont-title">
                <h1>Fundación Hogar De Perros-Donativo Por PayU</h1>
            </div>
            <div class="cont-text">
                <p>
                    <!-- Llene el formulario a continuación con información personal necesario para 
                    poder realizar el donativo vía payu, luego de dar clic en "Donar", serás direccionado 
                    a la plataforma de payu para terminar el proceso.    -->
                    A  continuación por favor seleccione la cantidad a donar deseado para poder realizar el 
                    donativo vía PayU, después de esto serás direccionado a la plataforma de PayU para terminar el
                    proceso.
                </p>
            </div>
            <div class="cont-form">
                <p>
                    <a href="">$10.000</a>
                </p>
                <p>
                    <a href="">$20.000</a>
                </p>
                <p>
                    <a href="">$50.000</a>
                </p>
                <p>
                    <a href="">$80.000</a>
                </p>
                <p>
                    <a href="">$100.000</a>
                </p>
                <p>
                    <a href="">$150.000</a>
                </p>
                <p>
                    <a href="">$200.000</a>
                </p>
                <p>
                    <a href="">$250.000</a>
                </p>
                <p>
                    <a href="">$300.000</a>
                </p>
                <p>
                    <a href="">$400.000</a>
                </p>
                <p>
                    <a href="">$500.000</a>
                </p>
                <p>
                    <a href="">$1.000.000</a>
                </p>
                <!-- <form action="">
                    <p class="block1">
                        <label for="cantidad">Cantidad A Donar:</label>
                        <span class="form-item-pay material-symbols-outlined">attach_money</span>   
                        <input type="number" min="0" name="cantidad" id="cantidad" placeholder="$--" required>
                    </p>
                    <p class="block3">
                        <label for="nombreApellido">Nombre y Apellido:</label>
                        <span class="form-item-person1 material-symbols-outlined">person</span>
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
                        <span class="form-item-person2 material-symbols-outlined">person</span>
                        <input type="text" name="apellido" id="apellido" placeholder="Apellido" required>
                    </p>
                    <p>
                        <label for="direccion">Dirección:</label>
                        <span class="form-item-pais material-symbols-outlined">flag</span>
                        <input type="text" name="pais" id="pais" placeholder="Pais" required> 
                        <span class="form-item-city material-symbols-outlined">location_city</span>
                        <input type="text" name="cidudad" id="ciudad" placeholder="Ciudad" required>
                        <span class="form-item-direction material-symbols-outlined">pin_drop</span>
                        <input type="text" name="direccion" id="direccion" placeholder="Dirección" required>
                    </p>
                    <p>
                        <label for="correoytel">Correo y Telefono:</label>
                        <span class="form-item-mail material-symbols-outlined">mail</span>
                        <input type="email" name="correo" id="correo" placeholder="Correo" required>
                        <span class="form-item-cel material-symbols-outlined">phone_iphone</span>
                        <input type="tel" name="telefono" id="telefono" title="Debe ser un número de telefono" placeholder="Telefono" required>
                    </p>
                    <p class="block2">  
                        <button type="submit">Donar</button>
                    </p>
                </form> -->
            </div>
        </div>
    </div>
</body>
</html>
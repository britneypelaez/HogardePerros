<div class="adopcion">
    <div class="img">
        <img src="{{ asset("storage/$imagen") }}" alt="">
        <div class="descrip">
            <h2>{{ $mascota }}</h2>
        </div>
    </div>
    <div class="more"><a href="#modalsEditMascotas{{$mascota}}" style="text-decoration: none; color: #fff;">Mas Informacion</a></div>
</div>
<div class="contenedor-modal-adopcion" id="modalsEditMascotas{{$mascota}}">
    <div class="moda-adopcion">
        <div class="informacion-adopcion">
            <img class="imagen-adopcion" src="{{ asset("storage/$imagen") }}" alt="Adopta">
            <div class="descripcion-adopcion">
                <div class="cont-adopcion">
                    <p class="negrita">Nombre:</p>
                    <p>{{ $mascota }}</p>
                </div>
                <div class="cont-adopcion">
                    <p class="negrita">Raza:</p>
                    <p>{{ $raza }}</p>
                </div>
                <div class="cont-adopcion">
                    <p class="negrita">Color:</p>
                    <p>{{ $color }}</p>
                </div>
                <div class="cont-adopcion-dif">
                    <p class="negrita">Caracteristicas: </p>
                    <p>  {{ $descripcion }}</p>
                </div>
                <div class="cont-adopcion">
                    <p class="negrita">Edad:</p>
                    <p> {{ $edad }} años</p>
                </div>
                <a href="{{ route('adoptare') }}"><button class="transicion2" type="submit"><span>Seguir Adopcion</span></button></a>
            </div>
            <div class="tener-en-cuenta-adopcion">
                <h4>Antes de adoptar una mascota, ten en cuenta:</h4>
                <p>
                    Los perros adultos se entregan: </br>
                    Esterilizados</br>
                    Desparacitados</br>
                    Vacunados</br>
                    Con collar</br>
                </p>
                <h4>¿Como funciona el proceso de adopcion?:</h4>
                <p>
                    Los perros cachorros se entregan desparacitados y con una vacuna Puppy</br>
                </p>
                <h4>Requisitos para adoptar:</h4>
                <p>
                    Ser mayor de edad</br>
                    Firmar hoja de adopcion con un compromiso de traerlos a esterilazion a los cinco meses sin costo para el adoptante</br>
                </p>
            </div>
        </div>
    </div>
    <a href="#" class="btn-close-modal-adopcion">X</a>
</div>

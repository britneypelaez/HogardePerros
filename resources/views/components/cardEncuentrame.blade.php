<div class="adopcion">
    <div class="img">
        <img src="{{ asset("storage/$imagen") }}" alt="">
        <div class="descrip">
            <h2>{{ $mascota }}</h2>
        </div>
    </div>
    <div class="more"><a href="#modalsEditMascotas{{ $mascota}}" style="text-decoration: none; color: #fff;">Mas Informacion</a></div>
</div>
<div class="contenedor-modal-encuentrame" id="modalsEditMascotas{{ $mascota }}">
    <div class="moda-encuentrame">
        <div class="informacion-encuentrame">
            <img class="imagen-encuentrame" src="{{ asset("storage/$imagen") }}" alt="Adopta">
            <div class="descripcion-encuentrame">
                <div class="cont-encuentrame">
                    <p class="negrita">Nombre:</p>
                    <p>{{ $mascota }}</p>
                </div>
                <div class="cont-encuentrame">
                    <p class="negrita">Raza: </p>
                    <p>{{ $raza }}</p>
                </div>
                <div class="cont-encuentrame">
                    <p class="negrita">Color: </p>
                    <p>{{ $color }}</p>
                </div>
            </div>
            <div class="tener-en-cuenta-encuentrame">
                <h4>Descripcion:</h4>
                <p>{{ $descripcion }}</p>
            </div>
        </div>
        <a href="#" class="btn-close-modal-encuentrame">X</a>
    </div>
</div>

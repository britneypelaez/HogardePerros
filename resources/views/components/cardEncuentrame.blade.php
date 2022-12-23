<div class="adopcion">
    <div class="img">
        <img src="{{ asset("storage/$imagen") }}" alt="">
        <div class="descrip">
            <h2>{{ $mascota }}</h2>
        </div>
    </div>
    <div class="more"><a href="#modalsEditMascotas{{ $mascota}}" style="text-decoration: none; color: #fff;">Mas Informacion</a></div>
</div>
<div class="contenedor-modal2" id="modalsEditMascotas{{ $mascota }}">
    <div class="moda2">
        <div class="informacion3">
            <img class="imaginate" src="{{ asset("storage/$imagen") }}" alt="Adopta">
            <div class="descripcion3">
                <div class="cont2">
                    <p>Nombre: </p>
                    <p>{{ $mascota }}</p>
                </div>
                <div class="cont2">
                    <p>Raza: </p>
                    <p>{{ $raza }}</p>
                </div>
                <div class="cont2">
                    <p>Color: </p>
                    <p>{{ $color }}</p>
                </div>
            </div>
            <div class="tener-en-cuenta2">
                <h4>Descripcion:</h4>
                <p>{{ $descripcion }}</p>
            </div>
        </div>
        <a href="#" class="btn-close-modal2">X</a>
    </div>
</div>

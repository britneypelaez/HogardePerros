<div class="adopcion">
    <div class="img">
        <img src="{{ asset("storage/$imagen") }}" alt="">
        <div class="descrip">
            <h2>{{ $mascota }}</h2>
        </div>
    </div>
    <button type="button" class="more" data-bs-toggle="modal" data-bs-target="#exampleModal{{$mascota}}">Más Información</button>
</div>

<div class="modal fade modal-xl" id="exampleModal{{$mascota}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body-dif">
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
                        <h4>Descripción:</h4>
                        <p>{{ $descripcion }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <dialog id="modal-imagen">
        <img class="imgmodal2" src="" alt="...">
        <div class="btcentrar">
            <button type="button" class="btn btn-primary" id="btn-cerrar">Cerrar</button>
        </div>
    </dialog>
</div>

<!-- <div class="contenedor-modal-encuentrame" id="modalsEditMascotas{{ $mascota }}">
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
                <h4>Descripción:</h4>
                <p>{{ $descripcion }}</p>
            </div>
        </div>
        <a href="#" class="btn-close-modal-encuentrame">X</a>
    </div>
</div> -->

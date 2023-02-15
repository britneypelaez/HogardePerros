<div class="adopcion">
    <div class="img">
        <img src="{{ asset("storage/$imagen") }}" alt="">
        <div class="descrip">
            <h2>{{ $mascota }}</h2>
            <p>
                 {{ $descripcion }}
            </p>
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
                            <p class="negrita">Características: </p>
                            <p>  {{ $descripcion }}</p>
                        </div>
                        <div class="cont-adopcion">
                            <p class="negrita">Edad:</p>
                            <p> {{ $edad }} años</p>
                        </div>
                        <a href="{{ route('adoptare') }}"><button class="transicion2" type="submit"><span>Seguir Adopción</span></button></a>
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
                        <h4>¿Cómo funciona el proceso de adopción?:</h4>
                        <p>
                            Los perros cachorros se entregan desparacitados y con una vacuna Puppy</br>
                        </p>
                        <h4>Requisitos para adoptar:</h4>
                        <p>
                            Ser mayor de edad</br>
                            Firmar hoja de adopción con un compromiso de traerlos a esterilización a los cinco meses sin costo para el adoptante</br>
                        </p>
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

<!-- <div class="contenedor-modal-adopcion" id="modalsEditMascotas{{$mascota}}">
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
</div> -->

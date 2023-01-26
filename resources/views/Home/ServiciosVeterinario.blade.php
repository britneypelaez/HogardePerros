@extends('layouts.home')

@section('title', 'Servicios Veterinarios')

@section('content')
<div class="info">
    <div class="info_bar">
        <h1 style="margin-bottom: 15px;">SERVICIOS VETERINARIOS</h1>
        <P>¡Bienvenidos a los servicios veterinarios de nuestra fundación! Estamos encantados de poder ofrecer servicios de calidad para su mascota. Nuestro equipo de veterinarios 
            altamente calificados está dispuesto a brindarle cuidados médicos de alta calidad a su perro o gato. Ofrecemos una amplia gama de servicios, desde chequeos generales hasta 
            cirugías y tratamientos médicos especializados. Contáctenos para hacer una cita y comience a cuidar mejor a su mascota hoy mismo.
        </P>
    </div>
</div>
<div class="contenedorServicios">
    <div class="services">
        @foreach($Servicios as $servicio)
        <div class="cards">
            <div class="cards1">
                <div class="description">
                    <h2 class="servir">{{ $servicio->nombre_serviciio }}</h2>
                    <a style="display: none;">{{ $servicio->id }}</a>
                </div>
                <div class="picture">
                    <img src="{{ asset("storage/$servicio->imagen_servicio") }}" alt="" />
                </div>
            </div>
            <button type="button" class="more" data-bs-toggle="modal" data-bs-target="#exampleModal{{$servicio->id}}">Más Información</button>
        </div>

        <div class="modal fade modal-xl" id="exampleModal{{$servicio->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body-dif">
                        <div class="informacion-servicio">
                            <div class="titulo-servicio">
                                <p class="negrita">{{$servicio->nombre_serviciio}}</p>
                            </div>
                            <img class="imagen-servicio" src="{{ asset("storage/$servicio->imagen_servicio") }}" alt="Adopta">
                            <div class="descripcion-servicio">
                                <div class="cont-servicio">
                                    <p class="negrita">Descripción:</p>
                                    <p>{{$servicio->descripcion}}</p>
                                </div>
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

        <!-- <div class="contenedor-modal-servicio" id="modalsServicio {{$servicio->id}}">
            <div class="moda-servicio">
                <div class="informacion-servicio">
                    <div class="titulo-servicio">
                        <p class="negrita">{{$servicio->nombre_serviciio}}</p>
                    </div>
                    <img class="imagen-servicio" src="{{ asset("storage/$servicio->imagen_servicio") }}" alt="Adopta">
                    <div class="descripcion-servicio">
                        <div class="cont-servicio">
                            <p class="negrita">Descripción:</p>
                            <p>{{$servicio->descripcion}}</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn-close-modal-servicio">X</a>
            </div>
        </div> -->
        @endforeach
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
@endsection

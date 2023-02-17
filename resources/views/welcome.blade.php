@extends('layouts.home')

@section('title', 'Home')

@section('content')
    <div class="info">
        <div class="info_bar">
            <h1>Fundación Hogar de Perros</h1>
            <p>
                Hogar de perros y gatos es una fundación sin ánimo de lucro, nuestro objetivo principal es la acogida y la
                restauración de vida de perros y gatos, brindando servicios veterinarios y cuidados que cada animalito
                requiere, así mismo brindamos nuestros mayores esfuerzos en que cada uno consiga un hogar de por vida
                asegurándonos de que no vuelvan a quedar en condición de abandono.
            </p>
        </div>

        <div class="tabla-servicios">
            <a href="{{ route('Donaciones') }}">
                <div class="servicio">
                <p>BRINDANOS TU AYUDA</p>
                </div>
            </a>
            <a href="{{ route('servicios') }}">
                <div class="servicio">
                <p>SERVICIO VETERINARIO DE BUENA CALIDAD</p>
                </div>
            </a>
            <a href="{{ route('Adopcion') }}">
                <div class="servicio">
                <p>ADOPTA UN PERRO DE LA FUNDACIÓN</p>
                </div>
            </a>
            <a href="{{ route('encuentrame') }}">
                <div class="servicio">
                <p>ANIMALES PERDIDOS</p>
                </div>
            </a>
        </div>

        <h2>Buscamos un Hogar</h2>

        <div class="contenedor">
            <div class="adopciones">
                @foreach ($Mascotas as $mascota)
                <div class="adopcion">
                    <div class="img">
                        <img src="{{ asset("storage/$mascota->imagen_mascota") }}" alt="">
                        <div class="descrip">
                            <h2>{{ $mascota->nombre_mascota }}</h2>
                            <p>{{ $mascota->descripcion }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <a href="{{ route('Adopcion') }}"><button class="transicion" type="submit"><span>Más mascotas en adopción</span></button></a>
        <!-- modal -->
        
        <div class="modal fade modal-xl mod-camp" id="modalcamp" tabindex="-1" aria-labelledby="exampleModalL"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 id="exampleModalL">Apóyanos Con Nuestra Campaña</h1>
                        <button type="button" id="btn-cerar" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <div class="contcamp">
                            @foreach($Fundacion as $fundacion)
                                <img src="{{ asset('storage/' . $fundacion->imagenCampania) }}" alt="" class="imgcamp">
                            @endforeach
                         </div>
                    </div>
                    <div class="modal-footer footerr">
                        <button type="button" id="btn-cerar2" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
            <!-- <dialog id="modal-imagen">
                <img class="imgmodal2" src="" alt="...">
                <div class="btcentrar">
                    <button type="button" class="btn btn-primary" id="btn-cerrar">Cerrar</button>
                </div>
            </dialog> -->
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script  src="{{ asset('js/modalCamp.js') }}"></script>
@endsection

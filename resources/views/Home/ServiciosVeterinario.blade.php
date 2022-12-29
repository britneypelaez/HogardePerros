@extends('layouts.home')

@section('title', 'Servicios Veterinarios')

@section('content')
<div class="info">
    <div class="info_bar">
        <h1 style="margin-bottom: 15px;">SERVICIOS VETERINARIOS</h1>
        <P>¡Bienvenidos a los servicios veterinarios de nuestra fundación! Estamos encantados de poder ofrecer servicios de calidad para su mascota. Nuestro equipo de veterinarios 
            altamente calificados está dispuesto abrindarle cuidados médicos de alta calidad a su perro o gato. Ofrecemos una amplia gama de servicios, desde chequeos generales hasta 
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
            <div class="more"><a href="#modalsServicio {{$servicio->id}}" style="text-decoration: none; color: #fff;">Mas Informacion</a></div>
        </div>
        <div class="contenedor-modal-servicio" id="modalsServicio {{$servicio->id}}">
            <div class="moda-servicio">
                <div class="informacion-servicio">
                    <div class="titulo-servicio">
                        <p class="negrita">{{$servicio->nombre_serviciio}}</p>
                    </div>
                    <img class="imagen-servicio" src="{{ asset("storage/$servicio->imagen_servicio") }}" alt="Adopta">
                    <div class="descripcion-servicio">
                        <div class="cont-servicio">
                            <p class="negrita">Descripcion:</p>
                            <p>{{$servicio->descripcion}}</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn-close-modal-servicio">X</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

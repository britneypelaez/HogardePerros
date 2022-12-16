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
        @foreach ($Servicios as $servicio)
        <div class="cards">
            <div class="cards1">
                <div class="picture"><img src="{{ asset($servicio->imagen_servicio) }}" alt=""></div>
                <div class="descrip">
                    <p>{{$servicio->descripcion}}</p>
                </div>
            </div>
            <div class="more"><a href="#popup" style="text-decoration: none; color: #fff;">Mas Informacion</a></div>
        </div>
        @endforeach
    </div>
</div>
@endsection

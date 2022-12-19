@extends('layouts.home')

@section('title', 'Home')

@section('content')
    <div class="info">
        <div class="info_bar">
            <h2>Fundación Hogar de Perros</h2>
            <p>
                Hogar de perros y gatos es una fundación sin ánimo de lucro, nuestro objetivo principal es la acogida y la
                restauración de vida de perros y gatos, brindando servicios veterinarios y cuidados que cada animalito
                requiere, así mismo brindamos nuestros mayores esfuerzos en que cada uno consiga un hogar de por vida
                asegurándonos de que no vuelvan a quedar en condición de abandono.
            </p>
        </div>

        <div class="tabla-servicios">
            <div class="servicio">
                <a href=""><p>BRINDANOS TU AYUDA</p></a>
            </div>
            <div class="servicio">
                <a href=""><p>SERVICIO VETERINARIO DE BUENA CALIDAD</p></a>
            </div>
            <div class="servicio">
                <a href=""><p>ADOPTA UN PERRO DE LA FUNDACION</p></a>
            </div>
            <div class="servicio">
                <a href=""><p>ANIMALES PERDIDOS</p></a>
            </div>
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
                    <div class="more"><a href="#popup" style="text-decoration: none; color: #fff;">Mas Informacion</a></div>
                </div>
                @endforeach
            </div>
        </div>

        <a href="{{ route('Adopcion') }}"><button type="submit"><span>Mas mascotas en adopcion</span></button></a>
    @endsection

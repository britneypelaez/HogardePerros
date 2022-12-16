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
                <p>BRINDANOS TU AYUDA</p>
            </div>
            <div class="servicio">
                <p>SERVICIO VETERINARIO DE BUENA CALIDAD</p>
            </div>
            <div class="servicio">
                <p>ADOPTA UN PERRO DE LA FUNDACION</p>
            </div>
            <div class="servicio">
                <p>ANIMALES PERDIDOS</p>
            </div>
        </div>

        <h2>Buscamos un Hogar</h2>

        <div class="contenedor">
            <div class="adopciones">
                <div class="adopcion">
                    <div class="img">
                        <img src="{{ asset('img/Home/banner.jpg') }}". alt="">
                        <div class="descrip">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Doloremque adipisci, aliquid quibusdam quae iste similique
                                corporis, quo dolorem quisquam tempora vel, alias illo recusandae
                                sequi in voluptas officiis enim consequatur!</p>
                        </div>
                    </div>
                    <div class="more"><a href="" style="text-decoration: none; color: #fff;">Mas Informacion</a>
                    </div>
                </div>
                <div class="adopcion">
                    <div class="img">
                        <img src="{{ asset('img/Home/banner.jpg') }}". alt="">
                        <div class="descrip">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Doloremque adipisci, aliquid quibusdam quae iste similique
                                corporis, quo dolorem quisquam tempora vel, alias illo recusandae
                                sequi in voluptas officiis enim consequatur!</p>
                        </div>
                    </div>
                    <div class="more"><a href="" style="text-decoration: none; color: #fff;">Mas Informacion</a>
                    </div>
                </div>
                <div class="adopcion">
                    <div class="img">
                        <img src="{{ asset('img/Home/banner.jpg') }}". alt="">
                        <div class="descrip">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Doloremque adipisci, aliquid quibusdam quae iste similique
                                corporis, quo dolorem quisquam tempora vel, alias illo recusandae
                                sequi in voluptas officiis enim consequatur!</p>
                        </div>
                    </div>
                    <div class="more"><a href="" style="text-decoration: none; color: #fff;">Mas Informacion</a>
                    </div>
                </div>
                <div class="adopcion">
                    <div class="img">
                        <img src="{{ asset('img/Home/banner.jpg') }}". alt="">
                        <div class="descrip">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Doloremque adipisci, aliquid quibusdam quae iste similique
                                corporis, quo dolorem quisquam tempora vel, alias illo recusandae
                                sequi in voluptas officiis enim consequatur!</p>
                        </div>
                    </div>
                    <div class="more"><a href="" style="text-decoration: none; color: #fff;">Mas Informacion</a>
                    </div>
                </div>
                <div class="adopcion">
                    <div class="img">
                        <img src="{{ asset('img/Home/banner.jpg') }}". alt="">
                        <div class="descrip">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Doloremque adipisci, aliquid quibusdam quae iste similique
                                corporis, quo dolorem quisquam tempora vel, alias illo recusandae
                                sequi in voluptas officiis enim consequatur!</p>
                        </div>
                    </div>
                    <div class="more"><a href="" style="text-decoration: none; color: #fff;">Mas Informacion</a>
                    </div>
                </div>
                <div class="adopcion">
                    <div class="img">
                        <img src="{{ asset('img/Home/banner.jpg') }}". alt="">
                        <div class="descrip">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Doloremque adipisci, aliquid quibusdam quae iste similique
                                corporis, quo dolorem quisquam tempora vel, alias illo recusandae
                                sequi in voluptas officiis enim consequatur!</p>
                        </div>
                    </div>
                    <div class="more"><a href="" style="text-decoration: none; color: #fff;">Mas Informacion</a>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit"><span>Mas mascotas en adopcion</span></button>
    @endsection

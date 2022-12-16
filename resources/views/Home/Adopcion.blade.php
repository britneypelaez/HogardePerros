@extends('layouts.home')

@section('title', 'Adopción')

@section('content')
<div class="info">
    <div class="info_bar">
        <h2>Adopta una mascota de nuestra Fundacion Hogar de Perros</h2>
        <p>
        ¡Bienvenidos a nuestra sección de mascotas en adopción! Estamos encantados de presentarles a nuestros queridos amigos peludos que están buscando un hogar para siempre. 
        Si estás buscando a tu nuevo compañero de vida, ¡has llegado al lugar correcto! Tenemos una gran variedad de mascotas en adopción, tanto perros como gatos.Todos ellos 
        están esperando encontrar a alguien que los quiera y los cuide. Si ves a alguien que te interese, no dudes en ponerte en contacto con nosotros para obtener más información 
        y tomar una cita para conocerlos en persona. Juntos, podemos darles a estas mascotas el hogar que merecen. ¡Gracias por visitarnos!
        </p>
    </div>

    <h3>Selecciona la clase de mascota que quieres:</h3>

    <div class="filtro">
        <p>Especie:</p>
        <select name="" id="especie">
            <option value="">Perros</option>
            <option value="">Gatos</option>
        </select>
        <p>Raza:</p>
        <select name="" id="raza">
            <option value="">Perros</option>
            <option value="">Gatos</option>
        </select>
        <p>Color:</p>
        <select name="" id="color">
            <option value="">Perros</option>
            <option value="">Gatos</option>
        </select>
        <p>Tamaño:</p>
        <select name="" id="tamaño">
            <option value="">Perros</option>
            <option value="">Gatos</option>
        </select>
        <p>Edad:</p>
        <select name="" id="edad">
            <option value="">Perros</option>
            <option value="">Gatos</option>
        </select>
    </div>

    <h2>Perros/Gatos en adopcion</h2>

    <!-- <div class="contenedor">
        <div class="contenedor-modal" id="popup">
            <div class="moda">
                <div class="informacion">
                    <img src="{{ asset('img/Home/foto1.jpeg')}}" alt="Adopta">
                    <div class="descripcion">
                        <div class="con">
                            <p>Raza:</p>
                            <p>(raza)</p>
                        </div>
                        <div class="con">
                            <p>Color:</p>
                            <p>(color)</p>
                        </div>
                        <div class="con">
                            <p>Caracteristicas:</p>
                            <p>(caracteristicas)</p>
                        </div>
                        <div class="con">
                            <p>Edad:</p>
                            <p>(edad)</p>
                        </div>
                        <div class="con">
                            <p>Enfermedades:</p>
                            <p>(enfermedades)</p>
                        </div>
                        <div class="con">
                            <p>Tamaño:</p>
                            <p>(tamaño)</p>
                        </div>
                        <div class="con">
                            <p>Esterilizado:</p>
                            <p>(si/no)</p>
                        </div>
                        <div class="con">
                            <p>Estado:</p>
                            <p>(en adopcion)</p>
                        </div>

                        <button type="submit"><span>Solicitar Adopcion</span></button>
                    </div>
                    <div class="tener-en-cuenta">
                        <h4>Antes de adoptar una mascota, ten en cuenta:</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita quibusdam ducimus reprehenderit. Deserunt dolor soluta sapiente, voluptates porro qui debitis, quis dicta praesentium quo fuga facere vero non nihil quam!</p>
                        <h4>¿Como funciona el proceso de adopcion?:</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita quibusdam ducimus reprehenderit. Deserunt dolor soluta sapiente, voluptates porro qui debitis, quis dicta praesentium quo fuga facere vero non nihil quam!</p>
                        <h4>Requisitos para adoptar:</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita quibusdam ducimus reprehenderit. Deserunt dolor soluta sapiente, voluptates porro qui debitis, quis dicta praesentium quo fuga facere vero non nihil quam!</p>
                    </div>  
                </div>
                <a href="#" class="btn-close-modal">X</a>
            </div>
        </div> -->

        <div class="adopciones">
            @foreach ($Mascotas as $mascota)
            <div class="adopcion">
                <div class="img">
                    <img src="{{ asset($mascota->imagen_mascota) }}" alt="">
                    <div class="descrip">
                        <h2>{{ $mascota->nombre_mascota }}</h2>
                    </div>
                </div>
                <div class="more"><a href="#popup" style="text-decoration: none; color: #fff;">Mas Informacion</a></div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="paginacion">{{ $Mascotas->links() }}</div>
</div>
@endsection

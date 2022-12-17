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
            <option value="Todas">Todas</option>
            <option value="perro">Perro</option>
            <option value="gato">Gato</option>
        </select>
        <p>Raza:</p>
        <select name="" id="raza">
            <option value="Todas">Todas</option>
            <option value="frespuder">Frespuder</option>
            <option value="pincher">Pincher</option>
            <option value="beagle">Beagle</option>
            <option value="criollo">Criollo</option>
        </select>
        <p>Color:</p>
        <select name="" id="color">
            <option value="Todos">Todos</option>
            <option value="blanco">Blanco</option>
            <option value="negro">Negro</option>
            <option value="cafe">Cafe</option>
            <option value="beige">Beige</option>
        </select>
        <p>Tamaño:</p>
        <select name="" id="tamaño">
            <option value="Todos">Todos</option>
            @for ($i = 20; $i <=110; $i = $i + 5)
            <option value="{{ $i }}">{{ $i }}cm</option>
            @endfor
        </select>
        <p>Edad:</p>
        <select name="" id="edad">
            <option value="Todas">Todas</option>
            @for ($i = 0; $i <=14; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
    </div>

    <h2>Perros/Gatos en adopcion</h2>

        <div class="adopciones">
            @foreach ($Mascotas as $mascota)
            <div class="adopcion">
                <div class="img">
                    <img src="{{ asset("storage/$mascota->imagen_mascota") }}" alt="">
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

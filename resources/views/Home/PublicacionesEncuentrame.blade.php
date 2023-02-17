@extends('layouts.home')

@section('title', 'Mis Publicaciones')

@section('content')
<div class="info">
    <h2>Publicaciones</h2>

    @include('Home.crearPerdido')

    <div class="botones">
        <a href="#modalsCreatePerdidas"><button class="transicion2" type="submit"><span>Agregar Publicación</span></button></a>
    </div>

    <div class="adopciones">
        @foreach($MascotasPerdidas as $MascotasPerdida)

            <div class="cards">
                <div class="cards1">
                    <div class="picture">
                        <img src="{{ asset("storage/$MascotasPerdida->imagen_mascota") }}" alt="" />
                    </div>
                    <div class="description">
                        <h1>{{ $MascotasPerdida->nombre_mascota }}</h1>
                        <a style="display: none;">{{ $MascotasPerdida->id }}</a>
                        <div class="opcionesAdmin">
                            <a href="#modalsEditPerdidas{{ $MascotasPerdida }}"><img src="{{ asset('img/Home/edit.png') }}" alt="" /></a>
                            <a href="#modalsEliminarPerdidasUsuario{{ $MascotasPerdida }}"><img src="{{ asset('img/Home/delete.png') }}" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>

        @include('Home.editarPerdido')
        @include('Home.Eliminar')

        @endforeach

        <!-- Centramos la paginación a la derecha-->
    </div>

    <div class="pagination justify-content-end">
            {!! $MascotasPerdidas->links() !!}
        </div>

</div>
@endsection

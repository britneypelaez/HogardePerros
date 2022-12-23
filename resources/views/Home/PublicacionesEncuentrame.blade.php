@extends('layouts.home')

@section('title', 'Mis Publicaciones')

@section('content')
<div class="info">
    <h2>Publicaciones</h2>

    @include('Home.crearPerdido')

    <div class="botones">
        <a href="#modalsCreatePerdidas"><button class="transicion2" type="submit"><span>Agregar Publicacion</span></button></a>
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
                            <form action="{{ route('publicacion.delete', $MascotasPerdida) }}" method="POST">
                                <a href="#modalsEditPerdidas{{ $MascotasPerdida }}"><img src="{{ asset('img/Home/edit.png') }}" alt="" /></a>
                                @csrf
                                <a><button type="submit" style="background:none; border: none;"><img
                                            src="{{ asset('img/Home/delete.png') }}" alt="" /></button></a>
                                <input name="mascot" type="hidden" value="{{$MascotasPerdida->id}}">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        @include('Home.editarPerdido')
        @endforeach

        <!-- Centramos la paginación a la derecha-->
        <div class="pagination justify-content-end">
            {!! $MascotasPerdidas->links() !!}
        </div>
    </div>

</div>
@endsection

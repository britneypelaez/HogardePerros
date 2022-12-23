@extends('layouts.HomeFundacion.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Adopción</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="controles Cont_adopcion">
                        <div>
                            <select class="custom-select" id="inputGroupSelect01" style="border:none;">
                                <option selected>Selecciona la clase de animal por la que quieres filtrar</option>
                                <option value="1">Perro</option>
                                <option value="2">Gato</option>
                            </select>
                        </div>
                        <div>
                            <a class="btn btn-warning" href="#modalsCreateMascota">Nuevo</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="services">

                        @foreach($mascotas as $mascota)

                        <div class="cards">
                            <div class="cards1">
                                <div class="picture">
                                    <img src="{{ asset("storage/$mascota->imagen_mascota") }}" alt="" />
                                </div>
                                <div class="description">
                                    <h1>{{ $mascota	-> nombre_mascota }}</h1>
                                    <a style="display: none;">{{ $mascota->id }}</a>
                                    <div class="opcionesAdmin">
                                    <a href="#modalsEditMascotas{{ $mascota}}"><img src="{{ asset('img/Home/edit.png') }}" alt="" /></a>
                                    <a href="#modalsMascotasEliminar{{ $mascota}}"><img src="{{ asset('img/Home/delete.png') }}" alt="" /></a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        @include('HomeFundacion.Mascotas.Eliminar')

                        @include('HomeFundacion.Mascotas.editar')


                        @endforeach

                        @include('HomeFundacion.Mascotas.crear')
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
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
                    <div class="controles">
                        <div>
                            <select class="custom-select" id="inputGroupSelect01" style="border:none;">
                                <option selected>Selecciona la clase de animal por la que quieres filtrar</option>
                                <option value="1">Perro</option>
                                <option value="2">Gato</option>
                            </select>
                        </div>
                        <div>
                            <a class="btn btn-warning" href="{{ route('Mascotas.create')}}">Nuevo</a>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="services">
                        <!--
                        <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color: #fff;">Nombre Mascota</th>
                                    <th style="color: #fff;">Descripcion</th>
                                    <th style="color: #fff;">Raza</th>
                                    <th style="color: #fff;">Color</th>
                                    <th style="color: #fff;">Estado</th>
                                    <th style="color: #fff;">Edad</th>
                                    <th style="color: #fff;">Foto</th>
                                    <th style="color: #fff;">acciones</th>
                                </thead>
                            <tbody> ¡-->
                        @foreach($mascotas as $mascota)

                        <div class="cards">
                            <div class="cards1">
                                <div class="picture">
                                    <img src="{{ asset("storage/$mascota->imagen_mascota") }}" alt="" />
                                </div>
                                <div class="description">
                                    <h1>{{ $mascota->nombre_mascota }}</h1>
                                    <a style="display: none;">{{ $mascota->id }}</a>
                                    <div class="opcionesAdmin">
                                        <form action="{{ route('Mascotas.destroy', $mascota) }}" method="POST">
                                            <a href="{{ route('Mascotas.edit', $mascota) }}"><img
                                                    src="{{ asset('img/Home/edit.png') }}" alt="" /></a>
                                            @csrf
                                            @method('DELETE')
                                            <a><button type="submit" style="background:none; border: none;"><img
                                                        src="{{ asset('img/Home/delete.png') }}" alt="" /></button></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="more" >
                                <a href="#pop-up" style="text-decoration: none; color: #fff">Mas Informacion</a>
                            </div>
                        </div>
                        <!--
                            <tr>
                                <td style="display: none;">{{ $mascota->id }}</td>
                                <td>{{ $mascota->nombre_mascota }}</td>
                                <td>{{ $mascota->descripcion }}</td>
                                <td>{{ $mascota->Raza->descripcion }}</td>
                                <td>{{ $mascota->Color->descripcion }}</td>
                                <td>{{ $mascota->Estado->descripcion }}</td>
                                <td>{{ $mascota->edad }}</td>
                                <td><img src="{{ asset("storage/$mascota->imagen_mascota") }}" width="70px" height="70px"></td>
                                <td>
                                    <form action="{{ route('Mascotas.destroy', $mascota) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('Mascotas.edit', $mascota) }}">Editar</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" >Borrar</button>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                            </table>¡-->
                        @endforeach

                        <!-- Centramos la paginación a la derecha-->
                        <div class="pagination justify-content-end">
                            {!! $mascotas->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
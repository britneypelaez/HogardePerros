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
                        <div class="card-body table-responsive">
                        <a class="btn btn-warning" href="{{ route('Mascotas.create')}}">Nuevo</a>

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
                            <tbody>
                            @foreach($mascotas as $mascota)
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
                            @endforeach
                            </tbody>
                        </table>

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


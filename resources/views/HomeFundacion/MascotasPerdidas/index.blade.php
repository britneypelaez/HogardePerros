@extends('layouts.HomeFundacion.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Mascotas Perdidas</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                        <a class="btn btn-warning" href="{{ route('MascotasPerdidas.create')}}">Nuevo</a>

                        <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color: #fff;">Nombre Mascota</th>
                                    <th style="color: #fff;">Descripcion</th>
                                    <th style="color: #fff;">Especie</th>
                                    <th style="color: #fff;">Raza</th>
                                    <th style="color: #fff;">Color</th>
                                    <th style="color: #fff;">Estado</th>
                                    <th style="color: #fff;">Foto</th>
                                    <th style="color: #fff;">acciones</th>
                                </thead>
                            <tbody>
                            @foreach($MascotasPerdidas as $MascotasPerdida)
                            <tr>
                                <td style="display: none;">{{ $MascotasPerdida->id }}</td>
                                <td>{{ $MascotasPerdida->nombre_mascota }}</td>
                                <td>{{ $MascotasPerdida->descripcion }}</td>
                                <td>{{ $MascotasPerdida->Especie->descripcion }}</td>
                                <td>{{ $MascotasPerdida->Raza->descripcion }}</td>
                                <td>{{ $MascotasPerdida->Color->descripcion }}</td>
                                <td>{{ $MascotasPerdida->Estado->descripcion }}</td>
                                <td><img src="{{ asset("storage/$MascotasPerdida->imagen_mascota") }}" width="70px" height="70px"></td>
                                <td>
                                    <form action="{{ route('MascotasPerdidas.destroy', $MascotasPerdida) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('MascotasPerdidas.edit', $MascotasPerdida) }}">Editar</a>
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
                                {!! $MascotasPerdidas->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


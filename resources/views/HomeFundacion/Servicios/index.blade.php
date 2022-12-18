@extends('layouts.HomeFundacion.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Servicios Veterinarios</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                        <a class="btn btn-warning" href="{{ route('Servicios.create')}}">Nuevo</a>

                        <table class="table table-striped mt-2 text-center">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color: #fff;">Servicio</th>
                                    <th style="color: #fff;">Descripcion</th>
                                    <th style="color: #fff;">Foto</th>
                                    <th style="color: #fff;">acciones</th>
                                </thead>
                            <tbody>
                            @foreach($servicios as $servicio)
                            <tr>
                                <td style="display: none;">{{ $servicio->id }}</td>
                                <td>{{ $servicio->nombre_serviciio }}</td>
                                <td>{{ $servicio->descripcion }}</td>
                                <td><img src="{{ asset("storage/$servicio->imagen_servicio") }}" width="70px" height="70px"></td>
                                <td WIDTH="200px">
                                    <form action="{{ route('Servicios.destroy', $servicio) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('Servicios.edit', $servicio) }}">Editar</a>
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
                                {!! $servicios->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


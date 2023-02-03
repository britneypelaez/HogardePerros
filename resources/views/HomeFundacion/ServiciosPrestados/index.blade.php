@extends('layouts.HomeFundacion.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Servicios Prestados</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                <div class="card">
                    <div class="controles Cont_serviciosVeterinarios">
                        <div>
                            <a class="btn btn-warning" href="#modalsCreateServiciosPrestados">Nuevo</a>
                        </div>
                    </div>
                </div>

                    <div class="card">
                        <div class="card-body table-responsive Cont_Campanias">
                        <table class="table table-striped mt-2">
                                <thead style="background-color: #e1986e;">
                                    <th style="display: none;">ID</th>
                                    <th style="color: #fff;">Servicio</th>
                                    <th style="color: #fff;">Cliente</th>
                                    <th style="color: #fff;">Descripcion</th>
                                    <th style="color: #fff;">Fecha</th>
                                    <th style="color: #fff;">acciones</th>
                                </thead>
                            <tbody>
                            @foreach($ServiciosPrestados as $ServiciosPrestado)
                            <tr>
                                <td style="display: none;">{{ $ServiciosPrestado->id }}</td>
                                <td>{{ $ServiciosPrestado->nombre_servicio }}</td>
                                <td>{{ $ServiciosPrestado->nombre_cliente }}</td>
                                <td>{{ $ServiciosPrestado->descripcion }}</td>
                                <td>{{ $ServiciosPrestado->fecha }}</td>
                                <td>
                                <a class="btn btn-info" href="#modalsEditServiciosPrestados{{ $ServiciosPrestado }}">Editar</a>
                                <a class="btn btn-danger" href="#modalsServiciosPrestadosEliminar{{ $ServiciosPrestado}}">Borrar</a>

                                </td>
                            </tr>

                            @include('HomeFundacion.ServiciosPrestados.Eliminar')
                            @include('HomeFundacion.ServiciosPrestados.editar')
                            @endforeach

                            @include('HomeFundacion.ServiciosPrestados.crear')

                            </tbody>
                        </table>

                        <!-- Centramos la paginación a la derecha-->
                        <div class="pagination justify-content-end">
                                {!! $ServiciosPrestados->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


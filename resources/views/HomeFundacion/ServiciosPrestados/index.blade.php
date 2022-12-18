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
                        <div class="card-body table-responsive">
                        <a class="btn btn-warning" href="{{ route('ServiciosPrestados.create')}}">Nuevo</a>

                        <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
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
                                <td>{{ $ServiciosPrestado->Users->name }}</td>
                                <td>{{ $ServiciosPrestado->descripcion }}</td>
                                <td>{{ $ServiciosPrestado->fecha }}</td>
                                <td>
                                    <form action="{{ route('ServiciosPrestados.destroy', $ServiciosPrestado) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('ServiciosPrestados.edit', $ServiciosPrestado) }}">Editar</a>
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
                                {!! $ServiciosPrestados->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


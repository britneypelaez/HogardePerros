@extends('layouts.HomeFundacion.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Habitaciones</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                            
                        @can('crear-habitacion')
                        <a class="btn btn-warning" href="{{ route('habitaciones.create')}}">Nuevo</a>
                        @endcan
                        
                        <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color: #fff;">Numero</th>
                                    <th style="color: #fff;">Descripcion</th>
                                    <th style="color: #fff;">Piso</th>
                                    <th style="color: #fff;">Categoria</th>
                                    <th style="color: #fff;">Estado_Habitacion</th>
                                    <th style="color: #fff;">Acciones</th>
                                </thead>
                            <tbody>
                            @foreach($habitaciones as $habitacion)
                            <tr>
                                <td style="display: none;">{{ $habitacion->id }}</td>
                                <td>{{ $habitacion->numero }}</td>
                                <td>{{ $habitacion->Descripcion }}</td>
                                <td>{{ $habitacion->NumPiso }}</td>
                                <td>{{ $habitacion->Categorias }}</td>
                                <td>{{ $habitacion->Estados }}</td>
                                <td>
                                    <form action="{{ route('habitaciones.destroy', $habitacion->id) }}" method="POST">
                                        @can('editar-habitacion')
                                        <a class="btn btn-info" href="{{ route('habitaciones.edit', $habitacion->id) }}">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-habitacion')
                                        <button type="submit" class="btn btn-danger" >Borrar</button>
                                        @endcan
                                    </form>
                                </td>
                                
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Centramos la paginación a la derecha-->
                        <div class="pagination justify-content-end">
                                {!! $habitaciones->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


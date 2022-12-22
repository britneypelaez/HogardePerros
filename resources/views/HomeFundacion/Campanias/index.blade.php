@extends('layouts.HomeFundacion.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Campañas</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="controles Cont_serviciosVeterinarios">
                        <div>
                            <a class="btn btn-warning" href="{{ route('Campanias.create')}}">Nuevo</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body table-responsive">

                        <table class="table table-striped mt-2 text-center">
                            <thead style="background-color: #e1986e;">
                                <th style="display: none;">ID</th>
                                <th style="color: #fff;">Campaña</th>
                                <th style="color: #fff;">Descripcion</th>
                                <th style="color: #fff;">Meta</th>
                                <th style="color: #fff;">Donado</th>
                                <th style="color: #fff;">Imagen</th>
                                <th style="color: #fff;">acciones</th>
                            </thead>
                            <tbody>
                                @foreach($campanias as $campania)
                                <tr>
                                    <td style="display: none;">{{ $campania->id }}</td>
                                    <td>{{ $campania->nombre_campania }}</td>
                                    <td>{{ $campania->descripcion }}</td>
                                    <td>{{ $campania->meta_donaciones }}</td>
                                    <td>{{ $campania->actual_donado }}</td>
                                    <td><img src="{{ asset("storage/$campania->imagen_campania") }}" width="70px"
                                            height="70px"></td>
                                    <td WIDTH="200px">
                                        <form action="{{ route('Campanias.destroy', $campania) }}" method="POST">
                                            <a class="btn btn-info"
                                                href="{{ route('Campanias.edit', $campania) }}">Editar</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Borrar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Centramos la paginación a la derecha-->
                        <div class="pagination justify-content-end">
                            {!! $campanias->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
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
                            <a class="btn btn-warning" href="#modalsCreateCampanias">Nuevo</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body table-responsive Cont_Campanias ">

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
                                    <td style="height: 80px;">{{ $campania->nombre_campania }}</td>
                                    <td>{{ $campania->descripcion }}</td>
                                    <td>{{ $campania->meta_donaciones }}</td>
                                    <td>{{ $campania->actual_donado }}</td>
                                    <td><img src="{{ asset("storage/$campania->imagen_campania") }}" width="70px"
                                            height="70px" style="border-radius:50%" ; object-fit: cover;></td>
                                    <td width="200px">
                                        <a class="btn btn-info" href="#modalsEditCampanias{{ $campania }}">Editar</a>
                                        <a class="btn btn-danger"
                                            href="#modalsCampaniasEliminar{{ $campania}}">Borrar</a>

                                    </td>

                                </tr>

                                @include('HomeFundacion.Campanias.Eliminar')

                                @include('HomeFundacion.Campanias.editar')


                                @endforeach

                                @include('HomeFundacion.Campanias.crear')

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
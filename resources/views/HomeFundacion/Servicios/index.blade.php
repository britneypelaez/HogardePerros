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

                    <div class="controles Cont_serviciosVeterinarios">
                        <div>
                            <a class="btn btn-warning" href="#modalsCreateServicios">Nuevo</a>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="services">

                        @foreach($servicios as $servicio)

                        <div class="cards">
                            <div class="cards1">
                                <div class="picture">
                                    <img src="{{ asset("storage/$servicio->imagen_servicio") }}" alt="" />
                                </div>
                                <div class="description">
                                    <h1>{{ $servicio->nombre_serviciio }}</h1>
                                    <a style="display: none;">{{ $servicio->id }}</a>
                                    <div class="opcionesAdmin">
                                        <a href="#modalsEditServicios{{ $servicio }}"><img
                                                src="{{ asset('img/Home/edit.png') }}" alt="" /></a>
                                        <a href="#modalsServiciosEliminar{{ $servicio }}"><img src="{{ asset('img/Home/delete.png') }}"
                                                alt="" /></a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        @include('HomeFundacion.Servicios.editar')
                        @include('HomeFundacion.Servicios.Eliminar')


                        @endforeach

                        @include('HomeFundacion.Servicios.crear')

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
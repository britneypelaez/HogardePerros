@extends('layouts.HomeFundacion.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Hogar de perros</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-xl-4">
                                <div class="card bg-c-blue orden-card">
                                    <div class="card-blok">
                                        <h5>Mascotas</h5>
                                        @php
                                        use App\Models\Mascota;
                                        $cant_mascotas = Mascota::count();
                                        @endphp
                                        <h2 class="text-right"><i class="fa fa-solid fa-paw f-left"></i><span>{{ $cant_mascotas }}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/Mascotas" class="text-white">Ver más</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-4">
                                <div class="card bg-c-green orden-card">
                                    <div class="card-blok">
                                        <h5>Servicios Veterinarios</h5>
                                        @php
                                        use App\Models\Servicio;
                                        $cant_servicios = Servicio::count();
                                        @endphp
                                        <h2 class="text-right"><i class="fa fa-solid fa-ambulance f-left "></i><span>{{ $cant_servicios }}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/Servicios" class="text-white">Ver más</a></p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-4">
                                <div class="card bg-c-pink orden-card">
                                    <div class="card-blok">
                                        <h5>Mascotas Perdidas</h5>
                                        @php
                                        use App\Models\MascotaPerdida;
                                        $cant_mascotas_perdidas = MascotaPerdida::count();
                                        @endphp
                                        <h2 class="text-right"><i class="fa fa-solid fa-heartbeat f-left"></i><span>{{ $cant_mascotas_perdidas }}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/MascotasPerdidas" class="text-white">Ver más</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
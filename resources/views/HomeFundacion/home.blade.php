@extends('layouts.HomeFundacion.app')

@section('content')
<section class="section">
    <div class="section-header">
        @php
        use App\Models\User;
        $user = User::where('id', Auth::user()->id)->first();
        @endphp
        @if ($user->id_fundacion != null)
            <h3 class="page__heading">{{ $user->Fundacion->nombre }}</h3>
        @endif
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-xl-12">
                                <div class="card bg-c-blue orden-card">
                                    <div class="card-blok">
                                        <h5 style="color:white;">Mascotas</h5>
                                        @php
                                        use App\Models\Mascota;
                                        $cant_mascotas = Mascota::where('id_fundacion', $user->id_fundacion)->count();
                                        @endphp
                                        <h2 class="text-right"><i class="fa fa-solid fa-paw f-left" style="color:white;"></i><span style="color:white;">{{ $cant_mascotas }}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/Mascotas" class="text-white">Ver más</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-12">
                                <div class="card bg-c-green orden-card">
                                    <div class="card-blok">
                                        <h5 style="color:white;">Servicios Veterinarios</h5>
                                        @php
                                        use App\Models\Servicio;
                                        $cant_servicios = Servicio::where('id_fundacion', $user->id_fundacion)->count();
                                        @endphp
                                        <h2 class="text-right"><i class="fa fa-solid fa-ambulance f-left " style="color:white;"></i><span style="color:white;">{{ $cant_servicios }}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/Servicios" class="text-white">Ver más</a></p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-12">
                                <div class="card bg-c-pink orden-card">
                                    <div class="card-blok">
                                        <h5 style="color:white;">Servicios Prestados</h5>
                                        @php
                                        use App\Models\ServicioPrestado;
                                        $cant_servicios_prestados = ServicioPrestado::where('id_fundacion', $user->id_fundacion)->count();
                                        @endphp
                                        <h2 class="text-right"><i class="fa fa-solid fa-list f-left" style="color:white;"></i><span style="color:white;">{{ $cant_servicios_prestados }}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/ServiciosPrestados" class="text-white">Ver más</a></p>
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
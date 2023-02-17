<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <br>
    <br>
    <a class="nav-link" href="{{url('Mascotas')}}">
        <i class=" fas fa-solid fa-paw"></i><span>Adopción</span>
    </a>
    <br>
    <a class="nav-link" href="{{url('Servicios')}}">
        <i class=" fas fa-solid fa-ambulance"></i><span>Servicios Veterinarios</span>
    </a>
    <br>
    <a class="nav-link" href="{{url('Campanias')}}">
        <i class=" fas fa-solid fa-compass"></i><span>Campañas</span>
    </a>
    <br>
    <a class="nav-link" href="{{url('Certificados')}}">
        <i class=" fas fa-solid fa-file"></i><span>Certificados</span>
    </a>
    <br>
    <a class="nav-link" href="{{url('MascotasPerdidas')}}">
        <i class=" fas fa-solid fa-heartbeat"></i><span>Encuéntrame</span>
    </a>
    <br>
    <a class="nav-link" href="{{url('ServiciosPrestados')}}">
        <i class=" fas fa-solid fa-list"></i><span>Servicios Prestados</span>
    </a>
    <br>
    <a class="nav-link" href="#modalsCambiarCampaña">
        <i class=" fas fa-solid fa-file"></i><span>Campaña Adoptame</span>
    </a>
</li>

<div class="contenedor-modal desplazo" id="modalsCambiarCampaña" style=" left: -55%; !important">
    <div class="moda">

        @if($errors->any())
        <div class="alert alert-dark alert-dismissible fade show" role="alert">
            <strong>¡Revise los campos!</strong>
            @foreach($errors->all() as $error)
            <span class="badge badge-danger">{{$error}}</span>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <form action="{{ route('registrar.campaña') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="informacion">

                <h3 class="page__heading"> Cambiar Imagen de Campaña</h3>

                <div class="actualizar3">
                    <div class="col-xs-12 col-sm-12 col-md-12" style="display: flex;flex-direction:column;">
                        <img class="foto" src="{{ asset('storage/' . Auth::user()->Fundacion->imagenCampania) }}" alt="Adopta">

                        <div class="form-group">
                            <input type="file" name="imagen_campaña" id="imagen_campaña" accept="image/*" required>
                            @error('logo_fundacion')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>

            </div>
        </form>
        <a href="#" class="btn-close-modal">X</a>
    </div>
</div>
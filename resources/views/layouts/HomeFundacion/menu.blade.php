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
        <i class=" fas fa-solid fa-heartbeat"></i><span>Encuentrame</span>
    </a>
    <br>
    <a class="nav-link" href="{{url('ServiciosPrestados')}}">
        <i class=" fas fa-solid fa-list"></i><span>Servicios Prestados</span>
    </a>
</li>

<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    @can('ver-habitacion')
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
    @endcan
    @can('ver-usuario')
    <a class="nav-link" href="/usuarios">
        <i class=" fas fa-regular fa-users"></i><span>Usuarios</span>
    </a>
    @endcan
    @can('ver-rol')
    <a class="nav-link" href="/roles">
        <i class=" fas fa-user-lock"></i><span>Roles</span>
    </a>
    @endcan
    @can('ver-habitacion')
    <a class="nav-link" href="/habitaciones">
        <i class=" fas fa-solid fa-bed"></i><span>Habitaciones</span>
    </a>
    @endcan
    @can('ver-piso')
    <a class="nav-link" href="/pisos">
        <i class=" fas fa-solid fa-house-user"></i><span>Pisos</span>
    </a>
    @endcan
    @can('ver-categoria')
    <a class="nav-link" href="/categorias">
        <i class=" fas fa-regular fa-filter"></i><span>Categorias</span>
    </a>
    @endcan
    @can('ver-estado')
    <a class="nav-link" href="/estado_habitacion">
        <i class=" fas fa-regular fa-question"></i><span>Estado Habitacion</span>
    </a>
    @endcan
    @can('ver-persona')
    <a class="nav-link" href="/personas">
        <i class=" fas fa-solid fa-user-tie"></i><span>Personas</span>
    </a>
    @endcan
    @can('ver-reservacion')
    <a class="nav-link" href="/reservaciones">
        <i class=" fas fa-solid fa-calendar"></i><span>Reservaciones</span>
    </a>
    @endcan
    <a class="nav-link" href="{{url('arrendar/index')}}">
        <i class=" fas fa-solid fa-clock"></i><span>Reservar</span>
    </a>
    @can('ver-misreservas')
    <a class="nav-link" href="{{url('reservas/index')}}">
        <i class=" fas fa-solid fa-calendar"></i><span>Mis reservaciones</span>
    </a>
    @endcan
    @can('ver-reservacion')
    <a class="nav-link" href="/reportes">
        <i class=" fas fa-solid fa-file-pdf"></i><span>Reportes</span>
    </a>
    @endcan
</li>

<div class="contenedor-modal Eliminar" id="modalsServiciosEliminar{{ $servicio }}">
    <div class="moda">
        <div class="ContenedorEliminar">
            <h4>¿Está seguro que desea continuar con esta acción?</h4>
            <a href="#"><button class="btn btn-outline-danger">Cancelar</button></a>
            <form action="{{ route('Servicios.destroy', $servicio->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a><button class="btn btn-outline-danger" type="submit">Eliminar</button></a>
            </form>
        </div>

    </div>
</div>
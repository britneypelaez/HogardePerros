<div class="contenedor-modal Eliminar" id="modalsEliminarPerdidasUsuario{{ $MascotasPerdida }}">
    <div class="moda">
        <div class="ContenedorEliminar">
            <h4>¿Esta seguro que desea continuar con esta accion?</h4>
            <a href="#"><button class="btn btn-outline-danger">Cancelar</button></a>
            <form action="{{ route('publicacion.delete', $MascotasPerdida->id) }}" method="POST">
                @csrf
                <a><button class="btn btn-outline-danger" type="submit">Eliminar</button></a>
            </form>
        </div>

    </div>
</div>
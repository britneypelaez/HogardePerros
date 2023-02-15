<div class="contenedor-modal Eliminar" id="modalsCampaniasEliminar{{ $campania}}">
    <div class="moda">
        <div class="ContenedorEliminar">
            <h4>¿Está seguro que desea continuar con esta acción?</h4>
            <a href="#"><button class="btn btn-outline-danger">Cancelar</button></a>

            <a>
                <form action="{{ route('Campanias.destroy', $campania->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger" type="submit">Eliminar</button>
                </form>
            </a>
        </div>

    </div>
</div>
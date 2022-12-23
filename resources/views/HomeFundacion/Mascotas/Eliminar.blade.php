<div class="contenedor-modal Eliminar" id="modalsMascotasEliminar{{ $mascota}}">
    <div class="moda">
        <div class="ContenedorEliminar">
            <h4>¿Esta seguro que desea continuar con esta accion?</h4>
            <a href="#"><button class="btn btn-outline-danger">Cancelar</button></a>
            <form action="{{ route('Mascotas.destroy', $mascota->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a><button class="btn btn-outline-danger" type="submit">Eliminar</button></a>
            </form>
        </div>

    </div>
</div>
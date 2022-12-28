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

<div class="contenedor-modal" id="modalsCreateServicios">
    <div class="moda">

        <form action="{{ route('Servicios.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="informacion">

                <h3 class="page__heading">Nuevo Servicio Veterinario</h3>

                <div class="actualizar">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="">Subir foto</label><br>
                            <input type="file" name="imagen_servicio" id="imagenModal" accept="image/*" required>
                            @error('imagen_servicio')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="actualizar1" style="grid-column: 2/4;">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="nombre_serviciio">Nombre del servicio Veterinario</label>
                            <input type="text" name="nombre_serviciio" class="form-control" required
                                value="{{ old('nombre_mascota') }}">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <textarea type="text" name="descripcion" class="form-control" required
                                value="">{{ old('descripcion') }}</textarea>
                        </div>
                    </div>

                </div>


                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
        <a href="#" class="btn-close-modal">X</a>
    </div>
</div>
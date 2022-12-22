<div class="contenedor-modal" id="modalsEditServicios{{ $servicio }}">
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
        <form action="{{ route('Servicios.update', $servicio) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="informacion">

                <h3 class="page__heading">Editar Servicio Veterinario</h3>

                <div class="actualizar">

                    <img src="{{ asset("storage/$servicio->imagen_servicio") }}" alt="" />
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="">Subir foto</label><br>
                            <input type="file" name="imagen_servicio" id="" accept="image/*" style="width:150px;">
                            @error('imagen_servicio')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="actualizar1" style="grid-column: 2/4;">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="nombre_serviciio">Nombre del Servicio Veterinario</label>
                            <input type="text" name="nombre_serviciio" class="form-control" required
                                value="{{ old('nombre_serviciio', $servicio->nombre_serviciio) }}">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="descripcion">Descripcion del Servicio Veterinario</label>
                            <textarea type="text" name="descripcion" class="form-control" required
                                value="" style="height:240px;">{{ old('descripcion', $servicio->descripcion) }}</textarea>
                        </div>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
        <a href="#" class="btn-close-modal">X</a>
    </div>
</div>
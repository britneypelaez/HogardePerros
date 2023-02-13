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

<div class="contenedor-modal-crear" id="modalsCreatePerdidas">
    <div class="moda-crear">
        <form action="{{ route('publicacion.create') }}" id="confirmacion-crear" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="informacion-crear">
                <h3 class="page__heading">Nuevo Animal Perdido</h3>

                <div class="actualizar">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group2">
                            <label for="">Subir foto</label><br>
                            <input type="file" name="imagen_mascota" id="" accept="image/*" required
                                style="width: 165px;">
                            @error('imagen_mascota')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="actualizar1">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group2">
                            <label for="nombre_mascota">Nombre de la mascota</label>
                            <input type="text" name="nombre_mascota" class="form-control" required
                                value="{{ old('nombre_mascota') }}">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group2">
                            <label for="descripcion">Descripción</label>
                            <textarea type="text" name="descripcion" class="form-control" required value=""
                                style="height:230px;"> {{ old('descripcion') }}</textarea>
                        </div>
                    </div>

                </div>

                <div class="actualizar2">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group2">
                            <label for="raza">Raza</label>
                            <select name="raza" id="raza" class="form-control">
                                @foreach($razas as $raza)
                                <option value="{{ $raza['raza'] }}">{{ $raza['descripcion'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group2">
                            <label for="color">Color</label>
                            <select name="color" id="color" class="form-control">
                                @foreach($colores as $color)
                                <option value="{{ $color['color'] }}">{{ $color['descripcion'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group2">
                            <label for="tamanio">Tamaño</label>
                            <select name="tamanio" id="tamanio" class="form-control">
                                @for ($i = 20; $i <=110; $i=$i + 5) <option value="{{ $i }}">{{ $i }} cm</option>
                                    @endfor
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group2">
                            <label for="especie">Especie</label>
                            <select name="especie" id="especie" class="form-control">
                                @foreach($especies as $especie)
                                <option value="{{ $especie['especie'] }}">{{ $especie['descripcion'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <button type="submit" id="p1" class="btn btn-primary">Guardar</button>

            </div>

        </form>
        <a href="#" class="btn-close-modal-crear">X</a>

    </div>
</div>

<script>
document.querySelector("#p1").addEventListener("click", function(event) {
    document.querySelector('#confirmacion-crear').submit();
    this.disabled = true;
});
</script>
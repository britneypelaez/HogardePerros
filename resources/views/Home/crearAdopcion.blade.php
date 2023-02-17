<div class="contenedor-modal-crear" id="modalsCreateMascota">
    <div class="moda-crear">

        @if ($errors->any())
            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                <strong>¡Revise los campos!</strong>
                @foreach ($errors->all() as $error)
                    <span class="badge badge-danger">{{ $error }}</span>
                @endforeach
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <form action="{{ route('adopcion.create') }}" id="confirmacion-crear" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="informacion-crear">

                <h3 class="page__heading">Nuevo Animal</h3>

                <div class="actualizar ms-3">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="">Subir foto</label><br>
                            <input type="file" name="imagen_mascota" id="imagenModal" accept="image/*" style="width: 179px;" required>
                            @error('imagen_mascota')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="actualizar1 me-4">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="nombre_mascota">Nombre de la mascota</label>
                            <input type="text" name="nombre_mascota" class="form-control" required
                                value="{{ old('nombre_mascota') }}">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <textarea type="text" name="descripcion" class="form-control" required value=""> {{ old('descripcion') }}</textarea>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="raza">Raza</label>
                            <select name="raza" id="razaCrear" class="form-control">
                                @foreach($Razas as $raza)
                                <option value="{{ $raza['raza'] }}">{{ $raza['descripcion'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>


                <div class="actualizar2 me-4">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="color">Color</label>
                            <select name="color" id="color" class="form-control">
                                @foreach ($Colores as $color)
                                    <option value="{{ $color['color'] }}">{{ $color['descripcion'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="tamanio">Tamaño</label>
                            <select name="tamanio" id="tamanio" class="form-control">
                                <option value="1">Pequeño</option>
                                <option value="2">Mediano</option>
                                <option value="3">Grande</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="especie">Especie</label>
                            <select name="especie" id="especieCrear" class="form-control">
                                @foreach ($Especies as $especie)
                                    <option value="{{ $especie['especie'] }}">{{ $especie['descripcion'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="edad">Edad</label>
                            <select name="edad" id="edad" class="form-control">
                                @for ($i = 0; $i <= 8; $i += 2)
                                    <option value="{{ $i + 1 }}">{{ $i }} a {{ $i + 2 }}
                                        meses</option>
                                @endfor
                                <option value="10">10 a 11 meses</option>
                                <option value="11">1 año</option>
                                @for ($i = 12; $i <= 23; $i++)
                                    <option value="{{ $i }}">{{ $i - 10 }} años</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>
                <button type="button" id="si"
                    class="btn btn-primary">Guardar</button>
            </div>

        </form>
        <a href="#" class="btn-close-modal-crear">X</a>
    </div>
</div>

<script>
    document.querySelector("#si").addEventListener("click", function(event) {
        document.querySelector('#confirmacion-crear').submit();
        this.disabled = true;
    });


</script>

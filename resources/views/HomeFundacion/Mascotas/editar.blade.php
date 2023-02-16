<div class="contenedor-modal" id="modalsEditMascotas{{ $mascota }}">
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

        <form action="{{ route('Mascotas.update', $mascota->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="informacion">
                <h3 class="page__heading">Editar Animal</h3>

                <div class="actualizar">

                    <img src="{{ asset("storage/$mascota->imagen_mascota") }}" alt="Adopta">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="">Subir foto</label><br>
                            <input type="file" name="imagen_mascota" id="imagenModal" accept="image/*">
                            @error('imagen_mascota')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="actualizar1">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="nombre_mascota">Nombre de la mascota</label>
                            <input type="text" name="nombre_mascota" class="form-control" required
                                value="{{ old('nombre_mascota', $mascota->nombre_mascota) }}">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <textarea name="descripcion" class="form-control" required
                                value="">{{ old('descripcion', $mascota->descripcion) }}</textarea>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="raza">Raza</label>
                            <select name="raza" id="{{ 'raza'.$mascota->id }}" class="form-control">
                                @foreach($razas as $raza)
                                <option value="{{ $raza->raza }}"
                                {{ $raza->raza == $mascota->raza ? 'selected' : '' }}>
                                {{ $raza['descripcion']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>

                <div class="actualizar2">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="color">Color</label>
                            <select name="color" id="color" class="form-control">
                                @foreach($colores as $color)
                                <option value="{{ $color->color }}"
                                    {{ $color->color == $mascota->color ? 'selected' : '' }}>
                                    {{ $color['descripcion']}}
                                </option>
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
                            <select name="especie" id="{{ $mascota->id }}" class="form-control">
                                @foreach($especies as $especie)
                                <option value="{{ $especie->especie }}"
                                    {{ $especie->especie == $mascota->especie ? 'selected' : '' }}>
                                    {{ $especie['descripcion']}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="edad">Edad</label>
                            <select name="edad" id="edad" class="form-control">
                                @for ($i = 1; $i <=14; $i++) <option value="{{ $i }}"
                                    {{ $i == $mascota->edad ? 'selected' : '' }}>{{ $i }} años</option>
                                    @endfor
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <select name="estado" id="estado" class="form-control">
                                @foreach($estados as $estado)
                                <option value="{{ $estado->estado }}"
                                    {{ $estado->estado == $mascota->estado ? 'selected' : '' }}>
                                    {{ $estado['descripcion']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>

        <a href="#" class="btn-close-modal">X</a>

    </div>
</div>

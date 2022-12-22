<div class="contenedor-modal" id="modalsEdit{{ $mascota }}">
    <div class="moda">
        <div class="informacion">
            <h3 class="page__heading">Editar Animal</h3>
            <div>
                <form action="{{ route('Mascotas.update', $mascota->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <img src="{{ asset("storage/$mascota->imagen_mascota") }}" alt="Adopta">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="">Subir foto</label><br>
                            <input type="file" name="imagen_mascota" id="" accept="image/*" style="width: 150px;">
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
                        <select name="raza" id="raza" class="form-control">
                            @foreach($razas as $raza)
                            <option value="{{ $raza['raza'] }}">
                                {{ $raza['descripcion'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="color">Color</label>
                        <select name="color" id="color" class="form-control">
                            @foreach($colores as $color)
                            <option value="{{ $color['color'] }}">
                                {{ $color['descripcion'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


            </div>

            <div class="actualizar2">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="tamanio">Tamaño</label>
                        <select name="tamanio" id="tamanio" class="form-control">
                            @for ($i = 20; $i <=110; $i=$i + 5) <option value="{{ $i }}">
                                {{ $i }} cm</option>
                                @endfor
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="especie">Especie</label>
                        <select name="especie" id="especie" class="form-control">
                            @foreach($especies as $especie)
                            <option value="{{ $especie['especie'] }}">
                                {{ $especie['descripcion'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="edad">Edad</label>
                        <select name="edad" id="edad" class="form-control">
                            @for ($i = 0; $i <=14; $i++) <option value="{{ $i }}">
                                {{ $i }} años</option>
                                @endfor
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <select name="estado" id="estado" class="form-control">
                            @foreach($estados as $estado)
                            <option value="{{ $estado['estado'] }}">
                                {{ $estado['descripcion'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
        <a href="#" class="btn-close-modal">X</a>

    </div>
</div>
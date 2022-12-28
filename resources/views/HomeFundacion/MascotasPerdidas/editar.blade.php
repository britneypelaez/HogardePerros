<div class="contenedor-modal" id="modalsEditPerdidas{{ $MascotasPerdida }}">
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
        <form action="{{ route('MascotasPerdidas.update', $MascotasPerdida->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="informacion">

                <h3 class="page__heading">Editar Mascota Perdida</h3>

                <div class="actualizar">

                    <img src="{{ asset("storage/$MascotasPerdida->imagen_mascota") }}" alt="" />
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
                                value="{{ old('nombre_mascota', $MascotasPerdida->nombre_mascota) }}">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <textarea type="text" name="descripcion" class="form-control" required value=""
                                style="height:230px;">{{ old('descripcion', $MascotasPerdida->descripcion) }}</textarea>
                        </div>
                    </div>

                </div>

                <div class="actualizar2">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="raza">Raza</label>
                            <select name="raza" id="raza" class="form-control">
                                @foreach($razas as $key => $raza)
                                <option value="{{ $raza->raza }}"
                                    {{ $raza->raza == $MascotasPerdida->raza ? 'selected' : '' }}>
                                    {{ $raza['descripcion']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="color">Color</label>
                            <select name="color" id="color" class="form-control">
                                @foreach($colores as $color)
                                <option value="{{ $color->color }}"
                                    {{ $color->color == $MascotasPerdida->color ? 'selected' : '' }}>
                                    {{ $color['descripcion']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="tamanio">Tamaño</label>
                            <select name="tamanio" id="tamanio" class="form-control">
                                @for ($i = 20; $i <=110; $i=$i + 5) <option value="{{ $i }}"
                                    {{ $i == $MascotasPerdida->tamanio ? 'selected' : '' }}>{{ $i }} cm</option>
                                    @endfor
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="especie">Especie</label>
                            <select name="especie" id="especie" class="form-control">
                                @foreach($especies as $especie)
                                <option value="{{ $especie->especie }}"
                                    {{ $especie->especie == $MascotasPerdida->especie ? 'selected' : '' }}>
                                    {{ $especie['descripcion']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
        <a href="#" class="btn-close-modal">X</a>
    </div>
</div>
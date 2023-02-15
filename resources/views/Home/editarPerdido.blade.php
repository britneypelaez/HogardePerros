<div class="contenedor-modal-crear" id="modalsEditPerdidas{{ $MascotasPerdida }}">
    <div class="moda-crear">
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
        <form action="{{ route('publicacion.update', $MascotasPerdida->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="informacion-crear">

                <h3 class="page__heading">Editar Mascota Perdida</h3>

                <div class="actualizar ms-3">

                    <img class="imagen-servicio" src="{{ asset("storage/$MascotasPerdida->imagen_mascota") }}" alt="" />
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group2">
                            <label for="">Subir foto</label><br>
                            <input type="file" name="imagen_mascota" id="" accept="image/*" style="width: 179px;">
                            @error('imagen_mascota')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                </div>


                <div class="actualizar1 me-4">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group2">
                            <label for="nombre_mascota">Nombre de la mascota</label>
                            <input type="text" name="nombre_mascota" class="form-control" required
                                value="{{ old('nombre_mascota', $MascotasPerdida->nombre_mascota) }}">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group2">
                            <label for="descripcion">Descripción</label>
                            <textarea type="text" name="descripcion" class="form-control" required value=""
                                style="height:100px;">{{ old('descripcion', $MascotasPerdida->descripcion) }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="actualizar2 me-4">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group2">
                            <label for="raza">Raza</label>
                            <select name="raza" id="raza" class="form-control">
                                @foreach($razas as $key => $raza)
                                <option value="{{ $raza->raza }}" {{ $raza->raza == $MascotasPerdida->raza ? 'selected' : '' }}>
                                    {{ $raza['descripcion']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group2">
                            <label for="color">Color</label>
                            <select name="color" id="color" class="form-control">
                                @foreach($colores as $color)
                                <option value="{{ $color->color }}"
                                    {{ $color->color == $MascotasPerdida->color ? 'selected' : '' }}>
                                    {{ $color['descripcion']}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group2">
                            <label for="tamanio">Tamaño</label>
                            <select name="tamanio" id="tamanio" class="form-control">
                                @for ($i = 20; $i <=110; $i=$i + 5) <option value="{{ $i }}"
                                {{ $i == $MascotasPerdida->tamanio ? 'selected' : '' }}>{{ $i }} cm</option>
                                    @endfor
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group2">
                            <label for="especie">Especie</label>
                            <select name="especie" id="especie" class="form-control">
                                @foreach($especies as $especie)
                                <option value="{{ $especie->especie }}"
                                    {{ $especie->especie == $MascotasPerdida->especie ? 'selected' : '' }}>
                                    {{ $especie['descripcion']}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
            <input name="mascot" type="hidden" value="{{$MascotasPerdida->id}}">
        </form>
        <a href="#" class="btn-close-modal-crear">X</a>
    </div>
</div>
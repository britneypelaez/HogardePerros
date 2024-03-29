<div class="contenedor-modal" id="modalsEditMascotas{{ $mascota }}">
    <div class="moda">

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

        <form action="{{ route('Mascotas.update', $mascota->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            @section('metas')
                <meta property="og:type" content="website" />
                <meta property="og:title" content="Adoptame ahora!! {{ $mascota->nombre_mascota }}" />
                <meta property="og:description" content="{{ $mascota->descripcion }}" />
                <meta property="og:image" content="{{ asset("storage/$mascota->imagen_mascota") }}" />
            @endsection

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
                            <textarea name="descripcion" class="form-control" style="height: 200px; !important" required value="">{{ old('descripcion', $mascota->descripcion) }}</textarea>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="raza">Raza</label>
                            <select name="raza" id="{{ $mascota->id }}" class="form-control">
                                @foreach ($razas as $raza)
                                    <option value="{{ $raza->raza }}"
                                        {{ $raza->raza == $mascota->raza ? 'selected' : '' }}>
                                        {{ $raza['descripcion'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="color">Color</label>
                            <select name="color" id="color" class="form-control">
                                @foreach ($colores as $color)
                                    <option value="{{ $color->color }}"
                                        {{ $color->color == $mascota->color ? 'selected' : '' }}>
                                        {{ $color['descripcion'] }}
                                    </option>
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
                                <option value="1" {{ 1 == $mascota->tamanio ? 'selected' : '' }}>Pequeño</option>
                                <option value="2" {{ 2 == $mascota->tamanio ? 'selected' : '' }}>Mediano</option>
                                <option value="3" {{ 10 == $mascota->tamanio ? 'selected' : '' }}>Grande</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="especie">Especie</label>
                            <select name="especie" id="{{ $mascota->id }}" class="form-control">
                                @foreach ($especies as $especie)
                                    <option value="{{ $especie->especie }}"
                                        {{ $especie->especie == $mascota->especie ? 'selected' : '' }}>
                                        {{ $especie['descripcion'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="edad">Edad</label>
                            <select name="edad" id="edad" class="form-control">
                                @for ($i = 0; $i <= 8; $i += 2)
                                    <option value="{{ $i + 1 }}" {{ $i + 1 == $mascota->edad ? 'selected' : '' }}>{{ $i }} a {{ $i + 2 }}
                                        meses</option>
                                @endfor
                                <option value="10" {{ 10 == $mascota->edad ? 'selected' : '' }}>10 a 11 meses</option>
                                <option value="11" {{ 11 == $mascota->edad ? 'selected' : '' }}>1 año</option>
                                @for ($i = 12; $i <= 23; $i++)
                                    <option value="{{ $i }}" {{ $i == $mascota->edad ? 'selected' : '' }}>{{ $i - 10 }} años</option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <select name="estado" id="estado" class="form-control">
                                @foreach ($estados as $estado)
                                    <option value="{{ $estado->estado }}"
                                        {{ $estado->estado == $mascota->estado ? 'selected' : '' }}>
                                        {{ $estado['descripcion'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="estado">Compartir en Facebook</label>
                            <ul class="wrapper" id="otro">
                                <a class="Facebook" target="_blank" href="">
                                    <li class="icon facebook">
                                        <span class="tooltip">Facebook</span>
                                        <span><i class="fab fa-facebook-f"></i></span>
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>

                </div>

                <button type="submit" style="margin-top: 15px" class="btn btn-primary">Guardar</button>
            </div>
        </form>

        <a href="#" class="btn-close-modal">X</a>

    </div>
</div>

<!-- <script>
    const fbButtons = document.querySelectorAll('.Facebook');
    for (let i = 0; i < fbButtons.length; i++) {
        const link = encodeURI(window.location.href);
        fbButtons[i].href = `https://www.facebook.com/sharer/sharer.php?u=${link}`;
        fbButtons[i].addEventListener('click', function(e) {
            e.preventDefault();
            window.open(this.href, 'Compartir en Facebook', 'width=640,height=320');
        });
    }
</script> -->

@include('HomeFundacion.MascotasPerdidas.modalGenerico')
<div class="contenedor-modal" id="modalsCreatePerdidas">
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

        <form action="{{ route('MascotasPerdidas.store') }}" id="confirmacion-crear" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="informacion">
                <h3 class="page__heading">Nuevo Animal Perdido</h3>

                <div class="actualizar">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="">Subir foto</label><br>
                            <input type="file" name="imagen_mascota" id="imagenModal" accept="image/*" required>
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
                                value="{{ old('nombre_mascota') }}">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea type="text" name="descripcion" class="form-control" required value="" style="height:230px;"> {{ old('descripcion') }} </textarea>
                        </div>
                    </div>

                </div>

                <div class="actualizar2">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="raza">Raza</label>
                            <select name="raza" id="razaCrear" class="form-control">
                                @foreach ($razas as $raza)
                                    <option value="{{ $raza['raza'] }}">{{ $raza['descripcion'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="color">Color</label>
                            <select name="color" id="color" class="form-control">
                                @foreach ($colores as $color)
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
                                @foreach ($especies as $especie)
                                    <option value="{{ $especie['especie'] }}">{{ $especie['descripcion'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <button type="button" data-bs-target="#ModalCenter" id="p1"
                    class="btn btn-primary">Guardar</button>

            </div>

        </form>
        <a href="#" class="btn-close-modal">X</a>
    </div>
</div>
<script>
    const especie = document.getElementById('especieCrear');
    let ruta = '{{ env('
    APP_URL ') }}';

    const searchRazaAgregar = async (especie) => {
        const resultRaza = await fetch(ruta + `api/raza/search?especie=${especie}`)
            .then(res => res.json())
            .then(res => {
                let selector = document.getElementById('razaCrear');
                removeAllChildNodes(selector);
                res.forEach((element) => {
                    let opcion = document.createElement('option');
                    opcion.value = element.raza;
                    opcion.text = element.descripcion;
                    selector.add(opcion);
                })
            });
    }

    function removeAllChildNodes(parent) {
        while (parent.firstChild) {
            parent.removeChild(parent.firstChild);
        }
    }

    searchRazaAgregar(especie.value);

    especie.addEventListener('change', function(event) {
        searchRazaAgregar(event.target.value);
    });

    document.querySelector("#si").addEventListener("click", function(event) {
        document.querySelector('#confirmacion-crear').submit();
        this.disabled = true;
    });

    document.querySelector("#no1").addEventListener("click", function(event) {
        document.querySelector('#ModalCenter').style.display = "none";
    });

    document.querySelector("#no2").addEventListener("click", function(event) {
        document.querySelector('#ModalCenter').style.display = "none";
    });

    document.querySelector("#p1").addEventListener("click", function(event) {
        document.querySelector('#ModalCenter').style.display = "block";
    });
</script>

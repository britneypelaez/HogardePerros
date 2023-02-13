@include('HomeFundacion.Campanias.modalGenerico')
<div class="contenedor-modal" id="modalsCreateCampanias">
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

        <form action="{{ route('Campanias.store') }}" id="confirmacion-crear" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="informacion">

                <h3 class="page__heading">Nueva Campaña</h3>

                <div class="actualizar">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="">Subir foto</label><br>
                            <input type="file" name="imagen_campania" id="imagenModal" accept="image/*" required>
                            @error('imagen_campania')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="actualizar1" style="grid-column: 2/4;">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="nombre_campania">Nombre de la campaña</label>
                            <input type="text" name="nombre_campania" class="form-control" required
                                value="{{ old('nombre_campania') }}">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" name="descripcion" class="form-control" required
                                value="{{ old('descripcion') }}">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="meta_donaciones">Meta</label>
                            <input type="text" name="meta_donaciones" class="form-control" required
                                value="{{ old('meta_donaciones') }}">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="actual_donado">Donado</label>
                            <input type="text" name="actual_donado" class="form-control" required
                                value="{{ old('actual_donado') }}">
                        </div>
                    </div>

                </div>


                <button type="button" data-bs-target="#ModalCenter" id="p1" class="btn btn-primary">Guardar</button>
            </div>
        </form>
        <a href="#" class="btn-close-modal">X</a>

    </div>
</div>

<script>
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
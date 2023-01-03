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


<div class="contenedor-modal" id="modalsCreateServiciosPrestados">
    <div class="moda">

        <form action="{{ route('ServiciosPrestados.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="informacion">

                <h3 class="page__heading">Servicio</h3>

                <div class="actualizar">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="nombre_servicio">Nombre del servicio</label>
                            <input type="text" name="nombre_servicio" class="form-control" required
                                value="{{ old('nombre_servicio') }}">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="nombre_mascota">Cliente</label>
                            <select name="id_cliente" id="id_cliente" class="form-control" data-live-search="true"
                                data-style="form-control" title="-- Select your coffee --">
                                @foreach($usuarios as $usuario)
                                <option value="{{ $usuario['id'] }}">{{ $usuario['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="actualizar1" style="display: flex; align-items: center;">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label>Seleccionar fecha: <input type="date" name="fecha" min="{{date("Y-m-d")}}"
                                    value="{{date("Y-m-d")}}"></label>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <textarea type="text" name="descripcion" class="form-control" required
                                value="">{{ old('descripcion') }}</textarea>
                        </div>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
        <a href="#" class="btn-close-modal">X</a>

    </div>
</div>
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

<div class="contenedor-modal desplazo" id="modalsCambiarLogo" style=" left: -55%; !important">
    <div class="moda">


        <form action="{{ route('registrar.logo') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="informacion">

                <h3 class="page__heading"> Cambiar Logo de la Fundacion</h3>

                <div class="actualizar3">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <img class="foto" src="{{ asset('storage/' . $user->Fundacion->logo) }}" alt="Adopta">

                        <div class="form-group">
                            <input type="file" name="logo_fundacion" id="logo_fundacion" accept="image/*" required>
                            @error('logo_fundacion')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>

            </div>
        </form>
        <a href="#" class="btn-close-modal">X</a>
    </div>
</div>
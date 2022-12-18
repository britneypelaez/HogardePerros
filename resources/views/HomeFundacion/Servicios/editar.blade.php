@extends('layouts.HomeFundacion.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Nuevo Animal</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

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
                            <form action="{{ route('Servicios.update', $Servicio) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="nombre_serviciio">Nombre de la mascota</label>
                                        <input type="text" name="nombre_serviciio" class="form-control" required value="{{ old('nombre_serviciio', $Servicio->nombre_serviciio) }}">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="descripcion">Descripcion</label>
                                        <input type="text" name="descripcion" class="form-control" required value="{{ old('descripcion', $Servicio->descripcion) }}">
                                    </div>
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Subir foto</label><br>
                                        <input type="file" name="imagen_servicio" id="" accept="image/*">
                                        @error('imagen_servicio')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                     </div> 
                                </div>
                                

                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                            </form> 
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


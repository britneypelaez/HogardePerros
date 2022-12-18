@extends('layouts.HomeFundacion.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Nueva Campaña</h3>
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
                            
                            <form action="{{ route('Campanias.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="nombre_campania">Nombre de la campaña</label>
                                        <input type="text" name="nombre_campania" class="form-control" required value="{{ old('nombre_campania') }}">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="descripcion">Descripcion</label>
                                        <input type="text" name="descripcion" class="form-control" required value="{{ old('descripcion') }}">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="meta_donaciones">Meta</label>
                                        <input type="text" name="meta_donaciones" class="form-control" required value="{{ old('meta_donaciones') }}">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="actual_donado">Donado</label>
                                        <input type="text" name="actual_donado" class="form-control" required value="{{ old('actual_donado') }}">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Subir foto</label><br>
                                        <input type="file" name="imagen_campania" id="" accept="image/*" required>
                                        @error('imagen_campania')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                     </div> 
                                </div>
                                

                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                            </form> 
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


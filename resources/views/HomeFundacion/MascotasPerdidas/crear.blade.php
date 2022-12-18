@extends('layouts.HomeFundacion.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Nuevo Animal Desaparecido</h3>
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
                            
                            <form action="{{ route('MascotasPerdidas.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="nombre_mascota">Nombre de la mascota</label>
                                        <input type="text" name="nombre_mascota" class="form-control" required value="{{ old('nombre_mascota') }}">
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
                                        <label for="raza">Raza</label>
                                        <select name="raza" id="raza" class="form-control">
                                            @foreach($razas as $raza)
                                            <option value="{{ $raza['raza'] }}">{{ $raza['descripcion'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="color">Color</label>
                                        <select name="color" id="color" class="form-control">
                                            @foreach($colores as $color)
                                            <option value="{{ $color['color'] }}">{{ $color['descripcion'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="tamanio">Tamaño</label>
                                        <select name="tamanio" id="tamanio" class="form-control">
                                            @for ($i = 20; $i <=110; $i = $i + 5)
                                            <option value="{{ $i }}">{{ $i }} cm</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="especie">Especie</label>
                                        <select name="especie" id="especie" class="form-control">
                                            @foreach($especies as $especie)
                                            <option value="{{ $especie['especie'] }}">{{ $especie['descripcion'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Subir foto</label><br>
                                        <input type="file" name="imagen_mascota" id="" accept="image/*" required>
                                        @error('imagen_mascota')
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


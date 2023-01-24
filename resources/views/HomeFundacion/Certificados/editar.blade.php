@extends('layouts.HomeFundacion.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Habitacion</h3>
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

                            <form action="{{ route('habitaciones.update', $habitacione->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                @can('borrar-habitacion')
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="numero">Numero habitacion</label>
                                        <input type="text" name="numero" class="form-control" value="{{ $habitacione->numero }}">
                                    </div>
                                </div>
                                @endcan
                                @can('borrar-habitacion')
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="Descripcion">Descripcion</label>
                                        <input type="text" name="Descripcion" class="form-control" value="{{ $habitacione->Descripcion }}">
                                    </div>
                                </div>
                                @endcan
                                @can('borrar-habitacion')
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="precio">Precio por noche</label>
                                        <input type="text" name="precio" class="form-control" value="{{ $habitacione->precio }}">
                                    </div>
                                </div>
                                @endcan

                                @can('borrar-habitacion')
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Piso</label>
                                        <select name="id_piso" id="inputPiso_id" class="form-control" >
                                            @foreach($pisos as $piso)
                                            <option value="{{ $piso->id }}" {{ ($piso->id == $habitacione->id_piso) ? 'selected' : '' }}>{{ $piso['NumPiso'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @endcan
                                @can('borrar-habitacion')
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Categoria</label>
                                        
                                        <select name="id_categoria" id="inputCategoria_id" class="form-control" >
                                            @foreach($categorias as $categoria)
                                            <option value="{{ $categoria['id'] }}" {{ ($categoria->id == $habitacione->id_categoria) ? 'selected' : '' }}>{{ $categoria['Categorias'] }}</option>
                                            @endforeach
                                            @endcan
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Estado de la habitacion</label>
                                        <select name="id_estadohabitacion" id="inputEstado_habitacion_id" class="form-control">
                                            @foreach($estados as $estado)
                                            <option value="{{ $estado['id'] }}" {{ ($estado->id == $habitacione->id_estadohabitacion) ? 'selected' : '' }}>{{ $estado['Estados'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                               
                                @can('borrar-habitacion')
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Subir foto</label><br>
                                        <input type="file" name="file" id="" accept="image/*" value="{{ $habitacione->foto }}">
                                        @error('file')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                     </div> 
                                </div>
                                @endcan
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

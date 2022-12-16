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
                            
                            <form action="{{ route('Mascotas.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="nombre_mascota">Nombre de la mascota</label>
                                        <input type="text" name="nombre_mascota" class="form-control">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="descripcion">Descripcion</label>
                                        <input type="text" name="descripcion" class="form-control">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="precio">Raza</label>
                                        <select name="id_piso" id="id_piso" class="form-control" >
                                            <option value="labrador">labrador</option>
                                            <option value="pincher">pincher</option>
                                            <option value="bulldog">bulldog</option>
                                        </select>
                                    </div>
                                </div>

                                {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Piso</label>
                                        <select name="id_piso" id="inputPiso_id" class="form-control" >
                                            @foreach($pisos as $piso)
                                            <option value="{{ $piso['id'] }}">{{ $piso['NumPiso'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> --}}

                                {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Categoria</label>
                                        <select name="id_categoria" id="inputCategoria_id" class="form-control" >
                                            @foreach($categorias as $categoria)
                                            <option value="{{ $categoria['id'] }}">{{ $categoria['Categorias'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> --}}

                                {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Estado de la habitacion</label>
                                        <select name="id_estadohabitacion" id="inputEstado_habitacion_id" class="form-control" >
                                            @foreach($estados as $estado)
                                            <option value="{{ $estado['id'] }}">{{ $estado['Estados'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> --}}
                                
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Subir foto</label><br>
                                        <input type="file" name="file" id="" accept="image/*">
                                        @error('file')
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


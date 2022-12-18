@extends('layouts.HomeFundacion.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Actualizar Servicio</h3>
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
                            <form action="{{ route('ServiciosPrestados.update', $ServiciosPrestado) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="nombre_servicio">Nombre del servicio</label>
                                        <input type="text" name="nombre_servicio" class="form-control" required value="{{ old('nombre_servicio', $ServiciosPrestado->nombre_servicio) }}">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="nombre_mascota">Cliente</label>
                                        <select name="id_cliente" id="id_cliente" class="form-control">
                                            @foreach($usuarios as $usuario)
                                            <option value="{{ $usuario['id'] }}">{{ $usuario['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="descripcion">Descripcion</label>
                                        <input type="text" name="descripcion" class="form-control" required value="{{ old('descripcion', $ServiciosPrestado->descripcion) }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label>Seleccionar fecha: <input type="date" name="fecha"  min="{{date("Y-m-d")}}" value="{{ old('fecha', $ServiciosPrestado->fecha) }}"></label>
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


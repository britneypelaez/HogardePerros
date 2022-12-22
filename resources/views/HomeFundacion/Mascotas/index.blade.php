@extends('layouts.HomeFundacion.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Adopción</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="controles Cont_adopcion">
                        <div>
                            <select class="custom-select" id="inputGroupSelect01" style="border:none;">
                                <option selected>Selecciona la clase de animal por la que quieres filtrar</option>
                                <option value="1">Perro</option>
                                <option value="2">Gato</option>
                            </select>
                        </div>
                        <div>
                            <a class="btn btn-warning" href="{{ route('Mascotas.create')}}">Nuevo</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="services">

                        @foreach($mascotas as $mascota)

                        <div class="cards">
                            <div class="cards1">
                                <div class="picture">
                                    <img src="{{ asset("storage/$mascota->imagen_mascota") }}" alt="" />
                                </div>
                                <div class="description">
                                    <h1>{{ $mascota->nombre_mascota }}</h1>
                                    <a style="display: none;">{{ $mascota->id }}</a>
                                    <div class="opcionesAdmin">
                                        <form action="{{ route('Mascotas.destroy', $mascota) }}" method="POST">
                                            <a href="#modals"><img src="{{ asset('img/Home/edit.png') }}" alt="" /></a>
                                            @csrf
                                            @method('DELETE')
                                            <a><button type="submit" style="background:none; border: none;"><img
                                                        src="{{ asset('img/Home/delete.png') }}" alt="" /></button></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                        <div class="contenedor-modal" id=modals>
                            <div class="moda">
                                <div class="informacion">
                                        <h3 class="page__heading">Nuevo Animal</h3>
                                    <img src="{{ asset("storage/$mascota->imagen_mascota") }}" alt="Adopta">
                                    <div class="descripcion">
                                        <form action="">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <label for="nombre_mascota">Nombre de la mascota</label>
                                                        <input type="text" name="nombre_mascota" class="form-control" required value="{{ old('nombre_mascota', $mascota->nombre_mascota) }}">
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <label for="descripcion">Descripcion</label>
                                                        <input type="text" name="descripcion" class="form-control" required value="{{ old('descripcion', $mascota->descripcion) }}">
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <label for="raza">Raza</label>
                                                        <select name="raza" id="raza" class="form-control">
                                                            @foreach($razas as $key => $raza)
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
                                                        <label for="edad">Edad</label>
                                                        <select name="edad" id="edad" class="form-control">
                                                            @for ($i = 0; $i <=14; $i++)
                                                            <option value="{{ $i }}">{{ $i }} años</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <label for="estado">Estado</label>
                                                        <select name="estado" id="estado" class="form-control">
                                                            @foreach($estados as $estado)
                                                            <option value="{{ $estado['estado'] }}">{{ $estado['descripcion'] }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Subir foto</label><br>
                                                        <input type="file" name="imagen_mascota" id="" accept="image/*">
                                                        @error('imagen_mascota')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div> 
                                                </div>
                                                <button type="submit" class="btn btn-primary">Guardar</button>
                                            </div>
                                        </form>
                                    </div>
                                    {{-- <button class="transicion2" type="submit"><span>Solicitar Adopcion</span></button> --}}
                                </div>
                                {{-- <a href="#" class="btn-close-modal">X</a> --}}
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
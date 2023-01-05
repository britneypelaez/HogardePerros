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
                        <div class="filtro">
                            <form action="{{ route('Filtrar') }}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-secondary">Buscar</button>

                                <select class="custom-select" name="mascota" id="inputGroupSelect01">
                                    <option value="0">Selecciona la clase de animal que quieres ver</option>
                                    <option value="1">Perro</option>
                                    <option value="2">Gato</option>
                                </select>
                            </form>
                        </div>
                        <div>
                            <a class="btn btn-warning" href="#modalsCreateMascota">Nuevo</a>
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
                                    <h1>{{ $mascota	-> nombre_mascota }}</h1>
                                    <a style="display: none;">{{ $mascota->id }}</a>
                                    <div class="opcionesAdmin">
                                        <a href="#modalsEditMascotas{{ $mascota}}" onclick="buscador({{ $mascota->id }},{{ 'raza'.$mascota->id }})"><img
                                                src="{{ asset('img/Home/edit.png') }}" alt="" /></a>
                                        <a href="#modalsMascotasEliminar{{ $mascota}}"><img
                                                src="{{ asset('img/Home/delete.png') }}" alt="" /></a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        @include('HomeFundacion.Mascotas.Eliminar')

                        @include('HomeFundacion.Mascotas.editar')


                        @endforeach

                        @include('HomeFundacion.Mascotas.crear')
                    </div>
                    <div class="pagination justify-content-end">
                        {!! $mascotas->links() !!}
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
<script>

    const rutaEditar = '{{ env('APP_URL') }}' + '/';


    const searchRazaEditar = async (especie,idRaza) => {
        const resultRaza = await fetch(rutaEditar + `api/raza/search?especie=${especie}`)
            .then(res => res.json())
            .then(res => {
                // let selector = document.getElementByName(idRaza);
                removeAllChildNodes(idRaza);
                res.forEach((element) => {
                    let opcion = document.createElement('option');
                    opcion.value = element.raza;
                    opcion.text = element.descripcion;
                    idRaza.add(opcion);
                })
            });
    }

    function removeAllChildNodes(parent) {
            while (parent.firstChild) {
                parent.removeChild(parent.firstChild);
            }
        }

    const buscador = (idMascota,idRaza) =>{
        console.log(idRaza);
        const especieEditar = document.getElementById(idMascota);
        searchRazaEditar(especieEditar.value,idRaza);

        especieEditar.addEventListener('change', function(event) {
        searchRazaEditar(event.target.value,idRaza);
    });
    }


</script>
@endsection

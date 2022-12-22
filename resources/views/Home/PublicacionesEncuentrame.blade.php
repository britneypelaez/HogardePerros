@extends('layouts.home')

@section('title', 'Mis Publicaciones')

@section('content')
<div class="info">
    <h2>Publicaciones</h2>

    <div class="adopciones">
        @foreach($mascotas as $mascota)
        <div class="adopcion">
            <div class="img">
                <img src="{{ asset("storage/$mascota->imagen_mascota") }}" alt="">
                <div class="descrip">
                    <h2>{{ $mascota->nombre_mascota }}</h2>
                    <a style="display: none;">{{ $mascota->id }}</a>
                    <div class="opcionesAdmin">
                        <form action="{{ route('MascotasPerdidas.destroy', $mascota) }}" method="POST">
                            <a href="{{ route('MascotasPerdidas.edit', $mascota) }}"><img
                                    src="{{ asset('img/Home/edit.png') }}" alt="" /></a>
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

        <!-- Centramos la paginación a la derecha-->
        <div class="pagination justify-content-end">
            {!! $mascotas->links() !!}
        </div>
    </div>
    

    <div class="contenedor-modal" id=popup>
        <div class="moda">
            <div class="informacion">
                <img src="{{ asset("storage/$imagen") }}" alt="Adopta">
                <div class="descripcion">
                    <div class="cont">
                        <p>Especie:</p>
                        <p>(especie)</p>
                    </div>
                    <div class="cont">
                        <p>Raza:</p>
                        <p>(raza)</p>
                    </div>
                    <div class="cont">
                        <p>Color:</p>
                        <p>(color)</p>
                    </div>

                    <div class="cont">
                        <p>Edad:</p>
                        <p>(edad)</p>
                    </div>
                    <div class="cont">
                        <p>Tamaño:</p>
                        <p>(tamaño)</p>
                    </div>
                </div>
                <div class="tener-en-cuenta">
                    <h4>Descripcion:</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita quibusdam ducimus reprehenderit. Deserunt dolor soluta sapiente, voluptates porro qui debitis, quis dicta praesentium quo fuga facere vero non nihil quam!</p>
                </div>
            </div>
            <a href="#" class="btn-close-modal">X</a>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>

    const especie = document.getElementById('especie');
    const raza = document.getElementById('raza');
    const color = document.getElementById('color');
    const tamaño = document.getElementById('tamaño');

    if(especie.value == '0' ){
        document.getElementById('raza').style.display = 'none';
        document.getElementById('razaParrafo').style.display = 'none';
    }

    const search = async (especie,raza,color,tamaño, page = 1) => {
        let ruta = '{{ env('APP_URL') }}'
        console.log(ruta);
        const result = await fetch(ruta+`api/encuentrame/search?especie=${especie}&raza=${raza}&color=${color}&tamaño=${tamaño}&page=${page}`);

        const data = result.json();

        return data;
    }

    const paginate = (response,especie,raza,color,tamaño) => {
        const savePaginate = document.getElementById('paginate');
        savePaginate.innerHTML = '';
        let links = response.links;
        let pages = `<x-paginate>`
        links.forEach((link, i) => {
            let newPage = link.label;
            if(link.label === links[0]?.label ){
                newPage = response.current_page - 1;
            }

            if(link.label === links[links.length - 1]?.label){
                newPage = response.current_page + 1;
            }

            pages +=
                `<li class="page-item ${link.active ? 'active' : ''}">
                    <button class="page-link" onClick="updateDate('${especie}','${raza}','${color}','${tamaño}','${newPage}')">${link.label}</button></li>`
        });

        pages += `</x-paginate>`;

        savePaginate.innerHTML = pages;
    }

    const updateDate = (especie,raza,color,tamaño, page = 1) => {
        const saveResult = document.getElementById('result');
        saveResult.innerHTML = '';
        search(especie,raza,color,tamaño,page).then(response => {
        response.data.map(mascota => {
            saveResult.innerHTML += `<x-card imagen="${mascota.imagen_mascota}" mascota="${mascota.nombre_mascota}" />`
        });
        paginate(response,especie,raza,color,tamaño);
    });
    }

    const searchRaza = async (especie) => {
            let ruta = '{{ env('APP_URL') }}'
            console.log(ruta);
            const resultRaza = await fetch(ruta + `api/raza/search?especie=${especie}`)
                .then(res => res.json())
                .then(res => {
                    let selector = document.getElementById('raza');
                    removeAllChildNodes(selector);
                    const all = document.createElement('option');
                    all.value = '0';
                    all.text = 'Todas'
                    selector.appendChild(all);
                    res.forEach((element) => {
                        let opcion = document.createElement('option');
                        opcion.value = element.raza;
                        opcion.text = element.descripcion;
                        selector.add(opcion);
                    })
                });
        }

        function removeAllChildNodes(parent) {
                while (parent.firstChild) {
                    parent.removeChild(parent.firstChild);
                }
            }

    especie.addEventListener('change', function(event){
    if(event.target.value == '0' ){
        document.getElementById('raza').style.display = 'none';
        document.getElementById('razaParrafo').style.display = 'none';
        raza.value = 0;
    }
    if(event.target.value != '0' ){
        document.getElementById('raza').style.display = 'block';
        document.getElementById('razaParrafo').style.display = 'block';
    }
    searchRaza(event.target.value);
    updateDate(event.target.value,raza.value,color.value,tamaño.value);
    });

    raza.addEventListener('change', function(event){
    updateDate(especie.value,event.target.value,color.value,tamaño.value);
    });

    color.addEventListener('change', function(event){
    updateDate(especie.value,raza.value,event.target.value,tamaño.value);
    });

    tamaño.addEventListener('change', function(event){
    updateDate(especie.value,raza.value,color.value,event.target.value);
    });

    window.addEventListener('load',function(event){
        updateDate(especie.value,raza.value,color.value,tamaño.value,1);
    })
</script>
@endsection

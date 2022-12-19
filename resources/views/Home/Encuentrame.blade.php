@extends('layouts.home')

@section('title', 'Adopción')

@section('content')
<div class="info">
    <div class="info_bar">
        <h2>Mascotas Perdidas</h2>
    </div>

    <h3>Selecciona la clase de mascota que quieres:</h3>

    <div class="filtro">
        <p>Especie:</p>
        <select name="" id="especie">
            <option value="0">Todas</option>
            @foreach ($Especies as $especie)
            <option value="{{ $especie->especie }}">{{ $especie->descripcion }}</option>
            @endforeach
        </select>
        <p id="razaParrafo">Raza:</p>
        <select name="" id="raza">
            <option value="0">Todas</option>
            @foreach ($Razas as $raza)
            <option value="{{ $raza->raza }}">{{ $raza->descripcion }}</option>
            @endforeach
        </select>
        <p>Color:</p>
        <select name="" id="color">
            <option value="0">Todos</option>
            @foreach ($Colores as $color)
            <option value="{{ $color->color }}">{{ $color->descripcion }}</option>
            @endforeach
        </select>
        <p>Tamaño:</p>
        <select name="" id="tamaño">
            <option value="0">Todos</option>
            @for ($i = 20; $i <=110; $i = $i + 5)
            <option value="{{ $i }}">{{ $i }}cm</option>
            @endfor
        </select>
    </div>

    <h2>Perros/Gatos en adopcion</h2>

        <div class="adopciones" id="result">
        </div>
        <div id="paginate" class="paginacion"></div>
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

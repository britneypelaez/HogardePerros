@extends('layouts.home')

@section('title', 'Encuentrame')

@section('content')
    <div class="info">
        @if (Auth::user())
            <div class="botones">
                <a href="#modalsCreatePerdidas"><button class="transicion2" type="submit"><span>Agregar
                            Publicación</span></button></a>
                <a href="{{ route('Publicaciones') }}"><button class="transicion2" type="submit"><span>Mis
                            Publicaciones</span></button></a>
            </div>
        @endif

        <h3>Selecciona la clase de mascota que quieres:</h3>

        <div class="filtro">
            <div class="caja">
                <p>Especie:</p>
                <select name="" id="especie">
                    <option value="0">Todas</option>
                    @foreach ($especies as $especie)
                        <option value="{{ $especie->especie }}">{{ $especie->descripcion }}</option>
                    @endforeach
                </select>
            </div>

            <div class="caja">
                <p>Color:</p>
                <select name="" id="color">
                    <option value="0">Todos</option>
                    @foreach ($colores as $color)
                        <option value="{{ $color->color }}">{{ $color->descripcion }}</option>
                    @endforeach
                </select>
            </div>

            <div class="caja">
                <p>Tamaño:</p>
                <select name="" id="tamaño">
                    <option value="0">Todos</option>
                    @for ($i = 20; $i <= 110; $i = $i + 5)
                        <option value="{{ $i }}">{{ $i }}cm</option>
                    @endfor
                </select>
            </div>

            <div class="caja">
                <p id="razaParrafo">Raza:</p>
                <select name="" id="raza">
                    <option value="0">Todas</option>
                    @foreach ($razas as $raza)
                        <option value="{{ $raza->raza }}">{{ $raza->descripcion }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <h2>Mascotas Perdidas</h2>

        @include('Home.crearPerdido')
        <div class="adopciones" id="result"></div>
        <div id="paginate" class="paginacion"></div>
    </div>
@endsection
@section('scripts')
    <script>
        const especie = document.getElementById('especie');
        const raza = document.getElementById('raza');
        const color = document.getElementById('color');
        const tamaño = document.getElementById('tamaño');
        let ruta = '{{ env('APP_URL') }}';

        const search = async (especie, raza, color, tamaño, page = 1) => {
            const result = await fetch(ruta +
                `api/encuentrame/search?especie=${especie}&raza=${raza}&color=${color}&tamaño=${tamaño}&page=${page}`
                );

            const data = result.json();

            return data;
        }

        const paginate = (response, especie, raza, color, tamaño) => {
            const savePaginate = document.getElementById('paginate');
            savePaginate.innerHTML = '';
            let links = response.links;
            let pages = `<x-paginate>`
            links.forEach((link, i) => {
                let newPage = link.label;
                if (link.label === links[0]?.label) {
                    newPage = response.current_page - 1;
                }

                if (link.label === links[links.length - 1]?.label) {
                    newPage = response.current_page + 1;
                }

                pages +=
                    `<li class="page-item ${link.active ? 'active' : ''}">
                    <button class="page-link" onClick="updateDate('${especie}','${raza}','${color}','${tamaño}','${newPage}')">${link.label}</button></li>`
            });

            pages += `</x-paginate>`;

            savePaginate.innerHTML = pages;
        }

        const updateDate = (especie, raza, color, tamaño, page = 1) => {
            const saveResult = document.getElementById('result');
            saveResult.innerHTML = '';
            search(especie, raza, color, tamaño, page).then(response => {
                response.data.map(mascota => {
                    saveResult.innerHTML +=
                        `<x-cardEncuentrame imagen="${mascota.imagen_mascota}" mascota="${mascota.nombre_mascota}" color="${mascota.colorin}" raza="${mascota.rasa}" descripcion="${mascota.descripcion}" id="${mascota.id}" especie="${mascota.especie}" />`
                });
                paginate(response, especie, raza, color, tamaño);
            });
        }

        const searchRaza = async (especie) => {
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

        if (especie.value == '0') {
            searchRaza(especie.value);
        }

        especie.addEventListener('change', function(event) {
            searchRaza(event.target.value);
            updateDate(event.target.value, raza.value, color.value, tamaño.value);
        });

        raza.addEventListener('change', function(event) {
            updateDate(especie.value, event.target.value, color.value, tamaño.value);
        });

        color.addEventListener('change', function(event) {
            updateDate(especie.value, raza.value, event.target.value, tamaño.value);
        });

        tamaño.addEventListener('change', function(event) {
            updateDate(especie.value, raza.value, color.value, event.target.value);
        });

        window.addEventListener('load', function(event) {
            updateDate(especie.value, raza.value, color.value, tamaño.value, 1);
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
@endsection

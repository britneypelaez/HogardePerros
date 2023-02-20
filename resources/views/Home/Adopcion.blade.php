@extends('layouts.home')

@section('title', 'Adopción')

@section('content')
    <div class="info">
        <div class="info_bar">
            <h1>Adopta una mascota de nuestra Fundación Hogar de Perros</h1>
            <p>
                ¡Bienvenidos a nuestra sección de mascotas en adopción! Estamos encantados de presentarles a nuestros
                queridos amigos peludos que están buscando un hogar para siempre.
                Si estás buscando a tu nuevo compañero de vida, ¡has llegado al lugar correcto! Tenemos una gran variedad de
                mascotas en adopción, tanto perros como gatos. Todos ellos
                están esperando encontrar a alguien que los quiera y los cuide. Si ves a alguien que te interese, no dudes
                en ponerte en contacto con nosotros para obtener más información
                y tomar una cita para conocerlos en persona. Juntos, podemos darles a estas mascotas el hogar que merecen.
                ¡Gracias por visitarnos!
            </p>
        </div>

        @if (Auth::user())
            <div class="botones">
                <a href="#modalsCreateMascota"><button class="transicion2" type="submit"><span>Publicar Mascota</span></button></a>
            </div>
        @endif

        <h3>Selecciona la clase de mascota que quieres:</h3>

        <div class="filtro2">
            <div class="caja">
                <p>Especie:</p>
                <select name="" id="especie">
                    <option value="0">Todas</option>
                    @foreach ($Especies as $especie)
                        <option value="{{ $especie->especie }}">{{ $especie->descripcion }}</option>
                    @endforeach
                </select>
            </div>

            <div class="caja">
                <p>Color:</p>
                <select name="" id="color">
                    <option value="0">Todos</option>
                    @foreach ($Colores as $color)
                        <option value="{{ $color->color }}">{{ $color->descripcion }}</option>
                    @endforeach
                </select>
            </div>

            <div class="caja">
                <p>Tamaño:</p>
                <select name="" id="tamaño">
                    <option value="0">Todos</option>
                    <option value="1">Pequeño</option>
                    <option value="2">Mediano</option>
                    <option value="3">Grande</option>
                </select>
            </div>

            <div class="caja">
                <p>Edad:</p>
                <select name="" id="edad">
                    <option value="0">Todas</option>
                    @for ($i = 0; $i <= 8; $i += 2)
                        <option value="{{ $i + 1 }}">{{ $i }} a {{ $i + 2 }} meses</option>
                    @endfor
                    <option value="10">10 a 11 meses</option>
                    <option value="11">1 año</option>
                    @for ($i = 12; $i <= 23; $i++)
                        <option value="{{ $i}}">{{ $i-10 }} años</option>
                    @endfor
                </select>
            </div>

            <div class="caja">
                <p id="razaParrafo">Raza:</p>
                <select name="" id="raza">
                    <option value="0">Todas</option>
                </select>
            </div>
        </div>

        <h2 class="animate__animated animate__bounce animate__slow">Perros/Gatos en adopción</h2>

        @include('Home.crearAdopcion')
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
        const edad = document.getElementById('edad');
        let ruta = '{{ env('APP_URL') }}';

        const search = async (especie, raza, color, tamaño, edad, page = 1) => {
            const result = await fetch(ruta +
                `api/adopcion/search?especie=${especie}&raza=${raza}&color=${color}&tamaño=${tamaño}&edad=${edad}&page=${page}`
            );

            const data = result.json();

            return data;
        }

        const paginate = (response, especie, raza, color, tamaño, edad) => {
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
                    <button class="page-link" onClick="updateDate('${especie}','${raza}','${color}','${tamaño}','${edad}','${newPage}')">${link.label}</button></li>`
            });

            pages += `</x-paginate>`;

            savePaginate.innerHTML = pages;
        }

        const updateDate = (especie, raza, color, tamaño, edad, page = 1) => {
            const saveResult = document.getElementById('result');
            saveResult.innerHTML = '';
            search(especie, raza, color, tamaño, edad, page).then(response => {
                response.data.map(mascota => {
                    if(edad <= 9){
                        mascota.edad = `${mascota.edad - 1} a ${mascota.edad + 1} meses`
                    }
                    if(edad == 10){
                        mascota.edad = `${mascota.edad} a ${mascota.edad + 1} meses`
                    }
                    if(edad == 11){
                        mascota.edad = `${mascota.edad - 10} año`
                    }
                    if(edad > 11){
                        mascota.edad = `${mascota.edad - 10} años`
                    }
                    console.log(mascota.edad)
                    saveResult.innerHTML +=
                        `<x-card imagen="${mascota.imagen_mascota}" mascota="${mascota.nombre_mascota}" color="${mascota.colorin}" raza="${mascota.rasa}" edad="${mascota.edad}" descripcion="${mascota.descripcion}"/>`
                });
                paginate(response, especie, raza, color, tamaño, edad);
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
            raza.value = 0;
            searchRaza(event.target.value);
            updateDate(event.target.value, raza.value, color.value, tamaño.value, edad.value);
        });

        raza.addEventListener('change', function(event) {
            updateDate(especie.value, event.target.value, color.value, tamaño.value, edad.value);
        });

        color.addEventListener('change', function(event) {
            updateDate(especie.value, raza.value, event.target.value, tamaño.value, edad.value);
        });

        tamaño.addEventListener('change', function(event) {
            updateDate(especie.value, raza.value, color.value, event.target.value, edad.value);
        });

        edad.addEventListener('change', function(event) {
            updateDate(especie.value, raza.value, color.value, tamaño.value, event.target.value);
        });

        window.addEventListener('load', function(event) {
            updateDate(especie.value, raza.value, color.value, tamaño.value, edad.value, 1);
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
@endsection

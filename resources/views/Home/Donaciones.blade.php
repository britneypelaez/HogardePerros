@extends('layouts.home')

@section('title', 'Donaciones')

@section('content')
<div class="requisito">
    <div class="info_bar">
        <h1 class="tituloDon">Donaciones</h1>
        <p>Con ayuda de tus donaciones nos brinda la oportunidad de hacer un cambio efectivo y sostenible
            a nuestras mascotas, donde en todo momento genera un impacto social positivo con el fin de contribuir
            al rescate y el cuidado de cada uno de nuestros animales que esta actualmente en el refugio.
        </p>
        <p>
            Contribuye para seguir brindando segundas oportunidades. <br>
            Tu donación lo hace posible.
        </p>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($campanias as $campania)

    

    <div class="col">
        <div class="card border-info">
            <div class="card-img1">
                <div class="card-imgg">
                    <img src="{{ asset("storage/$campania->imagen_campania") }}" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="card-body">
                <div class="conttex">
                    <h5 class="card-title">({{ $campania->nombre_campania }})</h5>
                    <p class="card-text">{{ $campania->descripcion }}</p>
                </div>
                <div class="contbtn">
                    <!-- Los nombres de la campaña se coloca de acuerdo al data-bs-whatever="Campaña1" como se muestra en el javaScript -->
                    <a href="#exampleModal" class="btn btn-primary">DONAR</a>
                    <button type="button" data-bs-whatever="{{ $campania->nombre_campania }}""
                                data-bs-description=" {{ $campania->descripcion }}"
                        data-bs-meta="{{ $campania->meta_donaciones }}"
                        data-bs-actual="{{ $campania->actual_donado }}"
                        data-bs-imagen="{{ $campania->imagen_campania }}" class="btn btn-primary"
                        data-bs-toggle="modal" data-bs-target="#exampleModal">LEER MÁS</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade modal-xl" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
                @section('metas')
            
                <meta property="og:type" content="website" />
                <meta property="og:title" content="{{ $campania->nombre_campania }}" />
                <meta property="og:url" content="{{ env('APP_URL')  }}/Donaciones" />
                <meta property="og:description" content="{{ $campania->descripcion }}" />
                <meta property="og:image" content="{{ asset("storage/$campania->imagen_campania") }}" />
                @endsection
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-left">
                        <img class="imgmodal1" src="" alt="..." id="btn-abrir">
                    </div>
                    <div class="modal-right">
                        <p class="modal-description">
                        </p>
                        <div class="cont-right">
                            <h5>
                                Con tu aporte nos ayudas al bienestar de cada uno de nuestras mascotas. Ellos se los
                                agradecen.
                            </h5>
                            <p class="metaa"><br> Meta de donaciones: <br></p>
                            <p class="meta">
                            </p>
                            <div class="progreso">
                                <div class="progress" id="progress" role="progressbar"
                                    aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        style="width: 0%;"></div>
                                </div>
                                <img src="{{ asset('img/Home/LOGO.png') }}" alt="" class="imgpro">
                            </div>
                            <div class="donarr">
                                <button type="button" class="btn btn-primary">DONAR</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="redess">
                        <h5>Comparte en tus redes sociales:</h5>
                        <!-- <ul class="wrapper">
                            <a href="">
                                <li class="icon share">
                                    <span class="tooltip">Whatsapp</span>
                                    <span><i class="fa-solid fa-share-nodes"></i></span>
                                </li>
                            </a>
                        </ul> -->
                        <ul class="wrapper">
                            <a class="whatsapp" target="_blank">
                                <li class="icon whatsapp">
                                    <span class="tooltip">Whatsapp</span>
                                    <span><i class="fab fa-whatsapp"></i></span>
                                </li>
                            </a>
                            <a class="Facebook" target="_blank">
                                <li class="icon facebook">
                                    <span class="tooltip">Facebook</span>
                                    <span><i class="fab fa-facebook-f"></i></span>
                                </li>
                            </a>
                            <a href="">
                                <li class="icon instagram">
                                    <span class="tooltip">Instagram</span>
                                    <span><i class="fab fa-instagram"></i></span>
                                </li>
                            </a>
                        </ul>
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
        <dialog id="modal-imagen">
            <img class="imgmodal2" src="" alt="...">
            <div class="btcentrar">
                <button type="button" class="btn btn-primary" id="btn-cerrar">Cerrar</button>
            </div>
        </dialog>
    </div>
    <!-- fin modal -->
    <!-- Inicio Modal imgaen respons -->
    @endforeach
    <!-- Fin modal imagen respons -->
</div>
<div class="centrarpagi">
    <div class="pagination ">
        {!! $campanias->links() !!}
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
<script src="{{ asset('js/modalDonar.js') }}"></script>
@endsection
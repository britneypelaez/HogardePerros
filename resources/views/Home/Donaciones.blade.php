@extends('layouts.home')

@section('title', 'Donaciones')

@section('content')
    <div class="requisitos">
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
        <div class="col">
            <div class="card border-info">
                <img src="{{ asset('img/Home/gato2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="conttex">
                        <h5 class="card-title">(Nombre de la campaña1)</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa vel \
                            temporibus nostrum harum soluta, rem labore saepe ullam doloribus magnam, omnis iure. 
                            Nam ipsum harum, quidem labore laboriosam sequi iste?
                        </p>
                    </div>
                    <div class="contbtn">
                        <!-- Los nombres de la campaña se coloca de acuerdo al data-bs-whatever="Campaña1" como se muestra en el javaScript -->
                        <a href="#" class="btn btn-primary">DONAR</a> <button type="button" data-bs-whatever="Campaña1" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">LEER MÁS</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-info">
                <img src="{{ asset('img/Home/gato3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="conttex">
                        <h5 class="card-title">(Nombre de la campaña2)</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="contbtn">
                        <a href="#" class="btn btn-primary">DONAR</a> <button type="button" data-bs-whatever="Campaña2" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">LEER MÁS</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-info">
                <img src="{{ asset('img/Home/perro1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="conttex">
                        <h5 class="card-title">(Nombre de la campaña3)</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="contbtn">
                        <a href="#" class="btn btn-primary">DONAR</a> <button type="button" data-bs-whatever="Campaña3" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">LEER MÁS</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-info">
                <img src="{{ asset('img/Home/perro2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="conttex">
                        <h5 class="card-title">(Nombre de la campaña4)</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="contbtn">
                        <a href="#" class="btn btn-primary">DONAR</a> <button type="button" data-bs-whatever="Campaña4" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">LEER MÁS</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-info">
                <img src="{{ asset('img/Home/perros1.jpeg') }}" class="card-img-top" alt="..."> 
                <div class="card-body">
                    <div class="conttex">
                        <h5 class="card-title">(Nombre de la campaña5)</h5>
                        <p class="card-text">build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="contbtn">
                        <a href="#" class="btn btn-primary">DONAR</a> <button type="button" data-bs-whatever="Campaña5" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">LEER MÁS</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-info">
                <img src="{{ asset('img/Home/perros2.jpeg') }}" class="card-img-top" alt="..."> 
                <div class="card-body">
                    <div class="conttex">
                        <h5 class="card-title">(Nombre de la campaña6)</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="contbtn">
                        <a href="#" class="btn btn-primary">DONAR</a> <button type="button" data-bs-whatever="Campaña6" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">LEER MÁS</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-info">
                <img src="{{ asset('img/Home/gatoo.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="conttex">
                        <h5 class="card-title">(Nombre de la campaña7)</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="contbtn">
                        <a href="#" class="btn btn-primary">DONAR</a> <button type="button" data-bs-whatever="Campaña7" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">LEER MÁS</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-info">
                <img src="{{ asset('img/Home/perro3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="conttex">
                        <h5 class="card-title">(Nombre de la campaña8)</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="contbtn">
                        <a href="#" class="btn btn-primary">DONAR</a> <button type="button" data-bs-whatever="Campaña8" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">LEER MÁS</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="paginate" class="paginacion">
        <nav aria-label="Page navigation" class="separarpag">
            <ul class="pagination">
                <li class="page-item ">
                    <button class="page-link" onclick="updateDate('0','0','0','0','0','0')">« Anterior</button></li><li class="page-item active">
                    <button class="page-link" onclick="updateDate('0','0','0','0','0','1')">1</button></li><li class="page-item ">
                    <button class="page-link" onclick="updateDate('0','0','0','0','0','2')">Siguiente »</button>
                </li>
            </ul>
        </nav>
    </div>
      <!-- Modal -->
      <div class="modal fade modal-xl" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo mensaje para (Nombre de la campaña1)</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-left">
                        <img class="imgmodal1" src="{{ asset('img/Home/gato2.jpg') }}"  alt="..." id="btn-abrir">
                    </div>
                    <div class="modal-right">
                        <p >Some quick example text to build on the card title and make up the bulk of
                            the card's content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa vel \
                            temporibus nostrum harum soluta, rem labore saepe ullam doloribus magnam, omnis iure. 
                            Nam ipsum harum, quidem labore laboriosam sequi iste?
                        </p>
                        <div class="cont-right">
                            <h5>
                                Con tu aporte nos ayudas al bienestar de cada uno de nuestras mascotas. Ellos se los agradecen.
                            </h5>
                            <p class="meta">
                                Meta de donaciones:
                            </p>
                            <p class="meta">
                                $150.000/$300.000
                            </p>
                            <div class="progreso">
                                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 50%;">50%</div>
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
                        <ul class="wrapper">
                            <li class="icon whatsapp">
                                <span class="tooltip">Whatsapp</span>
                                <span><i class="fab fa-whatsapp"></i></span>
                            </li>
                            <li class="icon facebook">
                                <span class="tooltip">Facebook</span>
                                <span><i class="fab fa-facebook-f"></i></span>
                            </li>
                            <li class="icon instagram">
                                <span class="tooltip">Instagram</span>
                                <span><i class="fab fa-instagram"></i></span>
                            </li>
                        </ul>
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- fin modal -->
    <!-- Inicio Modal imgaen respons -->
    <dialog id="modal-imagen">
        <img src="{{ asset('img/Home/gato2.jpg') }}"  alt="...">
        <div class="btcentrar">
            <button type="button" class="btn btn-primary" id="btn-cerrar">Cerrar</button>
        </div>
    </dialog>
    <!-- Fin modal imagen respons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="{{ asset('js/modalDonar.js') }}"></script>
@endsection

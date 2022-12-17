@extends('layouts.home')

@section('title', 'Servicios Veterinarios')

@section('content')
    <div class="bodyBlocks">
        <div class="blockiz">
        </div>  
        <div class="main">
            <h1>Preguntas Frecuentes</h1>
            <div class="preguntas">
                <h2>¿Puedo dar animales en adopción?</h2>
                <p>
                No, el propósito de la fundación es concientizar a la ciudadanía a que tener una mascota 
                es para toda la vida.
                </p>
            </div>
            <div class="preguntas">
                <h2>Si encontré animales en la calle y los he traído a casa, ¿puedo llamar a la fundación para que los recojan?</h2>
                <p>
                No, pero puedes hacer una obra en beneficio de los animales, haciendo de tu hogar un 
                refugio para ellos mientras son adoptados.
                </p>
            </div>
            <div class="preguntas">
                <h2>¿La fundación presta el servicio para cuidar a mi perro?</h2>
                <p>
                Sí, el servicio de guardería para perros tiene un valor por día de $20.000 y 
                estará bajo el cuidado de los miembros de la fundación.
                </p>
            </div>
            <div class="preguntas">
                <h2>Una vez realizada la adopción me surgió algún inconveniente y no puedo tener la mascota, ¿Qué debo hacer?</h2>
                <p>
                    Comunícate  directamente con la fundación, no los abandones en la calle.
                </p>
            </div>
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="true">
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
           <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="{{ asset('img/Home/perros1.jpeg') }}"  alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="5001">
                    <img src="{{ asset('img/Home/gatoo.png') }}"  alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="5002">
                    <img src="{{ asset('img/Home/perros2.jpeg') }}"  alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
            </div> 
            <div class="blockdere">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@endsection

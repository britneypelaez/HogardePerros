@extends('layouts.home')

@section('title', 'Servicios Veterinarios')

@section('content')
    <div class="contene">
        <div class="left">
            <h1>
                No más huellitas en la calle.
            </h1>
            <br>
            <h3>
                En la Fundación Hogar de Perros el bienestar es nuestro principal objetivo por alcanzar.
            </h3>
        </div>
        <div class="right">
            <h5>
                Garantizar que todos los animalitos de la calle consigan un hogar, y sean sometidos a
                esterilización para reducir la tasa de natalidad de callejeros.
            </h5>
        </div>
    </div>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
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
    <div class="infoQuinesSomos">
        <h1>QUIÉNES SOMOS</h1>
        <p>
            Hogar de perros y gatos es una fundación sin ánimo de lucro, nuestro objetivo principal es la
            acogida y la restauración de vida de perros y gatos, brindando servicios veterinarios y
            cuidados que cada animalito requiere, así mismo brindamos nuestros mayores esfuerzos en que cada
            uno consiga un hogar de por vida asegurándonos  de que no vuelvan a quedar en condición de abandono.
        </p>
    </div>
    <div class="contene">
        <div class="left">
           <img src="{{ asset('img/Home/gatos1.jpeg') }}" alt="Gato">
        </div>
        <div class="right">
            <h1>Visión</h1>
            <p class="p-text">Para el 2020 convertirnos en la organización líder y la mejor opción veterinaria,
                contando con instalaciones propias para seguir perseverando la protección,
                esterilización y adopción de los animales en condiciones menos favorables.
            </p>
        </div>
    </div>
    <div class="contene">
        <div class="left">
            <h1>Misión</h1>
            <p class="p-text">Otorgar condiciones dignas a los animales en estado de abandono, desamparo y maltrato;
               brindando alimentos, albergue y medicamentos. sensibilizar a ciudadanía a la tenencia responsable y
               trato digno; brindar una segunda oportunidad mediante campañas de adopción y esterilización como
               medida efectiva de reducir las tasas de natalidad.
            </p>
        </div>
        <div class="right">
            <img src="{{ asset('img/Home/gato3.jpg') }}" alt="Gato">
        </div>
    </div>
    <div class="info-form">
        <h1>Contacto</h1>
        <p>
            Si quieres participar con nosotros, contáctanos, puedes ayudarnos en algunos de nuestros
            planes, tu apoyo es esencial para la fundación.
        </p>
        <div class="body-form">
            <div class="form-card-container">
                <div class="form-card">
                   <form action="" class="form" method="post">
                    <div class="form-item">
                        <span class="form-item-icon material-symbols-outlined">person</span>
                        <input type="text" name="name" id="name" placeholder="Nombre Completo" required>
                    </div>
                    <div class="form-item">
                        <span class="form-item-icon material-symbols-outlined">smartphone</span>
                        <input type="number" name="number" id="number" placeholder="Número Celular" required>
                    </div>
                    <div class="form-item">
                        <span class="form-item-icon material-symbols-outlined">email</span>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="form-item">
                        <span class="form-item-icon material-symbols-outlined">feed</span>
                        <textarea name="comen" id="coment" placeholder="Comentario" required></textarea>
                    </div>
                    <button type="submit">Enviar</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@endsection

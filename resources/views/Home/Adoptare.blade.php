@extends('layouts.home')

@section('title', 'Adoptare')

@section('content')
<div class="requisitos">
    <div class="info_requi">
        <div class="img-logg">
            <img src="{{ asset('img/Home/Logoriginal2 .png') }}" alt="">
        </div>  
        <h1>REQUISITOS PARA ADOPCIÓN</h1>
        <P>
            Ser mayor de edad.
        </P>
        <P>
            Los perros cachorros se entregan desparasitados y con una vacuna Puppy.
            Los gatos cachorros se entregan desparasitados.
            Firman hoja de adopción con un compromiso de traerlos a esterilización a los cinco meses sin costo para el adoptante. 
        </P>
        <P>
            Los perros adultos se entregan:   
        </P>
        <ul class="estilo-items">
            <li>Esterilizados</li>
            <li>Desparasitados</li>
            <li>Vacunados</li>
            <li>Con collar</li>
        </ul>
        <p>
            Los gatos adultos se entregan:
        </p>
        <ul class="estilo-items">
            <li>Esterilizados</li>
            <li>Desparasitados</li>
            <li>Vacunados</li>
        </ul>
        <p>
            Se solicita aporte para ayudar con manutención de demás animalitos en la Fundación y costos de vacunación de las mascotas entregadas. <br>
            Perros $30.000 <br>
            Gatos $20.000 
        </p>
        <a href="{{ asset('storage/document/certifications/formulario.pdf') }}" target="_blank">
            <button type="button" class="btn btn-primary" style="margin-bottom:0px; margin-left:0px;">Descargar Formulario De Adopción</button> 
        </a>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

@endsection

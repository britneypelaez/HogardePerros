@component('mail::message')
# {{$subject}}

<h3>{{ $subtitle }} {{ $nombre_mascota }}</h3>
<p>
{{ $descripcion }}<br>
<img src="{{ url('/storage/' . $imagen_mascota) }}" alt="MASCOTAS">
</p>

Gracias, atentamente,<br>
Fundación Hogar de Perros

[logo]: {{ url('img/LogoFundacionHogarDePerros.png') }}
@endcomponent
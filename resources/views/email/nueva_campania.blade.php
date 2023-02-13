@component('mail::message')
# {{$subject}}

<h3>{{ $subtitle }}</h3>
<p>
{{ $nombre_campania }}<br>
{{ $descripcion }}<br>
</p>

Gracias, atentamente,<br>
Fundación Hogar de Perros

[logo]: {{ url('img/LogoFundacionHogarDePerros.png') }}
@endcomponent
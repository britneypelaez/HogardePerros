@component('mail::message')
# {{$subject}}

<h3>{{ $subtitle }}</h3>
<p>
{{ $nombre }}<br>
{{ $celular }}<br>
{{ $email }}<br>
{{ $comentario }}<br>
</p>

Gracias, atentamente,<br>
{{ $nombre }}

[logo]: {{ url('img/LogoFundacionHogarDePerros.png') }}
@endcomponent
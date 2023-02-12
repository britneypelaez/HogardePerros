@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => ''])
Impuestos y rentas
@endcomponent
@endslot

![SISOFT][logo]

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} @lang('Impuestos y Rentas') @lang('Todos los derechos reservados.')
@endcomponent
@endslot


@endcomponent

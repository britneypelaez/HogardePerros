<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Adafriend</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 4.1.1 -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Ionicons -->
    <link href="//fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/@fortawesome/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/iziToast.min.css') }}">
    <link href="{{ asset('assets/css/sweetalert.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/estilosfundacion.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


    @yield('page_css')
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/styleComponentes.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/components.css')}}">

    @yield('page_css')

    @yield('css')
</head>
<body>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                @include('layouts.HomeFundacion.header')

            </nav>
            <nav class="navbar navbar-expand-lg navv  fixed-top">
                <div class="container-fluid">
                    <button class="navbar-toggler menuu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon" ></span>
                    </button>
                    <div class="offcanvas offcanvas-start show" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="main-sidebar main-sidebar-postion">
                            <div class="offcanvas-header">
                                <span class="material-symbols-outlined cerrar" data-bs-dismiss="offcanvas" aria-label="Close">close</span>
                            </div>
                            <div class="sidebar-brand">
                                <a href="{{ url('/') }}"><img class="navbar-brand-full app-header-logo" src="{{ asset('img/Home/fundacion.png') }}" width="100"
                                    alt="Infyom Logo"></a>
                            </div>
                            @include('layouts.HomeFundacion.sidebar')
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
                @yield('scripts')
            </div>
        </div>
    </div>
</div>

{{-- @include('profile.change_password')
@include('profile.edit_profile') --}}

</body>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/js/iziToast.min.js') }}"></script>
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- Template JS File -->
<script src="{{ asset('web/js/stisla.js') }}"></script>
<script src="{{ asset('web/js/scripts.js') }}"></script>
{{-- <script src="{{ mix('assets/js/profile.js') }}"></script> --}}
{{-- <script src="{{ mix('assets/js/custom/custom.js') }}"></script> --}}
@yield('page_js')
<script>
    let loggedInUser =@json(\Illuminate\Support\Facades\Auth::user());
    let loginUrl = '{{ route('login') }}';
    const userUrl = '{{url('users')}}';
    // Loading button plugin (removed from BS4)
    (function ($) {
        $.fn.button = function (action) {
            if (action === 'loading' && this.data('loading-text')) {
                this.data('original-text', this.html()).html(this.data('loading-text')).prop('disabled', true);
            }
            if (action === 'reset' && this.data('original-text')) {
                this.html(this.data('original-text')).prop('disabled', false);
            }
        };
    }(jQuery));
</script>
</html>

<aside id="sidebar-wrapper">
    <div class="sidebar-brand">

        <img class="navbar-brand-full app-header-logo" src="{{ asset('img/footer.jpeg') }}" width="100"
             alt="Infyom Logo"> </img>

        <a href="{{ url('/') }}"></a>
    </div>
    <ul class="sidebar-menu">
        @include('layouts.HomeFundacion.menu')
    </ul>
</aside>

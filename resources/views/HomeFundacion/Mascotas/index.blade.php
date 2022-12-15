@extends('layouts.HomeAdministrador')

@section('title', 'Home Admin')

@section('content')
    <article>
        <div class="contenedorServicios">
            <div class="filtro">
                <label for="filtros">Selecciona la clase de animal por la que quieres filtrar</label>

                <select name="filtrosAnimal" id="filtros">
                    <option value=""> Elije una opcion </option>
                    <option value="Perro">Perro</option>
                    <option value="Gato">Gato</option>
                </select>

            </div>
            <div class="añadir">
                <button>Añadir Mascotas</button>
            </div>
            <div class="services">
                <div class="cards">
                    <div class="cards1">
                        <div class="picture"><img src="{{ asset('img/Home/banner.jpg') }}" alt="" /></div>
                        <div class="description">
                            <h1>Nombre del Animal</h1>
                            <div class="opcionesAdmin">
                                <a href=""><img src="{{ asset('img/Home/edit.png') }}" alt="" href="#" /></a>
                                <a href=""><img src="{{ asset('img/Home/delete.png') }}" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="more">
                        <a href="" style="text-decoration: none; color: #fff">Mas Informacion</a>
                    </div>
                </div>
                <div class="cards">
                    <div class="cards1">
                        <div class="picture"><img src="{{ asset('img/Home/banner.jpg') }}" alt="" /></div>
                        <div class="description">
                            <h1>Nombre del Animal</h1>
                            <div class="opcionesAdmin">
                                <a href=""><img src="{{ asset('img/Home/edit.png') }}" alt="" href="#" /></a>
                                <a href=""><img src="{{ asset('img/Home/delete.png') }}" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="more">
                        <a href="" style="text-decoration: none; color: #fff">Mas Informacion</a>
                    </div>
                </div>
                <div class="cards">
                    <div class="cards1">
                        <div class="picture"><img src="{{ asset('img/Home/banner.jpg') }}" alt="" /></div>
                        <div class="description">
                            <h1>Nombre del Animal</h1>
                            <div class="opcionesAdmin">
                                <a href=""><img src="{{ asset('img/Home/edit.png') }}" alt="" href="#" /></a>
                                <a href=""><img src="{{ asset('img/Home/delete.png') }}" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="more">
                        <a href="" style="text-decoration: none; color: #fff">Mas Informacion</a>
                    </div>
                </div>
                <div class="cards">
                    <div class="cards1">
                        <div class="picture"><img src="{{ asset('img/Home/banner.jpg') }}" alt="" /></div>
                        <div class="description">
                            <h1>Nombre del Animal</h1>
                            <div class="opcionesAdmin">
                                <a href=""><img src="{{ asset('img/Home/edit.png') }}" alt="" href="#" /></a>
                                <a href=""><img src="{{ asset('img/Home/delete.png') }}" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="more">
                        <a href="" style="text-decoration: none; color: #fff">Mas Informacion</a>
                    </div>
                </div>
                <div class="cards">
                    <div class="cards1">
                        <div class="picture"><img src="{{ asset('img/Home/banner.jpg') }}" alt="" /></div>
                        <div class="description">
                            <h1>Nombre del Animal</h1>
                            <div class="opcionesAdmin">
                                <a href=""><img src="{{ asset('img/Home/edit.png') }}" alt="" href="#" /></a>
                                <a href=""><img src="{{ asset('img/Home/delete.png') }}" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="more">
                        <a href="" style="text-decoration: none; color: #fff">Mas Informacion</a>
                    </div>
                </div>
                <div class="cards">
                    <div class="cards1">
                        <div class="picture"><img src="{{ asset('img/Home/banner.jpg') }}" alt="" /></div>
                        <div class="description">
                            <h1>Nombre del Animal</h1>
                            <div class="opcionesAdmin">
                                <a href=""><img src="{{ asset('img/Home/edit.png') }}" alt="" href="#" /></a>
                                <a href=""><img src="{{ asset('img/Home/delete.png') }}" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="more">
                        <a href="" style="text-decoration: none; color: #fff">Mas Informacion</a>
                    </div>
                </div>
                <div class="cards">
                    <div class="cards1">
                        <div class="picture"><img src="{{ asset('img/Home/banner.jpg') }}" alt="" /></div>
                        <div class="description">
                            <h1>Nombre del Animal</h1>
                            <div class="opcionesAdmin">
                                <a href=""><img src="{{ asset('img/Home/edit.png') }}" alt="" href="#" /></a>
                                <a href=""><img src="{{ asset('img/Home/delete.png') }}" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="more">
                        <a href="" style="text-decoration: none; color: #fff">Mas Informacion</a>
                    </div>
                </div>
                <div class="cards">
                    <div class="cards1">
                        <div class="picture"><img src="{{ asset('img/Home/banner.jpg') }}" alt="" /></div>
                        <div class="description">
                            <h1>Nombre del Animal</h1>
                            <div class="opcionesAdmin">
                                <a href=""><img src="{{ asset('img/Home/edit.png') }}" alt="" href="#" /></a>
                                <a href=""><img src="{{ asset('img/Home/delete.png') }}" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="more">
                        <a href="" style="text-decoration: none; color: #fff">Mas Informacion</a>
                    </div>
                </div>
                <div class="cards">
                    <div class="cards1">
                        <div class="picture"><img src="{{ asset('img/Home/banner.jpg') }}" alt="" /></div>
                        <div class="description">
                            <h1>Nombre del Animal</h1>
                            <div class="opcionesAdmin">
                                <a href=""><img src="{{ asset('img/Home/edit.png') }}" alt="editar" /></a>
                                <a href=""><img src="{{ asset('img/Home/delete.png') }}" alt="Eliminar" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="more">
                        <a href="" style="text-decoration: none; color: #fff">Mas Informacion</a>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection

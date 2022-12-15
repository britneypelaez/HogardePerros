@extends('layouts.Home')

@section('title', 'Adopción')

@section('content')
<div class="info">
    <div class="info_bar">
        <h2>Adopta una mascota de nuestra Fundacion Hogar de Perros</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid repudiandae, mollitia dolore laboriosam magni, in alias ullam itaque dolorem eius obcaecati fuga reiciendis
            sed, tempora omnis minus delectus praesentium ipsam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum consequatur saepe labore deserunt! Veritatis ratione
            eligendi blanditiis, quaerat iste ex in? Fugit, ratione? Expedita ducimus sunt neque saepe deserunt mollitia!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid repudiandae, mollitia dolore laboriosam magni, in alias ullam itaque dolorem eius obcaecati fuga reiciendis
            sed, tempora omnis minus delectus praesentium ipsam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum consequatur saepe labore deserunt! Veritatis ratione
            eligendi blanditiis, quaerat iste ex in? Fugit, ratione? Expedita ducimus sunt neque saepe deserunt mollitia!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid repudiandae, mollitia dolore laboriosam magni, in alias ullam itaque dolorem eius obcaecati fuga reiciendis
            sed, tempora omnis minus delectus praesentium ipsam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum consequatur saepe labore deserunt! Veritatis ratione
            eligendi blanditiis, quaerat iste ex in? Fugit, ratione? Expedita ducimus sunt neque saepe deserunt mollitia!
        </p>
    </div>

    <h3>Selecciona la clase de mascota que quieres:</h3>

    <div class="filtro">
        <p>Especie:</p>
        <select name="" id="especie">
            <option value="">Perros</option>
            <option value="">Gatos</option>
        </select>
        <p>Raza:</p>
        <select name="" id="raza">
            <option value="">Perros</option>
            <option value="">Gatos</option>
        </select>
        <p>Color:</p>
        <select name="" id="color">
            <option value="">Perros</option>
            <option value="">Gatos</option>
        </select>
        <p>Tamaño:</p>
        <select name="" id="tamaño">
            <option value="">Perros</option>
            <option value="">Gatos</option>
        </select>
        <p>Edad:</p>
        <select name="" id="edad">
            <option value="">Perros</option>
            <option value="">Gatos</option>
        </select>
    </div>

    <h2>Perros/Gatos en adopcion</h2>

    <div class="contenedor">

        <div class="contenedor-modal" id="popup">
            <div class="modal">

                <a href="#" class="btn-close-modal">X</a>
            </div>
        </div>

        <div class="adopciones">
            <div class="adopcion">
                <div class="img">
                    <img src="{{ asset('img/Home/banner.jpg') }}" alt="">
                    <div class="descrip">
                        <h2>Lupe</h2>
                    </div>
                </div>
                <div class="more"><a href="#popup" style="text-decoration: none; color: #fff;">Mas Informacion</a></div>
            </div>
            <div class="adopcion">
                <div class="img">
                    <img src="{{ asset('img/Home/banner.jpg') }}" alt="">
                    <div class="descrip">
                        <h2>Matias</h2>
                    </div>
                </div>
                <div class="more"><a href="#popup" style="text-decoration: none; color: #fff;">Mas Informacion</a></div>
            </div>
            <div class="adopcion">
                <div class="img">
                    <img src="{{ asset('img/Home/banner.jpg') }}" alt="">
                    <div class="descrip">
                        <h2>Bruno</h2>
                    </div>
                </div>
                <div class="more"><a href="#popup" style="text-decoration: none; color: #fff;">Mas Informacion</a></div>
            </div>
            <div class="adopcion">
                <div class="img">
                    <img src="{{ asset('img/Home/banner.jpg') }}" alt="">
                    <div class="descrip">
                        <h2>Tonny</h2>
                    </div>
                </div>
                <div class="more"><a href="#popup" style="text-decoration: none; color: #fff;">Mas Informacion</a></div>
            </div>
            <div class="adopcion">
                <div class="img">
                    <img src="{{ asset('img/Home/banner.jpg') }}" alt="">
                    <div class="descrip">
                        <h2>Lupe</h2>
                    </div>
                </div>
                <div class="more"><a href="#popup" style="text-decoration: none; color: #fff;">Mas Informacion</a></div>
            </div>
            <div class="adopcion">
                <div class="img">
                    <img src="{{ asset('img/Home/banner.jpg') }}" alt="">
                    <div class="descrip">
                        <h2>Matias</h2>
                    </div>
                </div>
                <div class="more"><a href="#popup" style="text-decoration: none; color: #fff;">Mas Informacion</a></div>
            </div>
            <div class="adopcion">
                <div class="img">
                    <img src="{{ asset('img/Home/banner.jpg') }}" alt="">
                    <div class="descrip">
                        <h2>Bruno</h2>
                    </div>
                </div>
                <div class="more"><a href="#popup" style="text-decoration: none; color: #fff;">Mas Informacion</a></div>
            </div>
            <div class="adopcion">
                <div class="img">
                    <img src="{{ asset('img/Home/banner.jpg') }}" alt="">
                    <div class="descrip">
                        <h2>Tonny</h2>
                    </div>
                </div>
                <div class="more"><a href="#popup" style="text-decoration: none; color: #fff;">Mas Informacion</a></div>
            </div>
            <div class="adopcion">
                <div class="img">
                    <img src="{{ asset('img/Home/banner.jpg') }}" alt="">
                    <div class="descrip">
                        <h2>Lupe</h2>
                    </div>
                </div>
                <div class="more"><a href="#popup" style="text-decoration: none; color: #fff;">Mas Informacion</a></div>
            </div>
            <div class="adopcion">
                <div class="img">
                    <img src="{{ asset('img/Home/banner.jpg') }}" alt="">
                    <div class="descrip">
                        <h2>Matias</h2>
                    </div>
                </div>
                <div class="more"><a href="#popup" style="text-decoration: none; color: #fff;">Mas Informacion</a></div>
            </div>
            <div class="adopcion">
                <div class="img">
                    <img src="{{ asset('img/Home/banner.jpg') }}" alt="">
                    <div class="descrip">
                        <h2>Bruno</h2>
                    </div>
                </div>
                <div class="more"><a href="#popup" style="text-decoration: none; color: #fff;">Mas Informacion</a></div>
            </div>
            <div class="adopcion">
                <div class="img">
                    <img src="{{ asset('img/Home/banner.jpg') }}" alt="">
                    <div class="descrip">
                        <h2>Tonny</h2>
                    </div>
                </div>
                <div class="more"><a href="#popup" style="text-decoration: none; color: #fff;">Mas Informacion</a></div>
            </div>
        </div>
    </div>
</div>
@endsection

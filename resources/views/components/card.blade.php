<div class="adopcion">
    <div class="img">
        <img src="{{ asset("storage/$imagen") }}" alt="">
        <div class="descrip">
            <h2>{{ $mascota }}</h2>
        </div>
    </div>
    <div class="more"><a href="#popup" style="text-decoration: none; color: #fff;">Mas Informacion</a></div>
</div>
<div class="contenedor-modal" id=popup>
    <div class="moda">
        <div class="informacion">
            <img src="{{ asset("storage/$imagen") }}" alt="Adopta">
            <div class="descripcion">
                <div class="cont">
                    <p>Raza:</p>
                    <p>(raza)</p>
                </div>
                <div class="cont">
                    <p>Color:</p>
                    <p>(color)</p>
                </div>
                <div class="cont">
                    <p>Caracteristicas:</p>
                    <p>(caracteristicas)</p>
                </div>
                <div class="cont">
                    <p>Edad:</p>
                    <p>(edad)</p>
                </div>
                <div class="cont">
                    <p>Enfermedades:</p>
                    <p>(enfermedades)</p>
                </div>
                <div class="cont">
                    <p>Tamaño:</p>
                    <p>(tamaño)</p>
                </div>
                <div class="cont">
                    <p>Esterilizado:</p>
                    <p>(si/no)</p>
                </div>
                <div class="cont">
                    <p>Estado:</p>
                    <p>(en adopcion)</p>
                </div>

                <button class="transicion2" type="submit"><span>Solicitar Adopcion</span></button>
            </div>
            <div class="tener-en-cuenta">
                <h4>Antes de adoptar una mascota, ten en cuenta:</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita quibusdam ducimus reprehenderit. Deserunt dolor soluta sapiente, voluptates porro qui debitis, quis dicta praesentium quo fuga facere vero non nihil quam!</p>
                <h4>¿Como funciona el proceso de adopcion?:</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita quibusdam ducimus reprehenderit. Deserunt dolor soluta sapiente, voluptates porro qui debitis, quis dicta praesentium quo fuga facere vero non nihil quam!</p>
                <h4>Requisitos para adoptar:</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita quibusdam ducimus reprehenderit. Deserunt dolor soluta sapiente, voluptates porro qui debitis, quis dicta praesentium quo fuga facere vero non nihil quam!</p>
            </div>
        </div>
        <a href="#" class="btn-close-modal">X</a>
    </div>
</div>

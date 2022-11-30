<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
    <title>Peliculas Netflix</title>
    <link rel="icon" href="carpeta/imagenes/netflix.png">
    <link rel="stylesheet" href="carpeta/css/estilo.css">
</head>
<body>
    <header>
        <div class="contenedor">
            <h2 class="logotipo">Netflix</h2>
            <nav>
                <a href="login.php">Cerrar Sesión</a>
            </nav>
        </div>
    </header>
    <main>
        <div class="pelicula-principal">
            <div class="contenedor">
                <h3 class="titulo">Peliculas más recientes</h3>
                <p class="descripcion">
                En los años noventa, Cachín encontró su estabilidad laboral y se siente resuelto. Pero le falta algo: el amor de su vida,
                 Emilia. Para conseguir su objetivo, tendrá que competir por el corazón de su amada con un joven adinerado, cuyo status
                  es más compatible con el de su enamorada. Por este motivo, Cachín ocultará aspectos de su vida, aunque esto no lo haga
                   sentir pleno.
                </p>
                <button role="button" class="boton"><i class="fas fa-play" ></i>Trailer </button> 
                <button role="button" class="boton"><i class="fas fa-info-circle"></i>Más información</button>
            </div>
        </div>

        <div class="peliculas-recomendadas contenedor">
            <div class="contenedor-titulo-controles">
                <h3>Películas en Cartelera</h3>
                <div class="indicadores"></div>
            </div>

            <div class="contenedor-principal">
                <button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>

                <div class="contenedor-carousel">
                    <div class="carousel">
                        <div class="pelicula">
                            <a href="https://youtu.be/2wUkX1Db5-A"><img src="img/1.webp " alt="" ></a>                   
                        </div>

                        <div class="pelicula">
                            <a href="https://youtu.be/Qd0_qYIhMZA"><img src="img/2.jpg" alt=""></a>
                        </div>

                        <div class="pelicula">
                            <a href="https://youtu.be/khUdRKFVKBU"><img src="img/3.webp" alt=""></a>
                        </div>

                        <div class="pelicula">
                            <a href="https://youtu.be/xPYk9E4XzXg"><img src="img/4.jpg" alt=""></a>
                        </div>

                        <div class="pelicula">
                            <a href="https://youtu.be/ZT5UuSxCxkw"><img src="img/5.jpg" alt=""></a>
                        </div>

                        <div class="pelicula">
                            <a href="https://youtu.be/ERY3SqKoL68"><img src="img/6.webp" alt=""></a>
                        </div>

                        <div class="pelicula">
                            <a href="https://youtu.be/NNAb5inbyME"><img src="img/7.jpg" alt=""></a>
                        </div>

                        <div class="pelicula">
                            <a href="https://youtu.be/R7l4O-6TmBE"><img src="img/8.webp" alt=""></a>
                        </div>

                        <div class="pelicula">
                            <a href="https://youtu.be/hnSwC1kcup4"><img src="img/9.webp" alt=""></a>
                        </div>

                        <div class="pelicula">
                            <a href="https://youtu.be/oaecO64NARM"><img src="img/10.webp" alt=""></a>
                        </div>

                        <div class="pelicula">
                            <a href="https://youtu.be/Su0if79aUOQ"><img src="img/11.webp" alt=""></a>
                        </div>

                        <div class="pelicula">
                            <a href="https://youtu.be/veFTDup82f0"><img src="img/12.jpg" alt=""></a>
                        </div>

                        <div class="pelicula">
                            <a href="https://youtu.be/KG770hOuT2k"><img src="img//13.jpg" alt=""></a>
                        </div>

                        <div class="pelicula">
                            <a href="https://youtu.be/yPPaLgSXYlM"><img src="img/14.jpg" alt=""></a>
                        </div>

                        <div class="pelicula">
                            <a href="https://youtu.be/KG770hOuT2k"><img src="img/15.jpg" alt=""></a>
                        </div>

                        <div class="pelicula">
                            <a href="https://youtu.be/xKJmEC5ieOk"><img src="img/16.jpg" alt=""></a>
                        </div>

                        <div class="pelicula">
                            <a href="https://youtu.be/8I8ydll4hJY"><img src="img/17.jpg" alt=""></a>
                        </div>

                        <div class="pelicula">
                            <a href="https://youtu.be/WUPbg8r2CII"><img src="img/18.jpg" alt=""></a>
                        </div>

                        <div class="pelicula">
                            <a href="https://youtu.be/IKA9H68sgXo"><img src="img/19.jpg" alt=""></a>
                        </div>

                        <div class="pelicula">
                            <a href="https://youtu.be/8kmLHwKH31M"><img src="img/20.webp" alt=""></a>
                        </div>
                    </div>
                </div>

                <button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
            </div>
        </div>
    </main>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="pages/main.js"></script>
</body>
</html>
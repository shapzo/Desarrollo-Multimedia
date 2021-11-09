<!DOCTYPE html>
<html lang="Es">

<head>
    <title>Historia (Mx)</title>
    <!--Las configuraciones de la pagina-->
    <?php require 'Includes/Cabeceras.php';?>
</head>

<body>
    <!--la barra de navegacion-->
    <?php
$activa = 'historia.php">Historia<span class="sr-only">(current)</span>';
global $activa;
require 'Includes/Nav_Todas.php';?>

    <!--Area para las particulas de la pagina-->
    <div id="particles-js"></div>
    <script src="js/particles.min.js"></script>
    <script src="js/apps.js"></script>

    <!--Contenedor de la pagina (osea donde esta toda la pagina contenida)-->
    <header class="contenedor">
        <div class="div1">
            <dir style="width: 65%;">
                <div class="row" id="box-search">
                    <div class="thumbnail text-center">
                        <img src="Img/image8.jpg" loading="lazy" style="width: 85%;"
                            class="img-responsive img-fluid rounded img3" />
                        <div class="caption">
                            <h2>
                                <span class="badge badge-pill badge-dark spam1">Historia</span>
                            </h2>
                            <h1>
                                <span class="badge badge-pill badge-dark spam1">Feria de la Piñata</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </dir>
        </div>

        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

        <div class="div2">
            <p class="texto1">
                El origen de la celebración data del año 1586 (siglo XVI), cuando los frailes agustinos de Acolman
                recibieron la autorización del Papa Sixto V para celebrar las “misas de aguinaldo”, que más tarde se
                convertirían en las posadas. Fue en esas misas que
                tuvieron lugar en los días previos a la Navidad que los frailes introdujeron la piñata.
            </p>
            <p class="texto1">
                Sobre su origen de la piñata existen varias teorías que dicen ser las pioneras en esta tradición entre
                las que se encuentran las siguientes:
            </p>
        </div>

        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

        <div class="div4">
            <marquee crollamount="30" direction="right">
                <img loading="lazy" class="img4" src="Img/image4.jpg" alt="historia1" />
            </marquee>
            <marquee crollamount="30" direction="up">
                <img loading="lazy" class="img5" src="Img/image5.jpg" alt="historia2" />
            </marquee>
            <marquee crollamount="30">
                <img loading="lazy" class="img4" src="Img/image10.jpg" alt="historia3" />
            </marquee>
            <marquee crollamount="30" direction="down">
                <img loading="lazy" class="img5" src="Img/image11.png" alt="historia4" />
            </marquee>
        </div>

        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

        <div class="div2">
                <p class="texto1">
                    Los mayas acostumbraban a colgar una olla llena de chocolates amargos y trataban de romperla con los
                    ojos vendados.
                
                    Los mexicas, por su parte, festejaban el solsticio de invierno durante 20 días y dedicaban una
                    ceremonia a Huitzilopochtli.
                
                    En el libro Las Maravillas de Marco Polo se menciona que las personas del continente asiático
                    golpeaban la figura de un toro en la celebración del Año Nuevo. Y fue Marco Polo quien llevó esta
                    costumbre a Italia para la cuaresma, misma que después llegó
                    a España y de ahí, a México.
                </p>
        </div>


    </header>

    <div class="copyright">
        <p class="texto_copy">Todos los derechos reservados, queda proivida su distribucion total o parcial</p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <p class="texto_copy">Copyright &copy; 2021 </p>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="Es">

<head>
    <title>Inicio (Mx)</title>
    <!--Las configuraciones de la pagina-->
    <?php require('Includes/Cabeceras.php');?>
</head>

<body>
    <!--Area para las particulas de la pagina-->
    <div id="particles-js"></div>
    <script src="js/particles.min.js"></script>
    <script src="js/apps.js"></script>
    <!--Contenedor de la pagina (osea donde esta toda la pagina contenida)-->
    <header class="contenedor">

        <!--Imagen de con efectos de grises-->
        <div class="div1">
            <dir style="width: 65%;">
                <div class="row" id="box-search">
                    <div class="thumbnail text-center">
                        <img src="Img/image1.jpg" loading="lazy" style="width: 85%;"
                            class="img-responsive img-fluid rounded pinata" />
                        <div class="caption">
                            <h1>
                                <span class="badge badge-pill badge-dark spam1">Feria de la Piñata</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </dir>
        </div>
        
        <!--la barra de navegacion-->
        <?php require('Includes/Navbar.php');?>

        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

        <div class="div2">
            <p class="texto1">
                Celebrada en el municipio de Acolman, Estado de M&eacute;xico a unos cuantos minutos en auto de las
                pir&aacute;mides de Teotihuac&aacute;n. Desde la carretera se alcanza a ver un exconvento agustino que
                data del siglo XVI, pero si nos acerc&aacute;ramos
                un poco m&aacute;s a los arcos que marcan la entrada al pueblo, ser&iacute;amos recibidos por la estatua
                de un fraile golpeando una piñata de siete picos.
            </p>

            <p class="texto1">
                El fraile es fray Diego de Soria y su imagen en bronce representa el nacimiento de dos tradiciones
                fuertemente arraigadas con la Navidad mexicana: las posadas y las piñatas.
            </p>
        </div>

        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

        <div class="div3">
            <img class="img2" src="Img/image2.jpg" loading="lazy" />
            <figcaption class="fig1">Piñata rota a palos</figcaption>
        </div>

        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

        <div class="div2">
            <p class="texto1">
                Es una tradici&oacute;n decembrina que actualmente 2021 cumple 36 años, en esta &eacute;poca, los
                artesanos, se dedican a vender las piñatas que un mes antes confeccionaron y adornaron. Tambi&eacute;n
                se llevar&aacute; a cabo la premiaci&oacute;n de un
                concurso de piñatas en el que los habitantes de la regi&oacute;n participaron con el diseño de su propia
                piñata, así como la celebraci&oacute;n de las tradicionales posadas.
            </p>
        </div>

        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

        <div class="div3">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/_e9SVKaXWXQ" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <figcaption class="fig1">Video mostrando el ex-convento de los agustinos en Acolman</figcaption>    
        </div>
    </header>

    <div class="copyright">
        <p class="texto_copy">Todos los derechos reservados, queda proivida su distribucion total o parcial</p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <p class="texto_copy">Copyright &copy; 2021 </p>
    </div>
</body>

</html>
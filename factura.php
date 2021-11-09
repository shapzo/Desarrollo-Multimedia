<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <!--Las configuraciones de la pagina-->
    <?php require 'Includes/Cabeceras.php';?>
</head>

<body>
    <!--la barra de navegacion-->
    <?php
$activa = 'factura.php">Factura de pago<span class="sr-only">(current)</span>';
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
                        <img src="Img/image7.jpg" loading="lazy" style="width: 85%;"
                            class="img-responsive img-fluid rounded img3" />
                        <div class="caption">
                            <h1>
                                <span class="badge badge-pill badge-dark spam1">Esata es su factura de cobro</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </dir>
        </div>

        <?php
        require("Config/Conexion.php");
        global $Conexion;

        mysqli_set_charset($Conexion, 'utf8');
        $elUsuarios = array();
        $sqlUsuarioses = "SELECT * FROM Usuarios ORDER BY Id DESC LIMIT 1";
        $resultadoUsuarioses = mysqli_query($Conexion, $sqlUsuarioses);

        while ($Usuarios = mysqli_fetch_array($resultadoUsuarioses, MYSQLI_ASSOC)) {
            $elUsuarios[] = $Usuarios;
        }
        mysqli_close($Conexion);
        ?>

        <?php
            foreach ($elUsuarios as $Usuarios) {
            echo'
            <div class="div2">
            <p class="texto1">Graisas por adquirir uno de nuestros pases para una ruta guiada por Acolman señ@r 
            <span class="badge bg-success"> '. $Usuarios['Nombre'] .' '. $Usuarios['Apellido'] .'</span>
            Grasias, de todo corazon grasias, con su apoyo alimenta a las familias de los trabajadores</p>
            </div>
            ';
        }
        ;?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="div1">
            <form class="form-horizontal" action="facturaPDF.php facturaEMAIL.php" method="post">
                <a role="button" class="btn btn-danger boton1" href="facturaPDF.php">Descarar factura</a>
            </form>
        </div>

    </header>
    <div class="copyright">
        <p class="texto_copy">Todos los derechos reservados, queda proivida su distribucion total o parcial</p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <p class="texto_copy">Copyright &copy; 2021 </p>
    </div>
</body>

</html>
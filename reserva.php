<!DOCTYPE html>
<html lang="en">

<head>
    <title>Conoce acolman (MX)</title>
    <!--Las configuraciones de la pagina-->
    <?php require('Includes/Cabeceras.php');?>
</head>

<body>
    <!--la barra de navegacion-->
    <?php
    $activa = 'reserva.php">Conoce Acolman<span class="sr-only">(current)</span>';
    global $activa;
    require 'Includes/Nav_Todas.php';?>

    <?php
    require("Config/Conexion.php");
    global $Conexion;
    mysqli_set_charset($Conexion, 'utf8');

    $sql1 = "SELECT * FROM Bancos ORDER BY Id ASC";
    $resultadoUsuarios = mysqli_query($Conexion, $sql1);
    while ($Bancos = mysqli_fetch_array($resultadoUsuarios, MYSQLI_ASSOC)) {
        @$listaBancos .= "<option value  = $Bancos[Bancos]>$Bancos[Bancos]</option>";
    }
    mysqli_close($Conexion);
    ?>

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
                        <img src="Img/image9.jpg" loading="lazy" style="width: 85%;"
                            class="img-responsive img-fluid rounded img3" />
                        <div class="caption">
                            <h2>
                                <span class="badge badge-pill badge-dark spam1">Reserva</span>
                            </h2>
                            <h1>
                                <span class="badge badge-pill badge-dark spam1">Que esperas mas</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </dir>
        </div>

        <div>
            <form class="form-horizontal" role="form" action="llenausuario.php" method="post">
                <div class="div3">
                    <div>
                        <h3><span class="badge badge-success spam2">Ingresa tus datos</span></h3>
                    </div>

                    <div class="form-group div-table">
                        <table class="table table-striped table-hover">
                            <tr>
                                <td class="td1"><label class="col-lg-2 control-label">Nombre</label></td">
                                <td class="td1"><input type="text" class="form-control" id="inputSeleccionado"
                                        name="Nombre" value="" placeholder="Introduce tu nombre"></td">
                            </tr>

                            <tr>
                                <td class="td1"><label class="col-lg-2 control-label">Apellido</label></td">
                                <td class="td1"><input type="text" class="form-control" id="inputSeleccionado"
                                        name="Apellido" value="" placeholder="Introduce tus apellidos"></td">
                            </tr>

                            <tr>
                                <td class="td1"><label class="col-lg-2 control-label">Edad</label></td">
                                <td class="td1"><input type="text" class="form-control" id="inputSeleccionado"
                                        name="Edad" value="" placeholder="Introduce tu edad"></td">
                            </tr>

                            <tr>
                                <td class="td1"><label class="col-lg-2 control-label">Telfono</label></td">
                                <td class="td1"><input type="text" class="form-control" id="inputSeleccionado"
                                        name="Telefono" value="" placeholder="Introduce tu numero de telefono"></td">
                            </tr>

                            <tr>
                                <td class="td1"><label class="col-lg-2 control-label">Correo Electronico</label></td">
                                <td class="td1"><input type="text" class="form-control" id="inputSeleccionado"
                                        name="Email" value="" placeholder="Introduce tu correo electronico"></td">
                            </tr>

                            <tr>
                                <td class="td1"><label class="col-lg-2 control-label">Fecha de su visita</label></td">
                                <td class="td1"><input type="date" class="form-control" id="inputSeleccionado"
                                        name="Fecha" value="" placeholder="seleccione la fecha de su visita"></td">
                            </tr>

                            <tr>
                                <td class="td1"><label class="col-lg-2 control-label">Forma de pago</label></td">
                                <td class="td1">
                                    <?php
                                    echo '<select class="form-control" id="Pago inputSeleccionado" name="Pago">' . $listaBancos . '</select>';
                                    ?>
                                </td">
                            </tr>

                            <tr>
                                <td class="td1"><label class="col-lg-2 control-label">No de cuenta</label></td">
                                <td class="td1"><input type="text" class="form-control" id="inputSeleccionado"
                                        name="No_Cuenta" value="" placeholder="Introduce tu numero de cuneta"></td">
                            </tr>

                        </table>
                    </div>

                    <form class="form-horizontal" action="llenausuario.php" method="post">
                        <input type="submit" class="btn btn-danger boton1" name="" value="Continuar">
                        <input type="reset" class="btn btn-primary boton1" name="" value="Cancelar">
                    </form>
                </div>
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
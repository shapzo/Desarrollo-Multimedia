<!DOCTYPE html>
<html lang="en">

<head>
    <title>Conoce acolman (MX)</title>
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

        <?php

    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Edad = $_POST['Edad'];
    $Telefono = $_POST['Telefono'];
    $Email = $_POST['Email'];
    $Fecha = $_POST['Fecha'];
    $Pago = $_POST['Pago'];
    $No_Cuenta= $_POST['No_Cuenta'];

    require('Config/Conexion.php');
    global $Conexion;
    mysqli_set_charset($Conexion, 'utf8');

    $sql = "INSERT INTO Usuarios (Nombre, Apellido, Edad, Telefono, Email, Fecha, Pago, No_Cuenta)
            VALUES ('$Nombre','$Apellido','$Edad','$Telefono','$Email','$Fecha','$Pago','$No_Cuenta')";
    $resultado = mysqli_query($Conexion, $sql);

    if ($resultado) {
        
    } else {
        die("No se guardaron los datos");
    }

    $elUsuarios = array();
    $sqlUsuarioses = "SELECT * FROM Usuarios ORDER BY Id DESC LIMIT 1";
    $resultadoUsuarioses = mysqli_query($Conexion, $sqlUsuarioses);

    while ($Usuarios = mysqli_fetch_array($resultadoUsuarioses, MYSQLI_ASSOC)) {
        $elUsuarios[] = $Usuarios;
    }
    mysqli_close($Conexion);
    ?>

<div class="div1">
            <dir style="width: 65%;">
                <div class="row" id="box-search">
                    <div class="thumbnail text-center">
                        <img src="Img/image11.png" loading="lazy" style="width: 85%;"
                            class="img-responsive img-fluid rounded img3" />
                        <div class="caption">
                            <h2>
                                <span class="badge badge-pill badge-dark spam1">Grasias por su reserva</span>
                            </h2>
                            <h1>
                                <span class="badge badge-pill badge-dark spam1">Feria de la Piñata</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </dir>
        </div>

        <div class="form-group div-table">
            <table class="table table-striped table-hover">
                <thead id="thed">
                    <tr id="tr">
                        <th id="th">Nombre</th>
                        <th id="th">Apellido</th>
                        <th id="th">Correo electronico</th>
                        <th id="th">Fecha de su visita</th>
                        <th id="th">Banco</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($elUsuarios as $Usuarios) {
                        echo "<tr>";
                        echo "<td>" . $Usuarios['Nombre'] . "</td>";
                        echo "<td>" . $Usuarios['Apellido'] . "</td>";
                        echo "<td>" . $Usuarios['Email'] . "</td>";
                        echo "<td>" . $Usuarios['Fecha'] . "</td>";
                        echo "<td>" . $Usuarios['Pago'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>

            <form class="form-horizontal" action="factura.php" method="post">
                <a role="button" class="btn btn-danger boton1" href="factura.php">Continuar</a>
                <a role="button" class="btn btn-primary boton1" href="index.php">Cancelar</a>
            </form>
        </div>



</body>

</html>
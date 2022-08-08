<?php
require "../../acnxerdm/conect.php";

$query = "select * from RegistroReductoresClone";
$queryResult = sqlsrv_query($cnx, $query);
$cuenta = sqlsrv_fetch_array($queryResult);



if(isset($_POST['aceptar'])){
    $id=$_GET['reduc'];
  
    $Cuentaa = $cuenta['Cuenta'];
    $idTarea = $cuenta['idTarea'];
    $IdCatalogoReductores = $cuenta['idCatalogoreductores'];
    $Lectura = $cuenta['lectura'];
    $Medidor= $cuenta['medidor'];
    $Reductor= $cuenta['reductor'];
    $Telefono = $cuenta['telefono'];
    $Observaciones = $cuenta['observaciones'];
    $Contacto = $cuenta['contacto'];
    $FechaPromesa = date('Y-m-d H:i:s', strtotime($cuenta['FechaPromesaPago']));
    $FechaAsignacion= date('Y-m-d H:i:s', strtotime($cuenta['fechaAsignacion']));
    $FechaVencimiento = date('Y-m-d H:i:s', strtotime($cuenta['fechaVencimiento']));
    $FechaCaptura = date('Y-m-d H:i:s', strtotime($cuenta['fechaCaptura']));
    $IdDescripcionTarea = $cuenta['iddescripciontarea'];
    $Latitud = $cuenta['Latitud'];
    $Longitud= $cuenta['Longitud'];
    $FolioSS = $cuenta['FolioSS'];
    $IdAspUser= $cuenta['IdAspUser'];
    $IdNiple = $cuenta['idniple'];
    $HoraInicial = $cuenta['horainicial'];
    $HoraFinal = $cuenta['horafinal'];
    $idTipoServicio = $cuenta['idTipoServicio'];
    $idEstatusToma =$cuenta['idEstatusToma'];	
    $idTipoToma	= $cuenta['idTipoToma'];
    $DescripcionTomaDirecta = $cuenta['descripcionTomaDirecta'];
    $IdDescripcionMulta = $cuenta['idDescripcionMulta'];
    $fechaSincronizacion = date('Y-m-d H:i:s', strtotime($cuenta['fechaSincronizacion']));
    $IdDetalle = $cuenta['idDetalle']; 
    $IdMedidorTapado = $cuenta['idMedidorTapado'];
    $IdTipoReductor = $cuenta['idTipoReductor'];
    $NoCincho = $cuenta['noCincho'];
    $IdEstatusRequerimiento = $cuenta['idEstatusRequerimiento'];
    $FolioSelloCorte = $cuenta['folioSelloCorte'];
    $IdTipoCorte = $cuenta['idTipoCorte'];
    $ComentarioNoSuspendeServicio = $cuenta['comentarioNoSuspendeServicio'];
    $ResultadoSuperviso = $cuenta['resultadoSuperviso'];
    	            

                    
    $updateQuery = "UPDATE RegistroReductores SET Cuenta = '$Cuentaa', idTarea = '$idTarea', idCatalogoreductores = '$IdCatalogoReductores', lectura = '$Lectura', medidor = '$Medidor', reductor = '$Reductor', telefono = '$Telefono', contacto = '$Contacto', observaciones = '$Observaciones', FechaPromesaPago = '$FechaPromesa', fechaAsignacion = '$FechaAsignacion', fechaVencimiento = '$FechaVencimiento', fechaCaptura = '$FechaCaptura', iddescripciontarea = '$IdDescripcionTarea', Latitud = '$Latitud', Longitud = '$Longitud', FolioSS = '$FolioSS', IdAspUser = '$IdAspUser', idniple = '$IdNiple', horainicial = '$HoraInicial', horafinal = '$HoraFinal', idTipoServicio = '$idTipoServicio', idEstatusToma = '$idEstatusToma', idTipoToma = '$idTipoToma', descripcionTomaDirecta = '$DescripcionTomaDirecta', idDescripcionMulta = '$IdDescripcionMulta', fechaSincronizacion = '$fechaSincronizacion', idDetalle = '$IdDetalle', idMedidorTapado = '$IdMedidorTapado', idTipoReductor = '$IdTipoReductor', noCincho = '$NoCincho', idEstatusRequerimiento = '$IdEstatusRequerimiento', folioSelloCorte = '$FolioSelloCorte', idTipoCorte = '$IdTipoCorte', comentarioNoSuspendeServicio = '$ComentarioNoSuspendeServicio', resultadoSuperviso = '$ResultadoSuperviso' WHERE idRegistroReductores = '$id'";
    
    $updateQueryResult = sqlsrv_query ($cnx, $updateQuery);
    if (!$updateQueryResult) die( print_r( sqlsrv_errors(), true));
                    
    if($updateQueryResult){
        echo '<script>alert("Se Aprobo con exito")</script>';
       
    } else {
        echo '<script>alert("No se pudo aprobar ")</script>';
    }
//                    
       }

?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Excluir Cuenta</title>
    <link rel="icon" href="../icono/icon.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link href="../fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        body {
            background-image: url(../img/back.jpg);
            background-repeat: repeat;
            background-size: 100%;
            /*        background-attachment: fixed;*/
            overflow-x: hidden;
            /* ocultar scrolBar horizontal*/
        }

        body {
            font-family: sans-serif;
            font-style: normal;
            font-weight: bold;
            width: 100%;
            height: 100%;
            margin-top: -1%;
            padding-top: 0px;
        }

        .jumbotron {
            margin-top: 0%;
            margin-bottom: 0%;
        }

        .padding {
            padding-right: 35%;
            padding-left: 35%;
        }

    </style>
    <?php require "include/nav.php"; ?>
</head>

<body>
    <div class="container">
        <hr>

        <div class="form-row">
            <div class="col-md-6">
                <div style="text-align:left;">
                    <h4>Cuentas Modificadas</h4>
                </div>
            </div>
        </div>

        <table class="table table-hover table-sm">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Cuenta</th>
                    <th scope="col">Id Tarea</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php do{ ?>
                <tr>
                    <td><?php echo $cuenta['Cuenta'] ?></td>
<!--
                    <td><?php //$Nombre = "select AspNetUsers.Nombre from RegistroAbogado inner join [dbo].[AspNetUsers] on AspNetUsers.Id='".$cuenta['IdAspUser']."'";
                        //$NombreQueryResult = sqlsrv_query($cnx, $Nombre);
                    ?>
                    </td>
-->
                    <td><?php echo $cuenta['idTarea'] ?></td>

                    <td>
                        <form method="POST">
                            <input type="hidden" name="cuenta" value="<?php echo $cuenta['Cuenta'] ?>">
                            <input type="hidden" class="form-control border border-secondary" value="<?php echo $_GET['plz'] ?>" name="plz">
                            <input type="hidden" class="form-control border border-secondary" value="<?php echo $_GET['reduc'] ?>" name="id">
                            <a href="infoReductor.php?cuenta=<?php echo $cuenta['Cuenta'] ?>&plz=<?php echo $_GET['plz'] ?>" class="btn btn-primary btn-sm" name="info"><i class="fa fa-info" aria-hidden="true"></i></a>
                            <a href="update.php?cuenta=<?php echo $cuenta['Cuenta'] ?>&plz=<?php echo $_GET['plz'] ?>" class="btn btn-danger btn-sm" name="editar"><i class="fa fa-times" aria-hidden="true"></i></a>
                            <button type="submit" name="aceptar" class="btn btn-success btn-sm"><i class="fa fa-check" aria-hidden="true"></i></button>
                        </form>
                    </td>
                </tr>
            </tbody>


            <?php }while($cuenta = sqlsrv_fetch_array($queryResult)); ?>
        </table>
        <br>
        <div style="text-align:center;">
            <a href="../cambiarTarea/inicio.php?findR=<?php echo $_GET['cuenta'] ?>&plz=<?php echo $_GET['plz'] ?>" class="btn btn-dark btn-sm"><i class="fas fa-times"></i> Regresar</a>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php 

require "include/footer.php";
    ?>
</body>

<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })

</script>
<script>
    function Confirmar(Mensaje) {
        return (confirm(Mensaje)) ? true : false;
    }

</script>

</html>

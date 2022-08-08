<?php
require "../../acnxerdm/conect.php";

$query = "select * from RegistroAbogadoClone";
$queryResult = sqlsrv_query($cnx, $query);
$cuenta = sqlsrv_fetch_array($queryResult);


//if(isset($_POST['aceptar'])){
//    $id=$_POST['abog'];
//    $plz=$_POST['plaza'];
//    $Cuenta=$_POST['cuenta'];
//    echo '<meta http-equiv="refresh" content="0,url=cuentaModificadaGestor.php?abog='.$id.'&cuenta='.$Cuenta.'&plz='.$plz.'">';
//}

if(isset($_POST['aceptar'])){
    $id=$_GET['abog'];
    
  
  
    $cuenta1 = $cuenta['Cuenta'];
    $idTarea = $cuenta['IdTarea'];
    $FechaAsignacion = date('Y-m-d H:i:s', strtotime($cuenta['FechaAsignacion']));
    $Observacion = $cuenta['ObservacionesLegal'];
    $EstatusLegal = $cuenta['EstatusLegal'];
    $ReporteALegal= $cuenta['ReporteDeAvancesLegal'];
    $IdAspUser = $cuenta['IdAspUser'];
    $FechaVencimiento = date('Y-m-d H:i:s', strtotime($cuenta['FechaVencimiento']));
    $FechaCaptura = date('Y-m-d H:i:s', strtotime($cuenta['FechaCaptura']));
    $HoraVencimiento = $cuenta['HoraVencimiento'];
    $FechaPromesa = date('Y-m-d H:i:s', strtotime($cuenta['FechaPromesa']));
    $IdPersona = $cuenta['IdPersona'];
    $IdResultado = $cuenta['IdResultado'];
    $Latitud = $cuenta['Latitud'];
    $Longitud= $cuenta['Longitud'];
    $TelefonoLocal = $cuenta['TelefonoLocal'];
    $TelefonoCelular = $cuenta['TelefonoCelular'];
    $IdTipoServicio = $cuenta['idTipoServicio'];
    $IdEstatusToma = $cuenta['idEstatusToma'];
    $IdTipoToma = $cuenta['idTipoToma'];
    $FechaSincronizacion = date('Y-m-d H:i:s', strtotime($cuenta['fechaSincronizacion']));
    $IdAccion = $cuenta['idAccion'];
    $IdRS= $cuenta['idRS'];
    $ObservacionPredio = $cuenta['observacionPredio'];
   


                    
                    $updateQuery = "UPDATE RegistroAbogado SET Cuenta = '$cuenta1', IdTarea = '$idTarea', EstatusLegal = '$EstatusLegal', ReporteDeAvancesLegal = '$ReporteALegal', ObservacionesLegal = '$Observacion', IdAspUser = '$IdAspUser', FechaAsignacion = '$FechaAsignacion', FechaVencimiento = '$FechaVencimiento', FechaCaptura = '$FechaCaptura', HoraVencimiento = '$HoraVencimiento', FechaPromesa = '$FechaPromesa', IdPersona = '$IdPersona', IdResultado = '$IdResultado', Latitud = '$Latitud', Longitud = '$Longitud', TelefonoLocal = '$TelefonoLocal', TelefonoCelular = '$TelefonoCelular', idTipoServicio = '$IdTipoServicio', idEstatusToma = '$IdEstatusToma', idTipoToma = '$IdTipoToma', fechaSincronizacion = '$FechaSincronizacion', idAccion = '$IdAccion', idRS = '$IdRS', observacionPredio = '$ObservacionPredio'   WHERE IdRegistroAbogado = '$id'";
    

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
    <title>Cuentas Modificadas Abogado</title>
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
                    <td><?php echo $cuenta['IdTarea'] ?></td>

                    <td>
                        <form method="POST">
                            <input type="hidden" name="cuenta" value="<?php echo $cuenta['Cuenta'] ?>">
                            <input type="hidden" class="form-control border border-secondary" value="<?php echo $_GET['plz'] ?>" name="plz">
                            <input type="hidden" class="form-control border border-secondary" value="<?php echo $_GET['abog'] ?>" name="id">
                            <a href="infoAbogado.php?cuenta=<?php echo $cuenta['Cuenta'] ?>&plz=<?php echo $_GET['plz'] ?>" class="btn btn-primary btn-sm openBtn2" name="info"><i class="fa fa-info" aria-hidden="true"></i></a>
                            <a href="update.php?cuenta=<?php echo $cuenta['Cuenta'] ?>&plz=<?php echo $_GET['plz'] ?>" class="btn btn-danger btn-sm" name="editar"><i class="fa fa-times" aria-hidden="true"></i></a>
                             <button href="otraVista.php" type="submit" name="aceptar" class="btn btn-success btn-sm"><i class="fa fa-check" aria-hidden="true"></i></button>
                        </form>
                    </td>
                </tr>
            </tbody>

            <?php }while($cuenta = sqlsrv_fetch_array($queryResult)); ?>
        </table>
        <br>
        <div style="text-align:center;">
            <a href="../cambiarTarea/inicio.php?findA=<?php echo $_GET['cuenta'] ?>&plz=<?php echo $_GET['plz'] ?>" class="btn btn-dark btn-sm"><i class="fas fa-times"></i> Regresar</a>
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

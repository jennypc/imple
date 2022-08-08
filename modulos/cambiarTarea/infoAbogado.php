<?php
require "../../acnxerdm/conect.php";

$query = "select * from RegistroReductoresClone";
$queryResult = sqlsrv_query($cnx, $query);
$cuenta = sqlsrv_fetch_array($queryResult);


$cuentaOriginal="SELECT * FROM RegistroReductores";
$cuentaOriginalResult=sqlsrv_query($cnx,$cuentaOriginal);
$cuentaOriginalR=sqlsrv_fetch_array($cuentaOriginalResult);


   
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informacion Reductor</title>
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
            overflow-x: hidden;
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
            padding-top: 4%;
            padding-bottom: 1%;
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
        <h1 style="text-shadow: 1px 1px 2px #717171;">Cuentas modificadas</h1>
        <h3 style="text-shadow: 1px 1px 2px #717171;"> Lista de cuentas modificadas</h3>
        <hr>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div>
                    <h5>Datos del registro original</h5>
                  <?php  
                                    $cu1="SELECT * FROM RegistroAbogado";
                                    $cuen1=sqlsrv_query($cnx,$cu1);
                                    $cuenta1=sqlsrv_fetch_array($cuen1);
                            ?>
                            <div class="form-row">
                                <div class="col-sm-3">
                                    <label>Cuenta:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta1['Cuenta'] ?>" readonly>
                                </div>
                                <div class="col-sm-3">
                                    <label>Id tarea:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta1['IdTarea'] ?>" readonly>
                                </div>
                                <div class="col-sm-3">
                                    <label>Estatus legal:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta1['EstatusLegal'] ?>" readonly>
                                </div>
                                <div class="col-sm-3">
                                    <label>Reporte Avance legal:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta1['ReporteDeAvancesLegal'] ?>" readonly>
                                </div>
                                <div class="col-sm-12">
                                    <label>Observaciones:</label>
                                    <input class="form-control" type="text" value="<?php echo utf8_encode($cuenta1['ObservacionesLegal']) ?>" readonly>
                                </div>
                                <div class="col-sm-4">
                                    <label>IdAspUser:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta1['IdAspUser'] ?>" readonly>
                                </div>
                                <div class="col-sm-4">
                                    <label>Fecha de asignacion:</label>
                                    <?php
                                if($cuenta1['FechaAsignacion']<>NULL){
                                $fechaAsignacion = $cuenta1['FechaAsignacion']->format('Y-m-d H:i:s'); ?>
                                    <input class="form-control" type="text" value="<?php echo $fechaAsignacion ?>" readonly>
                                    <?php } ?>
                                </div>
                                <div class="col-sm-4">
                                    <label>Fecha de vencimiento:</label>
                                    <?php
                                if($cuenta1['FechaVencimiento']<>NULL){
                                $fechaVencimiento = $cuenta1['FechaVencimiento']->format('Y-m-d H:i:s'); ?>
                                    <input class="form-control" type="text" value="<?php echo $fechaVencimiento ?>" readonly>
                                    <?php } ?>
                                </div>
                                <div class="col-sm-4">
                                    <label>Fecha captura:</label>
                                    <?php
                                if($cuenta1['FechaCaptura']<>NULL){
                                $fechaCaptura = $cuenta1['FechaCaptura']->format('Y-m-d H:i:s'); ?>
                                    <input class="form-control" type="text" value="<?php echo $fechaCaptura ?>" readonly>
                                    <?php } ?>
                                </div>
                                <div class="col-sm-4">
                                    <label>Fecha promesa:</label>
                                    <?php
                                if($cuenta1['FechaPromesa']<>NULL){
                                $fechaPromesa = $cuenta1['FechaPromesa']->format('Y-m-d H:i:s'); ?>
                                    <input class="form-control" type="text" value="<?php echo $fechaPromesa ?>" readonly>
                                    <?php } ?>
                                </div>
                                <div class="col-sm-4">
                                    <label>FechaSincronizacion:</label>
                                    <?php
                                if($cuenta1['fechaSincronizacion']<>NULL){
                                $fechaSincronizacion = $cuenta1['fechaSincronizacion']->format('Y-m-d H:i:s'); ?>
                                    <input class="form-control" type="text" value="<?php echo $fechaSincronizacion ?>" readonly>
                                    <?php } ?>
                                </div>
                                <div class="col-sm-2">
                                    <label>H.Vencimiento:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta1['HoraVencimiento'] ?>" readonly>
                                </div>
                                <div class="col-sm-2">
                                    <label>Latitud:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta1['Latitud'] ?>" readonly>
                                </div>
                                <div class="col-sm-2">
                                    <label>Longitud:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta1['Longitud'] ?>" readonly>
                                </div>
                                <div class="col-sm-2">
                                    <label>TelefonoLocal:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta1['TelefonoLocal'] ?>" readonly>
                                </div>
                                <div class="col-sm-2">
                                    <label>TelefonoCelular:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta1['TelefonoCelular'] ?>" readonly>
                                </div>
                                <div class="col-sm-2">
                                    <label>IdTipoServicio:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta1['idTipoServicio'] ?>" readonly>
                                </div>
                                <div class="col-sm-3">
                                    <label>IdEstatusToma:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta1['idEstatusToma'] ?>" readonly>
                                </div>
                                <div class="col-sm-3">
                                    <label>IdTipoToma:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta1['idTipoToma'] ?>" readonly>
                                </div>
                                <div class="col-sm-3">
                                    <label>IdAccion:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta1['idAccion'] ?>" readonly>
                                </div>
                                <div class="col-sm-3">
                                    <label>IdRS:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta1['idRS'] ?>" readonly>
                                </div>
                            </div>

                </div>
            </div>
        </div>
        <br><br>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h5>Cambios Realizados</h5>
                <div>
                     <?php  
                                    $cu2="SELECT * FROM RegistroAbogadoClone";
                                    $cuen2=sqlsrv_query($cnx,$cu2);
                                    $cuenta2=sqlsrv_fetch_array($cuen2);
                            ?>
                            <div class="form-row">
                                  <div class="col-sm-3">
                                    <label>Cuenta:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta2['Cuenta'] ?>" readonly>
                                </div>
                                <div class="col-sm-3">
                                    <label>Id tarea:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta2['IdTarea'] ?>" readonly>
                                </div>
                                <div class="col-sm-3">
                                    <label>Estatus legal:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta2['EstatusLegal'] ?>" readonly>
                                </div>
                                <div class="col-sm-3">
                                    <label>Reporte Avance legal:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta2['ReporteDeAvancesLegal'] ?>" readonly>
                                </div>
                                <div class="col-sm-12">
                                    <label>Observaciones:</label>
                                    <input class="form-control" type="text" value="<?php echo utf8_encode($cuenta2['ObservacionesLegal']) ?>" readonly>
                                </div>
                                <div class="col-sm-4">
                                    <label>IdAspUser:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta2['IdAspUser'] ?>" readonly>
                                </div>
                                <div class="col-sm-4">
                                    <label>Fecha de asignacion:</label>
                                    <?php
                                if($cuenta2['FechaAsignacion']<>NULL){
                                $fechaAsignacion = $cuenta2['FechaAsignacion']?>
                                    <input class="form-control" type="text" value="<?php echo $fechaAsignacion ?>" readonly>
                                    <?php } ?>
                                </div>
                                <div class="col-sm-4">
                                    <label>Fecha de vencimiento:</label>
                                    <?php
                                if($cuenta2['FechaVencimiento']<>NULL){
                                $fechaVencimiento = $cuenta2['FechaVencimiento']?>
                                    <input class="form-control" type="text" value="<?php echo $fechaVencimiento ?>" readonly>
                                    <?php } ?>
                                </div>
                                <div class="col-sm-4">
                                    <label>Fecha captura:</label>
                                    <?php
                                if($cuenta2['FechaCaptura']<>NULL){
                                $fechaCaptura = $cuenta2['FechaCaptura']?>
                                    <input class="form-control" type="text" value="<?php echo $fechaCaptura ?>" readonly>
                                    <?php } ?>
                                </div>
                                <div class="col-sm-4">
                                    <label>Fecha promesa:</label>
                                    <?php
                                if($cuenta2['FechaPromesa']<>NULL){
                                $fechaPromesa = $cuenta2['FechaPromesa']?>
                                    <input class="form-control" type="text" value="<?php echo $fechaPromesa ?>" readonly>
                                    <?php } ?>
                                </div>
                                <div class="col-sm-4">
                                    <label>FechaSincronizacion:</label>
                                    <?php
                                if($cuenta2['fechaSincronizacion']<>NULL){
                                $fechaSincronizacion = $cuenta2['fechaSincronizacion']?>
                                    <input class="form-control" type="text" value="<?php echo $fechaSincronizacion ?>" readonly>
                                    <?php } ?>
                                </div>
                                <div class="col-sm-2">
                                    <label>H.Vencimiento:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta2['HoraVencimiento'] ?>" readonly>
                                </div>
                                <div class="col-sm-2">
                                    <label>Latitud:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta2['Latitud'] ?>" readonly>
                                </div>
                                <div class="col-sm-2">
                                    <label>Longitud:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta2['Longitud'] ?>" readonly>
                                </div>
                                <div class="col-sm-2">
                                    <label>TelefonoLocal:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta2['TelefonoLocal'] ?>" readonly>
                                </div>
                                <div class="col-sm-2">
                                    <label>TelefonoCelular:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta2['TelefonoCelular'] ?>" readonly>
                                </div>
                                <div class="col-sm-2">
                                    <label>IdTipoServicio:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta2['idTipoServicio'] ?>" readonly>
                                </div>
                                <div class="col-sm-3">
                                    <label>IdEstatusToma:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta2['idEstatusToma'] ?>" readonly>
                                </div>
                                <div class="col-sm-3">
                                    <label>IdTipoToma:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta2['idTipoToma'] ?>" readonly>
                                </div>
                                <div class="col-sm-3">
                                    <label>IdAccion:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta2['idAccion'] ?>" readonly>
                                </div>
                                <div class="col-sm-3">
                                    <label>IdRS:</label>
                                    <input class="form-control" type="text" value="<?php echo $cuenta2['idRS'] ?>" readonly>
                                </div>
                             
                            </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <br>
    <div style="text-align:center;">
        <a href="../cambiarTarea/otraVista.php?cuenta=<?php echo $_GET['cuenta'] ?>&plz=<?php echo $_GET['plz'] ?>" class="btn btn-dark btn-sm"><i class="fas fa-times"></i> Regresar</a>
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

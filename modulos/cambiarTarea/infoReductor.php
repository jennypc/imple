<?php
require "../../acnxerdm/conect.php";

$query = "select * from RegistroReductoresClone";
$queryResult = sqlsrv_query($cnx, $query);
$cuenta = sqlsrv_fetch_array($queryResult);


$cuentaOriginal="SELECT * FROM RegistroReductores";
$cuentaOriginalResult=sqlsrv_query($cnx,$cuentaOriginal);
$cuentaOriginalR=sqlsrv_fetch_array($cuentaOriginalResult);

$cuenta2="SELECT * FROM RegistroReductoresClone";
$cuenta2Result=sqlsrv_query($cnx,$cuenta2);
$cuenta2R=sqlsrv_fetch_array($cuenta2Result);
   
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
                    <div class="form-row">
                        <div class="col-sm-3">
                            <label>Cuenta:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['Cuenta'] ?>" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label>Id tarea:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['idTarea'] ?>" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label>Id catalogo reductores:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['idCatalogoreductores'] ?>" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label>Lectura:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['lectura'] ?>" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label>Medidor:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['medidor'] ?>" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label>Reductor:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['reductor'] ?>" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label>Telefono:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['telefono'] ?>" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label>Contacto:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['contacto'] ?>" readonly>
                        </div>
                        <div class="col-sm-12">
                            <label>Observaciones:</label>
                            <input class="form-control" type="text" value="<?php echo utf8_encode($cuentaOriginalR['observaciones']) ?>" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label>Fecha de asignacion:</label>
                            <?php
                                if($cuentaOriginalR['fechaAsignacion']<>NULL){
                                $fechaAsignacion = $cuentaOriginalR['fechaAsignacion']->format('Y-m-d H:i:s'); ?>
                            <input class="form-control" type="text" value="<?php echo $fechaAsignacion ?>" readonly>
                            <?php } ?>
                        </div>
                        <div class="col-sm-3">
                            <label>Fecha de vencimiento:</label>
                            <?php
                                if($cuentaOriginalR['fechaVencimiento']<>NULL){
                                $fechaVencimiento = $cuentaOriginalR['fechaVencimiento']->format('Y-m-d H:i:s'); ?>
                            <input class="form-control" type="text" value="<?php echo $fechaVencimiento ?>" readonly>
                            <?php } ?>
                        </div>
                        <div class="col-sm-3">
                            <label>Fecha captura:</label>
                            <?php
                                if($cuentaOriginalR['fechaCaptura']<>NULL){
                                $fechaCaptura = $cuentaOriginalR['fechaCaptura']->format('Y-m-d H:i:s'); ?>
                            <input class="form-control" type="text" value="<?php echo $fechaCaptura ?>" readonly>
                            <?php } ?>
                        </div>
                        <div class="col-sm-3">
                            <label>Fecha promesa:</label>
                            <?php
                                if($cuentaOriginalR['FechaPromesaPago']<>NULL){
                                $fechaPromesa = $cuentaOriginalR['FechaPromesaPago']->format('Y-m-d H:i:s'); ?>
                            <input class="form-control" type="text" value="<?php echo $fechaPromesa ?>" readonly>
                            <?php } ?>
                        </div>
                        <div class="col-sm-3">
                            <label>FechaSincronizacion:</label>
                            <?php
                                if($cuentaOriginalR['fechaSincronizacion']<>NULL){
                                $fechaSincronizacion = $cuentaOriginalR['fechaSincronizacion']->format('Y-m-d H:i:s'); ?>
                            <input class="form-control" type="text" value="<?php echo $fechaSincronizacion ?>" readonly>
                            <?php } ?>
                        </div>
                        <div class="col-sm-3">
                            <label>Id descripccion tarea:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['iddescripciontarea'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>Latitud:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['Latitud'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>Longitud:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['Longitud'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>Folio SS:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['FolioSS'] ?>" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label>Id Asp User:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['IdAspUser'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>Id niple:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['idniple'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>Hora inicial:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['horainicial'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>Hora final:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['horafinal'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>IdTipoServicio:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['idTipoServicio'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>IdEstatusToma:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['idEstatusToma'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>IdTipoToma:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['idTipoToma'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>No cincho:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['noCincho'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>Id descripcion multa:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['idDescripcionMulta'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>Id detalle:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['idDetalle'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>idMedidorTapado:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['idMedidorTapado'] ?>" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label>Id tipo reductor:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['idTipoReductor'] ?>" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label>folioSelloCorte:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['folioSelloCorte'] ?>" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label>Resultado superviso:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['resultadoSuperviso'] ?>" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label>Id tipo corte:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['idTipoCorte'] ?>" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label>Descripcion toma directa:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['descripcionTomaDirecta'] ?>" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label>idEstatusRequerimiento:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['idEstatusRequerimiento'] ?>" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label>comentarioNoSuspendeServicio:</label>
                            <input class="form-control" type="text" value="<?php echo $cuentaOriginalR['comentarioNoSuspendeServicio'] ?>" readonly>
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
                    <div class="form-row">
                        <div class="col-sm-3">
                            <label>Cuenta:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['Cuenta'] ?>" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label>Id tarea:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['idTarea'] ?>" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label>Id catalogo reductores:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['idCatalogoreductores'] ?>" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label>Lectura:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['lectura'] ?>" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label>Medidor:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['medidor'] ?>" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label>Reductor:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['reductor'] ?>" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label>Telefono:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['telefono'] ?>" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label>Contacto:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['contacto'] ?>" readonly>
                        </div>
                        <div class="col-sm-12">
                            <label>Observaciones:</label>
                            <input class="form-control" type="text" value="<?php echo utf8_encode($cuenta['observaciones']) ?>" readonly>
                        </div>
                        
                    <div class="col-sm-3">
                        <label>Fecha de asignacion:</label>
                        <?php
                                if($cuenta['fechaAsignacion']<>NULL){
                                $fechaAsignacion = $cuenta['fechaAsignacion']?>
                        <input class="form-control" type="text" value="<?php echo $fechaAsignacion ?>" readonly>
                        <?php } ?>
                    </div>
                    <div class="col-sm-3">
                        <label>Fecha de vencimiento:</label>
                        <?php
                                if($cuenta['fechaVencimiento']<>NULL){
                              $fechaVencimiento = $cuenta['fechaVencimiento']?>
                        <input class="form-control" type="text" value="<?php echo $fechaVencimiento ?>" readonly>
                        <?php } ?>
                    </div>
                    <div class="col-sm-3">
                        <label>Fecha captura:</label>
                        <?php
                                if($cuenta['fechaCaptura']<>NULL){
                                $fechaCaptura = $cuenta['fechaCaptura']?>
                        <input class="form-control" type="text" value="<?php echo $fechaCaptura ?>" readonly>
                        <?php } ?>
                    </div>
                    <div class="col-sm-3">
                        <label>Fecha promesa:</label>
                        <?php
                                if($cuenta['FechaPromesaPago']<>NULL){
                                $fechaPromesa = $cuenta['FechaPromesaPago']?>
                        <input class="form-control" type="text" value="<?php echo $fechaPromesa ?>" readonly>
                        <?php } ?>
                    </div>
                    <div class="col-sm-3">
                        <label>FechaSincronizacion:</label>
                        <?php
                                if($cuenta['fechaSincronizacion']<>NULL){
                                $fechaSincronizacion = $cuenta['fechaSincronizacion']?>
                        <input class="form-control" type="text" value="<?php echo $fechaSincronizacion ?>" readonly>
                        <?php } ?>
                    </div>

                        <div class="col-sm-3">
                            <label>Id descripccion tarea:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['iddescripciontarea'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>Latitud:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['Latitud'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>Longitud:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['Longitud'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>Folio SS:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['FolioSS'] ?>" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label>Id Asp User:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['IdAspUser'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>Id niple:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['idniple'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>Hora inicial:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['horainicial'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>Hora final:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['horafinal'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>IdTipoServicio:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['idTipoServicio'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>IdEstatusToma:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['idEstatusToma'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>IdTipoToma:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['idTipoToma'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>No cincho:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['noCincho'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>Id descripcion multa:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['idDescripcionMulta'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>Id detalle:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['idDetalle'] ?>" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label>idMedidorTapado:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['idMedidorTapado'] ?>" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label>Id tipo reductor:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['idTipoReductor'] ?>" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label>folioSelloCorte:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['folioSelloCorte'] ?>" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label>Resultado superviso:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['resultadoSuperviso'] ?>" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label>Id tipo corte:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['idTipoCorte'] ?>" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label>Descripcion toma directa:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['descripcionTomaDirecta'] ?>" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label>idEstatusRequerimiento:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['idEstatusRequerimiento'] ?>" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label>comentarioNoSuspendeServicio:</label>
                            <input class="form-control" type="text" value="<?php echo $cuenta['comentarioNoSuspendeServicio'] ?>" readonly>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <br>
    <div style="text-align:center;">
        <a href="../cambiarTarea/cuentasModificadasReductor.php?cuenta=<?php echo $_GET['cuenta'] ?>&plz=<?php echo $_GET['plz'] ?>" class="btn btn-dark btn-sm"><i class="fas fa-times"></i> Regresar</a>
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

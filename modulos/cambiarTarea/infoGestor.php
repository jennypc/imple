<?php
require "../../acnxerdm/conect.php";

$query = "select * from RegistroGestorClone";
$queryResult = sqlsrv_query($cnx, $query);
$cuenta = sqlsrv_fetch_array($queryResult);


$cuentaOriginal="SELECT * FROM RegistroGestor";
$cuentaOriginalResult=sqlsrv_query($cnx,$cuentaOriginal);
$cuentaOriginalR=sqlsrv_fetch_array($cuentaOriginalResult);

$cuenta2="SELECT * FROM RegistroGestorClone";
$cuenta2Result=sqlsrv_query($cnx,$cuenta2);
$cuenta2R=sqlsrv_fetch_array($cuenta2Result);
   
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informacion Gestor</title>
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
                        <div class="col">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Cuenta: </label>
                            <input type="text" class="form-control" name="cuenta" value="<?php echo $cuentaOriginalR['Cuenta']?>" readonly>
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Tarea: </label>
                            <input type="text" class="form-control" name="idTarea" value="<?php echo $cuentaOriginalR['IdTarea']?>" readonly>
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Fecha de asignacion: </label>
                            <?php
                if($cuentaOriginalR['FechaAsignacion']<>NULL){
                $fechaultimo = $cuentaOriginalR['FechaAsignacion']->format('Y-m-d H:i:s'); ?>
                            <input type="text" class="form-control" name="fechaAsignacion" value="<?php echo $fechaultimo ?>" readonly>
                            <?php } else{ ?>
                            <input type="text" class="form-control" name="fechaAsignacion" placeholder="Fecha de ultimo pago" readonly>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Observaciones: </label>
                            <input type="text" class="form-control" name="observaciones" value="<?php echo utf8_encode($cuentaOriginalR['Observaciones'])?>" readonly>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Nombre: </label>
                            <input type="text" class="form-control" name="nombre" value="<?php echo $cuentaOriginalR['Nombre']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Telefono Local: </label>
                            <input type="text" class="form-control" name="telefonoLocal" value="<?php echo $cuentaOriginalR['TelefonoLocal']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Telefono Celular: </label>
                            <input type="text" class="form-control" name="telefonoCelular" value="<?php echo $cuentaOriginalR['TelefonoCelular']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Telefono Radio: </label>
                            <input type="text" class="form-control" name="telefonoRadio" value="<?php echo $cuentaOriginalR['TelefonoRadio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Fecha de captura: </label>
                            <?php
                            if($cuentaOriginalR['FechaCaptura']<>NULL){
                            $fechaultimo = $cuentaOriginalR['FechaCaptura']->format('Y-m-d H:i:s'); ?>
                            <input type="text" class="form-control" name="fechaCaptura" value="<?php echo $fechaultimo ?>" readonly>
                            <?php } else{ ?>
                            <input type="text" class="form-control" name="fechaCaptura" placeholder="Fecha de ultimo pago" readonly>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Correo electronico: </label>
                            <input type="text" class="form-control" name="correoElectronico" value="<?php echo $cuentaOriginalR['CorreoElectronico']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Fecha de Promesa: </label>
                            <?php
                            if($cuentaOriginalR['FechaPromesaPago']<>NULL){
                            $fechaultimo = $cuentaOriginalR['FechaPromesaPago']->format('Y-m-d H:i:s'); ?>
                            <input type="text" class="form-control" name="fechaPromesaPago" value="<?php echo $fechaultimo ?>" readonly>
                            <?php } else{ ?>
                            <input type="text" class="form-control" name="fechaPromesaPago" placeholder="Fecha de ultimo pago" readonly>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id Estatus: </label>
                            <input type="text" class="form-control" name="idEstatus" value="<?php echo $cuentaOriginalR['IdEstatus']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Calle: </label>
                            <input type="text" class="form-control" name="calle" value="<?php echo $cuentaOriginalR['Calle']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">NumExt: </label>
                            <input type="text" class="form-control" name="numExt" value="<?php echo $cuentaOriginalR['NumExt']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Num Int: </label>
                            <input type="text" class="form-control" name="numInt" value="<?php echo $cuentaOriginalR['NumInt']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Colonia: </label>
                            <input type="text" class="form-control" name="colonia" value="<?php echo $cuentaOriginalR['Colonia']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Poblacion: </label>
                            <input type="text" class="form-control" name="poblacion" value="<?php echo $cuentaOriginalR['Poblacion']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Codigo Postal: </label>
                            <input type="text" class="form-control" name="cp" value="<?php echo $cuentaOriginalR['CP']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Referencia: </label>
                            <input type="text" class="form-control" name="referencia" value="<?php echo $cuentaOriginalR['Referencia']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Entre calle 1: </label>
                            <input type="text" class="form-control" name="entreCalle1" value="<?php echo $cuentaOriginalR['EntreCalle1']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Entre calle 2: </label>
                            <input type="text" class="form-control" name="entreCalle2" value="<?php echo $cuentaOriginalR['EntreCalle2']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Con Datos: </label>
                            <input type="text" class="form-control" name="conDatos" value="<?php echo $cuentaOriginalR['ConDatos']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Latitud: </label>
                            <input type="text" class="form-control" name="latitud" value="<?php echo $cuentaOriginalR['Latitud']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Longitud: </label>
                            <input type="text" class="form-control" name="longitud" value="<?php echo $cuentaOriginalR['Longitud']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id Asp User: </label>
                            <input type="text" class="form-control" name="idAspUser" value="<?php echo $cuentaOriginalR['IdAspUser']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Con datos Validos: </label>
                            <input type="text" class="form-control" name="conDatosValidos" value="<?php echo $cuentaOriginalR['ConDatosValidos']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Fecha de Vencimiento: </label>
                            <?php
                            if($cuentaOriginalR['FechaVencimiento']<>NULL){
                            $fechaultimo = $cuentaOriginalR['FechaVencimiento']->format('Y-m-d H:i:s'); ?>
                            <input type="text" class="form-control" name="fechaVencimiento" value="<?php echo $fechaultimo ?>" readonly>
                            <?php } else{ ?>
                            <input type="text" class="form-control" name="fechaVencimento" placeholder="Fecha de ultimo pago" readonly>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Fecha de sincronizacion: </label>
                            <?php
                            if($cuentaOriginalR['fechaSincronizacion']<>NULL){
                            $fechaultimo = $cuentaOriginalR['fechaSincronizacion']->format('Y-m-d H:i:s'); ?>
                            <input type="text" class="form-control" name="fechaSincronizacion" value="<?php echo $fechaultimo ?>" readonly>
                            <?php } else{ ?>
                            <input type="text" class="form-control" name="fechaSincronizacion" readonly>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id tipo de servicio: </label>
                            <input type="text" class="form-control" name="idTipoServicio" value="<?php echo $cuentaOriginalR['idTipoServicio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id estatus toma: </label>
                            <input type="text" class="form-control" name="idEstatusToma" value="<?php echo $cuentaOriginalR['idEstatusToma']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id tipo toma: </label>
                            <input type="text" class="form-control" name="idTipoToma" value="<?php echo $cuentaOriginalR['idTipoToma']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Nombre Propietario: </label>
                            <input type="text" class="form-control" name="nombrePropietario" value="<?php echo $cuentaOriginalR['NombrePropietario']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Telefono Local Propietario: </label>
                            <input type="text" class="form-control" name="telefonoLocalPropietario" value="<?php echo $cuentaOriginalR['TelefonoLocalPropietario']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Telefono Celular Propietario: </label>
                            <input type="text" class="form-control" name="telefonoCelularPropietario" value="<?php echo $cuentaOriginalR['TelefonoCelularPropietario']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Telefono Radio Propietario: </label>
                            <input type="text" class="form-control" name="telefonoRadioPropietario" value="<?php echo $cuentaOriginalR['TelefonoRadioPropietario']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Correo Electronico Propietario: </label>
                            <input type="text" class="form-control" name="correoElectronicoPropietario" value="<?php echo $cuentaOriginalR['CorreoElectronicoPropietario']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Fecha Localizacion Propietario: </label>
                            <?php
                if($cuentaOriginalR['FechaLocalizacionPropietario']<>NULL){
                $fechaultimo = $cuentaOriginalR['FechaLocalizacionPropietario']->format('Y-m-d H:i:s'); ?>
                            <input type="text" class="form-control" name="fechaLocalizacionPropietario" value="<?php echo $fechaultimo ?>" readonly>
                            <?php } else{ ?>
                            <input type="text" class="form-control" name="fechaLocalizacionPropietario" readonly>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id Relacion Propietario: </label>
                            <input type="text" class="form-control" name="idRelacionPropietario" value="<?php echo $cuentaOriginalR['IdRelacionPropietario']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Motivo no pago: </label>
                            <input type="text" class="form-control" name="motivoNoPago" value="<?php echo utf8_encode($cuentaOriginalR['MotivoNoPago'])?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Cantidad Pago: </label>
                            <input type="text" class="form-control" name="CantidadPago" value="<?php echo $cuentaOriginalR['CantidadPago']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id Tipo deudor: </label>
                            <input type="text" class="form-control" name="idTipoDeudor" value="<?php echo $cuentaOriginalR['IdTipoDeudor']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Probabilidad Pago: </label>
                            <input type="text" class="form-control" name="probabilidadPago" value="<?php echo $cuentaOriginalR['ProbabilidadPago']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id Quejas y Reclamaciones : </label>
                            <input type="text" class="form-control" name="idsQuejasReclamaciones" value="<?php echo $cuentaOriginalR['IdsQuejasReclamaciones']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Otra queja o Reclamacion: </label>
                            <input type="text" class="form-control" name="otraQuejaReclamacion" value="<?php echo $cuentaOriginalR['OtraQuejaReclamacion']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Ids Expectativas Contribuyentes: </label>
                            <input type="text" class="form-control" name="idsExpectativasContribuyente" value="<?php echo $cuentaOriginalR['IdsExpectativasContribuyente']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Otra Expectativas Contribuyentes: </label>
                            <input type="text" class="form-control" name="otraExpectativaContribuyente" value="<?php echo $cuentaOriginalR['OtraExpectativaContribuyente']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Ids caracteristicas predio: </label>
                            <input type="text" class="form-control" name="idsCaracteristicasPredio" value="<?php echo $cuentaOriginalR['IdsCaracteristicasPredio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Otra caracteristicas predio: </label>
                            <input type="text" class="form-control" name="otraCaracteristicaPredio" value="<?php echo utf8_encode($cuentaOriginalR['OtraCaracteristicaPredio'])?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id accion sugerida: </label>
                            <input type="text" class="form-control" name="idAccionSugerida" value="<?php echo $cuentaOriginalR['IdAccionSugerida']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id uso suelo predio: </label>
                            <input type="text" class="form-control" name="idUsoSueloPredio" value="<?php echo $cuentaOriginalR['IdUsoSueloPredio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id Tipo Predio predio: </label>
                            <input type="text" class="form-control" name="idTipoPredioPredio" value="<?php echo $cuentaOriginalR['IdTipoPredioPredio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Calle Predio: </label>
                            <input type="text" class="form-control" name="callePredio" value="<?php echo $cuentaOriginalR['CallePredio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Num ext Predio: </label>
                            <input type="text" class="form-control" name="numExtPredio" value="<?php echo $cuentaOriginalR['NumExtPredio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Num int Predio: </label>
                            <input type="text" class="form-control" name="numIntPredio" value="<?php echo $cuentaOriginalR['NumIntPredio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Colonia Predio: </label>
                            <input type="text" class="form-control" name="coloniaPredio" value="<?php echo $cuentaOriginalR['ColoniaPredio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Poblacion Predio: </label>
                            <input type="text" class="form-control" name="poblacionPredio" value="<?php echo $cuentaOriginalR['PoblacionPredio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Codigo postal Predio: </label>
                            <input type="text" class="form-control" name="cpPredio" value="<?php echo $cuentaOriginalR['CPPredio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Entre calle 1 predio: </label>
                            <input type="text" class="form-control" name="entreCalle1Predio" value="<?php echo $cuentaOriginalR['EntreCalle1Predio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Entre calle 2 predio: </label>
                            <input type="text" class="form-control" name="entreCalle2Predio" value="<?php echo $cuentaOriginalR['EntreCalle2Predio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Manzana predio: </label>
                            <input type="text" class="form-control" name="manzanaPredio" value="<?php echo $cuentaOriginalR['ManzanaPredio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Lote predio: </label>
                            <input type="text" class="form-control" name="lotePredio" value="<?php echo $cuentaOriginalR['LotePredio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Manzana: </label>
                            <input type="text" class="form-control" name="manzana" value="<?php echo $cuentaOriginalR['Manzana']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Lote: </label>
                            <input type="text" class="form-control" name="lote" value="<?php echo $cuentaOriginalR['Lote']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Referenca Predio: </label>
                            <input type="text" class="form-control" name="referenciaPredio" value="<?php echo $cuentaOriginalR['ReferenciaPredio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Solucion planteada: </label>
                            <input type="text" class="form-control" name="solucionPlanteada" value="<?php echo $cuentaOriginalR['SolucionPlanteada']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Forma de pago: </label>
                            <input type="text" class="form-control" name="formaPago" value="<?php echo $cuentaOriginalR['FormaPago']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Observaciones gestor: </label>
                            <input type="text" class="form-control" name="observacionesGestor" value="<?php echo $cuentaOriginalR['ObservacionesGestor']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id motivo no pago: </label>
                            <input type="text" class="form-control" name="idMotivoNoPago" value="<?php echo $cuentaOriginalR['idmotivonopago']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id servicios motivo no pago: </label>
                            <input type="text" class="form-control" name="idServiciosMotivoNoPago" value="<?php echo $cuentaOriginalR['idserviciosmotivonopago']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Valido: </label>
                            <input type="text" class="form-control" name="valido" value="<?php echo $cuentaOriginalR['Valido']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Activo: </label>
                            <input type="text" class="form-control" name="activo" value="<?php echo $cuentaOriginalR['Activo']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Numero medidor: </label>
                            <input type="text" class="form-control" name="numeroMedidor" value="<?php echo $cuentaOriginalR['numeroMedidor']?>" readonly>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h5>Cambios Realizados</h5>
                <hr>
                <div>
                    <div class="form-row">
                        <div class="col">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Cuenta: </label>
                            <input type="text" class="form-control" name="cuenta" value="<?php echo $cuenta['Cuenta']?>" readonly>
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id Tarea: </label>
                            <input type="text" class="form-control" name="idTarea" value="<?php echo $cuenta['IdTarea']?>" readonly>
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Fecha de asignacion: </label>
                            <?php
                            if($cuenta['FechaAsignacion']<>NULL){
                            $fechaultimo = $cuenta['FechaAsignacion'] ?>
                            <input type="text" class="form-control" name="fechaAsignacion" value="<?php echo $fechaultimo ?>" readonly>
                            <?php } else{ ?>
                            <input type="text" class="form-control" name="fechaAsignacion" placeholder="Fecha de ultimo pago" readonly>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Observaciones: </label>
                            <input type="text" class="form-control" name="observaciones" value="<?php echo utf8_encode($cuenta['Observaciones'])?>" readonly>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Nombre: </label>
                            <input type="text" class="form-control" name="nombre" value="<?php echo $cuenta['Nombre']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Telefono Local: </label>
                            <input type="text" class="form-control" name="telefonoLocal" value="<?php echo $cuenta['TelefonoLocal']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Telefono Celular: </label>
                            <input type="text" class="form-control" name="telefonoCelular" value="<?php echo $cuenta['TelefonoCelular']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Telefono Radio: </label>
                            <input type="text" class="form-control" name="telefonoRadio" value="<?php echo $cuenta['TelefonoRadio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Fecha de captura: </label>
                            <?php
                            if($cuenta['FechaCaptura']<>NULL){
                            $fechaultimo = $cuenta['FechaCaptura'] ?>
                            <input type="text" class="form-control" name="fechaCaptura" value="<?php echo $fechaultimo ?>" readonly>
                            <?php } else{ ?>
                            <input type="text" class="form-control" name="fechaCaptura" placeholder="Fecha de ultimo pago" readonly>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Correo electronico: </label>
                            <input type="text" class="form-control" name="correoElectronico" value="<?php echo $cuenta['CorreoElectronico']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Fecha de Promesa: </label>
                            <?php
                            if($cuenta['FechaPromesaPago']<>NULL){
                            $fechaultimo = $cuenta['FechaPromesaPago']?>
                            <input type="text" class="form-control" name="fechaPromesaPago" value="<?php echo $fechaultimo ?>" readonly>
                            <?php } else{ ?>
                            <input type="text" class="form-control" name="fechaPromesaPago" placeholder="Fecha de ultimo pago" readonly>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id Estatus: </label>
                            <input type="text" class="form-control" name="idEstatus" value="<?php echo $cuenta['IdEstatus']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Calle: </label>
                            <input type="text" class="form-control" name="calle" value="<?php echo $cuenta['Calle']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">NumExt: </label>
                            <input type="text" class="form-control" name="numExt" value="<?php echo $cuenta['NumExt']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Num Int: </label>
                            <input type="text" class="form-control" name="numInt" value="<?php echo $cuenta['NumInt']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Colonia: </label>
                            <input type="text" class="form-control" name="colonia" value="<?php echo $cuenta['Colonia']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Poblacion: </label>
                            <input type="text" class="form-control" name="poblacion" value="<?php echo $cuenta['Poblacion']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Codigo Postal: </label>
                            <input type="text" class="form-control" name="cp" value="<?php echo $cuenta['CP']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Referencia: </label>
                            <input type="text" class="form-control" name="referencia" value="<?php echo $cuenta['Referencia']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Entre calle 1: </label>
                            <input type="text" class="form-control" name="entreCalle1" value="<?php echo $cuenta['EntreCalle1']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Entre calle 2: </label>
                            <input type="text" class="form-control" name="entreCalle2" value="<?php echo $cuenta['EntreCalle2']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Con Datos: </label>
                            <input type="text" class="form-control" name="conDatos" value="<?php echo $cuenta['ConDatos']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Latitud: </label>
                            <input type="text" class="form-control" name="latitud" value="<?php echo $cuenta['Latitud']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Longitud: </label>
                            <input type="text" class="form-control" name="longitud" value="<?php echo $cuenta['Longitud']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id Asp User: </label>
                            <input type="text" class="form-control" name="idAspUser" value="<?php echo $cuenta['IdAspUser']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Con datos Validos: </label>
                            <input type="text" class="form-control" name="conDatosValidos" value="<?php echo $cuenta['ConDatosValidos']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Fecha de Vencimiento: </label>
                            <?php
                            if($cuenta['FechaVencimiento']<>NULL){
                            $fechaultimo = $cuenta['FechaVencimiento']?>
                            <input type="text" class="form-control" name="fechaVencimiento" value="<?php echo $fechaultimo ?>" readonly>
                            <?php } else{ ?>
                            <input type="text" class="form-control" name="fechaVencimento" placeholder="Fecha de ultimo pago" readonly>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Fecha de sincronizacion: </label>
                            <?php
                            if($cuenta['fechaSincronizacion']<>NULL){
                            $fechaultimo = $cuenta['fechaSincronizacion']?>
                            <input type="text" class="form-control" name="fechaSincronizacion" value="<?php echo $fechaultimo ?>" readonly>
                            <?php } else{ ?>
                            <input type="text" class="form-control" name="fechaSincronizacion" readonly>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id tipo de servicio: </label>
                            <input type="text" class="form-control" name="idTipoServicio" value="<?php echo $cuenta['idTipoServicio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id estatus toma: </label>
                            <input type="text" class="form-control" name="idEstatusToma" value="<?php echo $cuenta['idEstatusToma']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id tipo toma: </label>
                            <input type="text" class="form-control" name="idTipoToma" value="<?php echo $cuenta['idTipoToma']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Nombre Propietario: </label>
                            <input type="text" class="form-control" name="nombrePropietario" value="<?php echo $cuenta['NombrePropietario']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Telefono Local Propietario: </label>
                            <input type="text" class="form-control" name="telefonoLocalPropietario" value="<?php echo $cuenta['TelefonoLocalPropietario']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Telefono Celular Propietario: </label>
                            <input type="text" class="form-control" name="telefonoCelularPropietario" value="<?php echo $cuenta['TelefonoCelularPropietario']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Telefono Radio Propietario: </label>
                            <input type="text" class="form-control" name="telefonoRadioPropietario" value="<?php echo $cuenta['TelefonoRadioPropietario']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Correo Electronico Propietario: </label>
                            <input type="text" class="form-control" name="correoElectronicoPropietario" value="<?php echo $cuenta['CorreoElectronicoPropietario']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Fecha Localizacion Propietario: </label>
                            <?php
                            if($cuenta['FechaLocalizacionPropietario']<>NULL){
                            $fechaultimo = $cuenta['FechaLocalizacionPropietario']?>
                            <input type="text" class="form-control" name="fechaLocalizacionPropietario" value="<?php echo $fechaultimo ?>" readonly>
                            <?php } else{ ?>
                            <input type="text" class="form-control" name="fechaLocalizacionPropietario" readonly>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id Relacion Propietario: </label>
                            <input type="text" class="form-control" name="idRelacionPropietario" value="<?php echo $cuenta['IdRelacionPropietario']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Motivo no pago: </label>
                            <input type="text" class="form-control" name="motivoNoPago" value="<?php echo utf8_encode($cuenta['MotivoNoPago'])?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Cantidad Pago: </label>
                            <input type="text" class="form-control" name="CantidadPago" value="<?php echo $cuenta['CantidadPago']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id Tipo deudor: </label>
                            <input type="text" class="form-control" name="idTipoDeudor" value="<?php echo $cuenta['IdTipoDeudor']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Probabilidad Pago: </label>
                            <input type="text" class="form-control" name="probabilidadPago" value="<?php echo $cuenta['ProbabilidadPago']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id Quejas y Reclamaciones : </label>
                            <input type="text" class="form-control" name="idsQuejasReclamaciones" value="<?php echo $cuenta['IdsQuejasReclamaciones']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Otra queja o Reclamacion: </label>
                            <input type="text" class="form-control" name="otraQuejaReclamacion" value="<?php echo $cuenta['OtraQuejaReclamacion']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Ids Expectativas Contribuyentes: </label>
                            <input type="text" class="form-control" name="idsExpectativasContribuyente" value="<?php echo $cuenta['IdsExpectativasContribuyente']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Otra Expectativas Contribuyentes: </label>
                            <input type="text" class="form-control" name="otraExpectativaContribuyente" value="<?php echo $cuenta['OtraExpectativaContribuyente']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Ids caracteristicas predio: </label>
                            <input type="text" class="form-control" name="idsCaracteristicasPredio" value="<?php echo $cuenta['IdsCaracteristicasPredio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Otra caracteristicas predio: </label>
                            <input type="text" class="form-control" name="otraCaracteristicaPredio" value="<?php echo utf8_encode($cuenta['OtraCaracteristicaPredio'])?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id accion sugerida: </label>
                            <input type="text" class="form-control" name="idAccionSugerida" value="<?php echo $cuenta['IdAccionSugerida']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id uso suelo predio: </label>
                            <input type="text" class="form-control" name="idUsoSueloPredio" value="<?php echo $cuenta['IdUsoSueloPredio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id Tipo Predio predio: </label>
                            <input type="text" class="form-control" name="idTipoPredioPredio" value="<?php echo $cuenta['IdTipoPredioPredio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Calle Predio: </label>
                            <input type="text" class="form-control" name="callePredio" value="<?php echo $cuenta['CallePredio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Num ext Predio: </label>
                            <input type="text" class="form-control" name="numExtPredio" value="<?php echo $cuenta['NumExtPredio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Num int Predio: </label>
                            <input type="text" class="form-control" name="numIntPredio" value="<?php echo $cuenta['NumIntPredio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Colonia Predio: </label>
                            <input type="text" class="form-control" name="coloniaPredio" value="<?php echo $cuenta['ColoniaPredio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Poblacion Predio: </label>
                            <input type="text" class="form-control" name="poblacionPredio" value="<?php echo $cuenta['PoblacionPredio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Codigo postal Predio: </label>
                            <input type="text" class="form-control" name="cpPredio" value="<?php echo $cuenta['CPPredio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Entre calle 1 predio: </label>
                            <input type="text" class="form-control" name="entreCalle1Predio" value="<?php echo $cuenta['EntreCalle1Predio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Entre calle 2 predio: </label>
                            <input type="text" class="form-control" name="entreCalle2Predio" value="<?php echo $cuenta['EntreCalle2Predio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2"> 
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Manzana predio: </label>
                            <input type="text" class="form-control" name="manzanaPredio" value="<?php echo $cuenta['ManzanaPredio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Lote predio: </label>
                            <input type="text" class="form-control" name="lotePredio" value="<?php echo $cuenta['LotePredio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Manzana: </label>
                            <input type="text" class="form-control" name="manzana" value="<?php echo $cuenta['Manzana']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Lote: </label>
                            <input type="text" class="form-control" name="lote" value="<?php echo $cuenta['Lote']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Referenca Predio: </label>
                            <input type="text" class="form-control" name="referenciaPredio" value="<?php echo $cuenta['ReferenciaPredio']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Solucion planteada: </label>
                            <input type="text" class="form-control" name="solucionPlanteada" value="<?php echo $cuenta['SolucionPlanteada']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Forma de pago: </label>
                            <input type="text" class="form-control" name="formaPago" value="<?php echo $cuenta['FormaPago']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Observaciones gestor: </label>
                            <input type="text" class="form-control" name="observacionesGestor" value="<?php echo $cuenta['ObservacionesGestor']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id motivo no pago: </label>
                            <input type="text" class="form-control" name="idMotivoNoPago" value="<?php echo $cuenta['idmotivonopago']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Id servicios motivo no pago: </label>
                            <input type="text" class="form-control" name="idServiciosMotivoNoPago" value="<?php echo $cuenta['idserviciosmotivonopago']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Valido: </label>
                            <input type="text" class="form-control" name="valido" value="<?php echo $cuenta['Valido']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Activo: </label>
                            <input type="text" class="form-control" name="activo" value="<?php echo $cuenta['Activo']?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form form-group">
                            <label for="exampleInputEmail1">Numero medidor: </label>
                            <input type="text" class="form-control" name="numeroMedidor" value="<?php echo $cuenta['numeroMedidor']?>" readonly>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <br>
    <div style="text-align:center;">
        <a href="../cambiarTarea/cuentaModificadaGestor.php?cuenta=<?php echo $_GET['cuenta'] ?>&plz=<?php echo $_GET['plz'] ?>" class="btn btn-dark btn-sm"><i class="fas fa-times"></i> Regresar</a>
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

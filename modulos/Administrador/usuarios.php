<?php
require "../../acnxerdm/cnx.php";


    if(isset ($_POST['add'])) {
		$nombre = ($_POST["nombre"]);
		$apellidoP = ($_POST["apellidoP"]);
        $apellidoM = ($_POST["apellidoM"]);
		$email = ($_POST["email"]);
        $contra = ($_POST["contraseña"]);
        
		$sql = "INSERT INTO userPrueba VALUES ('$nombre','$apellidoP','$apellidoM','$email','$contra');";
		$sqlResult =sqlsrv_query($cnx,$sql);
        
        if ($sqlResult){
             Header("Location: usuarios.php");
            
        }else{
            echo "no funciona ";
            if(!$sqlResult)die(print_r(sqlsrv_errors(), true));
        }
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nuevo Origen de Datos</title>
<link rel="icon" href="../icono/icon.png">
<!-- Bootstrap -->
<link rel="stylesheet" href="../css/bootstrap.css">
<link href="../fontawesome/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
<style>
  body {
        background-image: url(../img/back.jpg);
        background-repeat: repeat;
        background-size: 100%;
        background-attachment: fixed;
        overflow-x: hidden; /* ocultar scrolBar horizontal*/
    }
        body{
    font-family: sans-serif;
    font-style: normal;
    font-weight:bold;
    width: 100%;
    height: 100%;
    margin-top:-1%;
    padding-top:0px;
}
    .jumbotron {
        margin-top:0%;
        margin-bottom:0%;
        padding-top:3%;
        padding-bottom:2%;
}
    .padding {
        padding-right:35%;
        padding-left:35%;
    }
    .table{
        text-align: center;
    }
    </style>
<?php require "include/nav.php"; ?>
</head>
<body>
<div class="container">
    <h1 style="text-shadow: 1px 1px 2px #717171;">Usuarios</h1>
    <h4 style="text-shadow: 1px 1px 2px #717171;"><i class="fas fa-list"></i> Ingresa los datos</h4>
    <hr>

    <form class="row g-3" action="usuarios.php" method="POST">
         <div class="col-md-4">
            <label for="nombe" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" >
         </div>
         <div class="col-md-4">
            <label for="apellidop" class="form-label">Apellido paterno</label>
            <input type="text" name="apellidoP" id="apellidoP" class="form-control" >
         </div>
              <div class="col-md-4">
                <label for="apellidoM" class="form-label">Apellido materno</label>
                <input type="text" name="apellidoM" id="apellidoM"class="form-control">
              </div>
      <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" >
      </div>
      <div class="col-md-6">
        <label for="contraseña" class="form-label">Contraseña</label>
        <input type="password" name="contraseña" id="contraseña" class="form-control" >
      </div>
        <br><br><br><br>
        <select class="form-control">
          <label for="inputCity" class="form-label">Plaza</label>
          <option>Default select</option>
        </select>

        <br><br><br><br>
      <div class="col-12">
        <button type="submit" name="add" class="btn btn-primary">Aceptar</button>
      </div>
</form>
    </div>   
<br><br>
    
<?php 
require "include/footer.php";
    ?>
</body>
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/popper.min.js"></script>    
<script src="../js/bootstrap.js"></script> 
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
<script>
    function Confirmar(Mensaje){
        return (confirm(Mensaje))?true:false;
    }
</script>      
</html>
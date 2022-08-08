<?php
session_start();
if(isset($_SESSION['user'])){
require "../../acnxerdm/cnx.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Implementta - Inicio</title>
<link rel="icon" href="../icono/implementtaIcon.png">
<!-- Bootstrap -->
<link rel="stylesheet" href="../css/bootstrap.css">
<link href="../fontawesome/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-material-ui/material-ui.css" id="theme-styles">
<style>
  body {
        background-image: url(../img/back.jpg);
        background-repeat: repeat;
        background-size: 100%;
        background-attachment: fixed;
        overflow-x: hidden; /* ocultar scrolBar horizontal*/
}
    body {
    font-family: sans-serif;
    font-style: normal;
    font-weight:normal;
    width: 100%;
    height: 100%;
    margin-top:-1%;
    margin-bottom:0%;
    padding-top:0px;
}
    .jumbotron {
        margin-top:0%;
        margin-bottom:0%;
        padding-top:4%;
        padding-bottom:1%;
}
    .padding {
        padding-right:15%;
        padding-left:15%;
    }
</style>
<?php require "include/nav.php"; ?>
</head>
<body>
    
    

    
    
    
    
    
    
    
    
<br><br><br><br><br><br>
    
    <div class="container px-4">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3 ">
          <div style="text-align:center;">
        <a href="../aFichasImplementta/inicio.php" class="btn btn-primary btn-sm">Sistema de Fichas</a>
    </div>
     </div>
    </div>
    <div class="col">
      <div class="p-3 ">
        <div style="text-align:center;">
         <a href="../desasignacion/inicio.php" class="btn btn-primary btn-sm">Desasignaciones</a>
        </div> 
     </div>
    </div>
  </div>
</div>   
    <br><br><br><br><br><br>
    
    
</body>
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.js"></script>
<?php require "include/footer.php"; ?>
<?php } else{
    echo '<meta http-equiv="refresh" content="1,url=../../login.php">';
} ?>
</html>
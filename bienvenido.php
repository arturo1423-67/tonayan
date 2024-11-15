<?php

 session_start();

 if(!isset($_SESSION['usuario'])){
 echo '
 <script>
    alert("deves iniciar sesion");
     window.location ="../registro.php";
 </script>
 ';
 //header("location: registro.php");
 session_destroy();
 die();

 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenido</title>
</head>
<body>
    <h1>Bienvenido jaja</h1>
    <a href="php/cerrar_sesion.php">cerrar session</a>
</body>
</html>


<?php
 
    session_start();
    include 'conexion.php';
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'");

    if(mysqli_num_rows($validar_login) >0){
        $_SESSION['usuario'] = $correo;
        header("location:web/inicio.php");
        exit;
    }else{
        echo'<script>
        alert("usuario no existente, por favor verifique los datos introducidos");
         window.location ="../registro.php";
        </script>
        ';
        exit;
    }

?>
<?php
include 'conexion.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

//encriptamiento de contraseña
$contrasena = hash('sha512', $contrasena); 

$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)
        VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";

 //Verificador de correo duplicado
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo ='$correo' ");

    if(mysqli_num_rows($verificar_correo) >0){
        echo'
        <script>
        alert("Este correo ya esta registrado, intente con otro correo.");
        window.location ="d:\web\inicio.php"; 
        </script>
        ';
        exit();
    }

    //Verificar duplicado de usuario
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario ='$usuario' ");

    if(mysqli_num_rows($verificar_usuario) >0){
        echo'
        <script>
        alert("Este usuario ya esta registrado, intente con otro.");
        window.location ="../registro.php"; 
        </script>
        ';
        exit();
    }

 $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
              alert("Usuario almacenado exitosamente");
        window.location ="web/inicio.php";
         </script>
        ';
    }else{
        echo '
            <script>
              alert("Usuario no almecenado exitosamente, intentelo de nuevo");
        window.location ="../registro.php";
         </script>
        ';
    }



    mysqli_close($conexion);
?>
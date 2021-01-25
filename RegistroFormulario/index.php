<?php
   
//include 'bd/conexion.php';
require_once 'bd/conexion.php';
require_once '../includes/header.php';
require_once 'menu.php'; #checar
require_once 'formaregistro.php';

//Recibir los datos y almacenarlos en variables

$nombre_usuario     = $_POST['nombre_usuario'];
$email_usuario      = $_POST['email_usuario'];
$password_usuario   = $_POST['password_usuario'];
$rol_usuario        = 1;

       
        // Consulta para insertar
        $insertar   = "INSERT INTO usuario(nombre_usuario, email_usuario,
        password_usuario, rol_usuario) VALUES ('$nombre_usuario', '$email_usuario', '$password_usuario', '$rol_usuario')";

        $verificar_usuario = mysqli_query ($conexion, "SELECT * FROM usuario WHERE
        nombre_usuario = '$nombre_usuario' ");

        if(mysqli_num_rows($verificar_usuario) > 0){
           //echo 'El usuario ya está registrado';
            exit;
        }

        $verificar_correo = mysqli_query ($conexion, "SELECT * FROM usuario WHERE
        email_usuario = '$email_usuario' ");

        if(mysqli_num_rows($verificar_correo) > 0){
            echo 'Este correo ya está registrado';
            exit;
        }

        //Ejecutar consulta

        $resultado = mysqli_query($conexion, $insertar);

        if (!$resultado){
            echo 'Error al registrarse';
        } else {
            echo 'Usuario registrado exitosamente';
        }

        //Cerrar conexión
        mysqli_close($conexion);

        require_once 'formaregistro.php';
        require_once '../registroformulario/formafooter.php';
        require_once '../includes/footer.php';
    ?>
<?php

   session_start(); #Funcion que comienza la persistencia de datos

   #Verifico credenciales, sino lo regreso al login
   if (isset($_SESSION) && (isset($_SESSION['logueado']))==TRUE){
    header("Location: ../alu-main/index.php");
   }

   require_once '../includes/header.php';
   require_once 'menu.php';
 #isset es exite la función en este caso btnLogin dentro del arreglo get
       if(isset($_POST['btnLogin'])){   
           #El usuario envio el formulario
           require_once '../bd/conexion.php';

           $idalumno = $_POST['idalumno']; #Valor de la posición del arreglo asociativo (nombre de la caja)
           $password = $_POST['password'];

           $sqlSelect = "SELECT idalumno, nombre, apellidos, password, telefono, email
           FROM alumnos where idalumno = '$idalumno' and password = '$password' " ;

           $resultSet = $conn->query($sqlSelect);
           if ($resultSet-> num_rows > 0){
               #Procesar el registro 
               $row = $resultSet->fetch_assoc();
               $_SESSION['userId'] = $row['idalumno'];
               $_SESSION['userName'] = $row['apellidos'].' '.$row['nombre'];
               $_SESSION['logueado'] = TRUE;

               header("Location: ../alu-main/index.php");

               #echo $_SESSION['userName']; #Variable persistente la info se almacena en carpeta temp
               #permanece siempre y cuando el usuario no cierre su navegador en donde inicio la 
               #sesion

           } else{
               $errmensaje = "CREDENCIALES NO VÁLIDAS";
           }
       }
   require_once 'formalogin.php';
   #require_once '../formafooter.php';
   require_once '../includes/footer.php';
?>
<?php
     require_once '../includes/header.php';
     require_once '../includes/funciones.php';
     require_once 'menu.php';

     if(isset($_POST['btnInsertar'])){
         #EL USUARIO ENVIO EL FORMULARIO
         $idmateria = $_POST['idmateria'];
         $nombre = $_POST['nombre'];
         $creditos = $_POST['creditos'];
         $status = 1;

         //Prueba para checar la validación en el backend con funciones
         //$idmateria = '8JJ';
         //$nombre = 'PRUEBA DE DAT0S';
         $creditos = 7;

         #VALIDAR EN EL BACKEND
         if(validar_idmateria($idmateria)==TRUE){
            if(validar_nombre($nombre)==TRUE){
                 if(validar_creditos($creditos)==TRUE){
                    require_once '../bd/conexion.php';
                    $sqlInsert = "INSERT INTO materias(idmateria, nombre, creditos, statusmateria)
                    VALUES ('$idmateria', '$nombre', $creditos, $status)";
                    //echo $sqlInsert;
                         if ($conn->query($sqlInsert) === TRUE) {
                              header("Location: index.php");
                         } else {
                              $errmensaje = "ERROR DE DATOS, REGISTRO DUPLICADO";
                         }
                 }else{
                    $errmensaje = "ERROR EN EL NÚMERO DE CRÉDITOS DE LA MATERIA"; 
                 }

            }else{
               $errmensaje = "ERROR EN EL NOMBRE DE LA MATERIA";
            }
         }else{
             $errmensaje = "ERROR EN EL ID MATERIA, DEBE SER NÚMERO LETRA NÚMERO";
         }
      }
     require_once 'formainsertar.php';
     require_once '../includes/footer.php';
?>
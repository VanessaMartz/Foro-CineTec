<?php
   require_once '../includes/funciones.php';
   require_once '../includes/header.php';
   require_once 'menu.php';
   require_once '../bd/conexion.php';

   if(isset($_POST['btnModificar'])){
       #Cuando envía el formulario
       
       $idmateria = limpiar_input($_POST['idmateria']);
       $nombre = limpiar_input($_POST['nombre']);
       //$nombre = 'PROGRAMACIÓN WEB'; //prueba para checar si la validación funciona
       $creditos = limpiar_input($_POST['creditos']);

       #Validar en el backend
       $pattern = "/^[0-9][A-ZÑ][0-9]$/";
       if(preg_match($pattern, $idmateria)){
         $pattern = "/^[A-ZÑÁÉÍÓÚ ]{3,33}$/";
           if(preg_match($pattern, $nombre)){
                if($creditos >= 1 and $creditos <= 6){                                  
                        $sqlUpdate = "
                        UPDATE materias SET 
                            nombre = '$nombre',
                            creditos = $creditos
                        WHERE
                            idmateria = '$idmateria'
                        ";

                        $conn->query($sqlUpdate);
                        header("Location: index.php");

                 }else {
                     $errmensaje = "EL CRÉDITO ES INCORRECTO, ES DE 1 A 6 MÁXIMO";
                   }
                }else{
                    $errmensaje = "CARÁCTERES NO VÁLIDOS EN EL NOMBRE";
                   }
             }else{
        $errmensaje = "FORMATO NO VÁLIDO USE NÚMERO LETRA NÚMERO";
        }

   }else{
    #Primera vez
    $idmateria = $_GET['idmateria'];
    $sqlSelect = "SELECT idmateria, nombre, creditos FROM materias WHERE idmateria
    = '$idmateria'";

   
    $resulSet = $conn->query($sqlSelect);
    $row = $resulSet->fetch_assoc();
    #RECUPERO EL REGISTRO
    $idmateria = $row['idmateria'];
    $nombre = $row['nombre'];
    $creditos = $row['creditos'];
   }

   require_once 'formamodificar.php';

?>
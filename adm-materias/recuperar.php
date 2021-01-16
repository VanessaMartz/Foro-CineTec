<?php
     require_once '../includes/header.php';
     require_once '../bd/conexion.php';

     
        $idmateria = $_GET['idmateria'];
   
        $sqlUpdate = "
        UPDATE materias SET 
            statusmateria = 1
        WHERE
            idmateria = '$idmateria'
        ";
        
        $conn->query($sqlUpdate);
        header("Location: index.php");


?>
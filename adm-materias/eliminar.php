<?php
     require_once '../includes/header.php';
     require_once '../bd/conexion.php';

     $idmateria = $_GET['idmateria'];
    //  $sqlSelect = "SELECT idmateria, nombre, creditos, statusmateria FROM materias WHERE idmateria
    //  = '$idmateria'";

    //  $resulSet = $conn->query($sqlSelect);
    //  $row = $resulSet->fetch_assoc();

    //  $status = $row['statusmateria'];

    //  if($status == 1){
    //     $status = 0;
    //  } else {
    //     $status = 1;
    //  }

     $sqlUpdate = "
     UPDATE materias SET 
         statusmateria = 0 
     WHERE
         idmateria = '$idmateria'
    ";

    $conn->query($sqlUpdate);
    header("Location: index.php");


?>
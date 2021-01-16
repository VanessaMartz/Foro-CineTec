<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = ''; #no hay por ser academico
$dbdata = 'vanessadb';  #nombre de la base de datos

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbdata);
if($conn->connect_error){
    die('Error de conexión... Proceso cancelado');
}  

?> 
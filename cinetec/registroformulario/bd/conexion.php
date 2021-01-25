<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = ''; #No hay password por ser academico.
$dbdata = 'forpelis';


$conexion = mysqli_connect ($dbhost, $dbuser, $dbpass, $dbdata);

//$conexion  = mysqli_connect ("localhost", "root","","forpelis");
/*
if (!$conexion){
    echo 'Error al conectar a la base de datos';
}
else {
    echo 'Conectado a la base de datos';

}*/

$conexion = new mysqli ($dbhost, $dbuser, $dbpass, $dbdata);
if ($conexion->connect_error){
    die('Error de Conexión ... Cancelado proceso');
}   

?>

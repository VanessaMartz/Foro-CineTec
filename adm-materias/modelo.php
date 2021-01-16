<?php
   function getAllHtml(){
     require_once '../bd/conexion.php';

     $sqlSelect = 'SELECT idmateria, nombre, creditos, statusmateria FROM materias';
     $resultSet = $conn->query($sqlSelect);
     $tabla = "";
     $tabla = "<br><br>";
     $tabla .= "<table id='mitabla' class='table table-bordered table-striped'>";
     $tabla .= "<thead>";
     $tabla .= "<tr>";
     $tabla .= "<th> ID </th>";
     $tabla .= "<th> NOMBRE </th>";
     $tabla .= "<th> CREDITOS </th>";
     $tabla .= "<tH> PROCESOS </th>";
     $tabla .= "<th> STATUS </th>";
     $tabla .= "</tr>";
     $tabla .= "</thead>";
     $tabla .= "<tbody>";
     
     if($resultSet->num_rows > 0){
         #Procesar conjunto de registro
         while($row = $resultSet->fetch_assoc()){
             $idmateria = $row['idmateria'];
             $nombre = $row['nombre'];
             $creditos = $row['creditos'];
             $status = $row['statusmateria'];

             $tabla .= "<tr>";
             $tabla .= "<td> $idmateria </td>";
             $tabla .= "<td> $nombre </td>";
             $tabla .= "<td> $creditos </td>";
             $tabla .= 
             "<td>
                    <a href='modificar.php?idmateria=".$idmateria."'>
                     <i class='fa fa-pencil-square-o fa-2x'></i>
                    </a>
                    <a href='eliminar.php?idmateria=".$idmateria."'>
                     <i class='fa fa-trash fa-2x text-danger'></i>
                    </a>
                    <a href='recuperar.php?idmateria=".$idmateria."'>
                     <i class='fa fa-undo fa-2x text-success'></i>
                    </a>
              </tD>";
             $tabla .= "<td> $status </td>";
             $tabla .= "</tr>";
         }
     } else {
            $tabla .= "<tr>";
            $tabla .= "<td colspan='4'> NO HAY REGISTROS A MOSTRAR </td>";
            $tabla .= "</tr>";
     }
            $tabla .= "</tbody>";
            $tabla .= "</table>";

            return $tabla;
   }
?>

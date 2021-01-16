<?php

//FUNCION GENERAL QUE AYUDA A QUITAR CARÁCTERES PELIGROSOS QUE PUEDA CAPTURAR EL USUARIO
function limpiar_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//FUNCIÓN PARA VALIDAR LA CAJA DEL FORMULARIO
function validar_idmateria($data){
    $data = limpiar_input($data);
    $pattern="/^[0-9][A-ZÑ][0-9]$/";
    
    if(preg_match($pattern, $data)){
       return TRUE; 
    }else{
        return FALSE;
    }

    #TRUE SI HAY UN ERROR Y FALSE SI ESTÁ CORRECTO
    #TRUE SI ESTÁ OK Y FALSE SI ESTÁ INCORRECTO
}

//FUNCIÓN PARA VALIDAR EL NOMBRE DE LA MATERIA
function validar_nombre($data){
   $data = limpiar_input($data);
   $pattern = "/^[A-ZÑÁÉÍÓÚ ]{3,32}$/";
   if(preg_match($pattern, $data)){
       return TRUE;
   }else {
       return FALSE;    
   }
}

//FUNCIÓN PARA VALIDAR LOS CRÉDITOS DE LA MATERIA
function validar_creditos($data){
    //Sanatizar el dato, limpiarlo
    $data = limpiar_input($data);
    if($data>=1 and $data<=6){
        return TRUE;
    }else{
        return FALSE;
    }
}
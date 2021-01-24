<?php
    #Servidor       #Cliente
    $nombre_usuario     = $_GET ['nombre_usuario'];
    $email_usuario      = $_GET ['email_usuario'];
    $password_usuario  = $_GET ['password_usuario'];
    $rol_usuario        = $_GET ['rol_usuario'];
    
    #Validacion
    #Si Grabar BD
    #Regresar Formulario 

    echo "Los datos recibidos son: <br> 
    Nombre : $nombre_usuario<br> 
    Email : $email_usuario <br> 
    Password : $password_usuario <br> 
    Rol : $rol_usuario <br>";
    
    

?>
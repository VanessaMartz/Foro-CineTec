<?php
   
   session_start();
   #Verifico credenciales, sino lo regreso al login
   if (!(isset($_SESSION) && $_SESSION['logueado']==TRUE)){
    header("Location: ../adm-login/index.php");
}

   require_once '../includes/header.php';
   require_once 'menu.php';
   
   require_once 'formacontenido.php';
   require_once '../includes/footer.php';
?>
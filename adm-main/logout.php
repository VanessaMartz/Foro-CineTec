<?php
    session_start();
    session_destroy(); #Cancela la sesión
    header("Location: ../adm-login/index.php");

?>
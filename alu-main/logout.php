<?php
    session_start();
    session_destroy(); #Cancela la sesión
    header("Location: ../alu-login/index.php");

?>
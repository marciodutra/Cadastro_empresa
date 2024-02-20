<?php
    session_start();
    if(isset($_SESSION['usuario'])) {
       $_user =  $_SESSION['usuario'];
    } else {
        session_destroy();
        header("location: index.php?msg=Login ou senha inválidos.");
    }
?>
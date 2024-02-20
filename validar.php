<?php
    session_start();
    if(isset($_SESSION['user'])) {
       $_user =  $_SESSION['user'];
    } else {
        session_destroy();
        header("location: index.php?msg=Login ou senha inválidos.");
    }
?>
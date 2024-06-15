<?php
    require_once ("bd/bd_config.php");
    session_start();
    session_unset();
    session_destroy();
    header('Location: index.php');
?>
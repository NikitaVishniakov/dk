<?php
    session_start();
    unset($_SESSION['ID']);
    unset($_SESSION['control']);
    session_destroy();
    header("location:index.php");
?>
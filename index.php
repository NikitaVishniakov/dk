<?php
session_start();
if (isset($_SESSION['ID'])){
    header("location:lk.php");
}
else {
    header("location:login.php");
}
?>
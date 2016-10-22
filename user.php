<?php 
    if(isset($_GET['action'])) {
        if($_GET['action'] == "enable") {
            $action = 0;
        }
    } 
    if(isset($_GET['action'])) {
        if($_GET['action'] == "disable") {
            $action = 1;
        }
    }  
    if(isset($_GET['action'])) {
        if($_GET['action'] == "dk_disable") {
            $action = 2;
        }
    }
    include ("connection.php");
    $query = $link->query("UPDATE users SET disabled = ".$action." WHERE login = '".$_GET['id']."'");
    if ($query) {
        header("location:".$_SERVER['HTTP_REFERER']);
    }
    
?>
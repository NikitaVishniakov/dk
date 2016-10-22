<?php
    session_start();
    function pass_hash($password){
    $password = $password."b7g89";
    $password = hash('sha512', $password);
    $password = strrev($password);
    return $password;
    }
   function obrabotka($string) {
    //$string = mysqli_real_escape_string($string);
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
    }
    if(isset($_POST['_submit'])) {
        $login = $_POST['_username'];
        $pass = $_POST['_password'];
        $pass = obrabotka(pass_hash($pass));
        $login = obrabotka($login);
                include("connection.php");
                $query = $link->query("SELECT login FROM users WHERE login ='".$login."' AND pass = '".$pass."'");
                if ($query) {
                    $query = $query->fetch_array();
                    $_SESSION['ID'] = $query['login'];
                    unset($_SESSION['login_err']);
                    $login = $link->query("UPDATE users SET date='".date('y.m.d')."' WHERE login = '".$_SESSION['ID']."'");
                }
                else {
                    $_SESSION['login_err'] = "Неверно указан логин или пароль";
                }
       
                header("location: index.php");
    }
?>
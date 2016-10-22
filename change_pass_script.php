<?php
    if (isset($_POST['submit'])) {
        if (isset($_POST['password']) && isset($_POST['password_new'])  && isset($_POST['password_new_second'])) {
            include("form_control.php");
            $password = $_POST['password'];
            $password_show = $password_new = $_POST['password_new'];
            $password_check = $_POST['password_new_second'];
            if($password_new != $password_check) {
                $change_pass_err1 = "Введенные пароли не совпадают";
            }
            else {
                $password = pass_hash(obrabotka($password));
                $password_new = pass_hash(obrabotka($password_new));
                include("connection.php");

                $query = $link->query("SELECT pass FROM users WHERE login = '".$_SESSION['ID']."' AND pass = '".$password."' ");
                if (mysqli_num_rows($query) > 0) {
                    $query = $query->fetch_array();
                    $update = $link->query("UPDATE users SET pass = '".$password_new."'");
                    $pass_changed = 1;
                }
                else {
                    $change_pass_err1 = "Неверно введен пароль";
                }
            }
        }   
    }
?>

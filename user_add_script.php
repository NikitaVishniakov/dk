<?php 
    include("connection.php");
    include("form_control.php");
session_start();
   function if_set($field) {
            $var = " ";
            if(isset($_POST[$field])){
                $var = obrabotka($_POST[$field]);
            }
            return $var;
        }
    if(isset($_POST['submit'])) {
        $login = obrabotka($_POST['login']);
        $pass = pass_hash(obrabotka($_POST['password']));
        $pass_show = obrabotka($_POST['password']);
        $name = obrabotka($_POST['name']);
        $mail = " ";
        if(isset($_POST['mail'])){
            $mail = obrabotka($_POST['mail']);
        }
        $tel = " ";
        if(isset($_POST['tel'])) {
            $tel = obrabotka($tel);
        }
        $surname = " ";
        if(isset($_POST['surname'])){
            $surname = obrabotka($_POST['surname']);
        }
        $card_price = obrabotka($_POST['card_price']);
        $paytime = " ";
        if(isset($_POST['paytime'])){
            $paytime = obrabotka($_POST['paytime']);
        }
        $dop_tel = if_set("dop_tel");
        $site = if_set("site");
        $organization = if_set("organization");
        $city = if_set("city");
        $adres = if_set("adres");
        $comment = if_set("comment");
        $parent = $_SESSION['ID'];
        $referals = $link->query("INSERT INTO referals (id_agent, id_referal) VALUES ('".$parent."', '".$login."')");
        $cards = $link->query("INSERT INTO cards (id_user, card_price, payment_period) VALUES ('".$login."','".$card_price."','".$paytime."')");
        $insert = $link->query("INSERT INTO users (login, pass, name, surname, tel, mail) VALUES ('".$login."', '".$pass."', '".$name."', '".$surname."', '".$tel."', '".$mail."')");
        if($insert) {
            echo 1;
        }
        if($parent) {
            echo 2;
        }
        if($cards) {
            echo 3;
        }
            echo "new user".$login." with pass ".$pass_show." has been registered";
        }
    
?>
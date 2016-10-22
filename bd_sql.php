<?php
    if(isset($_GET['id'])  && $permission){
        $id = $_GET['id'];
    }
    else {
        $id = $_SESSION['ID'];
    }
    $query = $link->query("SELECT * FROM users WHERE login = '".$id."'");
    $query = $query->fetch_array();
    $login = $query['login'];
    $contract_num = $query['contract_number'];
    $name = $query['name'];
    $surname = $query['surname'];
    $tel = $query['tel'];
    $mail = $query['mail'];
    $site = $query['site'];
    $card_price = $query['card_price'];
        
?>
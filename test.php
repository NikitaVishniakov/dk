<?php 
include("connection.php");
//$query = $link->query("SELECT * FROM users r
//JOIN referals t ON (r.ID = t.ancestor)
//WHERE t.descendant = 'FA2222'"); 
function control($id, $getId) {
    if($id == $getId) {
        $permission = TRUE;
    }
    else {
    global $array;
    $array =[];
    $value = get_all_des($id, $array);
    $permission = false;
    foreach($value as $key) {

        if($key == $getId){
            $permission = true;

        }
    }
    }
   return $permission;     
}
function get_all_des($parent_id, $array) {
    global $link;
    global $array;
    $sql = ("SELECT * FROM users WHERE login IN (SELECT id_referal FROM referals WHERE id_agent = '".$parent_id."')");
    $result = $link->query($sql);    
    if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_array()) {
            array_push($array, $row['login']);
            get_all_des($row['login'], $array);             
        }       
    }   
    return $array;
}
function get_des($parent_id,$array){
    global $link;
    global $array;
    $sql = ("SELECT * FROM users WHERE login IN (SELECT id_referal FROM referals WHERE id_agent = '".$parent_id."')");
    $result = $link->query($sql);    
    if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_array()) {
            array_push($array, $row['login']);            
        }       
    }   
    return $array;
}

function ShowTreeUsers ($parent_id) {
    global $link;
    $sql = ("SELECT * FROM users WHERE login IN (SELECT id_referal FROM referals WHERE id_agent = '".$parent_id."')");
    $result = $link->query($sql);    
    if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_array()) {
            include("tables/users_table.php");
            ShowTreeUsers ($row['login']);             
        }       
    }   
}
function usersShow($parent_id, $array) {
global $link;
    global $array;
    $sql = ("SELECT * FROM users WHERE login IN (SELECT id_referal FROM referals WHERE id_agent = '".$parent_id."')");
    $result = $link->query($sql);    
    if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_array()) {
            array_push($array, $row['login']);
            get_all_des($row['login'], $array);             
        }       
    }   
    return $array;
}

function ShowUser ($parent_id) {
    global $link;
    $sql = ("SELECT * FROM users WHERE login = '".$parent_id."'");
    $result = $link->query($sql);    
    if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_array()) {
            include("tables/users_table.php");       
        }       
    }   
}
function ShowTreePaymentsFirst($id){
    global $link;
    $sql = ("SELECT * FROM payments WHERE login ='".$id."' AND query_type = 1");
    $result = $link->query($sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_array()) {
            include("tables/payments_table.php");
        }
    }
}
function ShowTreeBillsFirst($id){
    global $link;
    $sql = ("SELECT * FROM payments WHERE login ='".$id."' AND query_type = 0");
    $result = $link->query($sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_array()) {
            include("tables/bills_table.php");
        }
    }
}
function ShowTreePayments($parent_id) {
    global $link;
    $sql = ("SELECT * FROM payments WHERE login IN (SELECT id_referal FROM referals WHERE id_agent = '".$parent_id."') AND query_type = 1");
    $result = $link->query($sql);    
    if (mysqli_num_rows($result) > 0) {
    while ($row = $result->fetch_array()) {
        include("tables/payments_table.php");
        ShowTreePayments ($row['login']);             
        }       
    }   
}
function ShowTreeBills($parent_id){
    global $link;
    $sql = ("SELECT * FROM payments WHERE login IN (SELECT id_referal FROM referals WHERE id_agent = '".$parent_id."') AND query_type = 0");
    $result = $link->query($sql);    
    if (mysqli_num_rows($result) > 0) {
    while ($row = $result->fetch_array()) {
        include("tables/bills_table.php");
        ShowTreeBills($row['login']);             
        }       
    }   
}
    
function ShowTreeDkpFirst($id){
    global $link;
    $sql = ("SELECT id, documentDate, sellerFio, buyerFio, login FROM dkp WHERE login='{$id}'");
    $result = $link->query($sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_array()) {
             include("tables/dkp_table.php");
        }
    }
}
function ShowTreeDkp($parent_id) {
    global $link;
    $sql = ("SELECT id, documentDate, sellerFio, buyerFio, login FROM dkp WHERE login IN (SELECT id_referal FROM referals WHERE id_agent = '".$parent_id."')");
    $result = $link->query($sql);    
    if (mysqli_num_rows($result) > 0) {
    while ($row = $result->fetch_array()) {
        include("tables/dkp_table.php");
        ShowTreeDkp($row['login']);             
        }       
    }   
}
function actions($id, $action) {
       global $link;
        if($action == "confirm"){
            $confirm = $link->query("UPDATE payments SET status = 1 WHERE id = {$id}");
        }
        if($action == "remove"){
            $confirm = $link->query("UPDATE payments SET status = 0 WHERE id = {$id}");
        }
        if($_GET['action'] == "remove_row"){
            $update = $link->query("UPDATE dkp SET billed = 0 WHERE billed = {$id}");
            $remove = $link->query("DELETE FROM `payments` WHERE id = {$id}");
        }    
        if($_GET['action'] == "view"){
            $view = $link->query("SELECT * FROM `payments` WHERE id = {$id}");
            if (mysqli_num_rows($view) > 0) {
                $row =mysqli_fetch_array($view);
                    if($row['query_type'] == 0){
                        include("modals/modal_view_bill.php");
                    }
                    else {
                        include("modals/modal_payment.php");
                    }
                
            }
        }
}

function count_debt_dkp($id) {
    global $link;
       $dkp_debt = $link->query("SELECT COUNT(*) as dkp_debt FROM dkp WHERE billed = 0 AND login = '{$id}'");
                if(mysqli_num_rows($dkp_debt) > 0) {
                    $dkp_debt = mysqli_fetch_array($dkp_debt);
                    $dkp_debt = $dkp_debt['dkp_debt'];
                }
                else {
                    $dkp_debt = 0;
                }
        return $dkp_debt;
}
function count_billed_dkp($login) {
    global $link;
        $amount = $link->query("SELECT SUM(amount) as sa FROM payments WHERE status = 0 AND login = '{$login}'");
        if(mysqli_num_rows($amount) > 0) {
            $amount = mysqli_fetch_array($amount);
            $amount = $amount['sa'];
        }
        else  {
            $amount = 0;
        }
        return $amount;
}
    function bill_add($date, $login, $comment){
        global $link;
        global $error;
                    $count = $link->query("SELECT COUNT(*) as total FROM `dkp` WHERE `documentDate` <= '{$date}' AND `billed` = 0 AND `login` = '{$login}'");
                $count = mysqli_fetch_array($count); 
                if($count['total'] == 0) {
                    array_push($error,"<div class='error_block'><span style='font-weight: bold;'>У  пользователя {$login} нет ДКП                                             за данный период</span></div>");
                }
                else {
                $card= $link->query("SELECT card_price FROM users WHERE login = '{$login}'");
                $card = mysqli_fetch_array($card);
                $amount = intval($count['total']) * intval($card['card_price']);
                $insert = $link->query("INSERT INTO payments(`date`, `amount`, `quantity`, `query_type`, `comment`, `login`) VALUES                                             ('{$date}',{$amount},'{$count['total']}',0,'{$comment}','{$login}') ");
                $select = $link ->query("SELECT id FROM payments WHERE date = '{$date}' AND status = 0 AND login = '{$login}'");
                $select = mysqli_fetch_array($select);
                $update = $link->query("UPDATE dkp SET billed = '{$select['id']}' WHERE documentDate <= '{$date}' AND `login` = '{$login}'");
                }
        return $error;
    }


?>
 
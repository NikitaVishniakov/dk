<?php 
include("header.php");
include("test.php");
if(isset($_POST['submit'])){
    $select = $link->query("SELECT card_price FROM users WHERE login = '{$_SESSION['ID']}'");
    $select =mysqli_fetch_array($select);
    $date = date("d.m.Y");
    $dk = intval(intval($_POST['amount']) / intval($select['card_price']));
    $query = $link->query("INSERT INTO payments(date,amount,quantity,query_type,comment,login)VALUES('{$date}','{$_POST['amount']}','{$dk}', 1,'{$_POST['comment']}','{$_SESSION['ID']}')");
        if(!$query){
        $k = "INSERT INTO payment(date,amount,quantity,query_type,comment)VALUES('{$date}','{$_POST['amount']}','{$dk}', 1,'{$_POST['comment']}''{$_SESSION['ID']}')";
        echo $k;
    }
}
?>
<div class="modal-dialog modal-xs">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
                <h4 class="modal-title" id="myLargeModalLabel">Создание платежа</h4>
            </div>
            <div id="core_modal_body" class="modal-body"><style>
    .chosen-container {
        width: 200px !important;
        display: block;
        margin-bottom: 10px;
    }
</style>
<form class="ajax_form" method="post" action="#">
        
    <div id="transaction">
        <div class="form-group">             
            <label class="control-label required" for="transaction_amount">Сумма</label>
            <input type="text" id="transaction_amount" name="amount" required="required" class="form-control">
        </div>
        <div class="form-group">               
            <label class="control-label required" for="transaction_comment">Комментарий</label>
            <input type="text" id="transaction_comment" name="comment" required="required" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" id="transaction_save" name="submit" class="btn-success col-xs-12 col-md-12 col-sm-12 col-lg-12 btn">Создать платеж<?php echo $dk; ?></button>
            
            
        </div>
    </div>
    
</form>
<div style="clear: both;"></div>
</div>
        </div>
    </div>
<?php 
if(isset($_POST['submit'])) {
    if(isset($_POST['login'])) {
        $login = $_POST['login'];
    }
else {
    $login = $_SESSION['ID'];
}
    $quantity = 0;
    $chek_quantity = $link->query("SELECT quantity FROM payments WHERE login = '{$login}' AND query_type = 0");
    if (mysqli_num_rows($chek_quantity) > 0) {
        $chek_quantity = mysqli_fetch_array($chek_quantity);
        $quantity = $chek_quantity['quantity'];
    }
    $sql = "INSERT INTO payments(amount, date, quantity, query_type, comment, login) VALUES ('{$_POST['amount']}','{$_POST['date']}','{$quantity}',1,'{$_POST['comment']}', '{$login}')";
    $query = $link->query("INSERT INTO payments(amount, date, quantity, query_type, comment, login) VALUES ('{$_POST['amount']}','{$_POST['date']}','{$quantity}',1,'{$_POST['comment']}', '{$login}')");
}
?>
 <div class="modal-dialog modal-xs">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
                <h4 class="modal-title" id="myLargeModalLabel">Создание платежа</h4>
            </div>
            <div id="core_modal_body" class="modal-body">


<form class="" method="post" action="#">
        
    <div id="transaction">
        <div class="form-group">                
            <label class="control-label required" for="transaction_amount">Сумма</label>
            <input type="text" id="transaction_amount" name="amount" disabled required="required" class="form-control" value="">
        </div>
  
        <div class="form-group">                
            <label class="control-label required" for="transaction_comment">Комментарий</label>
            <input type="text" id="transaction_comment" name="comment" required="required" class="form-control">
           <input type="text" class="hidden" id="date_form" name="date" required="required" class="form-control" value="">
        </div>
        <div class="form-group">
            <button type="submit" id="transaction_save" name="submit" class="btn-success col-xs-12 col-md-12 col-sm-12 col-lg-12 btn">Создать платеж
            </button>
        </div>
    </div>
    
</form>
                    <div style="clear: both;"></div>
                    </div>
        </div>
    </div>
<script>
    $(document).ready(function(){
        var d = new Date();
    var month = d.getMonth()+1;
    var day = d.getDate();
    var output = ((''+day).length<2 ? '0' : '') + day + '.' +
    ((''+month).length<2 ? '0' : '') + month + '.' 
    + d.getFullYear();
        $('#date_form').val(output);
    });
</script>

<?php
global $array;
    $array =[];
    $error = [];
   
if(isset($_POST['submit'])){
        if($_POST['login'] == $_SESSION['ID']) {  
            foreach(get_des($_SESSION['ID'], $array) as $login) {
                $error = bill_add($_POST['date'], $login, $_POST['comment']);
            }
        }
        else {
            $error = bill_add($_POST['date'], $_POST['login'], $_POST['comment']);
        }
    unset($_POST);
}

?>        
     <div class="modal-dialog modal-xs">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
                <h4 class="modal-title" id="myLargeModalLabel">Создание счета</h4>
            </div>
            <div id="core_modal_body" class="modal-body"><style>
    .chosen-container {
        width: 200px !important;
        display: block;
        margin-bottom: 10px;
    }
</style>
    <h4>
        <span class="glyphicon glyphicon-info-sign"></span>
        Если выбран Ваш логин, то создадутся счета для всех Ваших пользователей.</h4>
<form class="" action="#" method="post">
        
    <div id="bill">
        <div class="form-group">   


        <label class="control-label required" for="bill_user">Пользователь:</label>
        <select name="login" class="form-control" >          
            <option value="<?php echo $_SESSION['ID']; ?>"> <?php echo $_SESSION['ID']; ?></option>           
            <?php
            $option = $link->query("SELECT id_referal FROM referals WHERE id_agent = '{$_SESSION['ID']}'"); 
                 if (mysqli_num_rows($option) > 0) {
                    while ($row = $option->fetch_array()){
                        echo "<option value='{$row['id_referal']}'>{$row['id_referal']}</option>";
                    }
                 }

            ?>
            </select>
            
        </div>
            <div class="form-group">                
                <label class="control-label required" for="bill_end">Конец периода:</label>
                <input type="text" id="date" name="date" required="required" class="form-control" value="">
            </div><div class="form-group">                
            <label class="control-label required" for="bill_comment">Комментарий</label>
            <input type="text" id="bill_comment" name="comment" required="required" class="form-control" value="комментарий"></div>
            <div class="form-group">
                <button type="submit" id="bill_save" name="submit" class="btn-success col-xs-12 col-md-12 col-sm-12 col-lg-12 btn">Создать счёт</button>
            </div>
        </div>
    
</form>

<div style="clear: both;"></div>
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
        $('#date').val(output);
    });
</script>
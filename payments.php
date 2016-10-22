<?php 
include("header.php");
include("test.php");
  if(!isset($_GET['id'])) {
        $_GET['id'] = $_SESSION['ID'];
    }
 if(isset($_GET['row_id']) && isset($_GET['action'])) {
   actions($_GET['row_id'],$_GET['action']);  
 }

$permission = control($_SESSION['ID'], $_GET['id']);
?>
<script>$('#manage').addClass('active');</script>
<div class="container">
      <div class="layout hidden"></div>
    <div class="modal-dialog modal-block payment_modal  hidden">
        <?php include("modals/modal_payment_all.php"); ?>
    </div>
    <style>
    .layout {
        position:fixed;
        top:0;
        left:0;
        background:rgba(0,0,0,0.5);
        height: 100%;
        width:100%;
        z-index:1030;
    }
    .modal-block{
        position:absolute;
        z-index:1040;
        left: 30%;
        top: 0;
    }
</style>
<script>
    $(document).ready(function(){        
        $('.payment_btn').click(function(){
            $('.payment_modal').removeClass('hidden');
            $('.layout').removeClass('hidden');
        });
        $('.close, .layout').click(function(){
            $('.modal-block').addClass('hidden');
            $('.layout').addClass('hidden');
        });  
    });
</script>
                <div class="page-header" style="margin: 30px 0 20px;"></div>
                <div class='row'>
                                        <div class="col-md-12">
        
    
    </div>
                                            <div class="col-md-10 col-md-offset-1">
        <div class="row" id="top_control_block">
    <a class="btn btn-info btn-sm col-md-1 col-xs-2 col-lg-1 col-sm-2"
       href="javascript:history.go(-1)">
        <span class="glyphicon glyphicon-arrow-left"></span>
        Назад
    </a>
         <?php include("search_block.php"); ?>

                <div class="col-md-4 col-lg-4 col-sm-4 hidden-xs pull-right text-right">
            <span id="header_name">
                Отзывы            </span>
                            <span id="question_mark" class="glyphicon glyphicon-question-sign"
                      title="Справка" data-toggle="modal"
                      data-target="#help_modal"></span>
                    </div>
        <div data-url="/to/ajax/gethelp" class="modal fade" id="help_modal" tabindex="-1" role="dialog" aria-labelledby="help_modalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="help_modalLabel">Справка по разделу</h4></div><div id="help_body" class="modal-body"></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button></div></div></div></div>
            </div>        <div class="row">
    <div class="panel panel-default">
    <ul id="form_type_change" class="nav nav-tabs" role="tablist">
        <li class=" pop "
            data-placement="top"
            data-content="Документы">
            <a href="dkp_list.php">
                    <span class="glyphicon glyphicon-arrow-left" title=""></span>
                <span class="hidden-xs"></span>
            </a>
        </li>
                <li class="pop "
            data-placement="top"
            data-content="">
                    <a href="users_list.php?id=<?php echo $_SESSION['ID']; ?>">
                    <span class="glyphicon glyphicon-user" title="Пользователи"></span>
                <span class="hidden-xs">Пользователи</span>
            </a>
        </li>                    <li class="pop "
            data-placement="top"
            data-content="">
                    <a href="feedback.php?id=<?php echo $_SESSION['ID']; ?>">
                    <span class="glyphicon glyphicon-comment" title="Отзывы"></span>
                <span class="hidden-xs">Отзывы</span>
            </a>
        </li>           
<!--
        <li class=" pop "
            data-placement="top"
            data-content="">
                    <a href="/to/mgm/news/list/FA1111">
                    <span class="glyphicon glyphicon-bell" title="Новости"></span>
                <span class="hidden-xs">Новости</span>
            </a>
        </li>                           
-->
        <li class="  pop "
            data-placement="top"
            data-content="">
                    <a href="bills.php?id=<?php echo $_SESSION['ID']; ?>">
                    <span class="glyphicon glyphicon-inbox" title="Счета"></span>
                <span class="hidden-xs">Счета</span>
            </a>
        </li>                        <li class="active  pop "
            data-placement="top"
            data-content="">
                    <a href="payments.php?id=<?php echo $_SESSION['ID']; ?>">
                    <span class="glyphicon glyphicon-usd" title="Платежи"></span>
                <span class="hidden-xs">Платежи</span>
            </a>
        </li>        
    </ul>                
                
<div class="panel-body">
    <div class="row collection_control">
        <div class="col-md-9 pull-left">
        </div>
        <div class="col-md-3">
            <a id="create_new_elem"
               class="btn btn-primary btn-sm pull-right payment_btn"
               style="margin-left: 2px;">
            <span class="glyphicon glyphicon-plus"></span>
            </a>
        </div>
    </div>                       
<style>
    #list_table thead th {
        vertical-align: middle;
        text-align: center;
    }
    #list_table tbody td {
        vertical-align: middle;
    }
</style>
    <?php 
    
    ?>
    <table id="list_table"
       class="table table-bordered table-hover table-condensed table-striped">
    <thead>
        <tr>
            <th class="col-md-2 col-lg-2 col-md-2 col-xs-2">
                <a href="/to/mgm/transactions/list/FA1111/1/username/up">
    Пользователь
</a>
            </th>
            <th class="col-md-2 col-lg-2 col-sm-2 hidden-xs" style="width: 90px;">
                <a href="/to/mgm/transactions/list/FA1111/1/createdAt/up">
    Дата
</a>
            </th>
            <th class="visible-xs col-xs-4" style="width: 90px;">
                <a href="/to/mgm/transactions/list/FA1111/1/createdAt/up">
    Дата
</a>
                <br>
                Комментарий
            </th>
            <th class="col-md-1 col-lg-1 col-sm-1 hidden-xs">
                <a href="/to/mgm/transactions/list/FA1111/1/amount/up">
    Сумма
</a>
            </th>
            <th class="col-md-1 col-lg-1 col-sm-1 hidden-xs">Кол-во ДК</th>
            <th class="visible-xs col-xs-3">
                <a href="/to/mgm/transactions/list/FA1111/1/amount/up">
    Сумма
</a>
                <br>
                Кол-во ДК
            </th>
            <th class="col-md-4 col-lg-4 col-sm-4 hidden-xs">Комментарий</th>
            <th class="col-md-2 col-sm-2 col-lg-2 col-xs-3">Действия</th>
        </tr>
    </thead>
    <tbody>
         <?php 
                    
                    ?>
     <?php 
if(isset($_GET['id']) && $permission){
        $parent_id = $_GET['id'];
    }
else {
    $parent_id = $_SESSION['ID'];
}
showTreePaymentsFirst($parent_id);
if (!isset($_GET['strict'])){
    showTreePayments($parent_id); 
}

?>
        
      </tbody>
</table>                              
                <div class="panel-body">
                                


<div class="row collection_control">
    <div class="col-md-9 pull-left">
            </div>
    <div class="col-md-3">
                                    <script>
                var popupNewElem = true;
            </script>
            </div>
</div>                        </div>
            </div>
        </div>
    </div>
                </div>
            </div>
            <div id="push"></div>
        </div>
        <script type="text/javascript" src="js/vendor.min.js"></script>
<script type="text/javascript" src="js/core.js"></script>        
        <div id="core_modal" class="modal fade  "
     tabindex="-1"
     role="dialog"
     aria-labelledby="modalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-xs">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
                <h4 class="modal-title" id="myLargeModalLabel">blank</h4>
            </div>
            <div id="core_modal_body" class="modal-body"></div>
        </div>
    </div>
</div>
<div class="modal-dialog modal-xs hidden">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
                <h4 class="modal-title" id="myLargeModalLabel">Отмена подтверждения платежа</h4>
            </div>
            <div id="core_modal_body" class="modal-body">
    <table class="table table-condensed table-hover table-bordered table-striped">
        <tbody><tr class="success">
           <?php include("user_block.php"); ?>
            <td style="text-align: center;">27-09-2016</td>
            <td style="text-align: right;">133</td>
            <td>
                Комментарий
            </td>
        </tr>
    </tbody></table>
<form class="ajax_form" data-url="/to/mgm/transactions/special/removeConfirm/6350">
        
    <div id="form"><div class="form-group"><button type="submit" id="form_save" name="form[save]" class="btn-warning col-xs-12 col-md-12 col-sm-12 col-lg-12 btn">Отменить подтверждение платежа</button></div><input type="hidden" id="form__token" name="form[_token]" class="form-control" value="YRkYAEpynn0IV3g6qtiOTq_uzjPsSpJPCtVboPGgakA"></div>
    
</form>
<div style="clear: both;"></div>
</div>
        </div>
    </div>
<?php 
include("flash_block.php");
?>
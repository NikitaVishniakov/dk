<?php
    include("header.php");
    include("test.php");
  if(!isset($_GET['id'])) {
        $_GET['id'] = $_SESSION['ID'];
    }
$permission = control($_SESSION['ID'], $_GET['id']);

?>
<script>$('#manage').addClass('active');</script>
<div class="container">
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
        Пользователи            </span>
                <span id="question_mark" class="glyphicon glyphicon-question-sign"
          title="Справка" data-toggle="modal"
          data-target="#help_modal"></span>
    </div>
        <div data-url="/to/ajax/gethelp" class="modal fade" id="help_modal" tabindex="-1" role="dialog" aria-labelledby="help_modalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="help_modalLabel">Справка по разделу</h4></div><div id="help_body" class="modal-body"></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button></div></div></div></div>
        </div>        
<div class="row">
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
                <li class="active pop "
            data-placement="top"
            data-content="">
                    <a href="users_list.php?id=<?php echo $_SESSION['ID']; ?>">
                    <span class="glyphicon glyphicon-user" title="Пользователи"></span>
                <span class="hidden-xs">Пользователи</span>
            </a>
        </li>                    <li class=" pop "
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
        <li class=" pop "
            data-placement="top"
            data-content="">
                    <a href="bills.php?id=<?php echo $_SESSION['ID']; ?>">
                    <span class="glyphicon glyphicon-inbox" title="Счета"></span>
                <span class="hidden-xs">Счета</span>
            </a>
        </li>                        <li class=" pop "
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
               class="btn btn-primary btn-sm pull-right "
               href="users_add.php"
               style="margin-left: 2px;">
            <span class="glyphicon glyphicon-plus"></span>
            </a>
            <button type="button"
            class="btn btn-primary btn-sm pull-right switch_disabled pop"
            data-url=""
            data-placement="top"
            data-content="Переключить отображение/скрытие отключенных пользователей">
                Скрыть
            </button>
        </div>
    </div> 
    <script>
        $(document).ready(function(){
        $('.switch_disabled').click(function(){
            $('.dis1, .dis2').toggleClass('hidden');
        })
        });
    </script>
<style>
    #list_table thead th {
        vertical-align: middle;
        text-align: center;
    }
    #list_table tbody td {
        vertical-align: middle;
    }
</style>
    
       
                             <table id="list_table"
        class="table table-bordered table-hover table-condensed table-striped">
    <thead>
        <tr>
            <th>
                <a href="users_list.php">
    Логин
</a>
            </th>
            <th>Имя/Телефон/
                <a href="users_list.php?order=expert">
    Эксперт
</a>
                /
                <a href="users_list.php?order=city">
    Город
</a>
                /
                <a href="users_list.php?order=debt">
    Долг
</a>
            </th>
            <th class="hidden-xs">
                <a href="users_list.php?order=price">
    Цена
</a>
            </th>
            <th class="hidden-xs">
                <a href="users_list.php?order=login">
    Вход
</a>
/
                <br>
                <a href="users_list.php?order=created">
    Создан
</a>
            </th>
            <th>Действия</th>
        </tr>
    </thead>
<tbody>
<?php
if(isset($_GET['id']) && $permission){
        $parent_id = $_GET['id'];
    }
else {
    $parent_id = $_SESSION['ID'];
}
if(isset($_GET['strict'])) {
    showUser($_GET['id']);
}
else{
    showTreeUsers($parent_id);
}?>
    </tbody>
</table>   

                </div>
            </div>
        </div>
    </div>
                </div>
            </div>
            <div id="push"></div>
        </div>
                
        <script type="text/javascript" src="js/vendor.min.js"></script>
<script type="text/javascript" src="js/core.js"></script>        
        <div id="core_modal" class="modal fade"
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
        <?php 
include("flash_block.php");
?>
<?php
    include("header.php");
    include("test.php");
if(!isset($_GET['id'])) {
        $_GET['id'] = $_SESSION['ID'];
    }
$permission = control($_SESSION['ID'], $_GET['id']);
?>
<script>$('#docs').addClass('active');</script>
<div class="container">
                <div class="page-header" style="margin: 30px 0 20px;"></div>
                <div class='row'>
<!--
                                        <div class="col-md-12">
        
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-muted">
        <div class="panel-heading" role="tab" id="headingMsg_79" style="padding: 5px 15px;">
            <h4 class="panel-title">
                <a data-toggle="collapse"
                   data-parent="#accordion"
                   href="#collapse_79"
                   aria-expanded="true"
                   aria-controls="collapse_79"
                   style="display: block;">
                    Заголовок новости 1
                </a>
            </h4>
        </div>
        <div id="collapse_79"
             class="panel-collapse collapse"
             role="tabpanel"
             aria-labelledby="headingMsg_79">
            <div class="panel-body">
                <h4 class="text-muted">
                                            Текст новости 1<br>
                                    </h4>
            </div>
        </div>
    </div>
</div>
    </div>
-->
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
                ДКП            </span>
                            <span id="question_mark" class="glyphicon glyphicon-question-sign"
                      title="Справка" data-toggle="modal"
                      data-target="#help_modal"></span>
                    </div>
        <div data-url="/to/ajax/gethelp" class="modal fade" id="help_modal" tabindex="-1" role="dialog" aria-labelledby="help_modalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="help_modalLabel">Справка по разделу</h4></div><div id="help_body" class="modal-body"></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button></div></div></div></div>
            </div>        <div class="row">
            <div class="panel panel-default">
                        <ul id="form_type_change" class="nav nav-tabs" role="tablist">
      <li class="active pop "
    data-placement="top"
    data-content="">
            <a href="dkp_list.php">
            <span class="glyphicon glyphicon-list-alt" title="ДКП"></span>
        <span class="hidden-xs">ДКП</span>
    </a>
</li>                            
<!--
                            <li class=" pop "
    data-placement="top"
    data-content="">
            <a href="org_list.php">
            <span class="glyphicon glyphicon-list-alt" title="Юр. договор"></span>
        <span class="hidden-xs">Юр. договор</span>
    </a>
</li>                
-->
        <li class=" pop pull-right"
    data-placement="top"
    data-content="Управление">
            <a href="users_list.php">
            <span class="glyphicon glyphicon-arrow-right" title=""></span>
        <span class="hidden-xs"></span>
    </a>
</li>    </ul>                <div class="panel-body">
                                


<div class="row collection_control">
    <div class="col-md-9 pull-left">
            </div>
    <div class="col-md-3">
                    <a id="create_new_elem"
               class="btn btn-primary btn-sm pull-right "
               href="add_dkp.php"
               style="margin-left: 2px;"
               >
                <span class="glyphicon glyphicon-plus"></span>
            </a>
                            </div>
</div>                        <table class="table table-hover table-striped table-bordered table-condensed">
    <thead>
    <tr>
        <th class="text-center">№пп</th>
        <th class="text-center">Дата</th>
        <th class="text-center">Создатель</th>
        <th class="text-center">Стороны</th>
        <th class="text-center">Действия</th>
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
    showTreeDkpFirst($_GET['id']);
}
else{
    showTreeDkpFirst($parent_id);
    showTreeDkp($parent_id);
}
        ?>
        

        </tbody>
</table>                                </div>
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
<?php
    include("header.php");
    include("change_pass_script.php");
?>
<div class="container">
                <div class="page-header" style="margin: 30px 0 20px;"></div>
                <div class='row'>

                                            <div class="col-md-10 col-md-offset-1">
        <div class="row" id="top_control_block">
    <a class="btn btn-info btn-sm col-md-1 col-xs-2 col-lg-1 col-sm-2"
       href="javascript:history.go(-1)">
        <span class="glyphicon glyphicon-arrow-left"></span>
        Назад
    </a>
                <div class="col-md-4 col-lg-4 col-sm-4 hidden-xs pull-right text-right">
            <span id="header_name">
                Изменить пароль            </span>
                            <span id="question_mark" class="glyphicon glyphicon-question-sign"
                      title="Справка" data-toggle="modal"
                      data-target="#help_modal"></span>
                    </div>
        <div data-url="/to/ajax/gethelp" class="modal fade" id="help_modal" tabindex="-1" role="dialog" aria-labelledby="help_modalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="help_modalLabel">Справка по разделу</h4></div><div id="help_body" class="modal-body"></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button></div></div></div></div>
            </div>        <div class="row">
            <div class="panel panel-default">
                                <div class="panel-body">
                                                                            <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
            <?php if(isset($pass_changed)) { ?>
                        <span id="header_name">
                Пароль успешно изменен         </span>
            <p> Ваш новый пароль  -  <?php echo $password_show; ?></p>
             <?php } else {?> <form action="#"  method="POST" class="fos_user_change_password">
                <div class='form-group'>
                    <p style="color:red"><?php if (isset($change_pass_err1)){echo $change_pass_err1;};?></p>
                                    <label for="password" class="required">Текущий пароль:</label>
                    <input type="password" id="password" name="password" required="required" class="form-control" tabindex="1" autofocus="1" />
                        
                </div>
                <div class='form-group'>
                                    <label for="password_new" class="required">Новый пароль:</label>
                    <input type="password" id="password_new" name="password_new" required="required" class="form-control" tabindex="2" />
                        
                </div>
                <div class='form-group'>
                                    <label for="password_new_second" class="required">Подтвердите пароль:</label>
                    <input type="password" id="password_new_second" name="password_new_second" required="required" class="form-control" tabindex="3" />
                        
                </div>
                <input type="hidden" id="fos_user_change_password_form__token" name="fos_user_change_password_form[_token]" value="cm94ZT9JEMrejt6NC2iU_r6Ct-7wDC_5cUsVOtnOrzY" />
                <div>
                    <input class="btn btn-primary" name="submit" type="submit" value="Изменить пароль" tabindex="4">
                    <a href="index.php" class="btn btn-default pull-right">Отмена</a>
                </div>
            </form>
            <?php }; ?>
        </div>
    </div>
                                                            </div>
            </div>
        </div>
    </div>
                </div>
            </div>
            <div id="push"></div>
        </div>
                
        <script type="text/javascript" src="/bundles/webtocore/js/vendor.min.js"></script>
<script type="text/javascript" src="/bundles/webtocore/js/core.js"></script>        
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
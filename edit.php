       <?php include("header.php");
     include("test.php");
  if(!isset($_GET['id'])) {
        $_GET['id'] = $_SESSION['ID'];
    }
    $permission = control($_SESSION['ID'], $_GET['id']);

        include("bd_sql.php");
       ?>
<div class="container">
                <div class="page-header" style="margin: 30px 0 20px;"></div>
                <div class='row'>
                                        <div class="col-md-12">
        
    
    </div>
                                                <div class="col-md-10 col-md-offset-1">
                <style>
        h4 {
            color: white;
            padding: 5px 10px;
        }
        div.form-group>input,
        input[type='submit'],
        a.break_link,
        .panel,
        textarea,
        .expert_form_btn {
            font-size: 110% !important;
            border-radius: 2px !important;
        }

        select.form-control {
            font-size: 110% !important;
            border-radius: 2px !important;
            -webkit-appearance: none;
            -webkit-border-radius: 2px;
            padding: 0 12px;
        }

        .field_type_changer,
        #user_form_phone,
        .input_phone {
            border-bottom-right-radius: 2px !important;
            border-top-right-radius: 2px !important;
            font-size: 110% !important;
        }
        #open_experts, #add_phone {
            border-bottom-right-radius: 2px !important;
            border-top-right-radius: 2px !important;
        }

        #user_form_plainPassword,
        .phone_prefix {
            border-bottom-left-radius: 2px !important;
            border-top-left-radius: 2px !important;
            font-size: 110% !important;
        }
        .chosen-container-single .chosen-single {
            height: 34px;
            line-height: 34px;
            border-radius: 2px !important;
        }
    </style>

    <form name="user_form" method="post" action="">
        
    <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <h4 class="bg-primary" style="margin-top: 0;">Логин и пароль:</h4>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                                                            <label>Логин:</label>
                                <input class="form-control"
                                       type="text"
                                       value="<?php echo $login;?>"
                                       disabled="disabled"
                                       title="Нельзя изменить логин пользователя">
                                                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class='form-group'>
                                            <label for="user_form_plainPassword">Пароль:</label>
                            <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Для Вашего удобства, пароль не скрыт." data-html="false"></span>                            <input type="text" id="user_form_plainPassword" name="user_form[plainPassword]" class="form-control" autocomplete="off" />
                                
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="bg-primary">Настройки станции технического осмотра:</h4>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class='form-group'>
                            <div id="user_expert_block"
                                 data-url="/to/user/ajax/experttable/FA2222">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="bg-primary">Личные данные пользователя:</h4>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class='form-group'>
                                            <label for="user_form_firstname" class="required">Имя:</label>
                            <input type="text" id="user_form_firstname" name="user_form[firstname]" required="required" class="form-control" value="<?php echo $name;?>" />
                                
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class='form-group'>
                                            <label for="user_form_email">Почта:</label>
                            <input type="email" id="user_form_email" name="user_form[email]" class="form-control" autocomplete="off" value="<?php echo $mail;?>" />
                                
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class='form-group'>
                                            <label for="user_form_phone">Телефон:</label>
                            <div class="input-group">
                                <div class="input-group-addon phone_prefix">+7</div>
                                <input type="text" id="user_form_phone" name="user_form[phone]" class="form-control" value="<?php echo substr($tel,2, 10);?>" />
                            </div>
                                
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="bg-primary">
                Дополнительные данные:
                <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Поля в этом разделе не обязательны для заполнения. Но многие из них отображаются в списке пользователей, а также открывают дополнительные возможности." data-html="false"></span>            </h4>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class='form-group'>
                                            <label for="user_form_lastname">Фамилия:</label>
                            <input type="text" id="user_form_lastname" name="user_form[lastname]" class="form-control" value="<?php echo $surname;?>" />
                                
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class='form-group'>
                                            <label for="user_form_cardPrice" class="required">Цена карты:</label>
                            <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Цена карты, не может быть меньше, чем у вас. Иначе будет выставленна цена как у вас." data-html="false"></span>                            <input type="text" id="user_form_cardPrice" name="user_form[cardPrice]" required="required" class="form-control" autocomplete="off" value="133" />
                                
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class='form-group'>
                                            <label for="user_form_additionalInfo_payPeriod">Период оплаты:</label>
                            <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Если параметр установлен, пользователю будут автоматически выставляться счета в зависимости от периода: 1 раз в неделю - по понедельникам, 2 раза в месяц - 1-15 и 16-30 числа месяца, 1 раз в месяц - 1 числа каждого месяца. Если пользователю ранее не выставлялись счета, счёт будет выставлен с даты первой зарегистрированной ДК." data-html="false"></span>                            <select id="user_form_additionalInfo_payPeriod" name="user_form[additionalInfo][payPeriod]" class="form-control">            <option value="" ></option>            <option value="week" >Раз в неделю</option>            <option value="2week"  selected="selected">2 раза в месяц</option>            <option value="month" >1 раз в месяц</option></select>
                                
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="dop_phones" class="col-md-6">
                                                                                                                                                <div class=form-group>
                                    <label for='user_form_additionalInfo_dopPhones_1'>Доп.телефон:</label>
                                    <div class="input-group">
                                        <div class="input-group-addon phone_prefix">+7</div>
                                        <input class='form-control input_phone additionalInfo_dopPhones'
                                               id='user_form_additionalInfo_dopPhones_1'
                                               name='user_form_additionalInfo_dopPhones[1]'
                                               value="">
                                                                                    <span class="input-group-btn">
                                                <button id="add_phone"
                                                        class="btn btn-default"
                                                        type="button">
                                                    <span class="glyphicon glyphicon-plus-sign"></span>
                                                </button>
                                            </span>
                                                                            </div>
                                </div>
                                                        <script>
                                var num = 1;
                            </script>
                                            </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class='form-group'>
                                            <label for="user_form_additionalInfo_url">Сайт:</label>
                            <input type="text" id="user_form_additionalInfo_url" name="user_form[additionalInfo][url]" class="form-control" value="Сайт" />
                                
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class='form-group'>
                                            <label for="user_form_additionalInfo_company">Организация:</label>
                            <input type="text" id="user_form_additionalInfo_company" name="user_form[additionalInfo][company]" class="form-control" value="Организация" />
                                
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class='form-group'>
                                            <label for="user_form_additionalInfo_city">Город:</label>
                            <input type="text" id="user_form_additionalInfo_city" name="user_form[additionalInfo][city]" class="form-control" value="Город" />
                                
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class='form-group'>
                                            <label for="user_form_additionalInfo_address">Адрес:</label>
                            <input type="text" id="user_form_additionalInfo_address" name="user_form[additionalInfo][address]" class="form-control" value="Адрес" />
                                
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class='form-group'>
                                            <label for="user_form_biography">Комментарий</label>
                            <textarea id="user_form_biography" name="user_form[biography]" class="form-control">Комментарий</textarea>
                                
                        </div>
                    </div>
                                    </div>

                <div class="row">
                    <div class="col-md-12">
                                                    <input class='btn btn-primary' type="submit" name="submit" value="Сохранить изменения">
                                                <a href="/to/mgm/users/list"
                           class="btn btn-default pull-right break_link">
                            Отмена
                        </a>
                    </div>
                </div>
                <input type="hidden" id="user_form__token" name="user_form[_token]" value="AsFPMSXchPMcJaDe-wS8SC3-mUhp1nSnqTpbbIgdFBk" />
            </div>
        </div>
    </div>
    </form>
        </div>
                    </div>
            </div>
            <div id="push"></div>
        </div>
                
        <script type="text/javascript" src="js/vendor.min.js"></script>
<script type="text/javascript" src="js/core.js"></script>            <script>
        $(document).on("ready", function() {
            System.userForm.ptoFormUrl = "/to/user/ajax/experttable/FA2222";
            System.userForm.loadPtoData();
            $("#user_form_capability")
                .chosen({
                    no_results_text: "возможность не найдена!",
                    allow_single_deselect: true,
                    width: "100%"
                });
        });
    </script>

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
       <?php include("flash_block.php");
       ?>
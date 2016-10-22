<?php
    session_start();
  if (!isset($_SESSION['ID'])){
    header("location:login.php");
}

?>

                                
                                                                                    <!DOCTYPE html>
    <html lang="RU-ru">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
                    eaisto.online
                --
                    Создание ДК
    </title>

                                
                
    <style>
        body {
            background-image: url("img/bg.png");
        }
    </style>
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/core.css">
        <link rel="icon" type="image/x-icon" href="img/favicon.png" />
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

</head>
    <body>
        <div id="wrap">
                                        <style>
                                        #navbar_logo:before {
        background-image: url("img/logo_back.png");
    }
</style>
<div class="navbar navbar-default navbar-fixed-top" style="background-color: rgba(248, 248, 248, 0.92);">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand pull-right hidden-sm hidden-md hidden-lg" href="/to/faq">
                <span class="glyphicon glyphicon-question-sign"></span>
            </a> -->
            <a id="navbar_logo" class="navbar-brand" href="/">
                                                            <img id="navbar_logo_front" class="desaturate" src="img/logo_front.png">
                                                </a>
        </div>
        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-left">
                        <li class="" id="docs">
                            <a href="dkp_list.php">
                                Документы
                            </a>
                        </li>
                                        <li id="manage" class="">
                        <a href="users_list.php">
                            Управление
                        </a>
                    </li>
                                            <!-- <li class="hidden-xs ">
                            <a href="/to/faq" title="Инструкция">
                                <span class="glyphicon glyphicon-question-sign"></span>
                            </a>
                        </li> -->
                                    </ul>
                <ul class="nav navbar-nav navbar-right">
                                                                    <li class="">
                <a href="lk.php"
                   title="Перейти в личный кабинет">
                    <span class="label label-info"><?php echo $_SESSION['ID'];?></span>
                </a>
            </li>
                            <li>
                               
                    <a id="system_exit"
                       title="Выход">
                        <span class="hidden-xs glyphicon glyphicon-log-out"></span>
                        <span class="visible-xs">Выход</span>
                    </a>
                                    
                </li>
                            <div data-url="" class="modal fade" id="logout_modal" tabindex="-1" role="dialog" aria-labelledby="logout_modalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="logout_modalLabel">Выход из системы</h4></div><div id="logout_body" class="modal-body"></div></div></div></div>              </ul>
                    </div>
    </div>
</div>
            <style>
    .exit-modal{
        z-index:1040;
        position: fixed;
        left:27%;
        top:10%;
    }
    .layout {
        position:fixed;
        top:0;
        left:0;
        background:rgba(0,0,0,0.5);
        height: 100%;
        width:100%;
        z-index:1030;
    }
</style>
<script>
    $(document).ready(function(){
        $('#system_exit').click(function(){
            $('.exit-modal').removeClass('hidden');
            $('.layout').removeClass('hidden');
        });
        $('.close, .layout').click(function(){
            $('.exit-modal').addClass('hidden');
            $('.layout').addClass('hidden');
        });
    });
</script>
            <div class="layout hidden">
    </div>
<div class="modal-dialog exit-modal hidden">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="logout_modalLabel">Выход из системы</h4>
        </div>
        <div id="logout_body" class="modal-body">
            <div id="logout_btn_place">
    <h4 style="margin: 10px 0;">Вы действительно хотите выйти из системы?</h4>
    <a class="btn btn-success col-md-3 col-sm-3 col-xs-3" href="exit.php">
        Да, выйти
    </a>
   
    <button id="redbtn" class="btn btn-danger col-md-5 col-sm-5 col-xs-5 pull-right" style="cursor: pointer;">
        Заблокировать <span class="hidden-xs">аккаунт *</span>
    </button>
                 <a class="btn btn-default col-md-3 close col-sm-3 col-xs-3" data-dismiss="modal" style="margin-right: 15px;">
        Отмена
    </a>
    <span class="col-md-5 col-md-offset-7 col-sm-5 col-sm-offset-7 col-xs-5 col-xs-offset-7" style="font-size: 70%;">
        * Доступ можно будет восстановить, позвонив в службу технической поддержки.
    </span>
</div>
            
<div id="redbtn_timer_place" class="hidden">
    <h4 style="margin: 10px 0;" class="text-danger">Аккаунт будет ЗАБЛОКИРОВАН!</h4>
    <button class="btn btn-default col-md-5"><span id="redbtn_timer"></span></button>
    <button class="btn btn-danger col-md-5 pull-right" id="redbtn_timer_disable" data-dismiss="modal">
        ОТМЕНИТЬ
    </button>
</div>
<div style="clear: both;">
            </div>
        </div>
    </div>
</div>
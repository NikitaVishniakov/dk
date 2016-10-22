     <?php
    include("header.php");
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
        
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="layout hidden"></div>
            <div class="modal-block bill_modal hidden">
                <?php include("modals/modal_bill.php"); ?>
            </div>
            <div class="modal-block station_modal hidden">
                 <div class="modal-dialog modal-xs">
  <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
                <h4 class="modal-title" id="myLargeModalLabel">Изменение ПТО</h4>
            </div>
          <div id="core_modal_body" class="modal-body">
                <?php include("modals/modal_station.php"); ?>
                   </div>
                     </div>
    </div>
            </div>
             <div class="modal-block payment_modal hidden">
                <?php include("modals/modal_payment.php"); ?>
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
        left: 20%
    }
</style>
<script>
    $(document).ready(function(){
        $('.bill_btn').click(function(){
            $('.bill_modal').removeClass('hidden');
            $('.layout').removeClass('hidden'); 
        });
        
        $('.payment_btn').click(function(){
            $('.payment_modal').removeClass('hidden');
            $('.layout').removeClass('hidden');
        });
        $('.station_btn').click(function(){
            $('.station_modal').removeClass('hidden');
            $('.layout').removeClass('hidden');
        });
        $('.close, .layout, .close_btn').click(function(){
            $('.modal-block').addClass('hidden');
            $('.layout').addClass('hidden');
        });
    });
</script>
<!--
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
-->
</div>
    </div>
                                            <style>
        .lk_btn {
            margin: 0 0 3px 0;
        }
    </style>
    <div class="row">
        <div class="col-md-7 col-lg-7 col-sm-6 col-xs-12">
            <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Информация</h3>
  </div>
  <div class="panel-body lk_first_line_">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
        <table class="table table-bordered table-condensed table-striped table-hover">
          <tr>
            <td class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
              Цена карты:
            </td>
            <td class="col-md-6 col-lg-6 col-sm-6 col-xs-6 text-right">
              <b>
            <?php echo $card_price;?>
                <span class="glyphicon glyphicon-flash"></span>
              </b>
            </td>
          </tr>
          <!-- <tr>
            <td class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
              Баланс:
            </td>
            <td class="col-md-6 col-lg-6 col-sm-6 col-xs-6 text-right">
              <b>
          0
          <span class="glyphicon glyphicon-flash"></span>
        </b>
      </td>
    </tr> -->
          <tr>
            <td>
              Задолженность
                              <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-html="true"></span>                      
<!--                 data-content="&lt;table style=&#039;margin-buttom: -20px;&#039; class=&#039;table table-condensed table-striped&#039;&gt;&lt;tr&gt;&lt;td class=&#039;text-right&#039;&gt;до 27-09:&lt;/td&gt;&lt;td class=&#039;text-right&#039;&gt; &lt;b&gt;-2 ДК&lt;/b&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=&#039;text-right&#039;&gt;после 27-09:&lt;/td&gt;&lt;td class=&#039;text-right&#039;&gt; &lt;b&gt;0 ДК&lt;/b&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=&#039;text-right col-md-6&#039;&gt;итог:&lt;/td&gt;&lt;td class=&#039;text-right&#039;&gt; &lt;b&gt;-2 ДК&lt;/b&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;"-->
           
              </td>
              
            <td class="text-right">
              <b>
                                <?php 
              echo count_debt_dkp($_GET['id'])
                ?>
                                    <span>ДКП</span>
                  </b>
                </td>
              </tr>
            </table>
          </div>
          <?php 
                if(isset($_GET['id']) && $_GET['id'] != $_SESSION['ID']){
                    }
                    else {
                    ?>
                      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <a class="btn btn-sm col-md-12 col-lg-12 col-sm-12 col-xs-12 lk_btn btn-info"
                   href="add_dkp.php">
                  Создать ДКП
                </a>
            </div>
        <?php }  
          
        ?>
                  </div>
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
            
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                          <a class="btn btn-sm col-md-12 col-lg-12 col-sm-12 col-xs-12 lk_btn btn-primary"
                 href="dkp_list.php<?php echo "?id=".$login;?>">
                Список ДКП
              </a>
                        <a class="btn btn-sm col-md-12 col-lg-12 col-sm-12 col-xs-12 lk_btn btn-primary"
               href="users_list.php<?php echo "?id=".$login; ?>">
              Список пользователей
            </a>
          </div>
        </div>
      </div>
    </div>                            <div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Мой кошелёк</h3>
    </div>
    <a href="#" class="how_to_pay ajax_action pull-right"
        data-url="/to/mgm/pay_variant/special/howToInfo/4021">
        <span class="glyphicon glyphicon-arrow-right" style="color: #36DE36;"></span>
        <span style="color: #ffffff;">как оплатить</span>
        <span style="color: #ffffff;" class="glyphicon glyphicon-question-sign"></span>
    </a>
            <?php
            if(isset($_GET['id']) && $_GET['id'] == $_SESSION['ID']){
             $id = $_SESSION['ID'];

            }
            if(isset($_GET['id']) && $_GET['id'] != $_SESSION['ID'] && $permission){
                $id = $_GET['id'];
            }
            else {
                 $id = $_SESSION['ID'];
            }
            $has_parent = $link->query("SELECT id_referal FROM referals WHERE id_referal = '".$id."'");
                if(mysqli_num_rows($has_parent) == 0) {
                  
                }
            
                        ?>
            <div class="panel-body lk_second_line">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <table class="table table-bordered table-condensed table-striped table-hover">
                    <tbody><tr id="need_to_pay" class="ajax_action pop" data-placement="bottom" data-content="Показать информацию о задолженности" data-url="/lk/user/account/fillup-text/FA1111" style="cursor: pointer;">
                               <?php 
    $my_debt = $link->query("SELECT SUM(amount) as total from payments where login = (SELECT id_agent FROM referals WHERE id_referal                ='{$_GET['id']}')");
    $my_debt = mysqli_fetch_array($my_debt);
    if (intval($my_debt['total']) < 1) {
        $echo_debt = 0;
        $class = "";
    }
    else {
        $echo_debt = $my_debt['total'];
        $class = "danger";
    }
                                    ?> 
                                                    <td class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                                Долг по выставленным счетам:
                            </td>
                            <td style="border-right: none;" class="<?php echo $class; ?>">
                                <span class="glyphicon glyphicon-ok-sign">
                                </span>
                            </td>
                            <td class="text-right <?php echo $class; ?>" style="border-left: none;">
                                <b>
                                    <?php echo $echo_debt; ?>
                                        <span class="glyphicon glyphicon-flash"></span>
                                                                    </b>
                            </td>
                                            </tr>
                                            <tr>
                            <td>
                                Мне должны:
                            </td>
                            <td style="border-right: none;">

                            </td>
                            <td class="text-right" style="border-left: none;">
                                <b>
<?php 
    $debt = $link->query("SELECT SUM(amount) as total from payments where login IN (SELECT id_referal FROM referals WHERE id_agent           ='{$_GET['id']}')");                                       
    $debt = mysqli_fetch_array($debt);
    if (intval($debt['total']) < 1) {
        echo 0;
        $class = "";
    }
    else {
        echo $debt['total'];
    }
?>
                                    <span class="glyphicon glyphicon-flash"></span>
                                </b>
                            </td>
                        </tr>
                                    </tbody></table>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <button class="btn btn-sm col-md-12 col-lg-12 col-sm-12 col-xs-12 lk_btn btn-info ajax_action pop" data-url="/to/mgm/transactions/special/history/1711" data-placement="top" data-content="Показать историю своих платежей" data-original-title="" title="">
                    История платежей
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <button class="btn btn-sm col-md-12 col-lg-12 col-sm-12 col-xs-12 lk_btn btn-primary payment_btn"  data-content="Ввести информацию о своём платеже" >
                    Подтвердить платеж
                </button>
                                    <button class="btn btn-sm col-md-12 col-lg-12 col-sm-12 col-xs-12 bill_btn btn-success">
                        Выставить счёт
                    </button>
                            </div>
        </div>
    </div>
<!--
    <div class="panel-body lk_second_line">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <table class="table table-bordered table-condensed table-striped table-hover">
                                                                                                                                                                                        <tr class="ajax_action pop" data-url="/to/mgm/bills/show/3282" style="cursor: pointer;"
                                data-placement="top"
                                data-content="счёт  не оплачен, подробнее...">
                                <td class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                                    Счёт с 26-09 по 26-09:
                                </td>
                                <td class="danger text-danger"
                                    style="border-right: none; width: 20px;">
                                    <span class="glyphicon glyphicon-remove-sign"></span>
                                </td>
                                                                    <td class="text-right danger"
                                        style="border-left: none;">
                                        <b>
                                            -266
                                            <span class="glyphicon glyphicon-flash"></span>
                                        </b>
                                    </td>
                                                            </tr>
                                                                                        </table>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <button class="btn btn-sm col-md-12 col-lg-12 col-sm-12 col-xs-12 lk_btn btn-info ajax_action pop"
                        data-url="/to/mgm/transactions/special/history/4021"
                        data-placement="top"
                        data-content="Показать историю своих платежей">
                    История платежей
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <table class="table table-bordered table-condensed table-striped table-hover">
                    <tr id="need_to_pay" class="ajax_action pop"
                        data-placement="bottom"
                        data-content="Показать информацию о задолженности"
                        data-url="lk.php"
                        style="cursor: pointer;">
                                                    <td class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                                Долг по выставленным счетам:
                            </td>
                            <td style="border-right: none;">
                                <span class="glyphicon glyphicon-remove-sign">
                                </span>
                            </td>
                            <td class="text-right" style="border-left: none;">
                                <b>
                                                                            0
                                        <span class="glyphicon glyphicon-flash"></span>
                                                                    </b>
                            </td>
                                            </tr>
                                    </table>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <button class="btn btn-sm col-md-12 col-lg-12 col-sm-12 col-xs-12 lk_btn btn-primary ajax_action pop"
                        data-url="create.json"
                        data-placement="top"
                        data-content="Ввести информацию о своём платеже">
                    Подтвердить платеж
                </button>
                            </div>
        </div>
    </div>        
-->
<!--            end of paymentss block-->
</div>        </div>
        <div class="col-md-5 col-lg-5 col-sm-6 col-xs-12">
            <div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Контакты</h3>
    </div>
    <div id="contacts_body" class="panel-body">
                    <b>Контакты брокера:</b><br>
                        <div style="margin: 0 10px;">
                                <a href="mailto:FA1111@MAIL.RU">
                    FA1111@MAIL.RU
                </a>
            </div>
                            </div>
    </div>            <div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Новости портала</h3>
    </div>
    <div id="news_body" class="panel-body lk_second_line">
                <p>
    </p>    </div>
</div>        </div>
    </div>
    <div class="row">
        <div class="col-md-7 col-lg-7 col-sm-6 col-xs-12">
            <div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Личные данные</h3>
    </div>
    <div class="panel-body lk_third_line">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <table class="table table-bordered table-condensed table-striped table-hover">
                    <tr>
                        <td class="col-md-4 col-sm-6 col-xs-6 col-lg-4">
                            Логин:
                        </td>
                        <td class="text-right">
                            <b>
                                    <span><?php echo $login; ?></span>
                            </b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Договор №:
                        </td>
                        <td class="text-right">
                            <b>
                                <?php echo $contract_num; ?>
                            </b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Имя:
                        </td>
                        <td class="text-right">
                            <b id="user_fio_place">
                                <?php echo $name; ?>
                            </b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Телефон:
                        </td>
                        <td class="text-right">
                            <b id="user_phone_place">
                                <?php echo $tel; ?>
                            </b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Почта:
                        </td>
                        <td class="text-right">
                            <b id="user_email_place">
                                <a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a>
                            </b>
                        </td>
                    </tr
                                        <tr>
                        <td>
                            Документы ПТО:
                        </td>
                        <td class="text-right">
                            <b id="user_pto_place">
                                 
                 <?php 
  $sto = $link->query("SELECT name FROM stations WHERE id = (SELECT id_station FROM users WHERE login = '{$login}')");
          if(mysqli_num_rows($sto) > 0 ){
            $sto = mysqli_fetch_array($sto);
            echo $sto['name'];
    }
    else {
        echo "Не указано";
    }
?>
                            </b>
                        </td>
                    </tr>
                                    </table>
            </div>
            <?php 
                if(isset($_GET['id']) && $_GET['id'] != $_SESSION['ID']){
                        
                    }
                    else {
                    ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                            <a class="btn-info btn btn-sm col-md-12 col-lg-12 col-sm-12 col-xs-12 lk_btn ajax_action"
                           href="edit.php">
                            Изменить мои данные
                        </a>
                                        <button class="btn-primary btn btn-sm col-md-12 col-lg-12 col-sm-12 col-xs-12 lk_btn station_btn"
                            data-content="Изменить свой ПТО или ПТО своих подчиненных.">
                        Настройки станции
                    </button>
                    <a class="btn-primary btn btn-sm col-md-12 col-lg-12 col-sm-12 col-xs-12 lk_btn"
                            href="change_pass.php">
                        Поменять пароль
                    </a>
                                        
                                                </div>
            <?php } ?>
        </div>
    </div>
</div>        </div>
        <div class="col-md-5 col-lg-5 col-sm-6 col-xs-12">
            <div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Обратная связь
        <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Оставляйте здесь отзывы, предложения и замечания. Мы внимательно следим за Вашими коментариями и стараемся сделать работу в системе максимально комфортной для Вас." data-html="false"></span>        </h3>
    </div>
    <div class="panel-body lk_third_line">
        <div class="row">
    <form name="feedback" method="post" action="">
        
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div>
            <textarea id="feedback_text" name="feedback[text]" required="required" class="form-control" rows="4"></textarea>
                
        </div>
        <input class="btn btn-success btn-xs col-lg-12 col-md-12 col-sm-12 col-xs-12"
               type="submit"
               name="submit"
               value="Отправить отзыв"
               tabindex="2">
    </div>
    <input type="hidden" id="feedback__token" name="feedback[_token]" value="XPG0OgteGfDc_MizLzCElgZgAiAZjGfAisP3ZViVvIQ" />
    </form>
</div>
<br>
    <div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <h3>Вы ещё не оставляли отзывов.</h3>
            </div>
</div>    </div>
</div>        </div>
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
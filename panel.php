           <?PHP 
    include("connection.php");
    if(isset($_GET['order'])){
        $order = $_GET['order'];
    }
    else {
        $order = "login";
    }
    $query = $link->query("SELECT * FROM `users` WHERE login IN (SELECT id_referal FROM `referals` WHERE id_agent =              '".$_SESSION['ID']."') ORDER BY ".$order);
    if(mysqli_num_rows($query) > 0) { ?>
<ul id="form_type_change" class="nav nav-tabs" role="tablist">
            <li class=" pop " data-placement="top" data-content="Документы">
            <a href="list.php">
            <span class="glyphicon glyphicon-arrow-left" title=""></span>
        <span class="hidden-xs"></span>
    </a>
</li>
        <li class=" pop " data-placement="top" data-content="">
            <a href="users_list.php?id=<?php echo $_SESSION['ID']; ?>">
            <span class="glyphicon glyphicon-user" title="Пользователи"></span>
        <span class="hidden-xs">Пользователи</span>
    </a>
</li>                    <li class="active pop " data-placement="top" data-content="">
            <a href="feedback.php?id=<?php echo $_SESSION['ID']; ?>">
            <span class="glyphicon glyphicon-comment" title="Отзывы"></span>
        <span class="hidden-xs">Отзывы</span>
    </a>
</li>            <li class=" pop " data-placement="top" data-content="">
            <a href="news.php?id=<?php echo $_SESSION['ID'];?>">
            <span class="glyphicon glyphicon-bell" title="Новости"></span>
        <span class="hidden-xs">Новости</span>
    </a>
</li>                            <li class=" pop " data-placement="top" data-content="">
            <a href="bills.php?id=<?php echo $_SESSION['ID']; ?>">
            <span class="glyphicon glyphicon-inbox" title="Счета"></span>
        <span class="hidden-xs">Счета</span>
    </a>
</li>                        <li class=" pop " data-placement="top" data-content="">
            <a href="transactions.php?id=<?php echo $_SESSION['ID']; ?>">
            <span class="glyphicon glyphicon-usd" title="Платежи"></span>
        <span class="hidden-xs">Платежи</span>
    </a>
</li>            <li class=" pop " data-placement="top" data-content="">
            <a href="payment.php?id=<?php echo $_SESSION['ID']; ?>">
            <span class="glyphicon glyphicon-list" title="Способы оплаты"></span>
        <span class="hidden-xs">Способы оплаты</span>
    </a>
</li>                                
        <li class=" pop pull-right" data-placement="top" data-content="Статистика">
            <a href="stat.php?id=<?php echo $_SESSION['ID']; ?>">
            <span class="glyphicon glyphicon-arrow-right" title=""></span>
        <span class="hidden-xs"></span>
    </a>
</li>    </ul>
     <ul id="form_type_change" class="nav nav-tabs" role="tablist">
            <li class=" pop "
    data-placement="top"
    data-content="Документы">
            <a href="/to/mgm/dk/list/FA2222">
            <span class="glyphicon glyphicon-arrow-left" title=""></span>
        <span class="hidden-xs"></span>
    </a>
</li>
        <li class="active pop "
    data-placement="top"
    data-content="">
            <a href="/to/mgm/users/list/FA2222">
            <span class="glyphicon glyphicon-user" title="Пользователи"></span>
        <span class="hidden-xs">Пользователи</span>
    </a>
</li>        
        <li class=" pop pull-right"
    data-placement="top"
    data-content="Статистика">
            <a href="excel.php">
            <span class="glyphicon glyphicon-arrow-right" title=""></span>
        <span class="hidden-xs"></span>
    </a>
</li>    </ul>                <div class="panel-body">
                                


<div class="row collection_control">
    <div class="col-md-9 pull-left">
            </div>
    <div class="col-md-3">
                    <a id="create_new_elem"
               class="btn btn-primary btn-sm pull-right pop"
               href="users_add.php"
               style="margin-left: 2px;"
               data-content="Создайте новый элемент" data-placement="left">
                <span class="glyphicon glyphicon-plus"></span>
            </a>
            <script>
                var popupNewElem = true;
            </script>
            </div>
</div>                 
<?php  while ($row = $query->fetch_assoc()) {   ?>
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
                                                    <tr class=""
                style="display: ;">
                <td class="col-md-2 col-xs-3 col-sm-2 col-lg-2">
                        <span>  <?php echo $row['login']; ?></span>
    <div class="btn-group">
        <a type="button" class="dropdown-toggle filter_link"
                data-toggle="dropdown"
                style="height: 2px; width: 2px;">
            <span class="glyphicon glyphicon-triangle-bottom"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-left" role="menu" style="text-align: center;">
            <li style="display: inline-block;">
                <a href="search.php?cat=users&id=<?php echo $row['login']; ?>"
                   style="padding: 6px;"
                   class="pop"
                   data-placement="top"
                   data-content="Искать в пользователях">
                    <span class="glyphicon glyphicon-user"></span>
                </a>
            </li>
            <li style="display: inline-block;">
                <a href="search.php?cat=feedback&id=<?php echo $row['login']; ?>"
                   style="padding: 6px;"
                   class="pop"
                   data-placement="top"
                   data-content="Искать в отзывах">
                    <span class="glyphicon glyphicon-comment"></span>
                </a>
            </li>
            <li style="display: inline-block;">
                <a href="search.php?cat=bills&id=<?php echo $row['login']; ?>"
                   style="padding: 6px;"
                   class="pop"
                   data-placement="top"
                   data-content="Искать в счетах">
                    <span class="glyphicon glyphicon-inbox"></span>
                </a>
            </li>
            <li style="display: inline-block;">
                <a href="search.php?cat=payments&id=<?php echo $row['login']; ?>"
                   style="padding: 6px;"
                   class="pop"
                   data-placement="top"
                   data-content="Искать в платежах">
                    <span class="glyphicon glyphicon-usd"></span>
                </a>
            </li>
            <li style="display: inline-block;">
                <a href="lk.php?id=<?php echo $row['login']; ?>"
                   style="padding: 6px;"
                   class="pop"
                   data-placement="top"
                   data-content="Перейти в Личный Кабинет">
                    ЛК
                </a>
            </li>
        </ul>
    </div>
                                        <div class="visible-xs">
                                                    <span style="cursor: pointer; margin-left: 5px; text-align: right; font-size: 80%;"
                                  class="pop label label-success col-md-2 col-sm-2 pull-right"
                                  data-placement="top"
                                  data-content="Долг в текущем периоде (с 27-09-2016)">
                                0
                            </span>
                                                <span style="cursor: pointer; margin-left: 5px; text-align: right; font-size: 80%;"
                              class="label label-default col-md-2 col-sm-2 pull-right"
                              title="Всего ДК">
                            0
                        </span>
                    </div>
                </td>
                <td class="col-md-6">
                          <?php echo $row['name']; ?>
(075145)
<a href="mailto:psdfksdlkfasldf@mail.ru">
      <?php echo $row['mail']; ?>
</a>
    <br>  <?php echo $row['tel']; ?>
                                            <span class="label label-warning pop pull-right"
                              data-placement="top"
                              data-content="Установленный период для автоматического выставления счёта. (можно изменить в редактировании пользователя)"
                                style="cursor: pointer;">
                                                            <span>2 раза в месяц</span>
                                                    </span>
                                        <br>
                    <span class="label col-md-5 col-sm-5"
                          style="background-color: #000000; font-size: 80%; text-align: left;">
                        СТОА - Попов (осн)
                    </span>
                                            <span class="label label-default col-md-2" style="margin-left: 5px;">
                            Город
                        </span>
                                        <div class="hidden-xs">
                                                    <span style="cursor: pointer; margin-left: 5px; text-align: right; font-size: 80%;"
                                  class="pop label label-success col-md-2 col-sm-2 pull-right"
                                  data-placement="top"
                                  data-content="Долг в текущем периоде (с 27-09-2016)">
                                0
                            </span>
                                                <span style="cursor: pointer; margin-left: 5px; text-align: right; font-size: 80%;"
                              class="label label-default col-md-2 col-sm-2 pull-right"
                              title="Всего ДК">
                            0
                        </span>
                    </div>
                                            <br>
                        <span>
                            Комментарий
                        </span>
                                                        </td>
                <td class="text-center hidden-xs"
                    title="Цена ДК">
                    133
                </td>
                <td class="text-center hidden-xs">
                    <span title="16:31:35">
                          <?php echo $row['date']; ?>
                    </span>
                    <br>
                    <span title="10:48:47">
                        27-09-2016
                    </span>
                </td>
                <td class="text-center col-md-2 col-sm-2 col-lg-2 col-xs-3">
                    <div class="row">
                    <div class="btn-group btn-group-xs col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 3px;">
    <a class="btn btn-info col-md-4 col-lg-4 col-xs-4 col-sm-4"
       href="/to/mgm/dk/list/FA2222"
       title="Список карт пользователя">
        <span class="glyphicon glyphicon-list-alt"></span>
    </a>
    <a class="btn btn-info col-md-4 col-lg-4 col-xs-4 col-sm-4"
       href="/to/mgm/users/list/FA2222"
       title="Показать список агентов FA2222">
        <span class="glyphicon glyphicon-user"></span>
    </a>
    <a class="btn btn-info col-md-4 col-lg-4 col-xs-4 col-sm-4"
       href="/to/stat/x/xls/FA2222"
       title="xls статистика по-пользователю">
        <span class="glyphicon glyphicon-floppy-disk"></span>
    </a>
</div>
<div class="btn-group btn-group-xs col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 3px;">
    <a class="btn btn-primary col-md-6 col-lg-6 col-xs-6 col-sm-6"
       href="/to/mgm/users/edit/0/FA2222"
       title="Редактировать пользователя FA2222">
        <span class="glyphicon glyphicon-pencil"></span>
    </a>
    <a class="btn btn-primary btn-xs col-md-3 col-lg-3 col-xs-3 col-sm-3"
       href="/lk/FA2222"
       title="Личный кабинет FA2222">
        ЛК
    </a>
    <button type="button" id="dropdownMenu1"
            class="btn btn-primary btn-xs col-md-3 col-lg-3 col-xs-3 col-sm-3 dropdown-toggle"
            data-toggle="dropdown"
            title="дополнительные действия">
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
                    <li>
                <a style="cursor: pointer;"
                   class="remove_button"
                   data-username="FA2222"
                   data-href="/to/user/FA2222/disable"
                   title="Отключить пользователя FA2222 вместе с подчиненными">
                    <span class="glyphicon glyphicon-remove-circle"></span>
                    Отключить пользователя
                </a>
            </li>
                <li>
            <a href="/to/user/FA2222/switch/wsdl"
               title="Отключить возможность создавать ДК пользователю FA2222 вместе с подчиненными">
                <span class="glyphicon glyphicon-remove-circle"></span>
                                    Отключить
                                возможность создавать ДК
            </a>
        </li>
            </ul>
</div>
<div class="btn-group btn-group-xs col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <a class="btn btn-default col-md-3 col-lg-3 col-xs-3 col-sm-3"
       href="/to/mgm/charts/c/FA2222"
       title="График FA2222">
        <span class="glyphicon glyphicon-signal"></span>
    </a>
    <a class="btn btn-default col-md-3 col-lg-3 col-xs-3 col-sm-3"
       href="/to/mgm/bills/search/FA2222/1/strict"
       title="Cчета <?php echo $row['login']; ?>">
        <span class="glyphicon glyphicon-inbox"></span>
    </a>
    <a class="btn btn-default col-md-3 col-lg-3 col-xs-3 col-sm-3"
       href="/to/mgm/transactions/search/FA2222/1/strict"
       title="Платежи <?php echo $row['login']; ?>">
        <span class="glyphicon glyphicon-usd"></span>
    </a>
    <a class="btn btn-default col-md-3 col-lg-3 col-xs-3 col-sm-3"
       href="/to/mgm/feedbacks/search/FA2222"
       title="Отзывы <?php echo $row['login']; ?>">
        <span class="glyphicon glyphicon-comment"></span>
    </a>
</div>                    </div>
                </td>
            </tr>
            </tbody>
</table>                   
                     <?php
            }
    }
else {
?>
             <ul id="form_type_change" class="nav nav-tabs" role="tablist">
            <li class=" pop "
    data-placement="top"
    data-content="Документы">
            <a href="list.php">
            <span class="glyphicon glyphicon-arrow-left" title=""></span>
        <span class="hidden-xs"></span>
    </a>
</li>
        <li class="active pop "
    data-placement="top"
    data-content="">
            <a href="users_list.php">
            <span class="glyphicon glyphicon-user" title="Пользователи"></span>
        <span class="hidden-xs">Пользователи</span>
    </a>
</li>        
        <li class=" pop pull-right"
    data-placement="top"
    data-content="Статистика">
            <a href="excel.php">
            <span class="glyphicon glyphicon-arrow-right" title=""></span>
        <span class="hidden-xs"></span>
    </a>
</li>    </ul>                <div class="panel-body">
                                


<div class="row collection_control">
    <div class="col-md-9 pull-left">
            </div>
    <div class="col-md-3">
                    <a id="create_new_elem"
               class="btn btn-primary btn-sm pull-right pop"
               href="users_add.php"
               style="margin-left: 2px;"
               data-content="Создайте новый элемент" data-placement="left">
                <span class="glyphicon glyphicon-plus"></span>
            </a>
            <script>
                var popupNewElem = true;
            </script>
            </div>
</div>    
                <?php } ?>

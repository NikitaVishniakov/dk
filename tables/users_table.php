                                                    
<?php 
    $dkp = $link->query("SELECT COUNT(*) as dkp_q FROM dkp WHERE login = '{$row['login']}'");
    if(mysqli_num_rows($dkp) > 0 ){
    $dkp = mysqli_fetch_array($dkp);
        $dkp_total = $dkp['dkp_q'];
    }
    else {
        $dkp_total = 0;
    }
    $sto = $link->query("SELECT name, city FROM stations WHERE id = (SELECT id_station FROM users WHERE login = '{$row['login']}')");
          if(mysqli_num_rows($sto) > 0 ){
            $sto = mysqli_fetch_array($sto);
            $sto_echo = $sto['name'];
            $sto_city = $sto['city'];
    }
    else {
        $sto_echo = "Не указано";
    } 
    $debt = $link->query("SELECT P.Pay - B.Bills as Debt FROM (SELECT SUM(amount) AS Bills FROM payments WHERE login ='{$row['login']}' AND query_type = 0)B, (SELECT SUM(amount) AS Pay FROM payments WHERE login ='{$row['login']}' AND query_type = 1)P");
         if(mysqli_num_rows($debt) > 0 ){
            $debt = mysqli_fetch_array($debt);
            $debt = $debt['Debt'];
             if($debt > 0) {
                $debt = "+".$debt;
             }
             if($debt == NULL){
                 $debt = '0';
             }
        }
        else {
            $debt = '0';
        }
   
 
?>
<tr class="dis<?php echo $row['disabled']; ?>"
                style="display: ;">
                <?php include("blocks/user_block.php");?>
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
        <?php echo $sto_echo; ?>
        </span>
        <span class="label label-default col-md-2" style="margin-left: 5px;">
           <?php echo $sto_city; ?>
        </span>
        <div class="hidden-xs">
            <span style="cursor: pointer; margin-left: 5px; text-align: right; font-size: 80%;"
            class="pop label label-success col-md-2 col-sm-2 pull-right"
            data-placement="top"
            data-content="Долг в текущем периоде (с 27-09-2016)">
            <?php  
              echo count_debt_dkp($row['login']);
                ?> 
            </span>
            <span style="cursor: pointer; margin-left: 5px; text-align: right; font-size: 80%;"
            class="label label-default col-md-2 col-sm-2 pull-right"
            title="Всего ДКП">
            <?php echo $dkp_total; ?>
            </span>
        </div>
        <br>
        <span>
            Комментарий
        </span>
</td>
                <td class="text-center hidden-xs"
                    title="Цена ДК">
                    <?php echo $row['card_price']; ?>
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
     href="dkp_list.php?id=<?php echo $row['login']; ?>"
       title="Список ДКП пользователя">
        <span class="glyphicon glyphicon-list-alt"></span>
    </a>
    <a class="btn btn-info col-md-4 col-lg-4 col-xs-4 col-sm-4"
       href="users_list.php?id=<?php echo $row['login'];?>"
       title="Показать список агентов FA2222">
        <span class="glyphicon glyphicon-user"></span>
    </a>
</div>
<div class="btn-group btn-group-xs col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 3px;">
    <a class="btn btn-primary col-md-6 col-lg-6 col-xs-6 col-sm-6"
       href="edit.php?id=<?php echo $row['login']; ?>"
       title="Редактировать пользователя <?php echo $row['login']; ?>">
        <span class="glyphicon glyphicon-pencil"></span>
    </a>
    <a class="btn btn-primary btn-xs col-md-3 col-lg-3 col-xs-3 col-sm-3"
       href="lk.php?id=<?php echo $row['login']; ?>"
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
          <?php 
            if ($row['disabled'] > 0) {
                ?>
            <li>
                <a style="cursor: pointer;"
                   class="remove_button"
                   data-username="FA2222"
                   data-href="user.php?id=<?php echo $row['login']?>&action=enable"
                   title="Восстановить права пользователя">
                    <span class="glyphicon glyphicon-remove-circle"></span>
                    Восстановить пользователя
                </a>
            </li>
        <?php
            }    
        else {
        ?>
        <li>
                <a style="cursor: pointer;"
                   class="remove_button"
                   data-username="FA2222"
                   data-href="user.php?id=<?php echo $row['login']?>&action=disable"
                   title="Отключить пользователя FA2222 вместе с подчиненными">
                    <span class="glyphicon glyphicon-remove-circle"></span>
                    Отключить пользователя
                </a>
            </li>
                <li>
            <a href="user.php?id=<?php echo $row['login']?>&action=dk_disable"
               title="Отключить возможность создавать ДК пользователю FA2222 вместе с подчиненными">
                <span class="glyphicon glyphicon-remove-circle"></span>
                                    Отключить
                                возможность создавать ДК
            </a>
        </li>
        <?php } ?>
            </ul>
</div>
<div class="btn-group btn-group-xs col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <a class="btn btn-default col-md-3 col-lg-3 col-xs-3 col-sm-3"
       href="search.php?cat=bills&id=<?php echo $row['login']; ?>&strict"
       title="Cчета <?php echo $row['login']; ?>">
        <span class="glyphicon glyphicon-inbox"></span>
    </a>
    <a class="btn btn-default col-md-3 col-lg-3 col-xs-3 col-sm-3"
       href="search.php?cat=payments&id=<?php echo $row['login']; ?>"
       title="Платежи <?php echo $row['login']; ?>">
        <span class="glyphicon glyphicon-usd"></span>
    </a>
    <a class="btn btn-default col-md-3 col-lg-3 col-xs-3 col-sm-3"
       href="search.php?cat=feedback&id=<?php echo $row['login'];?>&strict"
       title="Отзывы <?php echo $row['login']; ?>">
        <span class="glyphicon glyphicon-comment"></span>
    </a>
</div>                    </div>
                </td>
            </tr>

                
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
                <a href="search.php?cat=users_list&id=<?php echo $row['login'];?>&strict"
                   style="padding: 6px;"
                   class="pop"
                   data-placement="top"
                   data-content="Искать в пользователях">
                    <span class="glyphicon glyphicon-user"></span>
                </a>
            </li>
            <li style="display: inline-block;">
                <a href="search.php?cat=feedback&id=<?php echo $row['login'];?>&strict"
                   style="padding: 6px;"
                   class="pop"
                   data-placement="top"
                   data-content="Искать в отзывах">
                    <span class="glyphicon glyphicon-comment"></span>
                </a>
            </li>
            <li style="display: inline-block;">
                <a href="search.php?cat=bills&id=<?php echo $row['login']; ?>&strict"
                   style="padding: 6px;"
                   class="pop"
                   data-placement="top"
                   data-content="Искать в счетах">
                    <span class="glyphicon glyphicon-inbox"></span>
                </a>
            </li>
            <li style="display: inline-block;">
                <a href="search.php?cat=payments&id=<?php echo $row['login']; ?>&strict"
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
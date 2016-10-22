
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
    include("connection.php");
        if(isset($_GET['order'])){
            $order = $_GET['order'];
        }
        else {
            $order = "date";
        }
        $query = $link->query("SELECT * FROM payments WHERE login IN (SELECT id_referal FROM referals WHERE id_agent = '".$parent_id."')");
        
        while ($row = $query->fetch_assoc()){
            ?>
  

                        <style>
        .ajax_action {
            margin-bottom: 3px;
        }
    </style>
    <tr class="success collection_row"
        data-id="6350">
       <?php include("user_block.php"); ?>
        <td class="pop hidden-xs text-center"
            data-placement="top"
            data-content="<?php echo $row['date']; ?>">
            <?php echo $row['date']; ?>
        </td>
        <td class="visible-xs">
            <?php echo $row['date']; ?>
            <br>
            Комментарий
        </td>
        <td class="text-right hidden-xs"> <?php echo $row['amount']; ?></td>
        <td class="text-right hidden-xs"> <?php echo $row['quantity']; ?></td>
        <td class="text-right visible-xs">
            <?php echo $row['amount']; ?>
            <br>
            <?php echo $row['quantity']; ?>
        </td>
        <td class="hidden-xs">
            <?php echo $row['comment']; ?>
        </td>
        <td class="text-center">
            <div class="btn-group hidden-xs">
                <button class="btn btn-info btn-xs ajax_action pop"
                        data-placement="top"
                        data-content="Посмотреть данные платежа"
                        data-url="show.php?id= <?php echo $row['login']; ?>;">
                    <span class="glyphicon glyphicon-eye-open"></span>
                </button>
                <button style="display: none;"
                        class="btn btn-success btn-xs ajax_action pop"
                        data-placement="top"
                        data-content="Подтвердить получение средств"
                        data-url="payment_confirm.php?login=<?php echo $row['login'];?>">
                    <span class="glyphicon glyphicon-ok-circle"></span>
                </button>
                <button style="display: block;"
                        class="btn btn-warning btn-xs ajax_action pop"
                        data-placement="top"
                        data-content="Отменить подтверждение получения средств"
                        data-url="remove_confirm.php?login=<?php echo $row['login'];?>">
                    <span class="glyphicon glyphicon-remove-circle"></span>
                </button>
                <button class="btn btn-danger btn-xs ajax_action pop"
                        data-placement="top"
                        data-content="Удалить платеж"
                        data-url="/to/mgm/transactions/special/remove/6350">
                    <span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="visible-xs">
                <button class="btn btn-info btn-xs ajax_action col-xs-12"
                        data-url="/to/mgm/transactions/show/6350">
                    <span class="glyphicon glyphicon-eye-open"></span>
                </button>
                <button style="display: none;"
                        class="btn btn-success btn-xs ajax_action col-xs-12"
                        data-url="/to/mgm/transactions/special/confirm/6350">
                    <span class="glyphicon glyphicon-ok-circle"></span>
                </button>
                <button style="display: block;"
                        class="btn btn-warning btn-xs ajax_action col-xs-12"
                        data-url="/to/mgm/transactions/special/removeConfirm/6350">
                    <span class="glyphicon glyphicon-remove-circle"></span>
                </button>
                <button class="btn btn-danger btn-xs ajax_action col-xs-12"
                        data-url="/to/mgm/transactions/special/remove/6350">
                    <span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
        </td>
    </tr>
    
              <?php
        
    }
?>
  
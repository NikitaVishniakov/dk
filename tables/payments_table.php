<?php 
    if($row['status'] == 0){
        $class = "danger";
    }
    else {
        $class = "success";
     }
?>
<div class="modal-dialog">

</div>
<tr class="<?php echo $class;?> collection_row"
        data-id="6350">
       <?php include("blocks/user_block.php"); ?>
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
                <a class="btn btn-info btn-xs"
                        data-placement="top"
                        data-content="Посмотреть данные платежа"
                        href="payment.php?id=<?php echo $row['login']; ?>&action=view">
                    <span class="glyphicon glyphicon-eye-open"></span>
                </a>
                <?php 
    if($row['status'] == 0){ ?>
                <a class="btn btn-success confirm btn-xs"
                        data-placement="top"
                        data-content="Подтвердить получение средств"
                        href="payments.php?row_id=<?php echo $row['id'];?>&action=confirm">
                    <span class="glyphicon glyphicon-ok-circle"></span>
                </a>
                <?php }
                else { ?>
                <a style="display: block;"
                        class="btn btn-warning btn-xs removeConfirm"
                        data-placement="top"
                        data-content="Отменить подтверждение получения средств"
                        href="payments.php?row_id=<?php echo $row['id'];?>&action=remove">
                    <span class="glyphicon glyphicon-remove-circle"></span>
                </a>
                <?php }; ?>
                <a class="btn btn-danger btn-xs "
                        data-placement="top"
                        data-content="Удалить платеж"
                        href="payments.php?row_id=<?php echo $row['id'];?>&action=remove_row">
                    <span class="glyphicon glyphicon-remove"></span>
                </a>
            </div>
            <div class="visible-xs">
                <button class="btn btn-info btn-xs ajax_action col-xs-12"
                        data-url="view_payment.php?id=<?php echo $row['login']; ?>">
                    <span class="glyphicon glyphicon-eye-open"></span>
                </button>
                <button style="display: none;"
                        class="btn btn-success btn-xs ajax_action col-xs-12"
                        data-url="/to/mgm/transactions/special/confirm/6350">
                    <span class="glyphicon glyphicon-ok-circle"></span>
                </button>
                <button style="display: block;"
                        class="btn btn-warning btn-xs ajax_action col-xs-12 "
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
    
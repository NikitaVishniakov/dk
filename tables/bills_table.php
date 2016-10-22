<?php 
    if($row['status'] != 1){
        $class = "danger";
    }
else {
        $class = "success";
     }

?>
<style>
    .view_payment {
        position: absolute;
    }
</style>
<!--
<div class="modal-dialog modal-xs view_payment">
        <?php include("modals/modal_view_bill.php"); ?>
    </div>
-->

<tr class="<?php echo $class;?> collection_row" data-id="3282">
    <?php include("blocks/user_block.php"); ?>
    <td class="text-center hidden-xs">26-09/26-09</td>
    <td class="text-center hidden-xs" title="23:03:41">
       <?php echo $row['date']; ?>
    </td>
    <td class="text-center visible-xs">
        26-09/26-09<br>
        <?php echo $row['date']; ?><br>
        Оплата
    </td>
    <td class="text-right hidden-xs"><?php echo $row['amount']; ?></td>
    <td class="text-right hidden-xs"><?php echo $row['quantity']; ?></td>
    <td class="text-right visible-xs">
        <?php $row['amount']; ?><br>
        <?php $row['quantity']; ?>
    </td>
    <td class="hidden-xs">Оплата</td>
    <td class="text-center">
        <div class="btn-group">
            <div class="kostyl_ebaniy">
            </div>
            <a class="btn btn-info btn-xs"
                        data-placement="top"
                        data-content="Посмотреть данные счета"
                        href="bills.php?row_id=<?php echo $row['id']; ?>&action=view">
                    <span class="glyphicon glyphicon-eye-open"></span>
                </a>

                <a class="btn btn-danger btn-xs "
                        data-placement="top"
                        data-content="Удалить платеж"
                        href="bills.php?row_id=<?php echo $row['id'];?>&action=remove_row">
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

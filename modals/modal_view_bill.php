<?php 
    if($row['status'] == 0){
        $class = "danger";
        $payed = "Не оплачен";
    }
    else {
        $class = "success";
        $payed = "Оплачен";
    }
            ?>
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
               <h4 class="modal-title" id="myLargeModalLabel">Просмотр счёта</h4>
            </div>
            <div id="core_modal_body" class="modal-body">
<table class="table table-condensed table-hover table-bordered table-striped">
    <tbody><tr>
        <td><b>Сумма</b></td>
        <td><?php echo $row['amount']; ?></td>
    </tr>
    <tr>
        <td><b>Количество ДК</b></td>
        <td><?php echo $row['quantity']; ?></td>
    </tr>
    <tr>
        <td><b>Период</b></td>
        <td><?php echo $row['date']; ?></td>
    </tr>
    <tr>
        <td><b>Дата создания</b></td>
        <td><?php echo $row['date']; ?></td>
    </tr>
    <tr>
        <td><b>Комментарий</b></td>
        <td><?php echo $row['comment']; ?></td>
    </tr>
    <tr class="<?php echo $class; ?>">
        <td><b>Статус</b></td>
        <td><?php echo $payed; ?></td>

    </tr>
</tbody></table>

                    <div style="clear: both;"></div>
                    
        </div>
    </div>

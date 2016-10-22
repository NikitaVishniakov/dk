
<tr>
                            <td style="vertical-align: middle;" class="text-center"><?php echo $row['id']; ?></td>
                                        <td style="vertical-align: middle;" class="text-center" title="13:21:14"><?php echo $row['documentDate']; ?></td>
            <td style="vertical-align: middle;" class="text-center"><?php echo $row['login']; ?></td>
            <td>
                <span title="Продавец"><?php echo $row['sellerFio']; ?></span><br>
                <span title="Покупатель"><?php echo $row['buyerFio']; ?></span>
            </td>
            <td style="vertical-align: middle;" class="text-center">
                <div class="btn-group btn-group-xs">
                    <a class="btn btn-info" href="pdf.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-floppy-save"></span></a>
                    <a class="btn btn-info" href="view_dkp.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
                    <a class="btn btn-info" href="add_dkp.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                </div>
            </td>
        </tr>
<?php ?>
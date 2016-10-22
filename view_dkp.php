<?php 
include("header.php");
include("connection.php");
if(isset($_GET['id'])){
//    echo $_GET['id'];
$query = $link->query("SELECT * FROM dkp WHERE id = '".$_GET['id']."'");
$row = $query->fetch_array();
?>
<script>$('#docs').addClass('active');</script>
<div class="container">
                <div class="page-header" style="margin: 30px 0 20px;"></div>
                <div class='row'>
                                        <div class="col-md-12">
        
    
    </div>
                                            <div class="col-md-10 col-md-offset-1">
        <div class="row" id="top_control_block">
    <a class="btn btn-info btn-sm col-md-1 col-xs-2 col-lg-1 col-sm-2"
       href="javascript:history.go(-1)">
        <span class="glyphicon glyphicon-arrow-left"></span>
        Назад
    </a>
                <div class="col-md-4 col-lg-4 col-sm-4 hidden-xs pull-right text-right">
            <span id="header_name">
                Просмотр ДКП            </span>
                            <span id="question_mark" class="glyphicon glyphicon-question-sign"
                      title="Справка" data-toggle="modal"
                      data-target="#help_modal"></span>
                    </div>
        <div data-url="/to/ajax/gethelp" class="modal fade" id="help_modal" tabindex="-1" role="dialog" aria-labelledby="help_modalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="help_modalLabel">Справка по разделу</h4></div><div id="help_body" class="modal-body"></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button></div></div></div></div>
            </div>        <div class="row">
            <div class="panel panel-default">
                                    <div class="panel-body">
                                                                            <div style="margin-bottom: 10px;">
        <a class="pull-left" href="add_dkp.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span> изменить ДКП</a>
        <div class="btn-group btn-group-sm pull-right">
            <a class="btn btn-default" target="_blank" href="pdf.php?id=<?php echo $row['id']; ?>" title="Договор купли-продажи в PDF формате">
                <table>
                    <tr>
                        <td style="width: 30px;">
                            <img src="img/pdf-icon.png" style="height: 20px;">
                        </td>
                        <td>
                            Договор купли-продажи
                        </td>
                    </tr>
                </table>
            </a>
                                                                                                                                                                                                                                                                </div>
        <div style="clear: both;"></div>
    </div>
    <table class="table table-hover table-striped table-bordered table-condensed">
        <tbody>
            <tr>
                <td class="col-md-2"><b>Продавец</b></td>
                <td>
                    <b>ФИО:</b> <?php echo $row['sellerFio']; ?> 
<b>Паспорт:</b>
<b>серия:</b> <?php echo $row['sellerDocumentSeries']; ?> 
<b>номер:</b> <?php echo $row['sellerDocumentNumber']; ?> 
<b>выдан:</b> <?php echo $row['sellerDocumentDate']." ".$row['sellerDocumentOrganization']; ?>                </td>
            </tr>
            <tr>
                <td><b>Покупатель</b></td>
                <td>
                    <b>ФИО:</b> <?php echo $row['buyerFio']; ?> 
<b>Паспорт:</b>
<b>серия:</b> <?php echo $row['buyerDocumentSeries']; ?>  
<b>номер:</b> <?php echo $row['buyerDocumentNumber']; ?> 
<b>выдан:</b> <?php echo $row['buyerDocumentDate']." ".$row['buyerDocumentOrganization']; ?>               </td>
            </tr>
        </tbody>
    </table>
    <h4>Автомобиль:</h4>
    <table class="table table-hover table-striped table-bordered table-condensed">
        <tbody>
            <tr>
                <td class="col-md-2"><b>Марка/модель</b></td>
                <td><?php echo $row['make']." / ".$row['model']; ?> </td>
            </tr>
            <tr>
                <td class="col-md-2"><b>Цвет</b></td>
                <td> <?php echo $row['color']; ?></td>
            </tr>
            <tr>
                <td class="col-md-2"><b>VIN</b></td>
                <td> <?php echo $row['vin']; ?></td>
            </tr>
            <tr>
                <td class="col-md-2"><b>Номер двигателя</b></td>
                <td> <?php echo $row['engine']; ?></td>
            </tr>
            <tr>
                <td class="col-md-2"><b>Номер шасси</b></td>
                <td> <?php echo $row['shasi_num']; ?></td>
            </tr>
            <tr>
                <td class="col-md-2"><b>Номер кузова</b></td>
                <td> <?php echo $row['body_num']; ?></td>
            </tr>
            <tr>
                <td class="col-md-2"><b>СТС</b></td>
                <td>
                    <b>серия:</b> <?php echo $row['serie_srts']; ?>
                    <b>номер:</b>  <?php echo $row['num_srts']; ?>
                    <b>выдан</b>  <?php echo $row['srts_giving_date']; ?>
                     <?php echo $row['strs_who_gave']; ?>
                </td>
            </tr>
            <tr>
                <td class="col-md-2"><b>ПТС</b></td>
                <td>
                    <b>серия:</b> <?php echo $row['num_pts']; ?>
                    <b>номер:</b><?php echo $row['serie_pts']; ?>
                    <b>выдан</b><?php echo $row['pts_giving_date']; ?>
                    <?php echo $row['pts_who_gave']; ?>
                </td>
            </tr>
        </tbody>
    </table>
                                                            </div>
            </div>
        </div>
    </div>
                </div>
            </div>
            <div id="push"></div>
        </div>
                
        <script type="text/javascript" src="/bundles/webtocore/js/vendor.min.js"></script>
<script type="text/javascript" src="/bundles/webtocore/js/core.js"></script>        
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
                      }

                       include("flash_block.php");
        ?>
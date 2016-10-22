<?php include("header.php");
if(isset($_GET['id'])){
    include("connection.php");
    $query = $link->query("SELECT * FROM dkp WHERE id = '".$_GET['id']."'");
    $row = $query->fetch_array();
?>
<script type="text/javascript" src="js/core.js"></script>            <script>
        $(document).on('ready', function(){
            
            
            $('#show_seller_trustee_area').on('click', function(){
                var checked = $(this).prop('checked');
                var area = $('#seller_trustee_area');
                var display;
                if (checked)
                    area.fadeIn();
                else
                    area.fadeOut();
            });

            $('#show_buyer_trustee_area').on('click', function(){
                var checked = $(this).prop('checked');
                var area = $('#buyer_trustee_area');
                var display;
                if (checked)
                    area.fadeIn();
                else
                    area.fadeOut();
            });
        })
    </script>
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
                Редактирование ДКП            </span>
                            <span id="question_mark" class="glyphicon glyphicon-question-sign"
                      title="Справка" data-toggle="modal"
                      data-target="#help_modal"></span>
                    </div>
        <div data-url="/to/ajax/gethelp" class="modal fade" id="help_modal" tabindex="-1" role="dialog" aria-labelledby="help_modalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="help_modalLabel">Справка по разделу</h4></div><div id="help_body" class="modal-body"></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button></div></div></div></div>
            </div>        <div class="row">
            <div class="panel panel-default">
                                    <div class="panel-body">
                                                                            <style>
        .form-group {
            margin-bottom: 5px;
        }
        .form-control {
            height: 30px;
        }
        .panel-heading {
            padding: 5px 15px;
        }
        .panel {
            margin-bottom: 5px;
        }
    </style>
    <form name="dkp" method="post" action="add_dkp_script.php">
        
        <div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">
            <a data-toggle="collapse" href="#collapseCar" style="display: block;">Данные автомобиля</a>
        </h3>
    </div>
    <div id="collapseCar" class="panel-collapse collapse in">
        <div class="panel-body" style="padding: 10px 30px;">
            <div class="row">
                <div class="col-md-6">
                    <h4>Автомобиль</h4>
                    <div class="form-group">
                                        <label for="dkp_car_make" class="required">Марка:</label>
                        <input type="text" id="dkp_car_make" name="dkp[car][make]" required="required" class="form-control" autocomplete="off" value="<?php echo $row['make']; ?>" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_model" class="required">Модель:</label>
                        <input type="text" id="dkp_car_model" name="dkp[car][model]" required="required" class="form-control" autocomplete="off" value="<?php echo $row['model']; ?>" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_colour">Цвет:</label>
                        <input type="text" id="dkp_car_colour" name="dkp[car][colour]" class="form-control" autocomplete="off" value="<?php echo $row['color']; ?>"/>
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_vin" class="required">VIN:</label>
                        <input type="text" id="dkp_car_vin" name="dkp[car][vin]" required="required" class="form-control" autocomplete="off" value="<?php echo $row['vin']; ?>" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_engine">Номер двигателя:</label>
                        <input type="text" id="dkp_car_engine" name="dkp[car][engine]" class="form-control" autocomplete="off" value="<?php echo $row['engine']; ?>"/>
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_frame">Номер шасси:</label>
                        <input type="text" id="dkp_car_frame" name="dkp[car][frame]" class="form-control" autocomplete="off" value="<?php echo $row['shasi_num']; ?>" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_body">Номер кузова:</label>
                        <input type="text" id="dkp_car_body" name="dkp[car][body]" class="form-control" autocomplete="off" value="<?php echo $row['body_num']; ?>" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_year" class="required">Год:</label>
                        <input type="number" id="dkp_car_year" name="dkp[car][year]" required="required" maxlength="4" pattern=".{4,}" class="form-control" autocomplete="off" value="<?php echo $row['year']; ?>" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_type" class="required">Тип:</label>
                        <select id="dkp_car_type" name="dkp[car][type]" required="required" class="form-control" autocomplete="off">            <option value=""  selected="selected"></option>            <option value="Легковое" >Легковое</option>            <option value="Грузовое" >Грузовое</option></select>
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_registrationNumber">Регистрационный номер:</label>
                        <input type="text" id="dkp_car_registrationNumber" name="dkp[car][registrationNumber]" class="form-control" autocomplete="off" value="<?php echo $row['reg_num']; ?>" />
                            
                    </div>
                </div>
                <div class="col-md-6">
                                        <h4>СРТС:</h4>
                    <div class="form-group">
                                        <label for="dkp_car_regTalonNumber" class="required">Номер:</label>
                        <input type="text" id="dkp_car_regTalonNumber" name="dkp[car][regTalonNumber]" required="required" class="form-control" autocomplete="off" value="<?php echo $row['num_srts']; ?>" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_regTalonSeries" class="required">Серия:</label>
                        <input type="text" id="dkp_car_regTalonSeries" name="dkp[car][regTalonSeries]" required="required" class="form-control" autocomplete="off" value="<?php echo $row['serie_srts']; ?>" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_regTalonDate" class="required">Дата выдачи:</label>
                        <input type="text" id="dkp_car_regTalonDate" name="dkp[car][regTalonDate]" required="required" class="form-control" autocomplete="off" value="<?php echo $row['srts_giving_date']; ?>" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_regTalonOrganization" class="required">Выдан кем:</label>
                        <input type="text" id="dkp_car_regTalonOrganization" name="dkp[car][regTalonOrganization]" required="required" class="form-control" autocomplete="off" value="<?php echo $row['strs_who_gave']; ?>" />
                            
                    </div>
                                        <h4>ПТС:</h4>
                    <div class="form-group">
                                        <label for="dkp_car_ptsNumber" class="required">Номер:</label>
                        <input type="text" id="dkp_car_ptsNumber" name="dkp[car][ptsNumber]" required="required" class="form-control" autocomplete="off" value="<?php echo $row['num_pts']; ?>" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_ptsSeries" class="required">Серия:</label>
                        <input type="text" id="dkp_car_ptsSeries" name="dkp[car][ptsSeries]" required="required" class="form-control" autocomplete="off" value="<?php echo $row['serie_pts']; ?>" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_ptsDate" class="required">Дата выдачи:</label>
                        <input type="text" id="dkp_car_ptsDate" name="dkp[car][ptsDate]" required="required" class="form-control" autocomplete="off" value="<?php echo $row['pts_giving_date']; ?>" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_ptsOrganization" class="required">Выдан кем:</label>
                        <input type="text" id="dkp_car_ptsOrganization" name="dkp[car][ptsOrganization]" required="required" class="form-control" autocomplete="off" value="<?php echo $row['pts_who_gave']; ?>" />
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    <div class="row">
    <div class="col-md-6 col-lg-6 col-sm-12">
        <h3>Продавец:</h3>
        <div class="form-group">
                            <label for="dkp_sellerFio" class="required">ФИО:</label>
            <input type="text" id="dkp_sellerFio" name="dkp[sellerFio]" required="required" class="form-control" autocomplete="off" value="<?php echo $row['sellerFio']; ?>"/>
                
        </div>
        <h4>Документ:</h4>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                                    <label for="dkp_sellerDocumentSeries" class="required">Серия:</label>
                    <input type="text" id="dkp_sellerDocumentSeries" name="dkp[sellerDocumentSeries]" required="required" class="form-control" autocomplete="off"value="<?php echo $row['sellerDocumentSeries']; ?>" />
                        
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                                    <label for="dkp_sellerDocumentNumber" class="required">Номер:</label>
                    <input type="text" id="dkp_sellerDocumentNumber" name="dkp[sellerDocumentNumber]" required="required" class="form-control" autocomplete="off"value="<?php echo $row['sellerDocumentNumber']; ?>" />
                        
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                                    <label for="dkp_sellerDocumentDate" class="required">Дата выдачи:</label>
                    <input type="text" id="dkp_sellerDocumentDate" name="dkp[sellerDocumentDate]" required="required" class="form-control" autocomplete="off" value="<?php echo $row['sellerDocumentDate']; ?>"/>
                        
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                                    <label for="dkp_sellerDocumentOrganization" class="required">Выдан кем:</label>
                    <input type="text" id="dkp_sellerDocumentOrganization" name="dkp[sellerDocumentOrganization]" required="required" class="form-control" autocomplete="off" value="<?php echo $row['sellerDocumentOrganization']; ?>"/>
                        
                </div>
            </div>
        </div>
        <div class="form-group">
                            <label for="dkp_sellerAddress" class="required">Регистрация:</label>
            <input type="text" id="dkp_sellerAddress" name="dkp[sellerAddress]" required="required" class="form-control" autocomplete="off" value="<?php echo $row['sellerAddress']; ?>"/>
                
        </div>
        <div class="form-group" style="margin-top: 15px;">
            <table>
                <tr>
                    <td style="width: 20px;">
                        <input type="checkbox" id="show_seller_trustee_area">
                    </td>
                    <td>
                        <label for="show_seller_trustee_area">продажа по доверенности</label>
                    </td>
                </tr>
            </table>
        </div>
        <div id="seller_trustee_area" style="display: none;">
            <h3>Доверенное лицо продавца:</h3>
            <div class="form-group">
                                <label for="dkp_sellerTrusteeFio">ФИО:</label>
                <input type="text" id="dkp_sellerTrusteeFio" name="dkp[sellerTrusteeFio]" class="form-control" autocomplete="off" />
                    
            </div>
            <h4>Документ:</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                                        <label for="dkp_sellerTrusteeDocumentSeries">Серия:</label>
                        <input type="text" id="dkp_sellerTrusteeDocumentSeries" name="dkp[sellerTrusteeDocumentSeries]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                                        <label for="dkp_sellerTrusteeDocumentNumber">Номер:</label>
                        <input type="text" id="dkp_sellerTrusteeDocumentNumber" name="dkp[sellerTrusteeDocumentNumber]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                                        <label for="dkp_sellerTrusteeDocumentDate">Дата выдачи:</label>
                        <input type="text" id="dkp_sellerTrusteeDocumentDate" name="dkp[sellerTrusteeDocumentDate]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                                        <label for="dkp_sellerTrusteeDocumentOrganization">Выдан кем:</label>
                        <input type="text" id="dkp_sellerTrusteeDocumentOrganization" name="dkp[sellerTrusteeDocumentOrganization]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
            </div>
            <div class="form-group">
                                <label for="dkp_sellerTrusteeAddress">Регистрация:</label>
                <input type="text" id="dkp_sellerTrusteeAddress" name="dkp[sellerTrusteeAddress]" class="form-control" autocomplete="off" />
                    
            </div>
            <h4>Доверенность:</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                                        <label for="dkp_sellerTrusteeWarrantSeries">Серия:</label>
                        <input type="text" id="dkp_sellerTrusteeWarrantSeries" name="dkp[sellerTrusteeWarrantSeries]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                                        <label for="dkp_sellerTrusteeWarrantNumber">Номер:</label>
                        <input type="text" id="dkp_sellerTrusteeWarrantNumber" name="dkp[sellerTrusteeWarrantNumber]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                                        <label for="dkp_sellerTrusteeWarrantDate">Дата выдачи:</label>
                        <input type="text" id="dkp_sellerTrusteeWarrantDate" name="dkp[sellerTrusteeWarrantDate]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                                        <label for="dkp_sellerTrusteeWarrantOrganization">Выдан кем:</label>
                        <input type="text" id="dkp_sellerTrusteeWarrantOrganization" name="dkp[sellerTrusteeWarrantOrganization]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-sm-12">
        <h3>Покупатель:</h3>
        <div class="form-group">
                            <label for="dkp_buyerFio" class="required">ФИО:</label>
            <input type="text" id="dkp_buyerFio" name="dkp[buyerFio]" required="required" class="form-control" autocomplete="off" value="<?php echo $row['buyerFio']; ?>"/>
                
        </div>
        <h4>Документ:</h4>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                                    <label for="dkp_buyerDocumentSeries" class="required">Серия:</label>
                    <input type="text" id="dkp_buyerDocumentSeries" name="dkp[buyerDocumentSeries]" required="required" class="form-control" autocomplete="off" value="<?php echo $row['buyerDocumentSeries']; ?>"/>
                        
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                                    <label for="dkp_buyerDocumentNumber" class="required">Номер:</label>
                    <input type="text" id="dkp_buyerDocumentNumber" name="dkp[buyerDocumentNumber]" required="required" class="form-control" autocomplete="off" value="<?php echo $row['buyerDocumentNumber']; ?>"/>
                        
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                                    <label for="dkp_buyerDocumentDate" class="required">Дата выдачи:</label>
                    <input type="text" id="dkp_buyerDocumentDate" name="dkp[buyerDocumentDate]" required="required" class="form-control" autocomplete="off" value="<?php echo $row['buyerDocumentDate']; ?>"/>
                        
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                                    <label for="dkp_buyerDocumentOrganization" class="required">Выдан кем:</label>
                    <input type="text" id="dkp_buyerDocumentOrganization" name="dkp[buyerDocumentOrganization]" required="required" class="form-control" autocomplete="off" value="<?php echo $row['buyerDocumentNumber']; ?>"/>
                        
                </div>
            </div>
        </div>
        <div class="form-group">
                            <label for="dkp_buyerAddress" class="required">Регистрация:</label>
            <input type="text" id="dkp_buyerAddress" name="dkp[buyerAddress]" required="required" class="form-control" autocomplete="off" value="<?php echo $row['buyerAddress']; ?>"/>
                
        </div>
        <div class="form-group" style="margin-top: 15px;">
            <table>
                <tr>
                    <td style="width: 20px;">
                        <input type="checkbox" id="show_buyer_trustee_area">
                    </td>
                    <td>
                        <label for="show_buyer_trustee_area">покупка по доверенности</label>
                    </td>
                </tr>
            </table>
        </div>
        <div id="buyer_trustee_area" style="display: none;">
            <h3>Доверенное лицо покупателя:</h3>
            <div class="form-group">
                                <label for="dkp_buyerTrusteeFio">ФИО:</label>
                <input type="text" id="dkp_buyerTrusteeFio" name="dkp[buyerTrusteeFio]" class="form-control" autocomplete="off" />
                    
            </div>
            <h4>Документ:</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                                        <label for="dkp_buyerTrusteeDocumentNumber">Номер:</label>
                        <input type="text" id="dkp_buyerTrusteeDocumentNumber" name="dkp[buyerTrusteeDocumentNumber]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                                        <label for="dkp_buyerTrusteeDocumentSeries">Серия:</label>
                        <input type="text" id="dkp_buyerTrusteeDocumentSeries" name="dkp[buyerTrusteeDocumentSeries]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                                        <label for="dkp_buyerTrusteeDocumentDate">Дата выдачи:</label>
                        <input type="text" id="dkp_buyerTrusteeDocumentDate" name="dkp[buyerTrusteeDocumentDate]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                                        <label for="dkp_buyerTrusteeDocumentOrganization">Выдан кем:</label>
                        <input type="text" id="dkp_buyerTrusteeDocumentOrganization" name="dkp[buyerTrusteeDocumentOrganization]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
            </div>
            <div class="form-group">
                                <label for="dkp_buyerTrusteeAddress">Регистрация:</label>
                <input type="text" id="dkp_buyerTrusteeAddress" name="dkp[buyerTrusteeAddress]" class="form-control" autocomplete="off" />
                    
            </div>
            <h4>Доверенность:</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                                        <label for="dkp_buyerTrusteeWarrantNumber">Номер:</label>
                        <input type="text" id="dkp_buyerTrusteeWarrantNumber" name="dkp[buyerTrusteeWarrantNumber]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                                        <label for="dkp_buyerTrusteeWarrantSeries">Серия:</label>
                        <input type="text" id="dkp_buyerTrusteeWarrantSeries" name="dkp[buyerTrusteeWarrantSeries]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                                        <label for="dkp_buyerTrusteeWarrantDate">Дата выдачи:</label>
                        <input type="text" id="dkp_buyerTrusteeWarrantDate" name="dkp[buyerTrusteeWarrantDate]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                                        <label for="dkp_buyerTrusteeWarrantOrganization">Выдан кем:</label>
                        <input type="text" id="dkp_buyerTrusteeWarrantOrganization" name="dkp[buyerTrusteeWarrantOrganization]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4" style="margin-top: 15px;">
        <div class="form-group">
                            <label for="dkp_carPrice" class="required">Цена автомобиля:</label>
            <input type="number" id="dkp_carPrice" name="dkp[carPrice]" required="required" class="form-control" autocomplete="off" value="<?php echo $row['carPrice']; ?>"/>
                
        </div>
    </div>
</div>

    <div style="margin-top: 10px;">
        <input class="btn btn-primary" type="submit" name="submit_update" value="Сохранить">
        <a class="btn btn-default pull-right" href="dkp_list.php">Отмена</a>
    </div>
    </form>
                                                            </div>
            </div>
        </div>
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
<?php } else { ?>
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
                Создание ДКП            </span>
                            <span id="question_mark" class="glyphicon glyphicon-question-sign"
                      title="Справка" data-toggle="modal"
                      data-target="#help_modal"></span>
                    </div>
        <div data-url="/to/ajax/gethelp" class="modal fade" id="help_modal" tabindex="-1" role="dialog" aria-labelledby="help_modalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="help_modalLabel">Справка по разделу</h4></div><div id="help_body" class="modal-body"></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button></div></div></div></div>
            </div>        <div class="row">
            <div class="panel panel-default">
                                    <div class="panel-body">
                                                                            <style>
        .form-group {
            margin-bottom: 5px;
        }
        .form-control {
            height: 30px;
        }
        .panel-heading {
            padding: 5px 15px;
        }
        .panel {
            margin-bottom: 5px;
        }
    </style>
    <form name="dkp" method="post" action="add_dkp_script.php">
        
        <div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">
            <a data-toggle="collapse" href="#collapseCar" style="display: block;">Данные автомобиля</a>
        </h3>
    </div>
    <div id="collapseCar" class="panel-collapse collapse in">
        <div class="panel-body" style="padding: 10px 30px;">
            <div class="row">
                <div class="col-md-6">
                    <h4>Автомобиль</h4>
                    <div class="form-group">
                                        <label for="dkp_car_make" class="required">Марка:</label>
                        <input type="text" id="dkp_car_make" name="dkp[car][make]" required="required" class="form-control" autocomplete="off" value="" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_model" class="required">Модель:</label>
                        <input type="text" id="dkp_car_model" name="dkp[car][model]" required="required" class="form-control" autocomplete="off" value="" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_colour">Цвет:</label>
                        <input type="text" id="dkp_car_colour" name="dkp[car][colour]" class="form-control" autocomplete="off" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_vin" class="required">VIN:</label>
                        <input type="text" id="dkp_car_vin" name="dkp[car][vin]" required="required" class="form-control" autocomplete="off" value="" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_engine">Номер двигателя:</label>
                        <input type="text" id="dkp_car_engine" name="dkp[car][engine]" class="form-control" autocomplete="off" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_frame">Номер шасси:</label>
                        <input type="text" id="dkp_car_frame" name="dkp[car][frame]" class="form-control" autocomplete="off" value="" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_body">Номер кузова:</label>
                        <input type="text" id="dkp_car_body" name="dkp[car][body]" class="form-control" autocomplete="off" value="" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_year" class="required">Год:</label>
                        <input type="number" id="dkp_car_year" name="dkp[car][year]" required="required" maxlength="4" pattern=".{4,}" class="form-control" autocomplete="off" value="" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_type" class="required">Тип:</label>
                        <select id="dkp_car_type" name="dkp[car][type]" required="required" class="form-control" autocomplete="off">            <option value=""  selected="selected"></option>            <option value="lite" >Легковое</option>            <option value="hard" >Грузовое</option></select>
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_registrationNumber">Регистрационный номер:</label>
                        <input type="text" id="dkp_car_registrationNumber" name="dkp[car][registrationNumber]" class="form-control" autocomplete="off" value="" />
                            
                    </div>
                </div>
                <div class="col-md-6">
                                        <h4>СРТС:</h4>
                    <div class="form-group">
                                        <label for="dkp_car_regTalonNumber" class="required">Номер:</label>
                        <input type="text" id="dkp_car_regTalonNumber" name="dkp[car][regTalonNumber]" required="required" class="form-control" autocomplete="off" value="" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_regTalonSeries" class="required">Серия:</label>
                        <input type="text" id="dkp_car_regTalonSeries" name="dkp[car][regTalonSeries]" required="required" class="form-control" autocomplete="off" value="" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_regTalonDate" class="required">Дата выдачи:</label>
                        <input type="text" id="dkp_car_regTalonDate" name="dkp[car][regTalonDate]" required="required" class="form-control" autocomplete="off" value="13.10.2016" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_regTalonOrganization" class="required">Выдан кем:</label>
                        <input type="text" id="dkp_car_regTalonOrganization" name="dkp[car][regTalonOrganization]" required="required" class="form-control" autocomplete="off" value="" />
                            
                    </div>
                                        <h4>ПТС:</h4>
                    <div class="form-group">
                                        <label for="dkp_car_ptsNumber" class="required">Номер:</label>
                        <input type="text" id="dkp_car_ptsNumber" name="dkp[car][ptsNumber]" required="required" class="form-control" autocomplete="off" value="" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_ptsSeries" class="required">Серия:</label>
                        <input type="text" id="dkp_car_ptsSeries" name="dkp[car][ptsSeries]" required="required" class="form-control" autocomplete="off" value="" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_ptsDate" class="required">Дата выдачи:</label>
                        <input type="text" id="dkp_car_ptsDate" name="dkp[car][ptsDate]" required="required" class="form-control" autocomplete="off" value="13.10.2016" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_ptsOrganization" class="required">Выдан кем:</label>
                        <input type="text" id="dkp_car_ptsOrganization" name="dkp[car][ptsOrganization]" required="required" class="form-control" autocomplete="off" value="" />
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    <div class="row">
    <div class="col-md-6 col-lg-6 col-sm-12">
        <h3>Продавец:</h3>
        <div class="form-group">
                            <label for="dkp_sellerFio" class="required">ФИО:</label>
            <input type="text" id="dkp_sellerFio" name="dkp[sellerFio]" required="required" class="form-control" autocomplete="off" />
                
        </div>
        <h4>Документ:</h4>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                                    <label for="dkp_sellerDocumentSeries" class="required">Серия:</label>
                    <input type="text" id="dkp_sellerDocumentSeries" name="dkp[sellerDocumentSeries]" required="required" class="form-control" autocomplete="off" />
                        
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                                    <label for="dkp_sellerDocumentNumber" class="required">Номер:</label>
                    <input type="text" id="dkp_sellerDocumentNumber" name="dkp[sellerDocumentNumber]" required="required" class="form-control" autocomplete="off" />
                        
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                                    <label for="dkp_sellerDocumentDate" class="required">Дата выдачи:</label>
                    <input type="text" id="dkp_sellerDocumentDate" name="dkp[sellerDocumentDate]" required="required" class="form-control" autocomplete="off" />
                        
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                                    <label for="dkp_sellerDocumentOrganization" class="required">Выдан кем:</label>
                    <input type="text" id="dkp_sellerDocumentOrganization" name="dkp[sellerDocumentOrganization]" required="required" class="form-control" autocomplete="off" />
                        
                </div>
            </div>
        </div>
        <div class="form-group">
                            <label for="dkp_sellerAddress" class="required">Регистрация:</label>
            <input type="text" id="dkp_sellerAddress" name="dkp[sellerAddress]" required="required" class="form-control" autocomplete="off" />
                
        </div>
        <div class="form-group" style="margin-top: 15px;">
            <table>
                <tr>
                    <td style="width: 20px;">
                        <input type="checkbox" id="show_seller_trustee_area">
                    </td>
                    <td>
                        <label for="show_seller_trustee_area">продажа по доверенности</label>
                    </td>
                </tr>
            </table>
        </div>
        <div id="seller_trustee_area" style="display: none;">
            <h3>Доверенное лицо продавца:</h3>
            <div class="form-group">
                                <label for="dkp_sellerTrusteeFio">ФИО:</label>
                <input type="text" id="dkp_sellerTrusteeFio" name="dkp[sellerTrusteeFio]" class="form-control" autocomplete="off" />
                    
            </div>
            <h4>Документ:</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                                        <label for="dkp_sellerTrusteeDocumentSeries">Серия:</label>
                        <input type="text" id="dkp_sellerTrusteeDocumentSeries" name="dkp[sellerTrusteeDocumentSeries]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                                        <label for="dkp_sellerTrusteeDocumentNumber">Номер:</label>
                        <input type="text" id="dkp_sellerTrusteeDocumentNumber" name="dkp[sellerTrusteeDocumentNumber]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                                        <label for="dkp_sellerTrusteeDocumentDate">Дата выдачи:</label>
                        <input type="text" id="dkp_sellerTrusteeDocumentDate" name="dkp[sellerTrusteeDocumentDate]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                                        <label for="dkp_sellerTrusteeDocumentOrganization">Выдан кем:</label>
                        <input type="text" id="dkp_sellerTrusteeDocumentOrganization" name="dkp[sellerTrusteeDocumentOrganization]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
            </div>
            <div class="form-group">
                                <label for="dkp_sellerTrusteeAddress">Регистрация:</label>
                <input type="text" id="dkp_sellerTrusteeAddress" name="dkp[sellerTrusteeAddress]" class="form-control" autocomplete="off" />
                    
            </div>
            <h4>Доверенность:</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                                        <label for="dkp_sellerTrusteeWarrantSeries">Серия:</label>
                        <input type="text" id="dkp_sellerTrusteeWarrantSeries" name="dkp[sellerTrusteeWarrantSeries]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                                        <label for="dkp_sellerTrusteeWarrantNumber">Номер:</label>
                        <input type="text" id="dkp_sellerTrusteeWarrantNumber" name="dkp[sellerTrusteeWarrantNumber]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                                        <label for="dkp_sellerTrusteeWarrantDate">Дата выдачи:</label>
                        <input type="text" id="dkp_sellerTrusteeWarrantDate" name="dkp[sellerTrusteeWarrantDate]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                                        <label for="dkp_sellerTrusteeWarrantOrganization">Выдан кем:</label>
                        <input type="text" id="dkp_sellerTrusteeWarrantOrganization" name="dkp[sellerTrusteeWarrantOrganization]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-sm-12">
        <h3>Покупатель:</h3>
        <div class="form-group">
                            <label for="dkp_buyerFio" class="required">ФИО:</label>
            <input type="text" id="dkp_buyerFio" name="dkp[buyerFio]" required="required" class="form-control" autocomplete="off" />
                
        </div>
        <h4>Документ:</h4>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                                    <label for="dkp_buyerDocumentSeries" class="required">Серия:</label>
                    <input type="text" id="dkp_buyerDocumentSeries" name="dkp[buyerDocumentSeries]" required="required" class="form-control" autocomplete="off" />
                        
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                                    <label for="dkp_buyerDocumentNumber" class="required">Номер:</label>
                    <input type="text" id="dkp_buyerDocumentNumber" name="dkp[buyerDocumentNumber]" required="required" class="form-control" autocomplete="off" />
                        
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                                    <label for="dkp_buyerDocumentDate" class="required">Дата выдачи:</label>
                    <input type="text" id="dkp_buyerDocumentDate" name="dkp[buyerDocumentDate]" required="required" class="form-control" autocomplete="off" />
                        
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                                    <label for="dkp_buyerDocumentOrganization" class="required">Выдан кем:</label>
                    <input type="text" id="dkp_buyerDocumentOrganization" name="dkp[buyerDocumentOrganization]" required="required" class="form-control" autocomplete="off" />
                        
                </div>
            </div>
        </div>
        <div class="form-group">
                            <label for="dkp_buyerAddress" class="required">Регистрация:</label>
            <input type="text" id="dkp_buyerAddress" name="dkp[buyerAddress]" required="required" class="form-control" autocomplete="off" />
                
        </div>
        <div class="form-group" style="margin-top: 15px;">
            <table>
                <tr>
                    <td style="width: 20px;">
                        <input type="checkbox" id="show_buyer_trustee_area">
                    </td>
                    <td>
                        <label for="show_buyer_trustee_area">покупка по доверенности</label>
                    </td>
                </tr>
            </table>
        </div>
        <div id="buyer_trustee_area" style="display: none;">
            <h3>Доверенное лицо покупателя:</h3>
            <div class="form-group">
                                <label for="dkp_buyerTrusteeFio">ФИО:</label>
                <input type="text" id="dkp_buyerTrusteeFio" name="dkp[buyerTrusteeFio]" class="form-control" autocomplete="off" />
                    
            </div>
            <h4>Документ:</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                                        <label for="dkp_buyerTrusteeDocumentNumber">Номер:</label>
                        <input type="text" id="dkp_buyerTrusteeDocumentNumber" name="dkp[buyerTrusteeDocumentNumber]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                                        <label for="dkp_buyerTrusteeDocumentSeries">Серия:</label>
                        <input type="text" id="dkp_buyerTrusteeDocumentSeries" name="dkp[buyerTrusteeDocumentSeries]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                                        <label for="dkp_buyerTrusteeDocumentDate">Дата выдачи:</label>
                        <input type="text" id="dkp_buyerTrusteeDocumentDate" name="dkp[buyerTrusteeDocumentDate]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                                        <label for="dkp_buyerTrusteeDocumentOrganization">Выдан кем:</label>
                        <input type="text" id="dkp_buyerTrusteeDocumentOrganization" name="dkp[buyerTrusteeDocumentOrganization]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
            </div>
            <div class="form-group">
                                <label for="dkp_buyerTrusteeAddress">Регистрация:</label>
                <input type="text" id="dkp_buyerTrusteeAddress" name="dkp[buyerTrusteeAddress]" class="form-control" autocomplete="off" />
                    
            </div>
            <h4>Доверенность:</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                                        <label for="dkp_buyerTrusteeWarrantNumber">Номер:</label>
                        <input type="text" id="dkp_buyerTrusteeWarrantNumber" name="dkp[buyerTrusteeWarrantNumber]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                                        <label for="dkp_buyerTrusteeWarrantSeries">Серия:</label>
                        <input type="text" id="dkp_buyerTrusteeWarrantSeries" name="dkp[buyerTrusteeWarrantSeries]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                                        <label for="dkp_buyerTrusteeWarrantDate">Дата выдачи:</label>
                        <input type="text" id="dkp_buyerTrusteeWarrantDate" name="dkp[buyerTrusteeWarrantDate]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                                        <label for="dkp_buyerTrusteeWarrantOrganization">Выдан кем:</label>
                        <input type="text" id="dkp_buyerTrusteeWarrantOrganization" name="dkp[buyerTrusteeWarrantOrganization]" class="form-control" autocomplete="off" />
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4" style="margin-top: 15px;">
        <div class="form-group">
                            <label for="dkp_carPrice" class="required">Цена автомобиля:</label>
            <input type="number" id="dkp_carPrice" name="dkp[carPrice]" required="required" class="form-control" autocomplete="off" />
                
        </div>
    </div>
</div>

    <div style="margin-top: 10px;">
        <input class="btn btn-primary" type="submit" name="submit" value="Сохранить">
        <a class="btn btn-default pull-right" href="dkp_list.php">Отмена</a>
    </div>
    </form>
                                                            </div>
            </div>
        </div>
    </div>
                </div>
            </div>
            <div id="push"></div>
        </div>
                
        <script type="text/javascript" src="js/vendor.min.js"></script>
<script type="text/javascript" src="js/core.js"></script>            <script>
        $(document).on('ready', function(){
            
            
            $('#show_seller_trustee_area').on('click', function(){
                var checked = $(this).prop('checked');
                var area = $('#seller_trustee_area');
                var display;
                if (checked)
                    area.fadeIn();
                else
                    area.fadeOut();
            });

            $('#show_buyer_trustee_area').on('click', function(){
                var checked = $(this).prop('checked');
                var area = $('#buyer_trustee_area');
                var display;
                if (checked)
                    area.fadeIn();
                else
                    area.fadeOut();
            });
        })
    </script>

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
        <?php }
              include("flash_block.php");
        ?>
<?php 
    include("header.php");
?>
<div class="container">
                <div class="page-header" style="margin: 30px 0 20px;"></div>
                <div class='row'>
                                        <div class="col-md-12">
        
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-muted">
        <div class="panel-heading" role="tab" id="headingMsg_79" style="padding: 5px 15px;">
            <h4 class="panel-title">
                <a data-toggle="collapse"
                   data-parent="#accordion"
                   href="#collapse_79"
                   aria-expanded="true"
                   aria-controls="collapse_79"
                   style="display: block;">
                    Заголовок новости 1
                </a>
            </h4>
        </div>
        <div id="collapse_79"
             class="panel-collapse collapse"
             role="tabpanel"
             aria-labelledby="headingMsg_79">
            <div class="panel-body">
                <h4 class="text-muted">
                                            Текст новости 1<br>
                                    </h4>
            </div>
        </div>
    </div>
</div>
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
    <form name="dkp" method="post" action="">
        
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
                        <input type="text" id="dkp_car_make" name="dkp[car][make]" required="required" class="form-control" autocomplete="off" value="32131312" value="32131312" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_model" class="required">Модель:</label>
                        <input type="text" id="dkp_car_model" name="dkp[car][model]" required="required" class="form-control" autocomplete="off" value="6546546" value="6546546" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_colour">Цвет:</label>
                        <input type="text" id="dkp_car_colour" name="dkp[car][colour]" class="form-control" autocomplete="off" value="6546546" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_vin" class="required">VIN:</label>
                        <input type="text" id="dkp_car_vin" name="dkp[car][vin]" required="required" class="form-control" autocomplete="off" value="654654646546" value="654654646546" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_engine">Номер двигателя:</label>
                        <input type="text" id="dkp_car_engine" name="dkp[car][engine]" class="form-control" autocomplete="off" value="654654654" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_frame">Номер шасси:</label>
                        <input type="text" id="dkp_car_frame" name="dkp[car][frame]" class="form-control" autocomplete="off" value="654654654" value="654654654" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_body">Номер кузова:</label>
                        <input type="text" id="dkp_car_body" name="dkp[car][body]" class="form-control" autocomplete="off" value="654" value="654" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_year" class="required">Год:</label>
                        <input type="number" id="dkp_car_year" name="dkp[car][year]" required="required" maxlength="4" pattern=".{4,}" class="form-control" autocomplete="off" value="6546" value="6546" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_type" class="required">Тип:</label>
                        <select id="dkp_car_type" name="dkp[car][type]" required="required" class="form-control" autocomplete="off">            <option value="" ></option>            <option value="lite"  selected="selected">Легковое</option>            <option value="hard" >Грузовое</option></select>
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_registrationNumber">Регистрационный номер:</label>
                        <input type="text" id="dkp_car_registrationNumber" name="dkp[car][registrationNumber]" class="form-control" autocomplete="off" value="654654" value="654654" />
                            
                    </div>
                </div>
                <div class="col-md-6">
                                        <h4>СРТС:</h4>
                    <div class="form-group">
                                        <label for="dkp_car_regTalonNumber" class="required">Номер:</label>
                        <input type="text" id="dkp_car_regTalonNumber" name="dkp[car][regTalonNumber]" required="required" class="form-control" autocomplete="off" value="654" value="654" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_regTalonSeries" class="required">Серия:</label>
                        <input type="text" id="dkp_car_regTalonSeries" name="dkp[car][regTalonSeries]" required="required" class="form-control" autocomplete="off" value="5646546546" value="5646546546" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_regTalonDate" class="required">Дата выдачи:</label>
                        <input type="text" id="dkp_car_regTalonDate" name="dkp[car][regTalonDate]" required="required" class="form-control" autocomplete="off" value="30.09.2016" value="30.09.2016" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_regTalonOrganization" class="required">Выдан кем:</label>
                        <input type="text" id="dkp_car_regTalonOrganization" name="dkp[car][regTalonOrganization]" required="required" class="form-control" autocomplete="off" value="6546546546" value="6546546546" />
                            
                    </div>
                                        <h4>ПТС:</h4>
                    <div class="form-group">
                                        <label for="dkp_car_ptsNumber" class="required">Номер:</label>
                        <input type="text" id="dkp_car_ptsNumber" name="dkp[car][ptsNumber]" required="required" class="form-control" autocomplete="off" value="65465465" value="65465465" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_ptsSeries" class="required">Серия:</label>
                        <input type="text" id="dkp_car_ptsSeries" name="dkp[car][ptsSeries]" required="required" class="form-control" autocomplete="off" value="654654654" value="654654654" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_ptsDate" class="required">Дата выдачи:</label>
                        <input type="text" id="dkp_car_ptsDate" name="dkp[car][ptsDate]" required="required" class="form-control" autocomplete="off" value="30.09.2016" value="30.09.2016" />
                            
                    </div>
                    <div class="form-group">
                                        <label for="dkp_car_ptsOrganization" class="required">Выдан кем:</label>
                        <input type="text" id="dkp_car_ptsOrganization" name="dkp[car][ptsOrganization]" required="required" class="form-control" autocomplete="off" value="56466546" value="56466546" />
                            
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
            <input type="text" id="dkp_sellerFio" name="dkp[sellerFio]" required="required" class="form-control" autocomplete="off" value="5465464654" />
                
        </div>
        <h4>Документ:</h4>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                                    <label for="dkp_sellerDocumentSeries" class="required">Серия:</label>
                    <input type="text" id="dkp_sellerDocumentSeries" name="dkp[sellerDocumentSeries]" required="required" class="form-control" autocomplete="off" value="65465" />
                        
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                                    <label for="dkp_sellerDocumentNumber" class="required">Номер:</label>
                    <input type="text" id="dkp_sellerDocumentNumber" name="dkp[sellerDocumentNumber]" required="required" class="form-control" autocomplete="off" value="6546546546" />
                        
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                                    <label for="dkp_sellerDocumentDate" class="required">Дата выдачи:</label>
                    <input type="text" id="dkp_sellerDocumentDate" name="dkp[sellerDocumentDate]" required="required" class="form-control" autocomplete="off" value="12.09.2016" />
                        
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                                    <label for="dkp_sellerDocumentOrganization" class="required">Выдан кем:</label>
                    <input type="text" id="dkp_sellerDocumentOrganization" name="dkp[sellerDocumentOrganization]" required="required" class="form-control" autocomplete="off" value="6546465464" />
                        
                </div>
            </div>
        </div>
        <div class="form-group">
                            <label for="dkp_sellerAddress" class="required">Регистрация:</label>
            <input type="text" id="dkp_sellerAddress" name="dkp[sellerAddress]" required="required" class="form-control" autocomplete="off" value="6546546465465" />
                
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
                        <input type="text" id="dkp_sellerTrusteeDocumentDate" name="dkp[sellerTrusteeDocumentDate]" class="form-control" autocomplete="off" value="30.09.2016" />
                            
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
                        <input type="text" id="dkp_sellerTrusteeWarrantDate" name="dkp[sellerTrusteeWarrantDate]" class="form-control" autocomplete="off" value="30.09.2016" />
                            
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
            <input type="text" id="dkp_buyerFio" name="dkp[buyerFio]" required="required" class="form-control" autocomplete="off" value="654646546546" />
                
        </div>
        <h4>Документ:</h4>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                                    <label for="dkp_buyerDocumentSeries" class="required">Серия:</label>
                    <input type="text" id="dkp_buyerDocumentSeries" name="dkp[buyerDocumentSeries]" required="required" class="form-control" autocomplete="off" value="654654" />
                        
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                                    <label for="dkp_buyerDocumentNumber" class="required">Номер:</label>
                    <input type="text" id="dkp_buyerDocumentNumber" name="dkp[buyerDocumentNumber]" required="required" class="form-control" autocomplete="off" value="65465464" />
                        
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                                    <label for="dkp_buyerDocumentDate" class="required">Дата выдачи:</label>
                    <input type="text" id="dkp_buyerDocumentDate" name="dkp[buyerDocumentDate]" required="required" class="form-control" autocomplete="off" value="12.09.2016" />
                        
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                                    <label for="dkp_buyerDocumentOrganization" class="required">Выдан кем:</label>
                    <input type="text" id="dkp_buyerDocumentOrganization" name="dkp[buyerDocumentOrganization]" required="required" class="form-control" autocomplete="off" value="65465654" />
                        
                </div>
            </div>
        </div>
        <div class="form-group">
                            <label for="dkp_buyerAddress" class="required">Регистрация:</label>
            <input type="text" id="dkp_buyerAddress" name="dkp[buyerAddress]" required="required" class="form-control" autocomplete="off" value="65464645645" />
                
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
                        <input type="text" id="dkp_buyerTrusteeDocumentDate" name="dkp[buyerTrusteeDocumentDate]" class="form-control" autocomplete="off" value="30.09.2016" />
                            
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
                        <input type="text" id="dkp_buyerTrusteeWarrantDate" name="dkp[buyerTrusteeWarrantDate]" class="form-control" autocomplete="off" value="30.09.2016" />
                            
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
            <input type="number" id="dkp_carPrice" name="dkp[carPrice]" required="required" class="form-control" autocomplete="off" value="2147483647" />
                
        </div>
    </div>
</div>
<div class="panel panel-info" style="margin-top: 10px;">
    <div class="panel-heading">
        <h3 class="panel-title">
            <a data-toggle="collapse" href="#collapseAgent" style="display: block;">Данные агента</a>
        </h3>
    </div>
    <div id="collapseAgent" class="panel-collapse collapse in">
        <div class="panel-body" style="padding: 10px 30px;">
            <div class="form-group">
                                <label for="dkp_attorneyFio" class="required">ФИО:</label>
                <input type="text" id="dkp_attorneyFio" name="dkp[attorneyFio]" required="required" class="form-control" autocomplete="off" value="65+65+65+65+5+" />
                    
            </div>
            <div class="form-group">
                                <label for="dkp_attorneyFioRP" class="required">ФИО родительный падеж:</label>
                <input type="text" id="dkp_attorneyFioRP" name="dkp[attorneyFioRP]" required="required" class="form-control" autocomplete="off" value="+6565+5+5+65++5+65+5" />
                    
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                                        <label for="dkp_attorneyCompany" class="required">Компания:</label>
                        <input type="text" id="dkp_attorneyCompany" name="dkp[attorneyCompany]" required="required" class="form-control" autocomplete="off" value="654654645" />
                            
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                                        <label for="dkp_city" class="required">Город:</label>
                        <input type="text" id="dkp_city" name="dkp[city]" required="required" class="form-control" autocomplete="off" value="Москва" value="Москва" />
                            
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                                        <label for="dkp_documentDate">Дата документа:</label>
                        <input type="text" id="dkp_documentDate" name="dkp[documentDate]" class="form-control" autocomplete="off" value="30.09.2016" value="30.09.2016" />
                            
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                                        <label for="dkp_attorneyAddress" class="required">Адрес:</label>
                        <input type="text" id="dkp_attorneyAddress" name="dkp[attorneyAddress]" required="required" class="form-control" autocomplete="off" value="65446554646" />
                            
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                                        <label for="dkp_agentPrice" class="required">Комиссия:</label>
                        <input type="number" id="dkp_agentPrice" name="dkp[agentPrice]" required="required" class="form-control" autocomplete="off" value="666" />
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    <input type="hidden" id="dkp__token" name="dkp[_token]" value="F-41miz2R6QVxdY83iAs-M-94sX91IYLyprQ2RX4rVc" />
    <div style="margin-top: 10px;">
        <input class="btn btn-primary" type="submit" name="_submit" value="Сохранить">
        <a class="btn btn-default pull-right" href="/to/dkp/list">Отмена</a>
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
            $('#dkp_buyerDocumentDate, ' +
                '#dkp_sellerDocumentDate, ' +
                '#dkp_agentDocumentDate, ' +
                '#dkp_car_regTalonDate,' +
                '#dkp_car_ptsDate,' +
                '#dkp_sellerTrusteeDocumentDate,' +
                '#dkp_buyerTrusteeDocumentDate,' +
                '#dkp_sellerTrusteeWarrantDate,' +
                '#dkp_buyerTrusteeWarrantDate,' +
                '#dkp_documentDate'
            ).datepicker({
                maxDate: 0,
                dateFormat: 'dd.mm.yy',
                changeMonth: true,
                changeYear: true,
                sellerDay: 1
            });
            
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
<?php 
    include("flash_block.php");
?>
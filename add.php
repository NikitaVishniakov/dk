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
                Создание ДК            </span>
                            <span id="question_mark" class="glyphicon glyphicon-question-sign"
                      title="Справка" data-toggle="modal"
                      data-target="#help_modal"></span>
                    </div>
        <div data-url="/to/ajax/gethelp" class="modal fade" id="help_modal" tabindex="-1" role="dialog" aria-labelledby="help_modalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="help_modalLabel">Справка по разделу</h4></div><div id="help_body" class="modal-body"></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button></div></div></div></div>
            </div>        <div class="row">
            <div class="panel panel-default">
                    <ul id="form_type_change" class="nav nav-tabs" role="tablist">
            <li id="make_standard_view" class="active"><a href="#">Стандартный</a></li>
        <li id="make_srts_view"><a href="#">СРТС</a></li>
        <li id="make_pts_view"><a href="#">ПТС</a></li>
        <li>
            <a id="duplicate_page" href="eaisto.php">Дубликат ДК</a>
        </li>
    </ul>                <div class="panel-body">
                                                                            <style>
        .form-control {
            height: 30px !important;
            padding: 0 12px !important;
        }
        label {
            font-size: 90%;
        }
        .panel>.panel-heading {
            padding-top: 5px;
            padding-bottom: 5px;
        }
        .panel>.panel-heading>.panel-title {
            font-size: 16px;
        }
        .panel-info>.panel-heading {
            padding-bottom: 2px;
            padding-top: 2px;
        }
        .panel-info>.panel-heading>.panel-title {
            font-size: 14px;
            margin-left: -5px;
        }
        #validity_block .form-control-feedback {
            left: 112px !important;
            top: 24px !important;
            z-index: 2 !important;
        }
        #block_bodyNumber .form-control-feedback {
            right: 35px !important;
            top: 23px !important;
            z-index: 2 !important;
        }
        .panel.panel-primary {
            margin-top: -18px;
        }
        .form-control-feedback {
            z-index: 1 !important;
        }
    </style>

    <div class="row">
        <div class="col-md-12" id="main_view_size">
            <form name="to" method="post" action="" novalidate="novalidate">
            <div class="row">
                <div class="col-md-5">
                                    </div>
            </div>

                        <div class="row">
    <div class="col-md-12">

    </div>
</div>    
                                                                
    <div class="col-md-10 col-md-offset-2">
                <h5 class="text-right hidden-xs">
            <b>ФИО эксперта:</b>
            Попов
            Александр
            Михайлович
        </h5>

        <h5 class="text-right hidden-xs">
            <b>Адрес оператора:</b>
            Общество с ограниченной ответственностью &quot;СТО А&quot; (ООО &quot;СТО А&quot;),  № в реестре операторов: 06974, адрес   оператора ТО:  129336, г., Москва, ул., Стартовая, дом 1, стр. 1
        </h5>

        <h5 class="text-right hidden-xs">
            <b>Адрес пункта ТО:</b>
                            129336,  Москва г., Стартовая ул.,  д. 1, корпус 8.
                    </h5>
    </div>

            <div class="form_p1">
            <p class="text-left">
                <span><span class="star_danger">*</span> - поля необходимо заполнить</span>
                    
            </p>
                        <div id="strs_view_block">
                <div class="panel panel-info srts_view" style="display: none;">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="text-primary">Сведения о ТС</span></h3>
                    </div>
                    <div class="panel-body">
                        <div id="srts_row_0"></div>
                        <div class="row" id="srts_row_1"></div>
                        <div class="row" id="srts_row_2"></div>
                        <div class="row" id="srts_row_3"></div>
                        <div id="srts_row_4"></div>
                    </div>
                </div>
                            <div class="panel panel-info srts_view" style="display: none;">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="text-primary">Лицо, предоставившее ТС для проведения ТО</span>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row" id="srts_row_5"></div>
                    </div>
                </div>
                <div class="panel panel-info srts_view" style="display: none;">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="text-primary">Данные СРТС</span>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div id="srts_row_6"></div>
                        <div class="row" id="srts_row_7"></div>
                        <div class="row" id="srts_row_8"></div>
                    </div>
                </div>
                <div class="panel panel-info srts_view" style="display: none;">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="text-primary">Другие данные ТС</span>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row" id="srts_row_9"></div>
                        <div class="row" id="srts_row_10"></div>
                        <div class="row" id="srts_row_11"></div>
                    </div>
                </div>
            </div>
                                        <div id="pts_view_block">
                    <div class="panel panel-info pts_view" style="display: none;">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span class="text-primary">Сведения о ТС</span></h3>
                        </div>
                        <div class="panel-body">
                            <div id="pts_row_0"></div>
                            <div class="row" id="pts_row_1"></div>
                            <div class="row" id="pts_row_2"></div>
                            <div class="row" id="pts_row_3"></div>
                            <div id="pts_row_4"></div>
                        </div>
                    </div>
                                    <div class="panel panel-info pts_view" style="display: none;">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <span class="text-primary">Лицо, предоставившее ТС для проведения ТО</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="row" id="pts_row_5"></div>
                        </div>
                    </div>
                    <div class="panel panel-info pts_view" style="display: none;">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <span class="text-primary">Данные ПТС</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div id="pts_row_6"></div>
                            <div class="row" id="pts_row_7"></div>
                            <div class="row" id="pts_row_8"></div>
                        </div>
                    </div>
                    <div class="panel panel-info pts_view" style="display: none;">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <span class="text-primary">Другие данные ТС</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="row" id="pts_row_9"></div>
                            <div class="row" id="pts_row_11"></div>
                        </div>
                    </div>
                </div>
                        

<div class="panel panel-info standard_view">

  <div class="panel-heading">
    <h3 class="panel-title">
      <span class="text-primary">Лицо, предоставившее ТС для проведения ТО</span>
    </h3>
  </div>

  <div class="panel-body">
    <div class='row' id="standard_block_0">
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" id="block_name">
        <div class='form-group'>
                          <label for="to_name" class="required">Фамилия:</label>
          <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Фамилия лица, предоставившего ТС для проведения ТО." data-html="false"></span>          <input type="text" id="to_name" name="to[name]" required="required" class="form-control" autocomplete="off" tabindex="2" placeholder="" />
              
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" id="block_fname">
        <div class='form-group'>
                          <label for="to_fName" class="required">Имя:</label>
          <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Имя лица, предоставившего ТС для проведения ТО." data-html="false"></span>          <input type="text" id="to_fName" name="to[fName]" required="required" class="form-control" autocomplete="off" tabindex="3" placeholder="" />
              
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" id="block_mname">
        <div class='form-group'>
                          <label for="to_mName">Отчество:</label>
          <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Отчество лица, предоставившего ТС для проведения ТО." data-html="false"></span>          <input type="text" id="to_mName" name="to[mName]" class="form-control" autocomplete="off" tabindex="4" placeholder="" />
              
        </div>
      </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" id="block_phone">
          <div class='form-group'>
                            <label for="to_client_phone">Телефон:</label>
            <input type="text" id="to_client_phone" name="to[client][phone]" class="form-control" autocomplete="off" tabindex="4" placeholder="" />
                
          </div>
        </div>
          </div>
  </div>
</div>

<div class="panel panel-info standard_view">

  <div class="panel-heading">
    <h3 class="panel-title"><span class="text-primary">Сведения о ТС</span></h3>
  </div>

  <div class="panel-body">

    <div class='row' id="standard_block_1">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="block_vin">
        <div class='form-group'>
                          <label for="to_vin">VIN:</label>
          <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="VIN номер должен содержать 17 знаков, среди которых только буквы(A-Z|А-Я) и цифры(0-9)." data-html="false"></span>          <input type="text" id="to_vin" name="to[vin]" class="form-control" autocomplete="off" tabindex="5" placeholder="" data-url="/to/dk/ajax/quicksearch" />
          <input id='disable_vin' type='checkbox' name='disableVin'>
          <label for='disable_vin'>отсутствует</label>
              
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="block_year">
        <div class='form-group'>
                          <label for="to_year" class="required">Год:</label>
          <input type="text" id="to_year" name="to[year]" required="required" class="form-control" autocomplete="off" tabindex="6" placeholder="" />
              
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="standard_block_1_1">
        <div id="block_make">
          <div class='form-group'>
                            <label for="to_make" class="required">Марка:</label>
            <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Для появления подсказки необходимо начать ввод марки ТС." data-html="false"></span>            <input type="text" id="to_make" name="to[make]" required="required" maxlength="100" class="form-control" autocomplete="off" tabindex="7" placeholder="" data-autocomplete-marks="/to/json/marks" />
                
          </div>
        </div>
        <div id="block_model">
          <div class="form-group">
                            <label for="to_make" class="required">Модель:</label>
            <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Если марка ТС выбрана с помощью подсказки. Для появления подсказки начнить ввод модели ТС." data-html="false"></span>            <input type="text" id="to_model" name="to[model]" required="required" maxlength="100" class="form-control" autocomplete="off" tabindex="8" placeholder="" data-autocomplete-models="/to/json/models" />
                
          </div>
        </div>
      </div>
    </div>

    <div class='row'></div>

    <div class='row' id="standard_block_2">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="block_bodyNumber">
        <div class='form-group'>
                          <label for="to_bodyNumber">Номер кузова:</label>
          <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Если номера кузова нет нажмите &quot;отсутствует&quot;." data-html="false"></span>          <div class="input-group">
            <input type="text" id="to_bodyNumber" name="to[bodyNumber]" class="form-control" autocomplete="off" tabindex="9" data-url="/to/dk/ajax/quicksearch" />
            <span class="input-group-btn">
              <a class="btn btn-info" style="height: 30px;" title="Скопировать VIN" id="copy_vin_to_body_number">
                <span class="glyphicon glyphicon-copyright-mark"></span>
              </a>
            </span>
          </div>
          <div>
            <input id='disable_bodyNumber' type='checkbox' name='disableBodyNumber'>
            <label for='disable_bodyNumber'>отсутствует</label>
          </div>
              
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="block_frameNumber">
        <div class='form-group'>
                          <label for="to_frameNumber">Шасси (Рама) №:</label>
          <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Если номера шасси нет нажмите &quot;отсутствует&quot;." data-html="false"></span>          <input type="text" id="to_frameNumber" name="to[frameNumber]" class="form-control" autocomplete="off" tabindex="10" data-url="/to/dk/ajax/quicksearch" />
          <div>
            <input id='disable_frameNumber' type='checkbox' name='disableFrameNumber'>
            <label for='disable_frameNumber'>отсутствует</label>
          </div>
              
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="block_killometrage">
        <div class='form-group'>
                          <label for="to_killometrage" class="required">Пробег ТС (км):</label>
          <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Округленное (целое) число." data-html="false"></span>          <input type="text" id="to_killometrage" name="to[killometrage]" required="required" class="form-control" autocomplete="off" tabindex="11" placeholder="" />
              
        </div>
      </div>
    </div>

    <div class='row'></div>

    <div class='row' id="standard_block_3">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="block_registrationNumber">
        <div class='form-group'>
                          <label for="to_registrationNumber">Гос. регистрационный знак:</label>
          <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Например: М345ЛВ199" data-html="false"></span>          <input type="text" id="to_registrationNumber" name="to[registrationNumber]" class="form-control" autocomplete="off" tabindex="12" placeholder="" />
              
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="block_emptyMass">
        <div class='form-group'>
                          <label for="to_emptyMass" class="required">Масса без нагрузки (кг):</label>
          <input type="text" id="to_emptyMass" name="to[emptyMass]" required="required" class="form-control" autocomplete="off" tabindex="13" placeholder="" />
              
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="block_vechicleCategory">
        <div class='form-group'>
                          <label for="to_vechicleCategory" class="required">Категория ТС (СРТС или ПТС):</label>
          <select id="to_vechicleCategory" name="to[vechicleCategory]" required="required" class="form-control" tabindex="14">            <option value=""  selected="selected"></option>            <option value="A" >A</option>            <option value="B" >B</option>            <option value="C" >C</option>            <option value="D" >D</option>            <option value="E" >E(прицепы)</option></select>
              
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="block_vechicleCategory2">
        <div class='form-group'>
                          <label for="to_vechicleCategory2" class="required">Категория ТС (ОКП):</label>
          <select id="to_vechicleCategory2" name="to[vechicleCategory2]" required="required" class="form-control" tabindex="15">            <option value=""  selected="selected"></option>            <option value="L" >L</option>            <option value="M1" >M1 (пасс., не более 8 пассажиров)</option>            <option value="M2" >M2 (пасс., не более 5 тонн)</option>            <option value="M3" >M3 (пасс., более 5 тонн)</option>            <option value="N1" >N1 (грузовые, менее 3,5 тонн)</option>            <option value="N2" >N2 (грузовые, менее 12 тонн)</option>            <option value="N3" >N3 (грузовые, более 12 тонн</option>            <option value="O1" >O1 (прицепы, менее 0,75 тонн)</option>            <option value="O2" >O2 (прицепы, менее 3,5 тонн)</option>            <option value="O3" >O3 (прицепы, менее 10 тонн)</option>            <option value="O4" >O4 (прицепы, более 10 тонн)</option></select>
              
        </div>
      </div>
    </div>

    <div class='row'></div>

    <div class='row' id="standard_block_4">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="block_tyres">
        <div class='form-group'>
                          <label for="to_tyres" class="required">Марка шин:</label>
          <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Для появления подсказки необходимо начать ввод марки шин (во многих на английском языке)." data-html="false"></span>          <input type="text" id="to_tyres" name="to[tyres]" required="required" class="form-control" autocomplete="off" tabindex="16" placeholder="" />
              
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="block_maxMass">
        <div class='form-group'>
                          <label for="to_maxMass" class="required">Максимальная масса:</label>
          <input type="text" id="to_maxMass" name="to[maxMass]" required="required" class="form-control" autocomplete="off" tabindex="17" placeholder="" />
              
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="block_fuel">
        <div class='form-group'>
                          <label for="to_fuel" class="required">Тип топлива:</label>
          <select id="to_fuel" name="to[fuel]" required="required" class="form-control" tabindex="18">            <option value=""  selected="selected"></option>            <option value="Petrol" >Бензин</option>            <option value="Diesel" >Дизельное топливо</option>            <option value="PressureGas" >Сжатый газ</option>            <option value="LiquefiedGas" >Сжиженный газ</option>            <option value="None" >Без топлива</option></select>
              
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="block_brakingSystem">
        <div class='form-group'>
                          <label for="to_brakingSystem" class="required">Тип тормозной системы:</label>
          <select id="to_brakingSystem" name="to[brakingSystem]" required="required" class="form-control" tabindex="19">            <option value=""  selected="selected"></option>            <option value="Mechanical" >Механический</option>            <option value="Hydraulic" >Гидравлический</option>            <option value="Pneumatic" >Пневматический</option>            <option value="Combined" >Комбинированный</option>            <option value="None" >Без тормозной системы</option></select>
              
        </div>
      </div>
    </div>

    <div class='row'></div>

    <div class='row' id="standard_block_5">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="block_documentType">
        <div class='form-group'>
                          <label for="to_documentType" class="required">Тип документы:</label>
          <select id="to_documentType" name="to[documentType]" required="required" class="form-control" tabindex="20">            <option value=""  selected="selected"></option>            <option value="RegTalon" >Свидетельство  регистрации транспортного средства</option>            <option value="PTS" >Паспорт транспортного средства</option></select>
              
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="block_series">
        <div class='form-group'>
                          <label for="to_series" class="required">Серия документа:</label>
          <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Обратите внимание на поле Тип документа. В случае, если документом является ПТС, поле серия не может состоять только из цифр." data-html="false"></span>          <input type="text" id="to_series" name="to[series]" required="required" maxlength="10" class="form-control" autocomplete="off" tabindex="21" placeholder="" />
              
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="block_number">
        <div class='form-group'>
                          <label for="to_number" class="required">Номер документа:</label>
          <input type="text" id="to_number" name="to[number]" required="required" class="form-control" autocomplete="off" tabindex="22" placeholder="" />
              
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="block_documentDate">
        <div class='form-group'>
                          <label for="to_documentDate" class="required">Дата выдачи документа:</label>
                    <input type="text" id="to_documentDate" name="to[documentDate]" required="required" class="form-control" tabindex="23" placeholder="" />
              
        </div>
      </div>
    </div>

    <div class="row" id="standard_block_6">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="block_organization">
        <div class='form-group'>
                          <label for="to_organization" class="required">Кем выдан документ:</label>
                    <input type="text" id="to_organization" name="to[organization]" required="required" maxlength="100" class="form-control" autocomplete="off" tabindex="24" placeholder="" data-org-list="/to/ajax/organization" />
              
        </div>
      </div>
    </div>
    <div class="row" id="standard_block_7">
      <div class='form-group col-md-12' id="block_isForeign">
        <div>
          <input type="checkbox" id="to_isForeign" name="to[isForeign]" tabindex="25" value="1" />                 <label for="to_isForeign">Собственник иностранный гражданин</label>
              
        </div>
      </div>
    </div>
    <div class="row" id="standard_block_8">
      <div class="form-group col-md-4" id="block_validityRadio">
        <input id="validity_radio_regular" type="radio" name="validity_radio" value="regular" checked tabindex="26">
        <label for="validity_radio_regular">Обычное авто</label>
        <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Значение поля срок действия зависит от возраста ТС." data-html="false"></span><br>
        <input id="validity_radio_taxi_bus" type="radio" name="validity_radio" value="taxi_bus" tabindex="27">
        <label for="validity_radio_taxi_bus">Автобус или такси</label>
        <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Срок действия ТО полгода (6 месяцев)." data-html="false"></span><br>
        <input id="validity_radio_truck" type="radio" name="validity_radio" value="truck" tabindex="28">
        <label for="validity_radio_truck">Грузовик</label>
        <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Срок действия ТО 1 год (12 месяцев)." data-html="false"></span><br>
        <input id="validity_radio_dangerous" type="radio" name="validity_radio" value="dangerous">
        <label for="validity_radio_dangerous">Опасные грузы</label>
        <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Срок действия ТО полгода (6 месяцев)." data-html="false"></span><br>
      </div>
    </div>
  </div>
</div>
  <script>
    var toFormField = "0";
  </script>
        </div>
    
                    <div class="hidden">
                                                                                                                                

<table class='table table-hover'>
                    <tr>
            <td>
                <span class="">1.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p1" name="to[resultList][p1]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p1">Соответствие показателей эффективности торможения и устойчивости торможения</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">2.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p2" name="to[resultList][p2]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p2">Соответствие разности тормозных сил установленным требованиям</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">3.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p3" name="to[resultList][p3]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p3">Работоспособность рабочей тормозной системы автопоездов с пневматическим тормозным приводом в режиме аварийного (автоматического) торможения</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">4.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p4" name="to[resultList][p4]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p4">Отсутствие утечек сжатого воздуха из колесных тормозных камер</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">5.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p5" name="to[resultList][p5]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p5">Отсутствие подтеканий тормозной жидкости, нарушения герметичности трубопроводов или соединений в гидравлическом тормозном приводе</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">6.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p6" name="to[resultList][p6]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p6">Отсутствие коррозии, грозящей потерей герметичности или разрушением</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">7.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p7" name="to[resultList][p7]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p7">Отсутствие механических повреждений тормозных трубопроводов</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">8.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p8" name="to[resultList][p8]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p8">Отсутствие трещин остаточной деформации деталей тормозного привода</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">9.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p9" name="to[resultList][p9]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p9">Исправность средств сигнализации и контроля тормозных систем</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">10.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p10" name="to[resultList][p10]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p10">Отсутствие набухания тормозных шлангов под давлением, трещин и видимых мест перетирания</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">11.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p11" name="to[resultList][p11]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p11">Расположение и длина соединительных шлангов пневматического тормозного привода автопоездов</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">12.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p12" name="to[resultList][p12]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p12">Работоспособность усилителя рулевого управления. Плавность изменения усилия при повороте рулевого колеса</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">13.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p13" name="to[resultList][p13]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p13">Отсутствие самопроизвольного поворота рулевого колеса с усилителем рулевого управления от нейтрального положения при работающем двигателе</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">14.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p14" name="to[resultList][p14]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p14">Отсутствие превышения предельных значений суммарного люфта в рулевом управлении</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">15.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p15" name="to[resultList][p15]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p15">Отсутствие повреждения и полная комплектность деталей крепления рулевой колонки и картера рулевого механизма</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">16.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p16" name="to[resultList][p16]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p16">Отсутствие следов остаточной деформации, трещин и других дефектов в рулевом механизме и рулевом приводе</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">17.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p17" name="to[resultList][p17]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p17">Отсутствие устройств, ограничивающих поворот рулевого колеса, не предусмотренных конструкцией</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">18.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p18" name="to[resultList][p18]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p18">Соответствие устройств освещения и световой сигнализации установленным требованиям</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">19.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p19" name="to[resultList][p19]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p19">Отсутствие разрушений рассеивателей световых приборов</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">20.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p20" name="to[resultList][p20]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p20">Работоспособность и режим работы сигналов торможения</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">21.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p21" name="to[resultList][p21]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p21">Соответствие углов регулировки и силы света фар установленным требованиям</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">22.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p22" name="to[resultList][p22]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p22">Наличие и расположение фар и сигнальных фонарей в местах, предусмотренных конструкцией</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">23.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p23" name="to[resultList][p23]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p23">Соответствие источника света в фарах</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">24.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p24" name="to[resultList][p24]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p24">Наличие стеклоочистителя и форсунки стеклоомывателя ветрового стекла</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">25.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p25" name="to[resultList][p25]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p25">Обеспечение стеклоомывателем подачи жидкости в зоны очистки стекла</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">26.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p26" name="to[resultList][p26]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p26">Работоспособность стеклоочистителей и стеклоомывателей</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">27.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p27" name="to[resultList][p27]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p27">Соответствие высоты рисунка протектора шин установленным требованиям</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">28.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p28" name="to[resultList][p28]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p28">Отсутствие признаков непригодности шин к эксплуатации</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">29.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p29" name="to[resultList][p29]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p29">Наличие всех болтов или гаек крепления дисков и ободьев колес</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">30.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p30" name="to[resultList][p30]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p30">Отсутствие трещин на дисках и ободьях колес</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">31.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p31" name="to[resultList][p31]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p31">Отсутствие видимых нарушений формы и размеров крепежных отверстий в дисках колес</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">32.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p32" name="to[resultList][p32]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p32">Установка шин на транспортное средство в соответствии с требованиями</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">33.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p33" name="to[resultList][p33]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p33">Соответствие содержания загрязняющих веществ в отработавших газах транспортных средств установленным требованиям</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">34.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p34" name="to[resultList][p34]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p34">Отсутствие подтекания и каплепадения топлива в системе питания</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">35.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p35" name="to[resultList][p35]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p35">Работоспособность запорных устройств и устройств перекрытия топлива</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">36.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p36" name="to[resultList][p36]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p36">Герметичность системы питания транспортных средств, работающих на газе. Соответствие газовых баллонов установленным требованиям</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">37.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p37" name="to[resultList][p37]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p37">Соответствие нормам уровня шума выпускной системы</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">38.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p38" name="to[resultList][p38]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p38">Наличие зеркал заднего вида в соответствии с требованиями</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">39.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p39" name="to[resultList][p39]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p39">Отсутствие дополнительных предметов или покрытий, ограничивающих обзорность с места водителя. Соответствие полосы пленки в верхней части ветрового стекла установленным требованиям</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">40.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p40" name="to[resultList][p40]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p40">Соответствие норме светопропускания ветрового стекла, передних боковых стекол и стекол передних дверей</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">41.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p41" name="to[resultList][p41]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p41">Отсутствие трещин на ветровом стекле в зоне очистки водительского стеклоочистителя</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">42.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p42" name="to[resultList][p42]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p42">Работоспособность замков дверей кузова, кабины, механизмов регулировки и фиксирующих устройств сидений, устройства обогрева и обдува ветрового стекла, противоугонного устройства</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">43.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p43" name="to[resultList][p43]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p43">Работоспособность запоров бортов грузовой платформы и запоров горловин цистерн</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">44.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p44" name="to[resultList][p44]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p44">Работоспособность аварийного выключателя дверей и сигнала требования остановки</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">45.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p45" name="to[resultList][p45]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p45">Работоспособность аварийных выходов, приборов внутреннего освещения салона, привода управления дверями и сигнализации их работы</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">46.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p46" name="to[resultList][p46]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p46">Наличие работоспособного звукового сигнального прибора</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">47.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p47" name="to[resultList][p47]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p47">Наличие обозначений аварийных выходов и табличек по правилам их использования. Обеспечение свободного доступа к аварийным выходам</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">48.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p48" name="to[resultList][p48]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p48">Наличие задних и боковых защитных устройств, соответствие их нормам</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">49.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p49" name="to[resultList][p49]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p49">Работоспособность автоматического замка, ручной и автоматической блокировки седельно-сцепного устройства. Отсутствие видимых повреждений сцепных устройств</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">50.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p50" name="to[resultList][p50]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p50">Наличие работоспособных предохранительных приспособлений у одноосных прицепов (за исключением роспусков) и прицепов, не оборудованных рабочей тормозной системой</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">51.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p51" name="to[resultList][p51]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p51">Оборудование прицепов (за исключением одноосных и роспусков) исправным устройством, поддерживающим сцепную петлю дышла в положении, облегчающем сцепку и расцепку с тяговым автомобилем</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">52.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p52" name="to[resultList][p52]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p52">Отсутствие продольного люфта в беззазорных тягово-сцепных устройствах с тяговой вилкой для сцепленного с прицепом тягача</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">53.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p53" name="to[resultList][p53]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p53">Обеспечение тягово-сцепными устройствами легковых автомобилей беззазорной сцепки сухарей замкового устройства с шаром</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">54.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p54" name="to[resultList][p54]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p54">Соответствие размерных характеристик сцепных устройств установленным требованиям</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">55.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p55" name="to[resultList][p55]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p55">Оснащение транспортных средств исправными ремнями безопасности</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">56.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p56" name="to[resultList][p56]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p56">Наличие знака аварийной остановки</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">57.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p57" name="to[resultList][p57]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p57">Наличие не менее двух противооткатных упоров</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">58.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p58" name="to[resultList][p58]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p58">Наличие огнетушителей, соответствующих установленным требованиям</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">59.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p59" name="to[resultList][p59]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p59">Надежное крепление поручней в автобусах, запасного колеса, аккумуляторной батареи, сидений, огнетушителей и медицинской аптечки</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">60.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p60" name="to[resultList][p60]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p60">Работоспособность механизмов регулировки сидений</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">61.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p61" name="to[resultList][p61]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p61">Наличие надколесных грязезащитных устройств, отвечающих установленным требованиям</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">62.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p62" name="to[resultList][p62]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p62">Соответствие вертикальной статической нагрузки на тяговое устройство автомобиля от сцепной петли одноосного прицепа (прицепа-роспуска) нормам</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">63.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p63" name="to[resultList][p63]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p63">Работоспособность держателя запасного колеса, лебедки и механизма подъема-опускания запасного колеса</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">64.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p64" name="to[resultList][p64]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p64">Работоспособность механизмов подъема и опускания опор и фиксаторов транспортного положения опор</label>
            </td><td>
                    
            </td>
        </tr>
                            <tr>
            <td>
                <span class="">65.</span>
            </td><td>
                <input type="checkbox" id="to_resultList_p65" name="to[resultList][p65]" class="" value="1" />
            </td><td>
                                <label for="to_resultList_p65">Соответствие каплепадения масел и рабочих жидкостей нормам</label>
            </td><td>
                    
            </td>
        </tr>
            </table>
                        </div>

                                                                                        <div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title"><span class="text-primary">Заключение о возможности/невозможности эксплуатации транспортного средства</span></h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class='form-group col-lg-3 col-md-4 col-sm-6 col-xs-12'>
                                <label for="to_testResult" class="required">Результат проверки:</label>
                <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Данное поле заполняется автоматически и не должно быть изменено." data-html="false"></span>                <select id="to_testResult" name="to[testResult]" class="form-control" readonly="readonly">            <option value="Passed" >Пройдена</option>            <option value="NotPassed" >Не пройдена</option></select>
                    
            </div>
            <div class='form-group col-lg-3 col-md-4 col-sm-6 col-xs-12'>
                                <label for="to_testType" class="required">Вид проверки:</label>
                <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Данное поле заполняется автоматически и не должно быть изменено." data-html="false"></span>                <select id="to_testType" name="to[testType]" class="form-control" readonly="readonly">            <option value="Primary" >Первичная</option>            <option value="Secondary" >Повторная</option></select>
                    
            </div>
                <div class="col-md-6">
                <div class='form-group'>
                                    <label for="to_note">Примечания:</label>
                        
                    <textarea id="to_note" name="to[note]" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
    
            <div class="row"></div>

                            <div class='form-group col-lg-3 col-md-4 col-sm-6 col-xs-12'>
                                    <label for="to_dateOfDiagnosis" class="required">Дата проверки:</label>
                    <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Данное поле заполняется автоматически и не может быть изменено." data-html="false"></span>                    <input type="text" id="to_dateOfDiagnosis" name="to[dateOfDiagnosis]" required="required" class="form-control" value="03-10-2016" readonly="readonly" />
                        
                </div>
            
                        <div class='form-group col-lg-4 col-md-5 col-sm-5 col-xs-12' id="validity_block">
                                    <label for="to_validity" class="required">Срок действия до:</label>
                    <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Нажмите на кнопку для автоматического проставления срока действия в месяцах, начиная с сегодняшнего дня. Для автобусов и такси срок действия ТО должен быть равен 6 месяцам. Для остальных автомобилей можно воспользоваться кнопкой auto." data-html="false"></span>                    <div class="input-group" id="validity_area">
                        <div id="validity_buttons" class="btn-group btn-group-sm">
                            <a title="6 месяцев" id="validity_6" class="btn btn-default" style="color: #000000" tabindex="30">6</a>
                            <a title="12 месяцев" id="validity_12" class="btn btn-success" tabindex="31">12</a>
                            <a title="24 месяца" id="validity_24" class="btn btn-warning" tabindex="32">24</a>
                            <a id="validity_auto" class="btn btn-primary pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Для машин младше 3 лет - 3 года, 3-7 лет - 2 года, более 7 лет - 1 год.">auto</a>
                        </div>
                        <input type="text" id="to_validity" name="to[validity]" required="required" class="form-control" autocomplete="off" tabindex="29" style="width: 130px" placeholder="" />
                    </div>
                        
                </div>
        
                </div>
    </div>
</div>            
                            <input id="submit_form" type="submit" name="submitButton" class="btn btn-primary btn-lg"
                       value="Сохранить" tabindex="33">
                        <input type="hidden" id="to__token" name="to[_token]" value="WiFtWMmtXelsed2XdomXePLhgBHKv7TlUKhKYHiohWo" /></form>
        </div>
    </div>
                                                            </div>
            </div>
        </div>
    </div>
                </div>
            </div>
            <div id="push"></div>
        </div>
                
        <script type="text/javascript" src="js/vendor.min.js"></script>
<script type="text/javascript" src="js/core.js"></script>                    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
    
    <script type="text/javascript" src="js/jquery.editableSelect.js"></script>
    <script type="text/javascript" src="js/chosen.jquery.min.js"></script>

            <script type="text/javascript" src="js/dkform_bv_other.js"></script>
    
    
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

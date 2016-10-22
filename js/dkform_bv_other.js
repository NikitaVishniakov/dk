handle_models = function (data) {
  var result = System.core.objToArray(data);
  $("#to_model").autocomplete({
    source: result
  });
};
handle_marks = function (data) {
  var result = System.core.objToArray(data);
  $("#to_make").autocomplete({
    source: result
  });
};

$(document).on('ready', function () {
  jQuery(function ($) {
    $.datepicker.regional['ru'] = {
      closeText: 'Закрыть',
      prevText: '&#x3C;Пред',
      nextText: 'След&#x3E;',
      currentText: 'Сегодня',
      monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
        'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
      monthNamesShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн',
        'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
      dayNames: ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
      dayNamesShort: ['вск', 'пнд', 'втр', 'срд', 'чтв', 'птн', 'сбт'],
      dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
      weekHeader: 'Нед',
      dateFormat: 'dd.mm.yy',
      firstDay: 1,
      isRTL: false,
      showMonthAfterYear: false,
      yearSuffix: ''};
    $.datepicker.setDefaults($.datepicker.regional['ru']);
  });

//bootstrap validation config
  $(to)
          .bootstrapValidator({
            message: 'Неверное значение поля.',
            feedbackIcons: {
              valid: 'glyphicon glyphicon-ok',
              invalid: 'glyphicon glyphicon-remove',
              validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
              "to[name]": {
                validators: {
                  notEmpty: {
                    message: 'Поле "Фамилия" обязательно для заполнения.'
                  },
                  stringLength: {
                    min: 2,
                    message: 'Поле "Фамилия" не должно быть короче 2 символов.'
                  },
                  regexp: {
                    regexp: /^([a-zA-ZА-Яа-яёЁ]+)([a-zA-ZА-Яа-яёЁ-]*)([a-zA-ZА-Яа-яёЁ]+)$/,
                    message: 'Поле "Фамилия" может содержать только буквы и знак "-".'
                  }
                }
              },
              "to[fName]": {
                validators: {
                  notEmpty: {
                    message: 'Поле "Имя" обязательно для заполнения.'
                  },
                  stringLength: {
                    min: 2,
                    message: 'Поле "Имя" не должно быть короче 2 символов.'
                  },
                  regexp: {
                    regexp: /^([a-zA-ZА-Яа-яёЁ]+)([a-zA-ZА-Яа-яёЁ-]*)([a-zA-ZА-Яа-яёЁ]+)$/,
                    message: 'Поле "Имя" может содержать только буквы и знак "-".'
                  }
                }
              },
              "to[mName]": {
                validators: {
                  stringLength: {
                    min: 2,
                    message: 'Поле "Отчество" не должно быть короче 2 символов.'
                  },
                  regexp: {
                    regexp: /^([a-zA-ZА-Яа-яёЁ]+)([a-zA-ZА-Яа-яёЁ-]*)([a-zA-ZА-Яа-яёЁ]+)$/,
                    message: 'Поле "Отчество" может содержать только буквы и знак "-".'
                  }
                }
              },
              "to[vin]": {
                validators: {
                  stringLength: {
                    min: 17,
                    max: 17,
                    message: 'Поле "VIN" должно быть длиной 17 символов.'
                  },
                  regexp: {
                    regexp: /^([0-9A-Za-zА-Яа-яёЁ]{17})$/,
                    message: 'Поле "VIN" может содержать только буквы и цифры.'
                  },
                  callback: {
                    message: 'Должно быть заполнено хотя бы одно из полей: VIN, Номер кузова или Номер шасси.',
                    callback: function (vin, validator) {
                      var bodyNumber = $('#to_bodyNumber').val();
                      var frameNumber = $('#to_frameNumber').val();

                      if (!vin && !bodyNumber && !frameNumber)
                        return false;

                      return true;
                    }
                  }
                }
              },
              "to[bodyNumber]": {
                trigger: 'change',
                validators: {
                  regexp: {
                    regexp: /^(?!(.*[\\]){1})([0-9a-zA-ZА-Яа-яёЁ-]*)$/,
                    message: 'Поле "Номер кузова" может содержать только буквы, цифры и знак "-".'
                  }
                }
              },
              "to[frameNumber]": {
                validators: {
                  regexp: {
                    regexp: /^(?!(.*[\\]){1})([0-9a-zA-ZА-Яа-яёЁ-]*)$/,
                    message: 'Поле "Номер шасси" может содержать только буквы, цифры и знак "-".'
                  }
                }
              },
              "to[killometrage]": {
                trigger: 'input change focusout',
                validators: {
                  notEmpty: {
                    message: 'Поле "Пробег" обязательно для заполнения.'
                  },
                  regexp: {
                    regexp: /^(([1-9]{1}[0-9]*)|([0]{1}))$/,
                    message: 'Поле "Пробег" должно быть положительным целым числом.'
                  }
                }
              },
              "to[make]": {
                validators: {
                  notEmpty: {
                    message: 'Поле "Марка" обязательно для заполнения.'
                  }
                }
              },
              "to[model]": {
                validators: {
                  notEmpty: {
                    message: 'Поле "Модель" обязательно для заполнения.'
                  }
                }
              },
              "to[year]": {
                validators: {
                  notEmpty: {
                    message: 'Поле "Год" обязательно для заполнения.'
                  },
                  stringLength: {
                    min: 4,
                    max: 4,
                    message: 'Поле "Год" должно быть длиной 4 символа.'
                  },
                  callback: {
                    message: 'Год не может быть больше текущего или меньше 1950.',
                    callback: function (year, validator) {
                      var currentYear = (new Date()).getFullYear();

                      return +year <= currentYear && +year >= 1950;
                    }
                  }
                }
              },
              "to[emptyMass]": {
                validators: {
                  notEmpty: {
                    message: 'Поле "Масса без нагрузки" обязательно для заполнения.'
                  },
                  regexp: {
                    regexp: /^([1-9]{1}[0-9]*)$/,
                    message: 'Поле "Масса без нагрузки" должно быть положительным целым числом.'
                  },
                  callback: {
                    message: 'Масса без нагрузки должна быть меньше максимальной массы.',
                    callback: function (minMass, validator) {
                      var maxMass = $('#to_maxMass').val();
                      if (maxMass === "")
                        return true;

                      return +maxMass > +minMass;
                    }
                  }
                }
              },
              "to[vechicleCategory]": {
                validators: {
                  notEmpty: {
                    message: 'Поле "Категория ТС (СРТС или ПТС)" обязательно для заполнения.'
                  }
                }
              },
              "to[vechicleCategory2]": {
                validators: {
                  notEmpty: {
                    message: 'Поле "Категория ТС (ОКП)" обязательно для заполнения.'
                  }
                }
              },
              "to[tyres]": {
                validators: {
                  notEmpty: {
                    message: 'Поле "Марка шин" обязательно для заполнения.'
                  }
                }
              },
              "to[maxMass]": {
                validators: {
                  notEmpty: {
                    message: 'Поле "Максимальная масса" обязательно для заполнения.'
                  },
                  regexp: {
                    regexp: /^([1-9]{1}[0-9]*)$/,
                    message: 'Поле "Максимальная масса" должно быть положительным целым числом.'
                  },
                  callback: {
                    message: 'Максимальная масса должна быть больше массы без нагрузки.',
                    callback: function (maxMass, validator) {
                      var minMass = $('#to_emptyMass').val();
                      if (minMass === "")
                        return true;

                      return +maxMass > +minMass;
                    }
                  }
                }
              },
//                "to[fuel]": {
//                    validators: {
//                        notEmpty: {
//                            message: 'Поле "Тип топлива" обязательно для заполнения.'
//                        }
//                    }
//                },
              "to[fuel]": {
                enabled: false,
                validators: {}
              },
              "to[brakingSystem]": {
                validators: {
                  notEmpty: {
                    message: 'Поле "Тип тормозной системы" обязательно для заполнения.'
                  }
                }
              },
              "to[documentType]": {
                validators: {
                  notEmpty: {
                    message: 'Поле "Тип документа" обязательно для заполнения.'
                  }
                }
              },
              "to[series]": {
                validators: {
                  notEmpty: {
                    message: 'Поле "Серия документа" обязательно для заполнения.'
                  },
                  regexp: {
                    regexp: /^([0-9]{2}([0-9]{2}|[0-9]{4}|[А-яA-z]{2})|[0-9A-Za-zА-Яа-яёЁ]{2,3})$/,
                    message: 'Поле "Серия документа" должно содержать от 2 до 4 символов, среди которых только цифры и буквы.'
                  }
                }
              },
              "to[number]": {
                validators: {
                  notEmpty: {
                    message: 'Поле "Номер документа" обязательно для заполнения.'
                  },
                  regexp: {
                    regexp: /^([0-9]){6}$/,
                    message: 'Поле "Номер документа" должно содержать 6 цифр.'
                  }
                }
              },
              "to[documentDate]": {
                trigger: 'input change focusout',
                validators: {
                  notEmpty: {
                    message: 'Поле "Дата выдачи документа" обязательно для заполнения.'
                  }
                }
              },
              "to[organization]": {
                trigger: 'input change focusout',
                validators: {
                  notEmpty: {
                    message: 'Поле "Кем выдан документ" обязательно для заполнения.'
                  }
                }
              },
              "to[validity]": {
                trigger: 'input change focusout',
                validators: {
                  notEmpty: {
                    message: 'Поле "Срок действия до" обязательно для заполнения.'
                  }
                }
              },
              "to[isForeign]": {
                enabled: false,
                validators: {}
              },
              "validity_radio": {
                enabled: false,
                validators: {}
              },
              "to[note]": {
                enabled: false,
                validators: {}
              },
              "to[testResult]": {
                enabled: false,
                validators: {}
              },
              "to[testType]": {
                enabled: false,
                validators: {}
              },
              "to[dateOfDiagnosis]": {
                enabled: false,
                validators: {}
              },
              "to[userPin]": {
                enabled: false,
                validators: {}
              }
            }
          })
          .find('[name="to[vin]"]').mask('ZZZZZZZZZZZZZZZZZ', {translation: {'Z': {pattern: /[0-9А-Яа-яёЁA-Za-z]/}}})
          .end()
          .find('[name="to[year]"]').mask('ABCZ', {translation: {'Z': {pattern: /[0-9]/}, 'A': {pattern: /[1-2]/}, 'B': {pattern: /[09]/}, 'C': {pattern: /[56789012]/}}})
          .end()
          .find('[name="to[number]"]').mask('AAAAAA', {translation: {'A': {pattern: /[0-9]/}}})
          .end()
          .find('[name="to[userPin]"]').mask('AAAAAA', {translation: {'A': {pattern: /[0-9]/}}})
          ;
  $('[name="to[documentDate]"], [name="to[validity]"]').on('focusin', function () {
    var value = $(this).val();
    $(this)
            .mask("DC-EC-ABCC", {placeholder: "__-__-____", translation: {'A': {pattern: /[1-2]/}, 'B': {pattern: /[09]/}, 'C': {pattern: /[0-9]/}, 'D': {pattern: /[0-3]/}, 'E': {pattern: /[0-2]/}}})
            .val(value)
            ;
  });
//end of bootstrap validation config

// autocomplete for marks & models

  (function () {
    var elem = document.createElement('script'),
            autocompleteUrl = $("#to_make").data("autocomplete-marks")
            ;
    $(elem).attr('src', autocompleteUrl);
    document.body.appendChild(elem);
  }());

  $("#to_make").on('focusout', function () {
    var elem = document.createElement('script'),
            autocompleteUrl = $("#to_model").data("autocomplete-models")
            ;
    $(elem).attr('src', autocompleteUrl + "/" + $(this).val());
    document.body.appendChild(elem);
  });

  System.dkForm = {organization: {elem: $("#to_organization"), cache: {}}};

  System.dkForm.organization.elem.autocomplete({
    minLength: 3,
    delay: 1000,
    source: function (request, response) {
      var orgListUrl = $(System.dkForm.organization.elem).data("org-list");
      var value = request.term;
      if (value in System.dkForm.organization.cache) {
        response(System.dkForm.organization.cache[ value ]);
        return;
      }

      $.post(orgListUrl, request, function (data) {
        System.dkForm.organization.cache[ value ] = data;
        response(data);
      });
    }
  });

  //$(System.dkForm.organization.elem).on('input', function() {
  //    var value = $(this).val(),
  //        orgListUrl = $(this).data("org-list")
  //    ;
  //    if (!value.match(/[\s]$/)) {
  //        return;
  //    }
  //
  //    if (System.dkForm.organization.ajaxData[value]) {
  //        $(System.dkForm.organization.elem).autocomplete({
  //            source: System.core.objToArray(System.dkForm.organization.ajaxData[value])
  //        });
  //
  //        return;
  //    }
  //    $.ajax({
  //        url: orgListUrl,
  //        data: {'value': value},
  //        dataType : "json",
  //        type: 'POST',
  //        success: function(data) {
  //            if (data != 0) {
  //                $("#to_organization").autocomplete({
  //                    source: System.core.objToArray(data)
  //                });
  //
  //                System.dkForm.organization.ajaxData[value] = data;
  //            }
  //        }
  //    });
  //});
// end of autocomplete

// validity radiobuttons
  $('input[name="validity_radio"]').on('click', function () {
    var value = $('input[name="validity_radio"]:checked').val();
    var now = new Date();
    var day = (now.getDate() < 10) ? '0' + now.getDate() : now.getDate();
    var date = new Date();
    if (value === 'taxi_bus' || value === 'dangerous') {
      $('#validity_buttons').fadeOut();
      date.setMonth(now.getMonth() + 6);
      var month = (date.getMonth() + 1 < 10) ? '0' + (+date.getMonth() + 1) : date.getMonth() + 1;
      $("#to_validity").val(day + '-' + (month) + '-' + (date.getFullYear())).change();
    } else if (value === 'truck') {
      $('#validity_buttons').fadeOut();
      var month = (date.getMonth() + 1 < 10) ? '0' + (+date.getMonth() + 1) : date.getMonth() + 1;
      $("#to_validity").val(day + '-' + (month) + '-' + (date.getFullYear() + 1)).change();
    } else if (value === 'regular') {
      $('#validity_buttons').fadeIn();
      $("#to_validity").val('').change();
    }
  });
// end of validity radiobuttons

  $("form").on("submit", function () {
    if (
            ($('#to_vin').val() == 0 || $('#to_vin').prop('disabled') || $('#to_vin').val() == 'ОТСУТСТВУЕТ')
            && ($('#to_bodyNumber').val() == 0 || $('#to_bodyNumber').prop('disabled') || $('#to_bodyNumber').val() == 'ОТСУТСТВУЕТ')
            && ($('#to_frameNumber').val() == 0 || $('#to_frameNumber').prop('disabled') || $('#to_frameNumber').val() == 'ОТСУТСТВУЕТ')
            ) {
      $('#to_vin').focus();
      System.core.popup('danger', 'Должно быть заполнено хотя бы одно из полей: VIN, Номер кузова или Номер шасси.', 60000);

      return false;
    }

    if ($("input[name=submit]").val() !== "Запросить дубликат") {
      if ($('#to_validity').val() == false) {
        $('#collapseThree').collapse('show').on('shown.bs.collapse', function () {
          System.core.popup('danger', 'Необходимо заполнить срок действия ДК.', 60000);
        });

        return false;
      }
    }

    //System.core.startLoading();

    return true;
  });

// for changing color of fields label while validation
  $('label').addClass('control-label');

  $('#copy_vin_to_body_number').on('click', function () {
    $('#to_bodyNumber').val($('#to_vin').val()).change().focus();
  });

  changeVechicleCategory();

  $('#to_vechicleCategory').on('change', function () {
    vechicleCategoryOptions($(this).val());
    $('#to_vechicleCategory2');
    if ($(this).val() != 'E') {
      $($("#to_fuel").find('option')[5]).remove();
      $("#to_fuel");
    } else {
      if ($("#to_fuel").find('option').length < 6) {
        $("#to_fuel").append('<option value="None">Без топлива</option>');
      }
    }
  });

// disable vin, bodyNumber, frameNumber by checkbox
  function nullField(field, checkbox)
  {
    $(checkbox).on('change', function ()
    {
      if ($(this).prop('checked') == false) {
        $(field).prop('disabled', false).val('');
      } else {
        $(field).val('').prop('disabled', true).val('ОТСУТСТВУЕТ');
      }
    });
  }
  var nullableFields = ['vin', 'bodyNumber', 'frameNumber'];
  for (var i = 0; i < nullableFields.length; i++) {
    nullField('#to_' + nullableFields[i], '#disable_' + nullableFields[i]);
  }
// end disabling by checkbox

  $('tr').on('click', function ()
  {
    if ($(this).filter('input').prop('checked') == true) {
      $(this).filter('input').prop('checked', false);
    } else {
      $(this).filter('input').prop('checked', true);
    }
  });

  $('#to_vechicleCategory2').on('change', function () {
    changeVechicleCategory($('#to_vechicleCategory2').val());
  });

  $('#to_validity').off('focus').on('change', function () {
    if ($(this)) {
      $($(this).parent().parent().children()[0]).addClass('success valid');
    } else {
      $($(this).parent().parent().children()[0]).removeClass('success valid');
    }
  });

  var now = new Date();

  $('#to_year').on('change', function () {
    setDatepickerToDocumentDate($(this).val())
  });

  setDatepickerToDocumentDate($('#to_year').val());

  function setDatepickerToDocumentDate(val)
  {
    if (!val) {
      return false;
    }

    var yearRange = val + ':' + now.getFullYear();
    $('#to_documentDate').datepicker({
      maxDate: 0,
      dateFormat: 'dd-mm-yy',
      changeMonth: true,
      changeYear: true,
      yearRange: yearRange,
      firstDay: 1,
      onSelect: function () {
        $('form').data('bootstrapValidator')
                .updateStatus('to[documentDate]', 'NOT_VALIDATED', null)
                .validateField('to[documentDate]');
      }
    });
  }

  $("#to_validity").datepicker({
    minDate: +21,
    dateFormat: 'dd-mm-yy',
    changeMonth: true,
    changeYear: true,
    onSelect: function () {
      $('form').data('bootstrapValidator')
              .updateStatus('to[validity]', 'NOT_VALIDATED', null)
              .validateField('to[validity]');
    }
  });

// autocomplete for tyres
  $("#to_tyres").autocomplete({
    source: tyresArray
  });
// end of autocomplete

// uppercase fields
  $("#to_name, #to_fName, #to_mName, #to_vin, #to_registrationNumber, #to_series, #to_bodyNumber, #to_frameNumber").on('focusout', function () {
    $(this).val($(this).val().toUpperCase());
  });
// end of uppercase

  $('#form_p2_link').on('click', function () {
    changeVechicleCategory($('#to_vechicleCategory2').val());
  });

  $('#to_series').on('focusout', function () {
    if (($('#to_series').val()).length == 5) {
      $('#to_series').val("");
    }
  });

  var day = (now.getDate() < 10) ? '0' + now.getDate() : now.getDate();
  $("#validity_6").on("click", function () {
    var date = new Date();
    date.setMonth(now.getMonth() + 6);
    var month = (date.getMonth() + 1 < 10) ? '0' + (+date.getMonth() + 1) : date.getMonth() + 1;
    $("#to_validity").val(day + '-' + (month) + '-' + (date.getFullYear())).change();
  });
  $("#validity_12").on("click", function () {
    var month = (now.getMonth() + 1 < 10) ? '0' + (now.getMonth() + 1) : now.getMonth() + 1;
    $("#to_validity").val(day + '-' + (month) + '-' + (now.getFullYear() + 1)).change();
  });
  $("#validity_24").on("click", function () {
    var month = (now.getMonth() + 1 < 10) ? '0' + (now.getMonth() + 1) : now.getMonth() + 1;
    $("#to_validity").val(day + '-' + (month) + '-' + (now.getFullYear() + 2)).change();
  });
  $('#validity_auto').on('click', function () {
    var curYear = now.getFullYear();
    var year = $("#to_year").val();
    var auto = (curYear - year) < 7 ? ((curYear - year) < 3 ? 3 : 2) : 1;
    var month = (now.getMonth() + 1 < 10) ? '0' + (now.getMonth() + 1) : now.getMonth() + 1;
    $("#to_validity").val(day + '-' + (month) + '-' + (now.getFullYear() + auto)).change();
  });

  $('#make_srts_view').on('click', function (e) {
    e.preventDefault();
    $('#make_standard_view').removeClass();
    $('#make_pts_view').removeClass();
    $(this).addClass('active');
    strsView();
  });
  $('#make_standard_view').on('click', function (e) {
    e.preventDefault();
    $('#make_srts_view').removeClass();
    $('#make_pts_view').removeClass();
    $(this).addClass('active');
    standardView();
  });
  $('#make_pts_view').on('click', function (e) {
    e.preventDefault();
    $('#make_srts_view').removeClass();
    $('#make_standard_view').removeClass();
    $(this).addClass('active');
    ptsView();
  });

  function strsView()
  {
    $('.standard_view').hide();
    $('.pts_view').hide();
    $('#to_documentType').val('RegTalon');
    $('#main_view_size').removeClass().addClass('col-md-12');
    $('#block_registrationNumber').removeClass().addClass('form-group').appendTo('#srts_row_0').find('input').attr({'tabindex': 1, 'autofocus': 1});
    $('#block_vin').removeClass().addClass('form-group').appendTo('#srts_row_0').find('input').attr('tabindex', 2);
    $('#block_make').removeClass().addClass('form-group col-md-6').appendTo('#srts_row_1').find('input').attr('tabindex', 3);
    $('#block_model').removeClass().addClass('form-group col-md-6').appendTo('#srts_row_1').find('input').attr('tabindex', 4);
    $('#standard_block_1_1').remove();
    $('#block_vechicleCategory').removeClass().addClass('form-group col-md-6').appendTo('#srts_row_2').find('select').attr('tabindex', 5);
    $('#block_vechicleCategory2').removeClass().addClass('form-group col-md-6').appendTo('#srts_row_2').find('select').attr('tabindex', 6);
    $('#block_year').removeClass().addClass('form-group col-md-3').appendTo('#srts_row_3').find('input').attr('tabindex', 7);
    $('#block_frameNumber').removeClass().addClass('form-group').appendTo('#srts_row_4').find('input').attr('tabindex', 8);
    $('#block_bodyNumber').removeClass().addClass('form-group').appendTo('#srts_row_4').find('input').attr('tabindex', 9);
    $('#block_maxMass').removeClass().addClass('form-group').appendTo('#srts_row_4').find('input').attr('tabindex', 10);
    $('#block_emptyMass').removeClass().addClass('form-group').appendTo('#srts_row_4').find('input').attr('tabindex', 11);
    $('#block_name').removeClass().addClass('form-group col-md-3').appendTo('#srts_row_5').find('input').attr('tabindex', 12);
    $('#block_fname').removeClass().addClass('form-group col-md-3').appendTo('#srts_row_5').find('input').attr('tabindex', 13);
    $('#block_mname').removeClass().addClass('form-group col-md-3').appendTo('#srts_row_5').find('input').attr('tabindex', 14);
    $('#block_phone').removeClass().addClass('form-group col-md-3').appendTo('#srts_row_5').find('input').attr('tabindex', 14);
    $('#block_documentType').removeClass().addClass('form-group').appendTo('#srts_row_6').hide();
    $('#block_series').removeClass().addClass('form-group col-md-6').appendTo('#srts_row_7').find('input').attr('tabindex', 15);
    $('#block_number').removeClass().addClass('form-group col-md-6').appendTo('#srts_row_7').find('input').attr('tabindex', 16);
    $('#block_organization').removeClass().addClass('form-group col-md-8').appendTo('#srts_row_8').find('input').attr('tabindex', 17);
    $('#block_documentDate').removeClass().addClass('form-group col-md-4').appendTo('#srts_row_8').find('input').attr('tabindex', 18);
    $('#block_killometrage').removeClass().addClass('form-group col-md-3').appendTo('#srts_row_9').find('input').attr('tabindex', 19);
    $('#block_tyres').removeClass().addClass('form-group col-md-3').appendTo('#srts_row_9').find('input').attr('tabindex', 20);
    $('#block_fuel').removeClass().addClass('form-group col-md-3').appendTo('#srts_row_9').find('select').attr('tabindex', 21);
    $('#block_brakingSystem').removeClass().addClass('form-group col-md-3').appendTo('#srts_row_9').find('select').attr('tabindex', 22);
    $('#block_isForeign').removeClass().addClass('form-group col-md-12').appendTo('#srts_row_10');
    $('#block_validityRadio').removeClass().addClass('form-group col-md-4').appendTo('#srts_row_11');
    $('.srts_view').show();
  }

  function ptsView()
  {
    $('.standard_view').hide();
    $('.srts_view').hide();
    $('#to_documentType').val('PTS');
    $('#main_view_size').removeClass().addClass('col-md-12');
    $('#block_vin').removeClass().addClass('form-group').appendTo('#pts_row_0').find('input').attr({'tabindex': 1, 'autofocus': 1});
    $('#block_make').removeClass().addClass('form-group col-md-6').appendTo('#pts_row_1').find('input').attr('tabindex', 2);
    $('#block_model').removeClass().addClass('form-group col-md-6').appendTo('#pts_row_1').find('input').attr('tabindex', 3);
    $('#standard_block_1_1').remove();
    $('#block_vechicleCategory').removeClass().addClass('form-group col-md-6').appendTo('#pts_row_2').find('select').attr('tabindex', 4);
    $('#block_vechicleCategory2').removeClass().addClass('form-group col-md-6').appendTo('#pts_row_2').find('select').attr('tabindex', 5);
    $('#block_year').removeClass().addClass('form-group col-md-3').appendTo('#pts_row_3').find('input').attr('tabindex', 6);
    $('#block_frameNumber').removeClass().addClass('form-group').appendTo('#pts_row_4').find('input').attr('tabindex', 7);
    $('#block_bodyNumber').removeClass().addClass('form-group').appendTo('#pts_row_4').find('input').attr('tabindex', 8);
    $('#block_maxMass').removeClass().addClass('form-group').appendTo('#pts_row_4').find('input').attr('tabindex', 9);
    $('#block_emptyMass').removeClass().addClass('form-group').appendTo('#pts_row_4').find('input').attr('tabindex', 10);
    $('#block_name').removeClass().addClass('form-group col-md-3').appendTo('#pts_row_5').find('input').attr('tabindex', 11);
    $('#block_fname').removeClass().addClass('form-group col-md-3').appendTo('#pts_row_5').find('input').attr('tabindex', 12);
    $('#block_mname').removeClass().addClass('form-group col-md-3').appendTo('#pts_row_5').find('input').attr('tabindex', 13);
    $('#block_phone').removeClass().addClass('form-group col-md-3').appendTo('#pts_row_5').find('input').attr('tabindex', 13);
    $('#block_documentType').removeClass().addClass('form-group').appendTo('#pts_row_6').hide();
    $('#block_series').removeClass().addClass('form-group col-md-6').appendTo('#pts_row_7').find('input').attr('tabindex', 14);
    $('#block_number').removeClass().addClass('form-group col-md-6').appendTo('#pts_row_7').find('input').attr('tabindex', 15);
    $('#block_organization').removeClass().addClass('form-group col-md-8').appendTo('#pts_row_8').find('input').attr('tabindex', 16);
    $('#block_documentDate').removeClass().addClass('form-group col-md-4').appendTo('#pts_row_8').find('input').attr('tabindex', 17);
    $('#block_registrationNumber').removeClass().addClass('form-group col-md-12').appendTo('#pts_row_9').find('input').attr('tabindex', 18);
    $('#block_killometrage').removeClass().addClass('form-group col-md-3').appendTo('#pts_row_9').find('input').attr('tabindex', 19);
    $('#block_tyres').removeClass().addClass('form-group col-md-3').appendTo('#pts_row_9').find('input').attr('tabindex', 20);
    $('#block_fuel').removeClass().addClass('form-group col-md-3').appendTo('#pts_row_9').find('select').attr('tabindex', 21);
    $('#block_brakingSystem').removeClass().addClass('form-group col-md-3').appendTo('#pts_row_9').find('select').attr('tabindex', 22);
    $('#block_isForeign').removeClass().addClass('form-group col-md-12').appendTo('#pts_row_10');
    $('#block_validityRadio').removeClass().addClass('form-group col-md-4').appendTo('#pts_row_11');
    $('.pts_view').show();
  }

  function standardView()
  {
    $('.srts_view').hide();
    $('.pts_view').hide();
    $('#block_name').removeClass().addClass('form-group col-md-3').appendTo('#standard_block_0')
            .find('input').attr({'tabindex': 1, 'autofocus': 1});
    $('#block_fname').removeClass().addClass('form-group col-md-3').appendTo('#standard_block_0')
            .find('input').attr('tabindex', 2);
    $('#block_mname').removeClass().addClass('form-group col-md-3').appendTo('#standard_block_0')
            .find('input').attr('tabindex', 3);
    $('#block_phone').removeClass().addClass('form-group col-md-3').appendTo('#standard_block_0')
            .find('input').attr('tabindex', 3);
    $('#block_vin').removeClass().addClass('form-group col-md-6').appendTo('#standard_block_1')
            .find('input').attr('tabindex', 4);
    $('#block_year').removeClass().addClass('form-group col-md-3').appendTo('#standard_block_1')
            .find('input').attr('tabindex', 5);
    $('#standard_block_1').append('<div id="standard_block_1_1" class="col-md-3"></div>');
    $('#block_make').removeClass().addClass('form-group').appendTo('#standard_block_1_1')
            .find('input').attr('tabindex', 6);
    $('#block_model').removeClass().addClass('form-group').appendTo('#standard_block_1_1')
            .find('input').attr('tabindex', 7);
    $('#block_bodyNumber').removeClass().addClass('form-group col-md-3').appendTo('#standard_block_2')
            .find('input').attr('tabindex', 8);
    $('#block_frameNumber').removeClass().addClass('form-group col-md-3').appendTo('#standard_block_2')
            .find('input').attr('tabindex', 9);
    $('#block_killometrage').removeClass().addClass('form-group col-md-3').appendTo('#standard_block_2')
            .find('input').attr('tabindex', 10);
    $('#block_registrationNumber').removeClass().addClass('form-group col-md-3').appendTo('#standard_block_3')
            .find('input').attr('tabindex', 11);
    $('#block_emptyMass').removeClass().addClass('form-group col-md-3').appendTo('#standard_block_3')
            .find('input').attr('tabindex', 12);
    $('#block_vechicleCategory').removeClass().addClass('form-group col-md-3').appendTo('#standard_block_3')
            .find('select').attr('tabindex', 13);
    $('#block_vechicleCategory2').removeClass().addClass('form-group col-md-3').appendTo('#standard_block_3')
            .find('select').attr('tabindex', 14);
    $('#block_tyres').removeClass().addClass('form-group col-md-3').appendTo('#standard_block_4')
            .find('input').attr('tabindex', 15);
    $('#block_maxMass').removeClass().addClass('form-group col-md-3').appendTo('#standard_block_4')
            .find('input').attr('tabindex', 16);
    $('#block_fuel').removeClass().addClass('form-group col-md-3').appendTo('#standard_block_4')
            .find('select').attr('tabindex', 17);
    $('#block_brakingSystem').removeClass().addClass('form-group col-md-3').appendTo('#standard_block_4')
            .find('select').attr('tabindex', 18);
    $('#block_documentType').removeClass().addClass('form-group col-md-3').appendTo('#standard_block_5').show()
            .find('select').attr('tabindex', 19);
    $('#block_series').removeClass().addClass('form-group col-md-3').appendTo('#standard_block_5')
            .find('input').attr('tabindex', 20);
    $('#block_number').removeClass().addClass('form-group col-md-3').appendTo('#standard_block_5')
            .find('input').attr('tabindex', 21);
    $('#block_documentDate').removeClass().addClass('form-group col-md-3').appendTo('#standard_block_5')
            .find('input').attr('tabindex', 22);
    $('#block_organization').removeClass().addClass('form-group col-md-6').appendTo('#standard_block_6')
            .find('input').attr('tabindex', 23);
    $('#block_isForeign').removeClass().addClass('form-group col-md-12').appendTo('#standard_block_7');
    $('#block_validityRadio').removeClass().addClass('form-group col-md-4').appendTo('#standard_block_8');
    $('.standard_view').show();
    $('#main_view_size').removeClass().addClass('col-md-12');
  }
});

function disableCheckbox(checkboxArray)
{
  for (var item in checkboxArray) {
    $("#to_resultList_p" + checkboxArray[item]).prop('disabled', true).parent().parent().addClass('tr_disabled');
  }
}

function enableAllCheckbox()
{
  $('tr').find('input').each(function ()
  {
    $(this).prop('disabled', false).parent().parent().removeClass('tr_disabled');
  });
}

function disableAllCheckbox()
{
  $('tr').find('input').each(function ()
  {
    $(this).prop('disabled', true).parent().parent().addClass('tr_disabled');
  });
}

function vechicleCategoryOptions(value)
{
  switch (value) {
    case 'A':
      $('#to_vechicleCategory2').empty().append("<option value='' selected='selected'></option>" +
              "<option value='L'>L</option>");
      $('#to_fuel').off('change');
      break;

    case 'B':
      $('#to_vechicleCategory2').empty().append("<option value='' selected='selected'></option>" +
              "<option value='M1'>M1 (пасс., не более 8 пассажиров)</option>" +
              "<option value='N1'>N1 (грузовые, менее 3,5 тонн)</option>");
      $('#to_fuel').off('change');
      break;

    case 'C':
      $('#to_vechicleCategory2').empty().append("<option value='' selected='selected'></option>" +
              "<option value='N2'>N2 (грузовые, менее 12 тонн)</option>" +
              "<option value='N3'>N3 (грузовые, более 12 тонн)</option>");
      $('#to_fuel').off('change');
      break;

    case 'D':
      $('#to_vechicleCategory2').empty().append("<option value='' selected='selected'></option>" +
              "<option value='M2'>M2 (пасс., не более 5 тонн)</option>" +
              "<option value='M3'>M3 (пасс., более 5 тонн)</option>");
      $('#to_fuel').off('change');
      break;

    default:
      $('#to_vechicleCategory2').empty().append("<option value='' selected='selected'></option>" +
              "<option value='O1'>O1 (прицепы, менее 0,75 тонн)</option>" +
              "<option value='O2'>O2 (прицепы, менее 3,5 тонн)</option>" +
              "<option value='O3'>O3 (прицепы, менее 10 тонн)</option>" +
              "<option value='O4'>O4 (прицепы, более 10 тонн)</option>");
      $('#to_fuel').val('None').on('change', function () {
        $(this).val('None');
      });
      $('#to_killometrage').val(0).change();
  }
}

function changeVechicleCategory(vechicleCategory)
{
  var vechicleCategory = (vechicleCategory) ? vechicleCategory : $('#to_vechicleCategory2').val();
  var disabledCheckboxes = [];

  switch (vechicleCategory) {
    case 'M1':
      disabledCheckboxes = [3, 4, 11, 41, 42, 43, 44, 46, 47, 48, 49, 50, 51, 56, 58, 60, 61, 62, 63];
      break;
    case 'N1':
      disabledCheckboxes = [3, 4, 11, 41, 43, 44, 46, 47, 48, 49, 50, 51, 56, 58, 60, 61, 62, 63];
      break;
    case 'N2':
      disabledCheckboxes = [43, 44, 46, 49, 50, 52, 61, 63];
      break;
    case 'N3':
      disabledCheckboxes = [43, 44, 46, 49, 52, 61, 63];
      break;
    case 'M2':
      disabledCheckboxes = [42, 47, 48, 49, 50, 52, 56, 60, 61, 63];
      break;
    case 'M3':
      disabledCheckboxes = [42, 47, 48, 49, 50, 52, 60, 61, 63];
      break;
    case 'O1':
    case 'O2':
      disabledCheckboxes = [3, 4, 9, 12, 13, 14, 15, 16, 17, 21, 23, 24, 25, 32, 33, 34, 35, 36, 37, 38, 39, 40, 43, 44, 45, 46, 47, 48, 51, 54, 55, 56, 57, 58, 59, 60, 62, 63, 64];
      break;
    case 'O3':
    case 'O4':
      disabledCheckboxes = [9, 12, 13, 14, 15, 16, 17, 21, 23, 24, 25, 32, 33, 34, 35, 36, 37, 38, 39, 40, 43, 44, 45, 46, 48, 49, 52, 54, 55, 57, 58, 59, 64];
      break;
    default:
      break;
  }

  enableAllCheckbox();
  disableCheckbox(disabledCheckboxes);
}

function eaistoTest(login, password)
{
  $.ajax({
    url: "ajax/test",
    dataType: "text",
    data: {'login': login, 'password': password},
    type: 'POST',
    success: function (data) {
      alert(data);
    }
  });
}

var tyresArray = [
  "Accelera",
  "Achilles",
  "Aeolus",
  "America",
  "Amtel",
  "Amtel-Vredestein",
  "Apollo",
  "Atturo",
  "Aurora",
  "Austone",
  "Austyre",
  "Avon",
  "AvsTyre",
  "Barum",
  "BFGoodrich",
  "Bridgestone",
  "CEAT",
  "Chengshan",
  "Continental",
  "Contyre",
  "Cooper",
  "Cordiant",
  "Daewoo",
  "Dayton",
  "Dean",
  "Debica",
  "Diplomat",
  "Dunlop",
  "Effiplus",
  "Eurotec",
  "Euzkadi",
  "Falken",
  "Fate",
  "Federal",
  "Fenix",
  "Firenza",
  "Firestone",
  "Firststop",
  "Flamingo",
  "Formula",
  "Fortuna",
  "Fulda",
  "FullWay",
  "Fuzion",
  "General",
  "Gislaved",
  "Goodride",
  "Goodyear",
  "GT",
  "Hankook",
  "Hercules",
  "HIFLY",
  "Infinity",
  "Insa-Turbo",
  "Interstate",
  "Ironman",
  "Kama",
  "Kelly",
  "Kelly Tires",
  "Kenda",
  "Kenex",
  "Kingstar",
  "Kirov",
  "Kleber",
  "Kormoran",
  "Kumho",
  "Lassa",
  "LingLong",
  "Mabor",
  "Maloya",
  "Marangoni",
  "Marshal",
  "Mastercraft",
  "Matador",
  "Matador-Омскшина",
  "Maxtrek",
  "Maxxis",
  "Metzeler",
  "Michelin",
  "Mickey Thompson",
  "Milestone",
  "Millennium",
  "Minerva",
  "Mitas",
  "MRF",
  "Nankang",
  "Neuton",
  "Nexen/Roadstone",
  "Nitto",
  "Nokian",
  "Nordman",
  "Novex",
  "OHTSU",
  "Ornet",
  "Pirelli",
  "Pneumant",
  "PointS",
  "PREMIORRI",
  "President",
  "Rapid",
  "Regal",
  "Remington",
  "Riken",
  "Rockstone",
  "Rosava",
  "Rotex",
  "Sagitar",
  "Sailun",
  "Satoya",
  "Sava",
  "Semperit",
  "SIBUR",
  "Sportiva",
  "StarFire",
  "Starperformer",
  "Stunner",
  "Sumitomo",
  "Sumo",
  "Sunny",
  "Tigar",
  "Toyo",
  "Tracmax",
  "Trayal",
  "Tunga",
  "Uniroyal",
  "Valsa",
  "Viking",
  "Voltyre",
  "Vredestein",
  "VSP",
  "Wanli",
  "Westlake",
  "Yokohama",
  "Zeetex",
  "АШК",
  "Барнаул",
  "Белшина",
  "Воронеж",
  "Дніпрошина",
  "Кenda",
  "Красноярск",
  "МШЗ",
  "НИИШП",
  "Омскшина",
  "Уралшина",
  "ЯШЗ"
];
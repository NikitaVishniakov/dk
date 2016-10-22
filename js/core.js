$(document).on("ready", function () {
//base
  $('a').on('click', function (e) {
    var $this = $(this);
    if (
            $this.attr('href')
            && $this.attr('href').indexOf('#')
            && $this.attr('href').indexOf('mailto:')
            && $this.attr('href').indexOf('javascript:void(0)')
            && $this.attr('target') !== "_blank"
            && $this.data('download') !== true
            ) {
      e.preventDefault();
      System.core.startLoading();
      setTimeout(function () {
        window.location = $this.attr('href');
      }, 100);

    }
  });
  $(".flash-notice")
          .alert()
          .on('click', function () {
            $("#flash_msg_block").fadeOut(600);
          })
          ;
  setTimeout(function () {
    $(".flash-notice").fadeOut(600);
  }, 60000);

  $(function () {
    $.scrollUp({
      scrollName: 'scrollUp',
      topDistance: '300',
      topSpeed: 300,
      animation: 'fade',
      animationInSpeed: 200,
      animationOutSpeed: 200,
      scrollText: 'Вверх',
      activeOverlay: false
    });
  });

  System = {
    popOverSettings: {
      toggle: "popover",
      trigger: "hover click",
      container: "body",
      selector: ".pop"
    },
    core: {
      startLoading: function () {
        var scrollPosition = [
          self.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft,
          self.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop
        ];
        $('#wait_logo_div').addClass('show').removeClass('hide');
        $('#navbar_logo').addClass('loading');
        var html = jQuery('html'); // it would make more sense to apply this to body, but IE7 won't have that
        html.data('scroll-position', scrollPosition);
        html.data('previous-overflow', html.css('overflow'));
        html.css('overflow', 'hidden');
        window.scrollTo(scrollPosition[0], scrollPosition[1]);
      },
      stopLoading: function () {
        $('#wait_logo_div').addClass('hide').removeClass('show');
        $('#navbar_logo').removeClass('loading');
        var html = jQuery('html');
        var scrollPosition = html.data('scroll-position');
        html.css('overflow', html.data('previous-overflow'));
        window.scrollTo(scrollPosition[0], scrollPosition[1]);
      },
      reloadPage: function (timeout) {
        timeout = timeout ? timeout : 2000;
        setTimeout(function () {
          location.reload();
        }, timeout);
      },
      popup: function (type, str, ms) {
        var flashBlock = $("#flash_msg_block"),
                tempHtml = flashBlock.html();
        flashBlock.html(
                '<div class="flash-notice" class="row"> \
                        <div class="col-md-4 col-xs-12 col-md-offset-4"> \
                            <div class="alert alert-' + type + ' fade in"> \
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> \
                                <strong id="flash-warning">' + str + '</strong> \
                            </div> \
                        </div> \
                    </div>'
                );
        $(".flash-notice")
                .alert()
                .on('click', function () {
                  flashBlock.fadeOut(600, function () {
                    $(this).html(tempHtml).fadeIn();
                  });
                }
                );
        setTimeout(function () {
          flashBlock.fadeOut(600, function () {
            $(this).html(tempHtml).fadeIn();
          });
        }, ms / 2);
      },
      objToArray: function (data) {
        var result = [];
        for (var i in data) {
          if (data.hasOwnProperty(i)) {
            result.push(data[i]);
          }
        }

        return result;
      },
      modal: {
        modal: $("#core_modal"),
        body: $("#core_modal_body")
      }
    }
  };
  $("body").popover(System.popOverSettings);
  $('input[type=text]')
          .on('focus', function () {
            $($(this).parent().children()[1]).popover('show')
          })
          .on('focusout', function () {
            $($(this).parent().children()[1]).popover('hide')
          })
          ;

//username_block
  $(".parent_knower").on("click", function () {
    var username = $(this).data("username");
    if (!username)
      return false;

    System.user = {"parentKnowerElement": $(this)};
    var url = $(this).data("url");
    $.ajax({
      url: url,
      data: {"username": username},
      dataType: "json",
      method: "POST",
      beforeSend: function () {
        System.core.startLoading();
      },
      complete: function () {
        System.core.stopLoading();
      },
      success: function (data) {
        var elem = System.user.parentKnowerElement.prev(),
                text = data.success ? data.success : data.error
                ;
        System.user.parentKnowerElement.remove();
        elem.after('<span style="top: 3px;" ' +
                'class="glyphicon glyphicon-tree-deciduous pop" ' +
                'data-container="body" data-toggle="popover" ' +
                'data-trigger="hover" ' +
                'data-placement="top" ' +
                'data-content=""></span>');
        elem.next().data("content", text).trigger("mouseover");
      }
    });
  });
//base
  $('#help_modal').on('show.bs.modal', function () {
    var url = $(this).data("url");
    $.ajax({
      url: url,
      data: {'path': window.location.pathname},
      dataType: "text",
      type: 'POST',
      success: function (data) {
        if (data != 'error') {
          $("#help_body").html(data);
        }
      }
    });
  });

//logout
  System.navbar = {
    logoutBody: $("#logout_body"),
    logoutModal: $("#logout_modal"),
    redBtn: function () {
      var url = $("#redbtn").data("href");
      $.ajax({
        url: url,
        dataType: "json",
        method: "POST",
        beforeSend: function () {
          System.core.startLoading();
        },
        complete: function () {
          System.core.stopLoading();
        },
        success: function () {
          location.reload();
        }
      })
    },
    updateTimer: function (count) {
      if (System.navbar.redBtnDisable) {
        clearInterval(System.navbar.redBtnInterval);
        System.navbar.redBtnInterval = false;
        System.navbar.redBtnDisable = false;
        System.navbar.logoutModal.modal("hide");
      }
      var timer = $("#redbtn_timer"),
              value = timer.text()
              ;
      value = value ? --value : count;
      if (!value) {
        clearInterval(System.navbar.redBtnInterval);
        System.navbar.redBtn();
      }
      timer.text(value);
    },
    redBtnDisable: false
  };
  $("#system_exit").on("click", function () {
    var url = $(this).data("href");

    $.ajax({
      url: url,
      dataType: "json",
      method: "POST",
      beforeSend: function () {
        System.core.startLoading();
      },
      complete: function () {
        System.core.stopLoading();
      },
      success: function (data) {
        var html = data.success ? data.success : data.error;
        System.navbar.logoutBody.html(html);
        System.navbar.logoutModal.modal("show")
      }
    });
  });

  $("body").on("click", "#redbtn", function () {
    if (!System.navbar.redBtnInterval) {
      var secondsTillEnd = 5;
      $("#logout_btn_place").fadeOut(200, function () {
        $("#redbtn_timer").text(secondsTillEnd);
        $("#redbtn_timer_place").fadeIn();
      });
      System.navbar.redBtnInterval = setInterval(function () {
        System.navbar.updateTimer(secondsTillEnd);
      }, 1000);
    }
  }).on("click", "#redbtn_timer_disable", function () {
    System.navbar.redBtnDisable = true;
  });

//search form
  $("#search_strict").on("change", function () {
    var gly = $("#strict_search_gly");
    var checkbox = $(this);
    var label = checkbox.parent('label');
    if (!checkbox.prop("checked")) {
      label.addClass("active");
      gly.removeClass("glyphicon-ok").addClass("glyphicon-remove");
    } else {
      label.removeClass("active");
      gly.addClass("glyphicon-ok").removeClass("glyphicon-remove");
    }
  });
  $("form[name='search']").on("submit", function (e) {
    e.preventDefault();
    var search = $("#search_search").val();
    if (!search) {
      System.core.popup("danger", "Строка поиска пуста.", 5000);

      return false;
    }

    var strict = $("#search_strict").prop("checked");
    var page = $(this).data("page");
    if (strict) {
      window.location.href = $(this).data("search") + "/" + search + "/" + page + "/strict";
    } else {
      window.location.href = $(this).data("search") + "/" + search;
    }
  });

//users
  $("body").on("submit", "form[name='expert_change']", function (e) {
    e.preventDefault();
    var url = $(this).attr("action");
    batchExpertChange(url);
  }).on("click", ".batch_user_expert_change", function () {
    var url = $(this).data("url");
    batchExpertChange(url);
  });
  function batchExpertChange(url) {
    var data = $("form[name='expert_change']") ? $("form[name='expert_change']").serialize() : false;
    $.ajax({
      url: url,
      data: data,
      dataType: "json",
      method: "POST",
      beforeSend: function () {
        System.core.startLoading();
      },
      complete: function () {
        System.core.stopLoading();
      },
      success: function (data) {
        if (data.form) {
          System.core.modal.body.html(data.form);

          $("#expert_change_users").chosen(
                  {no_results_text: "пользователь не найден!", allow_single_deselect: true}
          );
          $("#expert_change_experts").chosen(
                  {no_results_text: "пользователь не найден!", allow_single_deselect: true}
          );
        }

        if (System.core.modal.modal.hasClass("in")) {
          System.core.modal.modal.modal("hide");
        } else {
          System.core.modal.modal.find(".modal-title").text("Изменение ПТО пользователей")
          System.core.modal.modal.modal("show");

          return;
        }

        var type = data.success ? "success" : "danger",
                text = data.success ? data.success : data.error
                ;

        System.core.popup(type, text, 10000);
      }
    });
  }
  $(".switch_disabled").on("click", function () {
    $.ajax({
      url: $(this).data("url"),
      data: {"switch_disabled": !System.mgm.hideDisabled},
      dataType: "json",
      method: "POST",
      beforeSend: function () {
        System.core.startLoading();
      },
      complete: function () {
        System.core.stopLoading();
      },
      success: function (data) {
        if (data.type === "success") {
          var disabled = $("tr.danger");
          if (data.string) {
            disabled.fadeOut();
            System.mgm.hideDisabled = true;
            $(".switch_disabled").text("Показать");
            System.core.popup("success", "Отключенные пользователи теперь скрыты", 10000);
          } else {
            disabled.fadeIn();
            System.mgm.hideDisabled = false;
            $(".switch_disabled").text("Скрыть");
            System.core.popup("success", "Отключенные пользователи снова отображаются", 10000);
          }
        }
      }
    });
  });
  $("body").on("click", ".btn_action", function () {
    var url = $(this).data("url"),
            modalHeader = $(this).data("header"),
            id = $(this).data("id")
            ;
    System.management.modalHeader.text(modalHeader);
    $.ajax({
      url: url,
      dataType: "json",
      method: "POST",
      beforeSend: function () {
        System.core.startLoading();
      },
      complete: function () {
        System.core.stopLoading();
      },
      success: function (data) {
        if (data.msg) {
          System.core.popup(data.msg.type, data.msg.text, 10000);
          System.core.modal.modal.modal("hide");

          return;
        }

        if (data.html) {
          System.core.modal.body.html(data.html);
          System.core.modal.modal.modal("show");

          return;
        }

        System.core.popup(
                "error",
                "Неизвестная ошибка. Попробуйте обновить страницу",
                10000
                );
      },
      complete: function () {
        System.core.popup(
                "error",
                "Неизвестная ошибка. Попробуйте обновить страницу",
                10000
                );
      }
    });
  });
  function setDomainToUsername(url, username, domain, form)
  {
    $.ajax({
      url: url,
      data: {"username": username, "domain": domain, "form": form},
      dataType: "json",
      method: "POST",
      beforeSend: function () {
        System.core.startLoading();
      },
      complete: function () {
        System.core.stopLoading();
      },
      success: function (data) {
        if (data.success) {
          if (form) {
            System.core.modal.modal.find(".modal-title").text("Переадресация пользователя");
            System.core.modal.body.html(data.success);
            System.core.modal.modal.modal("show");
          } else {
            System.core.modal.modal.modal("hide");
            System.core.popup("success", data.success, 10000);
          }
        } else if (data.error) {
          System.core.popup("danger", data.error, 10000);
        }
      }
    });
  }
  $(".user_redirect_form").on("click", function () {
    var url = $(this).data("href"),
            username = $(this).data("username")
            ;

    setDomainToUsername(url, username, 0, true);
  });
  $("body").on("click", "#user_redirect_submit", function () {
    var url = $(this).data("href"),
            username = $(this).data("username"),
            domain = $("#user_redirect_domain").val()
            ;
    if (!domain) {
      return false;
    }

    setDomainToUsername(url, username, domain, 0);
  });
  $('.remove_button').on('click', function () {
    System.core.modal.modal.find(".modal-title").text("Отключить пользователя");
    System.core.modal.body.html(
            "<h4>Вы действительно хотите отключить пользователя " + $(this).data('username') + "?</h4>" +
            "<p>" +
            "В случае отключения, будет приостановлена работа пользователя с системой, все данные пользователя будут сохранены, " +
            "При следующем входе в систему пользователь получит уведомление о том что не может работать с системой пока не свяжется с Вами." +
            "</p>"
            );
    $('#remove_button').remove();
    System.core.modal.modal.find(".modal-body")
            .after('<div class="modal-footer">' +
                    '<a id="remove_button" type="button" href="" class="btn btn-danger">Отключить</a>' +
                    '</div>'
                    );
    $('#remove_button').attr('href', $(this).data('href'));
    System.core.modal.modal.modal('show');
  });
  $('.activate_button').on('click', function () {
    System.core.modal.modal.find(".modal-title").text("Включить пользователя");
    System.core.modal.body.html(
            "<h4>Вы действительно хотите включить пользователя " + $(this).data('username') + "?</h4>" +
            "<p>" +
            "Пользователь и его подчиненные сразу смогут работать с системой. " +
            "</p>"
            );
    $('#activate_button').remove();
    System.core.modal.modal.find(".modal-body")
            .after('<div class="modal-footer">' +
                    '<a id="activate_button" type="button" href="" class="btn btn-success">Включить</a>' +
                    '</div>'
                    );
    $('#activate_button').attr('href', $(this).data('href'));
    System.core.modal.modal.modal('show');
  });

//bills
  System.mgm = {"bills": {"callbacks": {
        remove: function (data) {
          $("tr.collection_row[data-id='" + data.id + "']").remove();
        },
        create: function (data) {
          var tr = $("tr.collection_row").first();
          tr.before(data.html);
        },
        batchCreate: function (data) {
          document.location.reload();
        },
        statistic: function (data) {
          $('#bill_stat_result').html(data.html);
        }
      }}};
// feedbacks
  System.mgm.feedbacks = {"callbacks": {
      answer: function (data) {
        $("tr.collection_row[data-id='" + data.id + "']")
                .find(".answer").text(data.answer)
                .end()
                .find(".answered").text(data.answeredAt).removeClass("hide")
                .end()
                .find(".ajax_action.answer_btn").removeClass("btn-success").addClass("btn-info")
                .find("span").removeClass("glyphicon-ok").addClass("glyphicon-pencil");
      },
      remove: function (data) {
        $("tr.collection_row[data-id='" + data.id + "']").remove();
      },
      sendToTop: function (data) {
        $("tr.collection_row[data-id='" + data.id + "']").find(".send_to_top_btn").remove();
      }
    }};
  $("body").on("hidden.bs.modal", function () {
    System.core.modal.body.html("");
  });
  $("body").on("click", ".ajax_action", function () {
    ajaxAction($(this));
  });
  $("body").on("submit", "form.ajax_form", function (e) {
    e.preventDefault();
    ajaxAction($(this));
  });

  function ajaxAction(elem)
  {
    $.ajax({
      url: elem.data("url"),
      data: $("form.ajax_form").length ? $("form.ajax_form").serialize() : {},
      dataType: "json",
      method: "POST",
      beforeSend: function () {
        System.core.startLoading();
      },
      complete: function () {
        System.core.stopLoading();
      },
      success: function (data) {
        switch (data.type) {
          case "error":
          case "success":
            System.core.modal.modal.modal("hide");
            System.core.popup(data.type === "error" ? "danger" : "success", data.string, 10000);

            break;
          case "form":
            System.core.modal.body.html(data.html);
            System.core.modal.modal.find(".modal-title").text(data.title);
            System.core.modal.modal.modal("show");
            System.core.modal.modal.modal('handleUpdate');
        }
        if (data.callback) {
          System.mgm[data.collection].callbacks[data.callback](data);
        }
      }
    })
  }

//pay_variants
  System.mgm.payVariant = {"remove": false};
  $(".remove_pv").on("click", function () {
    System.core.modal.body.text("Вы подтверждаете удаление способа оплаты? Это действие нельзя отменить.");
    System.core.modal.modal.find(".modal-title").text("Подтверждение удаления");
    System.core.modal.modal.modal("show");
    if (System.core.modal.modal.find(".modal-footer").length) {
      System.core.modal.modal.find(".modal-footer").remove();
    }
    System.core.modal.modal.find(".modal-body").after("<div class='modal-footer'></div>");
    $(this).clone(true).text("Удалить").addClass("pull-left col-md-12 col-sm-12 col-xs-12 col-lg-12 remove_pv_button")
            .removeClass("remove_pv").appendTo(System.core.modal.modal.find(".modal-footer"));

  });
  $("body").on("click", ".remove_pv_button", function () {
    System.core.modal.modal.modal("hide");
    $.ajax({
      url: $(this).data("url"),
      method: "POST",
      dataType: "json",
      beforeSend: function () {
        System.core.startLoading();
      },
      complete: function () {
        System.core.stopLoading();
      },
      success: function (data) {
        switch (data.type) {
          case "error":
            System.core.popup("danger", data.string, 10000);

            return;
          case "success":
            System.core.popup("success", data.string, 10000);
            $("tr.pv_row[data-id='" + data.id + "']").remove();
        }
      }
    });
  });

//transactions
  System.mgm.transactions = {"callbacks": {
      confirm: function (data) {
        $("tr.collection_row[data-id='" + data.id + "']")
                .removeClass("danger").addClass("success")
                .find(".btn-success.ajax_action")
                .css("display", "none")
                .end()
                .find(".btn-warning.ajax_action")
                .css("display", "block")
                ;
      },
      removeConfirm: function (data) {
        $("tr.collection_row[data-id='" + data.id + "']")
                .removeClass("success").addClass("danger")
                .find(".btn-warning.ajax_action")
                .css("display", "none")
                .end()
                .find(".btn-success.ajax_action")
                .css("display", "block")
                ;
      },
      remove: function (data) {
        $("tr.collection_row[data-id='" + data.id + "']").remove();
      },
      create: function (data) {
        var tr = $("#payment_history tbody tr").first();
        tr.before(data.html);
      },
      createFor: function (data) {
        var tr = $("tr.collection_row").first();
        tr.before(data.html);
      }
    }};

// charts
  $("#username_select").chosen({no_results_text: "пользователь не найден!"});
  $("#day_count_select").chosen({no_results_text: "период не найден!"});
  $("#username_select").on("change", function () {
    var url = $(this).data("url");
    url = url.replace("uberchpreh", $(this).val());
    document.location.replace(url);
  });
  $("#day_count_select").on("change", function () {
    var url = $(this).data("url");
    url = url.replace("uberchpreh", $(this).val());
    document.location.replace(url);
  });

// xls stat
  var xlsNow = new Date();
  var xlsDay = (xlsNow.getDate() < 10) ? '0' + xlsNow.getDate() : xlsNow.getDate();
  var xlsMonth = (xlsNow.getMonth() + 1 < 10) ? '0' + (+xlsNow.getMonth() + 1) : (xlsNow.getMonth() + 1);
  $('#xls_statistic_from').datepicker({
    maxDate: 0,
    dateFormat: 'dd-mm-yy',
    changeMonth: true,
    changeYear: true,
    firstDay: 1
  }).val(xlsDay + '-' + xlsMonth + '-' + xlsNow.getFullYear());
  xlsNow.setMonth(xlsNow.getMonth());
  xlsMonth = (xlsNow.getMonth() + 1 < 10) ? '0' + (+xlsNow.getMonth() + 1) : (xlsNow.getMonth() + 1);
  $('#xls_statistic_to').datepicker({
    maxDate: 0,
    dateFormat: 'dd-mm-yy',
    changeMonth: true,
    changeYear: true,
    firstDay: 1
  }).val(xlsDay + '-' + xlsMonth + '-' + xlsNow.getFullYear());

// byuser stat
  $('#total_stat').on('click', function () {
    var href = $(this).attr('href');
    var filter = $('#stat_filter').val();
    if (filter)
      $(this).attr('href', href + '/' + filter);
  });

  $('.btn_filter').on('click', function () {
    var filter = $(this).data('filter');
    var dates = filterToDates(filter);
    setDates(dates);
    $('#statistic_form').submit();
  });

  function filterToDates(filter)
  {
    var format = 'DD-MM-YYYY';
    var start;
    var end = moment().subtract(1, 'days').format(format);
    switch (filter) {
      case '30days':
        start = moment().subtract(30, 'days').format(format);
        break;
      case 'lastweek':
        start = moment().subtract(7, 'days').format(format);
        break;
      case 'yesterday':
        start = moment().subtract(1, 'days').format(format);
        break;
    }

    return {'start': start, 'end': end};
  }

  function setDates(dates)
  {
    $('#xls_statistic_from').val(dates.start);
    $('#xls_statistic_to').val(dates.end);
  }

  if (typeof popupNewElem !== 'undefined' && popupNewElem) {
    $("#create_new_elem").popover("show");
  }

// dk search
  var searchFields = [
    "#searching_form_vin",
    "#searching_form_registrationNumber",
    "#searching_form_bodyNumber",
    "#searching_form_frameNumber",
    "#searching_form_nomer"
  ];
  for (var i = 0; i < searchFields.length; i++) {
    $(searchFields[i]).data("index", i).on("input", function (i) {
      disableFields(true, searchFields, this);
      $(this).off().on("keyup", function (e) {
        e = e || window.event;
        if (e.keyCode === 13) {
          if ($(this).val != "") {
            dkSearch(searchFields);
          }
        }
        if ($(this).val() == "")
          disableFields(false, searchFields, this);
        $(this).on("input", function () {
          disableFields(true, searchFields, this);
        });
      });
    });
  }

  function disableFields(disabled, array, elem)
  {
    var tempArr = [].concat(array);
    tempArr.splice($(elem).data("index"), 1);
    for (var j = 0; j < tempArr.length; j++) {
      $(tempArr[j]).prop("disabled", disabled);
    }
    $("#make_search").prop("disabled", !disabled);
  }

  function dkSearch(fields)
  {
    for (var i in fields) {
      if ($(fields[i]).prop("disabled") == false) {
        var activeField = fields[i];
      }
    }
    var search = $(activeField).val();
    var field = activeField.slice(8);
  }

// dk form
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

  $('#to_userPin').on('focusout', function () {
    if ($(this).val().length < 6) {
      return false;
    }

    var url = $(this).data("url");

    $.ajax({
      url: url,
      data: {'pin': $('#to_userPin').val()},
      method: 'POST',
      dataType: 'json',
      beforeSend: function () {
        $('#pin_check_message').text('Проверка PIN...')
                .removeClass('label-danger label-success').addClass('label-default');
        $('#block_pin_check').fadeIn();
      },
      success: function (data) {
        if (data.success) {
          $('#pin_check_message').text(data.success)
                  .addClass('label-success').removeClass('label-danger label-default');
        } else {
          $('#pin_check_message').text(data.error)
                  .removeClass('label-default label-success').addClass('label-danger');
        }
      }
    });
  });

  System.quickSearch = {
    search: {},
    searchStatus: false,
    searchUrl: false,
    searchField: false,
    searchValue: false,
    makeSearch: function () {
      $.ajax({
        url: System.quickSearch.searchUrl,
        data: {"field": System.quickSearch.searchField, "value": System.quickSearch.searchValue},
        dataType: "json",
        method: "POST",
        beforeSend: function () {
          System.core.startLoading();
        },
        complete: function () {
          System.core.stopLoading();
        },
        success: function (data) {
          if (data.duplicate || data.success) {
            var status = data.duplicate ? "duplicate" : "success";
            System.quickSearch.search = data[status];
          } else {
            System.quickSearch.searchStatus = false;
            System.quickSearch.addSearchErrorLink();

            return;
          }

          System.quickSearch.fillFromSearch();
          System.quickSearch.addFillFromSearchLink();
          System.quickSearch.makeSuccessPopup();
        }
      });
    },
    makeSuccessPopup: function () {
      var msg,
              validity = new Date(System.quickSearch.search.validity);
      if (validity > new Date()) {
        msg = 'Найден действующий техосмотр до ' + System.quickSearch.parseDate(validity);
      } else {
        msg = 'ТС найдено в ЕАИСТО';
      }
      System.core.popup('success', msg, 30000);
    },
    fillFromSearch: function () {
      if (!System.quickSearch.search.hasOwnProperty('vin'))
        return;
      $('#to_bodyNumber').val(System.quickSearch.search.bodyNumber);
      $('#to_vechicleCategory').val(System.quickSearch.search.vehicleCategory).change();
      $('#to_vechicleCategory2').val(System.quickSearch.search.vehicleCategory2);
      $('#to_registrationNumber').val(System.quickSearch.search.registrationNumber);
      $('#to_make').val(System.quickSearch.search.make);
      $('#to_model').val(System.quickSearch.search.model);
    },
    addFillFromSearchLink: function () {
      if (!$('#search_result_block').length) {
        $('#block_vin').append('<div id="search_result_block"></div>');
      }
      $('#search_result_block').html(
              '<a id="fill_from_search" class="text-primary pop" href="javascript:void(0)">заполнить данными из поиска</a>'
              );
      var elem = $('#fill_from_search');
      elem.on('click', function () {
        System.quickSearch.fillFromSearch();
      });
      elem
              .data("placement", "top")
              .data("html", true)
              .data("content",
                      '<b>Найдено в ЕАИСТО:</b>' + '<br><br>' +
                      'VIN: ' + System.quickSearch.search.vin + '<br>' +
                      'Рег.номер: ' + System.quickSearch.search.registrationNumber + '<br>' +
                      'ТС: ' + System.quickSearch.search.make + ' ' + System.quickSearch.search.model + '<br>' +
                      'Категория: ' + System.quickSearch.search.vehicleCategory + ' ' + System.quickSearch.search.vehicleCategory2 + '<br>' +
                      'Дата выдачи: ' + System.quickSearch.parseDate(new Date(System.quickSearch.search.dateOfDiagnosis)) + '<br>' +
                      'Срок действия до: <b>' + System.quickSearch.parseDate(new Date(System.quickSearch.search.validity)) + '</b><br>'
                      );
    },
    addSearchErrorLink: function () {
      if (!$('#search_result_block').length) {
        $('#block_vin').append('<div id="search_result_block"></div>');
      }
      $('#search_result_block').html(
              '<a id="search_error" class="text-danger pop" href="javascript:void(0)">ничего не найдено</a>'
              );
      var elem = $('#search_error');
      elem
              .data("placement", "top")
              .data("html", true)
              .data("content",
                      '<b>ТС не найдено в ЕАИСТО</b> по одной из следующих причин: <br>' +
                      '- данные на ТС не вносились ранее;<br>' +
                      '- сервера ЕАИСТО недоступны.'
                      );
    },
    parseDate: function (date) {
      return ('0' + (date.getDate())).slice(-2) + '.' + ('0' + (date.getMonth() + 1)).slice(-2) + '.' + date.getFullYear()
    }
  };

  $('#to_vin').on('focusout', function () {
    if ($(this).val().length !== 17)
      return;
    var value = $(this).val();
    if (System.quickSearch.searchField === 'vin' && System.quickSearch.searchValue === value) {
      System.quickSearch.makeSuccessPopup();
    } else {
      System.quickSearch.searchUrl = $(this).data('url');
      System.quickSearch.searchField = 'vin';
      System.quickSearch.searchValue = value;
      System.quickSearch.makeSearch();
    }
    System.quickSearch.fillFromSearch();
  });

// focus on wrong field from action form_p1.html.twig
  if (typeof toFormField !== "undefined" && toFormField) {
    var fieldName = "#to_" + toFormField;
    $(fieldName).focus();
  }

// agent contract
  $("form[name=agent_contract]").on("submit", function () {
    return System.agentContract.personalInfoAgreement.prop("checked");
  });
  System.agentContract = {
    submitFormBtn: $("input[type=submit]"),
    personalInfoAgreement: $("#agent_contract_personalInfoAgreement")
  };
  if ($("form[name=agent_contract]").data("locked")) {
    $("input").attr("readonly", "readonly");
  }
  System.agentContract.personalInfoAgreement.on("click", function () {
    activateSubmit();
  });
  function activateSubmit()
  {
    var btn = System.agentContract.submitFormBtn,
            check = System.agentContract.personalInfoAgreement,
            checked = check.prop("checked")
            ;
    if (checked) {
      check.off();
      btn.fadeIn(200, function () {
        check.on("click", function () {
          activateSubmit();
        });
      });
    } else {
      check.off();
      btn.fadeOut(200, function () {
        check.on("click", function () {
          activateSubmit();
        });
      });
    }
  }

//user form
  $('#user_form_phone').mask("(AAA) AAA-AA-AA", {placeholder: "(___) ___-__-__", translation: {'A': {pattern: /[0-9]/}}});
  $('#user_form_additionalInfo_dopPhones_1').mask("(AAA) AAA-AA-AA", {placeholder: "(___) ___-__-__", translation: {'A': {pattern: /[0-9]/}}});
  $('#personal_info').mask("(AAA) AAA-AA-AA", {placeholder: "(___) ___-__-__", translation: {'A': {pattern: /[0-9]/}}});

  System.userForm = {
    experts: [],
    realExpert: false,
    prefix: false,
    allSubuserWide: false,
    userExpertBlock: $("#user_expert_block"),
    ptoFormUrl: false,
    updatePto: function () {
      var expertsArr = [];
      $("td.child_pto .remove_pto:not(.hide)").each(function () {
        expertsArr.push({"id": $(this).data("id")});
      });
      System.userForm.experts = expertsArr;
      System.userForm.prefix = $("#pto_form_expertAddressPointPrefix").val();
      System.userForm.realExpert = $("#pto_form_experts").val();
      $("#pto_form_experts_json").val(JSON.stringify(expertsArr));
      $("#user_form_expert_data").val(JSON.stringify({
        "expertAddressPointPrefix": System.userForm.prefix,
        "experts_json": expertsArr,
        "experts": System.userForm.realExpert
      }));
    },
    loadPtoData: function (data) {
      if (typeof (data) === 'undefined') {
        var data = {
          "username": System.userForm.userExpertBlock.data("username"),
          "edit": System.userForm.userExpertBlock.data("edit")
        };
      }
      System.userForm.updatePto();
      var url = $("#pto_form").data("url");
      url = url ? url : System.userForm.ptoFormUrl;
      $.ajax({
        url: url,
        data: data,
        dataType: "json",
        method: "POST",
        beforeSend: function () {
          System.core.startLoading();
        },
        complete: function () {
          System.core.stopLoading();
        },
        success: function (data) {
          switch (data.type) {
            case "error":
            case "success":
              System.core.modal.modal.modal("hide");
              System.core.popup(data.type === "error" ? "danger" : "success", data.string, 10000);

              break;
          }
          if (data.callback) {
            System.userForm.callbacks.updateForm(data.html);
          }
        }
      });
    },
    callbacks: {
      updateForm: function (html) {
        System.userForm.userExpertBlock.fadeOut(200, function () {
          $(this).html(html).fadeIn(200, function () {
            System.userForm.updatePto();
          });
        });
      }
    }
  };
  System.mgm.userForm = {
    callbacks: {
      widePopup: function () {
        System.core.modal.modal.find(".modal-dialog").removeClass("modal-xs").addClass("modal-lg");
        System.userForm.updatePto();
      },
      smallPopup: function () {
        System.core.modal.modal.find(".modal-dialog").removeClass("modal-lg").addClass("modal-xs");
      },
      updatePto: function (data) {
        $("#user_pto_place").html(data.html);
      },
      updatePI: function (data) {
        $("#user_phone_place").html(data.phone);
        $("#user_email_place").html(data.email);
        $("#user_fio_place").html(data.fio);
      }
    }
  };
  System.core.modal.modal.on('hidden.bs.modal', function () {
    System.mgm.userForm.callbacks.smallPopup();
  });

  //var fields = $('.additionalInfo_dopPhones');
  //for (var field in fields) {
  //    $(field).mask("(AAA) AAA-AA-AA", {
  //        placeholder: "(___) ___-__-__",
  //        translation: {'A': {pattern: /[0-9]/}}
  //    });
  //}

  $("body").on("click", ".add_pto", function () {
    var id = $(this).data("id");
    $("td.child_pto[data-id='" + id + "']").find("span").removeClass("hide");
    $(this).addClass("hide");
    System.userForm.updatePto();
  }).on("click", ".remove_pto", function () {
    var id = $(this).data("id");
    $("td.child_pto[data-id='" + id + "']").find("span").addClass("hide");
    $("td.user_pto[data-id='" + id + "']").find(".add_pto").removeClass("hide");
    System.userForm.updatePto();
  }).on("click", ".expert_form_btn.save_form", function (e) {
    e.preventDefault();
    System.userForm.loadPtoData($("form[name='pto_form']").serialize());
  }).on("click", ".expert_form_btn.reset_form", function (e) {
    e.preventDefault();
    System.userForm.loadPtoData();
  });

  $('#add_phone').on('click', function () {
    num++;
    var inputId = "user_form_additionalInfo_dopPhones_" + num;
    $('#dop_phones')
            .append("<div class=form-group>" +
                    "<label for='" + inputId + "'>Доп. телефон:</label>" +
                    "<div class='input-group'>" +
                    "<div class='input-group-addon phone_prefix'>+7</div>" +
                    "<input class='form-control input_phone' " +
                    "id='" + inputId + "' name='user_form_additionalInfo_dopPhones[" + num + "]'>" +
                    "</div>" +
                    "</div>")
            .css('display', 'block');
    $('#' + inputId).mask("(AAA) AAA-AA-AA", {
      placeholder: "(___) ___-__-__",
      translation: {'A': {pattern: /[0-9]/}}
    });
  });

//    lk
  if ($("#contacts_body").length) {
    $("#news_body").css("height", 450 - +$("#contacts_body").css("height").substr(0, $("#contacts_body").css("height").length - 2));
  }

//    mail_to
  System.core.mailTo = {
    errors: {
      noUserInList: "Должен быть выбран и добавлен хотя бы один пользователь.",
      noUserChoose: "Не выбран пользователь."
    },
    fields: {
      userTable: $("#mail_to_user_list_table"),
      user: $("#mail_to_user"),
      level: $("#mail_to_level"),
      addUser: $("#mail_to_add_user"),
      userList: $("#mail_to_userList")
    },
    paths: function (param) {
      var path;
      switch (param) {
        case "userSearch":
          path = System.core.mailTo.fields.user.data("url");
          break;
      }

      return path;

    },
    levelToStr: function (level) {
      var str;
      switch (+level) {
        case 1:
          str = "первый уровень";
          break;
        case 2:
          str = "подсеть";
          break;
        default:
          str = "пользователь";
      }

      return str;
    },
    list: [],
    removeArrayDuples: function (array, prop) {
      var obj = {};

      for (var i = 0; i < array.length; i++) {
        obj[array[i][prop]] = array[i];
      }

      array = [];
      for (var key in obj) {
        array.push(obj[key]);
      }

      return array;
    },
    updateUserTable: function () {
      var userTable = System.core.mailTo.fields.userTable;
      var userList = System.core.mailTo.list;
      var userListLength = userList.length;
      var tr;
      var username;

      if (!userListLength) {
        userTable.html("").hide();

        return;
      }

      userTable.html("");

      for (var i = 0; i < userListLength; i++) {
        username = userList[i]["username"];
        tr = $("#mail_to_user_list_table_example").clone();
        tr.find(".mail_to_td_username").text(username);
        tr.find(".mail_to_td_level").text(System.core.mailTo.levelToStr(userList[i]["level"]));
        tr.attr("id", "mail_to_user_list_table_" + username);
        tr.css("display", "");
        userTable.append(tr).show();
      }
    },
    updateUserListField: function () {
      System.core.mailTo.fields.userList.val(JSON.stringify(System.core.mailTo.list));
    },
    boot: function () {
      if (System.core.mailTo.fields.userList.val()) {
        System.core.mailTo.list = JSON.parse(System.core.mailTo.fields.userList.val());
      }
      System.core.mailTo.updateUserTable();
      System.core.mailTo.updateUserListField();
    }
  };
  System.core.mailTo.boot();
  System.core.mailTo.fields.user.on("input", function () {
    var value = $(this).val();
    if (value.length < 3) {
      return;
    }

    $.ajax({
      url: System.core.mailTo.paths("userSearch"),
      data: {'value': value},
      dataType: "json",
      type: 'POST',
      success: function (data) {
        if (data) {
          System.core.mailTo.fields.user.autocomplete({
            source: System.core.objToArray(data)
          });
        }
      }
    });
  });
  System.core.mailTo.fields.addUser.on("click", function () {
    if (!System.core.mailTo.fields.user.val()) {
      System.core.popup("danger", System.core.mailTo.errors.noUserChoose, 2000);

      return false;
    }

    var username = System.core.mailTo.fields.user.val();
    var level = System.core.mailTo.fields.level.val();

    System.core.mailTo.list.push(
            {"username": username, "level": level}
    );

    System.core.mailTo.list = System.core.mailTo.removeArrayDuples(System.core.mailTo.list, "username");
    System.core.mailTo.updateUserTable();
    System.core.mailTo.updateUserListField();
  });
  $("form[name='mail_to']").on("submit", function () {
    if (!System.core.mailTo.fields.userList.val()) {
      System.core.popup("danger", System.core.mailTo.errors.noUserInList, 5000);

      return false;
    }
  });
  $("body").on("click", ".mail_to_td_action_remove", function () {
    var tr = $(this).parent().parent();
    var username = tr.find(".mail_to_td_username").text();
    for (var i = 0; i < System.core.mailTo.list.length; i++) {
      if (System.core.mailTo.list[i]["username"] === username) {
        System.core.mailTo.list.splice(i, 1);
      }
    }
    tr.remove();
    System.core.mailTo.updateUserTable();
    System.core.mailTo.updateUserListField();
  });
});
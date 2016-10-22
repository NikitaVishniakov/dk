<div data-url="" class="modal fade" id="logout_modal" tabindex="-1" role="dialog" aria-labelledby="logout_modalLabel" aria-hidden="true" style="display: none;"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h4 class="modal-title" id="logout_modalLabel">Выход из системы</h4></div><div id="logout_body" class="modal-body"><div id="logout_btn_place">
    <h4 style="margin: 10px 0;">Вы действительно хотите выйти из системы?</h4>
    <a class="btn btn-success col-md-3 col-sm-3 col-xs-3" href="/logout">
        Да, выйти
    </a>
    <a class="btn btn-default col-md-3 col-sm-3 col-xs-3" data-dismiss="modal" style="margin-left: 15px;">
        Отмена
    </a>
    <button id="redbtn" data-href="/to/ajax/redbtn" class="btn btn-danger col-md-5 col-sm-5 col-xs-5 pull-right" style="cursor: pointer;">
        Заблокировать <span class="hidden-xs">аккаунт *</span>
    </button>
    <span class="col-md-5 col-md-offset-7 col-sm-5 col-sm-offset-7 col-xs-5 col-xs-offset-7" style="font-size: 70%;">
        * Доступ можно будет восстановить, позвонив в службу технической поддержки.
    </span>
</div>
<div id="redbtn_timer_place" style="display: none;">
    <h4 style="margin: 10px 0;" class="text-danger">Аккаунт будет ЗАБЛОКИРОВАН!</h4>
    <button class="btn btn-default col-md-5"><span id="redbtn_timer"></span></button>
    <button class="btn btn-danger col-md-5 pull-right" id="redbtn_timer_disable" data-dismiss="modal">
        ОТМЕНИТЬ
    </button>
</div>
<div style="clear: both;"></div></div></div></div></div>
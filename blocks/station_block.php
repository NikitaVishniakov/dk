

        
                <form id="pto_form" class="ajax_form" data-url="/to/user/ajax/experttable/FA2222/1" method="POST">
    <div class="row" style="margin-bottom: 5px;">
        <div class="col-md-5" style="margin-top: 6px;">
            <label class="row_label">Добавить или удалить станцию:</label>
            <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Добавьте пользователю станции, которые он сможет раздавать среди своих подчиненных." data-html="false"></span>        </div>
        <div class="col-md-7">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-condensed table-bordered" style="font-size: 80%; margin-bottom: 0;">
                        <thead>
                            <tr>
                                <td class="col-md-6 text-center"><b>Доступные станции</b></td>
                                <td class="col-md-6 text-center">
                                    <b>Список для пользователя</b>
                                                                        <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Список станций, доступных Вам. С его помощью вы можете добавлять или удалять станции у всех своих подчиненных." data-html="false" data-original-title="" title=""></span>                                </td>
                            </tr>
                        </thead>
                        <tbody>
                                                                                                                                                                                                                                                                            <tr>
                                    <td class="user_pto" data-id="1">
                                        <span class="user_expertid">СТО</span>
                                        <span class="glyphicon glyphicon-arrow-right pull-right text-success add_pto hide" title="Добавить станцию пользователю" data-id="1" style="cursor: pointer;"></span>
                                    </td>
                                    <td class="child_pto" data-id="1">
                                        <span class="user_expertid">СТО</span>
                                        <span class="glyphicon glyphicon-remove pull-right text-danger remove_pto" title="Убрать станцию у пользователя" data-id="1" style="cursor: pointer;"></span>
                                    </td>
                                </tr>
                                                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
    <div class="row" style="margin-bottom: 5px;">
        <div class="col-md-5" style="margin-top: 6px;">
            <label class="row_label">Список доступных станций:</label>
        </div>
        <div class="col-md-7">
            <select id="pto_form_experts" name="pto_form[experts]" class="form-control" autocomplete="off" data-placeholder="Выберите ПТО..." >            <option value="1">СТО</option></select>
                
        </div>
    </div>

        <div class="row" style="margin-bottom: 5px;">
        <div class="col-md-5" style="margin-top: 6px;">
            <label class="row_label">Город передвижной станции:</label>
            <span style="top: 3px;" class="glyphicon glyphicon-question-sign pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Укажите город, который будет присвоен в адресе пункта ТО Диагностической Карты (например: Москва). Если поле пустое, адрес будет стандартным." data-html="false"></span>        </div>
        <div class="col-md-7">
            <select class="form-control" autocomplete="off" data-placeholder="Выберите город..." ><option value=""></option>            <option value="0">Пусто (просто передвижной)</option>            <option value="1">Абакан</option>            <option value="2">Агвали</option>            <option value="3">Адыгейск</option>            <option value="4">Азов</option>            <option value="5">Акуша</option>            <option value="6">Алексин</option>            <option value="7">Алушта</option>            <option value="8">Анадырь</option>            <option value="9">Анапа</option>            <option value="10">Апатиты</option>            <option value="11">Армавир</option>            <option value="12">Армянск</option>            <option value="13">Арсеньев</option>            <option value="14">Арск</option>            <option value="15">Артём</option>            <option value="16">Артём, Приморский край</option>            <option value="17">Архангельск</option>            <option value="18">Астрахань</option>            <option value="19">Барнаул</option>            <option value="20">Бахчисарай</option>            <option value="21">Белгород</option>            <option value="22">Белово</option>            <option value="23">Белогорск</option>            <option value="24">Беломорск</option>            <option value="25">Белореченск</option>            <option value="26">Бийск</option>            <option value="27">Биробиджан</option>            <option value="28">Благовещенск</option>            <option value="29">Благодарный</option>            <option value="30">Ботлих</option>            <option value="31">Братск</option>            <option value="32">Брянск</option>            <option value="33">Буденновск</option>            <option value="34">Буйнакск</option>            <option value="35">Великий Новгород</option>            <option value="36">Видное</option>            <option value="37">Владивосток</option>            <option value="38">Владикавказ</option>            <option value="39">Владимир</option>            <option value="40">Волгоград</option>            <option value="41">Волжский</option>            <option value="42">Вологда</option>            <option value="43">Воронеж</option>            <option value="44">Выборг (ЛО)</option>            <option value="45">Гапцах</option>            <option value="46">Гатчина</option>            <option value="47">Георгиевск</option>            <option value="48">Гергебиль</option>            <option value="49">Горно-Алтайск</option>            <option value="50">Горячий Ключ</option>            <option value="51">Грозный</option>            <option value="52">Гуниб</option>            <option value="53">Джанкой</option>            <option value="54">Дзержинск</option>            <option value="55">Димитровград</option>            <option value="56">Дубовка</option>            <option value="57">Евпатория</option>            <option value="58">Екатеринбург</option>            <option value="59">Ессентуки</option>            <option value="60">Заволжье</option>            <option value="61">Зеленоград</option>            <option value="62">Зеленодольск</option>            <option value="63">Иваново</option>            <option value="64">Ижевск</option>            <option value="65">Изобильный</option>            <option value="66">Ипатово</option>            <option value="67">Иркутск</option>            <option value="68">Йошкар-Ола</option>            <option value="69">Казань</option>            <option value="70">Калининград</option>            <option value="71">Калуга</option>            <option value="72">Карабудахкент</option>            <option value="73">Карабулак</option>            <option value="74">Карамахи</option>            <option value="75">Каспийск</option>            <option value="76">Касумкент</option>            <option value="77">Каякент</option>            <option value="78">Кемерово</option>            <option value="79">Керчь</option>            <option value="80">Киров</option>            <option value="81">Киселевск</option>            <option value="82">Кисловодск</option>            <option value="83">Комсомольск-на-Амуре</option>            <option value="84">Кострома</option>            <option value="85">Котлас</option>            <option value="86">Краснодар</option>            <option value="87">Красноперекопск</option>            <option value="88">Красноярск</option>            <option value="89">Кропоткин</option>            <option value="90">Крым</option>            <option value="91">Крымск</option>            <option value="92">Кубачи</option>            <option value="93">Куйбышев</option>            <option value="94">Курах</option>            <option value="95">Курган</option>            <option value="96">Курганинск</option>            <option value="97">Курск</option>            <option value="98">Кызыл</option>            <option value="99">Кяхта</option>            <option value="100">Лабинск</option>            <option value="101">Лабытнанги</option>            <option value="102">Леваши</option>            <option value="103">Лермонтов</option>            <option value="104">Липецк</option>            <option value="105">Лобня</option>            <option value="106">Магадан</option>            <option value="107">Магас</option>            <option value="108">Магнитогорск</option>            <option value="109">Маджалис</option>            <option value="110">Майкоп</option>            <option value="111">Малгобек</option>            <option value="112">Махачкала</option>            <option value="113">Миасс</option>            <option value="114">Миасское</option>            <option value="115">Минеральные Воды</option>            <option value="116">Москва</option>            <option value="117">Мурманск</option>            <option value="118">Мытищи</option>            <option value="119">Н.Новгород</option>            <option value="120">Набережные Челны</option>            <option value="121">Назрань</option>            <option value="122">Нальчик</option>            <option value="123">Нарьян-Мар</option>            <option value="124">Находка</option>            <option value="125">Невинномысск</option>            <option value="126">Нерюнгри</option>            <option value="127">Нефтеюганск</option>            <option value="128">Нижневартовск</option>            <option value="129">Нижнегорск</option>            <option value="130">Нижнекамск</option>            <option value="131">Нижний Новгород</option>            <option value="132">Нижний Тагил</option>            <option value="133">Новокузнецк</option>            <option value="134">Новороссийск</option>            <option value="135">Новосибирск</option>            <option value="136">Новый Уренгой</option>            <option value="137">Ногинск</option>            <option value="138">Норильск</option>            <option value="139">Ноябрьск</option>            <option value="140">Обнинск</option>            <option value="141">Омск</option>            <option value="142">Орджоникидзевская</option>            <option value="143">Орёл</option>            <option value="144">Оренбург</option>            <option value="145">Павловская</option>            <option value="146">Пенза</option>            <option value="147">Пермь</option>            <option value="148">Петрозаводск</option>            <option value="149">Петропавловск-Камчатский</option>            <option value="150">Подольск</option>            <option value="151">Псков</option>            <option value="152">Пятигорск</option>            <option value="153">р.п. Чаны</option>            <option value="154">Ржев</option>            <option value="155">Ростов-на-Дону</option>            <option value="156">Рузаевка</option>            <option value="157">Рязань</option>            <option value="158">Салехард</option>            <option value="159">Самара</option>            <option value="160">Санкт-Петербург</option>            <option value="161">Саранск</option>            <option value="162">Саратов</option>            <option value="163">Сафоново</option>            <option value="164">Севастополь</option>            <option value="165">Симферополь</option>            <option value="166">Славянск-на-Кубани</option>            <option value="167">Смоленск</option>            <option value="168">Сочи</option>            <option value="169">Ставрополь</option>            <option value="170">станица Гиагинская</option>            <option value="171">Стерлитамак</option>            <option value="172">Судак</option>            <option value="173">Сургут</option>            <option value="174">Сызрань</option>            <option value="175">Сыктывкар</option>            <option value="176">Тагиркент</option>            <option value="177">Тамбов</option>            <option value="178">Тарумовка</option>            <option value="179">Татарск</option>            <option value="180">Таштагол</option>            <option value="181">Тверь</option>            <option value="182">Тимашевск</option>            <option value="183">Тихорецк</option>            <option value="184">Тобольск</option>            <option value="185">Тольятти</option>            <option value="186">Томск</option>            <option value="187">Троицк</option>            <option value="188">Туапсе</option>            <option value="189">Тула</option>            <option value="190">Тюмень</option>            <option value="191">Улан-Батор</option>            <option value="192">Улан-Удэ</option>            <option value="193">Ульяновск</option>            <option value="194">Уссурийск</option>            <option value="195">Уфа</option>            <option value="196">Феодосия</option>            <option value="197">Хабаровск</option>            <option value="198">Ханты-Мансийск</option>           
                <option value="199">Хасавюрт</option>            <option value="200">Хунзах</option>            <option value="201">Чайковский</option>            <option value="202">Чебаркуль</option>            <option value="203">Чебоксары</option>            <option value="204">Челябинск</option>            <option value="205">Череповец</option>            <option value="206">Черкесск</option>            <option value="207">Чита</option>            <option value="208">Шадринск</option>            <option value="209">Шамилькала</option>            <option value="210">Элиста</option>            <option value="211">Южно-Сахалинск</option>            <option value="212">Южно-Сухокумск</option>            <option value="213">Южноуральск</option>            <option value="214">Якутск</option>            <option value="215">Ялта</option>            <option value="216">Ярославль</option></select>
                
        </div>
    </div>

    <hr>
    <div class="row" style="margin-bottom: 5px;">
        <div class="col-md-12">
            <input type="checkbox" id="pto_form_ustamp" name="pto_form[ustamp]" value="1">
                            <label for="pto_form_ustamp">Универсальна печать</label>
                
        </div>
    </div>

    <div class="row" style="margin-bottom: 5px;">
        <div class="col-md-5" style="margin-top: 6px;">
            <label class="row_label">Оператор технического осмотра для ДК:</label>
        </div>
        <div class="col-md-7">
            <input type="text" id="pto_form_sto" name="pto_form[sto]" class="form-control">
                
        </div>
    </div>
    <div class="row" style="margin-bottom: 5px;">
        <div class="col-md-5" style="margin-top: 6px;">
            <label class="row_label">Пункт технического осмотра для ДК:</label>
        </div>
        <div class="col-md-7">
            <input type="text" id="pto_form_pto" name="pto_form[pto]" class="form-control">
                
        </div>
    </div>
    <hr>

        <div class="row" style="margin-bottom: 5px;">
        <div class="col-md-12">
            <input type="checkbox" id="pto_form_pto_all_subusers_wide" name="pto_form[pto_all_subusers_wide]" value="1">
                            <label for="pto_form_pto_all_subusers_wide">установить настройку станций для всех агентов пользователя</label>
                
        </div>
    </div>
    <div class="row" style="margin-bottom: 5px;">
        <div class="col-md-12">
            <input type="checkbox" id="pto_form_prefix_all_subusers_wide" name="pto_form[prefix_all_subusers_wide]" value="1">
                            <label for="pto_form_prefix_all_subusers_wide">установить город передвижного пункта для всех агентов пользователя</label>
                
        </div>
    </div>
    <hr>
 
    </form>
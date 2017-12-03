<!--ПРоверка-->

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Интернет провайдер</title>
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/anchor.js" type="text/javascript"></script>
</head>
<body>
  
    <nav class="navbar navbar-default mnfxd">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#tp" class="go_to">
                    <img class="logo center-block" src="images/logo.gif" alt="StarLineTelecom">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav flmn">
                    <li><a href="#internet" class="link-menu go_to">Интернет</a></li>
                    <li><a href="#TV" class="link-menu go_to">Телевидение</a></li>
                    <li><a href="#business" class="link-menu go_to">Бизнес</a></li>
                    <li><a href="#pay" class="link-menu go_to">Оплата</a></li>
                    <li><a href="#contact" class="link-menu go_to">Контакты</a></li>
                </ul>   
            </div>
        </div>
    </nav>
   
    
    <div class="row BG" id="tp">
        <div class="col-md-4"></div>
        <div class="col-md-8" id="internet">
            <div>
                <p class="tel text-center">+7 (495) 716-98-18</p>
            </div>
        </div>
        
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="sect">
                <p class="sector_text">Интернет</p>
            </div>
            <div class="sect2"></div>
        </div>
    </div>  
    
    <div class="row">
        <div class="col-md-5 padlink">
           <p class="spc-prd-txt-lg text-center">Специальные предложения</p>
            <div class="panel-group spc-prd-dv" id="accordion">
                  <div class="panel panel-default gormpnl">
                              <a class="spc-prd-dv" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    <div class="panel-heading">
                      <h4 class="panel-title text-center gorm">
                                Начало
                      </h4>
                    </div>
                              </a>
                    <div id="collapseOne" class="panel-collapse collapse in">
                      <div class="panel-body gormtxt">
                        Подключись и получи 1 месяц безлимитного, скоростного ИНТЕРНЕТА в ПОДАРОК!
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default gormpnl">
                              <a class="spc-prd-dv" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    <div class="panel-heading">
                      <h4 class="panel-title text-center gorm">
                                Приведи друга
                            </h4>
                    </div>
                              </a>
                    <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="panel-body gormtxt">
                        Приведи к нам своего друга и получи 1 месяц безлимитного интернета в подарок.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default gormpnl">
                              <a class="spc-prd-dv" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                    <div class="panel-heading">
                      <h4 class="panel-title text-center gorm">
                                Приятные бонусы
                            </h4>
                    </div>
                              </a>
                    <div id="collapseThree" class="panel-collapse collapse">
                      <div class="panel-body gormtxt">
                        Заплати единовременно за 6 месяцев и получи 1 месяц в подарок;
                Заплати единовременно сразу за 12 месяцев и получи в подарок 2 месяца безлимитного интернета.
                      </div>
                    </div>
                  </div>
                </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6">
            <button class="butn center-block" data-toggle="modal" data-target=".bs-example-modal-lg">Подбор тарифного плана</button>
            
            
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-lg mdl">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Тарифные планы и услуги</h4>
                </div>
                <div class="row trf">
                    <div class="col-md-4">
                        <img class="spdmtr center-block img-circle" src="images/speedmin.png" alt="30 Мбит/с">
                        <p class="spdmtrtxt text-center"><strong>30 Мбит/с</strong></p>
                        <p class="text-center oplata">
                            Отлично подойдет для одного активного или нескольких-малоактивных пользователей. <br> 100 руб/месяц
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img class="spdmtr center-block img-circle" src="images/speedmd.png" alt="60 Мбит/с">
                        <p class="spdmtrtxt text-center"><strong>60 Мбит/с</strong></p>
                        <p class="text-center oplata">
                            Отличная скорость и цена. Прекрасно подходит для активной семьи и просмотра интерактивного ТВ. <br> 101 руб/месяц
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img class="spdmtr center-block img-circle" src="images/speedmax.png" alt="100 Мбит/с">
                        <p class="spdmtrtxt text-center"><strong>100 Мбит/с</strong></p>
                        <p class="text-center oplata">
                            Максимальная скорость, позволяющая пользоваться интернетом без ограничений. <br> 102 руб/месяц
                        </p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="container text-center">
                            <p class="wrng"> Мы не снимаем со счета нашего клиента деньги на оплату услуг, если их на данный момент нету, чтобы не вгонять его в долги! </p>
                        </div>
                    </div>
                </div>
                <div class="row trf">
                    <div class="col-md-12">
                        <form method="post" action="db/trf_add.php">
                            <p class="spdmtrtxt text-center">Оставтье свой номер телефона и мы вас обязательно проконсультируем!</p>
                            <input class="form-control trfinpt center-block" placeholder="+7 985 123 52 84" name="numb" id="numb">
                            <br>
                            <button class="btn btn-lg center-block" type="submit">Подать заявку</button>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                       <p class="spdmtrtxt text-center">Дополнительные услуги</p>
                        <div class="panel-group spc-prd-dv" id="accordion">
                          <div class="panel panel-default gormpnl">
                                      <a class="spc-prd-dv" data-toggle="collapse" data-parent="#accordion" href="#collapseOne11">
                            <div class="panel-heading">
                              <h4 class="panel-title text-center gorm">
                                        Обещанный платеж
                              </h4>
                            </div>
                                      </a>
                            <div id="collapseOne11" class="panel-collapse collapse in">
                              <div class="panel-body gormtxt">
                                <h2>
                                    Услуга «Обещанный платеж» позволяет пользоваться услугами StarLineTelecom в кредит при отсутствии денежных средств на Вашем Лицевом счете.
                                </h2>
                                <p>
                                    Услуга «Обещанный платеж» позволяет пользоваться услугами StarLineTelecom в кредит при отсутствии денежных средств на Вашем Лицевом счете.  Услуга доступна вам в Автоматическом или Ручном режиме.

                                    Автоматический режим – услуга «Обещанный платеж» активируется автоматически каждый раз при приближении к порогу финансовой блокировки, обеспечивая еще несколько дней бесперебойного пользования услугами и время для внесения платежа.

                                    Ручной режим – в случае попадания Лицевого счета в финансовую блокировку услуга «Обещанный платеж» может быть заказана Вами самостоятельно в Личном кабинете или через СМС. 

                                    Заказать услугу «Обещанный платеж» через СМС Вы можете самостоятельно с Вашего мобильного телефона. Просто отправьте бесплатное смс-сообщение на бесплатный номер 2558 с текстом: «StarLineTelecom ОП».
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-default gormpnl">
                                      <a class="spc-prd-dv" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo22">
                            <div class="panel-heading">
                              <h4 class="panel-title text-center gorm">
                                        Родительский контроль
                                    </h4>
                            </div>
                                      </a>
                            <div id="collapseTwo22" class="panel-collapse collapse">
                              <div class="panel-body gormtxt">
                                <h2>
                                    Доверьте нам контроль за временем, которое ваш ребенок проводит в Сети. Досрочное снятие блокировки доступа в Интернет возможно только через Личный кабинет после ввода пин-кода.
                                </h2>
                                <p>
                                    Дети проводят слишком много времени в Интернете? Установите свое время, когда доступ в Интернет будет невозможен. Доверьте нам контроль за временем, которое ваш ребенок проводит в Сети. Досрочное снятие блокировки доступа в Интернет возможно только через Личный кабинет после ввода пин-кода.

                                    Плата за пользование Услугой списывается в момент подключения Услуги, за полные текущие сутки. При пользовании услугой «Родительский контроль» абонентская плата за услугу «Доступ в Интернет» взимается в полном объеме согласно выбранному вами тарифному плану. При отключении Услуги абонентская плата перестает взиматься со следующих суток после подачи заявки в Личном кабинете. Подключение/отключение  услуги «Родительский контроль» осуществляется только через Личный кабинет и происходит в течение 1 часа.

                                    Для подключения услуги «Родительский контроль» на вашем лицевом счёте должна быть сумма, достаточная для оплаты 1 дня работы Услуги,основных и дополнительных услуг с ежемесячной абонентской платой, подключённых вами.

                                    Пин-код для доступа к Услуге высылается в виде SMS сообщения  на номер, указанный вами в разделе личного кабинета/Договоре в поле «Мобильный телефон». Инструкция по подключению Услуги размещена в Личном кабинете в разделе Услуги/ Родительский контроль. Стоимость SMS-информирования (SMS с Пин-кодом) включается в стоимость Услуги.

                                    В Личном кабинете вам доступно недельное расписание, в котором каждые сутки разбиты на получасовые интервалы. Нажимая мышкой на эти интервалы, вы сами разрешаете или запрещаете доступ в Интернет в определённый  день недели в заданный интервал времени. При этом родители имеют возможность отменить ранее установленный запрет доступа в любое время по своему желанию.

                                    Подключение Услуги не запрещает изменения тарифного плана, подключения/отключения дополнительных услуг, за исключением услуги «Турбокнопка», которая не может быть заказана в период запрета доступа в сеть Интернет.

                                    Блокировка Услуги осуществляется автоматически при отсутствии средств на лицевом счете, разблокировка – при поступлении средств на лицевой счет.

                                    В период действия услуги «Добровольная блокировка» абонентская плата за Услугу «Родительский контроль» не взимается.
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-default gormpnl">
                                      <a class="spc-prd-dv" data-toggle="collapse" data-parent="#accordion" href="#collapseThree33">
                            <div class="panel-heading">
                              <h4 class="panel-title text-center gorm">
                                        Турбокнопка
                                    </h4>
                            </div>
                                      </a>
                            <div id="collapseThree33" class="panel-collapse collapse">
                              <div class="panel-body gormtxt">
                                <h2>
                                    Увеличивайте мгновенно скорость соединения до 100Мбит/с. Быстро скачать фильм или тяжёлый файл больше не проблема! Вы сами определяете время действия услуги: от 1 до 24 часов.
                                </h2>
                                <div class="tabs-outline">
                                    <div class="tab-area tab-area-content current">
                                    <table class="table">
                                    <thead>
                                    <tr><th>Тариф</th><th>Скорость Вх./Исх.<br> канала Мбит/с</th><th>Период действия</th><th>Стоимость, руб. вкл. НДС</th></tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    <td class="black" width="100">Турбокнопка 1</td>
                                    <td style="text-align: left;" width="200">100 / 100</td>
                                    <td width="100">1 час</td>
                                    <td width="200">10</td>
                                    </tr>
                                    <tr>
                                    <td class="black">Турбокнопка 3</td>
                                    <td style="text-align: left;">100 / 100</td>
                                    <td>3 часа</td>
                                    <td>20</td>
                                    </tr>
                                    <tr>
                                    <td class="black">Турбокнопка 6</td>
                                    <td style="text-align: left;">100 / 100</td>
                                    <td>6 часов</td>
                                    <td>30</td>
                                    </tr>
                                    <tr>
                                    <td class="black">Турбокнопка 24</td>
                                    <td style="text-align: left;">100 / 100</td>
                                    <td>24 часа</td>
                                    <td>50</td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </div>
                                    </div>
                                    <p>Перед подключением услуги убедитесь, что:
                                        На лицевом счете достаточно средств;
                                        Ваша сетевая карта или Wi-Fi роутер поддерживают скорость 100Мбит/с;
                                        Если срок активации первичного заказа еще не истек, то повторная активация услуги «Турбокнопка» недоступна;
                                        В период действия услуги «Турбокнопка» смена тарифного плана, а также добровольная блокировка недоступны
                                    </p>
                              </div>
                            </div>
                            </div>
                            <div class="panel panel-default gormpnl">
                                      <a class="spc-prd-dv" data-toggle="collapse" data-parent="#accordion" href="#collapseThree44">
                            <div class="panel-heading">
                              <h4 class="panel-title text-center gorm">
                                        Статический IP-адрес
                                    </h4>
                            </div>
                                      </a>
                            <div id="collapseThree44" class="panel-collapse collapse">
                              <div class="panel-body gormtxt">
                                <h2>
                                     «Статический IP-адрес» - ваш постоянный адрес в Интернете, который закреплён за вашим логином и остается неизменным всегда.
                                </h2>
                                <p>
                                    Зачем вам может понадобиться услуга «Статический IP-адрес»? Воспользуйтесь ею, чтобы:

                                    без препятствий присоединяться к любой доступной игровой сессии,
                                    поднять скорость скачивания из файлообменных сетей и торрентов,
                                    создать свой сервер,
                                    защитить свои электронные кошельки.
                                    Стоимость подключения услуги «Статический IP-адрес» - 150 руб. Абонентская плата за пользование услугой – 150 рублей в месяц.
                                </p>
                              </div>
                            </div>
                            </div>
                            <div class="panel panel-default gormpnl">
                                      <a class="spc-prd-dv" data-toggle="collapse" data-parent="#accordion" href="#collapseThree55">
                            <div class="panel-heading">
                              <h4 class="panel-title text-center gorm">
                                       Кроссплатформа
                                    </h4>
                            </div>
                                      </a>
                            <div id="collapseThree55" class="panel-collapse collapse">
                              <div class="panel-body gormtxt">
                                <h2>
                                     Храненние записей передач каналов за 14 дней около 30 каналов с выбором английского языка. возможность просмотра на 5 устройствах по одной подписке
                                </h2>
                                <p>
                                    Тут будет более детальное описание
                                </p>
                              </div>
                            </div>
                            </div>
                            <div class="panel panel-default gormpnl">
                                      <a class="spc-prd-dv" data-toggle="collapse" data-parent="#accordion" href="#collapseThree66">
                            <div class="panel-heading">
                              <h4 class="panel-title text-center gorm">
                                       Антивирус "ESET NOD 32"
                                    </h4>
                            </div>
                                      </a>
                            <div id="collapseThree66" class="panel-collapse collapse">
                              <div class="panel-body gormtxt">
                                <h2>
                                     Антивирус не только защищает вас от всех видов угроз, защищает интернет платежи, общение в соцсетях, детей в интернете.
                                </h2>
                                <p>
                                    Тут будет более детальное описание
                                </p>
                              </div>
                            </div>
                            </div>
                            <div class="panel panel-default gormpnl">
                                      <a class="spc-prd-dv" data-toggle="collapse" data-parent="#accordion" href="#collapseThree77">
                            <div class="panel-heading">
                              <h4 class="panel-title text-center gorm">
                                       StarLineTelecom премиум
                                    </h4>
                            </div>
                                      </a>
                            <div id="collapseThree77" class="panel-collapse collapse">
                              <div class="panel-body gormtxt">
                                <h2>
                                     Услуга «StarLineTelecom премиум» для абонентов StarLineTelecom позволяет заказать у провайдера услуг Интернет и Цифрового ТВ работы по укладке кабеля и настройке собственного оборудования абонента.
                                </h2>
                                <p>
                                    Заказать услугу «StarLineTelecom премиум» можно одновременно с заявкой на подключение. Если вы уже подключены к StarLineTelecom и хотите, чтобы вам аккуратно уложили провода или настроили ваш маршрутизатор, приобретенный самостоятельно, вы также можете заказать «StarLineTelecom премиум» и наши специалисты выполнят все положенные работы в удобное время. 
                                </p>
                              </div>
                            </div>
                            </div>
                            <div class="panel panel-default gormpnl">
                                      <a class="spc-prd-dv" data-toggle="collapse" data-parent="#accordion" href="#collapseThree88">
                            <div class="panel-heading">
                              <h4 class="panel-title text-center gorm">
                                       Блокировка интернета
                                    </h4>
                            </div>
                                      </a>
                            <div id="collapseThree88" class="panel-collapse collapse">
                              <div class="panel-body gormtxt">
                                <h2>
                                     Период блокировки составляет от 5 до 360 календарных дней. В течение первых 60 календарных дней плата за пользование услугой «Блокировка интернета» не взимается.
                                </h2>
                                <p>
                                    Минимальный период однократного заказа, в том числе продление услуги «Добровольная блокировка», составляет 5 календарных дней, максимальный суммарный период заказа услуги в течение одного календарного года составляет 90 календарных дней;
                                    В период  действия услуги «Добровольная блокировка» начисление абонентской платы за все подключенные услуги (Интернет, Цифровое телевидение и дополнительные услуги) не производится, за исключением следующих услуг: «Аренда оборудования ЦТВ», «Аренда Wi-Fi роутера» и «Статический IP-адрес».
                                    Плата за пользование услугой «Добровольная блокировка» ежегодно в течение первых 30 календарных дней не взимается;
                                    Стоимость услуги «Добровольная блокировка» с 31 по 90 день в календарном году составляет 5 руб. в день;
                                    После завершения периода действия услуги «Добровольная блокировка» начисление абонентской платы за услуги Интернет и Цифровое телевидение (в том числе за дополнительные пакеты и услугу «Мультирум») осуществляется в соответствии с тарифными планами, действовавшими до активации услуги «Добровольная блокировка»;
                                    Смена тарифного плана и управление дополнительными услугами в период действия услуги «Добровольная блокировка» невозможно.

                                    Условия предоставления услуги:

                                    1. Заказ услуги

                                    Подключить услугу Вы можете в Личном кабинете или по телефону круглосуточной 
                                    службы поддержки 8 800 707 12 12;
                                    Услуга предоставляется со следующего после заказа календарного дня;
                                    Для заказа услуги «Добровольная блокировка» на балансе должны быть в наличии средства, достаточные для оплаты 1 дня работы всех ранее подключенных базовых и дополнительных услуг, в том числе услуг Аренды оборудования.

                                    2. Отказ от услуги

                                    После заказа услуги «Добровольная блокировка» абонент может отказаться от услуги до начала и в период действия услуги «Добровольная блокировка» через call-центр и Личный кабинет;
                                    При отказе от услуги «Добровольная блокировка» в период действия услуги «Добровольная блокировка», все услуги абонента активируются в течение одного часа, начисление абонентской платы по действующим тарифным планам начинается с текущих суток.
                                </p>
                              </div>
                            </div>
                            </div>
                            <div class="panel panel-default gormpnl">
                                      <a class="spc-prd-dv" data-toggle="collapse" data-parent="#accordion" href="#collapseThree100">
                            <div class="panel-heading">
                              <h4 class="panel-title text-center gorm">
                                   Компьютерная помощь
                                    </h4>
                            </div>
                                      </a>
                            <div id="collapseThree100" class="panel-collapse collapse">
                              <div class="panel-body gormtxt">
                                <h2>
                                     Интернет провайдер StarLineTelecom поможет починить компьютерную технику и настроить программное обеспечение. Для оформления заявки обратитесь по телефону 8 800 707 12 12.
                                </h2>
                                <p>
                                    Здесь будет детальное описание услуги 
                                </p>
                              </div>
                            </div>
                            </div>
                            <div class="panel panel-default gormpnl">
                                      <a class="spc-prd-dv" data-toggle="collapse" data-parent="#accordion" href="#collapseThree99">
                            <div class="panel-heading">
                              <h4 class="panel-title text-center gorm">
                                   Видеонаблюдение и видеоконтроль
                                    </h4>
                            </div>
                                      </a>
                            <div id="collapseThree99" class="panel-collapse collapse">
                              <div class="panel-body gormtxt">
                                <h2>
                                Интернет провайдер "StarLineTelecom" Предоставляет возможность установки видеонаблюдения, просмотра в онлайн режиме и режим записи
                                </h2>
                                <p>
                                    Здесь будет детальное описание услуги 
                                </p>
                              </div>
                            </div>
                            </div>
                            <div class="panel panel-default gormpnl">
                                      <a class="spc-prd-dv" data-toggle="collapse" data-parent="#accordion" href="#collapseThree111">
                            <div class="panel-heading">
                              <h4 class="panel-title text-center gorm">
                                   PLC Решения
                                    </h4>
                            </div>
                                      </a>
                            <div id="collapseThree111" class="panel-collapse collapse">
                              <div class="panel-body gormtxt">
                                <h2>
                                PLC Решения
                                </h2>
                                <p>
                                PLC адаптер отStarLineTelecom представляет собой устройство, которое позволяет передавать интернет-сигнал по электрической сети. Такое оборудование поможет избавиться от прокладки дополнительных проводов в квартире или частном доме.
                                </p>
                              </div>
                            </div>
                            </div>                              
                          </div>
                        </div>
                    </div>
                </div>                          
                </div>
              </div>
            </div>
            
            
        </div>
    </div>
    
    <div class="row sect-pad" id="TV">
        <div class="col-md-12">
        <div class="sect">
                <p class="sector_text">Телевидение</p>
            </div>
            <div class="sect2"></div>
        </div>
    </div>
    
    <br>
    <div class="row">
        <div class="col-md-12">
               <button class="center-block ghst-btn" data-toggle="modal" data-target=".bs-example-modal-lg2">Узнать больше</button>
                    <div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                           
                            <div class="modal-content">
                             <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Тарифы</h4>
                             </div>
                              <div class="row bg_pdng">        
                                <div class="col-md-12">
                                    <table class="table text-center">
                                        <tr>
                                            <td class="tbl">Пакет</td>
                                            <td class="tbl">Количество каналов</td>
                                            <td class="tbl">Цена</td>
                                            <td class="tbl">Описание</td>
                                        </tr>
                                        <tr>
                                            <td class="tbl">Стартовый</td>
                                            <td>75</td>
                                            <td>99</td>
                                            <td>Общероссийские обязательные и популярные тематические телеканалы в том числе HD</td>
                                        </tr>
                                        <tr>
                                            <td class="tbl">Увлекательный</td>
                                            <td>100</td>
                                            <td>249</td>
                                            <td>Общероссийские обязательные и популярные тематические телеканалы в том числе HD</td>
                                        </tr>
                                        <tr>
                                            <td class="tbl">Базовый</td>
                                            <td>175</td>
                                            <td>399</td>
                                            <td>Обширный пакет включающий премиальные тематические телеканалы в том числе HD</td>
                                        </tr>
                                        <tr>
                                            <td class="tbl">VIP</td>
                                            <td>188</td>
                                            <td>1000</td>
                                            <td>Обширный пакет включающий премиальные тематические телеканалы в том числе HD. Библиотека лучших мировых фильмов и сериалов AMEDIATEKA включена в стоимость</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-4">
                                    <h2>Мы предоставляем</h2>
                                    <p>Хранение записей передач каналов за 14 дней, около 30 каналов с выбором английского языка, возможность просмотра на 5 устройствах по одной подписке</p>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <h2>Работает на всех популярных платформах:</h2>
                                    <p>
                                        — STB приставки<br>
                                        — Dune, Tvip и приставки на Android.<br>
                                        — Apple TV<br>
                                        — Поддерживается AppleTV 4.<br>
                                        — Телевизоры под Android<br>
                                        — Sony и Phillips<br>
                                        — Планшеты (*скоро)<br>
                                        — Android и iOS.<br>
                                        — Smart TV (*скоро)<br>
                                        — LG, Samsung, Sony и другие.<br>
                                    </p>
                                </div>
                            </div>
                            </div>
                          </div>
                        </div>           
            <img class="center-block" src="images/2prt.png" alt="Подключить">
        </div>
    </div>
    <div class="row sect-pad" id="business">
        <div class="col-md-12">
        <div class="sect">
                <p class="sector_text">Бизнес</p>
            </div>
            <div class="sect2"></div>
        </div>
    </div>
    <div class="row sect-pad">
        <div class="col-md-6">
            <img class="center-block ntwrk-img" src="images/Network.png" alt="Сеть организации">
        </div>
        <div class="col-md-6">
            <h1 class="text-center">Оставьте заявку и предложим оптимальное решение для вашей организации!</h1>
            <form method="post" action="db/org_add.php">    
                <div class="bzns-frm center-block ">
                    <p class="bzns-frm-txt">Название организации:</p>
                    <input class="form-control frm-obr-svz-inpt center-block" placeholder="ООО 'Девайс'" name="name" id="name" required>
                    <p class="bzns-frm-txt">Чем занимается организация:</p>
                    <input class="form-control frm-obr-svz-inpt center-block" placeholder="Продажей оборудования" name="occupation" id="ocupation" required>
                    <p class="bzns-frm-txt">Адрес:</p>
                    <input class="form-control frm-obr-svz-inpt center-block" placeholder="Улица примеров 18 к4" name="adress" id="adress" required>
                    <p class="bzns-frm-txt">Кол-во комьютеров:</p>
                    <input class="form-control frm-obr-svz-inpt center-block" placeholder="12" name="amount" id="amount" required>
                    <p class="bzns-frm-txt">Телефон:</p>
                    <input class="form-control frm-obr-svz-inpt center-block" placeholder="+7 495 716 98 18" name="tel" id="tel" required type="tel" maxlength="15">
                    <p class="bzns-frm-txt">Электронная почта:</p>
                    <input class="form-control frm-obr-svz-inpt center-block" placeholder="example@example.ex" name="mail" id="mail" required type="email">
                    <br>
                    <button class="btn btn-lg center-block" type="submit">Подать заявку</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row sect-pad" id="pay">
        <div class="col-md-12">
            <div class="sect">
                    <p class="sector_text">Оплата</p>
            </div>
            <div class="sect2"></div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Оплата через специальные сервисы</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <p class="oplata text-center">Яндекс деньги</p>
            <br>
            <a href="https://money.yandex.ru/new"><img class="center-block opmg" src="images/yam.png" alt="Яндекс деньги"></a>
        </div>
        <div class="col-md-4">
            <p class="oplata text-center">Plat.ru</p>
            <br>
            <a href="https://plat.ru/?#show_pay(10185, 102)"><img class="center-block opmg" src="images/platru.png" alt="Яндекс деньги"></a>
        </div>
        <div class="col-md-4">
            <p class="oplata text-center">Сбербанк</p>
            <br>
            <a href="https://online.sberbank.ru/CSAFront/index.do"><img class="center-block opmg" src="images/sber.png" alt="Яндекс деньги"></a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <h1 class="text-center">Оплата через Терминал</h1>
            <br>
                <img class="center-block bnkmg" src="images/term2.png" alt="Терминал">
        </div>
        <div class="col-md-4">
            <h1 class="text-center">Оплата через банк</h1>
            <br>
            <a href="http://butovonet.ru/blank.html">
                <img class="center-block bnkmg" src="images/bank.png" alt="Банк">
            </a>
        </div>
        <div class="col-md-4">
            <h1 class="text-center">Оплата через карту</h1>
            <br>
            <a href="https://b.butovonet.ru/webroom/?">
                <img class="center-block bnkmg" src="images/card.png" alt="Банк">
            </a>
        </div>
    </div>
    </div>
    
    <div class="row sect-pad" id="contact">
        <div class="col-md-12">
            <div class="sect">
                    <p class="sector_text">Контакты</p>
            </div>
            <div class="sect2"></div>
        </div>
    </div>
    <div class="row padlink">
       <div class="col-md-12">
           <div class="panel-group cnct center-block" id="accordion">
              <div class="panel panel-default gormpnl">
                          <a class="spc-prd-dv" data-toggle="collapse" data-parent="#accordion" href="#collapseOne1">
                <div class="panel-heading">
                  <h4 class="panel-title text-center gorm">
                            Контактные телефоны
                    </h4>
                </div>
                          </a>
                <div id="collapseOne1" class="panel-collapse collapse in">
                  <div class="panel-body gormtxt">
                    <strong>Подключение к сети:</strong> (495)716-98-18, (495)716-46-90 будни с 11:00 до 20:00, выходные с 11:00 до 18:00 <br>
                    <strong>Техническая поддержка сети:</strong> (495)716-98-18, (495)716-46-90 будни с 10:00 до 21:00, выходные с 11:00 до 18:00. <br>
                    <strong>Финансовые вопросы:</strong> (495)716-64-45, (495)717-58-27(факс) <br>
                    <strong>Корпоративный отдел:</strong> (495)716-98-18 доб.108
                  </div>
                </div>
              </div>
              <div class="panel panel-default gormpnl">
                          <a class="spc-prd-dv" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo2">
                <div class="panel-heading">
                  <h4 class="panel-title text-center gorm">
                            Электроная почта
                  </h4>
                </div>
                          </a>
                <div id="collapseTwo2" class="panel-collapse collapse">
                  <div class="panel-body gormtxt">
                            <strong>Техническая поддержка и администрация сети:</strong> noc@butovonet.ru<br>
                            <strong>Корпоративный отдел и бухгалтерия:</strong> ul@butovonet.ru
                  </div>
                </div>
              </div>
              <div class="panel panel-default gormpnl">
                          <a class="spc-prd-dv" data-toggle="collapse" data-parent="#accordion" href="#collapseThree3">
                <div class="panel-heading">
                  <h4 class="panel-title text-center gorm">
                            Реквизиты
                  </h4>
                </div>
                          </a>
                <div id="collapseThree3" class="panel-collapse collapse">
                  <div class="panel-body gormtxt">
                            <strong>Название организации:</strong> ООО НПО «ЭДМА»<br>
                            <strong>Юридический адрес:</strong> 119313, Москва г, Ленинский пр-кт, д. 91, кор.4<br>
                            <strong>Фактический адрес:</strong> 117042, Москва г, Скобелевская ул, д. 8<br>
                            <strong>ИНН:</strong> 7736036898<br>
                            <strong>КПП:</strong> 773601001<br>
                            <strong>Название банка:</strong> Публичное акционерное общество «Сбербанк России».<br>
                            <strong>БИК:</strong> 044525225<br>
                            <strong>Корр. счет:</strong> 30101810400000000225<br>
                            <strong>Расчетный счет:</strong> 40702810138140100467<br>
                  </div>
                </div>
              </div>
           </div>
       </div>
    </div>
    <footer>
        <div class="row foot">
            <div class="col-md-12">
                <div class="container">
                    <p class="foottxt">Copyright &copy; 2017 StarLineTelecom. ООО НПО ЭДМА. Данный интернет-сайт носит исключительно информативный характер и не является публичной офертой, определяемой положениями Статьи 437 ГК РФ. Для получения подробной информации об акциях, тарифах, условиях их изменения и подключения, обращайтесь в офис компании. Лицензия №96535, №102373, №102374. Федеральная служба по надзору в сфере связи, информационных технологий и массовых коммуникаций(Роскомнадзор).</p>
                    <p class="foottxt">Created by Nikita Tkachenko</p>
                </div>
            </div>
        </div>
    </footer>    
</body>
</html>
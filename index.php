<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>VERO LEX GROUP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./favicon.ico">

    <?php
    include "call.php";
    ?>
</head>

<body>
    <header>
        <div class="container">
            <div class="header">
                <div class="logo">
                    <img src="assets/images/logo.svg">
                </div>
                <div class="headerLinks">
                    <div class="e"><a href="#find">Преимущества</a></div>
                    <div class="e"><a href="#suggest">Услуги</a></div>
                    <div class="e"><a href="#result">Результаты работы</a></div>
                    <div class="e"><a href="#questions">FAQ</a></div>
                    <div class="e"><a href="#contacts">Контакты</a></div>
                    <div id="telephone"><a href="tel:+74951059057"><span>+7 495 105 90 57</span></a></div>
                </div>
                <div class="false">
                    <div class="call">
                        <form id="wdh_form" name="form" class="justify">
                            <div class="callForm">
                                <div>
                                    <input id="telNo" name="telNo" type="tel" class="tel" required placeholder="+7(___) ___-__-__" inputmode="text" style="display:none">
                                    <span class="validity"></span>
                                </div>
                                <div>
                                    <button class="btn" type="submit" style="display: none;"></button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="btnTop">
                    <div class="css-modal-details">
                        <details>
                            <summary>Оставить заявку</summary>
                            <div class="cmc">
                                <div class="cmt">
                                    <div class="call">
                                        <div class="callHead">Оставьте заявку</div>
                                        <div class="callText">Наш менеджер скоро свяжется с вами</div>
                                        <form id="wdh_form" name="form" class="justify" method="post" action="">
                                            <div class="callForm">
                                                <div>
                                                    <input id="telNo" name="telNo" type="tel" class="tel" required placeholder="+7(___) ___-__-__" inputmode="text">
                                                    <span class="validity"></span>
                                                </div>
                                                <div>
                                                    <button class="btn" type="submit">Оставить заявку</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="agreement"><a class="a" href="./agree.php">Отправляя данные, вы соглашаетесь с политикой конфиденциальности</a></div>
                                    </div>
                                </div>
                        </details>
                    </div>
                </div>
            </div>
    </header>
    <main>
        <div class="defend">
            <div class="container">
                <div class="wrapper">
                    <div class="defendContent">
                        <h2>Встаем на защиту вашего бизнеса в трудные времена</h2>
                        <ul>
                            <li><span>Банкротство юридических лиц</span></li>
                            <li><span>Банкротство физических лиц</span></li>
                            <li><span>Списание долгов</span></li>
                            <li><span>Услуги адвоката</span></li>
                            <li><span>Правовая поддержка предпринимателей</span></li>
                        </ul>
                        <div class="call">
                        <form id="wdh_form" name="form"  method="post" action="">
                                            <div class="callForm">
                                                <div>
                                                    <input id="telNo" name="telNo" type="tel" class="tel" required placeholder="+7(___) ___-__-__" inputmode="text">
                                                    <span class="validity"></span>
                                                </div>
                                                <div>
                                                    <button class="btn" type="submit">Оставить заявку</button>
                                                </div>
                                            </div>
                                        </form>
                            <div class="agreement"><a class="a" href="./agree.php">Отправляя данные, вы соглашаетесь с политикой конфиденциальности</a></div>
                        </div>
                    </div>
                    <div class="largeLogo">
                        <img src="assets/images/largeLogo2.png">
                    </div>

                </div>
            </div>
        </div>
        <div class="advantages">
            <div class="container">
                <div class="advantagesContent">
                    <div class="card">
                        <div class="cardContent">
                            <h3>Высокий профессионализм</h3>
                            <p>Мы постоянно совершенствуем и повышаем свой профессиональный уровень. </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cardContent">
                            <h3>Индивидуальный подход</h3>
                            <p>Разрабатываем уникальную стратегию и готовим необходимые документы. </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="cardContent">
                            <h3>95,5% успешных дел</h3>
                            <p>Имеем большой опыт в решении проблем связанные с бизнесом</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="situation">
            <div class="container">
                <div class="situationContent">
                    <div class="situationContentHead">
                        <h2>Сложная ситуация в бизнесе?</h2>
                        <ul>
                            <li><span>Самым оптимальным решением, когда предприниматель оказывается в сложном финансовом положении является банкротство</span></li>
                        </ul>
                    </div>
                    <div class="situationContentMain">

                        <div class="situationCard">
                            <div class="situationImg">
                                <img src="assets/images/debt.png">
                            </div>
                            <div class="situationText">
                                <span>Долги</span>
                                <p>Из-за управленческих ошибок не удается рассчитаться с кредиторами и накапливаются долги</p>
                            </div>
                        </div>
                        <div class="situationCard">
                            <div class="situationImg">
                                <img src="assets/images/risk.png">
                            </div>
                            <div class="situationText">
                                <span>Высокие
                                    риски</span>
                                <p>Повышенные риски привлечения к ответственности или судебным искам</p>
                            </div>
                        </div>
                        <div class="situationCard">
                            <div class="situationImg">
                                <img src="assets/images/lose.png">
                            </div>
                            <div class="situationText">
                                <span>Потеря активов</span>
                                <p>Необходимо защитить собственность: квартиры, машины, дома, ценные бумаги</p>
                            </div>
                        </div>
                        <div class="situationCard">
                            <div class="situationImg">
                                <img src="assets/images/claim.png">
                            </div>
                            <div class="situationText">
                                <span>Претензии</span>
                                <p>Отбиться от выдвинутых претензий кредиторов и снизить до минимума издержки</p>
                            </div>
                        </div>
                        <div class="situationCard">
                            <div class="situationImg">
                                <img src="assets/images/close.png">
                            </div>
                            <div class="situationText">
                                <span>Закрыть компанию</span>
                                <p>Закрыть организацию, освободить себя от ответственности</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="find">
            <a name="find"></a>
            <div class="container">
                <div class="findContent">
                    <div class="findHead">
                        <h2>Поиск эффективных решений</h2>
                        <ul>
                            <li><span>Мы разработали стратегию для решения ваших вопросов на основе командной работы. Она работает с 1999 года.</span></li>
                        </ul>
                    </div>
                    <div class="findImg">
                        <img src="assets/images/team2.jpg">
                    </div>
                    <div class="findMain">
                        <div class="findCard">
                            <ul>
                                <li><span>Опыт работы более 20 лет</span></li>
                            </ul>
                            <p>С 1999 года нашими клиентами стали более 10 000 компаний и физических лиц. Большое количество успешно проведенных процедур банкротства. </p>
                        </div>
                        <div class="findCard">
                            <ul>
                                <li><span>Берем на себя ответственность</span></li>
                            </ul>
                            <p>Заключаем договор с фиксированной оплатой, предоставляем возможность рассрочки платежей.
                                Доведем любой проект до желаемого результата. </p>
                        </div>
                        <div class="findCard">
                            <ul>
                                <li><span>Любим и ценим наших клиентов</span></li>
                            </ul>
                            <p>Индивидуальный подход. Предложим несколько вариантов решения, взвесим плюсы и минусы. Оценим риски. Служба сопровождения 24/7.</p>
                        </div>
                        <div class="findCard">
                            <ul>
                                <li><span>Уникальная команда</span></li>
                            </ul>
                            <p>В нашей команде - адвокаты, арбитражные управляющие, квалифицированные юристы, аудиторы, бухгалтеры и оценщики.</p>
                        </div>
                        <div class="findCard">
                            <ul>
                                <li><span>Технологичная компания</span></li>
                            </ul>
                            <p>Мгновенная обработка информации. Удаленное взаимодействие с вами: через любой удобный для вас ресурс. Автоматизированная система учета и документооброта (CRM).</p>
                        </div>
                        <div class="findCard">
                            <ul>
                                <li><span>Всегда на передовой</span></li>
                            </ul>
                            <p>Предлагаем самые актуальные и современные способы защиты бизнеса.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="suggest">
            <div class="container">
                <div class="suggestContent">
                    <a name="suggest"></a>
                    <div class="suggestHead">
                        <h2>Что мы предлагаем?</h2>
                        <ul>
                            <li><span>Мы предоставляем максимальный пакет услуг, который обеспечивает эффективное банкротство и максимальное сохранение ваших активов</span></li>
                        </ul>
                    </div>
                    <div class="suggestMain">
                        <div class="suggestCard">
                            <div class="suggestText">
                                <div class="suggestWrapper">
                                    <span class="itemHead">Защита от субсидиарной ответственности</span>
                                    <p>Каждое дело индивидуально и зависит от ситуации. </p>
                                </div>
                                <div class="itemfooter">
                                    <span class="more">
                                        <div class="css-modal-details1">
                                            <details>
                                                <summary>Подробнее</summary>
                                                <div class="cmc1">
                                                    <div class="cmt1">
                                                        <div class="call">
                                                            <div class="callHead">Оставьте заявку</div>
                                                            <div class="callText">Наш менеджер скоро свяжется с вами</div>
                                                            <form id="wdh_form" name="form" class="justify" method="post" action="">
                                                                <div class="callForm" class="justify">
                                                                    <div>
                                                                        <input id="telNo" name="telNo" type="tel" class="tel" required placeholder="+7(___) ___-__-__" inputmode="text">
                                                                        <span class="validity"></span>
                                                                    </div>
                                                                    <div>
                                                                        <button class="btn" type="submit">Оставить заявку</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <div class="agreement"><a class="a" href="./agree.php">Отправляя данные, вы соглашаетесь с политикой конфиденциальности</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </details>
                                        </div>
                                    </span>
                                    <img src="assets/images/1.svg">
                                </div>
                            </div>
                        </div>
                        <div class="suggestCard">
                            <div class="suggestText">
                                <div class="suggestWrapper">
                                    <span class="itemHead">Ликвидация предприятий по всей России</span>
                                    <p>Законный способ закрыть ООО. </p>
                                </div>

                                <div class="itemfooter">
                                    <span class="more">
                                        <div class="css-modal-details1">
                                            <details>
                                                <summary>Подробнее</summary>
                                                <div class="cmc1">
                                                    <div class="cmt1">
                                                        <div class="call">
                                                            <div class="callHead">Оставьте заявку</div>
                                                            <div class="callText">Наш менеджер скоро свяжется с вами</div>
                                                            <form id="wdh_form" name="form" class="justify" method="post" action="">
                                                                <div class="callForm">
                                                                    <div>
                                                                        <input id="telNo" name="telNo" type="tel" class="tel" required placeholder="+7(___) ___-__-__" inputmode="text">
                                                                        <span class="validity"></span>
                                                                    </div>
                                                                    <div>
                                                                        <button class="btn" type="submit">Оставить заявку</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <div class="agreement"><a class="a" href="./agree.php">Отправляя данные, вы соглашаетесь с политикой конфиденциальности</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </details>
                                        </div>
                                    </span>
                                    <img src="assets/images/2.svg">
                                </div>
                            </div>
                        </div>
                        <div class="suggestCard">
                            <div class="suggestText">
                                <span class="itemHead">Банкротство юридических и физических лиц</span>
                                <p>Эффективная процедура,
                                    со списанием долгов, в установленные сроки.</p>
                                <div class="itemfooter">
                                    <span class="more">
                                        <div class="css-modal-details1">
                                            <details>
                                                <summary>Подробнее</summary>
                                                <div class="cmc1">
                                                    <div class="cmt1">
                                                        <div class="call">
                                                            <div class="callHead">Оставьте заявку</div>
                                                            <div class="callText">Наш менеджер скоро свяжется с вами</div>
                                                            <form id="wdh_form" name="form" class="justify" method="post" action="">
                                                                <div class="callForm">
                                                                    <div>
                                                                        <input id="telNo" name="telNo" type="tel" class="tel" required placeholder="+7(___) ___-__-__" inputmode="text">
                                                                        <span class="validity"></span>
                                                                    </div>
                                                                    <div>
                                                                        <button class="btn" type="submit">Оставить заявку</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <div class="agreement"><a class="a" href="./agree.php">Отправляя данные, вы соглашаетесь с политикой конфиденциальности</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </details>
                                        </div>
                                    </span>
                                    <img src="assets/images/3.svg">
                                </div>
                            </div>
                        </div>
                        <div class="suggestCard">
                            <div class="suggestText">
                                <span class="itemHead">Правовая поддержка предпринимателей</span>
                                <p>Приведение документов компании в соответствие с рекомендациями.</p>
                                <div class="itemfooter">
                                    <span class="more">
                                        <div class="css-modal-details1">
                                            <details>
                                                <summary>Подробнее</summary>
                                                <div class="cmc1">
                                                    <div class="cmt1">
                                                        <div class="call">
                                                            <div class="callHead">Оставьте заявку</div>
                                                            <div class="callText">Наш менеджер скоро свяжется с вами</div>
                                                            <form id="wdh_form" name="form" class="justify" method="post" action="">
                                                                <div class="callForm">
                                                                    <div>
                                                                        <input id="telNo" name="telNo" type="tel" class="tel" required placeholder="+7(___) ___-__-__" inputmode="text">
                                                                        <span class="validity"></span>
                                                                    </div>
                                                                    <div>
                                                                        <button class="btn" type="submit">Оставить заявку</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <div class="agreement"><a class="a" href="./agree.php">Отправляя данные, вы соглашаетесь с политикой конфиденциальности</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </details>
                                        </div>
                                    </span>
                                    <img src="assets/images/4.svg">
                                </div>
                            </div>
                        </div>
                        <div class="suggestCard">
                            <div class="suggestText">
                                <span class="itemHead">Арбитражные споры</span>
                                <p>Взыскание задолженностей, имущественные споры, споры по договорам, корпоративные споры.</p>
                                <div class="itemfooter">
                                    <span class="more">
                                        <div class="css-modal-details1">
                                            <details>
                                                <summary>Подробнее</summary>
                                                <div class="cmc1">
                                                    <div class="cmt1">
                                                        <div class="call">
                                                            <div class="callHead">Оставьте заявку</div>
                                                            <div class="callText">Наш менеджер скоро свяжется с вами</div>
                                                            <form id="wdh_form" name="form" class="justify" method="post" action="">
                                                                <div class="callForm">
                                                                    <div>
                                                                        <input id="telNo" name="telNo" type="tel" class="tel" required placeholder="+7(___) ___-__-__" inputmode="text">
                                                                        <span class="validity"></span>
                                                                    </div>
                                                                    <div>
                                                                        <button class="btn" type="submit">Оставить заявку</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <div class="agreement"><a class="a" href="./agree.php">Отправляя данные, вы соглашаетесь с политикой конфиденциальности</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </details>
                                        </div>
                                    </span>
                                    <img src="assets/images/5.svg">
                                </div>
                            </div>
                        </div>
                        <div class="suggestCard">
                            <div class="suggestText">
                                <span class="itemHead">Налоговые споры </span>
                                <p>Подготовка процессуальных документов, представление в суде.</p>
                                <div class="itemfooter">
                                    <span class="more">
                                        <div class="css-modal-details1">
                                            <details>
                                                <summary>Подробнее</summary>
                                                <div class="cmc1">
                                                    <div class="cmt1">
                                                        <div class="call">
                                                            <div class="callHead">Оставьте заявку</div>
                                                            <div class="callText">Наш менеджер скоро свяжется с вами</div>
                                                            <form id="wdh_form" name="form" class="justify" method="post" action="">
                                                                <div class="callForm">
                                                                    <div>
                                                                        <input id="telNo" name="telNo" type="tel" class="tel" required placeholder="+7(___) ___-__-__" inputmode="text">
                                                                        <span class="validity"></span>
                                                                    </div>
                                                                    <div>
                                                                        <button class="btn" type="submit">Оставить заявку</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <div class="agreement"><a class="a" href="./agree.php">Отправляя данные, вы соглашаетесь с политикой конфиденциальности</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </details>
                                        </div>
                                    </span>
                                    <img src="assets/images/6.svg">
                                </div>
                            </div>
                        </div>
                        <div class="suggestCard">
                            <div class="suggestText">
                                <span class="itemHead">Смена директора и учредителя </span>
                                <p>Выполняем подготовку документов, осуществляем подачу документов в МИФНС.</p>
                                <div class="itemfooter">
                                    <span class="more">
                                        <div class="css-modal-details1">
                                            <details>
                                                <summary>Подробнее</summary>
                                                <div class="cmc1">
                                                    <div class="cmt1">
                                                        <div class="call">
                                                            <div class="callHead">Оставьте заявку</div>
                                                            <div class="callText">Наш менеджер скоро свяжется с вами</div>
                                                            <form id="wdh_form" name="form" class="justify" method="post" action="">
                                                                <div class="callForm">
                                                                    <div>
                                                                        <input id="telNo" name="telNo" type="tel" class="tel" required placeholder="+7(___) ___-__-__" inputmode="text">
                                                                        <span class="validity"></span>
                                                                    </div>
                                                                    <div>
                                                                        <button class="btn" type="submit">Оставить заявку</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <div class="agreement"><a class="a" href="./agree.php">Отправляя данные, вы соглашаетесь с политикой конфиденциальности</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </details>
                                        </div>
                                    </span>
                                    <img src="assets/images/7.svg">
                                </div>
                            </div>
                        </div>
                        <div class="suggestCard">
                            <div class="suggestText">
                                <span class="itemHead">Корпоративные споры </span>
                                <p>Подготовка протоколов собраний участников и документов по одобрению сделок.</p>
                                <div class="itemfooter">
                                    <span class="more">
                                        <div class="css-modal-details1">
                                            <details>
                                                <summary>Подробнее</summary>
                                                <div class="cmc1">
                                                    <div class="cmt1">
                                                        <div class="call">
                                                            <div class="callHead">Оставьте заявку</div>
                                                            <div class="callText">Наш менеджер скоро свяжется с вами</div>
                                                            <form id="wdh_form" name="form" class="justify" method="post" action="">
                                                                <div class="callForm">
                                                                    <div>
                                                                        <input id="telNo" name="telNo" type="tel" class="tel" required placeholder="+7(___) ___-__-__" inputmode="text">
                                                                        <span class="validity"></span>
                                                                    </div>
                                                                    <div>
                                                                        <button class="btn" type="submit">Оставить заявку</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <div class="agreement"><a class="a" href="./agree.php">Отправляя данные, вы соглашаетесь с политикой конфиденциальности</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </details>
                                        </div>
                                    </span>
                                    <img src="assets/images/8.svg">
                                </div>
                            </div>
                        </div>
                        <div class="suggestCard">
                            <div class="suggestText">
                                <span class="itemHead">Абонентское обслуживание </span>
                                <p>Поможем наладить механизм взаимодействия структуры.</p>
                                <div class="itemfooter">
                                    <span class="more">
                                        <div class="css-modal-details1">
                                            <details>
                                                <summary>Подробнее</summary>
                                                <div class="cmc1">
                                                    <div class="cmt1">
                                                        <div class="call">
                                                            <div class="callHead">Оставьте заявку</div>
                                                            <div class="callText">Наш менеджер скоро свяжется с вами</div>
                                                            <form id="wdh_form" name="form" class="justify" method="post" action="">
                                                                <div class="callForm">
                                                                    <div>
                                                                        <input id="telNo" name="telNo" type="tel" class="tel" required placeholder="+7(___) ___-__-__" inputmode="text">
                                                                        <span class="validity"></span>
                                                                    </div>
                                                                    <div>
                                                                        <button class="btn" type="submit">Оставить заявку</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <div class="agreement"><a class="a" href="./agree.php">Отправляя данные, вы соглашаетесь с политикой конфиденциальности</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </details>
                                        </div>
                                    </span>
                                    <img src="assets/images/9.svg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a name="suggest"></a>
        </div>
        <div class="stages">
            <div class="container">
                <div class="stagesContent">
                    <div class="stagesHead">
                        <h2>Этапы работы </h2>
                        <ul>
                            <li><span>К каждому клиенту находим индивидуальный подход.</span></li>
                        </ul>
                    </div>
                    <div class="stagesMain">
                        <div class="stagesCard">
                            <div class="stagesText">
                                <div class="number">01</div>
                                <div class="stagesItemHead">Оставьте заявку</div>
                                <p>Оставьте ваш номер телефона и мы свяжемся с вами для подробной консультации.</p>
                                <div class="btnTop">
                                    <div class="css-modal-details">
                                        <details>
                                            <summary>Оставить заявку</summary>
                                            <div class="cmc">
                                                <div class="cmt">
                                                    <div class="call">
                                                        <div class="callHead">Оставьте заявку</div>
                                                        <div class="callText">Наш менеджер скоро свяжется с вами</div>
                                                        <form id="wdh_form" name="form" class="justify" method="post" action="">
                                                            <div class="callForm">
                                                                <div>
                                                                    <input id="telNo" name="telNo" type="tel" class="tel" required placeholder="+7(___) ___-__-__" inputmode="text">
                                                                    <span class="validity"></span>
                                                                </div>
                                                                <div>
                                                                    <button class="btn" type="submit">Оставить заявку</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <div class="agreement"><a class="a" href="./agree.php">Отправляя данные, вы соглашаетесь с политикой конфиденциальности</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </details>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="stagesCard">
                            <div class="stagesText">
                                <div class="number">02</div>
                                <div class="stagesItemHead">Консультация с юристом</div>
                                <p>После консультации вы получите ценные рекомендации, а мы понимание вашей проблемы.</p>
                            </div>
                        </div>
                        <div class="stagesCard">
                            <div class="stagesText">
                                <div class="number">03</div>
                                <div class="stagesItemHead">Формирование стратегии</div>
                                <p>Приступаем к формированию стратегического плана.</p>
                            </div>
                        </div>
                        <div class="stagesCard">
                            <div class="stagesText">
                                <div class="number">04</div>
                                <div class="stagesItemHead">Оценка бюджета и заключение договора</div>
                                <p>Прозрачный бюджет и договор без подводных камней.</p>
                            </div>
                        </div>
                        <div class="stagesCard">
                            <div class="stagesText">
                                <div class="number">05</div>
                                <div class="stagesItemHead">Проводим процедуру банкротства</div>
                                <p>Процедура банкротства проходит в соответсвии
                                    с действующим законодательством.</p>
                            </div>
                        </div>
                        <div class="stagesCard">
                            <div class="stagesText">
                                <div class="number">06</div>
                                <div class="stagesItemHead">Поздравляем со списанием долгов </div>
                                <p>Пора создавать новый бизнес</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="results">
            <a name="result"></a>
            <div class="container">
                <div class="resultsContent">
                    <div class="resultsHead">
                        <h2>Результаты нашей работы</h2>
                        <ul>
                            <li><span>93% компаний были ликвидированы через суд с абсолютным списанием долгов и 7% обратившихся к нам избежали банкротства.</span></li>
                        </ul>
                    </div>
                    <div class="resultsMain">
                        <div class="case" id="case1">
                            <div class="caseHead">Кейс: Банкротство ресторана и недвижимость</div>
                            <div class="caseTask">Задача:</div>
                            <p class="taskText">К нам обратился предприниматель. У предпринимателя на одной компании был оформлен действующий ресторан, этаж нежилой площади для сдачи в аренду и цех по производству колбас.
                                Причиной возникновения долга были требования  налоговой инспекции по результатам налоговой проверки. В ходе проверки обнаружились ошибки бухучёта, которые и повлекли доначисления. Также некоторые контрагенты не выдержали встречных проверок, что тоже стало причиной начисления штрафов.</p>
                            <div class="caseSolution">Решение:</div>
                            <p class="solutionText">В результаты запросы на сумму более 40 000 000 руб. были списаны. Инвесторы приобрели ресторан. Кредиторы получили 24% от суммы иска.
                                Так же очень важно что к субсидиарке никто не был привлечён.
                                В качестве пожелания тем, кто попал или же имеет возможность попасть в похожую историю, прежде всего, серьёзно относится в правильности бухучёта, подключать опытных бухгалтеров. Также важно не объединять разные направления на одном юридическом лице. Нашим юристом зачастую приходится давать подробные советы по структурированию ООО.</p>
                        </div>
                        <div class="choose">
                            <div class="chooseCard" id="choose1">
                                <span>Ресторан + недвижимость</span>
                                <p>Банкротство</p>
                            </div>
                            <div class="chooseCard" id="choose2">
                                <span>Интернет-гипермаркет товаров разного назначения</span>
                                <p>Банкротство цифрового гипермаркета, который не прошёл проверку</p>
                            </div>
                            <div class="chooseCard" id="choose3">
                                <span>Крупная строительная компания, жилищные комплексы во многих регионах страны</span>
                                <p>Банкротство крупного застройщика</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="questions">
            <a name="questions"></a>
            <div class="container">
                <div class="questionsContent">
                    <div class="questionsHead">
                        <h2>Часто задаваемые вопросы</h2>
                        <ul>
                            <li><span>Мы знаем, как много вопросов появляется у предпринимателей при банкротстве. Мы разработали специальный раздел, где вы сможете получить ответ от наших специалистов.</span></li>
                        </ul>
                    </div>
                    <div class="questionsMain">
                        <div class="questionCard">
                            <div class="cardHead">
                                <div class="headerText">Чем важна кандидатура арбитражного управляющего?</div>

                            </div>
                            <div class="cardContent">Заявление должен подать некий «дружественный кредитор», и указать в заявлении арбитражного управляющего, с которым есть предварительная договоренность. Если такой возможности нет, и заявление будет подано от самого должника, стоит попытаться связаться с саморегулируемой организацией арбитражных управляющих и достичь договоренностей.</div>
                        </div>
                        <div class="questionCard">
                            <div class="cardHead">
                                <div class="headerText">Можно ли заявить требование, приобретенное у независимого кредитора в процедуре банкротства?</div>

                            </div>
                            <div class="cardContent">На требование, полученное лицом, контролирующим должника в условиях имущественного кризиса организации, распространяется тот же режим удовлетворения, что и на требование о возврате компенсационного финансирования, – оно удовлетворяется в очередности, предшествующей распределению ликвидационной квоты.</div>
                        </div>
                        <div class="questionCard">
                            <div class="cardHead">
                                <div class="headerText">Возникла ли у меня обязанность подавать заявление о банкротстве если по итогам года возникла задолженность по налогам? </div>

                            </div>
                            <div class="cardContent">При изучении совокупности норм законодательства о несостоятельности следует, что величина просроченных платежей законодательно не определена, так что формально иск требуется подавать при любой сумме невыполненных обязательств. У директора есть 30 календарных, дней с момента наступления неплатежеспособности, на подачу заявления в суд.</div>
                        </div>
                        <div class="questionCard">
                            <div class="cardHead">
                                <div class="headerText">Кредитные каникулы или банкротство? Что выбрать?</div>

                            </div>
                            <div class="cardContent">Можно воспользоваться любым из упомянутых механизмов. Но они сильно различаются и по целям, и по способу реализации, и по последствиям.
                                Для кредитных каникул нужно выполнить определенным требованиям, собрать справки. В результате на полгода сдвигается график выплат. Однако, проценты продолжают начисляться.</div>
                        </div>
                        <div class="questionCard">
                            <div class="cardHead">
                                <div class="headerText">Не устраивает как ведет процедуру нынешний конкурсный управляющий. Можно ли его заменить другим?</div>

                            </div>
                            <div class="cardContent">Если вы являетесь мажоритарным кредитором, либо большинство других кредиторов придерживаются с вами одного мнения – возможна замена управляющего через собрание кредиторов.</div>
                        </div>
                        <div class="questionCard">
                            <div class="cardHead">
                                <div class="headerText">Какой срок исковой давности будет применяться при привлечении к субсидиарной ответственности?</div>

                            </div>
                            <div class="cardContent">По общему правилу, исковая давность исчисляется в соответствии с действующим, на момент совершения правонарушения правовым регулированием. Однако существует достаточно обширная судебная практика, которая придерживается иного мнения. </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="reviews">
            <div class="container">
                <div class="reviewsContent">
                    <h2>Отзывы наших клиентов</h2>
                    <div class="carousel">
                        <div class="carousel-wrapper">
                            <span id="item-1"></span>
                            <span id="item-2"></span>
                            <span id="item-3"></span>
                            <div class="carousel-item item-1">
                                <div class="carouselCard">
                                    <div class="cardAva">
                                        <img src="assets/images/Ava.svg">
                                    </div>
                                    <div class="cardText">
                                        <div class="avaName">Екатерина</div>

                                        <div class="avaMark"><img src="assets/images/mark.svg"></div>
                                        <div class="avaText">Работа выполнена очень оперативно. Юристы данной фирмы проявили себя настоящими профессионалами, вежливые, отзывчивые, грамотные. Спасибо! Рекомендую фирму к сотрудничеству!</div>
                                    </div>
                                </div>
                                <a class="arrow arrow-prev" href="#item-3"></a>
                                <a class="arrow arrow-next" href="#item-2"></a>
                            </div>

                            <div class="carousel-item item-2">
                                <div class="carouselCard">
                                    <div class="cardAva">
                                        <img src="assets/images/Ava.svg">
                                    </div>
                                    <div class="cardText">
                                        <div class="avaName">Валентин</div>

                                        <div class="avaMark"><img src="assets/images/mark.svg"></div>
                                        <div class="avaText">Все прошло великолепно. Консультация на высоком уровне, с прекрасным знанием и понимание вопроса, документы подготовлены в кратчайшие сроки. Огромное спасибо! Обязательно будем обращаться еще.</div>
                                    </div>
                                </div>
                                <a class="arrow arrow-prev" href="#item-1"></a>
                                <a class="arrow arrow-next" href="#item-3"></a>
                            </div>

                            <div class="carousel-item item-3">
                                <div class="carouselCard">
                                    <div class="cardAva">
                                        <img src="assets/images/Ava.svg">
                                    </div>
                                    <div class="cardText">
                                        <div class="avaName">Александр</div>

                                        <div class="avaMark"><img src="assets/images/mark.svg"></div>
                                        <div class="avaText">Юристы фирмы показали себя как хорошие специалисты! Отправив им материалы и рассказав о задаче, получил исчерпывающие ответы на свои вопросы и рекомендации к тому, как следует поступить далее. Буду обращаться еще!</div>
                                    </div>
                                </div>
                                <a class="arrow arrow-prev" href="#item-2"></a>
                                <a class="arrow arrow-next" href="#item-1"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contacts">
            <a name="contacts"></a>
            <div class="container">
                <div class="contactsContent">
                    <div class="contentBlock">
                        <h2>Контакты юридической компании</h2>
                        <div class="contentText">
                            <div class="num"><a href="tel:+74951059057">+7 495 105 90 57</a></div>
                            <div class="sub">Станция метро Трубная, ул. Нижний кисельский переулок, 3 стр. 2 </div>
                            <div class="btnTop">
                                <div class="css-modal-details">
                                    <details>
                                        <summary>Оставить заявку</summary>
                                        <div class="cmc">
                                            <div class="cmt">
                                                <div class="call">
                                                    <div class="callHead">Оставьте заявку</div>
                                                    <div class="callText">Наш менеджер скоро свяжется с вами</div>
                                                    <form id="wdh_form" name="form" class="justify" method="post" action="">
                                                        <div class="callForm">
                                                            <div>
                                                                <input id="telNo" name="telNo" type="tel" class="tel" required placeholder="+7(___) ___-__-__" inputmode="text">
                                                                <span class="validity"></span>
                                                            </div>
                                                            <div>
                                                                <button class="btn" type="submit">Оставить заявку</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div class="agreement"><a class="a" href="./agree.php">Отправляя данные, вы соглашаетесь с политикой конфиденциальности</a></div>
                                                </div>
                                            </div>
                                    </details>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="map">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aaae5b2d500970d70fd5f1d4dea427f7b71f4b4c957666ba0451c229253a633be&amp;width=300&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="footer">
                <div class="footerFirst">
                    <div class="whiteLogo">
                        <img src="assets/images/logoWhite.svg">
                    </div>
                </div>
                <div class="footerSecond">
                    <div class="el"><a href="#find">Преимущества</a></div>
                    <div class="el"><a href="#suggest">Услуги</a></div>
                    <div class="el"><a href="#result">Результаты работы</a></div>
                    <div class="el"><a href="#questions">FAQ</a></div>
                    <div class="el"><a href="#contacts">Контакты</a></div>

                </div>
                <div class="footerThird">
                    <div>+7 495 105 90 57</div>
                    <div>С 10:00 до 19:00</div>
                    <span>
                        <div>Станция метро Трубная,<br> ул. Нижний кисельский переулок, 3 стр. 2</div>
                        <div class="agreement"><a href="./agree.php">Политика конфиденциальности</a></div>
                </div>
            </div>

    </footer>
    <script src="assets/script.js"></script>
    <script src="assets/scriptResult.js"></script>
    <script src="assets/scriptNumber.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>

</html>
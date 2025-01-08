<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/style.css', 'resources/css/reset.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&family=Open+Sans:wght@400;800&family=Tinos:wght@400;700&display=swap" rel="stylesheet">
    <title>AppleZone</title>
</head>
<body>


<header>
    <div class="header-line">
        <div class="img-logo">
            <img class="apple-img1" src="{{ Vite::asset('resources/img/AppleZoneLogo1.png') }}" alt="">
        </div>
        <nav>
            <div class="nav-container">
                <a class="nav-item" href="/">Главное</a>
                <a class="nav-item" href="garanty">Гарантия</a>
                <a class="nav-item" href="installment">Рассрочка</a>
                <a class="nav-item" href="contacts">Контакты</a>
                <a class="nav-item" href="catalog">Каталог</a>
                <a class="nav-item" href="login">Вход</a>
            </div>
        </nav>
    </div>
</header>

<footer>
    <div class="footer_g-container">
        <div class="footer_g-title">
            Гарантийные обязательства
        </div>
    </div>
    <div class="footer_g-containerFlex">
        <div class="footer_g-container1">
            <div class="footer_g-HonestlyTitle">
                Срок действия гарантии
            </div>
            <div class="footer_g-HonestlysubtitleContainer">
                <div class="footer_g-Container_date">
                    <div class="date-card">
                        <div class="dategaranty1">
                            Поддержанная техника <br> 3 месяца
                        </div>
                    </div>
                    <div class="date-card">
                        <div class="dategaranty2">
                            Новая техника <br> 1 год
                        </div>
                    </div>
                    <div class="date-card">
                        <div class="dategaranty3">
                            Дополнительная гарантия <br> 2 года
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>



<latest-episode>
    <div class="title-container">
        <div class="latest-title">
            Частые вопросы
        </div>
        <div class="episodes-button">
            <a href="question.html" class="view-btn">Не нашли ответа на свой вопрос?</a>
        </div>
    </div>
</latest-episode>


<cards>
    <div class="card-container">


        <div class="cards-holder1">
            <div class="card-right">
                <div class="card-title1">
                    На что распространяется гарантия Apple?
                </div>
                <div class="card-subtitle1">
                    Настоящая гарантия не распространяется на:
                    <br>а) расходные материалы, например аккумуляторы или защитные покрытия, склонные к износу, кроме тех случаев, когда причинами неисправности являются дефекты материалов или качества изготовления; <br>
                    b) косметические повреждения, включая помимо прочего царапины, вмятины и сломанные пластиковые детали портов;<br>
                    с) повреждения, вызванные использованием с другими изделиями; <br>d) повреждения в результате несчастных случаев, плохого обращения, неправильного использования, контакта с водой, огнем, землетрясения или других внешних воздействий; <br>е) повреждения в результате использования Изделия Apple в нарушение опубликованных рекомендаций Apple;
                    <br>f) повреждения в результате обслуживания (включая обновления и расширения), выполненного лицами, не являющимися представителями компании Apple или Авторизованными Сервисными центрами Apple («ААЅР»);
                    <br>g) Изделия Apple, у которых были изменены функциональное назначение или возможности без письменного разрешения компании Apple;
                    <br>һ) дефекты, возникшие в результате нормального износа или нормального старения Изделия Apple;
                    <br> і) случаи, когда какой-либо серийный номер удален с Изделия Apple или поврежден;
                    <br>j) украденное Изделие Apple или Изделие Apple, в отношении которого у компании Apple есть все основания полагать, что оно было украдено, исходя из информации, предоставленной правоохранительными органами.
                </div>
            </div>
        </div>


        <div class="cards-holder1">
            <div class="card-right">
                <div class="card-title1">
                    Какие обязательства Apple в случае наступления гарантийного случая?
                </div>
                <div class="card-subtitle1">
                    В случае подтверждения случая, подпадающего под гарантию, компания Apple по своему усмотрению либо:
                    <br>a) произведет ремонт Изделия Apple с использованием новых или бывших в употреблении запчастей, эквивалентных новым по производительности и надежности; либо<br> b) заменит Изделие Apple на изделие, как минимум функционально идентичное Изделию Apple и изготовленное из новых и (или) бывших в употреблении запчастей, которые эквивалентны новым по производительности и надежности;
                </div>
            </div>
        </div>

        <div class="cards-holder1">
            <div class="card-right">
                <div class="card-title1">
                    Основания для отказа в бесплатном ремонте у нас в магазине:
                </div>
                <div class="card-subtitle1">
                    Ремонт по гарантийному талону осуществляется в случае обнаружения заводского брака. Гарантия не распространяется на случаи, когда устройство вышло из строя не по вине производителя.<br>
                    К таким ситуациям относятся:
                    <br>a) повреждения из-за попадания жидкости, механических воздействий, стихийных или техногенных катастроф и др.;
                    <br>b) проблемы, вызванные некорректным использованием (применением не по назначению и/или с нарушением условий, указанных в инструкции к устройству).
                    <br>c) некоторых случаях сервисный центр может отказать в бесплатном ремонте, если на устройстве будут обнаружены:
                    <br>d) Jailbreak и другие следы взлома файловой системы;
                    <br>e) установка программного обеспечения бета-версии.
                </div>
            </div>
        </div>
    </div>
    </div>


    <footer>
        <div class="footer-container1">
            <div class="footer-text1">
                Сайт носит сугубо информационный характер и не является публичной офертой, определяемой Статьей 437 (2) ГК РФ. Apple, логотип Apple и изображения Apple являются зарегистрированными товарными знаками компании Apple Inc. в США и других странах. App Store является знаком обслуживания компании Apple Inc. Instagram принадлежит компании Meta, признанной экстремистской организацией и запрещенной в РФ.
            </div>
        </div>
    </footer>

</cards>

</body>
</html>
